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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('pelicula_nombre',50);
            $table->integer('pelicula_precio');
            $table->integer('pelicula_stock');
            $table->tinyInteger('pelicula_disponible');
            $table->integer('pelicula_calificacion');
            $table->integer('pelicula_cantidad_calificacion');
            $table->date('pelicula_estreno')->nullable();
            $table->integer('pelicula_arriendos_mes');
            $table->string('pelicula_ruta_imagen')->nullable();
            $table->tinyInteger('pelicula_ex');

            $table->unsignedInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->unsignedInteger('director_id');
            $table->foreign('director_id')->references('id')->on('directores');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
