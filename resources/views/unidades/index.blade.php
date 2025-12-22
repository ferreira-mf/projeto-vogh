@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Unidades</h1>

    <div class="mb-3 d-flex gap-2">
        <a href="{{ route('unidades.create') }}" class="btn btn-primary">Nova Unidade</a>
        <a href="{{ route('export.unidades') }}" class="btn btn-success">Exportar para Excel</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Fantasia</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Bandeira</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unidades as $unidade)
                <tr>
                    <td>{{ $unidade->id }}</td>
                    <td>{{ $unidade->nome_fantasia }}</td>
                    <td>{{ $unidade->razao_social }}</td>
                    <td>{{ $unidade->cnpj }}</td>
                    <td>{{ $unidade->bandeira->nome }}</td>
                    <td>
                        <a href="{{ route('unidades.edit', $unidade->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('unidades.destroy', $unidade->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection