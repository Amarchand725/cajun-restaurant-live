<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo e(asset('public/frontend')); ?>/img/favicon.png" rel="icon" />
        <title>Elroyale Restaurant and Cafe</title>

        <!-- Fonts -->
        <link href="<?php echo e(asset('public/frontend/css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('public/frontend/css/fancybox.min.css')); ?>" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="<?php echo e(asset('public/frontend/css/slick.css')); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <?php echo $__env->yieldPushContent('style'); ?>
    </head>
    <body class="antialiased">
        <!-- header start -->
        <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- header end  -->

        <!-- main content -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- main content -->

        <!-- footer start -->
        <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- footer -->

        <!-- bottome footer -->
        <?php echo $__env->make('frontend.layouts.bottom-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- footer end  -->

        <script src="<?php echo e(asset('public/frontend/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontend/js/slick.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontend/js/script.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontend/js/fancybox.min.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <button id="scrollTops" class="actived fixed right-[30px] bottom-[30px] w-[50px] h-[50px] z-[10000] text-[20px] rounded-[3px] text-white bg-[#d3a971]">
        <i class="fa fa-angle-up"></i>
        </button>

        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH C:\wamp64\www\cajun-restaurant\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>