<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="codigo.css">
    @vite('resources/css/codigo.css')
    <title>Recuperar Senha</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form action="nova.html">
                <h1>Recuperar Senha</h1>
                <p>Insira o código de recuperação enviado para o seu email.</p>
                <input type="text" placeholder="Digite o código" maxlength="6" required>
                <button type="submit">Confirmar</button>
                <a href="#" id="resendCode">Reenviar código</a>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('resendCode').addEventListener('click', function(event) {
            event.preventDefault();
            alert('O código de recuperação foi reenviado para o seu email.');
        });
    </script>
</body>

</html>

