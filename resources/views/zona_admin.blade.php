@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class=" col-md-8 col-md-offset-2">
                <p class="header h1" style="color: #ffffff;">Panel Administración</p>
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        <h4> <strong> Elija una Opción</strong>  </h4>
                    </div>


                    <table class="  table ">

                        <tr>
                            <td class=" " align="" wigth="17%">
                                <a class="link " href="{{ url('/Medico') }}"><b>
                                        Médicos</b></a>
                            </td>
                            <td  align="" wigth="17%">
                                <a   class="link " href="{{ url('/Paciente') }}" ><b>
                                        Pacientes
                                    </b></a>
                            </td>
                            <td class=" " align="" wigth="17%">
                                <a   class="link " href="{{ url('/Administrador') }}" ><b>
                                        Administradores
                                    </b></a></td>
                        <tr>

                        </tr>
                        <tr>
                            <td class=" " align="" wigth="17%">
                                <a class="link "href="{{ url('/PersonalLab') }}"><b>              Pers. Laboratorio
                                    </b></a>
                            </td> <td class=" " align="" wigth="17%">
                                <a class="link "href="{{ url('/Consulta') }}" ><b>               Consultas
                                    </b></a> &nbsp;
                            </td> <td class=" " align="" wigth="17%">
                                <a class="link "href="{{ url('/Cita') }}" ><b>               Citas
                                    </b></a>
                            </td>
                        </tr>

                        <tr>
                            <td class=" " align="" wigth="17%">
                                <a class="link "href="{{ url('/Centro') }}" ><b>              Centros
                                    </b></a>
                            </td> <td class=" " align="" wigth="17%">
                                <a class="link "href="{{ url('/Laboratorio') }}" ><b>               Laboratorios
                                    </b></a> &nbsp;
                            </td> <td class=" " align="" wigth="17%">
                                <a class="link "href="{{ url('/Informe') }}" ><b>               Informes
                                    </b></a>
                            </td>
                        </tr>
                        <tr>
                            <td class=" " align="" wigth="17%">
                               <b></b>
                            </td> <td class=" " align="" wigth="17%">
                                <a class="link  " href="{{ url('/Solicitud') }}" ><b>               Solicitudes
                                    </b></a> &nbsp;
                            </td> <td class=" " align="" wigth="17%">
                               <b>  </b>
                            </td>
                        </tr>
                    </table>
                    </div>
            </div>
        </div>





</div>
@endsection
