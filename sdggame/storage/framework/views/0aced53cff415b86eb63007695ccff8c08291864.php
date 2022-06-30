<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SDG Game</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo e(url('css/main.css')); ?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo e(url('css/background.css')); ?>" type="text/css"> 
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    </head>
    <body>

        <?php echo $__env->make('back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <script type="text/javascript" src="<?php echo e(URL::asset('js/lottie.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(URL::asset('js/main.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\Users\colin\Documents\Mediacollege Amsterdam\Bewijzenmap\Leerjaar2\periode4\NVVN\sdggame\resources\views/layouts/standaard.blade.php ENDPATH**/ ?>