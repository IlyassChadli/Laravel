@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Página Citas</div>

                <div class="panel-body">






                    @include('flash::message')
                    {!! Form::open(['route' => 'Cita.create', 'method' => 'get']) !!}
                    {!!   Form::submit('Crear cita', ['class'=> 'btn btn-primary'])!!}
                    {!! Form::close() !!}

                    <br><br>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Fecha y hora</th>
                            <th>Medico</th>
                            <th>Pacicente</th>
                            <th>Consulta</th>
                            <th>Administrador</th>

                        </tr>

                        @foreach ($citas as $cita)


                            <tr>
                                <td>{{ $cita->fecha_hora }}</td>
                                <td>{{ $cita->medico->user->name }}</td>
                                <td>{{ $cita->paciente->user->name }}</td>
                                <td>{{ $cita->consulta_id }}</td>
                                <td>{{ $cita->administrador->user->name }}</td>
                                <td>
                                    {!! Form::open(['route' => ['Cita.edit',$cita->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['Cita.destroy',$cita->id], 'method' => 'delete']) !!}
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

