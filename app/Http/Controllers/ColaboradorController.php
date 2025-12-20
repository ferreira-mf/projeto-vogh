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
            // CPF agora exige apenas 11 dígitos numéricos
            'cpf' => ['required', 'digits:11', 'unique:colaboradores,cpf'],
            'unidade_id' => 'required|exists:unidades,id',
        ], [
            'email.unique' => 'Este e-mail já está cadastrado.',
            'email.email' => 'Informe um e-mail válido.',
            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.digits' => 'Informe um CPF válido de 11 dígitos.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'unidade_id.required' => 'Selecione uma unidade.',
            'unidade_id.exists' => 'A unidade selecionada não existe.',
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
            // CPF também exige apenas 11 dígitos numéricos no update
            'cpf' => ['required', 'digits:11', 'unique:colaboradores,cpf,' . $colaborador->id . ',id'],
            'unidade_id' => 'required|exists:unidades,id',
        ], [
            'email.unique' => 'Este e-mail já está cadastrado.',
            'email.email' => 'Informe um e-mail válido.',
            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.digits' => 'Informe um CPF válido de 11 dígitos.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'unidade_id.required' => 'Selecione uma unidade.',
            'unidade_id.exists' => 'A unidade selecionada não existe.',
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