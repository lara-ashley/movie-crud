<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>

</head>

<body>

    <h1>Cadastro de filmes</h1>

    <form action="{{ route('movies.store') }}" method="post">

        @csrf
        <label for="name">Nome do filme</label>
        <input name="name">
        <input type="submit" value="cadastrar">

    </form>

</body>

</html>
