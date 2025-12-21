<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unidade;

class UnidadeSeeder extends Seeder
{
    public function run(): void
    {
        Unidade::create([
            'nome_fantasia' => 'BomPreço Centro - São José dos Campos',
            'razao_social' => 'BomPreço Centro LTDA',
            'cnpj' => '11.111.111/0001-11',
            'bandeira_id' => 1,
        ]);

        Unidade::create([
            'nome_fantasia' => 'BomPreço Jardim Satélite - São José dos Campos',
            'razao_social' => 'BomPreço Satélite LTDA',
            'cnpj' => '22.222.222/0001-22',
            'bandeira_id' => 1,
        ]);

        Unidade::create([
            'nome_fantasia' => 'Farmácia VidaMais - Taubaté',
            'razao_social' => 'VidaMais Taubaté LTDA',
            'cnpj' => '33.333.333/0001-33',
            'bandeira_id' => 2,
        ]);

        Unidade::create([
            'nome_fantasia' => 'Posto Horizonte - Jacareí',
            'razao_social' => 'Posto Horizonte Jacareí LTDA',
            'cnpj' => '44.444.444/0001-44',
            'bandeira_id' => 3,
        ]);

        Unidade::create([
            'nome_fantasia' => 'Construtora Horizonte - Campinas',
            'razao_social' => 'Construtora Horizonte Campinas LTDA',
            'cnpj' => '55.555.555/0001-55',
            'bandeira_id' => 4,
        ]);

        Unidade::create([
            'nome_fantasia' => 'Clínica Vale Verde - São Paulo Moema',
            'razao_social' => 'Clínica Vale Verde Moema LTDA',
            'cnpj' => '66.666.666/0001-66',
            'bandeira_id' => 5,
        ]);

        Unidade::create([
            'nome_fantasia' => 'Clínica Vale Verde - São Paulo Pinheiros',
            'razao_social' => 'Clínica Vale Verde Pinheiros LTDA',
            'cnpj' => '77.777.777/0001-77',
            'bandeira_id' => 5,
        ]);
    }
}