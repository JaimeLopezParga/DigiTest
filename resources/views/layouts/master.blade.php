<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap head  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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