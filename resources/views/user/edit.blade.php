@extends('template')

@section('title')
    Edition
@stop

@section('content')
    <h2>Mise à jour !</h2>
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="">Prénom</label>
            <input type="text" class="form-control" name="prenom" value="{{ $user->prenom }}">
        </div>
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" class="form-control" name="nom" value="{{ $user->nom }}">
        </div>
        <div class="form-group">
            <label for="">Login</label>
            <input type="text" class="form-control" name="login" value="{{ $user->login ?? '' }}">
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="">Mot de passe</label>--}}
{{--            <input type="password" class="form-control" name="mdp" value="">--}}
{{--        </div>--}}
        <input type="submit" class="btn btn-outline-primary">
        <input type="reset" class="btn btn-outline-danger">
    </form>
@stop
