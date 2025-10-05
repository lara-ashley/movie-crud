<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<div class="container">
    <h1>Filmes disponíveis para assistir</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('movies.create') }}" class="btn btn-cadastrar">Cadastrar Novo Filme</a>

    @if($movies->count())
        <ul class="movie-list">
            @foreach ($movies as $movie)
                <li class="movie-item">
                    <span class="movie-name">{{ $movie->name }}</span>
                    <span class="actions">
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-editar">Editar</a>
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="inline-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-deletar" onclick="return confirm('Tem certeza que deseja deletar este filme?')">
                                Deletar
                            </button>
                        </form>
                    </span>
                </li>
            @endforeach
        </ul>
    @else
        <p class="no-movies">Nenhum filme cadastrado.</p>
    @endif
</div>

</body>
</html>
