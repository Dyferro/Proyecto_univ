@extends('layout.layout')

@section('title','Insertar Asignaturas')

@section('content')
<h1> Insertar Asignatura</h1>

<!-- Formulario -->
<form action="{{route('asignaturas.guardar')}}" method="POST">
    @csrf

    <label>Nombre de la Asignatura : </label>
    <input type="text" name="nombre" value="{{old('nombre')}}">
    @error('nombre')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Descripcion : </label>
    <input type="text" name="descripcion" value="{{old('descripcion')}}">
    @error('descripcion')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Duración de la Materia : </label>
    <input type="number" name="duracionhoras" value="{{old('duracionhoras')}}">
    @error('duracionhoras')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Nivel en que se imparte : </label>
    <input type="number" name="nivel" value="{{old('nivel')}}">
    @error('nivel')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <br/>
    <button type="submit">Insertar</button>
</form>

@endsection
