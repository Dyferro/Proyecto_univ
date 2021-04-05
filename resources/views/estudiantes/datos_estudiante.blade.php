@extends('layout.layout')

@section('title', 'Datos del estudiante')


@section('content')
<h1> Datos del Estudiante: {{$estudiante->nombre}} </h1>
<ul>
    <li> Direccion:  {{$estudiante->direccion}} </li>
    <li> Grupo:  {{$estudiante->grupo}} </li>
    <li> Nivel:  {{$estudiante->nivel}} </li>
    <li> Edad:  {{$estudiante->edad}} </li>
</ul>


<a href="{{ route('estudiantes.listado') }}"> Ir al listado</a>
<br/>
<a href="{{ route('estudiantes.modificar', $estudiante ) }}"> Modificar </a>
<br/>
<form action="{{ route('estudiantes.eliminar', $estudiante ) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">
        Eliminar
    </button>
</form>

@endsection
