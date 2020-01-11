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
              <div class="row">
                <h4 class="card-title mb-0"><i>Estas buscando: </i>{{$val[0]->marca}} {{$val[0]->modelo}} {{$val[0]->version}}</h4>
              </div>

            	<div class="row my-4"> <!-- fila uno campos-->

            		<div class="col-12">
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
                              window.open('<?= e(str_replace($pat, $valor, $proveedor->url)) ?>', '_blank', 'toolbar=no, scrollbars=yes, resizable=yes, top=500,left=500,width=800, height=800')

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
                              <input type="text" placeholder="$0.00" name="precio{{$proveedor->id}}">
                            </td>
                          </tr>
                        
                    @endforeach
				               
 </table>           		
            	</div><!-- cierra fila uno campos-->

                

             



            </div>
        </div>
    </div>
</div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="background: orange">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ifa fa-window-close">X</span></button>
                
            </div>            
            <!-- Modal Body -->
            <div class="modal-body">
                <iframe frameborder="0" width="100%" height="600" 
                src="" id="marco"></iframe>
            </div>
        </div>
    </div>
  </div>




</div><!-- content -->
</div><!-- main -->

@endsection
