@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection

@section('main-content')
  @include('partials/messages');
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ingrese Datos de Proveedor</div>
                    <!--aqui comienza el formulario-->

                    <div class="panel-body">

                  {!!Form::open(['route'=>'Providers.store','method'=>'POST'])!!}

                  <div class="form-group">
                      {!!Form::label('Nombre')!!}
                      {!!Form::text('nombre',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite Nombre Ej: Mattioni y Dubrock LTDA'])!!}
                  </div>
                  <div class="form-group">
                      {!!Form::label('RUT')!!}
                      {!!Form::text('rut',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite RUT, Ej: 77.777.777-7'])!!}
                  </div>
                  <div class="form-group">
                      {!!Form::label('TELEFONO')!!}
                      {!!Form::text('telefono',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite Telefono, Ej: +569 89099034'])!!}
                  </div>
                  <div class="form-group">
                      {!!Form::label('DIRECCION')!!}
                      {!!Form::text('direccion',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite Dirección, Ej: Mexicana #777'])!!}
                  </div>
                  <div class="form-group">
                      {!!Form::label('Correo Electronico')!!}
                      {!!Form::text('email',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite E-Mail, Ej:CineEstrela@cine.cl'])!!}
                  </div>
                  <div class="form-group">
                      {!!Form::hidden('estado',1)!!}

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
