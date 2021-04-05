<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstudianteRequest;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //
    public function mostrar()
    {
        $estudiantes = Estudiante::paginate();
        return view('estudiantes.listado_estudiante', compact('estudiantes'));
    }

    public function insertar()
    {
        return view('estudiantes.insertar_estudiante');
    }

    public function guardar(EstudianteRequest $request)
    {
        $profesor = Estudiante::create($request->all());
        return redirect()->route('estudiantes.listado');
    }

    public function buscar($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiantes.datos_estudiante', compact('estudiante'));
    }

    public function modificar(Estudiante $estudiante)
    {
       return view('estudiantes.modificar_estudiante',compact('estudiante'));
    }

    public function guardar_modificacion(EstudianteRequest $request,Estudiante $estudiante)
    {
       $estudiante->update($request->all());
       return redirect()->route('estudiantes.buscar', $estudiante);
    }

    public function eliminar(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.listado');
    }

}
