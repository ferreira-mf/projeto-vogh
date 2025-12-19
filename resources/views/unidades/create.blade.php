@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nova Unidade</h1>

    <form action="{{ route('unidades.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome Fantasia</label>
            <input type="text" name="nome_fantasia" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Razão Social</label>
            <input type="text" name="razao_social" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">CNPJ</label>
            <input type="text" name="cnpj" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Bandeira</label>
            <select name="bandeira_id" class="form-control" required>
                @foreach($bandeiras as $bandeira)
                    <option value="{{ $bandeira->id }}">{{ $bandeira->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('unidades.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection