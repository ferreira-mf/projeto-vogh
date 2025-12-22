<?php

namespace App\Http\Controllers;

use App\Exports\ColaboradoresExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportColaboradores()
    {
        return Excel::download(new ColaboradoresExport, 'colaboradores.xlsx');
    }
}