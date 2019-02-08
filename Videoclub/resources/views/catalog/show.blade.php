@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen de la película --}}
        <img src="{{$pelicula['poster']}}" style="height:200px"/>

    </div>
    <div class="col-sm-8">

        {{-- TODO: Datos de la película título, año, director, resumen y su estado   --}}

    </div>
</div>	
@stop