<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GESTMED - Inicio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #080808;

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
<header style="background-color: #080808"> <div class="flex-center" style="margin-top: auto; align-content: center">

        <h1 class="links"> GestMED </h1> </div> </header>

<hr>
<nav class=" flex-center" style="background-color: #080808;">
    <table>
        <tr>
            <td>    <a href="{{ url('/objetivos') }}" style="color: #cccccc; "><b>  Objetivos  </b></a> &nbsp;&nbsp;&nbsp; </td>
            <td>    <a href="{{ url('/autores') }}" style="color: #cccccc;"> <b> Autores  </b></a> &nbsp;&nbsp;&nbsp;</td>
            <td>    <a href="{{ url('/registro') }}"style="color: #cccccc;"> <b> Registro</b></a> &nbsp;&nbsp;&nbsp;</td>
        </tr>
    </table>
</nav>

<hr>
<br>

<main class="flex-center  m-b-md" style="background-color: #000;">
    <h1 style="color: #2ca02c">Presentación</h1>
</main>
<div >



    <article class="content" style=" background-color:#000 ;margin-right:250px;margin-left: 250px; ">
        <h1 style="color: #2ca02c; size: 35;">Clínica Equis</h1>
        <div  style=" color:  #cccccc; "><b><p>Desde la nueva Clínica Equis, nos llega la propuesta de desarrollar un herramienta
                    que les ayude en la gestión de la clínica con la siguentes caracteristicas:.</p> </b>
            <table style="color: #2ca02c; " >
                <b >La herramienta será usada para :</b >
                    <ul  style="  text-align: justify; "><b>Por Admins:</b>
                        <li>El registro de Clientes</li>
                        <li>Gestionar las citas de los Clientes</li>
                    </ul>
                    <ul  style="; text-align: justify; "><b>Por Medicos:</b>
                        <li>Solicitar pruebas para un Paciente (si son necesarias)</li>
                        <li>Consultar el informe de resultados del laboratorio correspondiente a un paciente</li>

                    </ul>
                    <ul  style=" text-align: justify; "><b>Por Personal de Laboratorio:</b>
                        <li>Realizara la pruebas de la solicitud</li>
                        <li>El Facultativo del laboratorio validará los informes </li>

                    </ul>
                    <ul  style=" text-align: justify; "><b>Por Clientes</b>
                        <li>Los Clientes podran pedir una cita, anularla</li>
                        <li>Podra solicitar el informe de resultados </li>

                    </ul>

            </table>

            <table >
                <img style="background-color: #080808; width: auto;  height: auto;" src="../images/clinica.png">

            </table>
        </div>
    </article>



</div>

<hr>
<nav class=" flex-center" style="background-color: #080808;">
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
