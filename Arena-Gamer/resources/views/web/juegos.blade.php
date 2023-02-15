@extends('web.layout')

@section('titulo', 'Juegos')

@section('main')

@foreach($Juegos as $juego)

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $juego->nombre }}</h5>
        <p class="card-text">{{ $juego->descripcion }}</p>
        <p class="card-text">{{ $juego->plataforma }}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

@endforeach

@endsection

@section('footer')

@endsection