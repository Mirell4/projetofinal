<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contato;
use App\Models\Aluno; 

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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        // Criação do aluno na tabela alunos
        $aluno = Aluno::create([
            'nome' => $validatedData['nome'],
            'rg' => $validatedData['rg'],
            'cpf' => $validatedData['cpf'],
            'endereco' => $validatedData['endereco'],
            'nascimento' => $validatedData['nascimento'],
            'horario' => $validatedData['horario'],
            'tipo' => $validatedData['tipo'],
            'inicio' => $validatedData['inicio'],
            'termino' => $validatedData['termino'],
            //'foto' => $validatedData['foto'],
        ]);

        // Criação dos contatos na tabela contatos, associando ao aluno
        Contato::create([
            'aluno_id' => $aluno->id,
            'email' => $validatedData['email'],
            'telefone' => $validatedData['telefone'],
            'responsavel' => $validatedData['responsavel'],
        ]);

        // Redireciona para a página de captura de foto
        return redirect()->route('foto', ['id' => $aluno->id])->with('success', 'Aluno cadastrado com sucesso!');
    }

    // Método para exibir a página de captura de foto
    public function capturarFoto($id)
    {
        $aluno = Aluno::findOrFail($id); // Busca o aluno pelo ID
        return view('foto', compact('aluno')); // Passa o aluno para a view
    }


    public function salvarFoto(Request $request, $id)
    {
    $aluno = Aluno::findOrFail($id);

    if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
        $path = $request->file('foto')->store('fotos', 'public'); // Armazena a foto no disco público

        $aluno->foto = $path; // Salva o caminho no banco de dados
        $aluno->save();
    }

    return redirect()->route('perfil', ['id' => $aluno->id])->with('success', 'Foto salva com sucesso!');
}

}