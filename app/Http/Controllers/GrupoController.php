<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrupoRequest;
use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    //
    public function mostrar()
    {
        $grupos = Grupo::all();
        return view('grupos.listado_grupo', compact('grupos'));
    }

    public function insertar(){
        return view('grupos.insertar_grupo');
    }

    public function guardar(GrupoRequest $request)
    {
        $grupo = Grupo::create($request->all());
        return redirect()->route('grupos.listado');
    }

    public function buscar($id)
    {
        $grupo = Grupo::find($id);
        return view('grupos.datos_grupo', compact('grupo'));
    }

    public function modificar(Grupo $grupo)
    {
        return view('grupos.modificar_grupo',compact('grupo'));
    }

    public function guardar_modificacion(GrupoRequest $request, Grupo $grupo)
    {
       $grupo->update($request->all());
       return redirect()->route('grupos.buscar', $grupo);
    }

    public function eliminar(Grupo $grupo)
    {
        $grupo->delete();
        return redirect()->route('grupos.listado');
    }
}
