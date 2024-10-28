<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <title>Formulário de Inscrição</title>
    @vite('resources/css/criarperfil.css')
    <link rel="stylesheet" href="criarperfil.css">
</head>
<body>
    
    <div class="container">
        <div class="profile-container">
            <div class="image-container">
                <input type="file" id="foto" name="foto" accept="image/*" required>
                <label for="foto" class="upload-label">
                    <img id="profile-pic" src="default-image.jpg" alt="Foto de Perfil">
                </label>
            </div>
            <div class="name-container">
                <h2>Nome:</h2>
                <input type="text" id="nome" name="nome" required placeholder="Digite seu nome">
            </div>
        </div>

        
        <div class="info-container">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefone">Telefone do Responsável:</label>
                <input type="tel" id="telefone" name="telefone" required>

                <label for="docente">Nome do Docente:</label>
                <input type="text" id="docente" name="docente" required>

                <label for="inicio">Início do Curso:</label>
                <input type="date" id="inicio" name="inicio" required>

                <label for="termino">Término do Curso:</label>
                <input type="date" id="termino" name="termino" required>

                <label for="curso">Curso:</label>
                <input type="text" id="curso" name="curso" required>

                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>

                <!-- Campos adicionados -->
                <label for="telefone-pessoal">Telefone Pessoal:</label>
                <input type="tel" id="telefone-pessoal" name="telefone-pessoal" required>

                <label for="rg">RG:</label>
                <input type="text" id="rg" name="rg" required>

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>

                <label for="nascimento">Data de Nascimento:</label>
                <input type="date" id="nascimento" name="nascimento" required>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    
    
    <script>
        // Script para alterar a imagem de perfil
        document.getElementById('foto').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-pic').src = e.target.result;
            };
            if (file) {
                reader.readAsDataURL(file);
            }
        });

        // Permite que a imagem clique para abrir o seletor de arquivo
        document.querySelector('.upload-label').addEventListener('click', function() {
            document.getElementById('foto').click();
        });
    </script>

</body>
</html>
