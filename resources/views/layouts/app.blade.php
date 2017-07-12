<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
<li>
<a
href="{!! route('meme.create')!!}">
Crear nuevo meme 
</a>
</li>
                                </ul>
                            </li>
                        @endif
<li><a href="{!! route('tag.index')!!}"> Lista de tags </a> </li>
<li><a href="{!! route('autor.index') !!}"> Lista de autores  </a> </li>


                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

<div id="foother" >

<footer>

<p>  Disclaimer: tiflojuegos tan s&oacute;lo recopila, almacena y administra las estupideces que se guardan aqu&iacute;. Tiflojuegos no se hace responsable del contenido mostrado aqu&iacute;, y si hiere u ofende a alguien. cada frace, meme, u contenido es responsavilidad exclusiva y tan solo de sus emisores. Tiflojuegos se guarda el derecho de editar, borrar o agregar memes en cualquier momento </p>
<br />

<p> Copiright (c) <a href="http://www.tiflojuegos.com"> Tiflojuegos.com </a> 2015-2017. Todos los derechos recerbados. </p>

</footer>

</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
