<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['rol_nombre'=>'Administrador', 'rol_ex'=>'1'],
            ['rol_nombre'=>'Cliente', 'rol_ex'=>'1'],
        ]);
    }
}
