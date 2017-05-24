@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection

@section('main-content')
  @include('partials/messages');
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Ingrese Datos del tipo de documento</b></div>
<!--aqui comienza el formulario-->

                    <div class="panel-body">

                  {!!Form::open(['route'=>'Documents.store','method'=>'POST'])!!}

                  <div class="form-group">
                      {!!Form::label('Nombre')!!}
                      {!!Form::text('nombre',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite tipo de documento Ej: Factura'])!!}
                  </div>

<center>
                    {!!Form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-danger btn-sm m-t-10'])!!}
                  {!!Form::close()!!}
</center>
                </div><!--aqui termina el formulario-->
                </div>
            </div>
        </div>
    </div>
@endsection
