<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    //Mostrar listado
    public function mostrar()
    {
        $profesors = Profesor::all();
        return view('profesores.listado_profesor', compact('profesors'));
    }

    public function insertar()
    {
        return view('profesores.insertar_profesor');
    }
}
