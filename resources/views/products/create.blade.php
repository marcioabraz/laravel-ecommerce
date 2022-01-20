<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Criar Produtos</h1>
        <form action="/products/store" method="POST">
        @csrf
            <input type="name" name="name" placeholder="Nome"><br><br>
            <textarea name="description" placeholder="Descrição"></textarea><br><br>
            <input type="number" name="price" placeholder="Price"><br><br>
            <button type="submit">Enviar</button>
        </form>
    </h1>
</body>
</html>