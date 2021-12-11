<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrupoRequest;
use App\Models\Grupo;
use App\Models\Profesor;
use App\Models\Estudiante;
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
        $profesors=Profesor::all();
        return view('grupos.insertar_grupo', compact('profesors'));
    }

    public function store(GrupoRequest $request)
    {

        $auxiliar = Grupo::all();
        $cont=0;
        for ($i=0; $i < count($auxiliar); $i++) {
         # code...
            if ($auxiliar[$i]->nombregrupo == $request->nombregrupo) {
            # code...
                $cont++;
            }
        }

        if($cont == 0){
            $grupo = Grupo::create($request->all());
            return redirect()->route('grupos.index');
        }
        else{

            return "Error";
        }


    }

    public function show(Grupo $grupo)
    {
        $estudiantes = Estudiante::where('grupo', $grupo->nombregrupo)->get();
        return view('grupos.datos_grupo', compact('grupo','estudiantes'));
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
