<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    @vite('resources/css/login.css')
    @vite('resources/js/login.js')
    <title>Bem vindo</title>
</head>

<body>

    <div class="container" id="container">
<!--form action="{{ route('register.submit') }}" method="POST">
    @csrf-->
        <div class="form-container sign-up">
            <form action="criada.html">
                <h1>Criar Conta</h1>
                <div class="social-icons">
                    <a href="https://acesse.one/JF1Xf" class="icon" aria-label="Google"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="https://www.facebook.com/login/?locale=pt_BR" class="icon" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://github.com/login" class="icon" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/login/pt" class="icon" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Use seu email para cadastro</span>
                <input type="text" placeholder="Nome"  value="{{ old('name') }}" required>  
                @error('name')
                <div class="error">{{ $message }}</div>
                @enderror
                <input type="email" placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                <div class="error">{{ $message }}</div>
                @enderror
                <input type="password" name="password" placeholder="Senha" required>
                @error('password')
                <div class="error">{{ $message }}</div>
                @enderror
                <input type="password" name="password_confirmation" placeholder="Confirme sua Senha" required>
                <button type="submit">Criar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <!--<form action="{{ route('login.submit') }}" method="POST">-->
            <form action="index.html">
                <h1>Entrar</h1>
                <div class="social-icons">
                    <a href="https://acesse.one/JF1Xf" class="icon" aria-label="Google"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="https://www.facebook.com/login/?locale=pt_BR" class="icon" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://github.com/login" class="icon" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/login/pt" class="icon" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Use Email e Senha</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Senha">
                <a href="recuperacao.html">Esqueceu sua senha?</a>
                <button type="submit">Entrar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem vindo de volta!</h1>
                    <p>Insira seus dados pessoais para usar todos os recursos do site</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, tudo bem?</h1>
                    <p>Registre-se com seus dados pessoais para usar todos os recursos do site</p>
                    <button class="hidden" id="register">Criar Conta</button>
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>

</html>