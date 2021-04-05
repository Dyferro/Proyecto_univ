@extends('layout.layout')

@section('title','Listado Profesores')

@section('content')
<h1>Listado de Profesores</h1>
<ul>
    @foreach ($profesors as $profesor)
    <li>
        <a href="{{route('profesors.buscar', $profesor) }}">
            {{$profesor->nombre}}
        </a>
    </li>
    @endforeach
</ul>

<br/>
<a href="{{ route('profesors.insertar') }}"> Insertar nuevo Profesor</a>
@endsection
