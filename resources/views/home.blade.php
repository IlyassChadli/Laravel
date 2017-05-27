@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body" style="color: #0d3625">

            @if(Auth::user()->paciente)
                        <p>Opciones de paciente</p>
                            <li>    <a href="{{ url('/Cita') }}"  style="color: #cccccc; "><b>Citas</b></a></li>


                        @elseif (Auth::user()->medico)
                        Opciones de Médico
                            <li>    <a href="{{ url('/Cita') }}"  style="color: #cccccc; "><b>Citas</b></a></li>
                            <li>    <a href="{{ url('/Paciente') }}" style="color: #cccccc; "><b>Pacientes</b></a></li>
                            <li>    <a href="{{ url('/Solicitud') }}" style="color: #cccccc;"> <b> Solicitudes  </b></a> </li>
                        <li>    <a href="{{ url('/Informe') }}" style="color: #cccccc;"> <b> Informes  </b></a> </li>
                        @elseif (Auth::user()->administrador)
                            Opciones de admin
                            <li>    <a href="{{ url('/zona_admin') }}"  style="color: #cccccc; "><b>Panel de control</b></a></li>


                            @elseif (Auth::user()->personalLab)

                                Opciones de personal de laborarotio
                                <li>    <a href="{{ url('/Informe') }}"  style="color: #cccccc; "><b>Informes</b></a></li>
                                <li>    <a href="{{ url('/Solicitud') }}" style="color: #cccccc; "><b>  Solicitudes  </b></a>  </li>
                                <li>    <a href="{{ url('/') }}" style="color: #cccccc;"> <b> Opcion3  </b></a> </li>

                            @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
