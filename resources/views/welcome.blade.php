<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Service Home Store</title>

        <!-- Link de Bootstrap-->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Iconos -->    
        <script src="https://kit.fontawesome.com/b91f129f33.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    </head>
    <body class= "fondo">
        <!--Navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navegacion">
            <a href="#" class="navbar-brand text-white navegacion_titulo">Service Home Store</a>
            <button class= "navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto ">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item active ">
                            <a href="{{ url('/home') }}" class="nav-link navegacion_letra">Inicio</a>
                        </li>
                    @else
                        <li class="nav-item active ">
                            <a href="{{ route('login') }}" class="nav-link navegacion_letra">Iniciar sesión</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item active ">
                            <a href="{{ route('register') }}" class="nav-link navegacion_letra">Registro</a>
                        </li>
                        @endif
                    @endauth
                @endif
                </ul>
            </div>
        </nav>
    </body>
</html>
