<div class="container py-3">
    <div class="row g-3 align-items-end">
        <div class="col-md-6">
            <label class="form-label">Grupo Econômico</label>
            <select wire:model="grupo_id" class="form-select">
                <option value="">Selecione...</option>
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->id }}">{{ $grupo->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if(!$grupo_id)
        <p class="text-muted mt-3">Selecione um grupo para visualizar o resumo.</p>
    @else
        <div class="card mt-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-3">Resumo do grupo selecionado</h5>

                @if($bandeiras->isEmpty())
                    <p class="text-muted mb-0">Nenhuma bandeira encontrada para este grupo.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Bandeira</th>
                                    <th>Unidade</th>
                                    <th>Colaboradores</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bandeiras as $bandeira)
                                    @php
                                        $unidades = $bandeira->unidades;
                                        $rowspan = max($unidades->count(), 1);
                                    @endphp

                                    @if($unidades->isEmpty())
                                        <tr>
                                            <td>{{ $bandeira->nome }}</td>
                                            <td class="text-muted">Sem unidades</td>
                                            <td class="text-muted">—</td>
                                        </tr>
                                    @else
                                        @foreach($unidades as $idx => $unidade)
                                            <tr>
                                                @if($idx === 0)
                                                    <td rowspan="{{ $rowspan }}">{{ $bandeira->nome }}</td>
                                                @endif
                                                <td>
                                                    <div class="fw-semibold">{{ $unidade->nome_fantasia }}</div>
                                                    <div class="text-muted small">
                                                        {{ $unidade->razao_social }} • CNPJ: {{ $unidade->cnpj }}
                                                    </div>
                                                </td>
                                                <td>
                                                    @php $cols = $unidade->colaboradores; @endphp
                                                    @if($cols->isEmpty())
                                                        <span class="text-muted">Sem colaboradores</span>
                                                    @else
                                                        <ul class="mb-0">
                                                            @foreach($cols as $c)
                                                                <li>{{ $c->nome }} — {{ $c->email }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>