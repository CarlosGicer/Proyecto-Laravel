@extends('web.layout')

@section('titulo', 'Juegos de Torneos')

@section('main')
<div class="row">

@foreach($juegos as $juego)
    <div class="card p-3 m-3 " style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $juego->nombre }}</h5>
            <p class="card-text">{{ $juego->descripcion }}</p>
            <p class="card-text">{{ $juego->plataforma }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endforeach

</div>

@endsection

@section('footer')
<p>Es el footer</p>
@endsection