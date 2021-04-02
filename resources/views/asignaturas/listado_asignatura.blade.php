@extends('layout.layout')

@section('title','Listado Asignaturas')

@section('content')
<h1> Listado de Asignaturas </h1>

<!-- Mostrar Asiganturas desde la bd-->
<ul>
    @foreach ($asignaturas as $asignatura)
    <!-- Mostrar los cursos dentro de una lista-->
    <li>
        <a href="{{ route('asignaturas.buscar', $asignatura) }}">
            {{$asignatura->nombre}}
        </a>
    </li>
    @endforeach
</ul>

<a href="{{ route('asignaturas.insertar') }}"> Insertar nueva Asignatura </a>
@endsection

