@extends('layout.layout')

@section('title', 'Datos de Asignatura')


@section('content')
<h1> Datos de la Asignatura : {{$asignatura->nombre}} </h1>
<ul>
    <li> Descripcion:  {{$asignatura->descripcion}} </li>
    <li> Duracion del curso:  {{$asignatura->duracionhoras}} </li>
    <li> Nivel del curso:  {{$asignatura->nivel}} </li>
</ul>


<a href="{{ route('asignaturas.index') }}"> Ir al listado</a>
<br/>
<a href="{{ route('asignaturas.edit', $asignatura ) }}"> Modificar </a>
<br/>
<form action="{{ route('asignaturas.destroy', $asignatura ) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">
        Eliminar
    </button>
</form>

@endsection
