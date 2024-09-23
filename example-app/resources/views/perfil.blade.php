<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="perfil.css">
    @vite('resources/css/perfil.css')
    @vite('resources/js/perfil.js')
</head>
<body>


  <div class="header">
    <a href="pesquisa/pesquisa.html" class="back-button">
        <i class="fa fa-arrow-left"></i>
    </a>
    <input type="text" id="searchBar" class="search-bar" placeholder="Pesquisar...">
</div>

@foreach ($alunos as $aluno)
    <div class="profile-container">
        @isset($aluno->foto)
        <img src="data:image/png;base64, {{ $aluno->foto }}" alt="Foto de Perfil" class="profile-pic" id="profilePic">
        @else
        <img src="unnamed.png" alt="Foto de Perfil" class="profile-pic" id="profilePic">
        @endif
        <div class="profile-details">
            <h1 id="displayName" class="profile-name">{{ $aluno->nome }}</h1>
            <div class="inline-details">
                <p><strong>Email:</strong> <span id="displayEmail">
                @if($aluno->contatos()->exists())
                            {{ $aluno->contatos->first()->email }}
                        @else
                            Não disponível
                        @endif
                </span></p>
                
                <p><strong>Telefone:</strong> 
                    <span id="displayPhone">
                        @if($aluno->contatos()->exists())
                            {{ $aluno->contatos->first()->telefone }}
                        @else
                            Não disponível
                        @endif
                    </span>
                </p>
                <p><strong>Curso:</strong> <span id="displayCourse">
                  {{ $aluno->tipo }}
                </span></p>
            </div>
            <div class="address-dob">
                <p><strong>Endereço:</strong> <span id="displayAddress">
                  {{ $aluno->endereco }}
                </span></p>
                <p><strong>Data de Nascimento:</strong> <span id="displayDOB">
                  {{ $aluno->nascimento }}
                </span></p>
            </div>
        </div>
    </div>
@endforeach

      <button id="editProfileBtn">Editar Perfil</button>
    </div>
  </div>

  <!-- Área onde os comentários serão exibidos -->
  <div id="commentsArea">
    <!-- Comentários serão adicionados aqui -->
  </div>

  <!-- Botão de adicionar comentário -->
  <div class="comment-btn-container">
    <button id="addCommentBtn" class="add-comment-btn">+</button>
  </div>

  <!-- Modal de Editar Perfil -->
  <div id="editProfileModal" class="modal">
    <div class="modal-content">
      <span class="close" id="editProfileClose">&times;</span>
      <h2>Editar Perfil</h2>
      <form id="editProfileForm">
        <label for="editName">Nome:</label>
        <input type="text" id="editName" value="João Silva"><br><br>
        <label for="editEmail">Email:</label>
        <input type="email" id="editEmail" value="joao@example.com"><br><br>
        <label for="editPhone">Telefone:</label>
        <input type="tel" id="editPhone" value="(11) 1234-5678"><br><br>
        <label for="editCourse">Curso:</label>
        <input type="text" id="editCourse" value="Engenharia de Software"><br><br>
        <label for="editAddress">Endereço:</label>
        <input type="text" id="editAddress" value="Rua das Flores, 123, São Paulo - SP"><br><br>
        <label for="editDOB">Data de Nascimento:</label>
        <input type="date" id="editDOB" value="1990-01-01"><br><br>
        <button type="submit">Salvar Alterações</button>
      </form>
    </div>
  </div>

  <!-- Modal de Adicionar Comentário -->
  <div id="commentModal" class="modal">
    <div class="modal-content">
      <span class="close" id="commentClose">&times;</span>
      <h2>Novo Comentário</h2>
      <form id="addCommentForm">
        <label for="commentTitle">Título:</label>
        <input type="text" id="commentTitle"><br><br>
        <label for="commentText">Texto do Comentário:</label>
        <textarea id="commentText" rows="4"></textarea><br><br>
        <label for="commentFiles">Anexar Arquivos:</label>
        <input type="file" id="commentFiles" multiple><br><br>
        <button type="submit">Adicionar Comentário</button>
      </form>
    </div>
  </div>

  <!-- Input de Arquivo Oculto -->
  <input type="file" id="profilePicInput" style="display: none;" accept="image/*">

  <script src="perfil.js"></script>

</body>
</html>
