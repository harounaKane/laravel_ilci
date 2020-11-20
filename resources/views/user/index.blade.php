@extends('template')

@section('title')
    Inscription
@stop

@section('content')
    <h2>Inscription</h2>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Prénom</label>
            <input type="text" class="form-control" name="prenom">
        </div>
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="form-group">
            <label for="">Login</label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" class="form-control" name="mdp">
        </div>
        <input type="submit" class="btn btn-outline-primary">
        <input type="reset" class="btn btn-outline-danger">
    </form>
@stop
