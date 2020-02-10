<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="main-panel">
    <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="font-weight-semibold">Factores de Valuación</h3>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Subcategoria </th>
                          <th> Bueno </th>
                          <th> Regular </th>
                          <th> Malo </th>
                        </tr>
                      </thead>
                      <tbody>
                           <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tupla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($tupla->nombre); ?></td>

                              <td><?php echo e($tupla->bueno); ?></td>

                              <td><?php echo e($tupla->regular); ?></td>

                              <td><?php echo e($tupla->malo); ?></td>

                            </tr>                              
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>

    </div>
</div>            



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.interior', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/papa/proyectos/7vidas/resources/views/factores/todos.blade.php ENDPATH**/ ?>