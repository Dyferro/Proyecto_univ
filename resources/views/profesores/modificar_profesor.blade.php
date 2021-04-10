@extends('layout.layout')

@section('title','Modificar Profesor')

@section('content')
<h1> Modificar Profesor</h1>

<!-- Formulario -->
<form action="{{route('profesors.update', $profesor)}}" method="POST">
    @csrf
    @method('put')  <!-- Directiva que indica enviar el formulario como un put-->

    <label>Nombre completo : </label>
    <input type="text" name="nombre" value="{{old('nombre',$profesor->nombre)}}">
    @error('nombre')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Dirección : </label>
    <input type="text" name="direccion" value="{{old('direccion', $profesor->direccion)}}">
    @error('direccion')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Asignatura : </label>
    <input type="text" name="asignatura" value="{{old('asignatura',  $profesor->asignatura)}}">
    @error('asignatura')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Catedra : </label>
    <input type="text" name="catedra" value="{{old('catedra',  $profesor->catedra)}}">
    @error('catedra')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <label>Edad: </label>
    <input type="number" name="edad" value="{{old('edad',  $profesor->edad)}}">
    @error('edad')
        <br/>
        *{{$message}}
        <br/>
    @enderror
    <br/>
    <br/>
    <button type="submit">Modificar</button>
</form>

@endsection

