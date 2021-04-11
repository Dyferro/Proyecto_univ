@extends('layout.layout')

@section('title','Home')

@section('content')
<h1> Bienvenido a la pagina principal </h1>

<br/>

<a href="{{route('estudiantes.index')}}">Ver listado de estudiantes</a>


@endsection

