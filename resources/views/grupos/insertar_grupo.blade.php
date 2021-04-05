@extends('layout.layout')

@section('title','Insertar Grupo')

@section('content')
<h1> Insertar Grupo</h1>

<!-- Formulario -->
<form action="{{route('grupos.guardar')}}" method="POST">
    @csrf

    <label>Nombre del grupo : </label>
    <input type="text" name="nombregrupo" value="{{old('nombregrupo')}}">
    @error('nombregrupo')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Total de Estudiantes : </label>
    <input type="number" name="totalestudiantes" value="{{old('totalestudiantes')}}">
    @error('totalestudiantes')
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

