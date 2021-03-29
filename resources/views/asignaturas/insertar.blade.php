@extends('layout.layout')

@section('title','Insertar Asignaturas')

@section('content')
<h1> Insertar Asignatura</h1>

<!-- Formulario -->
<form action="{{route('asignaturas.guardar')}}" method="POST">
    @csrf

    <label>Nombre de la Asignatura : </label>
    <input type="text" name="nombre">
    <br/>
    <label>Descripcion : </label>
    <input type="text" name="descripcion">
    <br/>
    <label>Duración de la Materia : </label>
    <input type="number" name="duracionhoras">
    <br/>
    <label>Nivel en que se imparte : </label>
    <input type="number" name="nivel">
    <br/>
    <br/>
    <button type="submit">Insertar</button>
</form>

@endsection
