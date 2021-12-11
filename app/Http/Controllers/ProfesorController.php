<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Asignatura;
use App\Models\Grupo;
use App\Http\Requests\ProfesorRequest;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    //Mostrar listado
    public function index()
    {
        $profesors = Profesor::all();
        return view('profesores.listado_profesor', compact('profesors'));
    }

    public function create()
    {
        $asignaturas = Asignatura::all();
        $grupos = Grupo::all();
        return view('profesores.insertar_profesor', compact('asignaturas','grupos'));
    }

    public function store(ProfesorRequest $request)
    {
        $profesor = Profesor::create($request->all());
        return redirect()->route('profesors.index');
    }

    public function show(Profesor $profesor)
    {
        return view('profesores.datos_profesor', compact('profesor'));
    }

    public function edit(Profesor $profesor)
    {
       return view('profesores.modificar_profesor',compact('profesor'));
    }

    public function update(ProfesorRequest $request, Profesor $profesor)
    {
       $profesor->update($request->all());
       return redirect()->route('profesors.show', $profesor);
    }

    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()->route('profesors.index');
    }



}
