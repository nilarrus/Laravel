@extends('view1')
@section('content')
<h2>Resultats</h2>
@php
    //var_dump($dades);
    $countRespuesta = sizeof($dades);
@endphp
@for ($i = 0; $i < $countRespuesta; $i++)
    <div>
        ID->{{$dades[$i]["id"]}} 
        Name->{{$dades[$i]["name"]}}
            
         @if(isset($dades[$i]["country"]))
            Country->{{$dades[$i]["country"]}}</div>
        @endif
@endfor
@stop