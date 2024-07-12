<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Usuario extends Authenticable
{
    use HasFactory;
    protected $table = 'usuarios';

    public function rol(){
        return $this->belongsTo('App\Models\Rol');
    }

    public function registrarUltimoLogin(){
        $this->u_login = new DateTime('NOW');
        $this->save();
    }

}
