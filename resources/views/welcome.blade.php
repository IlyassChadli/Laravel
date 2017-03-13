<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
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
    <header style="background-color: #fff"> <div class="flex-center" style="margin-top: auto; align-content: center">

             <h1> Gestor Clínico </h1> </div> </header>

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
    <br>

            <main class="flex-center  m-b-md" style="background-color: #000;">
                <h1>Presentación</h1>
            </main>
                <div>



                <article class="content" style="margin-right:250px;margin-left: 250px; ">
                    <h1>Clínica Equis</h1>
                    <div  style=" color: #880000; text-align: justify; "><b><p>Desde la nueva Clínica Equis, nos llega la propuesta de desarrollar un herramienta
                                que les sirva como gestor de pacientes con la siguentes caracteristicas:.</p> </b>
                           <ul>
                               <li><b>La herramienta será usada para el registro de pacientes, gestionar sus citas y contendrá una pequeña historia clínica</b></li>
                               <li><b>Contendra datos de los clientes(Pacientes) y de los trabajadores(personal administrativo y sanitario)</b></li>
                               <li><b>Cada tipo de usuario tendrá determinados permisos:</b>
                                        <ul  style="font-weight: 250; font-family: Tahoma, Helvetica, Arial">
                                            <li>Los pacientes podrán realizar su propio registro</li>
                                            <li>Tanto P. Admin. como P. sanitario podrán editar datos de registro pacientes</li>
                                            <li>Los pacientes podrán solicitar una cita, anularla o ver sus citas programadas</li>
                                            <li>Los pacientes pueden observar los informes una vez han sido válidados por el médico</li>
                                            <li>P. Admin. debe validar las citas solicitadas y asignar médicos a cada cita</li>

                                        </ul></li>

                           </ul>




                    </div>
                </article>




                </div>



    <!--<aside class="flex-center  m-b-md" style="background-color: #fff;">

        <h4>ESTO PERTENECE AL ASIDE</h4>
        Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba
        Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba
        Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba
        Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba
        Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba
        Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba Texto de Prueba



    </aside>


    <div class="content">
                <table class="content">
                <div class="links">
                    <a >Documentation</a>
                    <a >Laracasts</a>
                    <a>News</a>
                    <a>Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                </table>
            </div>-->

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




        <footer><div class="m-b-md content button " style="margin-top: 50px; ">
            <br><strong>Autores:</strong></br>
                <br><b>Ilyass Chadli Candelario</b><br>
                <br><b>Esteban Rodriguez Ruiz</b><br>
            </div>
        </footer>


    </body>
</html>
