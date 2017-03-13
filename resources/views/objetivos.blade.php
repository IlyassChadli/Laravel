<?php
/**
 * Created by PhpStorm.
 * User: Ilyass
 * Date: 02/03/2017
 * Time: 17:58
 */?>

        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mi primer App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
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
</head>
<body>
<header><div class="title flex-center"> Objetivos </div></header>

<hr>
<nav class=" flex-center" style="background-color: #fff;">
    <table>
        <tr>
            <td>    <a href="{{ url('/welcome') }}" style="color: #cccccc; "><b>  Inicio  </b></a></td> <nbsp>
                <td>    <a href="{{ url('/autores') }}" style="color: #cccccc;"> <b> Autores  </b></a></td>
                <td>    <a href="{{ url('/registro') }}"style="color: #cccccc;"> <b> Registro</b></a></td>
        </tr>
    </table>
</nav>
<hr>
<div class="content flex-center">

    Los objetivos a cumplir con esta herramienta son:


    <ul>
        <li>Informatizar el sistema de gestion de pacientes de la clinica</li>
        <li>Reducir gastos de gestion al permitir el auto-registro de los usuarios</li>

    </ul>

</div>



<hr>
<nav class=" flex-center" style="background-color: #fff;">
    <table>
        <tr>
            <td>    <a href="{{ url('/objetivos') }}" style="color: #cccccc; "><b>  Objetivos  </b></a> &nbsp;&nbsp;&nbsp; </td>
            <td>    <a href="{{ url('/autores') }}" style="color: #cccccc;"> <b> Autores  </b></a> &nbsp;&nbsp;&nbsp;</td>
            <td>    <a href="{{ url('/registro') }}"style="color: #cccccc;"> <b> Registro</b></a> &nbsp;&nbsp;&nbsp;</td>
        </tr>
    </table>
</nav>

<hr>
</body>
</html>
