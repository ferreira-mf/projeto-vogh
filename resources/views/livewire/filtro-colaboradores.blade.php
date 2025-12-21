<div class="container py-3">
    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label">Grupo Econômico</label>
            <select wire:model="grupo_id" wire:change="$set('bandeira_id', null); $set('unidade_id', null)" class="form-select">
                <option value="">Selecione...</option>
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->id }}">{{ $grupo->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label">Bandeira</label>
            <select wire:model="bandeira_id" wire:change="$set('unidade_id', null)" class="form-select">
                <option value="">Selecione...</option>
                @foreach($bandeiras as $bandeira)
                    <option value="{{ $bandeira->id }}">{{ $bandeira->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label">Unidade</label>
            <select wire:model="unidade_id" class="form-select">
                <option value="">Selecione...</option>
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}">{{ $unidade->nome_fantasia }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mt-4">
        <h5>Colaboradores da Unidade selecionada</h5>
        @if($colaboradores->isEmpty())
            <p class="text-muted">Selecione uma unidade para visualizar os colaboradores.</p>
        @else
            <ul>
                @foreach($colaboradores as $colaborador)
                    <li>{{ $colaborador->nome }} — {{ $colaborador->email }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>