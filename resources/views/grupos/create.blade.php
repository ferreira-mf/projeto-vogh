@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Grupo Econômico</h1>

    <form action="{{ route('grupos-economicos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('grupos-economicos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection