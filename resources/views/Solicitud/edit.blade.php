@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Solicitud</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($solicitud, [ 'route' => ['Solicitud.update',$solicitud->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('medico_id', 'Id del médico') !!}
                            {!! Form::text('medico_id',$solicitud->medico_id,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('lab_id', 'Id del laboratorio') !!}
                            {!! Form::text('lab_id',$solicitud->lab_id,['class'=>'form-control' ]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('cita_id', 'Id de la cita') !!}
                            {!! Form::text('cita_id',$solicitud->cita_id,['class'=>'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
