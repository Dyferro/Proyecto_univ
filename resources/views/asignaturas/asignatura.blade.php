@extends('layout.layout')

@section('title', 'Datos de Asignatura')


@section('content')
<h1> Datos de la Asignatura : {{$asignatura->nombre}} </h1>
<ul>
    <li> Descripcion:  {{$asignatura->descripcion}} </li>
    <li> Duracion del curso:  {{$asignatura->duracionhoras}} </li>
    <li> Nivel del curso:  {{$asignatura->nivel}} </li>
</ul>


<a href="{{ route('asignaturas.listado') }}"> Ir al listado</a>
<br/>
<a href="{{ route('asignaturas.modificar', $asignatura ) }}"> Modificar </a>
<br/>
<a href="{{ route('asignaturas.eliminar', $asignatura ) }}"> Eliminar </a>
@endsection
