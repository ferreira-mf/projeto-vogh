<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Unidade;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index()
    {
        $colaboradores = Colaborador::with('unidade')->orderByDesc('id')->get();
        return view('colaboradores.index', compact('colaboradores'));
    }

    public function create()
    {
        $unidades = Unidade::orderBy('nome_fantasia')->get();
        return view('colaboradores.create', compact('unidades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:colaboradores,email',
            'cpf' => 'required|string|max:14|unique:colaboradores,cpf',
            'unidade_id' => 'required|exists:unidades,id',
        ]);

        Colaborador::create($request->only(['nome', 'email', 'cpf', 'unidade_id']));

        return redirect()->route('colaboradores.index')->with('success', 'Colaborador criado com sucesso!');
    }

    public function edit(Colaborador $colaborador)
    {
        $unidades = Unidade::orderBy('nome_fantasia')->get();
        return view('colaboradores.edit', compact('colaborador', 'unidades'));
    }

    public function update(Request $request, Colaborador $colaborador)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:colaboradores,email,' . $colaborador->id . ',id',
            'cpf' => 'required|string|max:14|unique:colaboradores,cpf,' . $colaborador->id . ',id',
            'unidade_id' => 'required|exists:unidades,id',
        ]);

        $colaborador->update($request->only(['nome', 'email', 'cpf', 'unidade_id']));

        return redirect()->route('colaboradores.index')->with('success', 'Colaborador atualizado com sucesso!');
    }

    public function destroy(Colaborador $colaborador)
    {
        $colaborador->delete();
        return redirect()->route('colaboradores.index')->with('success', 'Colaborador excluído com sucesso!');
    }
}