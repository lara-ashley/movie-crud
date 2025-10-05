<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>

</head>

<body>

    <h1>Editar filmes</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="post">
        @method("put")

        @csrf
        <label for="name">Nome do filme</label>
        <input type="text" name="name" value="{{ $movie->name }}">
        <input type="submit" value="Editar">

    </form>

</body>

</html>
