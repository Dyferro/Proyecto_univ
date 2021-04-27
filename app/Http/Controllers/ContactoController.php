<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    //metodo que muestra la vista con el formulario
    public function index()
    {
        return view('contacto.index');
    }

    //metodo que procesa el formulario y envia el mail
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'correo'=>'required|email',
            'mensaje'=>'required',
        ]);

        $correo= new ContactoMailable($request->all());

        Mail::to('dy900617@gmail.com')->send($correo);

        return redirect()->route('contacto.index')->with('info','Mensaje enviado');
    }
}
