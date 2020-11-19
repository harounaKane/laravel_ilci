@extends('template')

@section('title')
    Hello
@stop

@section('content')
    <h1>Dire bonjour à :</h1>

    <table class="table table-striped table-bordered table-hover table-sm">
        <tr class="bg-dark text-white">
            <th>Prénom</th>
            <th>Nom</th>
        </tr>
        @foreach($personne as  $key => $value)
            <tr>
                <td>{{ $value['prenom'] }}</td>
                <td>{{ $value['nom'] }}</td>
            </tr>
        @endforeach
    </table>
@stop
