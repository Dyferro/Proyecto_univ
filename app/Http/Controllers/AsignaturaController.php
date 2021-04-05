<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsignaturaRequest;
use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    //
    public function mostrar()
    {
        $asignaturas = Asignatura::all();
        return view('asignaturas.listado_asignatura', compact('asignaturas'));
    }

    public function insertar(){
        return view('asignaturas.insertar_asignatura');
    }

    public function guardar(AsignaturaRequest $request)
    {
        $asignatura = Asignatura::create($request->all());
        return redirect()->route('asignaturas.listado');
    }

    public function buscar($id)
    {
        $asignatura=Asignatura::find($id);
        return view('asignaturas.datos_asignatura', compact('asignatura'));
    }

    public function modificar(Asignatura $asignatura)
    {
        return view('asignaturas.modificar_asignatura',compact('asignatura'));
    }

    public function guardar_modificacion(AsignaturaRequest $request, Asignatura $asignatura)
    {
       $asignatura->update($request->all());
       return redirect()->route('asignaturas.buscar', $asignatura);
    }

    public function eliminar(Asignatura $asignatura)
    {
        $asignatura->delete();
        return redirect()->route('asignaturas.listado');
    }




}
