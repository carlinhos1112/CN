@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-background flex flex-col">
        <main class="flex-1 flex flex-col items-center justify-center px-4 py-8">
            <div class="w-full max-w-2xl mx-auto text-center space-y-6">
                <div class="flex justify-center mb-6">
                    <img src="{{ url('public/images/logo-cnh-F_kEybFc.png') }}" alt="CNH Social Digital" class="w-48 md:w-56 h-auto">
                </div>
                <h1 class="text-2xl md:text-3xl font-bold text-primary">CNH Social Digital</h1>
                <h2 class="text-xl md:text-2xl font-semibold text-foreground">2025: A Oportunidade de Realizar o Seu Sonho</h2>
                <p class="text-base md:text-lg text-foreground max-w-xl mx-auto">O primeiro programa de inclusão social para habilitação no Brasil</p>
                <div class="pt-4">
                    <button id="btnLogin" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 bg-govBlue hover:bg-govBlue/90 text-white font-semibold px-10 py-5 text-base rounded-full shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user mr-2 h-5 w-5"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        Entrar com o gov.br
                    </button>
                </div>
                <div class="pt-2">
                    <a href="#" class="text-govBlue hover:underline text-sm md:text-base font-medium">Saiba o que é o programa CNH Social Digital</a>
                </div>
                <div class="pt-8 space-y-1">
                    <p class="text-lg md:text-xl font-bold text-primary">Mais brasileiros dirigindo pelo país!</p>
                    <p class="text-lg md:text-xl font-bold text-primary">Conseguir sua CNH não é um sonho distante!</p>
                </div>
            </div>
        </main>
        <footer class="w-full">
            <img src="{{ url('public/images/footer-banner-BHdWF9j5.png') }}" alt="Banner decorativo com ícones de veículos" class="w-full h-auto object-cover">
        </footer>
        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground fixed bottom-6 right-6 h-14 w-14 rounded-full bg-govBlue hover:bg-govBlue/90 shadow-lg z-50" aria-label="Acessibilidade">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-6 w-6"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </button>
    </div>
@endsection
@section('javascript')
<script>
    $(document).on('click', '#btnLogin', function(){
        window.location.href = "{{url('/login')}}";
    })
</script>
@endsection