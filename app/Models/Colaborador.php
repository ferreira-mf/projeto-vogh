<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';

    protected $fillable = ['nome', 'email', 'cpf', 'unidade_id'];

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    // Mutator: salva apenas números
    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = preg_replace('/\D/', '', $value);
    }

    // Accessor: exibe formatado
    public function getCpfAttribute($value)
    {
        if (strlen($value) === 11) {
            return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "$1.$2.$3-$4", $value);
        }
        return $value;
    }
}