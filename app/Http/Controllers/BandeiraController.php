<?php

namespace App\Http\Controllers;

use App\Models\Bandeira;
use App\Models\GrupoEconomico;
use Illuminate\Http\Request;

class BandeiraController extends Controller
{
    public function index()
    {
        $bandeiras = Bandeira::with('grupoEconomico')->get();
        return view('bandeiras.index', compact('bandeiras'));
    }

    public function create()
    {
        $grupos = GrupoEconomico::all();
        return view('bandeiras.create', compact('grupos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'grupo_economico_id' => 'required|exists:grupos_economicos,id'
        ]);

        Bandeira::create($request->all());

        return redirect()->route('bandeiras.index')
            ->with('success', 'Bandeira criada com sucesso.');
    }

    public function edit(Bandeira $bandeira)
    {
        $grupos = GrupoEconomico::all();
        return view('bandeiras.edit', compact('bandeira', 'grupos'));
    }

    public function update(Request $request, Bandeira $bandeira)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'grupo_economico_id' => 'required|exists:grupos_economicos,id'
        ]);

        $bandeira->update($request->all());

        return redirect()->route('bandeiras.index')
            ->with('success', 'Bandeira atualizada com sucesso.');
    }

    public function destroy(Bandeira $bandeira)
    {
        $bandeira->delete();

        return redirect()->route('bandeiras.index')
            ->with('success', 'Bandeira excluída com sucesso.');
    }
}