@extends('template')

@section('title')
    Bâtiment
@stop

@section('content')
    <h1>Bienvenue au bâtiement</h1>

    {{ $bat ." étage " . $etage }}
    <hr>
@stop
