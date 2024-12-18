<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carômetro</title>
    <link rel="stylesheet" href="styles.css">
    @vite('resources/css/pesquisa.css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <button class="back-button" onclick="history.back()" aria-label="Voltar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="back-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                             <!-- Menu Hamburguer -->
<div class="menu-container">
    <button class="menu-button" onclick="toggleMenu()">
        <div class="menu-icon"></div>
        <div class="menu-icon"></div>
        <div class="menu-icon"></div>
    </button>

    <!-- Menu Dropdown -->
    <div class="menu" id="menu">
        <ul>
            <!-- Link para o Dashboard -->
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>

            <!-- Link para a Página Inicial (Sair) -->
            <li><a href="{{ route('inicio') }}">Sair</a></li>
        </ul>
    </div>
</div>


                
                <!-- Barra de Pesquisa Centralizada -->
                @if($alunos->isNotEmpty())
                
                <form class="search-bar" action="{{ route('pesquisa') }}" method="post">
                    @csrf
                    
                    <input type="text" placeholder="Buscar pessoas..." name="search" required>
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 018.15 13.65z" />
                        </svg>
                    </button>
                </form>
                
                @else
                    <p>Nenhum aluno encontrado.</p>
                @endif
            </div>
        </header>

        <main>
            <div class="container">
                <section class="results">
                    @if($alunos->isNotEmpty())
                        @foreach($alunos as $aluno)
                            <a href="{{ route('perfil', $aluno->id) }}">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $aluno->foto) }}" alt="{{ $aluno->nome }}">
                                    <h2>{{ $aluno->nome }}</h2>
                                    <p>Curso: {{ $aluno->tipo }}</p>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p>Nenhum aluno encontrado.</p>
                    @endif
                </section>
            </div>
        </main>

                    <!-- Botão Flutuante de "+" -->
            <a href="{{ route('formulario.cadastro') }}" class="floating-button" aria-label="Adicionar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </a>

        <footer>
            <div class="container">
                <p>&copy; 2024 GestClass. Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
    <script>
        // Função para alternar o menu
        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('open');
        }
    </script>
</body>

</html>
