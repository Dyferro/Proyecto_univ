@extends('layout.layout')

@section('title','Listado Asignaturas')

@section('content')
<h1> Listado de Asignaturas </h1>

<!-- Mostrar Asiganturas desde la bd-->
<ul>
    @foreach ($asignaturas as $asignatura)
    <!-- Mostrar los cursos dentro de una lista-->
    <li>

            {{$asignatura->nombre}}

    </li>
    @endforeach
</ul>


@endsection

