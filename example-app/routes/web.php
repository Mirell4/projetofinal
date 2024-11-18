<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AtendimentoSaudeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::resource('alunos', 'AlunoController');
// Route::resource('dados-saude', 'DadosSaudeController');
// outras rotas necessárias

Route::get('criar', function() {
    return view('criarperfil');
})->name('criar');

//Route::get('perfil', function() {
//  return view('perfil');
// });

Route::get('pesquisa', function() {
    return view('pesquisa');
})->name('pesquisa');

Route::post('/pesquisa', [AlunoController::class, 'pesquisarAlunos'])->name('pesquisa');

Route::get('/pesquisa', [AlunoController::class, 'listarAlunos'])->name('listar.alunos');

Route::get('/perfil/{id}', [AlunoController::class, 'perfil'])->name('perfil');
Route::post('/perfil/{id}', [AtendimentoSaudeController::class, 'store']);

Route::post('/atendimentos', [AtendimentoSaudeController::class, 'store'])->name('atendimentos.store');


// Criar Aluno
// Rota para mostrar o formulário de cadastro de aluno (GET)
Route::get('/formulario-cadastro', [AlunoController::class, 'create'])->name('formulario.cadastro');

// Rota para armazenar o aluno (POST)
Route::post('/alunos/store', [AlunoController::class, 'store'])->name('alunos.store');

// Rota para a página de início
Route::get('/inicio', [PageController::class, 'inicio'])->name('inicio');

// Rota para a página do Dashboard
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// login 
Route::get('/login', [LoginController::class, 'login'])->name('login');

// foto
Route::get('/foto/{id}', [AlunoController::class, 'capturarFoto'])->name('foto');

Route::post('/foto/salvar/{id}', [AlunoController::class, 'salvarFoto'])->name('salvar.foto');

// editar perfil
Route::put('/perfil/{id}', [AlunoController::class, 'update'])->name('perfil.update');















