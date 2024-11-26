<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\atendimento;

class AtendimentoSaudeController extends Controller
{
    public function store(Request $request, $id)
    {
        // Validação dos dados recebidos
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'comentario' => 'required|string',
            'status' => 'required|string|in:Ativo,Inativo,Pendente',
            'arquivo' => 'nullable|file|mimes:jpg,png,pdf,docx,txt|max:2048', // Validação do arquivo
        ]);

        // Salvar o arquivo, se houver
        if ($request->hasFile('arquivo')) {
            $filePath = $request->file('arquivo')->store('arquivo', 'public'); // Armazenando na pasta "anexos"
            $validatedData['arquivo'] = $filePath;
        }

        $validatedData['aluno_id'] = $id;

        // Criar um novo registro na tabela "atendimentos"
        Atendimento::create($validatedData);

        // Retornar uma resposta (pode ser um redirecionamento ou um JSON)
        return redirect()->back()->with('success', 'Comentário salvo com sucesso!');
    }
public function update(Request $request, $id)
{
    $atendimento = Atendimento::findOrFail($id);

    // Validação dos dados (caso necessário)
    $validated = $request->validate([
        'titulo' => 'required|string|max:255',
        'comentario' => 'required|string',
        'status' => 'required|string',
        'arquivo' => 'nullable|file|mimes:jpg,png,pdf,docx,txt|max:2048', // Validação do arquivo
    ]);

    // Verificar se um novo arquivo foi enviado
    if ($request->hasFile('arquivo')) {
        // Remover o arquivo antigo, se houver
        if ($atendimento->arquivo) {
            // Se o arquivo anterior existir, excluí-lo
            
        }

        // Armazenar o novo arquivo
        $filePath = $request->file('arquivo')->store('arquivo', 'public');
        // Atualiza o campo 'arquivo' com o novo caminho
        $validated['arquivo'] = $filePath;
    } else {
        // Se não houver novo arquivo, mantém o arquivo atual
        $validated['arquivo'] = $atendimento->arquivo;
    }

    // Atualiza os dados do atendimento
    $atendimento->update([
        'titulo' => $request->titulo,
        'comentario' => $request->comentario,
        'arquivo' => $validated['arquivo'], // Mantém ou atualiza o arquivo
        'status' => $request->status,
    ]);

    return redirect()->back()->with('success', 'Atendimento atualizado com sucesso!');
}

    

}

