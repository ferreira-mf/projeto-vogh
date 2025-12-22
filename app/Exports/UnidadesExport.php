<?php

namespace App\Exports;

use App\Models\Unidade;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UnidadesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Unidade::with('bandeira.grupoEconomico')->get()->map(function ($unidade) {
            return [
                'ID' => $unidade->id,
                'Nome Fantasia' => $unidade->nome_fantasia,
                'Razão Social' => $unidade->razao_social,
                'Bandeira' => $unidade->bandeira->nome ?? '',
                'Grupo Econômico' => $unidade->bandeira->grupoEconomico->nome ?? '',
                'Criado em' => $unidade->created_at?->format('d/m/Y H:i'),
                'Atualizado em' => $unidade->updated_at?->format('d/m/Y H:i'),
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nome Fantasia',
            'Razão Social',
            'Bandeira',
            'Grupo Econômico',
            'Criado em',
            'Atualizado em',
        ];
    }
}