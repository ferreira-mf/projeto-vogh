<?php

namespace App\Http\Controllers;

use App\Models\GrupoEconomico;
use App\Models\Bandeira;
use App\Models\Unidade;
use App\Models\Colaborador;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalGrupos' => GrupoEconomico::count(),
            'totalBandeiras' => Bandeira::count(),
            'totalUnidades' => Unidade::count(),
            'totalColaboradores' => Colaborador::count(),
        ]);
    }
}