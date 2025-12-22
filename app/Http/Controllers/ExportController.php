<?php

namespace App\Http\Controllers;

use App\Exports\ColaboradoresExport;
use App\Models\Colaborador;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportColaboradores(Request $request)
    {
        // Monta a query base
        $query = Colaborador::with('unidade.bandeira.grupoEconomico');

        // Aplica filtros conforme seleção
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

        // Executa a query
        $colaboradores = $query->get();

        // Exporta apenas os colaboradores filtrados
        return Excel::download(new ColaboradoresExport($colaboradores), 'colaboradores_filtrados.xlsx');
    }
}