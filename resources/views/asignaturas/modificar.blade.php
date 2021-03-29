@extends('layout.layout')

@section('title','Modificar Asignaturas')

@section('content')
<h1> Modificar Asignatura</h1>

<!-- Formulario -->
<form action="{{route('asignaturas.guardarm', $asignatura)}}" method="POST">

    @csrf

    @method('put')  <!-- Directiva que indica enviar el formulario como un put-->

    <label>Nombre de la Asignatura : </label>
    <input type="text" name="nombre" value="{{$asignatura->nombre}}">
    <br/>
    <label>Descripcion : </label>
    <input type="text" name="descripcion" value="{{$asignatura->descripcion}}">
    <br/>
    <label>Duración de la Materia : </label>
    <input type="number" name="duracionhoras"  value="{{$asignatura->duracionhoras}}">
    <br/>
    <label>Nivel en que se imparte : </label>
    <input type="number" name="nivel" value="{{$asignatura->nivel}}">
    <br/>
    <br/>
    <button type="submit">Modificar</button>
</form>

@endsection
