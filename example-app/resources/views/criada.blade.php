<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="criada.css">
    @vite('resources/css/criada.css')
    <title>Conta Criada</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="success-message">
                <i class="fa-solid fa-circle-check"></i>
                <h1>Conta Criada com Sucesso!</h1>
                <p>Sua conta foi criada e está pronta para uso.</p>
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
