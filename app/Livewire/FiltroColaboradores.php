<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GrupoEconomico;
use App\Models\Bandeira;
use App\Models\Unidade;
use App\Models\Colaborador;

class FiltroColaboradores extends Component
{
    public $grupo_id = null;
    public $bandeira_id = null;
    public $unidade_id = null;

    // Hooks: quando muda grupo, limpa bandeira e unidade
    public function updatedGrupoId($value): void
    {
        $this->bandeira_id = null;
        $this->unidade_id = null;
    }

    // Hooks: quando muda bandeira, limpa unidade
    public function updatedBandeiraId($value): void
    {
        $this->unidade_id = null;
    }

    public function render()
    {
        $grupos = GrupoEconomico::orderBy('nome')->get();

        $bandeiras = $this->grupo_id
            ? Bandeira::where('grupo_economico_id', (int) $this->grupo_id)->orderBy('nome')->get()
            : collect();

        $unidades = $this->bandeira_id
            ? Unidade::where('bandeira_id', (int) $this->bandeira_id)->orderBy('nome_fantasia')->get()
            : collect();

        // Busca só depende da unidade selecionada
        $colaboradores = $this->unidade_id
            ? Colaborador::where('unidade_id', (int) $this->unidade_id)->orderBy('nome')->get()
            : collect();

        return view('livewire.filtro-colaboradores', compact(
            'grupos', 'bandeiras', 'unidades', 'colaboradores'
        ));
    }
}