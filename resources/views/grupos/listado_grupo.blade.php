@extends('layout.layout')

@section('title','Listado Grupos')

@section('content')
<div class="flex justify-center p-4 mb-1">
    <h1 class="text-xl text-indigo-800">Grupos</h1>
</div>

<div class="flex  p-4 mb-1">
    <ul class="divide-y divide-gray-300">
      @foreach ($grupos as $grupo)
      <!-- Mostrar los cursos dentro de una lista-->
        <li class="p-2 hover:bg-gray-50 cursor-pointer">
          <a href="{{route('grupos.show', $grupo) }}">
            {{$grupo->nombregrupo}}
          </a>
        </li>
      @endforeach
    </ul>
</div>

<br/>
<div class="container justify-center  py-2 px-6 mt-6 -bottom-14mx-auto flex transition-all duration-150 ease-linear rounded-lg  flex-wrap p-5 flex-col md:flex-row items-center text-gray-100 bg-indigo-500 body-font shadow">
    <a class="mr-6  hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-indigo-600" href="{{ route('grupos.create') }}" >Insertar Grupo</a>
</div>

@endsection
