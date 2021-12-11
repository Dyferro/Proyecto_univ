@extends('layout.layout')

@section('title', 'Datos del estudiante')


@section('content')


<!-- Profile Card -->
<div>
    <div class="md:grid grid-cols-4 grid-rows-2  bg-white gap-2 p-4 rounded-xl">
         <div class="md:col-span-1 h-48 shadow-xl ">
                 <div class="flex w-full h-full relative">
                    <span
                         class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6"> {{$estudiante->nombre}} </span>
                 </div>
         </div>

         <div class="md:col-span-3 h-48 shadow-xl p-4 space-y-2 p-3">


                 <div class="flex ">
                     <span
                         class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Grupo:</span>
                     <input
                         class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                         type="text" value="{{$estudiante->grupo}} "  readonly/>
                 </div>

                 <div class="flex ">
                    <span
                        class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Nivel:</span>
                    <input
                        class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                        type="text" value="{{$grupo->nivel}}"  readonly/>
                </div>

                <div class="flex ">
                    <span
                        class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Edad:</span>
                    <input
                        class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                        type="text" value="{{$estudiante->edad}} "  readonly/>
                </div>

         </div>

         <div class="md:col-span-3 h-48 shadow-xl p-4 space-y-2 hidden md:block">
             <h3 class="font-bold uppercase"> Dirección Particular:</h3>
             <p class="">
                {{$estudiante->direccion}}
             </p>
         </div>

     </div>
</div>


<a href="{{ route('estudiantes.index') }}"> Ir al listado</a>
<br/>
<a href="{{ route('estudiantes.edit', $estudiante ) }}"> Modificar </a>
<br/>
<form action="{{ route('estudiantes.destroy', $estudiante ) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">
        Eliminar
    </button>
</form>

@endsection
