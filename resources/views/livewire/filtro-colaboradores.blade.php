<div class="container py-4">
    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label">Grupo Econômico</label>
            <select wire:model="grupo_id" class="form-select">
                <option value="">Selecione...</option>
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->id }}">{{ $grupo->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label">Bandeira</label>
            <select wire:model="bandeira_id" class="form-select" @disabled(empty($bandeiras))>
                <option value="">Selecione...</option>
                @foreach($bandeiras as $bandeira)
                    <option value="{{ $bandeira->id }}">{{ $bandeira->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label">Unidade</label>
            <select wire:model="unidade_id" class="form-select" @disabled(empty($unidades))>
                <option value="">Selecione...</option>
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}">{{ $unidade->nome_fantasia }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h5 class="card-title mb-3">Colaboradores da Unidade selecionada</h5>
            @if(empty($colaboradores))
                <p class="text-muted mb-0">Selecione uma unidade para visualizar os colaboradores.</p>
            @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Cargo</th>
                            <th>Unidade</th>
                            <th>Admissão</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($colaboradores as $colaborador)
                        <tr>
                            <td>{{ $colaborador->nome }}</td>
                            <td>{{ $colaborador->cargo ?? '-' }}</td>
                            <td>{{ $colaborador->unidade->nome_fantasia ?? '-' }}</td>
                            <td>{{ \Illuminate\Support\Carbon::parse($colaborador->data_admissao)->format('d/m/Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>