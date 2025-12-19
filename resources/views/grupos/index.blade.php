@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Grupos Econômicos</h1>

    <a href="{{ route('grupos-economicos.create') }}" class="btn btn-primary mb-3">Novo Grupo Econômico</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->id }}</td>
                    <td>{{ $grupo->nome }}</td>
                    <td>
                        <a href="{{ route('grupos-economicos.edit', $grupo->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('grupos-economicos.destroy', $grupo->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection