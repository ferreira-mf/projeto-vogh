<?php

namespace App\Exports;

use App\Models\GrupoEconomico;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GruposExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return GrupoEconomico::all()->map(function ($grupo) {
            return [
                'ID' => $grupo->id,
                'Nome' => $grupo->nome,
                'Criado em' => $grupo->created_at?->format('d/m/Y H:i'),
                'Atualizado em' => $grupo->updated_at?->format('d/m/Y H:i'),
            ];
        });
    }

    public function headings(): array
    {
        return ['ID', 'Nome', 'Criado em', 'Atualizado em'];
    }
}