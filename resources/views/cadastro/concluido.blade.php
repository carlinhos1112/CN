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
                        <h1 class="text-2xl font-bold text-[#1B4F9B] mb-4">✔ Processo concluído com sucesso!</h1>
                    </div>
                     <p class="leading-relaxed mb-4">
                        Seu processo de cadastro no <strong>CNH Social 2025</strong> foi concluído com sucesso. Os dados de agendamento estão sendo registrados em nosso sistema.
                    </p>
                    <p class="leading-relaxed mb-4">
                        Você receberá todas as informações necessárias e os próximos passos diretamente no seu
                        <strong>e-mail</strong> e também por <strong>SMS</strong>.
                    </p>
                    <div class="bg-gray-50 border border-gray-200 p-4 rounded-xl mb-6">
                        <p class="font-semibold text-gray-700">Protocolo gerado:</p>
                        <p class="text-lg font-bold text-gray-900">CNH-2025-48271935</p>
                    </div>
                    <button id="btnContinuar" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 w-full py-6 text-lg font-semibold bg-[#1B4F9B] hover:bg-[#1B4F9B]/90 text-white">
                        Voltar para a página inicial
                    </button>
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
</style>
@endsection
@section('javascript')
<script>
const userData = JSON.parse(sessionStorage.getItem("userData"));
const userAddress = JSON.parse(sessionStorage.getItem("userAddress"));
if(!userData){
    window.location.href = "{{url('/login')}}";
} 

$(document).on('click', '#btnContinuar', function(){
    window.location.href = "{{url('/')}}";
})
</script>
@endsection