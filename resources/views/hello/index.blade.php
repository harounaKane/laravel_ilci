<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Dire bonjour à :</h1>

    <table>
        <tr>
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

</body>
</html>
