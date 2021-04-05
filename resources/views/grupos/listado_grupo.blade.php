@extends('layout.layout')

@section('title','Listado Grupos')

@section('content')
<h1>Listado de Grupos</h1>
<ul>
    @foreach ($grupos as $grupo)
    <li>
        <a href="{{route('grupos.buscar', $grupo) }}">
            {{$grupo->nombregrupo}}
        </a>
    </li>
    @endforeach
    <br/>
</ul>

<br/>
<a href="{{ route('grupos.insertar') }}"> Insertar nuevo grupo</a>
@endsection
