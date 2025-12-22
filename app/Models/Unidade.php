<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Unidade extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'nome_fantasia',
        'razao_social',
        'cnpj',
        'bandeira_id'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('unidade')
            ->logOnly(['nome_fantasia', 'razao_social', 'cnpj', 'bandeira_id'])
            ->logOnlyDirty();
    }

    public function bandeira()
    {
        return $this->belongsTo(Bandeira::class);
    }

    public function colaboradores()
    {
        return $this->hasMany(Colaborador::class);
    }
}