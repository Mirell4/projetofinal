<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Pesquisa</title>
    <link rel="stylesheet" href="pesquisa.css">
    @vite('resources/css/pesquisa.css')
    <link rel="stylesheet" href="fundo.webp">
</head>
<body>
    <div class="container">
        <form action="{{ route('pesquisa') }}" method="post">
            @csrf
            <div class="search-container">
                <div class="search-bar">
                    <span class="icon"><i class="fas fa-search"></i></span>
                    <input type="text" placeholder="Procurar" name="nome">
                </div>
                <button class="search-button" type="submit">Buscar</button>
            </div>
        </form>
    </div>
</body>
</html>