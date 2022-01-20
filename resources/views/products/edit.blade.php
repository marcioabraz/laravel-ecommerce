<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <a href="/products/delete/{{$product->id}}">Deletar</a>
        <form action="/products/update/{{$product->id}}" method="POST">
        @csrf
            <input type="name" name="name" placeholder="Nome" value="{{$product->name}}"><br><br>
            <textarea name="description" placeholder="Descrição" >{{$product->description}}</textarea><br><br>
            <input type="float" name="price" placeholder="Price" value="{{$product->price}}"><br><br>
            <button type="submit">Enviar</button>
        </form>
    </h1>
</body>
</html>