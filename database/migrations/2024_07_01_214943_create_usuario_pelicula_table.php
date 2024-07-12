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
        Schema::create('usuario_pelicula', function (Blueprint $table) {
            $table->unsignedInteger('usuario_id');
            $table->unsignedInteger('pelicula_id');
            $table->primary(['usuario_id','pelicula_id']); //establecerlos como PK compuesta

            $table->date('usuario_pelicula_inicio_p');
            $table->integer('usuario_pelicula_calificacion');
            $table->tinyInteger('usuario_pelicula_ex');

            //la PK compuesta también es FK
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('pelicula_id')->references('id')->on('peliculas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_pelicula');
    }
};
