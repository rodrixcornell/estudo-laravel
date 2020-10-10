<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas</title>
</head>
<body>

    <a href="{{ route('pessoas.create') }}">Novo Cadastro</a>
    <br><hr>

    <h1>Pessoas Cadastradas</h1>

    @foreach ($data as $item)
        {{ $item->id }}, {{ $item->nome }}, {{ $item->telefone }}, {{ $item->email }}
    @endforeach
    
</body>
</html>