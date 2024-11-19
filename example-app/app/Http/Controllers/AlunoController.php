<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contato;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;

class AlunoController extends Controller
{

    /* Pesquisar alunos pelo nome */
    public function pesquisarAlunos(Request $request){
        $request->validate([
            'search' => 'required|string|max:255',
        ]);

        $nome = $request->input('search');
        $palavras = explode(' ', $nome);
        $user = Auth::user();
        $query = Aluno::where('user_id', $user->id);

        foreach ($palavras as $palavra) {
            $query->where('nome', 'like', '%' . $palavra . '%');
        }

        $alunos = $query->get();

        return view('pesquisa', compact('alunos'));
    }


    public function listarAlunos()
    {
        $user = Auth::user();
        $alunos = Aluno::where('user_id', $user->id)->get(); // Busca todos os alunos no banco de dados
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


    public function salvarFoto(Request $request, $id){
    // Encontra o aluno pelo ID ou retorna 404 caso não seja encontrado
    $aluno = Aluno::findOrFail($id);

    // Verifica se o arquivo foi enviado e se é válido
    if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
        // Armazena a foto no disco 'public', dentro da pasta 'img'
        $path = $request->file('foto')->store('img', 'public');

        // Atualiza o campo 'foto' do aluno com o caminho relativo da foto
        $aluno->foto = $path;

        // Salva as alterações no banco de dados
        $aluno->save();
    } else {
        // Caso o arquivo não seja válido ou não tenha sido enviado, você pode retornar uma resposta de erro.
        return response()->json(['error' => 'Foto inválida ou não enviada.'], 400);
    }

    // Retorna uma resposta de sucesso, você pode retornar a foto, o aluno ou apenas uma mensagem de sucesso
    return response()->json(['success' => 'Foto salva com sucesso!', 'path' => $path]);
}


public function update(Request $request, $id){
    $aluno = Aluno::findOrFail($id);
    $aluno->update([
        'nome' => $request->nome,
        'telefone' => $request->endereco,
        'email' => $request->email,
        'rg' => $request->rg,
        'cpf' => $request->cpf,
        'endereco' => $request->endereco,
        'nascimento' => $request->nascimento,
        'responsavel' => $request->responsavel,
        'tipo' => $request->tipo,
        'inicio' => $request->inicio,
        'termino' => $request->termino,
        'horario' => $request->horario,
        
        // Outros campos que você deseja atualizar
    ]);

    // Se uma nova foto for enviada
    if ($request->hasFile('foto')) {
        $path = $request->file('foto')->store('public/fotos');
        $aluno->foto = basename($path);
    }

    // Atualiza o contato (se necessário)
    if ($aluno->contatos()->exists()) {
        $aluno->contatos->first()->update([
            'email' => $request->email,
            'telefone' => $request->telefone,
        ]);
    }

    return redirect()->route('perfil', $aluno->id)->with('success', 'Perfil atualizado com sucesso!');
}

public function editFoto(Request $request, $id){
    // Encontra o aluno pelo ID ou retorna 404 caso não seja encontrado
    $aluno = Aluno::findOrFail($id);

    // Verifica se o arquivo foi enviado e se é válido
    if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
        // Armazena a foto no disco 'public', dentro da pasta 'img'
        $path = $request->file('foto')->store('img', 'public');

        // Atualiza o campo 'foto' do aluno com o caminho relativo da foto
        $aluno->foto = $path;

        // Salva as alterações no banco de dados
        $aluno->save();
    } else {
        // Caso o arquivo não seja válido ou não tenha sido enviado, você pode retornar uma resposta de erro.
        return response()->json(['error' => 'Foto inválida ou não enviada.'], 400);
    }

    // Retorna uma resposta de sucesso, você pode retornar a foto, o aluno ou apenas uma mensagem de sucesso
    return response()->json(['success' => 'Foto salva com sucesso!', 'path' => $path]);
}

}