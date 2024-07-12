@extends('layouts.master')

@section('page-content')

<h3>Editar Director</h3>

    <hr>

    <div class="row">

        {{-- Datos Actuales --}}
        <div class="col-2">
            <div class="card">
                <div class="card-header">Director</div>
                <ul class="list-group list-group-item">
                    <b>Nombre: </b> {{$director->director_nombre}}
                </ul>
                <ul class="list-group list-group-item">
                    <b>Cantidad: </b> {{$director->director_cantidad}}
                </ul>
            </div>
        </div>

        {{-- Datos nuevos --}}
        <div class="col-6">
            <div class="card">
                <div class="card-header">Nuevos Datos</div>
                <div class="card-body">
                    <form method="POST" action="{{route('directores.update', $director->id)}}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="d_nombre">Nombre Director</label>
                            <input type="text" id="d_nombre" name="director_nombre" class="form-control" value="{{$director->director_nombre}}">
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