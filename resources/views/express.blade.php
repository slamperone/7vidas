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



            	<div class="row"> <!-- fila uno campos-->

            		<div class="col-6">
            			<div class="form-group">
				            <label class="label font-weight-bold">Categoria</label>
				                <div class="input-group">
				                    <select name="cat" id="cat" class="text-capitalize" on> 
				                        @foreach($categorias as $cat)
				                            <option value="{{$cat->id}}" >{{$cat->categoria}}</option>
				                        @endforeach
				                    </select>
				                </div>
				        </div>
            		</div>
            		<div class="col-6">
            			<div class="form-group">
				            <label class="label font-weight-bold">Marca</label>
				                <div class="input-group">
				                    <select name="cat" id="cat" class="text-capitalize"> 
				                        @foreach($categorias as $cat)
				                            <option value="{{$cat->id}}">{{$cat->categoria}}</option>
				                        @endforeach
				                    </select>
				                </div>
				        </div>
            		</div>

            	</div><!-- cierra fila uno campos-->

                

                <div class="row"> <!-- fila dos campos-->
            		<div class="col-6">sadsadasd</div>
            		<div class="col-6">fghfdghfdghfd</div>
            	</div>



            	<div class="row"> <!-- fila tres campos-->
            		<div class="col-6">sadsadasd</div>
            		<div class="col-6">fghfdghfdghfd</div>
            	</div>



            	<div class="row"> <!-- fila cuatro campos-->
            		<div class="col-6">sadsadasd</div>
            		<div class="col-6">fghfdghfdghfd</div>
            	</div>


            	<div class="row">
            		<div class="col-12"><hr /></div>
            	</div>



            	<div class="row"> <!-- fila botones-->
            		<div class="col-6">sadsadasd</div>
            		<div class="col-6">fghfdghfdghfd</div>
            	</div>




            </div>
        </div>
    </div>

</div>







</div><!-- content -->
</div><!-- main -->

@endsection
