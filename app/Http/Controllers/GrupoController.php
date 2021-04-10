<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrupoRequest;
use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    //
    public function index()
    {
        $grupos = Grupo::all();
        return view('grupos.listado_grupo', compact('grupos'));
    }

    public function create(){
        return view('grupos.insertar_grupo');
    }

    public function store(GrupoRequest $request)
    {
        $grupo = Grupo::create($request->all());
        return redirect()->route('grupos.index');
    }

    public function show($id)
    {
        $grupo = Grupo::find($id);
        return view('grupos.datos_grupo', compact('grupo'));
    }

    public function edit(Grupo $grupo)
    {
        return view('grupos.modificar_grupo',compact('grupo'));
    }

    public function update(GrupoRequest $request, Grupo $grupo)
    {
       $grupo->update($request->all());
       return redirect()->route('grupos.show', $grupo);
    }

    public function destroy(Grupo $grupo)
    {
        $grupo->delete();
        return redirect()->route('grupos.index');
    }
}
