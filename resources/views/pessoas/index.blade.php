<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas</title>
</head>
<body>
    <h1>Pessoas Cadastradas</h1>
    
<a href="{{ route('pessoas.create') }}">Novo Cadastro</a>
</body>
</html>