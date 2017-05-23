@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Personal de laboratorio</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($Plaboratorio, [ 'route' => ['PersonalLaboratorio.update',$Plaboratorio->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('laboratorio_id', 'Id del laboratorio') !!}
                            {!! Form::text('laboratorio_id',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('facultativo', 'Facultativo') !!}
                            {!! Form::text('facultativo',null,['class'=>'form-control' ]) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
