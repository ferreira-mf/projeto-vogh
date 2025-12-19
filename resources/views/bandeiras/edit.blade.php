@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Bandeira</h1>

    <form action="{{ route('bandeiras.update', $bandeira->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nome da Bandeira</label>
            <input type="text" name="nome" class="form-control" value="{{ $bandeira->nome }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Grupo Econômico</label>
            <select name="grupo_economico_id" class="form-control" required>
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->id }}" 
                        {{ $grupo->id == $bandeira->grupo_economico_id ? 'selected' : '' }}>
                        {{ $grupo->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Atualizar</button>
        <a href="{{ route('bandeiras.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection