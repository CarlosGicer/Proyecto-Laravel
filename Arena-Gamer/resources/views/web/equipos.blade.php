@extends('web.layout')

@section('titulo', 'Torneos')

@section('main')
    <div class="row" style="color:black">
        <a href="/equipos/nuevo/nuevo"><button>Nuevo Equipo</button></a>

        @foreach ($equipos as $equipo)
            <div class="card p-3 m-3 " style="width: 18rem; box-shadow: 10px 5px 5px rgb(146, 146, 146);">
                <img class="card-img-top img-responsive" src="{{ asset($equipo->imagen) }}"  height="260px"/>
                <div class="card-body">
                    <h5 class="card-title">{{ $equipo->nombre }}</h5>
                    <p class="card-text"><small class="text-muted">Modalidad: {{ $equipo->modalidad }} VS
                            {{ $equipo->modalidad }}</small></p>
                    <a href="/equipos/{{ $equipo->id }}" class="btn btn-primary">Ver Equipo</a>
                    <td>
                        @php
                            $usuarios = $equipo->componentes()->get();
                        @endphp
                        @foreach ($usuarios as $usuario)
                            @if ($usuario->id == Auth::user()->id)
                                <a href="/equipos/{{ $equipo->id }}/borrar"><button class="btn btn-danger"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg></button></a>
                            @endif
                        @endforeach
                </div>
            </div>
        @endforeach
        {{ $equipos->links() }}

    </div>

@endsection
