@extends('view1')
@section('content')

@php
    //var_dump($dades);
    $countRespuesta = sizeof($dades);
@endphp
<table class="table">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Country
            </th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < $countRespuesta; $i++)
            <tr>
                <th>{{$dades[$i]["id"]}} </th>
                <th>{{$dades[$i]["name"]}} </th>
                    
                 @if(isset($dades[$i]["country"]))
                    <th>{{$dades[$i]["country"]}}</th>
                @else
                    <th></th>
                @endif
            </tr>
        @endfor
    </tbody>
</table>

@stop