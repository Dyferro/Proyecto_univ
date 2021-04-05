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

// Rutas para las Asignaturas
Route::get('asignaturas',[AsignaturaController::class, 'mostrar'])->name('asignaturas.listado');

Route::get('asignaturas/insertar/asignatura', [AsignaturaController::class, 'insertar'])->name('asignaturas.insertar');

Route::post('asignaturas/insertar', [AsignaturaController::class, 'guardar'])->name('asignaturas.guardar');

Route::get('asignaturas/buscar/{asignatura}', [AsignaturaController::class, 'buscar'])->name('asignaturas.buscar');

Route::get('asignaturas/{asignatura}/modificar', [AsignaturaController::class, 'modificar'])->name('asignaturas.modificar');

Route::put('asignaturas/modificar/{asignatura}', [AsignaturaController::class, 'guardar_modificacion'])->name('asignaturas.guardarm');

Route::delete('asignaturas/{asignatura}/eliminar',[AsignaturaController::class, 'eliminar'])->name('asignaturas.eliminar');

// Rutas para los Profesores
Route::get('profesors',[ProfesorController::class, 'mostrar'])->name('profesors.listado');

Route::get('profesors/insertar/profesor', [ProfesorController::class, 'insertar'])->name('profesors.insertar');

Route::post('profesors/insertar', [ProfesorController::class, 'guardar'])->name('profesors.guardar');

Route::get('profesors/buscar/{profesor}', [ProfesorController::class, 'buscar'])->name('profesors.buscar');

Route::get('profesors/{profesor}/modificar', [ProfesorController::class, 'modificar'])->name('profesors.modificar');

Route::put('profesors/modificar/{profesor}', [ProfesorController::class, 'guardar_modificacion'])->name('profesors.guardarm');

Route::delete('profesors/{profesor}/eliminar',[ProfesorController::class, 'eliminar'])->name('profesors.eliminar');


// Rutas para los Estudiantes
Route::get('estudiantes',[EstudianteController::class, 'mostrar'])->name('estudiantes.listado');

Route::get('estudiantes/insertar/estudiante', [EstudianteController::class, 'insertar'])->name('estudiantes.insertar');

Route::post('estudiantes/insertar', [EstudianteController::class, 'guardar'])->name('estudiantes.guardar');

Route::get('estudiantes/buscar/{estudiante}', [EstudianteController::class, 'buscar'])->name('estudiantes.buscar');

Route::get('estudiantes/{estudiante}/modificar', [EstudianteController::class, 'modificar'])->name('estudiantes.modificar');

Route::put('estudiantes/modificar/{estudiante}', [EstudianteController::class, 'guardar_modificacion'])->name('estudiantes.guardarm');

Route::delete('estudiantes/{estudiante}/eliminar',[EstudianteController::class, 'eliminar'])->name('estudiantes.eliminar');


// Rutas para los Grupos
Route::get('grupos',[GrupoController::class, 'mostrar'])->name('grupos.listado');

Route::get('grupos/insertar/grupo', [GrupoController::class, 'insertar'])->name('grupos.insertar');

Route::post('grupos/insertar', [GrupoController::class, 'guardar'])->name('grupos.guardar');

Route::get('grupos/buscar/{grupo}', [GrupoController::class, 'buscar'])->name('grupos.buscar');

Route::get('grupos/{grupo}/modificar', [GrupoController::class, 'modificar'])->name('grupos.modificar');

Route::put('grupos/modificar/{grupo}', [GrupoController::class, 'guardar_modificacion'])->name('grupos.guardarm');

Route::delete('grupos/{grupo}/eliminar',[GrupoController::class, 'eliminar'])->name('grupos.eliminar');
