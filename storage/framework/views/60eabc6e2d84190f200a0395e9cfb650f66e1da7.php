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

            	<div class="row my-4"> <!-- fila uno campos-->

            		<div class="col-12">
  <form method="POST" action="<?php echo e(route('express3',$val[0]->id)); ?>" id="formStep2">
                        <?php echo csrf_field(); ?>

                        <div class="row">
                          <div class="col-12">
                            <input 
                              type="hidden" 
                              value="0" 
                              name="cuantos" 
                              id="cuantos" 
                              min="2"
                              data-parsley-validation-threshold="1" 
                              data-parsley-trigger="keyup"
                              data-parsley-error-message="Recuerda que debes llenar por lo menos 2 campos de precio" 
                              data-parsley-type="number"
                              required>
                          </div>

                          <h3 class="msj"></h3>
                        </div>

<table width="90%">
  <tr>
    <th>Tienda</th>
    <th></th>
    <th>Precio encontrado</th>
  </tr>
                    <?php $__currentLoopData = $refs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                          <tr>

                            <td>
                              <div id="contieneProov<?php echo e($proveedor->id); ?>">
                              <?php echo e($proveedor->nombre); ?>

                              </div>
                            </td>

                            <td>

                              <?php

                              $valor = array(
                                $val[0]->marca,
                                $val[0]->modelo,
                                $val[0]->version
                              );

                              $pat = array(
                                '%%mca%%',
                                '%%mdl%%',
                                '%%vrs%%'                              );

                               ?>

                               <button 
                               type="button"  
                               class="btn btn-success btn-fw" 
                               id="proov<?php echo e($proveedor->id); ?>"
                              onclick="
                              window.open('<?= e(str_replace($pat, $valor, $proveedor->url)) ?>', '_blank', 'toolbar=no, scrollbars=yes, resizable=yes, top=500,left=500,width=1000, height=800')

                              /*getElementById('contieneProov<?php echo e($proveedor->id); ?>')
                              .style.padding= '20px 0';

                              getElementById('contieneProov<?php echo e($proveedor->id); ?>')
                              .style.background= 'orange';*/

                              ">Visitar</button>

                              <!--button type="button"  class="btn btn-success btn-fw" 
                              onclick="getElementById('marco').src ='<?php echo e($proveedor->url); ?>'" 
                              data-toggle="modal"  data-target="#myModal">Visitar</button-->
                            </td>

                            <td>
                              <input 
                                type="text" 
                                class="paraPrecios" 
                                placeholder="0.00" 
                                min="200" 
                                name="precio<?php echo e($proveedor->id); ?>" data-parsley-validation-threshold="1" 
                                data-parsley-trigger="keyup" 
                                data-parsley-type="number">
                            </td>
                          </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


				               
 </table>

              <div class="row justify-content-end"> <!-- fila botones-->
                <div class="col-4 mt-4">
                  <input type="button" class="btn btn-outline-secondary" value="Cancelar">

                  <input type="submit" class="btn btn-success" value="Continuar" />

                </div>
              </div>
 </form>   		
            	</div><!-- cierra fila uno campos-->

                

             



            </div>
        </div>
    </div>
</div>
</div>





</div><!-- content -->
</div><!-- main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.interior', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/papa/proyectos/7vidas/resources/views/express/paso2.blade.php ENDPATH**/ ?>