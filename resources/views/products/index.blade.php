<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body> @csrf
    <h1>Todos os produtos</h1>
    @foreach ($products as $prod)
        <h2>{{$prod-> name}}</h2>
        <p>{{$prod->description}}</p>
        <p>{{$prod->price}}</p>
        <hr>
    @endforeach
</body>
</html>