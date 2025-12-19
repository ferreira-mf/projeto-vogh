@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Colaborador</h1>

    <form action="{{ route('colaboradores.store') }}" method="POST" novalidate>
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" required>
            @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control" value="{{ old('cpf') }}" placeholder="000.000.000-00" required>
            @error('cpf') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Unidade</label>
            <select name="unidade_id" class="form-select" required>
                <option value="">Selecione...</option>
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}" @selected(old('unidade_id') == $unidade->id)>
                        {{ $unidade->nome_fantasia }}
                    </option>
                @endforeach
            </select>
            @error('unidade_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('colaboradores.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection