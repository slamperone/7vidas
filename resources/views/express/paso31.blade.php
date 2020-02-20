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
            		<h3 class="font-weight-semibold">Personalización de preoferta</h3>
                <hr />
            	</div>
              <div class="row">
                <p>El avalúo máximo para este producto es:  
                  <span class="font-weight-medium text-primary">$ {{number_format($avaluo,2,'.',',')}} </span><br />

                ¿Cuanto le ofrecerás al cliente?</p>    

            </div>

              <form method="POST" action="{{ route('express3') }}" id="formStep2">
                          @csrf
                  <input 
                          type="hidden" 
                          value="{{$val[0]->id}}" 
                          name="id"  
                          />
            <div class="row">

                  <div class="col-md-8 col-sm-12">
                    <label class="label font-weight-bold">Empeño tradicional <code>(max. {{$avaluo}})</code></label>
                              <input 
                                type="text" 
                                value="{{$avaluo}}" 
                                name="tradicional"  
                                max="{{$avaluo}}"
                                data-parsley-trigger="keyup"
                                data-parsley-error-message="No puedes ofecer mas que el avalúo"
                                class="form-control" 
                                data-parsley-type="number"
                                required>
                  </div>

                  <div class="col-md-8 col-sm-12">
                    <label class="label font-weight-bold">Empeño Plus <code>(max. {{$avaluo * 1.1}})</code></label>
                              <input 
                                type="text" 
                                value="{{$avaluo * 1.1}}" 
                                name="plus"  
                                max="{{$avaluo * 1.1}}"
                                data-parsley-trigger="keyup"
                                data-parsley-error-message="Revisa esa cantidad"
                                class="form-control"
                                data-parsley-type="number"
                                required>
                  </div>

                  <div class="col-md-8 col-sm-12">
                    <label class="label font-weight-bold">Compra <code>(max. {{$avaluo * 1.15}})</code></label>
                              <input 
                                type="text" 
                                value="{{$avaluo * 1.15}}" 
                                name="compra"  
                                max="{{$avaluo * 1.15}}"
                                data-parsley-trigger="keyup"
                                data-parsley-error-message="Parece que es cantidad no es correcta"
                                class="form-control" 
                                data-parsley-type="number"
                                required>
                  </div>

            </div>
                    

                <div class="row justify-content-end"> <!-- fila botones-->
                <div class="col-md-4 col-sm-12 mt-4">
                  <input type="button" class="btn btn-outline-secondary" value="Cancelar">

                  <input type="submit" class="btn btn-success" value="Continuar" />

                </div>
              </div>        


                  </form> 


           </div>        
        </div>
    </div>
</div>
</div>





</div><!-- content -->
</div><!-- main -->

@endsection
