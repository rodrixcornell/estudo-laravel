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

    @if ($delete)
        <h2>Deseja mesmo excluir Pessoa: {{ $data->nome ?? ''}}</h2>
    @else
        <h2>Pessoa: {{ $data->nome ?? ''}}</h2>
    @endif

    @if ($delete)
	<form class="form-inline" action="{{ route('pessoas.destroy', $data->id) }}" method="POST">
        @method('DELETE')
        @csrf

        <br>
        &nbsp;<input type="submit" class="btn btn-danger mb-2" value="Excluir">
        &nbsp;<a href="{{ route('pessoas.index') }}" type="button" class="btn btn-secondary mb-2">Cancelar</a>
    </form>
    @else
        &nbsp;<a href="{{ route('pessoas.edit', $data->id) }}" type="button" class="btn btn-warning mb-2">Editar</a>
        &nbsp;<a href="{{ route('pessoas.index') }}" type="button" class="btn btn-secondary mb-2">Cancelar</a>
    @endif
@endsection