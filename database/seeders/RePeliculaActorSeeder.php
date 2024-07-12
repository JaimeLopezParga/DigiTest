<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RePeliculaActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelicula_actor')->insert([
            ['pelicula_id'=>'2', 'actor_id'=>'1', 'pelicula_actor_ex'=>'1'],
            ['pelicula_id'=>'2', 'actor_id'=>'5', 'pelicula_actor_ex'=>'1'],
            ['pelicula_id'=>'1', 'actor_id'=>'4', 'pelicula_actor_ex'=>'1'],
        ]);
    }
}
