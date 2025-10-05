<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>

</head>

<body>

   <h1>Filmes disponíveis para assistir</h1>

   <ul>
    @foreach ($movies as $movie )
        <li>{{ $movie->name }} | <a href="{{ route('movies.edit', $movie->id) }}">Editar</a> | <form action="{{ route('movies.destroy', $movie->id) }}" method="post">@method("delete")@csrf<input type="submit"value="Delatar""></form> </li>
    @endforeach

   </ul>

   <a href="{{ route('movies.create') }}">Cadastrar</a>

</body>

</html>
