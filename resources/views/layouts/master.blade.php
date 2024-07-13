<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap head  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .bg-1{
            background-color: #de07db;
        }
        .bg-2{
            background-color: #0721de;
        }
        .bg-3{
            background-color: #23f0e1;
        }
        .bg-4{
            background-color: #11cc0c;
        }
        .bg-5{
            background-color: #fcfc43;
        }
        .bg-radial-gradient{
            background: radial-gradient(circle, #ffffff, #e81010);
            color: white; /* Color del texto para buen contraste */
            padding: 20px; /* Padding para el contenido interno */
            border-radius: 5px; /* Bordes redondeados */
            /*height: 300px;*/ /* Altura para mostrar el degradado */
            display: flex;
            /* align-items: center;
            justify-content: center; */
        }
        .bg-radial-gradient-reverse{
            background: radial-gradient(circle, #e67f12, #ffffff);
            color: white; /* Color del texto para buen contraste */
            padding: 20px; /* Padding para el contenido interno */
            border-radius: 5px; /* Bordes redondeados */
            /*height: 300px;*/ /* Altura para mostrar el degradado */
            display: flex;
            /* align-items: center;
            justify-content: center; */
        }
        .bg-vertical-gradient {
            background: linear-gradient(to bottom, #e81010, #ffffff); /* Degradado de arriba a abajo */
            color: white; /* Color del texto para buen contraste */
            padding: 20px; /* Padding para el contenido interno */
            border-radius: 5px; /* Bordes redondeados */
            height: 100%; /* Altura para mostrar el degradado */
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <title>Home</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="row">
                <!-- user activo -->
                <div class="col-8">
                    @auth
                    Usuario <span class="fw-bold">{{Auth::user()->nombre}}  ( {{Auth::user()->rol->rol_nombre}} ) </span>
                    @endauth
                </div>

                <!-- último  login -->
                <div class="col-3 text-end d-none d-lg-block">
                    @auth
                    Último inicio de sesión: {{Auth::user()->u_login}}
                    @endauth
                </div>

                <!-- cerrar sesión -->
                <div class="col-1 text-end d-none d-lg-block">
                    <a href="{{route('usuarios.logout')}}" class="text-white">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a href="{{route('home.index')}}" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('peliculas.index')}}" class="nav-link">Peliculas</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('directores.index')}}" class="nav-link">Directores</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('actores.index')}}" class="nav-link">Actores</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('generos.index')}}" class="nav-link">Generos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('usuarios.index')}}" class="nav-link">Usuarios</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    {{-- Centro de pagina --}}
    @yield('page-content')
    
    {{-- Bootstrap body --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>