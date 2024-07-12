<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelicula extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'peliculas';

    public function genero(){
        return $this->belongsTo('App\Models\Genero');
    }

    public function director(){
        return $this->belongsTo('App\Models\Director');
    }
}
