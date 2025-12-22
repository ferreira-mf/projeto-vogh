<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\GrupoEconomico;
use App\Models\Bandeira;
use App\Models\Unidade;
use App\Models\Colaborador;

class FiltroColaboradores extends Component
{
    use WithPagination;

    public $grupo_id = null;
    public $bandeira_id = null;
    public $unidade_id = null;

    
    public function updatedGrupoId($value): void
    {
        $this->resetPage();
        $this->bandeira_id = null;
        $this->unidade_id = null;
    }

    public function updatedBandeiraId($value): void
    {
        $this->resetPage();
        $this->unidade_id = null;
    }

    public function updatedUnidadeId($value): void
    {
        $this->resetPage();
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

       
        $colaboradores = $this->unidade_id
            ? Colaborador::where('unidade_id', (int) $this->unidade_id)->orderBy('nome')->paginate(10)
            : collect();

        return view('livewire.filtro-colaboradores', compact(
            'grupos', 'bandeiras', 'unidades', 'colaboradores'
        ));
    }
}