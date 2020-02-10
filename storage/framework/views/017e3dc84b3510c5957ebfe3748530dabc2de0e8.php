<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="main-panel">
    <div class="content-wrapper">



<div class="row">

    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">

            	<div class="row">
            		<h3 class="font-weight-semibold">Proveedores de referencia</h3>
                <hr />
            	</div>
              <div class="row">
                <h4 class="card-title mb-0"><i>Estas buscando: </i><?php echo e($val[0]->marca); ?> <?php echo e($val[0]->modelo); ?> <?php echo e($val[0]->version); ?></h4>
              </div>

      

              <?php echo e(var_dump($quest)); ?>

             



            </div>
        </div>
    </div>
</div>
</div>





</div><!-- content -->
</div><!-- main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.interior', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/papa/proyectos/7vidas/resources/views/express/paso4.blade.php ENDPATH**/ ?>