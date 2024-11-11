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
        'tipo' => 'FIC - ADM',
        'nome' => 'Ana Silva',
        'endereco' => 'Rua A, 123, São Paulo - SP',
        'nascimento' => '15/05/2001',
        'horario' => 'Manhã',
        'termino' => '2023-12-31',
        'inicio' => '2023-01-01',
        'rg' => '123456789-0',
        'cpf' => '123.456.789-00',
        'foto' => '/storage/img/mulher1.jpg',
    ],
    [
        'tipo' => 'FIC - PSICOLOGIA',
        'nome' => 'Beatriz Santos',
        'endereco' => 'Rua B, 456, São Paulo - SP',
        'nascimento' => '22/03/2002',
        'horario' => 'Tarde',
        'termino' => '2023-11-30',
        'inicio' => '2023-02-01',
        'rg' => '987654321-0',
        'cpf' => '987.654.321-00',
        'foto' => '/storage/img/mulher2.jpg',
    ],
    [
        'tipo' => 'Técnico - Engenharia Civil',
        'nome' => 'Camila Almeida',
        'endereco' => 'Rua C, 789, São Paulo - SP',
        'nascimento' => '10/12/2003',
        'horario' => 'Integral',
        'termino' => '2023-10-31',
        'inicio' => '2023-03-01',
        'rg' => '456789123-0',
        'cpf' => '456.789.123-00',
        'foto' => '/storage/img/mulher3.jpg',
    ],
    [
        'tipo' => 'FIC - Medicina',
        'nome' => 'Daniela Lima',
        'endereco' => 'Rua D, 1011, São Paulo - SP',
        'nascimento' => '05/09/2000',
        'horario' => 'Noite',
        'termino' => '2023-09-30',
        'inicio' => '2023-04-01',
        'rg' => '321654987-0',
        'cpf' => '321.654.987-00',
        'foto' => '/storage/img/mulher4.jpg',
    ],
    [
        'tipo' => 'FIC - Direito',
        'nome' => 'Eliane Costa',
        'endereco' => 'Rua E, 1213, São Paulo - SP',
        'nascimento' => '30/06/2001',
        'horario' => 'Manhã',
        'termino' => '2023-08-31',
        'inicio' => '2023-05-01',
        'rg' => '654321987-0',
        'cpf' => '654.321.987-00',
        'foto' => '/storage/img/mulher5.jpg',
    ],
    [
        'tipo' => 'FIC - Arquitetura',
        'nome' => 'Fernanda Rocha',
        'endereco' => 'Rua F, 1415, São Paulo - SP',
        'nascimento' => '18/11/2002',
        'horario' => 'Integral',
        'termino' => '2023-07-31',
        'inicio' => '2023-06-01',
        'rg' => '789123456-0',
        'cpf' => '789.123.456-00',
        'foto' => '/storage/img/mulher6.jpeg',
    ],
    [
        'tipo' => 'FIC - Farmácia',
        'nome' => 'Gabriela Martins',
        'endereco' => 'Rua G, 1617, São Paulo - SP',
        'nascimento' => '25/01/2003',
        'horario' => 'Tarde',
        'termino' => '2024-06-30',
        'inicio' => '2023-07-01',
        'rg' => '147258369-0',
        'cpf' => '147.258.369-00',
        'foto' => '/storage/img/mulher7.jpg',
    ],
    [
        'tipo' => 'FIC - Nutrição',
        'nome' => 'Helena Freitas',
        'endereco' => 'Rua H, 1819, São Paulo - SP',
        'nascimento' => '03/08/2000',
        'horario' => 'Noite',
        'termino' => '2024-05-31',
        'inicio' => '2023-08-01',
        'rg' => '258369147-0',
        'cpf' => '258.369.147-00',
        'foto' => '/storage/img/pessoa2.jpg',
    ],
    [
        'tipo' => 'FIC - Engenharia de Software',
        'nome' => 'Isabela Pires',
        'endereco' => 'Rua I, 2021, São Paulo - SP',
        'nascimento' => '12/02/2004',
        'horario' => 'Tarde',
        'termino' => '2024-04-30',
        'inicio' => '2023-09-01',
        'rg' => '369258147-0',
        'cpf' => '369.258.147-00',
        'foto' => '/storage/img/pessoa3.jpg',
    ],
    [
        'tipo' => 'FIC - Ciência da Computação',
        'nome' => 'Lucas Pereira',
        'endereco' => 'Rua J, 2223, São Paulo - SP',
        'nascimento' => '21/07/2001',
        'horario' => 'Manhã',
        'termino' => '2023-12-31',
        'inicio' => '2023-01-01',
        'rg' => '147963258-0',
        'cpf' => '147.963.258-00',
        'foto' => '/storage/img/pessoa1.jpg',
    ],
    [
        'tipo' => 'FIC - Engenharia Mecânica',
        'nome' => 'Miguel Oliveira',
        'endereco' => 'Rua K, 2425, São Paulo - SP',
        'nascimento' => '29/04/2002',
        'horario' => 'Integral',
        'termino' => '2023-11-30',
        'inicio' => '2023-02-01',
        'rg' => '321987654-0',
        'cpf' => '321.987.654-00',
        'foto' => '/storage/img/homem2.jpg',
    ],
    [
        'tipo' => 'FIC - ADM',
        'nome' => 'Rafael Almeida',
        'endereco' => 'Rua L, 2627, São Paulo - SP',
        'nascimento' => '17/05/2003',
        'horario' => 'Tarde',
        'termino' => '2023-10-31',
        'inicio' => '2023-03-01',
        'rg' => '654987321-0',
        'cpf' => '654.987.321-00',
        'foto' => '/storage/img/homem3.jpg',
    ],
    [
        'tipo' => 'FIC - Direito',
        'nome' => 'Samuel Costa',
        'endereco' => 'Rua M, 2829, São Paulo - SP',
        'nascimento' => '11/11/2000',
        'horario' => 'Noite',
        'termino' => '2023-09-30',
        'inicio' => '2023-04-01',
        'rg' => '987321654-0',
        'cpf' => '987.321.654-00',  
        'foto' => '/storage/img/homem4.jpg',
    ],
    [
        'tipo' => 'FIC - Engenharia Civil',
        'nome' => 'Thiago Santos',
        'endereco' => 'Rua N, 3031, São Paulo - SP',
        'nascimento' => '08/02/2001',
        'horario' => 'Integral',
        'termino' => '2023-08-31',
        'inicio' => '2023-05-01',
        'rg' => '258147369-0',
        'cpf' => '258.147.369-00',
        'foto' => '/storage/img/homem5.jpg',
        ],
        
        ]);
    }
}