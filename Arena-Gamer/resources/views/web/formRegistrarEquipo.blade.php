@extends('admin.layout')

@section('titulo', 'Juegos de Torneos')

@section('main')
    <form action='/torneos/{{ $torneo->id }}/registrar' enctype='multipart/form-data' method='POST'>

        @csrf
        <div class='row'>
            <div class='col-3'>
                <div class="mb-3 p-2">
                    <label for="grupo" class="form-label">ELIGE EQUIPO</label>
                    <select class="form-select" name="equipo">
                        @foreach ($equipos as $equipo)
                            @if ($equipo->modalidad == $torneo->modalidad)
                                <option value="{{ $equipo->id }}">{{ strtoupper($equipo->nombre) }}</option>
                            @endif
                        @endforeach
                    </select>

                </div>
            </div>
        </div>

        <button type='submit' name='enviar' texto='' value='registrar'> registrar </button>

    </form>

@endsection
