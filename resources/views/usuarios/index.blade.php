@extends('layouts.master')

@section('page-content')
<div class="container-fluid"></div>
    <div class="row">
        <div class="col">
            <h3>Usuarios</h3>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row">
        <div class="col-10"></div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        <th>Deuda</th>
                        <th>Ultimo registro</th>
                        <th>Rol</th>
                        <th>Existencia</th>
                        <th colspan="2">Manejo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td class="align-middle">{{$usuario->id}}</td>
                        <td class="align-middle">{{$usuario->nombre}}</td>
                        <td class="align-middle">{{$usuario->email}}</td>
                        <td class="align-middle">{{$usuario->password}}</td>
                        <td class="align-middle">{{$usuario->deuda}}</td>
                        <td class="align-middle">{{$usuario->u_login}}</td>
                        <td class="align-middle">{{$usuario->rol->rol_nombre}}</td>
                        <td class="align-middle">{{$usuario->usuario_ex?'Si':'No'}}</td>

                            <td class="align-middle">
                                @if(Auth::user()->id!=$usuario->id)
                                <form method="POST" action="{{route('usuarios.destroy', $usuario->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button>
                                        <span>D</span>
                                    </button>
                                </form>
                                @endif
                            </td>

                            <td class="align-middle">
                                @if(Auth::user()->id!=$usuario->id)
                                <form method="POST" action="{{route('usuarios.activar', $usuario->id)}}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top"
                                    title="{{$usuario->usuario_ex?'Desactivar':'Activar'}} Usuario">
                                        <span>{{$usuario->usuario_ex?'D':'A'}}</span>
                                    </button>
                                </form>
                                @endif
                            </td>
    
                            {{-- <td class="align-middle">
                                <a href="{{route('usuarios.edit', $usuario->id)}}" class="btn">
                                    <span class="material-icons">edit</span>
                                </a>
                            </td> --}}
    
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-2">
                <h1>1</h1>
            </div>
        </div>

        <br>

        <div class="row">
            <container>
                <div class="card">
                    <div class="card-header">
                        Agregar usuario
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('usuarios.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="nombre">Nombre Usuario</label>
                                <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{old('nombre')}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Usuario</label>
                                <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}">
                            </div>
                            {{-- <div class="form-group">
                                <label for="password2">Repetir Contraseña</label>
                                <input type="password" id="password2" name="password2" class="form-control @error('password2') is-invalid @enderror" value="{{old('password2')}}">
                            </div> --}}
                            <div class="form-group">
                                <label for="rol_id">Rol Usuario</label>
                                <select id="rol_id" name="rol_id" class="form-control">
                                    @foreach ($roles as $rol)
                                    <option value="{{$rol->id}}">{{$rol->rol_nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row"> 
                                    <div class="col-12">
                                        <button class="btn" type="reset">Cancelar</button>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn" type="submit">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <p>Problemas detectados</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>
                </div>
            </container>
        </div>

    </div>
</div>
@endsection