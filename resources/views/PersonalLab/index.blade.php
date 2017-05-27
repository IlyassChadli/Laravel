@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Página Personal Laboratotio</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'PersonalLab.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear Personal Laborarotio', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Laboratorio</th>
                                <th>Facultativo</th>

                            </tr>

                            @foreach ($personalLabs as $personal)


                                <tr>
                                    <td>{{ $personal->user->name }}</td>
                                    <td>{{ $personal->lab_id}}</td>
                                    <td><?php
                                        if  ($personal->facultativo==1)
                                            $facultativo="si";
                                        elseif($personal->facultativo==0)
                                            $facultativo="no";
                                            ?> {{ $facultativo }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['PersonalLab.edit',$personal->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['PersonalLab.destroy',$personal->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
