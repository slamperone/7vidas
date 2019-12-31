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

            		<div class="col-12">
				  <label class="label font-weight-bold">Proveedores autorizados</label>


                          @foreach($refs as $proveedor)
                              <div id="ref " value="{{$proveedor->url}}" >
                              {{$proveedor->nombre}}
                              </div>
                              @endforeach
				               
            		</div>
            		

            	</div><!-- cierra fila uno campos-->

                

             



            </div>
        </div>
    </div>

</div>







</div><!-- content -->
</div><!-- main -->

@endsection
