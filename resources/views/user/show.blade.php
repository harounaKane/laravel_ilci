@extends('template')

@section('title')
    Consultation
@stop

@section('content')
    <h2>Détails sur le membre</h2>
    <div> {{ $user->prenom .' '. mb_strtoupper($user->nom) }}</div>
    <div>Login : <strong>{{ $user->login }}</strong></div>
    <div>Date d'inscription : <strong>{{ $user->created_at }}</strong></div>
    <div>Dernière mise à jour : <strong>{{ $user->updated_at }}</strong></div>

@stop
