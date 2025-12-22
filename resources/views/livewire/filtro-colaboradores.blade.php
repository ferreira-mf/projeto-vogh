<div class="container py-3">
    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label">Grupo Econômico</label>
            <select wire:model.live="grupo_id" class="form-select">
                <option value="">Selecione...</option>
                @foreach($grupos as $grupo)
                    <option value="{{ (string) $grupo->id }}">{{ $grupo->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label">Bandeira</label>
            <select wire:model.live="bandeira_id" class="form-select" @disabled(!$grupo_id)>
                <option value="">Selecione...</option>
                @foreach($bandeiras as $bandeira)
                    <option value="{{ (string) $bandeira->id }}">{{ $bandeira->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label">Unidade</label>
            <select wire:model.live="unidade_id" class="form-select" @disabled(!$bandeira_id)>
                <option value="">Selecione...</option>
                @foreach($unidades as $unidade)
                    <option value="{{ (string) $unidade->id }}">{{ $unidade->nome_fantasia }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mt-4">
        <h5>Colaboradores da Unidade selecionada</h5>
        @if($colaboradores instanceof \Illuminate\Support\Collection && $colaboradores->isEmpty())
            <p class="text-muted">Use os filtros acima para exibir os colaboradores da unidade escolhida.</p>
        @elseif($colaboradores->count())
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Data de Criação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($colaboradores as $index => $colaborador)
                        <tr>
                            <td>{{ $colaboradores->firstItem() + $index }}</td>
                            <td>{{ $colaborador->nome }}</td>
                            <td>{{ $colaborador->email }}</td>
                            <td>{{ $colaborador->cpf }}</td>
                            <td>{{ $colaborador->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Botões Anterior e Proximo --}}
            <div class="d-flex justify-content-between mt-3">
                @if ($colaboradores->onFirstPage())
                    <span class="btn btn-secondary disabled">Anterior</span>
                @else
                    <button wire:click="previousPage" class="btn btn-primary">Anterior</button>
                @endif

                @if ($colaboradores->hasMorePages())
                    <button wire:click="nextPage" class="btn btn-primary">Próximo</button>
                @else
                    <span class="btn btn-secondary disabled">Próximo</span>
                @endif
            </div>
        @endif
    </div>
</div>