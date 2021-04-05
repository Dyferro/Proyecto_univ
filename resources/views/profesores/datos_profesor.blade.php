@extends('layout.layout')

@section('title', 'Datos del profesor')


@section('content')
<h1> Datos del profesor: {{$profesor->nombre}} </h1>
<ul>
    <li> Direccion:  {{$profesor->direccion}} </li>
    <li> Asignatura:  {{$profesor->asignatura}} </li>
    <li> Catedra:  {{$profesor->catedra}} </li>
    <li> Edad:  {{$profesor->edad}} </li>
</ul>


<a href="{{ route('profesors.listado') }}"> Ir al listado</a>
<br/>
<a href="{{ route('profesors.modificar', $profesor ) }}"> Modificar </a>
<br/>
<form action="{{ route('profesors.eliminar', $profesor ) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">
        Eliminar
    </button>
</form>

@endsection
