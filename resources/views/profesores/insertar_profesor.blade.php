@extends('layout.layout')

@section('title','Insertar Profesor')

@section('content')
<h1> Insertar Profesor</h1>

<!-- Formulario -->
<form action="{{route('profesors.store')}}" method="POST">
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
    <label>Asignatura : </label>
    <input type="text" name="asignatura" value="{{old('asignatura')}}">
    @error('asignatura')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Catedra : </label>
    <input type="text" name="catedra" value="{{old('catedra')}}">
    @error('catedra')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Edad: </label>
    <input type="number" name="edad" value="{{old('edad')}}">
    @error('edad')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <br/>
    <button type="submit">Insertar</button>
</form>

@endsection

