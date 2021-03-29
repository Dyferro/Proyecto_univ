<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    //
    public function mostrar(){

        $asignaturas = Asignatura::all();
        return view('asignaturas.listado', compact('asignaturas'));
    }

    public function insertar(){
        return view('asignaturas.insertar');
    }

    public function guardar(Request $request){
        $asignatura = new Asignatura();
        $asignatura->nombre = $request->nombre;
        $asignatura->descripcion = $request->descripcion;
        $asignatura->duracionhoras = $request->duracionhoras;
        $asignatura->nivel = $request->nivel;

        $asignatura->save();

        $asignaturas= Asignatura::all();

        return redirect()->route('asignaturas.listado');

    }

    public function buscar($id){

        $asignatura=Asignatura::find($id);

        return view('asignaturas.asignatura', compact('asignatura'));
    }

    public function modificar(Asignatura $asignatura){

        return view('asignaturas.modificar',compact('asignatura'));
    }

    public function guardar_modificacion(Request $request, Asignatura $asignatura){
        $asignatura->nombre = $request->nombre;
        $asignatura->descripcion = $request->descripcion;
        $asignatura->duracionhoras = $request->duracionhoras;
        $asignatura->nivel = $request->nivel;

        $asignatura->save();

       return redirect()->route('asignaturas.buscar', $asignatura->id );

    }

    public function eliminar(Asignatura $asignatura){

        $asignatura->delete();

        $asignaturas= Asignatura::all();

        return redirect()->route('asignaturas.listado');

    }




}
