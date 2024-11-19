document.addEventListener('DOMContentLoaded', function() {
  const addCommentBtn = document.getElementById('addCommentBtn');
  const modal = document.getElementById('commentModal');
  const closeModal = document.getElementsByClassName('close')[0];
  const submitComment = document.getElementById('submitComment');
  const commentsList = document.querySelector('.comments-list');
  let editingComment = null; // Variável para armazenar o comentário que está sendo editado

  // Abrir o modal
  addCommentBtn.onclick = function() {
      editingComment = null; // Resetar quando estamos criando um novo comentário
      clearModalFields(); // Limpar campos do modal
      modal.style.display = 'block';
  }

  // Fechar o modal
  closeModal.onclick = function() {
      modal.style.display = 'none';
  }

  // Fechar o modal se clicar fora
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = 'none';
      }
  }

  // Função para adicionar ou editar um comentário
  submitComment.onclick = function() {
      const title = document.getElementById('commentTitle').value;
      const text = document.getElementById('commentText').value;
      const status = document.getElementById('commentStatus').value;
      const fileInput = document.getElementById('fileUpload');
      const file = fileInput.files[0];  // Pega o primeiro arquivo selecionado

      if (title && text) {
          let comment;

          if (editingComment) {
              // Editar um comentário existente
              comment = editingComment;
              comment.innerHTML = ''; // Limpa o conteúdo anterior
          } else {
              // Criar um novo comentário
              comment = document.createElement('div');
              comment.classList.add('comment');
              commentsList.appendChild(comment);
          }

          // Criar o container para o texto e bolinha de status
          const statusContainer = document.createElement('div');
          statusContainer.classList.add('status-container');


          
          const statusText = document.createElement('span');
          statusText.classList.add('status-text');
          statusText.textContent = status;

        //   <span class="status-text">{{ $atendimento->status }}</span>

          const statusIndicator = document.createElement('div');
          statusIndicator.classList.add('comment-status');

          if (status === 'Ativo') {
              statusIndicator.classList.add('ativo');
          } else if (status === 'Inativo') {
              statusIndicator.classList.add('inativo');
          } else if (status === 'Pendente') {
              statusIndicator.classList.add('pendente');
          }

          // Adicionar o texto e bolinha ao container
          statusContainer.appendChild(statusText);
          statusContainer.appendChild(statusIndicator);

          // Inserir o comentário
          comment.innerHTML = `<h4>${title}</h4><p>${text}</p>`;

          // Verifica se há um arquivo selecionado
          if (file) {
              const fileLink = document.createElement('a');
              fileLink.textContent = `Arquivo: ${file.name}`;
              fileLink.href = URL.createObjectURL(file); // Cria um link para o arquivo
              fileLink.download = file.name;  // Força o download do arquivo ao clicar
              comment.appendChild(fileLink);  // Adiciona o link ao comentário
          }

          comment.appendChild(statusContainer);

          // Limpar o modal
          clearModalFields();
          modal.style.display = 'none';
      } else {
          alert('Preencha o título e o comentário!');
      }
  }

  // Função para limpar os campos do modal
  function clearModalFields() {
      document.getElementById('commentTitle').value = '';
      document.getElementById('commentText').value = '';
      document.getElementById('fileUpload').value = '';  // Limpa o campo de arquivo
      document.getElementById('commentStatus').value = 'Ativo';
  }

  // Evento para abrir o modal de edição ao clicar em um comentário
  commentsList.addEventListener('click', function(event) {
      if (event.target.closest('.comment')) {
          const comment = event.target.closest('.comment');
          editingComment = comment; // Armazenar o comentário atual para edição

          // Preencher o modal com os dados do comentário
          const title = comment.querySelector('h4').textContent;
          const text = comment.querySelector('p').textContent;
          const statusText = comment.querySelector('.status-text').textContent;

          document.getElementById('commentTitle').value = title;
          document.getElementById('commentText').value = text;
          document.getElementById('commentStatus').value = statusText;

          // Abrir o modal
          modal.style.display = 'block';
      }
  });
});

document.addEventListener('DOMContentLoaded', function() {
    const addCommentBtn = document.getElementById('addCommentBtn');
    const optionsMenu = document.getElementById('optionsMenu');
    const openCommentModal = document.getElementById('openCommentModal');
    const openEditModal = document.getElementById('openEditModal');
  
    // Mostrar ou ocultar o menu de opções ao clicar no botão de "+"
    addCommentBtn.onclick = function() {
      optionsMenu.style.display = optionsMenu.style.display === 'block' ? 'none' : 'block';
    };
  
    // Abrir o modal de comentários
    openCommentModal.onclick = function() {
      optionsMenu.style.display = 'none';
      document.getElementById('commentModal').style.display = 'block';
    };
  
    
  
    // Fechar o menu de opções se clicar fora
    window.onclick = function(event) {
      if (event.target !== addCommentBtn && !optionsMenu.contains(event.target)) {
        optionsMenu.style.display = 'none';
      }
    };

    
    
    // perfil.js
    document.addEventListener('DOMContentLoaded', () => {
        const alertBox = document.getElementById('successAlert');
        if (alertBox) {
            // Inicia o desaparecimento após 3 segundos
            setTimeout(() => {
                alertBox.classList.add('fade-out'); // Adiciona a classe de opacidade
            }, 3000); // 3000 ms = 3 segundos

            // Remove o alerta do DOM após a transição de opacidade
            alertBox.addEventListener('transitionend', () => {
                alertBox.remove();
            });
        }
    });


    
    document.getElementById('openEditModal').addEventListener('click', function () {
        document.getElementById('editModal').style.display = 'block';
    });
    
    document.getElementById('closeEditModal').addEventListener('click', function () {
        document.getElementById('editModal').style.display = 'none';
    });
    
    // Fecha o modal ao clicar fora da caixa de conteúdo
    window.onclick = function(event) {
        if (event.target == document.getElementById('editModal')) {
            document.getElementById('editModal').style.display = 'none';
        }
    };
  });


  
  