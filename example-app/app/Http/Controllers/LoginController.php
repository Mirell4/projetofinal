<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Método que retorna a view da página de início
    public function login()
    {
        return view('login'); 
    }

}