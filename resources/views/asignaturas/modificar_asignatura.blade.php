@extends('layout.layout')

@section('title','Modificar Asignaturas')

@section('content')
<h1> Modificar Asignatura</h1>

<!-- Formulario -->
<form action="{{route('asignaturas.update', $asignatura)}}" method="POST">

    @csrf

    @method('put')  <!-- Directiva que indica enviar el formulario como un put-->

    <label>Nombre de la Asignatura : </label>
    <input type="text" name="nombre" value="{{old('nombre',$asignatura->nombre)}}">
    @error('nombre')
    <br/>
    *{{$message}}
    <br/>
    @enderror
    <br/>
    <label>Descripcion : </label>
    <input type="text" name="descripcion" value="{{old('descripcion',$asignatura->descripcion)}}">
    @error('descripcion')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Duración de la Materia : </label>
    <input type="number" name="duracionhoras"  value="{{old('duracionhoras',$asignatura->duracionhoras)}}">
    @error('duracionhoras')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Nivel en que se imparte : </label>
    <input type="number" name="nivel" value="{{old('nivel',$asignatura->nivel)}}">
    @error('nivel')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <br/>
    <button type="submit">Modificar</button>
</form>

@endsection
