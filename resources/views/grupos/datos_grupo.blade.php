@extends('layout.layout')

@section('title', 'Datos del Grupo')


@section('content')
<h1> Datos del Grupo: {{$grupo->nombregrupo}} </h1>
<ul>
    <li> Total de estudiantes:  {{$grupo->totalestudiantes}} </li>
    <li> Nivel:  {{$grupo->nivel}} </li>
</ul>


<a href="{{ route('grupos.index') }}"> Ir al listado</a>
<br/>
<a href="{{ route('grupos.edit', $grupo ) }}"> Modificar </a>
<br/>
<form action="{{ route('grupos.destroy', $grupo) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">
        Eliminar
    </button>
</form>

@endsection
