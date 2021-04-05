@extends('layout.layout')

@section('title','Modificar Estudiante')

@section('content')
<h1> Modificar Estudiante</h1>

<!-- Formulario -->
<form action="{{route('estudiantes.guardarm', $estudiante)}}" method="POST">
    @csrf
    @method('put')  <!-- Directiva que indica enviar el formulario como un put-->

    <label>Nombre completo : </label>
    <input type="text" name="nombre" value="{{old('nombre',$estudiante->nombre)}}">
    @error('nombre')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Dirección : </label>
    <input type="text" name="direccion" value="{{old('direccion', $estudiante->direccion)}}">
    @error('direccion')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Grupo : </label>
    <input type="text" name="grupo" value="{{old('grupo',  $estudiante->grupo)}}">
    @error('grupo')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Edad : </label>
    <input type="number" name="edad" value="{{old('edad',  $estudiante->edad)}}">
    @error('edad')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Nivel: </label>
    <input type="number" name="nivel" value="{{old('nivel',  $estudiante->nivel)}}">
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

