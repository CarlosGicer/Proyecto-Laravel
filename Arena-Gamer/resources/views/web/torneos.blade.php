@extends('web.layout')

@section('titulo', 'Torneos')

@section('main')
<div class="row">

@foreach($torneos as $torneo)
    <div class="card p-3 m-3 " style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $torneo->nombre }}</h5>
            <p class="card-text">Fecha: {{ $torneo->fecha }}</p>
            <p class="card-text"><small class="text-muted">Modalidad: {{ $torneo->modalidad }} VS {{ $torneo->modalidad }}</small></p>
            <p class="card-text"><small class="text-muted">Juego: {{ $torneo->juego_id }}</small></p>
            <a href="/torneos/{{ $torneo->id }}" class="btn btn-primary">Ver Torneo</a>
        </div>
    </div>
@endforeach

</div>

@endsection