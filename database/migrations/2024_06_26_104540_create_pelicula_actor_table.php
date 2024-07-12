<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pelicula_actor', function (Blueprint $table) {
            $table->unsignedInteger('pelicula_id');
            $table->unsignedInteger('actor_id');
            $table->primary(['pelicula_id','actor_id']); //establecerlos como PK compuesta

            $table->tinyInteger('pelicula_actor_ex');

            //la PK compuesta también es FK
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->foreign('actor_id')->references('id')->on('actores');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelicula_actor');
    }
};
