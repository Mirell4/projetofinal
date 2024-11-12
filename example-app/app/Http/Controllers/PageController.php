<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Método que retorna a view da página de início
    public function inicio()
    {
        return view('inicio'); // Aqui você cria a view 'inicio.blade.php'
    }

    // Método que retorna a view do dashboard
    public function dashboard()
    {
        return view('dashboard'); // Aqui você cria a view 'dashboard.blade.php'
    }
}
