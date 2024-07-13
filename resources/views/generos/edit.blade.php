@extends('layouts.master')

@section('page-content')
    <h3>Editar Genero</h3>

    <hr>

    <div class="container-full-width container-full-height bg-radial-gradient-reverse">
        <div class="row">

            {{-- Datos Actuales --}}
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Genero</div>
                    <ul class="list-group list-group-item">
                        <b>Nombre: </b> {{$genero->genero_nombre}}
                    </ul>
                    <ul class="list-group list-group-item">
                        <b>Descripcion: </b> {{$genero->genero_descripcion}}
                    </ul>
                </div>
            </div>

            {{-- Datos nuevos --}}
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Nuevos Datos</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('generos.update', $genero->id)}}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="g_nombre">Nombre Genero</label>
                                <input type="text" id="g_nombre" name="genero_nombre" class="form-control" value="{{$genero->genero_nombre}}">
                            </div>
                            <div class="form-group">
                                <label for="g_descripcion">Descripción</label>
                                <input type="text" id="g_descripcion" name="genero_descripcion" class="form-control" value="{{$genero->genero_descripcion}}">
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

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection