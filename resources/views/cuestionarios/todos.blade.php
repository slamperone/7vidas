@extends('layouts.cuestionarios')


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
                          <th> Categoria </th>
                          <th> Cuestionario </th>
                          <th> Acccion </th>

                        </tr>
                      </thead>
                      <tbody>
                           @foreach($cues as $tupla)
                           <tr>
                              <td>{{$tupla->categoria}}</td>

                              <td>
                                <div style="width: 100%; border: 1px solid #000; height: 115px; overflow-y: scroll;">
                                  <pre>
                                
                                {{$tupla->preguntas}}
                                  </pre>
                                </div>
                              </td>

                              <td>

                                <i class="mdi mdi-delete text-danger icon-md" onclick="delQuest({{$tupla->categoria}})"></i>
                                <i class="mdi mdi-pencil text-warning icon-md"></i>


                              </td>



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
