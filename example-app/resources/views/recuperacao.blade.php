<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="recuperacao.css">
    @vite('resources/css/recuperacao.css')
    @vite('resources/js/recuperacao.js')
    <title>Recuperar Senha</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="codigo.html">
                <h1>Recuperar Senha</h1>
                <div class="social-icons"></div>
                <span>Use seu telefone para recuperar a senha</span>
                <input type="tel" placeholder="Digite seu telefone" required>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="codigo.html">
                <h1>Recuperar Senha</h1>
                <div class="social-icons"></div>
                <span>Use seu email para recuperar a senha</span>
                <input type="email" placeholder="Digite seu Email..." required>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Não funcionou?</h1>
                    <p>Tente recuperar com seu Email</p>
                    <button class="hidden" id="login">Email</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Não funcionou?</h1>
                    <p>Tente recuperar com seu Telefone</p>
                    <button class="hidden" id="register">Telefone</button>
                </div>
            </div>
        </div>
    </div>

    <script src="recuperacao.js"></script>
</body>

</html>
