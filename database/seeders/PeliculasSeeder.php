<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peliculas')->insert([
            ['pelicula_nombre'=>'Los hijos del lobo', 'pelicula_precio'=>'3000', 'pelicula_stock'=>'1',
            'pelicula_disponible'=>'1', 'pelicula_calificacion'=>'100', 'pelicula_cantidad_calificacion'=>'0',
            'pelicula_estreno'=>'2024-01-01', 'pelicula_arriendos_mes'=>'0',
            'pelicula_ex'=>'1', 'genero_id'=>'2', 'director_id'=>'1',]
            ,
            ['pelicula_nombre'=>'Harry Potter y el prisionero de Azkaban', 'pelicula_precio'=>'2500', 'pelicula_stock'=>'1',
            'pelicula_disponible'=>'1', 'pelicula_calificacion'=>'100', 'pelicula_cantidad_calificacion'=>'0',
            'pelicula_estreno'=>'2024-01-01', 'pelicula_arriendos_mes'=>'0',
            'pelicula_ex'=>'1', 'genero_id'=>'3', 'director_id'=>'2',]
            ,
            ['pelicula_nombre'=>'El Gran Escapista', 'pelicula_precio'=>'6700', 'pelicula_stock'=>'1',
            'pelicula_disponible'=>'1', 'pelicula_calificacion'=>'100', 'pelicula_cantidad_calificacion'=>'0',
            'pelicula_estreno'=>'2024-01-01', 'pelicula_arriendos_mes'=>'0',
            'pelicula_ex'=>'1', 'genero_id'=>'4', 'director_id'=>'4',]
            ,
        ]);
    }
}
