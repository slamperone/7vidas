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
            		<h3 class="font-weight-semibold">Valuar producto</h3> <hr />

					<?php if($errors->any()): ?>
					    <div class="alert alert-danger">
					        <ul>
					            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                <li><?php echo e($error); ?></li>
					            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					        </ul>
					    </div>
					<?php endif; ?>


            	</div>

<form method="POST" action="<?php echo e(route('express2')); ?>" id="formStep1" data-parsley-validate>
                        <?php echo csrf_field(); ?>

            	<div class="row my-4"> <!-- fila uno campos-->

            		<div class="col-4">
            			<div class="form-group">
				            <label class="label font-weight-bold">Categoria</label>
				                <div class="input-group">
				            		<select name="categoria" id="cat" class="text-capitalize form-control form-control-lg" required="required">
				                    	<option value="">...</option>
				                        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                            <option value="<?php echo e($cat->id); ?>" >
				                            	<?php echo e($cat->categoria); ?>

				                            </option>
				                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				                    </select>
				                </div>
				        </div>
            		</div>
            		<div class="col-4">
            			<div class="form-group">
				            <label class="label font-weight-bold">Subcategoria</label>
				                <div class="input-group">
				                    <select name="subcategoria" id="subcat" class="text-capitalize form-control form-control-lg" required="required">
				                    	<option value="">...</option> 
				                        
				                    </select>
				                </div>
				        </div>
            		</div>
            		<div class="col-4">
            			<div class="form-group">
				            <label class="label font-weight-bold">Marca</label>
				                <div class="input-group">
				                    <select name="marca" id="marca" class="text-capitalize form-control form-control-lg" required="required">
				                    	<option value="">...</option> 
				                        
				                    </select>
				                </div>
				        </div>
            		</div>

            	</div><!-- cierra fila uno campos-->

                

                <div class="row mb-4"> <!-- fila dos campos-->
            		<div class="col-6">
            			<div class="form-group">
				            <label class="label font-weight-bold">Modelo</label>
				                <div class="input-group">
				                	<input type="text" name="modelo" id="modelo" class="form-control" required="required">
				                </div>
				        </div>
            		</div>
            		<div class="col-6">
            			<div class="form-group">
				            <label class="label font-weight-bold">Versión</label>
				                <div class="input-group">
				                	<input type="text" name="version" id="version" class="form-control" required="required">
				                </div>
				        </div>
            		</div>
            	</div><!-- cierra fila dos -->



            	<div class="row mb-4">
            		<div class="col-6">
            			 <label class="label font-weight-bold">Año de manufactura</label>
            			<select name="ano" id="ano" class="form-control form-control-lg" required="required">
            				<option value="">...</option>
            				<?php for($i = 0; $i < 3; $i++): ?>
                                          <option value="<?php echo e(date('Y') -$i); ?>">
                                          <?php echo e(date('Y') -$i); ?>

                                          </option>
						<?php endfor; ?>
            			</select>
            		</div>
            		<div class="col-6">
            			 <label class="label font-weight-bold">Estado del producto</label>
            			<select name="estado" id="estado" class="form-control form-control-lg" required="required">
            				<option value="">...</option>
            				<option value="1">Bueno</option>
            				<option value="2">Regular</option>
            				<option value="3">Malo</option>
            			</select>
            		</div>
            	</div><!-- cierra fila tres -->



            	<div class="row"> <!-- fila cuatro campos-->

            		<div class="col-12">
            			<label class="label font-weight-bold">Condicion</label>
            			<div class="row">
	            			<div class="col-md-3 col-sm-6">
	            				<div class="form-radio">
	                              <label class="form-check-label">
	                                <input type="radio" class="form-check-input" name="nuevo" id="condicion1" value="1" checked="" > Nuevo 
	                                <i class="input-helper"></i></label>
	                            </div>
	            			</div>


	            			<div class="col-6">
	            				<div class="form-radio">
	                              <label class="form-check-label">
	                                <input type="radio" class="form-check-input" name="nuevo" id="condicion2" value="0"> Usado <i class="input-helper"></i></label>
	                            </div>
	            			</div>
            			</div>
            		</div>
            	</div>


            	<div class="row">
                        <input type="hidden" value="1" name="etapa">
                        <input type="hidden" value="<?php echo e(auth()->id()); ?>" name="valuador">
            		<div class="col-12"><hr /></div>
            	</div>



            	<div class="row justify-content-end"> <!-- fila botones-->
            		<div class="col-4">
            			<input type="button" class="btn btn-outline-secondary" value="Cancelar">

            			<input type="submit" class="btn btn-success" value="Continuar" />

            		</div>
            	</div>

</form>


            </div>
        </div>
    </div>

</div>







</div><!-- content -->
</div><!-- main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.interior', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/papa/proyectos/7vidas/resources/views/express/paso1.blade.php ENDPATH**/ ?>