@extends('localview')
@section('content2')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>API ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Locate</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dades as $dada)
            <tr>
                <th>{{ $dada->id }}</th>
                <th>{{ $dada->_id }}</th>
                <th>{{ $dada->name }}</th>
                <th>{{ $dada->type }}</th>
                <th>{{ $dada->locate }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop