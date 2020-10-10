<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Pessoa</title>
</head>
<body>
    <h1>Formulário de Pessoa</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{ route('pessoas.store') }}" method="post">
        @csrf

        <input type="text" name="nome" id="nome" placeholder="Nome">
        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="tel" name="telefone" id="telefone" placeholder="Telefone">
        @error('telefone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="email" name="email" id="email" placeholder="Email">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <input type="submit" value="Salvar">
        <a href="{{ route('pessoas.index') }}" class="btn">Cancelar</a>
    </form>
</body>
</html>