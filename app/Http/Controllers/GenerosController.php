<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerosRequest;
use App\Models\Genero;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function index(){
        $generos = Genero::all();
        return view('generos.index', compact('generos'));
    }

    public function store(GenerosRequest $request){
        $genero = new Genero();
        $genero->genero_nombre = $request->genero_nombre;
        $genero->genero_descripcion = $request->genero_descripcion;
        $genero->genero_cantidad = '0';
        $genero->genero_ex = '1';
        $genero->save();
        return redirect()->route('generos.index');
    }

    public function destroy(Genero $genero){
        $genero->delete();
        return redirect()->route('generos.index');
    }

    public function edit(Genero $genero){
        return view('generos.edit', compact('genero'));
    }

    public function update(Genero $genero, Request $request){
        $genero->genero_nombre = $request->genero_nombre;
        $genero->genero_descripcion = $request->genero_descripcion;
        $genero->save();
        return redirect()->route('generos.index');
    }
}
