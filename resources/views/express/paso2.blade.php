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
<table>
                    @foreach($refs as $proveedor)
                          <tr>
                            <td>
                              {{$proveedor->nombre}}
                            </td>
                            <td>

                               <button type="button"  class="btn btn-success btn-fw" 
                              onclick="
                              window.open('{{$proveedor->url}}', '_blank', 'toolbar=no, scrollbars=yes, resizable=yes, top=500,left=500,width=800, height=800')">Visitar</button>

                              <!--button type="button"  class="btn btn-success btn-fw" 
                              onclick="getElementById('marco').src ='{{$proveedor->url}}'" 
                              data-toggle="modal"  data-target="#myModal">Visitar</button-->
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
