<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use App\Http\Requests\ProfesorRequest;
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

    public function guardar(ProfesorRequest $request)
    {
        $profesor = Profesor::create($request->all());
        return redirect()->route('profesors.listado');
    }

    public function buscar($id)
    {
        $profesor = Profesor::find($id);
        //return $profesor;
        return view('profesores.datos_profesor', compact('profesor'));
    }

    public function modificar(Profesor $profesor)
    {
       return view('profesores.modificar_profesor',compact('profesor'));
    }

    public function guardar_modificacion(ProfesorRequest $request, Profesor $profesor)
    {
       $profesor->update($request->all());
       return redirect()->route('profesors.buscar', $profesor);
    }

    public function eliminar(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()->route('profesors.listado');
    }



}
