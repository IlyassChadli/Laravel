@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Página Centro</div>

                <div class="panel-body">
                    @include('flash::message')
                    {!! Form::open(['route' => 'Centro.create', 'method' => 'get']) !!}
                    {!!   Form::submit('Crear centro', ['class'=> 'btn btn-primary'])!!}
                    {!! Form::close() !!}

                    <br><br>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Centro</th>
                        </tr>

                        @foreach ($centros as $centro)


                            <tr>
                                <td>{{ $centro->direccion }}</td>
                                <td>{{ $centro->telefono }}</td>
                                <td>{{ $centro->id }}</td>

                                <td>
                                    {!! Form::open(['route' => ['Consulta.index'],'method' => 'get'])!!}
                                    {!!   Form::submit('Consultas', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}
                                </td>


                                <td>
                                    {!! Form::open(['route' => ['Centro.edit',$centro->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar centro', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['Centro.destroy',$centro->id], 'method' => 'delete']) !!}
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

