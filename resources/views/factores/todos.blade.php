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
                    <h3 class="font-weight-semibold">Factores de Valuación</h3>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Subcategoria </th>
                          <th> Bueno </th>
                          <th> Regular </th>
                          <th> Malo </th>
                        </tr>
                      </thead>
                      <tbody>
                           @foreach($val as $tupla)
                           <tr>
                              <td>{{$tupla->nombre}}</td>

                              <td>{{$tupla->bueno}}</td>

                              <td>{{$tupla->regular}}</td>

                              <td>{{$tupla->malo}}</td>

                            </tr>                              
                              @endforeach

                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>

    </div>
</div>            



@endsection
