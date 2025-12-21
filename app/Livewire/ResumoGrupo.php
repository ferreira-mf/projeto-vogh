<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GrupoEconomico;
use App\Models\Bandeira;

class ResumoGrupo extends Component
{
    public $grupo_id = null;

    public function render()
    {
        $grupos = GrupoEconomico::orderBy('nome')->get();

        $bandeiras = $this->grupo_id
            ? Bandeira::with(['unidades.colaboradores'])
                ->where('grupo_economico_id', $this->grupo_id)
                ->orderBy('nome')
                ->get()
            : collect();

        return view('livewire.resumo-grupo', compact('grupos', 'bandeiras'));
    }
}