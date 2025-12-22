@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Registro de Atividades / Auditoria do Sistema</h1>

    <table class="table table-striped table-bordered align-middle">
        <thead>
            <tr>
                <th>Usuário</th>
                <th>Ação</th>
                <th>Entidade</th>
                <th>ID</th>
                <th>Resumo</th>
                <th>Data</th>
                <th>Detalhes</th>
            </tr>
        </thead>
        <tbody>
            @forelse($logs as $log)
                <tr>
                    <td>{{ $log->causer?->name ?? 'Sistema' }}</td>
                    <td>
                        @switch($log->description)
                            @case('created') Criado @break
                            @case('updated') Atualizado @break
                            @case('deleted') Excluído @break
                            @default {{ $log->description }}
                        @endswitch
                    </td>
                    <td>{{ class_basename($log->subject_type) }}</td>
                    <td>{{ $log->subject_id }}</td>
                    <td>
                        {{-- Mostra só o nome resumido --}}
                        @if(isset($log->properties['attributes']['nome']))
                            {{ $log->properties['attributes']['nome'] }}
                        @elseif(isset($log->properties['old']['nome']))
                            {{ $log->properties['old']['nome'] }}
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>
                        <!-- Botão abre modal -->
                        <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#logModal{{ $log->id }}">
                            Ver detalhes
                        </button>
                    </td>
                </tr>

                <!-- Modal com detalhes -->
                <div class="modal fade" id="logModal{{ $log->id }}" tabindex="-1" aria-labelledby="logModalLabel{{ $log->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="logModalLabel{{ $log->id }}">Detalhes da Auditoria</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <div class="modal-body">
                                @if($log->description === 'created' && isset($log->properties['attributes']))
                                    <h6>Criado com os seguintes atributos:</h6>
                                    <ul>
                                        @foreach($log->properties['attributes'] as $attr => $value)
                                            <li><strong>{{ ucfirst($attr) }}:</strong> {{ $value }}</li>
                                        @endforeach
                                    </ul>

                                @elseif($log->description === 'updated' && isset($log->properties['attributes']))
                                    <h6>Atributos alterados:</h6>
                                    <ul>
                                        @foreach($log->properties['attributes'] as $attr => $newValue)
                                            @php $oldValue = $log->properties['old'][$attr] ?? null; @endphp
                                            <li>
                                                <strong>{{ ucfirst($attr) }}:</strong> 
                                                {{ $oldValue ?? '-' }} → {{ $newValue }}
                                            </li>
                                        @endforeach
                                    </ul>

                                @elseif($log->description === 'deleted' && isset($log->properties['old']))
                                    <h6>Registro excluído com os seguintes atributos:</h6>
                                    <ul>
                                        @foreach($log->properties['old'] as $attr => $value)
                                            <li><strong>{{ ucfirst($attr) }}:</strong> {{ $value }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    Nenhum detalhe disponível.
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="7" class="text-center text-muted">Nenhum log encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $logs->links() }}
    </div>
</div>
@endsection