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
            		<h3 class="font-weight-semibold">Personalización de oferta</h3>
                <hr />
            	</div>
              <div class="row">
                <p>El avalúo máximo para este producto es: $ {{number_format($avaluo,2,'.',',')}} <br /></p>

                <p>¿Cuanto le ofrecerás al cliente?</p>    

            </div>


                  <form method="POST" action="{{ route('express3') }}" id="formStep2">
                        @csrf

                    <input 
                        type="hidden" 
                        value="{{$val[0]->id}}" 
                        name="id"  
                        >

                   <div class="row">
                          <div class="col-12">
                            <input 
                              type="text" 
                              value="{{$avaluo}}" 
                              name="cuanto"  
                              max="{{$avaluo}}"
                              data-parsley-trigger="keyup"
                              data-parsley-error-message="No puedes ofecer mas que el avalúo" 
                              data-parsley-type="number"
                              required>
                          </div>
                    </div>
                    

                <div class="row justify-content-end"> <!-- fila botones-->
                <div class="col-4 mt-4">
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

@endsection
