@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar medico</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($medico, [ 'route' => ['Medico.update',$medico->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del medico') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('dni', 'DNI') !!}
                            {!! Form::text('dni',null,['class'=>'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('numColegiado', 'Numero de Colegiado ') !!}
                            {!! Form::text('numColegiado',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email ') !!}
                            {!! Form::text('email',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group ">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password',null,['class'=>'form-control ', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('direccion', 'Direccion ') !!}
                            {!! Form::text('direccion',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('consulta_id', 'Consulta Asignada ') !!}
                            {!! Form::text('consulta_id',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>>


                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
