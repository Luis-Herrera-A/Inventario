@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection

@section('main-content')
  @include('partials/messages');
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  <table class="table table-bordered" id='my'>
              <thead>

                 <th>Nombre</th>
                 <th>Precio</th>
                 <th>Marca</th>
                 <th>Acción</th>
                 <th>Acción</th>
              </thead>
              <tbody>
                @foreach ($repoprovider as $repo)



                 <tr>

                    <td>{{$repo->proveedor}}</td>
                    <td>{{$repo->rut}}</td>
                    <td>{{$repo->telefono}}</td>
                    <td>{{$repo->direccion}}</td>
                    <td>{{$repo->email}}</td>
                    <td>
                 </tr>
                 @endforeach
              </tbody>


            </table>
                </div><!--aqui termina el formulario-->
                </div>
            </div>
        </div>
    </div>
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function(){
    $('#myTable').DataTable();
});</script>

@endsection
