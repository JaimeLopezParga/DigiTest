<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['email'=>'ana.aris@gmail.com', 'password'=>'$2y$12$jJEhuAAT1tXrsib6IVUvbeWa/8F46MUuXgYs4sZqWkTObQJM5u9iq',
            'nombre'=>'Ana Aris', 'deuda'=>'0', 'u_login'=>'2024-01-01', 'usuario_ex'=>'1', 'rol_id'=>'1']
            ,
            ['email'=>'bastian.barros@gmail.com', 'password'=>'$2y$12$zZK4ZZ65SFCj4crDwHIBYO78R3CMhAmBiZlDem0L6DCUwMpJbVdH.',
            'nombre'=>'Bastian Barros', 'deuda'=>'0', 'u_login'=>'2024-01-01', 'usuario_ex'=>'1', 'rol_id'=>'2']
            ,
            ['email'=>'carlos.carros@gmail.com', 'password'=>'$2y$12$NZ8im8viy1nSC4nAby/uFeGtlcjWBrO45puGr3CkDE3cAYR//XJka',
            'nombre'=>'Carlos Carros', 'deuda'=>'0', 'u_login'=>'2024-01-01', 'usuario_ex'=>'1', 'rol_id'=>'2']
        ]);
    }
}
