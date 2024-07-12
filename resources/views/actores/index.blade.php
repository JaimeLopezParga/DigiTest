@extends('layouts.master')

@section('page-content')
<div class="container-fluid"></div>
    <div class="row">
        <div class="col">
            <h3>Actores</h3>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row">
        <div class="col-10">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Peliculas actuadas</th>
                        <th colspan="2">Manejo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actores as $actor)
                    <tr>
                        <td class="align-middle">{{$actor->actor_id}}</td>
                        <td class="align-middle">{{$actor->actor_nombre}}</td>
                        <td class="align-middle">{{$actor->actor_cantidad}}</td>

                        <td class="align-middle">
                            <form method="POST" action="{{route('actores.destroy', $actor->id)}}">
                                @csrf
                                @method('delete')
                                <button>
                                    <span>D</span>
                                </button>
                            </form>
                        </td>

                        <td class="align-middle">
                            <a href="{{route('actores.edit', $actor->id)}}" class="btn">
                                <span class="material-icons">edit</span>
                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-2">
            <h1>1</h1>
        </div>
    </div>

    <br>

    <div class="row">
        <container>
            <div class="card">
                <div class="card-header">
                    Agregar actor
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('actores.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="a_nombre">Nombre Actor</label>
                            <input type="text" id="a_nombre" name="actor_nombre" class="form-control @error('actor_nombre') is-invalid @enderror" value="{{old('actor_nombre')}}">
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
@endsection