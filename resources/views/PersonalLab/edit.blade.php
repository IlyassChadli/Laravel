@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Personal de laboratorio</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($personalLab, [ 'route' => ['PersonalLab.update',$personalLab->id], 'method'=>'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name',$personalLab->user->name,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('dni', 'DNI ') !!}
                            {!! Form::text('dni',$personalLab->user->dni,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('direccion', 'Direccion ') !!}
                            {!! Form::text('direccion',$personalLab->user->direccion,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <!--  meter Campo Password -->

                        <div class="form-group">
                            {!! Form::label('lab_id', 'Laboratorio ') !!}
                            {!! Form::text('lab_id',$personalLab->lab_id,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('facultativo', 'Facultativo') !!}
                            {!! Form::select('facultativo', array('No','Si',),['class'=>'form-control' ])!!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
