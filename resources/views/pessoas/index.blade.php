<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <a href="{{ route('pessoas.create') }}">Novo Cadastro</a>
    <br><hr>

    <h1>Pessoas Cadastradas</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col" class="text-right">Ações</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($data as $item)
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->nome }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->telefone }}</td>
            <td class="text-right">
                <a href="{{ route('pessoas.show',$item->id) }}" type="button" class="btn btn-info my-1 mr-sm-1">Show</a>
                <a href="{{ route('pessoas.edit',$item->id) }}" type="button" class="btn btn-warning my-1 mr-sm-1">Edit</a>
                <a href="{{ route('pessoas.show',$item->id) }}" type="button" class="btn btn-danger my-1 mr-sm-1">Delete</a>
            </td>
          </tr>
          @endforeach

        </tbody>
    </table>

    {{ $data->links() }}

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>