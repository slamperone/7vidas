@extends('layouts.interior')


@section('content')

@include('layouts.menu')

@include('layouts.sidebar')


<div class="main-panel">
    <div class="content-wrapper">



<div class="row">

    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">

            	<div class="row">
            		<h3 class="font-weight-semibold">Valuar producto</h3> <hr />
            	</div>



            	<div class="row my-4"> <!-- fila uno campos-->

            		<div class="col-4">
            			<div class="form-group">
				            <label class="label font-weight-bold">Categoria</label>
				                <div class="input-group">
				            		<select name="cat" id="cat" class="text-capitalize form-control form-control-lg">
				                    	<option value="">...</option>
				                        @foreach($categorias as $cat)
				                            <option value="{{$cat->id}}" >
				                            	{{$cat->categoria}}
				                            </option>
				                        @endforeach
				                    </select>
				                </div>
				        </div>
            		</div>
            		<div class="col-4">
            			<div class="form-group">
				            <label class="label font-weight-bold">Subcategoria</label>
				                <div class="input-group">
				                    <select name="subcat" id="subcat" class="text-capitalize form-control form-control-lg">
				                    	<option value="">...</option> 
				                        
				                    </select>
				                </div>
				        </div>
            		</div>
            		<div class="col-4">
            			<div class="form-group">
				            <label class="label font-weight-bold">Marca</label>
				                <div class="input-group">
				                    <select name="marca" id="marca" class="text-capitalize form-control form-control-lg">
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
				                	<input type="text" name="modelo" id="modelo" class="form-control">
				                </div>
				        </div>
            		</div>
            		<div class="col-6">
            			<div class="form-group">
				            <label class="label font-weight-bold">Versión</label>
				                <div class="input-group">
				                	<input type="text" name="version" id="version" class="form-control">
				                </div>
				        </div>
            		</div>
            	</div><!-- cierra fila dos -->



            	<div class="row mb-4"> <!-- fila tres campos-->
            		<div class="col-6">
            			 <label class="label font-weight-bold">Año de manufactura</label>
            			<select name="ano" id="ano" class="form-control form-control-lg">
            				<option value="">...</option>
            				@for ($i = 0; $i < 3; $i++)
							    <option value="">{{date('Y') -$i}}</option>
							@endfor
            			</select>
            		</div>
            		<div class="col-6">
            			 <label class="label font-weight-bold">Estado del producto</label>
            			<select name="estado" id="estado" class="form-control form-control-lg">
            				<option value="">...</option>
            				<option value="0">Bueno</option>
            				<option value="1">Regular</option>
            				<option value="2">Malo</option>
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
	                                <input type="radio" class="form-check-input" name="condicion" id="condicion1" value="nuevo" checked=""> Nuevo 
	                                <i class="input-helper"></i></label>
	                            </div>
	            			</div>


	            			<div class="col-6">
	            				<div class="form-radio">
	                              <label class="form-check-label">
	                                <input type="radio" class="form-check-input" name="condicion" id="condicion2" value="usado"> Usado <i class="input-helper"></i></label>
	                            </div>
	            			</div>
            			</div>
            		</div>
            	</div>


            	<div class="row">
            		<div class="col-12"><hr /></div>
            	</div>



            	<div class="row justify-content-end"> <!-- fila botones-->
            		<div class="col-3">
            			<button type="button" class="btn btn-outline-secondary">Cancelar</button>
            			<button type="button" class="btn btn-success">Continuar</button>
            		</div>
            	</div>




            </div>
        </div>
    </div>

</div>







</div><!-- content -->
</div><!-- main -->

@endsection
