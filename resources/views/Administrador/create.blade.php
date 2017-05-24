@extends('layouts.app')

@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Administrador</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'Administrador.store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del Administrador') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('dni', 'DNI') !!}
                            {!! Form::text('dni',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('centro_id', 'Centro  de Trabajo ') !!}
                            {!! Form::text('centro_id',null,['class'=>'form-control', 'required', 'autofocus']) !!}
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

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
