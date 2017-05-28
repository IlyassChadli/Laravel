@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Crear Informe</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'Informe.store']) !!}

                        <div class="form-group">
                            {!! Form::label('lab_id', 'Id del Laboratorio') !!}
                            {!! Form::text('lab_id',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('medico_id', 'Id del medico') !!}
                            {!! Form::text('medico_id',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('cita_id', 'Id de la cita') !!}
                            {!! Form::text('cita_id',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('paciente_id', 'Id de la Paciente') !!}
                            {!! Form::text('paciente_id',null,['class'=>'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('validado', 'Validado') !!}
                            {!! Form::select ('validado',array("No","Si"),['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('resultado', 'Resultado') !!}
                            {!! Form::text('resultado',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
