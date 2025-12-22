@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bandeiras</h1>

    <div class="mb-3 d-flex gap-2">
        <a href="{{ route('bandeiras.create') }}" class="btn btn-primary">Nova Bandeira</a>
        <a href="{{ route('export.bandeiras') }}" class="btn btn-success">Exportar para Excel</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Grupo Econômico</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bandeiras as $bandeira)
                <tr>
                    <td>{{ $bandeira->id }}</td>
                    <td>{{ $bandeira->nome }}</td>
                    <td>{{ $bandeira->grupoEconomico->nome }}</td>
                    <td>
                        <a href="{{ route('bandeiras.edit', $bandeira->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('bandeiras.destroy', $bandeira->id) }}" method="POST" style="display:inline-block;">
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