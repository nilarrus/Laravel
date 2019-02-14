@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen de la película --}}
        <img src="{{$pelicula['poster']}}"/>

    </div>
    <div class="col-sm-8">
        {{-- TODO: Datos de la película título, año, director, resumen y su estado   --}}
        <h2>{{$pelicula['title']}}</h2>
        <h4>Año:{{$pelicula['year']}}</h4>
        <p>Resumen:{{$pelicula['synopsis']}}</p>
        <p>Estado:{{$pelicula['rented']}}</p>
    </div>
</div>	
@stop