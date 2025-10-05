<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Filme</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>Editar Filme</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="post" class="form-movie">
        @csrf
        @method('PUT')

        <label for="name">Nome do filme</label>
        <input type="text" name="name" value="{{ $movie->name }}" required>

        <div class="botaoedit"><button type="submit" class="btn btn-editar">Editar</button></div>
    </form>

    <a href="{{ route('movies.index') }}" class="btn btn-cadastrar" style="margin-top:20px; display:inline-block;">Voltar à lista</a>
</div>
</body>
</html>
