<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap head  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
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
        .bg-5{
            background-color: #fcfc43;
        }
    </style>
    <title>SphereBuster</title>
</head>
<body>

    <div class="container-full-height d-flex justify-content-center align-items-center bg-vertical-gradient" style="height: 100vh;">
        <div class="row">
            <div class="card w-100 bg-5">
                <div class="card-head">
                    <b><i>Bienvenido a <span style="color:#e81010">SphereBuster</span></i></b>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('usuarios.login')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-success">
                                Iniciar Sesión
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Mensaje --}}
                @if($errors->any())
                <div class="alert alert-warning">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

            </div>
        </div>

    </div>

    {{-- Bootstrap body --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>