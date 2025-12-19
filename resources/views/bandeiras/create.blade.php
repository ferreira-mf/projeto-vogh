@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Bandeira</h1>

    <form action="{{ route('bandeiras.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome da Bandeira</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Grupo Econômico</label>
            <select name="grupo_economico_id" class="form-control" required>
                <option value="">Selecione...</option>
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->id }}">{{ $grupo->nome }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Salvar</button>
        <a href="{{ route('bandeiras.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection