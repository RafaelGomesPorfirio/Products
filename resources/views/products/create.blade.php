<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar produtos</h1>
    <form action="/store" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="description" placeholder="Descrição">
        <input type="number" name="price" placeholder="Preço">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>