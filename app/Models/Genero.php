<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genero extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'generos';

    public function peliculas(){
        return $this->hasMany('App\Models\Pelicula');
    }
}
