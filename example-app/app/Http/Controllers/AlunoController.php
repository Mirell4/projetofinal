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
    $request->validate([
        'search' => 'required|string|max:255',
    ]);

    $nome = $request->input('search');
    $palavras = explode(' ', $nome);
    $query = Aluno::query();

    foreach ($palavras as $palavra) {
        $query->where('nome', 'like', '%' . $palavra . '%');
    }

    $alunos = $query->get();

    return view('pesquisa', compact('alunos'));
}




    public function listarAlunos()
    {
        $alunos = Aluno::all(); // Busca todos os alunos no banco de dados
        return view('pesquisa', compact('alunos')); // Passa a lista de alunos para a view
    }


    public function perfil($id)
    {
        $aluno = Aluno::findOrFail($id); // Busca o aluno pelo ID
        return view('perfil', compact('aluno')); // Passa a variável para a view
    }


    
}
