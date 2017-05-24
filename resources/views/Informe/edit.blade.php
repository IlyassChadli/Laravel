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
                            {!! Form::label('medico_id', 'Id del medico') !!}
                            {!! Form::text('medico_id',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('solicitud_id', 'Id de la solicitud') !!}
                            {!! Form::text('solicitud_id',null,['class'=>'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('cita_id', 'Id de la cita') !!}
                            {!! Form::text('cita_id',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection