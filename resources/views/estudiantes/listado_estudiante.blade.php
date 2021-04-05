@extends('layout.layout')

@section('title','Listado Estudiantes')

@section('content')
<h1>Listado de Estudiantes</h1>
<ul>
    @foreach ($estudiantes as $estudiante)
    <li>
        <a href="{{route('estudiantes.buscar', $estudiante) }}">
            {{$estudiante->nombre}}
        </a>
    </li>
    @endforeach
    <br/>
    {{$estudiantes->links()}}
</ul>

<br/>
<a href="{{ route('estudiantes.insertar') }}"> Insertar nuevo Estudiante</a>
@endsection
