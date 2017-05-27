@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Página Informe</div>

                <div class="panel-body">
                    @include('flash::message')
                    {!! Form::open(['route' => 'Informe.create', 'method' => 'get']) !!}
                    {!!   Form::submit('Crear Informe', ['class'=> 'btn btn-primary'])!!}
                    {!! Form::close() !!}

                    <br><br>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th colspan="2">Acciones</th>
                        </tr>

                        @foreach ($informes as $informe)


                            <tr>
                                <td>{{ $informe->id }}</td>
                                <td>{{ $informe->centro->direccion }}</td>
                                <td>
                                    {!! Form::open(['route' => ['Informe.edit',$informe->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['Informe.destroy',$informe->id], 'method' => 'delete']) !!}
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

