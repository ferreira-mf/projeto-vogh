<?php

namespace App\Http\Controllers;

use App\Exports\ColaboradoresExport;
use App\Exports\GruposExport;
use App\Exports\BandeirasExport;
use App\Exports\UnidadesExport;
use App\Models\Colaborador;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportColaboradores(Request $request)
    {
        
        $query = Colaborador::with('unidade.bandeira.grupoEconomico');

        
        if ($request->filled('grupo_economico_id')) {
            $query->whereHas('unidade.bandeira.grupoEconomico', function ($q) use ($request) {
                $q->where('id', $request->grupo_economico_id);
            });
        }

        if ($request->filled('bandeira_id')) {
            $query->whereHas('unidade.bandeira', function ($q) use ($request) {
                $q->where('id', $request->bandeira_id);
            });
        }

        if ($request->filled('unidade_id')) {
            $query->whereHas('unidade', function ($q) use ($request) {
                $q->where('id', $request->unidade_id);
            });
        }

       
        $colaboradores = $query->get();

        
        return Excel::download(new ColaboradoresExport($colaboradores), 'colaboradores_filtrados.xlsx');
    }

    
    public function exportGrupos()
    {
        return Excel::download(new GruposExport, 'grupos_economicos.xlsx');
    }

    
    public function exportBandeiras()
    {
        return Excel::download(new BandeirasExport, 'bandeiras.xlsx');
    }

    
    public function exportUnidades()
    {
        return Excel::download(new UnidadesExport, 'unidades.xlsx');
    }
}