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
            'arquivo' => 'nullable|file|mimes:jpg,png,pdf,docx|max:2048', // Validação do arquivo
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
        return response()->json(['message' => 'Comentário salvo com sucesso!'], 201);
    }
}

