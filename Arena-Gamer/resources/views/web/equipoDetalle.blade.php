@extends('web.layout')

@section('titulo', 'Torneos')

@section('main')
<div class="row">

    <h3>Componentes del grupo {{ $equipo->nombre }}</h3>

    @foreach($jugadores as $jugador)

    @if (Auth::user()->id == $jugador->id)
        <li class="list-group-item">{{$jugador->nick}} - {{$jugador->email}} 
            <a href="/equipos/{{$equipo->id}}/jugadores/{{ Auth::user()->id }}/borrar"> <button>X</button></a>
        </li>
    @else
        <li class="list-group-item">{{$jugador->nick}} - {{$jugador->email}}</li>
    @endif

@endforeach

   
    <a href="/equipos/{{$equipo->id}}/jugadores/{{Auth::user()->id}}" class="btn btn-primary">Unirse</a>

</div>

@endsection