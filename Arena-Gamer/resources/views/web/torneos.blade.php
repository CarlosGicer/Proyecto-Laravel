@extends('web.layout')

@section('titulo', 'Torneos')

@section('main')
    <div class="row" style="color:black">
        @foreach ($torneos as $torneo)
            <div class="card p-3 m-3 " style="width: 18rem; box-shadow: 10px 5px 5px rgb(146, 146, 146);">

                @foreach ($juegos as $juego)
                    @if ($juego->id == $torneo->juego_id)
                        <img src="{{ $juego->imagen }}" class="card-img-top" alt="..." height="260px">
                        <h5 class="card-title">Juego: {{ $juego->nombre }}</h5>
                    @endif
                @endforeach

                <div class="card-body">
                    <h5 class="card-title">{{ $torneo->nombre }}</h5>
                    <p class="card-text">Fecha: {{ $torneo->fecha }}</p>
                    <p class="card-text"><small class="text-muted">Modalidad: {{ $torneo->modalidad }} VS
                            {{ $torneo->modalidad }}</small></p>
                    <p class="card-text"><small class="text-muted">Juego: {{ $torneo->juego_id }}</small></p>
                    <a href="/torneos/{{ $torneo->id }}" class="btn btn-primary">Ver Torneo</a>
                </div>
            </div>
        @endforeach
        {{ $torneos->links() }}

    </div>

@endsection
