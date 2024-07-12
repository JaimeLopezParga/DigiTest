@extends('layouts.master')

@section('page-content')
    <h3>Editar Pelicula</h3>

    <hr>

    <div class="row">

        {{-- Datos Actuales --}}
        <div class="col-2">
            <div class="card">
                <div class="card-header">Pelicula</div>
                <ul class="list-group list-group-item">
                    <b>Nombre: </b> {{$pelicula->pelicula_nombre}}
                </ul>
                <ul class="list-group list-group-item">
                    <b>Precio: </b> {{$pelicula->pelicula_precio}}
                </ul>
                <ul class="list-group list-group-item">
                    <b>Stock: </b> {{$pelicula->pelicula_stock}}
                </ul>
                <ul class="list-group list-group-item">
                    <b>Disponibilidad: </b> {{$pelicula->pelicula_disponibilidad}}
                </ul>
                <ul class="list-group list-group-item">
                    <b>Calificacion: </b> {{$pelicula->pelicula_calificacion}}
                </ul>
                <ul class="list-group list-group-item">
                    <b>Estreno: </b> {{$pelicula->pelicula_estreno}}
                </ul>
            </div>
        </div>

        {{-- Datos nuevos --}}
        <div class="col-6">
            <div class="card">
                <div class="card-header">Nuevos Datos</div>
                <div class="card-body">
                    <form method="POST" action="{{route('peliculas.update', $pelicula->id)}}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="p_nombre">Nombre Pelicula</label>
                            <input type="text" id="p_nombre" name="pelicula_nombre" class="form-control" value="{{$pelicula->pelicula_nombre}}">
                        </div>
                        <div class="form-group">
                            <label for="p_precio">Precio</label>
                            <input type="number" min="1" max="50000" id="p_precio" name="pelicula_precio" class="form-control" value="{{$pelicula->pelicula_precio}}">
                        </div>
                        <div class="form-group">
                            <label for="p_stock">Stock</label>
                            <input type="number" min="1" max="99" id="p_stock" name="pelicula_stock" class="form-control" value="{{$pelicula->pelicula_stock}}">
                        </div>
                        <div class="form-group">
                            <label for="p_estreno">Estreno</label>
                            <input type="date" id="p_estreno" name="pelicula_estreno" class="form-control">
                        </div>
                        <div><span>Imagen</span></div>
                        <div class="form-group">
                            <label for="p_genero">Genero</label>
                            <select id="p_genero" name="genero_id" class="form-control">
                                @foreach ($generos as $genero)
                                <option value="{{$genero->id}}" @if($pelicula->genero_id==$genero->id) selected="selected @endif">{{$genero->genero_nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="p_director">Director</label>
                            <select id="p_director" name="director_id" class="form-control">
                                @foreach ($directores as $director)
                                <option value="{{$director->id}}" @if($pelicula->director_id==$director->id) selected="selected @endif">{{$director->director_nombre}}</option>
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

                </div>
            </div>
        </div>

    </div>

@endsection