<?php

use App\Http\Controllers\ActoresController;
use App\Http\Controllers\DirectoresController;
use App\Http\Controllers\GenerosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');

Route::get('/directores', [DirectoresController::class,'index'])->name('directores.index');
Route::post('/directores', [DirectoresController::class,'store'])->name('directores.store');
Route::delete('/directores/{director}', [DirectoresController::class,'destroy'])->name('directores.destroy');
Route::get('/directores/{director}/edit', [DirectoresController::class,'edit'])->name('directores.edit');
Route::put('/directores/{director}', [DirectoresController::class,'update'])->name('directores.update');

Route::get('/peliculas', [PeliculasController::class,'index'])->name('peliculas.index');
Route::post('/peliculas', [PeliculasController::class,'store'])->name('peliculas.store');
Route::delete('/peliculas/{pelicula}', [PeliculasController::class,'destroy'])->name('peliculas.destroy');
Route::get('/peliculas/{pelicula}/edit', [PeliculasController::class,'edit'])->name('peliculas.edit');
Route::put('/peliculas/{pelicula}', [PeliculasController::class,'update'])->name('peliculas.update');

Route::get('/actores', [ActoresController::class,'index'])->name('actores.index');
Route::post('/actores', [ActoresController::class,'store'])->name('actores.store');
Route::delete('/actores/{actor}', [ActoresController::class,'destroy'])->name('actores.destroy');
Route::get('/actores/{actor}/edit', [ActoresController::class,'edit'])->name('actores.edit');
Route::put('/actores/{actor}', [ActoresController::class,'update'])->name('actores.update');

Route::get('/generos', [GenerosController::class,'index'])->name('generos.index');
Route::post('/generos', [GenerosController::class,'store'])->name('generos.store');
Route::delete('/generos/{genero}', [GenerosController::class,'destroy'])->name('generos.destroy');
Route::get('/generos/{genero}/edit', [GenerosController::class,'edit'])->name('generos.edit');
Route::put('/generos/{genero}', [GenerosController::class,'update'])->name('generos.update');

Route::post('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::get('/usuarios/logout',[UsuariosController::class,'logout'])->name('usuarios.logout');
Route::get('/usuarios', [UsuariosController::class,'index'])->name('usuarios.index');
Route::post('/usuarios', [UsuariosController::class,'store'])->name('usuarios.store');
Route::delete('/usuarios/{usuario}', [UsuariosController::class,'destroy'])->name('usuarios.destroy');
Route::post('/usuarios/{usuario}/activar',[UsuariosController::class,'activar'])->name('usuarios.activar');