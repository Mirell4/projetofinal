<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perfil Pessoal</title>
    <link rel="stylesheet" href="perfil.css">
    @vite('resources/css/perfil.css')
    @vite('resources/js/perfil.js')
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
    
</head>
<body>
    <header>

    @if(session('success'))
    <div id="successAlert" class="alert alert-success">
        
        {{ session('success') }}
        <button class="close-btn" onclick="this.parentElement.style.display='none';">×</button>
    </div>
@endif


        <div class="container">
            <!-- Botão de Voltar -->
            <button class="back-button" onclick="history.back()" aria-label="Voltar">
                <svg xmlns="http://www.w3.org/2000/svg" class="back-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>            
  
            <div class="profile-pic">
                <img src="{{ asset($aluno->foto) }}" alt="{{ $aluno->nome }}">
            </div>
            <div class="info">
                <h1>{{ $aluno->nome }}</h1>
            </div>
        </div>
        
    </header>

    <main>  

        <div class="container flex-container">
            <section class="personal-info">
                <h2>Informações Pessoais</h2>
                <ul>
                    <li><strong>Email:</strong>
                    @if($aluno->contatos()->exists())
                        {{ $aluno->contatos->first()->email }}
                    @else
                        Não disponível
                    @endif
                    </li>
                    <li><strong>Telefone:</strong> 
                    @if($aluno->contatos()->exists())
                        {{ $aluno->contatos->first()->telefone }}
                    @else
                        Não disponível
                    @endif
                    </li>
                    <li><strong>RG:</strong> {{ $aluno->rg }}</li>
                    <li><strong>CPF:</strong> {{ $aluno->cpf }}</li>
                    <li><strong>Endereço:</strong> {{ $aluno->endereco }}</li>
                    <li><strong>Data de Nascimento:</strong> {{ $aluno->nascimento }}</li>
                    <li><strong>Telefone dos Responsáveis:</strong> 
                    @if($aluno->contatos()->exists())
                        {{ $aluno->contatos->first()->responsavel }}
                    @else
                        Não disponível
                    @endif
                    </li>
                </ul>
            </section>

            <section class="education">
                <h2>Formação Acadêmica</h2>
                <ul>
                    <li><strong>Curso:</strong> {{ $aluno->tipo }}</li>
                    <li><strong>Data de Início:</strong> {{ $aluno->inicio }}</li>
                    <li><strong>Data de Término:</strong> {{ $aluno->termino }}</li>
                    <li><strong>Período:</strong> {{ $aluno->horario }}</li>
                
                    </li>
                </ul>
            </section>
        </div>

       <!-- Área de comentários -->
    <section class="comments-section">
        <h2>Comentários</h2>
        <div class="comments-list">
        @foreach ($aluno->atendimentos as $atendimento)
            <div class="card-coment comment">
                <h3 class="titu">{{ $atendimento->titulo }}</h3>
                <p class="coment">{{ $atendimento->comentario }}</p>
                @if ($atendimento->arquivo && Storage::exists('public/' . $atendimento->arquivo))
                            <a href="{{ asset('storage/' . $atendimento->arquivo) }}" download="{{ basename($atendimento->arquivo) }}">Arquivo</a>
                        @else
                            <span>Arquivo não disponível</span>
                @endif

                <div class="status-container">
                    <span class="status-text">{{ $atendimento->status }}</span>
               
                    <span class="comment-status
                        @if(strtolower(trim($atendimento->status)) == 'ativo')
                            ativo
                        @elseif(strtolower(trim($atendimento->status)) == 'inativo')
                            inativo
                        @elseif(strtolower(trim($atendimento->status)) == 'pendente')
                            pendente
                        @endif">
                    </span>
                </div>
            </div>
        @endforeach
        </div>
    </section>




        <!-- Botão de + -->
        <button class="add-comment-btn" id="addCommentBtn">+</button>

        <!-- Menu de opções -->
        <div class="options-menu" id="optionsMenu">
            <button class="option-btn" id="openCommentModal">Comentários</button>
            <button class="option-btn" id="openEditModal">Editar</button>
        </div>
    </section>



    <!-- Modal para adicionar comentário -->
    <div id="commentModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Adicionar Comentário</h3>
            <form id="commentForm" method="post" enctype="multipart/form-data"> <!-- form-->
                @csrf
                <input type="text" id="commentTitle" name="titulo" placeholder="Título" class="modal-input" required>
                <textarea id="commentText" name="comentario" placeholder="Escreva seu comentário aqui..." class="modal-input" required></textarea>
                <label for="fileUpload">Anexar arquivo:</label>
                <input type="file" id="fileUpload" name="arquivo" class="modal-input">
                <label for="commentStatus">Status:</label>
                <select id="commentStatus" name="status" class="modal-input" required>
                    <option value="">Selecione um status</option>
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                    <option value="Pendente">Pendente</option>
                </select>
                <button type="submit" id="">Enviar</button>
            </form>
        </div>
    </div>

    
    <!-- Modal para Editar Perfil -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeEditModal">&times;</span>
            <h3>Editar Perfil</h3>
            <form id="editProfileForm" method="post" action="{{ route('perfil.update', $aluno->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-input-group">
                    <label for="editNome">Nome:</label>
                    <input type="text" id="editNome" name="nome" value="{{ $aluno->nome }}" class="modal-input" required>
                </div>
                <div class="modal-input-group">
                    <label for="editEmail">Email:</label>
                    <input type="email" id="editEmail" name="email" value="{{ $aluno->contatos()->exists() ? $aluno->contatos->first()->email : '' }}" class="modal-input" required>
                </div>
                <div class="modal-input-group">
                    <label for="editTelefone">Telefone:</label>
                    <input type="text" id="editTelefone" name="telefone" value="{{ $aluno->contatos()->exists() ? $aluno->contatos->first()->telefone : '' }}" class="modal-input" required>
                </div>
                <div class="modal-input-group">
                    <label for="editEndereco">Endereço:</label>
                    <input type="text" id="editEndereco" name="endereco" value="{{ $aluno->endereco }}" class="modal-input" required>
                </div>
                <div class="modal-input-group">
                    <label for="editNascimento">Data de Nascimento:</label>
                    <input type="date" id="editNascimento" name="nascimento" value="{{ $aluno->nascimento }}" class="modal-input" required>
                </div>
                <div class="modal-input-group">
                    <label for="editFoto">Foto de Perfil:</label>
                    <input type="file" id="editFoto" name="foto" class="modal-input">
                </div>
                <button type="submit" class="modal-submit-btn">Salvar alterações</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 GestClass. Todos os direitos reservados.</p>
    </footer>

    <script src="perfil.js"></script>
</body>
</html>
