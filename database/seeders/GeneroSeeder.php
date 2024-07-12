<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generos')->insert([
            ['genero_nombre'=>'Comedia','genero_descripcion'=>'Peliculas para disfrutar riendo de los accidentes en la pantalla', 'genero_cantidad'=>'0', 'genero_ex'=>'1'],
            ['genero_nombre'=>'Drama','genero_descripcion'=>'Peliculas para llorar junto a los personajes y su trayecto', 'genero_cantidad'=>'0', 'genero_ex'=>'1'],
            ['genero_nombre'=>'Horror','genero_descripcion'=>'Peliculas para escuchar el palpitar de tú corazon (y quizas el de quien esta detras)', 'genero_cantidad'=>'0', 'genero_ex'=>'1'],
            ['genero_nombre'=>'Cortometraje','genero_descripcion'=>'Peliculas de duracion corta', 'genero_cantidad'=>'0', 'genero_ex'=>'1'],
        ]);
    }
}
