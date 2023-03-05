@extends('web.layout')

@section('titulo', 'Torneos')

@section('main')
    <div class="row">

        @foreach ($juegos as $juego)
        @if ($juego->id == $torneo->juego_id)
            <img src="{{ $juego->imagen }}" alt="...">
            <h5>Juego: {{ $juego->nombre }}</h5>
        @endif
    @endforeach
    
        <h2>{{ $torneo->nombre }}</h2>

        <p>Fecha de inicio del torneo: {{ $torneo->fecha }}</p>

        <p>La modalidad de este torneo es de {{ $torneo->modalidad }} VS {{ $torneo->modalidad }}</p>

        <p>Estado: {{ $torneo->estado }}</p>

        <p>Nivel: {{ $torneo->nivel }}</p>

        <p>Juego: {{ $torneo->juego_id }}</p>

        <a href="/torneos/{{ $torneo->id }}/inscribir"> <button>Inscribirse </button> </a>

        <h1>EQUIPOS </h1>



        @foreach ($equipos as $equipo)
            <div class="card p-3 m-3 " style="width: 18rem;">
                <img class="card-img-top img-responsive" src="{{asset($equipo->imagen)}}" />
                <div class="card-body" style="color:black">
                    <h5 class="card-title">{{ $equipo->nombre }}</h5>
                    <p class="card-text"><small class="text-muted">Modalidad: {{ $equipo->modalidad }} VS
                            {{ $equipo->modalidad }}</small></p>
                    <a href="/equipos/{{ $equipo->id }}" class="btn btn-primary">Ver Equipo</a>
                    @php
                        $usuarios = $equipo->componentes()->get();
                    @endphp
                    @foreach ($usuarios as $usuario)
                        @if ($usuario->id == Auth::user()->id)
                            <a class="btn btn-danger"
                                href="/torneos/{{ $torneo->id }}/equipos/{{ $equipo->id }}/borrar"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg></a>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach


    </div>

@endsection
