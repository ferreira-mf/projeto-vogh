<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bandeira;

class BandeiraSeeder extends Seeder
{
    public function run(): void
    {
        Bandeira::create(['nome' => 'Supermercados BomPreço', 'grupo_economico_id' => 1]);
        Bandeira::create(['nome' => 'Farmácias VidaMais', 'grupo_economico_id' => 1]);
        Bandeira::create(['nome' => 'Postos Horizonte', 'grupo_economico_id' => 2]);
        Bandeira::create(['nome' => 'Construtora Horizonte', 'grupo_economico_id' => 2]);
        Bandeira::create(['nome' => 'Clínicas Vale Verde', 'grupo_economico_id' => 3]);
    }
}