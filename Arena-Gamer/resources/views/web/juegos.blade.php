@extends('web.layout')

@section('titulo', 'Juegos de Torneos')

@section('main')
<div class="row">
  

@foreach($juegos as $juego)
    <div class="card p-3 m-3  " style="width: 18rem; box-shadow: 10px 5px 5px rgb(146, 146, 146);">
        <img class="card-img-top img-responsive " src="{{asset($juego->imagen)}}" height="260px"/>
        <div class="card-body">
            <h5 class="card-title">{{ $juego->nombre }}</h5>
            <p class="card-text">{{ $juego->descripcion }}</p>
            <p class="card-text">{{ $juego->plataforma }}</p>
            <a href="/juegos/{{ $juego->id }}" class="btn btn-primary">Ver Juego</a>

           
        </div>
    </div>
@endforeach

{{ $juegos->links() }}

</div>

@endsection


