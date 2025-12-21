<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GrupoEconomico;
use App\Models\Bandeira;
use App\Models\Unidade;
use App\Models\Colaborador;

class FiltroColaboradores extends Component
{
    public $grupo_id;
    public $bandeira_id;
    public $unidade_id;

    public $bandeiras = [];
    public $unidades = [];
    public $colaboradores = [];

    public function updatedGrupoId($id)
    {
        $this->bandeira_id = null;
        $this->unidade_id = null;
        $this->bandeiras = Bandeira::where('grupo_economico_id', $id)->orderBy('nome')->get();
        $this->unidades = [];
        $this->colaboradores = [];
    }

    public function updatedBandeiraId($id)
    {
        $this->unidade_id = null;
        $this->unidades = Unidade::where('bandeira_id', $id)->orderBy('nome_fantasia')->get();
        $this->colaboradores = [];
    }

    public function updatedUnidadeId($id)
    {
        $this->colaboradores = Colaborador::where('unidade_id', $id)->orderBy('nome')->get();
    }

    public function render()
    {
        return view('livewire.filtro-colaboradores', [
            'grupos' => GrupoEconomico::orderBy('nome')->get(),
        ]);
    }
}