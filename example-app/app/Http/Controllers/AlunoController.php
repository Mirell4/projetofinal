<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno; // Assuming Aluno model is located in App\Models namespace

class AlunoController extends Controller
{
    /**
     * Inserir alunos fictícios.
     */
    public function inserirAlunosFicticios()
    {
        // Example of inserting a single student record
        Aluno::create([
            'nome' => 'João da Silva',
            'data_nascimento' => '1990-05-15',
            'informacoes_contato' => 'joao@email.com',
            // Add other necessary fields here
        ]);

        // You can insert more students as needed

        return response()->json(['message' => 'Alunos fictícios inseridos com sucesso']);
    }

    /**
     * Pesquisar alunos pelo nome.
     */
    public function pesquisarAlunos(Request $request)
    {
        $nome = $request->input('nome');

        // Search for students whose name contains the provided substring
        $alunos = Aluno::where('nome', 'like', '%'.$nome.'%')->get();

        return response()->json($alunos);
    }
}
