<?php

namespace App\Http\Controllers;

use App\Http\Requests\DirectoresRequest;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectoresController extends Controller
{
    public function index(){
        $directores = Director::all();
        return view('directores.index', compact('directores'));
    }

    public function store(DirectoresRequest $request){
        $director = new Director();
        $director->director_nombre = $request->director_nombre;
        $director->director_cantidad = '0';
        $director->director_ex = '1';
        $director->save();
        return redirect()->route('directores.index');
    }

    public function destroy(Director $director){
        $director->delete();
        return redirect()->route('directores.index');
    }

    public function edit(Director $director){
        return view('directores.edit', compact('director'));
    }

    public function update(Director $director, Request $request){
        $director->director_nombre = $request->director_nombre;
        $director->save();
        return redirect()->route('directores.index');
    }
}
