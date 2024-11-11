<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="nova.css">
    @vite('resources/css/nova.css')
    <title>Recuperar Senha</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form id="novaSenhaForm">
                <h1>Nova Senha</h1>
                <p>Insira sua nova senha e não esqueça.</p>
                <input type="password" placeholder="Crie uma senha forte" maxlength="20" required>
                <button type="submit">Confirmar</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('novaSenhaForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o comportamento padrão do envio do formulário
            window.location.href = "alterada.html"; // Redireciona para a página "perfil.html"
        });
    </script>

</body>

</html>
