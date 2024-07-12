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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('email',50)->unique();
            $table->string('password');
            $table->string('nombre',50);
            $table->integer('deuda');
            $table->date('u_login')->nullable();
            $table->tinyInteger('usuario_ex');

            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('roles');

            
            $table->string('remember_token', 100)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
