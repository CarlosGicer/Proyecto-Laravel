@extends('web.layout')

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
                        <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                    @endforeach
                </select>

            </div>
        </div>
    </div>

    <button type='submit' name='enviar' texto='' value='registrar'> registrar </button>

</form>

@endsection