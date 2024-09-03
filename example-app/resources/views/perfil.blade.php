<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="perfil.css">
    @vite('resources/css/perfil.css')
</head>
<body>

<header>
    <div class="container">
        <div class="back-icon">
            <a href="#" aria-label="Voltar à página anterior">←</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Procurar" aria-label="Buscar no perfil">
        </div>
    </div>
</header>

<main>
    <div class="profile-container">
        <section class="profile-header">
            <div class="container">
                <div class="profile-pic-container">
                    <img class="profile-pic" src="fotoperfil.avif" alt="Foto de perfil de Eloá Gabriely Olímpio Pereira">
                </div>
                <div class="profile-details-container">
                    <h1>Eloá Gabriely Olímpio Pereira</h1>
                    <div class="profile-info">
                        <span>Ds - Manhã</span>
                        <span>Solteira</span>
                        <span>02/05/2007</span>
                        <span>Cruzeiro - SP</span>
                    </div>
                    <div class="status">
                        Ansiedade Grave
                    </div>
                </div>
            </div>
        </section>

        <section class="profile-details">
            <div class="detail-box">
                <h2>Ansiedade</h2>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
            </div>
            <div class="detail-box">
                <h2>Dificuldade de Adaptação</h2>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
            </div>
            <div class="detail-box">
                <h2>Frustrações</h2>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
            </div>
            <div class="detail-box">
                <h2>Crises Diárias</h2>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint...</p>
            </div>
        </section>
    </div>
</main>

<div class="add-button">
    <a href="#" aria-label="Adicionar novo item">+</a>
</div>

</body>
</html>
