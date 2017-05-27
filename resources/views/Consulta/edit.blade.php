@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar consulta</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($consulta, [ 'route' => ['Consulta.update', $consulta->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('centro_id', 'Id del centro') !!}
                            {!! Form::text('centro_id',null,['class'=>'form-control' ]) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
