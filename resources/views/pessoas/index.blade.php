@extends('templates.base')

@section('title', 'Pessoas Cadastradas')

@section('content')
    <a href="{{ route('pessoas.create') }}" type="button" class="btn btn-primary my-1 mr-sm-1">Novo Cadastro</a>
    <br><hr>

    <h1>Pessoas Cadastradas</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">CPF</th>
            <th scope="col">Criado</th>
            <th scope="col">Atualizado</th>
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
            <td>{{ $item->cpf }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td class="text-right">
                <a href="{{ route('pessoas.show',$item->id) }}" type="button" class="btn btn-info my-1 mr-sm-1">Show</a>
                <a href="{{ route('pessoas.edit',$item->id) }}" type="button" class="btn btn-warning my-1 mr-sm-1">Edit</a>
                <a href="{{ route('pessoas.show',[$item->id,'delete='.$item->id]) }}" type="button" class="btn btn-danger my-1 mr-sm-1">Delete</a>
            </td>
          </tr>
          @endforeach

        </tbody>
    </table>

    {{ $data->links() }}
@endsection