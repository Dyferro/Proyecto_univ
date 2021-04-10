@extends('layout.layout')

@section('title','Listado Grupos')

@section('content')
<h1>Listado de Grupos</h1>
<ul>
    @foreach ($grupos as $grupo)
    <li>
        <a href="{{route('grupos.show', $grupo) }}">
            {{$grupo->nombregrupo}}
        </a>
    </li>
    @endforeach
    <br/>
</ul>

<br/>
<a href="{{ route('grupos.create') }}"> Insertar nuevo grupo</a>
@endsection
