@extends('layout.layout')
@section('title', 'Datos del Grupo')
@section('content')
<!-- Profile Card -->
<div>
    <div class="md:grid grid-cols-4 grid-rows-2  bg-white gap-2 p-4 rounded-xl">
        <div class="md:col-span-1 h-48 shadow-xl ">
            <div class="flex w-full h-full relative">
                <span
                     class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6"> {{$grupo->nombregrupo}} </span>
             </div>
        </div>

        <div class="md:col-span-3 h-48 shadow-xl p-4 space-y-2 p-3">
            <div class="flex ">
                <span
                    class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Matricula:</span>
                <input
                    class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                    type="text" value="{{$grupo->totalestudiantes}} "  readonly/>
            </div>

            <div class="flex ">
                <span
                    class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Guia:</span>
                <input
                    class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                    type="text" value="{{$grupo->profesorguia}} "  readonly/>
            </div>

            <div class="flex ">
                <span
                    class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Nivel:</span>
                <input
                    class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                    type="text" value="{{$grupo->nivel}} "  readonly/>
            </div>
        </div>

        <div class="md:col-span-3 h-48 shadow-xl p-4 space-y-2 hidden md:block">
            <h3 class="font-bold uppercase"> Listado de estudiantes:</h3>
            <ul class="divide-y divide-gray-300">
                @foreach ($estudiantes as $estudiante)
                <!-- Mostrar los cursos dentro de una lista-->
                  <li class="p-2 hover:bg-gray-50 cursor-pointer">
                    <a href="{{route('estudiantes.show', $estudiante) }}">
                      {{$estudiante->nombre}}
                    </a>
                  </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>

<a href="{{ route('grupos.index') }}"> Ir al listado</a>
<br/>
<a href="{{ route('grupos.edit', $grupo ) }}"> Modificar </a>
<br/>
<form action="{{ route('grupos.destroy', $grupo) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">
        Eliminar
    </button>
</form>

@endsection
