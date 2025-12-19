@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Colaboradores</h1>

    <a href="{{ route('colaboradores.create') }}" class="btn btn-primary mb-3">Novo Colaborador</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Unidade</th>
                <th>Criação</th>
                <th>Atualização</th>
                <th style="width: 180px;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($colaboradores as $colaborador)
                <tr>
                    <td>{{ $colaborador->id }}</td>
                    <td>{{ $colaborador->nome }}</td>
                    <td>{{ $colaborador->email }}</td>
                    <td>{{ $colaborador->cpf }}</td>
                    <td>{{ optional($colaborador->unidade)->nome_fantasia }}</td>
                    <td>{{ $colaborador->created_at?->format('d/m/Y H:i') }}</td>
                    <td>{{ $colaborador->updated_at?->format('d/m/Y H:i') }}</td>
                    <td>
                        
                        <a href="{{ route('colaboradores.edit', $colaborador) }}" class="btn btn-warning btn-sm">Editar</a>
                        
                        <form action="{{ route('colaboradores.destroy', $colaborador) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center text-muted">Nenhum colaborador cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection