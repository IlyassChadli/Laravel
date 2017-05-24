@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pagina Solicitud</div>

                <div class="panel-body">
                    @include('flash::message')
                    {!! Form::open(['route' => 'Solicitud.create', 'method' => 'get']) !!}
                    {!!   Form::submit('Crear Solicitud', ['class'=> 'btn btn-primary'])!!}
                    {!! Form::close() !!}

                    <br><br>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Numero</th>
                            <th>Medico</th>
                            <th>Paciente</th>
                            <th colspan="2">Laboratorio</th>
                        </tr>

                        @foreach ($solicitudes as $solicitud)


                            <tr>
                                <td>{{ $solicitud->id }}</td>
                                <td>{{ $solicitud->medico_id->user_id->name}}</td>
                                <td>{{ $solicitud->cita_id->paciente_id->user_id->name}}</td>
                                <td>{{ $solicitud->laboratorio_id }}</td>

                                <td>
                                    {!! Form::open(['route' => ['Solicitud.edit',$solicitud->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['Solicitud.destroy',$solicitud->id], 'method' => 'delete']) !!}
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
    </div>
</div>
@endsection

