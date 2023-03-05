@extends('admin.layout')

@section('titulo', 'Juegos de Torneos')

@section('main')
<form action='/juegos/crear' enctype='multipart/form-data' method='POST'>

    @csrf
    <div class='row'>
        <div class='col-3'>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre"><br>
            <label for="nombre">plataforma:</label>
            <input type="text" name="plataforma"><br>
            <input type="file" name="imagen">
            <label for="nombre">Descripcion:</label>
            <input type="text" name="descripcion">
          
        </div>
    </div>

    <button type='submit' name='enviar' texto='' value='crear'>Crear</button>

</form>
@endsection