<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class,'home'])->name('home');

// Rutas para las Asignaturas CRUD
Route::resource('asignaturas', AsignaturaController::class);

// Rutas para los Profesores
Route::resource('profesors', ProfesorController::class);

// Rutas para los Estudiantes
Route::resource('estudiantes', EstudianteController::class);

// Rutas para los Grupos
Route::resource('grupos', GrupoController::class);

