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
        Schema::create('directores', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('director_nombre',50);
            $table->integer('director_cantidad');
            $table->tinyInteger('director_ex');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directores');
    }
};
