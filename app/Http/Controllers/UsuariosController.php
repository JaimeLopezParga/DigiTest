<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuariosRequest;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Gate;

class UsuariosController extends Controller
{

    public function index(){
        // if(Gate::denies('usuarios-listar')){
        //     return redirect()->route('home.index');
        // }
        $usuarios = Usuario::all();
        $roles = Rol::all();
        return view('usuarios.index', compact('usuarios', 'roles'));
    }
    
    public function login(Request $request){
        // $credenciales = $request->only(['email','password']);

        if (Auth::attempt([ 'email'=>$request->email , 'password'=>$request->password , 'usuario_ex'=>'1' ])){
            $usuario = Usuario::where('email', $request->email)->first();
            $usuario->registrarUltimoLogin();
            return redirect()->route('home.index');
            // dd('Si');
        }
        else
        {
            return back()->withErrors('Credenciales incorrectas');
            // dd('No');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.login');
    }

    public function store(UsuariosRequest $request){
        $usuario = new Usuario();
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->nombre = $request->nombre;
        $usuario->deuda = '0';
        $usuario->usuario_ex = '1';
        $usuario->rol_id = $request->rol_id;;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    public function destroy(Usuario $usuario){
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }

    public function edit(Usuario $usuario){
        return view('usuarios.edit', compact('usuario'));
    }

    public function activar(Usuario $usuario){
        $usuario->usuario_ex = $usuario->usuario_ex?'0':'1';
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

}
