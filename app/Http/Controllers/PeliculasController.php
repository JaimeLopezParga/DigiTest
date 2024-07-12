<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeliculasRequest;
use App\Models\Pelicula;
use App\Models\Genero;
use App\Models\Director;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index(){
        $peliculas = Pelicula::all();
        $generos = Genero::all();
        $directores = Director::all();
        return view('peliculas.index', compact('peliculas', 'generos', 'directores'));
    }

    public function store(PeliculasRequest $request){
        $pelicula = new Pelicula();
        $pelicula->pelicula_nombre = $request->pelicula_nombre;
        $pelicula->pelicula_precio = $request->pelicula_precio;
        $pelicula->pelicula_stock = $request->pelicula_stock;
        $pelicula->pelicula_disponible = '1';
        $pelicula->pelicula_calificacion = '100';
        $pelicula->pelicula_cantidad_calificacion = '0';
        $pelicula->pelicula_estreno = $request->pelicula_estreno;
        $pelicula->pelicula_arriendos_mes = '0';
        $pelicula->pelicula_ruta_imagen = '###';
        $pelicula->pelicula_ex = '1';
        $pelicula->genero_id = $request->genero_id;
        $pelicula->director_id = $request->director_id;
        $pelicula->save();
        return redirect()->route('peliculas.index');
    }

    public function destroy(Pelicula $pelicula){
        $pelicula->delete();
        return redirect()->route('peliculas.index');
    }

    public function edit(Pelicula $pelicula){
        $generos = Genero::all();
        $directores = Director::all();
        return view('peliculas.edit', compact('pelicula', 'generos', 'directores'));
    }

    public function update(Pelicula $pelicula, Request $request){
        $pelicula->pelicula_nombre = $request->pelicula_nombre;
        $pelicula->pelicula_precio = $request->pelicula_precio;
        $pelicula->pelicula_stock = $request->pelicula_stock;
        $pelicula->pelicula_estreno = $request->pelicula_estreno;
        $pelicula->genero_id = $request->genero_id;
        $pelicula->director_id = $request->director_id;
        $pelicula->save();
        return redirect()->route('peliculas.index');
    }
}
