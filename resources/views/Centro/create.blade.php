@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Crear centro</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'Centro.store']) !!}
                        <div class="form-group">
                            {!! Form::label('telefono', 'Telefono') !!}
                            {!! Form::text('telefono',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección') !!}
                            {!! Form::text('direccion',null,['class'=>'form-control' , 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
