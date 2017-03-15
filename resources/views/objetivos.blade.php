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
            <td>    <a href="{{ url('/') }}" style="color: #cccccc; "><b>  Inicio  </b></a></td>
                <td>    <a href="{{ url('/autores') }}" style="color: #cccccc;"> <b> Autores  </b></a></td>
                <td>    <a href="{{ url('/registro') }}"style="color: #cccccc;"> <b> Registro</b></a></td>
        </tr>
    </table>
</nav>
<hr>
<div class="container">
    <div class="row mt">
        <div class="col-lg-8">
            <h1>Our Process</h1>
            <hr>
            <h3><b>LEARN</b></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <br>
            <h3><b>DESIGN</b></h3>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
            <br>
            <h3><b>BUILD</b></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <br>
            <h3><b>EVOLVE</b></h3>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
        </div><!-- col-lg-8 -->
        <div class="col-lg-4">
            <ul class="process effect-2" id="process" style="position: relative; height: 827.797px; perspective-origin: 50% 871px;">
                <li style="position: absolute; left: 0px; top: 0px; animation-duration: 0.603269s;" class="animate"><img src="assets/img/process/pro01.png"></li>
                <li style="position: absolute; left: 0px; top: 206px; animation-duration: 0.642205s;" class="animate"><img src="assets/img/process/pro02.png"></li>
                <li style="position: absolute; left: 0px; top: 413px; animation-duration: 0.564773s;" class="animate"><img src="assets/img/process/pro03.png"></li>
                <li style="position: absolute; left: 0px; top: 620px;"><img src="assets/img/process/pro04.png"></li>
            </ul>
        </div><!-- col-lg-4 -->
    </div><!-- /row -->
</div>



<hr>
<nav class=" flex-center" style="background-color: #fff;">
    <table>
        <tr>
            <td>    <a href="{{ url('/welcome') }}" style="color: #cccccc; "><b>  Inicio  </b></a> &nbsp;&nbsp;&nbsp; </td>
            <td>    <a href="{{ url('/autores') }}" style="color: #cccccc;"> <b> Autores  </b></a> &nbsp;&nbsp;&nbsp;</td>
            <td>    <a href="{{ url('/registro') }}"style="color: #cccccc;"> <b> Registro</b></a> &nbsp;&nbsp;&nbsp;</td>
        </tr>
    </table>
</nav>

<hr>
</body>
</html>
