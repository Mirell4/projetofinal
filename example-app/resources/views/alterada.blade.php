<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="alterada.css">
    @vite('resources/css/alterada.css')
    <title>Senha Alterada</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="success-message">
                <i class="fa-solid fa-lock"></i>
                <h1>Senha Alterada com Sucesso!</h1>
                <p>Sua senha foi alterada. Agora você pode usar sua nova senha para acessar sua conta.</p>
                <button onclick="redirectToLogin()">Fazer Login</button>
            </div>
        </div>
    </div>

    <script>
        function redirectToLogin() {
            // Aqui você pode redirecionar para a página de login
            window.location.href = "login.html"; // Mudar o link para a página de login real
        }
    </script>
</body>

</html>
