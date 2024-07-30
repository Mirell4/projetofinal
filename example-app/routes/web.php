<?php

use Illuminate\Support\Facades\Route;

Route::resource('alunos', 'AlunoController');
Route::resource('dados-saude', 'DadosSaudeController');
// outras rotas necessárias

