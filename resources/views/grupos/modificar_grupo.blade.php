@extends('layout.layout')

@section('title','Modificar Grupo')

@section('content')
<h1> Modificar Grupo</h1>

<!-- Formulario -->
<form action="{{route('grupos.update', $grupo)}}" method="POST">
    @csrf
    @method('put')  <!-- Directiva que indica enviar el formulario como un put-->

    <label>Nombre del grupo : </label>
    <input type="text" name="nombregrupo" value="{{old('nombregrupo',$grupo->nombregrupo)}}">
    @error('nombregrupo')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Total de Estudiantes : </label>
    <input type="number" name="totalestudiantes" value="{{old('totalestudiantes', $grupo->totalestudiantes)}}">
    @error('totalestudiantes')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Nivel: </label>
    <input type="number" name="nivel" value="{{old('nivel',$grupo->nivel)}}">
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

