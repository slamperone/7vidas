@extends('layouts.interior')


@section('content')

@include('layouts.menu')

@include('layouts.sidebar')

<?php 

setlocale(LC_TIME, 'es_ES.UTF-8');

 ?>


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
                    
                    <div class="d-flex justify-content-between mb-2">
                          <h4 class="font-weight-semibold mb-0 text-success">
                          $ {{number_format($avaluo,2,'.',',')}}</h4>
                    </div>

                  <blockquote class="blockquote">

                      <p>Tu refrendo sería:</p>
                      <p class="text-right mb-0 text-capitalize"> {{ strftime('%A, %d de %B', strtotime("+30 days")) }} </p>
                      <p class="text-right mb-0 "> ${{ number_format(($avaluo*0.195),2,'.',',') }} </p>

                       
                  </blockquote>  

                    
                  </div>
                </div>
              </div>



              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="mb-2">Empeño Plus</h4>
                    
                   <div class="d-flex justify-content-between mb-2">
                        <h4 class="font-weight-semibold mb-0 text-success">
                           $ {{number_format($avaluo += ($avaluo*.10),2,'.',',') }}
                        </h4>
                    </div>

                    
                  <blockquote class="blockquote">

                      <p>Tu refrendo sería:</p>
                      <p class="text-right mb-0 text-capitalize"> {{ strftime('%A, %d de %B', strtotime("+30 days")) }} </p>
                      <p class="text-right mb-0"> ${{ number_format(($avaluo*0.232),2,'.',',') }} </p>

                       
                  </blockquote>

                    
                  </div>
                </div>
              </div>


    <div class="col-md-4 grid-margin average-price-card">
                <div class="card text-white">
                  <div class="card-body">
                    <div class="d-flex justify-content-between pb-2 align-items-center">
                        <h1 class="mb-2 display-4">Compra</h1>
                        <div class="icon-holder">
                                <i class="mdi mdi-coin"></i>
                        </div>
                    </div>    
                    
                   <div class="d-flex justify-content-between">
                        <h1 class="font-weight-semibold mb-0 text-success display-4">
                          $ {{ number_format($avaluo += ($avaluo*.15),2,'.',',') }}
                        </h1>
                        </div>

                    
                  </div>
                </div>
              </div>

    </div>


                  <div class="row justify-content-end"> <!-- fila botones-->
                <div class="col-4 mt-4">
                  <input type="button" class="btn btn-outline-secondary" value="Cancelar" onclick="location.href='{{ route('pendientes') }}'">

                  <input type="submit" class="btn btn-success" value="Continuar" onclick="location.href='{{ route('express4',$val[0]->id) }}'"/>

                </div>
              </div>




                  </div>



                </div>


              </div>
            </div>

    </div>
</div>            



@endsection
