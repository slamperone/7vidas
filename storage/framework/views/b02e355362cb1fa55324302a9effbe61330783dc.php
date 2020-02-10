<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="main-panel">
    <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="font-weight-semibold">Registro de valuaciones</h3>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Consecutivo </th>
                          <th> Categoria </th>
                          <th> Marca </th>
                          <th> Etapa </th>
                          <th> Valuador </th>
                          <th> Fecha </th>
                          <th> Estado </th>
                        </tr>
                      </thead>
                      <tbody>
                           <?php $__currentLoopData = $valuaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($val->id); ?></td>

                              <td><?php echo e($val->categoria); ?></td>

                              <td><?php echo e($val->marca); ?></td>

                              <td><?php echo e($val->etapa); ?></td>

                              <td><?php echo e($val->name); ?></td>

                              <td><?php echo e(date('d/m/Y h:s',strtotime($val->created_at))); ?></td>


                              <td>
                                <?php if( strtotime($val->created_at) <= strtotime("-36 hours")  ): ?>

                                <?php echo e("Cerrado"); ?>


                                <?php else: ?>
                                  <?php echo e("Abierto"); ?>


                                <?php endif; ?>

                              </td>
                            </tr>                              
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        
                      </tbody>
                    </table>

                    <?php echo e($valuaciones->links()); ?>



                  </div>
                </div>
              </div>
            </div>

    </div>
</div>            



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.interior', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/papa/proyectos/7vidas/resources/views/valuaciones/historia.blade.php ENDPATH**/ ?>