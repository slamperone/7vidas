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

            	<div class="row my-4"> <!-- fila uno campos-->

            		<div class="col-12">
  <form method="POST" action="{{ route('express31',$val[0]->id) }}" id="formStep2">
                        @csrf

                        <div class="row">
                          <div class="col-12">
                            <input 
                              type="hidden" 
                              value="0" 
                              name="cuantos" 
                              id="cuantos" 
                              min="2"
                              data-parsley-validation-threshold="1" 
                              data-parsley-trigger="keyup"
                              data-parsley-error-message="Recuerda que debes llenar por lo menos 2 campos de precio" 
                              data-parsley-type="number"
                              required>
                          </div>

                          <h3 class="msj"></h3>
                        </div>

<table width="90%">
  <tr>
    <th>Tienda</th>
    <th></th>
    <th>Precio encontrado</th>
  </tr>
                    @foreach($refs as $proveedor)
                    
                          <tr>

                            <td>
                              <div id="contieneProov{{$proveedor->id}}">
                              {{$proveedor->nombre}}
                              </div>
                            </td>

                            <td>

                              <?php

                              $valor = array(
                                $val[0]->marca,
                                $val[0]->modelo,
                                $val[0]->version
                              );

                              $pat = array(
                                '%%mca%%',
                                '%%mdl%%',
                                '%%vrs%%'                              );

                               ?>

                               <button 
                               type="button"  
                               class="btn btn-success btn-fw" 
                               id="proov{{$proveedor->id}}"
                              onclick="
                              window.open('<?= e(str_replace($pat, $valor, $proveedor->url)) ?>', '_blank', 'toolbar=no, scrollbars=yes, resizable=yes, top=500,left=500,width=1000, height=800')

                              /*getElementById('contieneProov{{$proveedor->id}}')
                              .style.padding= '20px 0';

                              getElementById('contieneProov{{$proveedor->id}}')
                              .style.background= 'orange';*/

                              ">Visitar</button>

                              <!--button type="button"  class="btn btn-success btn-fw" 
                              onclick="getElementById('marco').src ='{{$proveedor->url}}'" 
                              data-toggle="modal"  data-target="#myModal">Visitar</button-->
                            </td>

                            <td>
                              <input 
                                type="text" 
                                class="paraPrecios" 
                                placeholder="0.00" 
                                min="200" 
                                name="precio{{$proveedor->id}}" data-parsley-validation-threshold="1" 
                                data-parsley-trigger="keyup" 
                                data-parsley-type="number">
                            </td>
                          </tr>
                        
                    @endforeach


				               
 </table>

              <div class="row justify-content-end"> <!-- fila botones-->
                <div class="col-4 mt-4">
                  <input type="button" class="btn btn-outline-secondary" value="Cancelar">

                  <input type="submit" class="btn btn-success" value="Continuar" />

                </div>
              </div>
 </form>   		
            	</div><!-- cierra fila uno campos-->

                

             



            </div>
        </div>
    </div>
</div>
</div>





</div><!-- content -->
</div><!-- main -->

@endsection
