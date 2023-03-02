@extends('web.layout')

@section('titulo', 'Juegos de Torneos')

@section('main')
<div class="row">
    @if (Auth::user()->rol == 'admin')
    <a href="/juegos/nuevo"><button>Nuevo Juego</button></a>
    @endif

@foreach($juegos as $juego)
    <div class="card p-3 m-3 " style="width: 18rem;">
        <img class="card-img-top img-responsive" src="{{asset($juego->imagen)}}" />
        <div class="card-body">
            <h5 class="card-title">{{ $juego->nombre }}</h5>
            <p class="card-text">{{ $juego->descripcion }}</p>
            <p class="card-text">{{ $juego->plataforma }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>

            @if (Auth::user()->rol == 'admin')
            <a href="/juegos/{{$juego->id}}/borrar"><button class="btn btn-danger">X</button></a>
            @endif
        </div>
    </div>
@endforeach

</div>

@endsection


