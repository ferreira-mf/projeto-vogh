<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class GrupoEconomico extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['nome'];

    protected $table = 'grupos_economicos';

    
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('grupo_economico')
            ->logOnly(['nome'])
            ->logOnlyDirty(); 
    }

    public function bandeiras()
    {
        return $this->hasMany(Bandeira::class);
    }
}