@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar paciente</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($paciente, [ 'route' => ['Paciente.update',$paciente->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del paciente') !!}
                            {!! Form::text('name',$paciente->user->name,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('dni', 'DNI ') !!}
                            {!! Form::text('dni',$paciente->user->dni,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email ') !!}
                            {!! Form::text('email',$paciente->user->email,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección ') !!}
                            {!! Form::text('direccion',$paciente->user->direccion,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <!--  meter Campo Password -->


                        <div class="form-group">
                            {!! Form::label('numPaciente', 'Número del paciente') !!}
                            {!! Form::text('numPaciente',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
