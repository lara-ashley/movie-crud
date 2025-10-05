<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filmes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <h1>Cadastro de Filmes</h1>

    <form action="{{ route('movies.store') }}" method="post" class="form-movie">
        @csrf
        <label for="name">Nome do filme</label>
        <input type="text" name="name" placeholder="Digite o nome do filme" required>
        <div class="botaocreate"><button type="submit" class="btn btn-cadastrar">Cadastrar</button></div>
    </form>

    <a href="{{ route('movies.index') }}" class="btn btn-editar" style="margin-top:20px; display:inline-block;">Voltar à lista</a>
</div>
</body>
</html>
