@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Administrador</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($administrador, [ 'route' => ['Administrador.update',$administrador->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del administrador') !!}
                            {!! Form::text('name',$administrador->user->name,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('dni', 'DNI') !!}
                            {!! Form::text('dni',$administrador->user->dni,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('centro_id', 'Centro  de Trabajo ') !!}
                            {!! Form::text('centro_id',$administrador->centro_id,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email ') !!}
                            {!! Form::text('email',$administrador->user->email,['class'=>'form-control', 'required']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección ') !!}
                            {!! Form::text('direccion',$administrador->user->direccion,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
