@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection
@section('main-content')
  @include('partials/messages');
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Ubicacion de la Empresa</div>
                    <!--aqui comienza el formulario-->

                    <div class="panel-body">

                      {!!Form::open(['route'=>'Products.store','method'=>'POST'])!!}

                      <div class="form-group">
                          {!!Form::label('Nombre')!!}
                          {!!Form::text('nombre',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite Nombre Ej: Rolls Crocantes'])!!}
                      </div>
                      <div class="form-group">

                          {!!Form::label('Proveedor')!!}
                          {!!Form::select('prov_id',$providers,null,['id'=>'prov_id','class'=>'form-control'])!!}
                      </div>
                      <div class="form-group">
                          {!!Form::label('Valor Unitario')!!}
                          {!!Form::text('precio',null,['id'=>'precio','class'=>'form-control','placeholder'=>'Ingrese el Valor del producto, Ej: 1650'])!!}
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
