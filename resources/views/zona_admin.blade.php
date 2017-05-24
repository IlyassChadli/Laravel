@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class=" col-md-8 col-md-offset-2">
                <p class="header h1" style="">Panel Administracion</p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Eliga una Opción
                    </div>


                    <table class="  table ">

                        <tr>
                            <td class=" " align="" wigth="17%">
                                <a href="{{ url('/Medico') }}" style="color: #cccccc; "><b>
                                        Medicos</b></a>
                            </td>
                            <td class=" " align="" wigth="17%">
                                <a href="{{ url('/Paciente') }}" style="color: #cccccc; "><b>
                                        Pacientes
                                    </b></a>
                            </td>
                            <td class=" " align="" wigth="17%">
                                <a href="{{ url('/Administrador') }}" style="color: #cccccc; "><b>
                                        Administradores
                                    </b></a></td>
                        <tr>

                        </tr>
                        <tr>
                            <td class=" " align="" wigth="17%">
                                <a href="{{ url('/PersonalLab') }}" style="color: #cccccc; "><b>              Pers. Laboratorio
                                    </b></a>
                            </td> <td class=" " align="" wigth="17%">
                                <a href="{{ url('/Consulta') }}" style="color: #cccccc; "><b>               Consultas
                                    </b></a> &nbsp;
                            </td> <td class=" " align="" wigth="17%">
                                <a href="{{ url('/Cita') }}" style="color: #cccccc; "><b>               Citas
                                    </b></a>
                            </td>
                        </tr>

                        <tr>
                            <td class=" " align="" wigth="17%">
                                <a href="{{ url('/Centro') }}" style="color: #cccccc; "><b>              Centros
                                    </b></a>
                            </td> <td class=" " align="" wigth="17%">
                                <a href="{{ url('/Laboratorio') }}" style="color: #cccccc; "><b>               Laboratorios
                                    </b></a> &nbsp;
                            </td> <td class=" " align="" wigth="17%">
                                <a href="{{ url('/Informe') }}" style="color: #cccccc; "><b>               Informes
                                    </b></a>
                            </td>
                        </tr>
                        <tr>
                            <td class=" " align="" wigth="17%">
                               <b></b></a>
                            </td> <td class=" " align="" wigth="17%">
                                <a href="{{ url('/Solicitud') }}" style="color: #cccccc; "><b>               Solicitudes
                                    </b></a> &nbsp;
                            </td> <td class=" " align="" wigth="17%">
                               <b>  </b></a>
                            </td>
                        </tr>
                    </table>
                    </div>
            </div>
        </div>





</div>
@endsection
