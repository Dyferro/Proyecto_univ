<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsignaturaRequest;
use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    //
    public function index()
    {
        $asignaturas = Asignatura::all();
        return view('asignaturas.listado_asignatura', compact('asignaturas'));
    }

    public function create(){
        return view('asignaturas.insertar_asignatura');
    }

    public function store(AsignaturaRequest $request)
    {
        $asignatura = Asignatura::create($request->all());
        return redirect()->route('asignaturas.index');
    }

    public function show(Asignatura $asignatura)
    {
        return view('asignaturas.datos_asignatura', compact('asignatura'));
    }

    public function edit(Asignatura $asignatura)
    {
        return view('asignaturas.modificar_asignatura',compact('asignatura'));
    }

    public function update(AsignaturaRequest $request, Asignatura $asignatura)
    {
       $asignatura->update($request->all());
       return redirect()->route('asignaturas.show', $asignatura);
    }

    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();
        return redirect()->route('asignaturas.index');
    }




}
