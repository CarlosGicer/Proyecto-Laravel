@extends('web.layout')

@section('titulo', 'Torneos')

@section('main')
<div class="row">
    <h2>{{ $torneo->nombre }}</h2>

    <p>Fecha de inicio del torneo: {{$torneo->fecha}}</p>

    <p>La modalidad de este torneo es de {{$torneo->modalidad}} VS {{$torneo->modalidad}}</p>

    <p>Estado: {{$torneo->estado}}</p>

    <p>Nivel: {{$torneo->nivel}}</p>

    <p>Juego: {{$torneo->juego_id}}</p>


    

    <a href="/torneos/{{$torneo->id}}/equipos/{{$equipo->id}}" class="btn btn-primary">Inscribirse</a>
</div>

@endsection