@extends('layouts.master')

@section('page-content')
<div class="container-fluid"></div>
    <div class="row bg-3">
        <div class="col">
            <h3>Generos</h3>
        </div>
    </div>
</div>

<div class="container-full-height d-flex justify-content-center align-items-center bg-radial-gradient" style="height: 100vh;">
    <div class="row">
        <div class="col-lg-12 mb-2">
            <div class="card mx-5">
                <div class="card-header">
                    <b>Lista de Generos</b>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th colspan="2">Manejo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($generos as $genero)
                            <tr>
                                <td class="align-middle">{{$genero->genero_id}}</td>
                                <td class="align-middle">{{$genero->genero_nombre}}</td>
                                <td class="align-middle">{{$genero->genero_descripcion}}</td>

                                <td class="align-middle">
                                    <form method="POST" action="{{route('generos.destroy', $genero->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button data-toggle="tooltip" data-placement="top" title="Borrar">
                                            <i class="fa-solid fa-delete-left"></i>
                                        </button>
                                    </form>
                                </td>

                                <td class="align-middle">
                                    <a href="{{route('generos.edit', $genero->id)}}" class="btn" data-toggle="tooltip" data-placement="top" title="Editar">
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

    <hr>

    <div class="row">
        <container>
            <div class="card mx-5 bg-3">
                <div class="card-header">
                    <i>Agregar genero</i>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('generos.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="g_nombre">Nombre Genero</label>
                            <input type="text" id="g_nombre" name="genero_nombre" class="form-control @error('genero_nombre') is-invalid @enderror" value="{{old('genero_nombre')}}">
                        </div>
                        <div class="form-group">
                            <label for="g_descripcion">Descripción</label>
                            <input type="text" id="g_descripcion" name="genero_descripcion" class="form-control @error('genero_descripcion') is-invalid @enderror" value="{{old('genero_descripcion')}}">
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