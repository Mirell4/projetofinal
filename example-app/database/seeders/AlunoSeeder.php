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
                //'foto' => base64_encode(file_get_contents('http://localhost:8000/storage/img/unnamed.png'))
            ],
            [
                'tipo' => 'FIC - ADM',
                'nome' => 'Maria Oliveira',
                'endereco' => 'Rua prado, 123',
                'nascimento' => '21/10/2006',
                'horario' => 'Tarde',
                'termino' => '2024-12-20',
                'status' => 'Ativo',
                //'foto' => null
            ],
            [
                'tipo' => 'Técnico - DS',
                'nome' => 'Pietro Oliveira',
                'endereco' => 'Rua Durvalino de Castro, 184',
                'nascimento' => '21/02/2007',
                'horario' => 'Integral',
                'termino' => '2024-12-20',
                'status' => 'Ativo',
                //'foto' => null
            ],
            
        ]);
    }
}