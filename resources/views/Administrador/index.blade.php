@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pagina Administradores</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'Administrador.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear Administrador', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Centro</th>


                            </tr>

                            @foreach ($administradors as $administrador)


                                <tr>
                                    <td>{{ $administrador->user->name }}</td>
                                    <td>{{ $administrador->centro_id }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['Administrador.edit',$administrador->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['Administrador.destroy',$administrador->id], 'method' => 'delete']) !!}
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


