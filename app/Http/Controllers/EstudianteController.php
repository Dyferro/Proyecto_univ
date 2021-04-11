<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstudianteRequest;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //
    public function index()
    {
        $estudiantes = Estudiante::paginate();
        return view('estudiantes.listado_estudiante', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.insertar_estudiante');
    }

    public function store(EstudianteRequest $request)
    {
        $profesor = Estudiante::create($request->all());
        return redirect()->route('estudiantes.index');
    }

    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.datos_estudiante', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante)
    {
       return view('estudiantes.modificar_estudiante',compact('estudiante'));
    }

    public function update(EstudianteRequest $request,Estudiante $estudiante)
    {
       $estudiante->update($request->all());
       return redirect()->route('estudiantes.show', $estudiante);
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.index');
    }

}
