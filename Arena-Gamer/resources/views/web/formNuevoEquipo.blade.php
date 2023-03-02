@extends('web.layout')

@section('titulo', 'Juegos de Torneos')

@section('main')
<form action='/equipos/crear' enctype='multipart/form-data' method='POST'>

    @csrf
    <div class='row'>
        <div class='col-3'>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre"><br>
            <label for="nombre">imagen:</label>
            <input type="file" name="imagen">
            <label for="nombre">Modalidad:</label>
            <select name="modalidad" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input type="hidden" name="estado" value="Abierto">
        </div>
    </div>

    <button type='submit' name='enviar' texto='' value='crear'>Crear</button>

</form>
@endsection