@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar cita</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($cita, [ 'route' => ['Cita.update',$cita->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('fecha_hora', 'Fecha y hora de la cita') !!}


                            <input type="datetime-local" id="fecha_hora" name="fecha_hora" class="form-control" value="{{$cita->fecha_hora}}" />


                        </div>
                        <div class="form-group">
                            {!! Form::label('medico_id', 'Id del médico') !!}
                            {!! Form::text('medico_id',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('paciente_id', 'Id del paciente') !!}
                            {!! Form::text('paciente_id',null,['class'=>'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('administrador_id', 'Id del administrador') !!}
                            {!! Form::text('administrador_id',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('consulta_id', 'Id de la consulta') !!}
                            {!! Form::text('consulta_id',null,['class'=>'form-control', 'required']) !!}
                        </div>



                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
