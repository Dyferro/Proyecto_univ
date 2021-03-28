<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    //
    public function mostrar(){

        $asignaturas = Asignatura::all();
        return view('asignaturas.listado', compact('asignaturas'));
    }
}
