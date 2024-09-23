<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContatoSeeder extends Seeder
{
    public function run()
    {
        DB::table('contatos')->insert([
            [
                'responsavel' => '(88) 123456789',
                'email' => 'joao@exemplo.com',
                'telefone' => '123456789',
                'aluno_id' => '1',
            ],
            [
                'responsavel' => '(87) 123456789',
                'email' => 'maria@exemplo.com',
                'telefone' => '987654321',
                'aluno_id' => '2',
            ],
            [
                'responsavel' => '(78) 98765467',
                'email' => 'pietro@exemplo.com',
                'telefone' => '9876453221',
                'aluno_id' => '3',
            ],
            
        ]);
    }
}