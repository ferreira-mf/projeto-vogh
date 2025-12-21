<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GrupoEconomico;

class GrupoEconomicoSeeder extends Seeder
{
    public function run(): void
    {
        GrupoEconomico::create(['nome' => 'Aurora Participações']);
        GrupoEconomico::create(['nome' => 'Horizonte Investimentos']);
        GrupoEconomico::create(['nome' => 'Vale Verde Holding']);
    }
}