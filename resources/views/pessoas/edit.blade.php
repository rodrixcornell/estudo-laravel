<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Pessoa</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h1>Formulário de Pessoa #{{ $data->id }}</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="form-inline" action="{{ route('pessoas.update', $data->id) }}" method="post">
        @method('put')
        @csrf

        <div class="form-group mb-2">
            &nbsp;<label for="nome">Nome</label>
            &nbsp;<input type="text" class="form-control" name="nome" id="nome" value="{{ $data->nome ?? '' }}" placeholder="Nome">
        </div>
        @error('nome')
            &nbsp;<div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mb-2">
            &nbsp;<label for="telefone">Telefone</label>
            &nbsp;<input type="tel" class="form-control" name="telefone" id="telefone" value="{{ $data->telefone ?? '' }}" placeholder="Telefone">
        </div>
        @error('telefone')
            &nbsp;<div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group mb-2">
            &nbsp;<label for="email">Email</label>
            &nbsp;<input type="email" class="form-control" name="email" id="email" value="{{ $data->email ?? '' }}" placeholder="Email">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        &nbsp;<input type="submit" class="btn btn-primary mb-2" value="Salvar">
        &nbsp;<a href="{{ route('pessoas.index') }}" class="btn btn-secondary mb-2">Cancelar</a>
    </form>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>