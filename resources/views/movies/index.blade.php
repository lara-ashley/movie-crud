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
        <li>{{ $movie->name }}</li>
    @endforeach

   </ul>

</body>

</html>
