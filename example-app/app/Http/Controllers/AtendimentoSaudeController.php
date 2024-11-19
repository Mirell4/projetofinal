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

    public function update(Request $request, $id){
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:255',
            'comentario' => 'required|string',
            'status' => 'required|in:Ativo,Inativo,Pendente',
            'arquivo' => 'nullable|file',  // Validação do arquivo, caso haja
        ]);

        // Encontrar o atendimento pelo ID
        $atendimento = Atendimento::findOrFail($id);

        // Atualizar os dados do atendimento
        $atendimento->titulo = $request->input('titulo');
        $atendimento->comentario = $request->input('comentario');
        $atendimento->status = $request->input('status');

        // Se houver um arquivo, processa o upload
        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $path = $file->storeAs('public/arquivos', $file->getClientOriginalName());
            $atendimento->arquivo = $path;
        }

        // Salva as mudanças
        $atendimento->save();

        // Retorna uma resposta de sucesso
        return response()->json([
            'message' => 'Comentário atualizado com sucesso!',
            'atendimento' => $atendimento
        ]);
    }

}

