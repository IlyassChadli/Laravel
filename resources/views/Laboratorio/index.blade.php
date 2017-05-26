@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pagina Laboratorio</div>

                <div class="panel-body">
                    @include('flash::message')
                    {!! Form::open(['route' => 'Laboratorio.create', 'method' => 'get']) !!}
                    {!!   Form::submit('Crear laboratorio', ['class'=> 'btn btn-primary'])!!}
                    {!! Form::close() !!}

                    <br><br>
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Centro</th>
                            <th>Direccion</th>

                        </tr>

                        @foreach ($Laboratorio as $laboratorios)


                            <tr>
                                <td>{{ $laboratorios->centro_id }}</td>

                                <td>{{ $laboratorios->centro->direccion }}</td>
                                <td>
                                    {!! Form::open(['route' => ['PersonalLab.index'], 'method' => 'get']) !!}
                                    {!!   Form::submit('Personal Lab ', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}
                                </td>


                                <td>
                                    {!! Form::open(['route' => ['Laboratorio.edit',$laboratorios->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}
                                </td>

                                <td>
                                    {!! Form::open(['route' => ['Laboratorio.destroy',$laboratorios->id], 'method' => 'delete']) !!}
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

