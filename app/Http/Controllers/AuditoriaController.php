<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class AuditoriaController extends Controller
{
    public function index()
    {
        // Busca os logs mais recentes, paginados
        $logs = Activity::latest()->paginate(10);

        return view('auditoria.index', compact('logs'));
    }
}