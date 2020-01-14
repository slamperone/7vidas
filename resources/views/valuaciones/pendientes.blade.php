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
                    <h3 class="font-weight-semibold">Registro de valuaciones</h3>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Consecutivo </th>
                          <th> Categoria </th>
                          <th> Marca </th>
                          <th> Etapa </th>
                          <th> Valuador </th>
                          <th> Fecha </th>
                          <th> Continuar </th>
                        </tr>
                      </thead>
                      <tbody>
                           @foreach($valuaciones as $val)
                           <tr>
                              <td>{{$val->id}}</td>

                              <td>{{$val->categoria}}</td>

                              <td>{{$val->marca}}</td>

                              <td>{{$val->etapa}}</td>

                              <td>{{$val->name}}</td>

                              <td>{{date('d/m/Y h:s',strtotime($val->created_at))}}</td>


                              <td><a href="{{route('express2Get',$val->id)}}">Continuar</a></td>
                            </tr>                              
                              @endforeach

                        
                      </tbody>
                    </table>

                    {{ $valuaciones->links() }}


                  </div>
                </div>
              </div>
            </div>

    </div>
</div>            



@endsection
