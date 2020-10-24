@extends('templates.base')

@section('title', 'Formulário de Pessoa #' . $data->id ?? '')

@section('content')
    <h1>Formulário de Pessoa #{{ $data->id ?? ''}}</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (!isset($data))
        <form class="form-inline" action="{{ route('pessoas.create') }}" method="post">
    @else
        <form class="form-inline" action="{{ route('pessoas.update', $data->id) }}" method="post">
        @method('put')
    @endif
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
@endsection