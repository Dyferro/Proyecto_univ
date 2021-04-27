<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\HomeController;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
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

//Ruta para contenido estatico
Route::view('plan-estudios', 'plan-estudios')->name('plan-estudios');// llamar directamente a una vista

//Ruta para enviar correo electronico
Route::get('contacto', [ContactoController::class,'index'])->name('contacto.index');

//Ruta que envia los correos de la pagina contacto
Route::post('contacto',[ContactoController::class,'store'])->name('contacto.store');
