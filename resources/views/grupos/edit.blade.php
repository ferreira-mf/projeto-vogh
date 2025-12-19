@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Grupo Econômico</h1>

    <form action="{{ route('grupos-economicos.update', $grupos_economico->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ $grupos_economico->nome }}" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('grupos-economicos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection