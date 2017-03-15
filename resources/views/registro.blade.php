<?php
/**
 * Created by PhpStorm.
 * User: Ilyass
 * Date: 02/03/2017
 * Time: 20:23
 */?><!DOCTYPE html>
<<<<<<< HEAD
< lang="{{ config('app.locale') }}">
=======
<div lang="{{ config('app.locale') }}">
>>>>>>> origin/master
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
<br>
<header style="background-color: #fff"> <div class="flex-center" style="margin-top: auto; align-content: center">

        <h1> Registro </h1> </div> </header>

<hr>
<nav class=" flex-center" style="background-color: #fff;">
    <table>
        <tr>
            <td>    <a href="{{ url('/') }}" style="color: #cccccc; "><b>  Inicio  </b></a></td>
            <td>    <a href="{{ url('/objetivos') }}" style="color: #cccccc; "><b>  Objetivos  </b></a></td>
            <td>    <a href="{{ url('/autores') }}" style="color: #cccccc;"> <b> Autores  </b></a></td>


        </tr>
    </table>
</nav>

<<<<<<< HEAD
<div style="position: static; color: #3c763d ">

    <form id="datos_paciente" action="">

        <
    </form>
</div>



<div id="app">


    <div class="container flex-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="">
                            <input type="hidden" name="_token" value="qs4DCQ3XKGYCtZLm9djrHl2D82sqJZ55kIxKBrBQ">

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required="" autofocus="">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required="">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Recordar
                                        </label>
                                    </div>
                                </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
</br>
                                    <a class="btn" href="">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
=======

<div class="flex-center">

    <form  id="contact_form " action="#" method="POST" enctype="multipart/form-data" style="margin-top: auto; align-content: center">
        <div class="row">
        <label for="name">Tu nombre:</label></br>
        <input id="name" class="input" name="name" type="text" value="" size="30" /></br>
        </div>
</br>
    <div class="row">
        <label for="email">Tu email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="30" /></br>
    </div>
    </br>
    <div class="row">
        <label for="message">Tu Passwor:</label><br />
        <input id="name" class="input" name="name" type="password" value="" size="30" /></br>
    </div>
    </br>
    <input id="submit_button" type="submit" value="Registrar" />
</form>
>>>>>>> origin/master
</div>
</br>
</br>
<nav class=" flex-center" style="background-color: #fff;">
    <table>
        <tr>
            <td>    <a href="{{ url('/') }}" style="color: #cccccc; "><b>  Inicio  </b></a></td>
            <td>    <a href="{{ url('/objetivos') }}" style="color: #cccccc; "><b>  Objetivos  </b></a></td>
            <td>    <a href="{{ url('/autores') }}" style="color: #cccccc;"> <b> Autores  </b></a></td>


        </tr>
    </table>
</nav>

</body>
</html>
