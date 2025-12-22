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
            ['nome' => 'Cláudia Ramos', 'email' => 'claudia.ramos@teste.com', 'cpf' => '11111111112', 'unidade_id' => 1],
            ['nome' => 'Pedro Henrique', 'email' => 'pedro.henrique@teste.com', 'cpf' => '11111111113', 'unidade_id' => 1],
            ['nome' => 'Mariana Lopes', 'email' => 'mariana.lopes@teste.com', 'cpf' => '11111111114', 'unidade_id' => 1],
            ['nome' => 'André Carvalho', 'email' => 'andre.carvalho@teste.com', 'cpf' => '11111111115', 'unidade_id' => 1],
            ['nome' => 'Patrícia Souza', 'email' => 'patricia.souza@teste.com', 'cpf' => '11111111116', 'unidade_id' => 1],
            ['nome' => 'Rodrigo Almeida', 'email' => 'rodrigo.almeida@teste.com', 'cpf' => '11111111117', 'unidade_id' => 1],
            ['nome' => 'Daniela Castro', 'email' => 'daniela.castro@teste.com', 'cpf' => '11111111118', 'unidade_id' => 1],
            ['nome' => 'Fábio Moreira', 'email' => 'fabio.moreira@teste.com', 'cpf' => '11111111119', 'unidade_id' => 1],
            ['nome' => 'Helena Duarte', 'email' => 'helena.duarte@teste.com', 'cpf' => '11111111120', 'unidade_id' => 1],
            ['nome' => 'Rafael Pinto', 'email' => 'rafael.pinto@teste.com', 'cpf' => '11111111121', 'unidade_id' => 1],
            ['nome' => 'Beatriz Rocha', 'email' => 'beatriz.rocha@teste.com', 'cpf' => '11111111122', 'unidade_id' => 1],
            ['nome' => 'Leonardo Costa', 'email' => 'leonardo.costa@teste.com', 'cpf' => '22222222212', 'unidade_id' => 2],
            ['nome' => 'Natália Fernandes', 'email' => 'natalia.fernandes@teste.com', 'cpf' => '22222222213', 'unidade_id' => 2],
            ['nome' => 'Gustavo Ribeiro', 'email' => 'gustavo.ribeiro@teste.com', 'cpf' => '22222222214', 'unidade_id' => 2],
            ['nome' => 'Carolina Martins', 'email' => 'carolina.martins@teste.com', 'cpf' => '22222222215', 'unidade_id' => 2],
            ['nome' => 'Vinícius Oliveira', 'email' => 'vinicius.oliveira@teste.com', 'cpf' => '22222222216', 'unidade_id' => 2],
            ['nome' => 'Tatiana Silva', 'email' => 'tatiana.silva@teste.com', 'cpf' => '22222222217', 'unidade_id' => 2],
            ['nome' => 'Marcela Gomes', 'email' => 'marcela.gomes@teste.com', 'cpf' => '22222222218', 'unidade_id' => 2],
            ['nome' => 'Fernando Dias', 'email' => 'fernando.dias@teste.com', 'cpf' => '22222222219', 'unidade_id' => 2],
            ['nome' => 'Paula Souza', 'email' => 'paula.souza@teste.com', 'cpf' => '22222222220', 'unidade_id' => 2],
            ['nome' => 'Luiz Henrique', 'email' => 'luiz.henrique@teste.com', 'cpf' => '22222222221', 'unidade_id' => 2],
            ['nome' => 'Débora Lima', 'email' => 'debora.lima@teste.com', 'cpf' => '33333333312', 'unidade_id' => 3],
            ['nome' => 'Marcos Vinícius', 'email' => 'marcos.vinicius@teste.com', 'cpf' => '33333333313', 'unidade_id' => 3],
            ['nome' => 'Elaine Souza', 'email' => 'elaine.souza@teste.com', 'cpf' => '33333333314', 'unidade_id' => 3],
            ['nome' => 'Cristiano Lopes', 'email' => 'cristiano.lopes@teste.com', 'cpf' => '33333333315', 'unidade_id' => 3],
            ['nome' => 'Tatiane Ramos', 'email' => 'tatiane.ramos@teste.com', 'cpf' => '33333333316', 'unidade_id' => 3],
            ['nome' => 'Maurício Ferreira', 'email' => 'mauricio.ferreira@teste.com', 'cpf' => '33333333317', 'unidade_id' => 3],
            ['nome' => 'Simone Duarte', 'email' => 'simone.duarte@teste.com', 'cpf' => '33333333318', 'unidade_id' => 3],
            ['nome' => 'Henrique Castro', 'email' => 'henrique.castro@teste.com', 'cpf' => '33333333319', 'unidade_id' => 3],
            ['nome' => 'Juliana Melo', 'email' => 'juliana.melo@teste.com', 'cpf' => '33333333320', 'unidade_id' => 3],
            ['nome' => 'Roberto Almeida', 'email' => 'roberto.almeida@teste.com', 'cpf' => '33333333321', 'unidade_id' => 3],
            ['nome' => 'Cláudio Ferreira', 'email' => 'claudio.ferreira@teste.com', 'cpf' => '44444444412', 'unidade_id' => 4],
            ['nome' => 'Luciana Prado', 'email' => 'luciana.prado@teste.com', 'cpf' => '44444444413', 'unidade_id' => 4],
            ['nome' => 'Mateus Rocha', 'email' => 'mateus.rocha@teste.com', 'cpf' => '44444444414', 'unidade_id' => 4],
            ['nome' => 'Priscila Nunes', 'email' => 'priscila.nunes@teste.com', 'cpf' => '44444444415', 'unidade_id' => 4],
            ['nome' => 'Renato Silva', 'email' => 'renato.silva@teste.com', 'cpf' => '44444444416', 'unidade_id' => 4],
            ['nome' => 'Aline Costa', 'email' => 'aline.costa@teste.com', 'cpf' => '44444444417', 'unidade_id' => 4],
            ['nome' => 'Douglas Martins', 'email' => 'douglas.martins@teste.com', 'cpf' => '44444444418', 'unidade_id' => 4],
            ['nome' => 'Carla Ribeiro', 'email' => 'carla.ribeiro@teste.com', 'cpf' => '44444444419', 'unidade_id' => 4],
            ['nome' => 'Felipe Souza', 'email' => 'felipe.souza@teste.com', 'cpf' => '44444444420', 'unidade_id' => 4],
            ['nome' => 'Viviane Mendes', 'email' => 'viviane.mendes@teste.com', 'cpf' => '44444444421', 'unidade_id' => 4],
            ['nome' => 'Marcelo Cunha', 'email' => 'marcelo.cunha@teste.com', 'cpf' => '55555555512', 'unidade_id' => 5],
            ['nome' => 'Patrícia Ramos', 'email' => 'patricia.ramos@teste.com', 'cpf' => '55555555513', 'unidade_id' => 5],
            ['nome' => 'Fernando Rocha', 'email' => 'fernando.rocha@teste.com', 'cpf' => '55555555514', 'unidade_id' => 5],
            ['nome' => 'Joana Dias', 'email' => 'joana.dias@teste.com', 'cpf' => '55555555515', 'unidade_id' => 5],

        ];

        foreach ($colaboradores as $c) {
            Colaborador::create($c);
        }
    }
}