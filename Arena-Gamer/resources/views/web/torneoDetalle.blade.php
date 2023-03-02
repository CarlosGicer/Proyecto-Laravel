@extends('web.layout')

@section('titulo', 'Torneos')

@section('main')
<div class="row">
    <h2>{{ $torneo->nombre }}</h2>

    <p>Fecha de inicio del torneo: {{ $torneo->fecha }}</p>

    <p>La modalidad de este torneo es de {{ $torneo->modalidad }} VS {{ $torneo->modalidad }}</p>

    <p>Estado: {{ $torneo->estado }}</p>

    <p>Nivel: {{ $torneo->nivel }}</p>

    <p>Juego: {{ $torneo->juego_id }}</p>

    <a href="/torneos/{{$torneo->id}}/inscribir"> <button>Inscribirse </button> </a>

    <h1>EQUIPOS  </h1>
    @foreach ($equipos as $equipo)
    <div class="card p-3 m-3 " style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $equipo->nombre }}</h5>
                <p class="card-text"><small class="text-muted">Modalidad: {{ $equipo->modalidad }} VS {{ $equipo->modalidad }}</small></p>
                <a href="/equipos/{{ $equipo->id }}" class="btn btn-primary">Ver Equipo</a>
                <a href="/torneos/{{$torneo->id}}/equipos/{{$equipo->id}}/borrar"><button>desinscribir</button></a>
            </div>
        </div>
     
    @endforeach


</div>

@endsection