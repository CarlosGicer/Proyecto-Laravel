@extends('web.layout')

@section('main')
    <form action='/torneos/store' enctype='multipart/form-data' method='POST'>

        @csrf
        <div class='row'>
            <div class='col-3'>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre"><br>
                <label for="fecha">fecha:</label>
                <input type="date" name="fecha"><br>
                <label for="max_equipos">maximo equipos:</label>
                <select name="max_equipos">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <label for="modalidad">Modalidad:</label>
                <input type="text" name="modalidad">
                <input type="hidden" name="estado" value="activo">
                <label for="nivel">Nivel:</label>
                <select name="nivel">
                    <option value="principiante">principiante</option>
                    <option value="intermedio">intermedio</option>
                    <option value="alto">alto</option>
                </select>
                <label for="juego_id" class="form-label">JUEGO</label>
                <select class="form-select" name="juego_id">
                    @foreach ($juegos as $juego)
                        <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                    @endforeach
                </select>

            </div>
        </div>

        <button type='submit' name='enviar' texto='' value='crear'>Crear</button>

    </form>
@endsection