<?php

use App\Http\Controllers\AsignaturaController;
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

// Rutas para las Asignaturas
Route::get('asignaturas',[AsignaturaController::class, 'mostrar'])->name('asignaturas.listado');

Route::get('asignaturas/insertar', [AsignaturaController::class, 'insertar'])->name('asignaturas.insertar');

Route::post('insertar', [AsignaturaController::class, 'guardar'])->name('asignaturas.guardar');

Route::get('buscar/{asignatura}', [AsignaturaController::class, 'buscar'])->name('asignaturas.buscar');

Route::get('asignaturas/{asignatura}/modificar', [AsignaturaController::class, 'modificar'])->name('asignaturas.modificar');

Route::put('modificar/{asignatura}', [AsignaturaController::class, 'guardar_modificacion'])->name('asignaturas.guardarm');

Route::delete('asignaturas/{asignatura}/eliminar',[AsignaturaController::class, 'eliminar'])->name('asignaturas.eliminar');

// Rutas para los Profesores
Route::get('profesors',[ProfesorController::class, 'mostrar'])->name('profesors.listado');

Route::get('profesors/insertar', [ProfesorController::class, 'insertar'])->name('profesors.insertar');
