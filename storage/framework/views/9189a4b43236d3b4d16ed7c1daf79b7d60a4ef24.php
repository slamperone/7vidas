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
                          <th> Categoria </th>
                          <th> Cuestionario </th>
                          <th> Acccion </th>

                        </tr>
                      </thead>
                      <tbody>
                           <?php $__currentLoopData = $cues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tupla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($tupla->categoria); ?></td>

                              <td>
                                <div style="width: 100%; border: 1px solid #000; height: 115px; overflow-y: scroll;">
                                  <pre>
                                
                                <?php echo e($tupla->preguntas); ?>

                                  </pre>
                                </div>
                              </td>

                              <td>

                                <i class="mdi mdi-delete text-danger icon-md" onclick="delQuest(<?php echo e($tupla->categoria); ?>)"></i>
                                <i class="mdi mdi-pencil text-warning icon-md"></i>


                              </td>



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

<?php echo $__env->make('layouts.cuestionarios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/papa/proyectos/7vidas/resources/views/cuestionarios/todos.blade.php ENDPATH**/ ?>