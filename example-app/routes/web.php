<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

// Route::resource('alunos', 'AlunoController');
// Route::resource('dados-saude', 'DadosSaudeController');
// outras rotas necessárias

Route::get('perfil', function() {
    return view('perfil');
});

Route::get('pesquisa', function() {
    return view('pesquisa');
})->name('pesquisa');

Route::post('pesquisa', [AlunoController::class, 'pesquisarAlunos']);