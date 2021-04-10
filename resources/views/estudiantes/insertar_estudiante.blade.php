@extends('layout.layout')

@section('title','Insertar Estudiante')

@section('content')
<h1> Insertar Estudiante</h1>

<!-- Formulario -->
<form action="{{route('estudiantes.store')}}" method="POST">
    @csrf

    <label>Nombre completo : </label>
    <input type="text" name="nombre" value="{{old('nombre')}}">
    @error('nombre')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Dirección : </label>
    <input type="text" name="direccion" value="{{old('direccion')}}">
    @error('direccion')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Grupo : </label>
    <input type="text" name="grupo" value="{{old('grupo')}}">
    @error('grupo')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Edad : </label>
    <input type="number" name="edad" value="{{old('edad')}}">
    @error('edad')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Nivel: </label>
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

