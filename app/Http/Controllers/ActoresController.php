<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActoresRequest;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActoresController extends Controller
{
    public function index(){
        $actores = Actor::all();
        return view('actores.index', compact('actores'));
    }

    public function store(ActoresRequest $request){
        $actor = new Actor();
        $actor->actor_nombre = $request->actor_nombre;
        $actor->actor_cantidad = '0';
        $actor->actor_ex = '1';
        $actor->save();
        return redirect()->route('actores.index');
    }

    public function destroy(Actor $actor){
        $actor->delete();
        return redirect()->route('actores.index');
    }

    public function edit(Actor $actor){
        return view('actores.edit', compact('actor'));
    }

    public function update(Actor $actor, Request $request){
        $actor->actor_nombre = $request->actor_nombre;
        $actor->save();
        return redirect()->route('actores.index');
    }
}
