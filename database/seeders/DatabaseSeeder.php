<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // --Codigo por defecto--
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            GeneroSeeder::class,
            ActoresSeeder::class,
            DirectoresSeeder::class,
            PeliculasSeeder::class,
            RePeliculaActorSeeder::class,
            RolesSeeder::class,
            UsuariosSeeder::class,
        ]);
    }
}
