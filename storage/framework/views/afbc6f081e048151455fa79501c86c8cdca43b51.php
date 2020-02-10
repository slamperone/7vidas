<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

	<!-- Typo & iconos -->
    <link href="<?php echo e(asset('css/materialdesignicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/ionicons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/typicons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/flag-icon.min.css')); ?>" rel="stylesheet">    


    <!-- Styles -->
    <link href="<?php echo e(asset('css/base.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/addons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/estilo.css')); ?>" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo e(asset('icon/icono.ico')); ?>" />
</head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">

      	 <?php echo $__env->yieldContent('content'); ?>


          </div><!-- page-body-wrapper ends -->
    </div><!-- container-scroller -->

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/base.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/addons.js')); ?>" defer></script>

    <script src="<?php echo e(asset('js/off-canvas.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/misc.js')); ?>" defer></script>
  </body>
</html>  	 <?php /**PATH /Users/papa/proyectos/7vidas/resources/views/layouts/exterior.blade.php ENDPATH**/ ?>