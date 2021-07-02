@extends('layout.layout')

@section('title','Listado Asignaturas')

@section('content')



        <div class="flex justify-center p-4 mb-1">
          <h1 class="text-xl text-indigo-800">Listado de Asignaturas</h1>
        </div>

        <!-- Mostrar Asiganturas desde la bd-->
        <div class="flex  p-4 mb-1">
                  <ul class="divide-y divide-gray-300">
                    @foreach ($asignaturas as $asignatura)
                    <!-- Mostrar los cursos dentro de una lista-->
                      <li class="p-4 hover:bg-gray-50 cursor-pointer">
                        <a href="{{ route('asignaturas.show', $asignatura) }}">
                            {{$asignatura->nombre}}
                        </a>
                      </li>
                    @endforeach
                  </ul>
        </div>






<a href="{{ route('asignaturas.create') }}"> Insertar nueva Asignatura </a>
@endsection

