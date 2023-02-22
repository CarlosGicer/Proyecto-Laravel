@extends('web.layout')

@section('titulo', 'Torneos')

@section('main')
<div class="row">

@foreach($equipos as $equipo)
    <div class="card p-3 m-3 " style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $equipo->nombre }}</h5>
            <p class="card-text"><small class="text-muted">Modalidad: {{ $equipo->modalidad }} VS {{ $equipo->modalidad }}</small></p>
            <a href="/equipos/{{ $equipo->id }}" class="btn btn-primary">Ver Equipo</a>
        </div>
    </div>
@endforeach

</div>

@endsection