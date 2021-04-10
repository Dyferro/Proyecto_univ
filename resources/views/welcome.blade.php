@extends('layout.layout')

@section('title','Home')

@section('content')
<h1> Bienvenido a la pagina principal </h1>

<br/>
<a href="{{route('asignaturas.index')}}">Ver listado de asignaturas</a>

<br/>
<a href="{{route('profesors.index')}}">Ver listado de profesores</a>

<br/>
<a href="{{route('estudiantes.index')}}">Ver listado de estudiantes</a>

<br/>
<a href="{{route('grupos.index')}}">Ver listado de grupos</a>
@endsection

