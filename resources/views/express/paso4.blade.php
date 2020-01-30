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
            		<h3 class="font-weight-semibold">Proveedores de referencia</h3>
                <hr />
            	</div>
              <div class="row">
                <h4 class="card-title mb-0"><i>Estas buscando: </i>{{$val[0]->marca}} {{$val[0]->modelo}} {{$val[0]->version}}</h4>
              </div>

      

              {{var_dump($quest)}}
             



            </div>
        </div>
    </div>
</div>
</div>





</div><!-- content -->
</div><!-- main -->

@endsection
