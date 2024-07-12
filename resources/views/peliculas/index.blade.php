@extends('layouts.master')

@section('page-content')
<div class="container-fluid"></div>
    <div class="row">
        <div class="col">
            <h3>Peliculas</h3>
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
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Director</th>
                        <th>Genero</th>
                        <th>Calificacion</th>
                        <th>Estreno</th>
                        <th colspan="2">Manejo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peliculas as $pelicula)
                    <tr>
                        <td class="align-middle">{{$pelicula->pelicula_id}}</td>
                        <td class="align-middle">{{$pelicula->pelicula_nombre}}</td>
                        <td class="align-middle">$ {{$pelicula->pelicula_precio}}</td>
                        <td class="align-middle">{{$pelicula->pelicula_stock}}</td>
                        <td class="align-middle">{{$pelicula->director->director_nombre}}</td>
                        <td class="align-middle">{{$pelicula->genero->genero_nombre}}</td>
                        <td class="align-middle">{{$pelicula->pelicula_calificacion}}</td>
                        <td class="align-middle">{{$pelicula->pelicula_estreno}}</td>
                        <td class="align-middle">

                            <td class="align-middle">
                                <form method="POST" action="{{route('peliculas.destroy', $pelicula->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button>
                                        <span>D</span>
                                    </button>
                                </form>
                            </td>
    
                            <td class="align-middle">
                                <a href="{{route('peliculas.edit', $pelicula->id)}}" class="btn">
                                    <span class="material-icons">edit</span>
                                </a>
                            </td>
    
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
                        Agregar pelicula
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('peliculas.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="p_nombre">Nombre Pelicula</label>
                                <input type="text" id="p_nombre" name="pelicula_nombre" class="form-control @error('pelicula_nombre') is-invalid @enderror" value="{{old('pelicula_nombre')}}">
                            </div>
                            <div class="form-group">
                                <label for="p_precio">Precio</label>
                                <input type="number" min="1" max="50000" id="p_precio" name="pelicula_precio" class="form-control @error('pelicula_precio') is-invalid @enderror" value="{{old('pelicula_precio')}}">
                            </div>
                            <div class="form-group">
                                <label for="p_stock">Stock inicial</label>
                                <input type="number" min="1" max="99" id="p_stock" name="pelicula_stock" class="form-control  @error('pelicula_stock') is-invalid @enderror" value="{{old('pelicula_stock')}}">
                            </div>
                            <div class="form-group">
                                <label for="p_estreno">Estreno</label>
                                <input type="date" id="p_estreno" name="pelicula_estreno" class="form-control  @error('pelicula_estreno') is-invalid @enderror" value="{{old('pelicula_estreno')}}">
                            </div>
                            <div><span>Imagen</span></div>
                            <div class="form-group">
                                <label for="p_genero">Genero</label>
                                <select id="p_genero" name="genero_id" class="form-control">
                                    @foreach ($generos as $genero)
                                    <option value="{{$genero->id}}">{{$genero->genero_nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="p_director">Director</label>
                                <select id="p_director" name="director_id" class="form-control">
                                    @foreach ($directores as $director)
                                    <option value="{{$director->id}}">{{$director->director_nombre}}</option>
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