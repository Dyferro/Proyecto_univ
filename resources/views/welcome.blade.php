@extends('layout.layout')

@section('title','Home')

@section('content')
<h1> Bienvenido a la pagina principal </h1>

<a href="{{route('asignaturas.listado')}}">Ver listado de asignaturas</a>
@endsection

