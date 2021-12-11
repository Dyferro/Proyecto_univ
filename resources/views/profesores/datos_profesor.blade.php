@extends('layout.layout')
@section('title', 'Datos del profesor')
@section('content')
<!-- Profile Card -->
<div>
    <div class="md:grid grid-cols-4 grid-rows-2  bg-white gap-2 p-4 rounded-xl">
        <div class="md:col-span-1 h-65 shadow-xl ">
            <div class="flex w-full h-full relative">
                <span
                     class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6"> {{$profesor->nombre}} </span>
             </div>
        </div>

        <div class="md:col-span-3 h-65 shadow-xl p-4 space-y-2 p-3">
            <div class="flex ">
                <span
                    class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Materia:</span>
                <input
                    class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                    type="text" value="{{$profesor->asignatura}} "  readonly/>
            </div>
            <div class="flex ">
                <span
                    class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Es guía:</span>
                    @if ($profesor->esguia)
                    <input
                    class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                    type="text" value="Si"  readonly/>
                @else
                <input
                class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                type="text" value="No"  readonly/>
                @endif

            </div>
            <div class="flex ">
                <span
                    class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Grupo:</span>
                <input
                    class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                    type="text" value="{{$profesor->grupo}} "  readonly/>
            </div>
            <div class="flex ">
                <span
                    class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Catedra:</span>
                <input
                    class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                    type="text" value="{{$profesor->catedra}} "  readonly/>
            </div>
            <div class="flex ">
                <span
                    class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Edad:</span>
                <input
                    class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                    type="text" value="{{$profesor->edad}} "  readonly/>
            </div>
        </div>

        <div class="md:col-span-3 h-48 shadow-xl p-4 space-y-2 hidden md:block">
            <h3 class="font-bold uppercase"> Dirección Particular:</h3>
            <p class="">
               {{$profesor->direccion}}
            </p>
        </div>
    </div>
</div>

<a href="{{ route('profesors.index') }}"> Ir al listado</a>
<br/>
<a href="{{ route('profesors.edit', $profesor ) }}"> Modificar </a>
<br/>
<form action="{{ route('profesors.destroy', $profesor ) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">
        Eliminar
    </button>
</form>

@endsection
