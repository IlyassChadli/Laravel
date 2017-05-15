@extends('layouts.app')

@section('content')
    <style>
        html, body {
            background-color: #27b50b;

            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            size: 15;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
<div class="container" style="background-color:#27b50b">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="background-color: #27b50b; color: #d7ebf6">
            <div class="panel panel-default"style="background-color: #27b50b; color: #d7ebf6">
                <div class="panel-heading" style="background-color:#27b50b; color: #d7ebf6">Registro</div>
                <div class="panel-body"style="background-color: #080808; color: #d7ebf6">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registerMedico') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"style="background-color: #080808; color: #d7ebf6">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6"style="background-color: #080808; color: #d7ebf6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"style="background-color: #080808; color: #d7ebf6">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6" style="background-color: #080808; color: #d7ebf6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tipo_user') ? ' has-error' : '' }}">
                            <label for="tipo_user" class="col-md-4 control-label">Tipo Usuario</label>

                            <select id="selction"name="tipo_user">
                                <option value=""></option>
                                <option value="paciente">Paciente</option>
                                <option value="admin">Administrador</option>
                                <option value="medico">Médico</option>
                                <option value="tel">TEL</option>

                            </select>
                               @if ($errors->has('tipo_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo_user') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
