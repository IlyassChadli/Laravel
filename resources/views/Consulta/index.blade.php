@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pagina Consulta</div>

                <div class="panel-body">
                    @include('flash::message')
                    {!! Form::open(['route' => 'Consulta.create', 'method' => 'get']) !!}
                    {!!   Form::submit('Crear consulta', ['class'=> 'btn btn-primary'])!!}
                    {!! Form::close() !!}

                    <br><br>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Consulta</th>
                            <th>Centro</th>
                            <th>Médico</th>
                            <th colspan="2">Acciones</th>
                        </tr>

                        @foreach ($consultas as $consulta)


                            <tr>
                                <td>{{ $consulta->id }}</td>
                                <td>{{ $consulta->centro_id }}</td>
                                <td>{{ $consulta->medico_id }}</td>


                                <td>
                                    {!! Form::open(['route' => ['Consulta.edit',$medico->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['Consulta.destroy',$medico->id], 'method' => 'delete']) !!}
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
