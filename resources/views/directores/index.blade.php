@extends('layouts.master')

@section('page-content')

<div class="container-fluid"></div>
    <div class="row">
        <div class="col">
            <h3>Directores</h3>
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
                        <th>Peliculas hechas</th>
                        <th colspan="2">Manejo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($directores as $director)
                    <tr>
                        <td class="align-middle">{{$director->director_id}}</td>
                        <td class="align-middle">{{$director->director_nombre}}</td>
                        <td class="align-middle">{{$director->director_cantidad}}</td>

                        <td class="align-middle">
                            <form method="POST" action="{{route('directores.destroy', $director->id)}}">
                                @csrf
                                @method('delete')
                                <button>
                                    <span>D</span>
                                </button>
                            </form>
                        </td>

                        <td class="align-middle">
                            <a href="{{route('directores.edit', $director->id)}}" class="btn">
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
                    Agregar director
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