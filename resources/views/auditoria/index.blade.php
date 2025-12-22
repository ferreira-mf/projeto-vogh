@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Auditoria do Sistema</h1>

    <table class="table table-striped table-bordered align-middle">
        <thead>
            <tr>
                <th>Usuário</th>
                <th>Ação</th>
                <th>Entidade</th>
                <th>ID</th>
                <th>Nome da Entidade</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @forelse($logs as $log)
                <tr>
                    <td>{{ $log->causer?->name ?? 'Sistema' }}</td>
                    <td>
                        @switch($log->description)
                            @case('created')
                                Criado
                                @break
                            @case('updated')
                                Atualizado
                                @break
                            @case('deleted')
                                Excluído
                                @break
                            @default
                                {{ $log->description }}
                        @endswitch
                    </td>
                    <td>{{ class_basename($log->subject_type) }}</td>
                    <td>{{ $log->subject_id }}</td>
                    <td>
                        {{-- Para created/updated --}}
                        @if(isset($log->properties['attributes']['nome']))
                            {{ $log->properties['attributes']['nome'] }}
                        {{-- Para deleted --}}
                        @elseif(isset($log->properties['old']['nome']))
                            {{ $log->properties['old']['nome'] }}
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">Nenhum log encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $logs->links() }}
    </div>
</div>
@endsection