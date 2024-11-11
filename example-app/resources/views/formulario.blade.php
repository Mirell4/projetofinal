<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/formulario.css">
    @vite('resources/css/formulario.css')
    <title>Formulário de Cadastro</title>
</head>

<body>
    <header class="header">
        <button class="back-button" onclick="window.history.back()">Voltar</button>
        <h1>GestClass</h1>
        <p>Formulário de Cadastro de Aluno</p>
    </header>

    <div class="container">
    @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        <div class="form">
            <!-- Formulário com rota definida e CSRF token -->
            <form action="{{ route('alunos.store') }}" method="POST">
                @csrf

                  <!-- Erros de Validação -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

                <div class="form-header">
                    <h2>Cadastro de Aluno</h2>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome Completo</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome completo" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="telefone">Telefone</label>
                        <input id="telefone" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="rg">RG</label>
                        <input id="rg" type="text" name="rg" placeholder="Digite seu RG" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" placeholder="Digite seu CPF" required>
                    </div>

                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input id="endereco" type="text" name="endereco" placeholder="Digite seu endereço" required>
                    </div>

                    <div class="input-box">
                        <label for="nascimento">Data de Nascimento</label>
                        <input id="data-nascimento" type="date" name="nascimento" required>
                    </div>

                    <div class="input-box">
                        <label for="responsavel">Telefone dos Responsáveis</label>
                        <input id="telefone-responsavel" type="tel" name="responsavel" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="tipo">Curso</label>
                        <input id="tipo" type="text" name="tipo" placeholder="Digite o curso" required>
                    </div>

                    <div class="input-box">
                        <label for="horario">Período</label>
                        <input id="horario" type="text" name="horario" placeholder="Digite o período" required>
                    </div>

                    <!-- 
                    <div class="input-box">
                        <label for="nome-curso">Nome do Curso</label>
                        <input id="nome-curso" type="text" name="nome_curso" placeholder="Digite o nome do curso" required>
                '    </div>
                    -->  

                    <div class="input-box">
                        <label for="inicio">Data de Início</label>
                        <input id="data-inicio" type="date" name="inicio" required>
                    </div>

                    <div class="input-box">
                        <label for="termino">Data de Término</label>
                        <input id="data-termino" type="date" name="termino" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit">Enviar Cadastro</button>
                </div>
            </form>
        </div>
    </div>

   

</body>

</html>
