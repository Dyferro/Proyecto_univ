@extends('layout.layout')

@section('title','Contacto')

@section('content')
<h1> Dejanos tu mensajito aqui </h1>

<br/>

<form action="{{ route('contacto.store') }}" method="POST">
    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>
    <br>
    @error('nombre')
    <br/>
        *{{$message}}
        <br/>
    @enderror
    <br>
    <label>
        Corre electronico:
        <br>
        <input type="text" name="correo">
    </label>
    <br>
    @error('correo')
    <br/>
        *{{$message}}
        <br/>
    @enderror
    <br>
    <label>
        Mensaje:
        <br>
        <textarea name="mensaje"  rows="10"></textarea>
    </label>
    <br>
    @error('mensaje')
    <br/>
        *{{$message}}
        <br/>
    @enderror
    <br>
    <br>
    <button type="submit" class="bg-green-300"> Enviar mensaje</button>
    <br>
</form>
<br>

<!-- Para saber si hay alertas y mostrar mi mensaje-->
@if (session('info'))
<script>
    alert("{{session('info')}}");
</script>
@endif
@endsection
