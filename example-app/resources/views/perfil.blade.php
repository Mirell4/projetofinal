<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Paciente</title>
    <link rel="stylesheet" href="perfil.css">
    @vite('resources/css/perfil.css')
</head>
<body>
    <div class="container">
        <header>
            <input type="search" placeholder="Procurar">
        </header>

        <div class="profile">
            <img src="foto.jpeg" alt="Eloá Gabriely">
            <h1>Eloá Gabriely Olímpio Pereira</h1>
            <div class="info">
                <p><i class="icon-briefcase"></i> Ds - Manhã</p>
                <p><i class="icon-user"></i> Solteira</p>
                <p><i class="icon-calendar"></i> 02/05/2007</p>
                <p><i class="icon-location"></i> Cruzeiro - SP</p>
            </div>
            <div class="status">
                <span>Ansiedade Grave</span>
            </div>
        </div>

        <div class="details">
            <div class="card">
                <h2>Ansiedade</h2>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
            </div>
            <div class="card">
                <h2>Dificil Adaptação</h2>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
            </div>
            <div class="card">
                <h2>Frustrações</h2>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
            </div>
            <div class="card">
                <h2>Crises Diárias</h2>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
            </div>
        </div>

        <footer>
            <button class="add-button">+</button>
        </footer>
    </div>
</body>
</html>