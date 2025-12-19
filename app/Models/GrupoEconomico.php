<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoEconomico extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];
    

    protected $table = 'grupos_economicos';

    public function bandeiras()
    {
        return $this->hasMany(Bandeira::class);
    }
}