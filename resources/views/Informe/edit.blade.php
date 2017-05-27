@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Informe</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($informe, [ 'route' => ['Informe.update',$informe->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('personalLab_id', 'Id del Tecnico de Lab') !!}
                            {!! Form::text('personalLab_id',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('lab_id', 'Id del Laboratorio') !!}
                            {!! Form::text('lab_id',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('medico_id', 'Id del medico') !!}
                            {!! Form::text('medico_id',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('paciente_id', 'Id de la Paciente') !!}
                            {!! Form::text('paciente_id',null,['class'=>'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('validado', 'Validado') !!}
                            {!! Form::checkbox ('validado',null,['class'=>'form-control']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
