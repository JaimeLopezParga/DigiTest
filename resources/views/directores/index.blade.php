@extends('layouts.master')

@section('page-content')
    <div class="container-fluid"></div>
        <div class="row bg-3">
            <div class="col">
                <h3>Directores</h3>
            </div>
        </div>
    </div>

    <div class="container-full-height d-flex justify-content-center align-items-center bg-radial-gradient" style="height: 60vh;">
        <div class="row">
            <div class="col-lg-12 mb-2">
                <div class="card mx-5">
                    <div class="card-header">
                        <b>Lista de Directores</b>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    <th>Peliculas hechas</th>
                                    <th colspan="2">Manejo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($directores as $director)
                                <tr>
                                    <td class="align-middle">{{$director->id}}</td>
                                    <td class="align-middle">{{$director->director_nombre}}</td>
                                    <td class="align-middle">{{$director->director_cantidad}}</td>

                                    <td class="align-middle">
                                        <form method="POST" action="{{route('directores.destroy', $director->id)}}">
                                            @csrf
                                            @method('delete')
                                            <button data-toggle="tooltip" data-placement="top" title="Borrar">
                                                <i class="fa-solid fa-delete-left"></i>
                                            </button>
                                        </form>
                                    </td>

                                    <td class="align-middle">
                                        <a href="{{route('directores.edit', $director->id)}}" class="btn" data-toggle="tooltip" data-placement="top" title="Editar">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <container>
                <div class="card mx-5 bg-3">
                    <div class="card-header">
                        <i>Agregar director</i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('directores.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="d_nombre">Nombre Director</label>
                                <input type="text" id="d_nombre" name="director_nombre" class="form-control @error('director_nombre') is-invalid @enderror" value="{{old('director_nombre')}}">
                            </div>
                            <div class="form-group">
                                <div class="row"> 
                                    <div class="col-12 my-1">
                                        <button class="btn btn-warning" type="reset">Cancelar</button>
                                    </div>
                                    <div class="col-12 my-1">
                                        <button class="btn btn-success" type="submit">Aceptar</button>
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
@endsection