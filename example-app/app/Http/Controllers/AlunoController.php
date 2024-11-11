<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno; // Assuming Aluno model is located in App\Models namespace

class AlunoController extends Controller
{

    /* Pesquisar alunos pelo nome */
    public function pesquisarAlunos(Request $request){
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



    /* Criar aluno */
    public function create(){
        return view('formulario');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'telefone' => 'required|string|max:150',
            'rg' => 'required|string|max:20',
            'cpf' => 'required|string|max:140',
            'endereco' => 'required|string|max:255',
            'nascimento' => 'required|date',
            'horario' => 'required|string|max:255',
            'responsavel' => 'required|string|max:150',
            'tipo' => 'required|string|max:250',
            'inicio' => 'required|date',
            'termino' => 'required|date',
            
        ]);

       

        // Criação do aluno
        Aluno::create([
            'nome' => $validatedData['nome'],
            'email' => $validatedData['email'],
            'telefone' => $validatedData['telefone'],
            'rg' => $validatedData['rg'],
            'cpf' => $validatedData['cpf'],
            'endereco' => $validatedData['endereco'],
            'nascimento' => $validatedData['nascimento'],
            'horario' => $validatedData['horario'],
            'responsavel' => $validatedData['responsavel'],
            'tipo' => $validatedData['tipo'],
            'inicio' => $validatedData['inicio'],
            'termino' => $validatedData['termino'],
            
        ]);

        // Redireciona com mensagem de sucesso
        return response()->json([
            'success' => true,
            'message' => 'Aluno cadastrado com sucesso!',
        ], 200);
    }

};
