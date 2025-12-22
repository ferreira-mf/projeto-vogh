<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ColaboradoresExport implements FromCollection, WithHeadings
{
    protected $colaboradores;

    // Recebe os colaboradores filtrados
    public function __construct(Collection $colaboradores)
    {
        $this->colaboradores = $colaboradores;
    }

    public function collection()
    {
        return $this->colaboradores->map(function ($colaborador) {
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