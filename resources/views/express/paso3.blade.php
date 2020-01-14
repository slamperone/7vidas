@extends('layouts.interior')


@section('content')

@include('layouts.menu')

@include('layouts.sidebar')


<div class="main-panel">
    <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <div class="row">
                    <h3 class="font-weight-semibold">Pre Cotización Express</h3> <hr />
                    </div>

                    <div class="row">
                        <h5>Por empeñar con nosotros tu 
                            <i class="text-primary">{{$val[0]->marca}} {{$val[0]->modelo}} {{$val[0]->version}} </i> 
                            <br />podrías recibir hasta:</h5>
                    </div>

    <div class="row mt-4">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="mb-2">Empeño tradcional </h4>
                    
                   <div class="d-flex justify-content-between">
                          <h4 class="font-weight-semibold mb-0 text-success">
                          $ {{number_format($avaluo,2,'.',',')}}</h4>
                        </div>

                    
                  </div>
                </div>
              </div>



              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title mb-2">Empeño Plus</h3>
                    
                   <div class="d-flex justify-content-between">
                        <h4 class="font-weight-semibold mb-0 text-success">
                           $ {{number_format($avaluo += ($avaluo*.10),2,'.',',') }}
                        </h4>
                        </div>

                    
                  </div>
                </div>
              </div>


    <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title mb-2">Compra</h3>
                    
                   <div class="d-flex justify-content-between">
                        <h4 class="font-weight-semibold mb-0 text-success">
                          $ {{ number_format($avaluo += ($avaluo*.15),2,'.',',') }}
                        </h4>
                        </div>

                    
                  </div>
                </div>
              </div>

    </div>




                  </div>



                </div>


              </div>
            </div>

    </div>
</div>            



@endsection
