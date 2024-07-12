<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actores')->insert([
            ['actor_nombre'=>'Danier Radclif', 'actor_cantidad'=>'0', 'actor_ex'=>'1'],
            ['actor_nombre'=>'Zacc Effron', 'actor_cantidad'=>'0', 'actor_ex'=>'1'],
            ['actor_nombre'=>'Leonardo DiCaprio', 'actor_cantidad'=>'0', 'actor_ex'=>'1'],
            ['actor_nombre'=>'Miyazaki Aoi', 'actor_cantidad'=>'0', 'actor_ex'=>'1'],
            ['actor_nombre'=>'Rupert Grint', 'actor_cantidad'=>'0', 'actor_ex'=>'1'],
            ['actor_nombre'=>'Pedrito Canales', 'actor_cantidad'=>'0', 'actor_ex'=>'1'],
            ['actor_nombre'=>'Eugenio Matias', 'actor_cantidad'=>'0', 'actor_ex'=>'1'],
        ]);
    }
}
