<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directores')->insert([
            ['director_nombre'=>'Mamoru Hosoda', 'director_cantidad'=>'0', 'director_ex'=>'1'],
            ['director_nombre'=>'Alfonso Cuaron', 'actor_cantidad'=>'0', 'director_ex'=>'1'],
            ['director_nombre'=>'Martin Scorsese', 'director_cantidad'=>'0', 'director_ex'=>'1'],
            ['director_nombre'=>'Gran Tirontino', 'director_cantidad'=>'0', 'director_ex'=>'1'],
        ]);
    }
}
