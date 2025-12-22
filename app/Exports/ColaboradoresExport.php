<?php

namespace App\Exports;

use App\Models\Colaborador;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ColaboradoresExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Colaborador::with('unidade.bandeira.grupoEconomico')
            ->get()
            ->map(function ($colaborador) {
                return [
                    'ID' => $colaborador->id,
                    'Nome' => $colaborador->nome,
                    'Email' => $colaborador->email,
                    'CPF' => $colaborador->cpf,
                    'Unidade' => $colaborador->unidade->nome_fantasia ?? '',
                    'Bandeira' => $colaborador->unidade->bandeira->nome ?? '',
                    'Grupo Econômico' => $colaborador->unidade->bandeira->grupoEconomico->nome ?? '',
                    'Criado em' => $colaborador->created_at->format('d/m/Y H:i'),
                    'Atualizado em' => $colaborador->updated_at->format('d/m/Y H:i'),
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nome',
            'Email',
            'CPF',
            'Unidade',
            'Bandeira',
            'Grupo Econômico',
            'Criado em',
            'Atualizado em',
        ];
    }
}