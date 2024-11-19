<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{

    //criar
    public function register(Request $request)
    {
        // Validação dos dados do usuário
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // Verifica se o email já existe no banco
            'password' => 'required|min:6|confirmed', // Confirmação da senha
        ]);

        // Criando o novo usuário no banco
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Criptografando a senha
        ]);

        // Fazendo o login automático do usuário após o cadastro
        Auth::login($user);

        // Redirecionando o usuário para a página inicial ou dashboard
        return redirect()->route('criada');
    }
            public function criada()
        {
            return view('criada'); // 
        }
    // Método para fazer login
    public function login(Request $request)
    {
        // Validação do login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tentando fazer login com as credenciais fornecidas
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Caso o login seja bem-sucedido
            return redirect()->route('pesquisa'); // Redireciona 
        }

        // Caso o login falhe, retorna um erro
        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }
}

