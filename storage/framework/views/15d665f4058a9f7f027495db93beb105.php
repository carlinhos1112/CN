<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'CNH Social Digital '.date('Y').' | A Oportunidade de Realizar o Seu Sonho'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', 'O primeiro programa de inclusão social para habilitação no Brasil. Mais brasileiros dirigindo pelo país!'); ?>"/>
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords', 'cnh, brasil, social, primeira habilitacao'); ?>"/>
    <meta name="author" content="CNH Social Digital">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FFFFFF">
    <meta name="apple-mobile-web-app-status-bar-style" content="#FFFFFF">
    <meta name="msapplication-navbutton-color" content="#FFFFFF">
    <link rel="canonical" href="<?php echo e(url('/')); ?>" />
    <meta property="og:image" content="<?php echo e(url('/public/images/govbr.png')); ?>"/>
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', 'CNH Social Digital '.date('Y').' | A Oportunidade de Realizar o Seu Sonho'); ?>"/>
    <meta property="og:url" content="<?php echo e(url('/public/images/govbr.png')); ?>"/>
    <meta property="og:site_name" content="CNH Social Digital <?php echo e(date('Y')); ?> | A Oportunidade de Realizar o Seu Sonho"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="<?php echo $__env->yieldContent('description', 'O primeiro programa de inclusão social para habilitação no Brasil. Mais brasileiros dirigindo pelo país!'); ?>"/>
    <link rel="shortcut icon" href="<?php echo e(url('public/images/favicon.png')); ?>" />
    <link rel="shortcut icon" href="<?php echo e(url('public/images/favicon.png')); ?>" />
    <link rel="icon" href="<?php echo e(url('public/images/favicon.png')); ?>" sizes="32x32" />
    <link rel="icon" href="<?php echo e(url('public/images/favicon.png')); ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo e(url('public/images/favicon.png')); ?>" />
    <meta name="msapplication-TileImage" content="<?php echo e(url('public/images/favicon.png')); ?>" />
    <link href="<?php echo e(url('public/css/global.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('public/css/flatpickr.min.css')); ?>" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    body, html{font-family: "Inter", sans-serif;} button{cursor:pointer;}
    .loading__circle {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    }
    .loading__circle-spinner {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #2263ae;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: loading__circle-spin 0.6s linear infinite;
    }
    @keyframes loading__circle-spin {
    to {
        transform: rotate(360deg);
    }
    }
    </style>
    <script
        src="https://cdn.utmify.com.br/scripts/utms/latest.js"
        data-utmify-prevent-subids
        data-utmify-ignore-iframe
        async
        defer
    ></script>
    <script>
        window.googlePixelId = "6921a9b2dc44056dc291ad6d";
        var a = document.createElement("script");
        a.setAttribute("async", "");
        a.setAttribute("defer", "");
        a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel-google.js");
        document.head.appendChild(a);
    </script>
</head>
<body data-id="<?php echo e(uniqid()); ?>">
    <div class="loading__component">
        <div class="loading__bar"></div> 
        <div class="loading__circle">
            <div class="loading__circle-spinner"></div>
        </div>
    </div>
    <main id="content-page">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <script src="<?php echo e(url('public/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/js/jquery.mask.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/js/flatpickr.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/js/flatpickr.pt.js')); ?>"></script>
    <?php echo $__env->yieldContent('javascript'); ?>
</body>
</html><?php /**PATH /var/www/areadev.site/public_html/cnhsocial/resources/views/layouts/app.blade.php ENDPATH**/ ?>