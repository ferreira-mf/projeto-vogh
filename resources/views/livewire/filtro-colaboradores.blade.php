<div class="container py-3">
    <div class="row g-3">
        <!-- Grupo Econômico -->
        <div class="col-md-4">
            <label class="form-label">Grupo Econômico</label>
            <select wire:model="grupo_id"
                    wire:change="$set('bandeira_id', null); $set('unidade_id', null)"
                    class="form-select">
                <option value="">Selecione...</option>
                @foreach($grupos as $grupo)
                    <option value="{{ (string) $grupo->id }}">{{ $grupo->nome }}</option>
                @endforeach
            </select>
        </div>

        <!-- Bandeira -->
        <div class="col-md-4">
            <label class="form-label">Bandeira</label>
            <select wire:model="bandeira_id"
                    wire:change="$set('unidade_id', null)"
                    class="form-select"
                    @disabled(!$grupo_id)>
                <option value="">Selecione...</option>
                @foreach($bandeiras as $bandeira)
                    <option value="{{ (string) $bandeira->id }}">{{ $bandeira->nome }}</option>
                @endforeach
            </select>
        </div>

        <!-- Unidade -->
        <div class="col-md-4">
            <label class="form-label">Unidade</label>
            <select wire:model="unidade_id"
                    class="form-select"
                    @disabled(!$bandeira_id)>
                <option value="">Selecione...</option>
                @foreach($unidades as $unidade)
                    <option value="{{ (string) $unidade->id }}">{{ $unidade->nome_fantasia }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- Tabela de Colaboradores -->
    <div class="mt-4">
        <h5>Colaboradores da Unidade selecionada</h5>
        @if($colaboradores->isEmpty())
            <p class="text-muted">Selecione uma unidade para visualizar os colaboradores.</p>
        @else
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
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $colaborador->nome }}</td>
                            <td>{{ $colaborador->email }}</td>
                            <td>{{ $colaborador->cpf }}</td>
                            <td>{{ $colaborador->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Debug -->
    <div class="mt-2 text-muted">
        Debug: grupo_id={{ $grupo_id }} | bandeira_id={{ $bandeira_id }} | unidade_id={{ $unidade_id }}
    </div>
</div>