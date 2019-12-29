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
            		<h3 class="font-weight-semibold">Proveedores de referencia</h3> <hr />
            	</div>



            	<div class="row my-4"> <!-- fila uno campos-->

            		<div class="col-4">
            			<div class="form-group">
				            <label class="label font-weight-bold">Categoria</label>
				                <div class="input-group">
				            		<select name="cat" id="cat" class="text-capitalize form-control form-control-lg">
				                    	<option value="">...</option>
				                        @foreach($referencias as $cat)
				                            <option value="{{$cat->id}}" >
				                            	{{$cat->categoria}}
				                            </option>
				                        @endforeach
				                    </select>
				                </div>
				        </div>
            		</div>
            		

            	</div><!-- cierra fila uno campos-->

                

             



            </div>
        </div>
    </div>

</div>







</div><!-- content -->
</div><!-- main -->

@endsection
