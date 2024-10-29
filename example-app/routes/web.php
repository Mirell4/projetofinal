<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AtendimentoSaudeController;
use Illuminate\Support\Facades\Route;

// Route::resource('alunos', 'AlunoController');
// Route::resource('dados-saude', 'DadosSaudeController');
// outras rotas necessárias

Route::get('criar', function() {
    return view('criarperfil');
})->name('criar');

Route::get('perfil', function() {
    return view('perfil');
});

Route::get('pesquisa', function() {
    return view('pesquisa');
})->name('pesquisa');

Route::post('/pesquisa', [AlunoController::class, 'pesquisarAlunos'])->name('pesquisa');

Route::get('/pesquisa', [AlunoController::class, 'listarAlunos'])->name('listar.alunos');

Route::get('/perfil/{id}', [AlunoController::class, 'perfil'])->name('perfil');
Route::post('/perfil/{id}', [AtendimentoSaudeController::class, 'store']);

Route::post('/atendimentos', [AtendimentoSaudeController::class, 'store'])->name('atendimentos.store');
