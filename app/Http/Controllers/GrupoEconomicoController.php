<?php

namespace App\Http\Controllers;

use App\Models\GrupoEconomico;
use Illuminate\Http\Request;

class GrupoEconomicoController extends Controller
{
    public function index()
    {
        $grupos = GrupoEconomico::all();
        return view('grupos.index', compact('grupos'));
    }

    public function create()
    {
        return view('grupos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255'
        ]);

        GrupoEconomico::create($request->all());

        return redirect()->route('grupos-economicos.index')
                         ->with('success', 'Grupo Econômico criado com sucesso.');
    }

    public function edit(GrupoEconomico $grupos_economico)
    {
        return view('grupos.edit', compact('grupos_economico'));
    }

    public function update(Request $request, GrupoEconomico $grupos_economico)
    {
        $request->validate([
            'nome' => 'required|string|max:255'
        ]);

        $grupos_economico->update($request->all());

        return redirect()->route('grupos-economicos.index')
                         ->with('success', 'Grupo Econômico atualizado com sucesso.');
    }

    public function destroy(GrupoEconomico $grupos_economico)
    {
        $grupos_economico->delete();

        return redirect()->route('grupos-economicos.index')
                         ->with('success', 'Grupo Econômico removido com sucesso.');
    }
}