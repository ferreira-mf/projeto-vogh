<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colaborador;

class ColaboradorSeeder extends Seeder
{
    public function run(): void
    {
        $colaboradores = [
            ['nome' => 'Diego Alves', 'email' => 'diego.alves@teste.com', 'cpf' => '11111111111', 'unidade_id' => 1],
            ['nome' => 'Maria Silva', 'email' => 'maria.silva@teste.com', 'cpf' => '22222222222', 'unidade_id' => 1],
            ['nome' => 'João Pereira', 'email' => 'joao.pereira@teste.com', 'cpf' => '33333333333', 'unidade_id' => 2],
            ['nome' => 'Ana Costa', 'email' => 'ana.costa@teste.com', 'cpf' => '44444444444', 'unidade_id' => 2],
            ['nome' => 'Carlos Souza', 'email' => 'carlos.souza@teste.com', 'cpf' => '55555555555', 'unidade_id' => 3],
            ['nome' => 'Fernanda Lima', 'email' => 'fernanda.lima@teste.com', 'cpf' => '66666666666', 'unidade_id' => 3],
            ['nome' => 'Paulo Mendes', 'email' => 'paulo.mendes@teste.com', 'cpf' => '77777777777', 'unidade_id' => 3],
            ['nome' => 'Juliana Rocha', 'email' => 'juliana.rocha@teste.com', 'cpf' => '88888888888', 'unidade_id' => 4],
            ['nome' => 'Ricardo Gomes', 'email' => 'ricardo.gomes@teste.com', 'cpf' => '99999999999', 'unidade_id' => 4],
            ['nome' => 'Patrícia Alves', 'email' => 'patricia.alves@teste.com', 'cpf' => '10101010101', 'unidade_id' => 4],
            ['nome' => 'Lucas Martins', 'email' => 'lucas.martins@teste.com', 'cpf' => '12121212121', 'unidade_id' => 5],
            ['nome' => 'Camila Ferreira', 'email' => 'camila.ferreira@teste.com', 'cpf' => '13131313131', 'unidade_id' => 5],
            ['nome' => 'Bruno Oliveira', 'email' => 'bruno.oliveira@teste.com', 'cpf' => '14141414141', 'unidade_id' => 5],
            ['nome' => 'Sofia Santos', 'email' => 'sofia.santos@teste.com', 'cpf' => '15151515151', 'unidade_id' => 5],
            ['nome' => 'Thiago Ribeiro', 'email' => 'thiago.ribeiro@teste.com', 'cpf' => '16161616161', 'unidade_id' => 6],
            ['nome' => 'Isabela Nunes', 'email' => 'isabela.nunes@teste.com', 'cpf' => '17171717171', 'unidade_id' => 6],
            ['nome' => 'Felipe Araújo', 'email' => 'felipe.araujo@teste.com', 'cpf' => '18181818181', 'unidade_id' => 6],
            ['nome' => 'Larissa Melo', 'email' => 'larissa.melo@teste.com', 'cpf' => '19191919191', 'unidade_id' => 6],
            ['nome' => 'Gabriel Cunha', 'email' => 'gabriel.cunha@teste.com', 'cpf' => '20202020202', 'unidade_id' => 7],
            ['nome' => 'Renata Dias', 'email' => 'renata.dias@teste.com', 'cpf' => '21212121212', 'unidade_id' => 7],
            ['nome' => 'Eduardo Barbosa', 'email' => 'eduardo.barbosa@teste.com', 'cpf' => '22222222223', 'unidade_id' => 7],
            ['nome' => 'Vanessa Teixeira', 'email' => 'vanessa.teixeira@teste.com', 'cpf' => '23232323232', 'unidade_id' => 7],
            ['nome' => 'Marcelo Vieira', 'email' => 'marcelo.vieira@teste.com', 'cpf' => '24242424242', 'unidade_id' => 7],
            ['nome' => 'Tatiane Moreira', 'email' => 'tatiane.moreira@teste.com', 'cpf' => '25252525252', 'unidade_id' => 7],
        ];

        foreach ($colaboradores as $c) {
            Colaborador::create($c);
        }
    }
}