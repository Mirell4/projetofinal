<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    public function run()
    {
        DB::table('alunos')->insert([
            [
                'tipo' => 'CAI - Eletromecânica',
                'nome' => 'João Silva',
                'endereco' => 'Rua João Antoônio, 321',
                'nascimento' => '24/08/2000',
                'horario' => 'Manhã',
                'termino' => '2024-12-20',
                'status' => 'Ativo',
                'inicio' => '2022-12-20',
                'rg' => '202.222.22-2',
                'cpf' => '2022233',
                'foto' => 'storage/img/unnamed.png',
            ],
            [
                'tipo' => 'FIC - ADM',
                'nome' => 'Maria Oliveira',
                'endereco' => 'Rua prado, 123',
                'nascimento' => '21/10/2006',
                'horario' => 'Tarde',
                'termino' => '2024-12-20',
                'status' => 'Ativo',
                'inicio' => '2022-12-20',
                'rg' => '202.222.22-2',
                'cpf' => '2022233',
                'foto' => 'storage/img/unnamed.png',
            ],
            [
                'tipo' => 'FIC - ADM',
                'nome' => 'Raiam Santos',
                'endereco' => 'Rua prado, 123',
                'nascimento' => '21/10/2006',
                'horario' => 'Tarde',
                'termino' => '2024-12-20',
                'status' => 'Ativo',
                'inicio' => '2022-12-20',
                'rg' => '202.23232.22-2',
                'cpf' => '02932838387',
                'foto' => 'storage/img/unnamed.png',
            ],
            [
                'tipo' => 'Técnico - DS',
                'nome' => 'Pietro Oliveira',
                'endereco' => 'Rua Durvalino de Castro, 184',
                'nascimento' => '21/02/2007',
                'horario' => 'Integral',
                'termino' => '2024-12-20',
                'status' => 'Ativo',
                'inicio' => '2022-12-20',
                'rg' => '202.222.22-2',
                'cpf' => '2022233',
                'foto' => 'storage/img/unnamed.png',
            ],
            
        ]);
    }
}