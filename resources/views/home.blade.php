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
                            <li>    <a href="{{ route('login') }}"  style="color: #cccccc; "><b>Opcion1</b></a></li>
                            <li>    <a href="{{ url('/objetivos') }}" style="color: #cccccc; "><b>  Opcion2  </b></a>  </li>
                            <li>    <a href="{{ url('/autores') }}" style="color: #cccccc;"> <b> Opcion3  </b></a> </li>

                        @elseif (Auth::user()->medico)
                        Opciones de Medico
                            <li>    <a href="{{ url('/') }}"  style="color: #cccccc; "><b>Opcion1</b></a></li>
                            <li>    <a href="{{ url('/') }}" style="color: #cccccc; "><b>  Opcion2  </b></a>  </li>
                            <li>    <a href="{{ url('/') }}" style="color: #cccccc;"> <b> Opcion3  </b></a> </li>

                        @elseif (Auth::user()->administrador)
                            Opciones de admin
                            <li>    <a href="{{ url('/') }}"  style="color: #cccccc; "><b>Opcion1</b></a></li>
                            <li>    <a href="{{ url('/') }}" style="color: #cccccc; "><b>  Opcion2  </b></a>  </li>
                            <li>    <a href="{{ url('/') }}" style="color: #cccccc;"> <b> Opcion3  </b></a> </li>

                            @elseif (Auth::user()->personalLab)

                                Opciones de laborarotio
                                <li>    <a href="{{ url('/') }}"  style="color: #cccccc; "><b>Opcion1</b></a></li>
                                <li>    <a href="{{ url('/') }}" style="color: #cccccc; "><b>  Opcion2  </b></a>  </li>
                                <li>    <a href="{{ url('/') }}" style="color: #cccccc;"> <b> Opcion3  </b></a> </li>

                            @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
