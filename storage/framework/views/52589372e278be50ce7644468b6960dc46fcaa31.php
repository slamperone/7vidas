<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>


    <!-- Styles -->
    <link href="<?php echo e(asset('css/materialdesignicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/estilo.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('form-builder/css/jquery.rateyo.min.css')); ?>" rel="stylesheet">


    <link rel="shortcut icon" href="<?php echo e(asset('icon/icono.ico')); ?>" />
</head>
  <body>
    <div class="container-scroller">

         <?php echo $__env->yieldContent('content'); ?>


    </div><!-- container-scroller -->

    <!-- Scripts -->
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    <script src="<?php echo e(asset('js/base.js')); ?>" defer></script>
    <script src="<?php echo e(asset('form-builder/js/form-builder.js')); ?>" defer></script>
    <script src="<?php echo e(asset('form-builder/js/demo.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/misc.js')); ?>" defer></script>
    
<script>
  
  jQuery($ => {
  const fbTemplate = document.getElementById('build-wrap');
  $(fbTemplate).formBuilder();
});
  
</script>
  </body>
</html>    <?php /**PATH /Users/papa/proyectos/7vidas/resources/views/layouts/cuestionarios.blade.php ENDPATH**/ ?>