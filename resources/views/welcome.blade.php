@extends('layout.layout')

@section('title','Home')

@section('content')
<h1> Bienvenido a la pagina principal </h1>

<br/>
<a href="{{route('asignaturas.listado')}}">Ver listado de asignaturas</a>

<br/>
<a href="{{route('profesors.listado')}}">Ver listado de profesores</a>

<br/>
<a href="{{route('estudiantes.listado')}}">Ver listado de estudiantes</a>

<br/>
<a href="{{route('grupos.listado')}}">Ver listado de grupos</a>
@endsection

