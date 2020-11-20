@extends('template')

@section('title')
    Welcome
@stop

@section('content')
    <h2>Liste des membres</h2>
    <table class="table table-striped">
        <tr class="bg-dark text-white">
            <th>Prénom </th>
            <th>Nom</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td> {{ $user->prenom }} </td>
                <td> {{ $user->nom }} </td>
                <td class="row">
                    <form action="{{ route('user.destroy', $user->id ) }}" method="post" class="col-4">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-info"><i class="fas fa-trash-alt"></i></button>
                    </form>

                    <a href="{{ route('user.edit', $user->id) }}" class="col-4"><i class="fas fa-edit"></i></a>

                    <a href="{{ route('user.show', $user->id) }}" class="col-4"><i class="far fa-eye"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
@stop
