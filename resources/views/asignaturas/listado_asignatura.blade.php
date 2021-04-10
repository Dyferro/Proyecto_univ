@extends('layout.layout')

@section('title','Listado Asignaturas')

@section('content')
<h1> Listado de Asignaturas </h1>

<!-- Mostrar Asiganturas desde la bd-->
<ul>
    @foreach ($asignaturas as $asignatura)
    <!-- Mostrar los cursos dentro de una lista-->
    <li>
        <a href="{{ route('asignaturas.show', $asignatura) }}">
            {{$asignatura->nombre}}
        </a>
    </li>
    @endforeach
</ul>

<a href="{{ route('asignaturas.create') }}"> Insertar nueva Asignatura </a>
@endsection

