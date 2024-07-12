@extends('layouts.master')

@section('page-content')

<h3>Editar Actor</h3>

    <hr>

    <div class="row">

        {{-- Datos Actuales --}}
        <div class="col-2">
            <div class="card">
                <div class="card-header">Actor</div>
                <ul class="list-group list-group-item">
                    <b>Nombre: </b> {{$actor->actor_nombre}}
                </ul>
                <ul class="list-group list-group-item">
                    <b>Cantidad: </b> {{$actor->actor_cantidad}}
                </ul>
            </div>
        </div>

        {{-- Datos nuevos --}}
        <div class="col-6">
            <div class="card">
                <div class="card-header">Nuevos Datos</div>
                <div class="card-body">
                    <form method="POST" action="{{route('actores.update', $actor->id)}}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="a_nombre">Nombre Actor</label>
                            <input type="text" id="a_nombre" name="actor_nombre" class="form-control" value="{{$actor->actor_nombre}}">
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