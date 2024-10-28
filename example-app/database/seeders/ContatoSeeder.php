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
                'responsavel' => '(11) 91234-5678',
                'email' => 'ana.silva@email.com',
                'telefone' => '91234-5678',
                'aluno_id' => 1,
            ],
            [
                'responsavel' => '(11) 92345-6789',
                'email' => 'beatriz.santos@email.com',
                'telefone' => '92345-6789',
                'aluno_id' => 2,
            ],
            [
                'responsavel' => '(11) 93456-7890',
                'email' => 'camila.almeida@email.com',
                'telefone' => '93456-7890',
                'aluno_id' => 3,
            ],
            [
                'responsavel' => '(11) 94567-8901',
                'email' => 'daniela.lima@email.com',
                'telefone' => '94567-8901',
                'aluno_id' => 4,
            ],
            [
                'responsavel' => '(11) 95678-9012',
                'email' => 'eliane.costa@email.com',
                'telefone' => '95678-9012',
                'aluno_id' => 5,
            ],
            [
                'responsavel' => '(11) 96789-0123',
                'email' => 'fernanda.rocha@email.com',
                'telefone' => '96789-0123',
                'aluno_id' => 6,
            ],
            [
                'responsavel' => '(11) 97890-1234',
                'email' => 'gabriela.martins@email.com',
                'telefone' => '97890-1234',
                'aluno_id' => 7,
            ],
            [
                'responsavel' => '(11) 98901-2345',
                'email' => 'helena.freitas@email.com',
                'telefone' => '98901-2345',
                'aluno_id' => 8,
            ],
            [
                'responsavel' => '(11) 99012-3456',
                'email' => 'isabela.pires@email.com',
                'telefone' => '99012-3456',
                'aluno_id' => 9,
            ],
            [
                'responsavel' => '(11) 90123-4567',
                'email' => 'lucas.pereira@email.com',
                'telefone' => '90123-4567',
                'aluno_id' => 10,
            ],
            [
                'responsavel' => '(11) 91234-5678',
                'email' => 'miguel.oliveira@email.com',
                'telefone' => '91234-5678',
                'aluno_id' => 11,
            ],
            [
                'responsavel' => '(11) 92345-6789',
                'email' => 'rafael.almeida@email.com',
                'telefone' => '92345-6789',
                'aluno_id' => 12,
            ],
            [
                'responsavel' => '(11) 93456-7890',
                'email' => 'samuel.costa@email.com',
                'telefone' => '93456-7890',
                'aluno_id' => 13,
            ],
            [
                'responsavel' => '(11) 94567-8901',
                'email' => 'thiago.santos@email.com',
                'telefone' => '94567-8901',
                'aluno_id' => 14,
            ],
            
        ]);
    }
}