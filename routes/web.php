<?php

use App\Http\Controllers\AsignaturaController;
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

Route::get('asignaturas',[AsignaturaController::class, 'mostrar'])->name('asignaturas.listado');

Route::get('asignaturas/insertar', [AsignaturaController::class, 'insertar'])->name('asignaturas.insertar');

Route::post('insertar', [AsignaturaController::class, 'guardar'])->name('asignaturas.guardar');

Route::get('buscar/{id}', [AsignaturaController::class, 'buscar'])->name('asignaturas.buscar');

Route::get('asignaturas/{asignatura}/modificar', [AsignaturaController::class, 'modificar'])->name('asignaturas.modificar');

Route::put('modificar/{asignatura}', [AsignaturaController::class, 'guardar_modificacion'])->name('asignaturas.guardarm');

Route::get('asignaturas/{asignatura}/eliminar',[AsignaturaController::class, 'eliminar'])->name('asignaturas.eliminar');
