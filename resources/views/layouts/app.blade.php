<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<style>
    html, body {
        background-color: #00CC99;

        color: #0d3625;
        font-family: 'Raleway', sans-serif;
        font-weight: lighter;
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
        background-color: #00CC99
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
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel ={!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="background-color: #00CC99" >
    <div id="app" style="background-color: #00CC99">
        <nav class="navbar navbar-default navbar-static-top"style="background-color: #080808;">
            <div class="container" >
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" >
                        <strong> GesMed</strong>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>
                    <ul class="nav navbar-nav"> </ul>
                    <!-- Right Side Of Navbar -->

                    <ul class="nav navbar-nav navbar-right">
                        &nbsp;
                    @if (Route::has('login'))

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                                <li>    <a href="{{ route('login') }}"  style="color: #cccccc; "><b>Login</b></a></li>
                                <li>    <a href="{{ url('/objetivos') }}" style="color: #cccccc; "><b>  Objetivos  </b></a>  </li>
                                <li>    <a href="{{ url('/autores') }}" style="color: #cccccc;"> <b> Autores      </b></a>  </li>
                                <li>    <a href="{{ url('/zona_admin') }}"> <b> Zona Admin</b></a>              </li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/home') }}"> <b> Menu</b></a></li>
                                    <li><a href="{{ url('/inicio') }}"> <b> Inicio</b></a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>



                                </ul>
                            </li>
                        @endif
                     @endif

                    </ul>
                    @if(Auth::user())

                    <ul class="nav navbar-nav navbar-right" style="margin-top: 4px">
                        <h4>Bienvenido</h4>
                    </ul>
                    @endif
                </div>
            </div>
        </nav>
        @if (count($errors) > 0)
            <div class="container">
                <div class="row ">
                    <div class="alert alert-danger col-md-8 col-md-offset-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        @endif


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
@if (Route::has('login'))
    <div class="top-right links">
        @if (Auth::check())

        @else
            <a href="{{ url('/login') }}"><b>Login</b></a>
            <a href="{{ url('/objetivos') }}">  Objetivos  </a>
            <a href="{{ url('/autores') }}" > Autores </a>
            <a href="{{ url('/zona_admin') }}"style="color: #cccccc;" ><b>Admin</b></a>
        @endif


    </div>
@endif