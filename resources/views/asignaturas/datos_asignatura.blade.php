@extends('layout.layout')

@section('title', 'Datos de Asignatura')


@section('content')

<!-- Profile Card -->
<div>
    <div class="md:grid grid-cols-4 grid-rows-2  bg-white gap-2 p-4 rounded-xl">
         <div class="md:col-span-1 h-48 shadow-xl ">
                 <div class="flex w-full h-full relative">
                    <span
                         class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">{{$asignatura->nombre}} </span>
                 </div>
         </div>

         <div class="md:col-span-3 h-48 shadow-xl p-4 space-y-2 p-3">
                 <div class="flex ">
                     <span
                         class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Duracion del curso:</span>
                     <input
                         class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                         type="text" value="{{$asignatura->duracionhoras}}"  readonly/>
                 </div>

                 <div class="flex ">
                     <span
                         class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Nivel del curso:</span>
                     <input
                         class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none shadow-sm -ml-1 w-4/6"
                         type="text" value="{{$asignatura->nivel}}"  readonly/>
                 </div>

         </div>

         <div class="md:col-span-3 h-48 shadow-xl p-4 space-y-2 hidden md:block">
             <h3 class="font-bold uppercase"> Descripcion</h3>
             <p class="">
                {{$asignatura->descripcion}}
             </p>
         </div>

     </div>
 </div>

<div class="md:col-span-3 h-48 shadow-xl p-4 space-y-2 hidden md:block">
    <a class="w-full px-6 py-2 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-indigo-500 hover:bg-indigo-600 hover:shadow-lg focus:outline-none" href="{{ route('asignaturas.index') }}"> Ir al listado</a>

    <a class="w-full px-6 py-2 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-indigo-500 hover:bg-indigo-600 hover:shadow-lg focus:outline-none" href="{{ route('asignaturas.edit', $asignatura ) }}"> Modificar </a>

    <a >
        <form action="{{ route('asignaturas.destroy', $asignatura ) }}" method="POST">
            @csrf
            @method('delete')
            <button class=" px-6 py-2 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-indigo-500 hover:bg-indigo-600 hover:shadow-lg focus:outline-none" type="submit">
                Eliminar
            </button>
        </form>
    </a>

</div>


@endsection
