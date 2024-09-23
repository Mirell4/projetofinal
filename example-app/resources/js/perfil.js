// Função genérica para fechar modais
function closeModal(modal) {
    modal.style.display = "none";
  }
  
  // Função para abrir modais
  function openModal(modal) {
    modal.style.display = "block";
  }
  
  // Modal de Editar Perfil
  var editProfileModal = document.getElementById("editProfileModal");
  var editProfileBtn = document.getElementById("editProfileBtn");
  var editProfileClose = document.getElementById("editProfileClose");
  
  // Abre o modal de editar perfil
  editProfileBtn.onclick = function() {
    openModal(editProfileModal);
  }
  
  // Fecha o modal de editar perfil ao clicar no "x"
  editProfileClose.onclick = function() {
    closeModal(editProfileModal);
  }
  
  // Salva as alterações do perfil ao submeter o formulário
  document.getElementById("editProfileForm").onsubmit = function(event) {
    event.preventDefault();
  
    // Obtém os valores dos campos de entrada
    var newName = document.getElementById("editName").value;
    var newEmail = document.getElementById("editEmail").value;
    var newPhone = document.getElementById("editPhone").value;
    var newCourse = document.getElementById("editCourse").value;
    var newAddress = document.getElementById("editAddress").value;
    var newDOB = document.getElementById("editDOB").value;
  
    // Atualiza os dados no perfil
    document.getElementById("displayName").textContent = newName;
    document.getElementById("displayEmail").textContent = newEmail;
    document.getElementById("displayPhone").textContent = newPhone;
    document.getElementById("displayCourse").textContent = newCourse;
    document.getElementById("displayAddress").textContent = newAddress;
    document.getElementById("displayDOB").textContent = newDOB;
  
    // Fecha o modal após salvar as alterações
    closeModal(editProfileModal);
  }
  
  // Modal de Adicionar Comentário
  var commentModal = document.getElementById("commentModal");
  var addCommentBtn = document.getElementById("addCommentBtn");
  var commentClose = document.getElementById("commentClose");
  
  // Variável para armazenar o comentário em edição
  var editingComment = null;
  
  // Abre o modal de adicionar comentário
  addCommentBtn.onclick = function() {
    editingComment = null; // Não está editando nenhum comentário
    openModal(commentModal);
    // Limpa o formulário ao abrir o modal
    document.getElementById("addCommentForm").reset();
    document.getElementById("commentText").removeAttribute("readonly");
  }
  
  // Fecha o modal de adicionar comentário ao clicar no "x"
  commentClose.onclick = function() {
    closeModal(commentModal);
  }
  
  // Adiciona ou edita um comentário ao submeter o formulário
  document.getElementById("addCommentForm").onsubmit = function(event) {
    event.preventDefault();
  
    var commentTitle = document.getElementById("commentTitle").value;
    var commentText = document.getElementById("commentText").value;
    var commentFiles = document.getElementById("commentFiles").files;
  
    if (commentTitle.trim() === "" || commentText.trim() === "") return; // Não adiciona comentários vazios
  
    if (editingComment) {
      // Atualiza o comentário existente
      editingComment.querySelector(".comment-title").textContent = commentTitle;
      editingComment.querySelector(".comment-text").textContent = commentText;
  
      // Atualiza os arquivos anexados
      var filesList = editingComment.querySelector(".comment-files");
      if (filesList) {
        filesList.innerHTML = ""; // Limpa arquivos antigos
      } else {
        filesList = document.createElement("div");
        filesList.classList.add("comment-files");
        editingComment.appendChild(filesList);
      }
  
      // Mantém arquivos antigos e adiciona novos
      var existingFiles = Array.from(editingComment.querySelectorAll(".comment-files a")).map(link => link.textContent);
      if (commentFiles.length > 0) {
        for (var i = 0; i < commentFiles.length; i++) {
          var fileLink = document.createElement("a");
          fileLink.href = URL.createObjectURL(commentFiles[i]);
          fileLink.textContent = commentFiles[i].name;
          fileLink.target = "_blank"; // Abre o arquivo em uma nova aba
          if (!existingFiles.includes(commentFiles[i].name)) {
            filesList.appendChild(fileLink);
            filesList.appendChild(document.createElement("br")); // Adiciona uma quebra de linha entre os links
          }
        }
      }
  
      closeModal(commentModal);
      return;
    }
  
    // Cria o novo comentário
    var newComment = document.createElement("div");
    newComment.classList.add("comment");
  
    var titleElement = document.createElement("div");
    titleElement.classList.add("comment-title");
    titleElement.textContent = commentTitle;
    newComment.appendChild(titleElement);
  
    var textElement = document.createElement("p");
    textElement.classList.add("comment-text");
    textElement.textContent = commentText;
    newComment.appendChild(textElement);
  
    // Exibe os arquivos anexados como links para download/abertura
    if (commentFiles.length > 0) {
      var filesList = document.createElement("div");
      filesList.classList.add("comment-files");
      for (var i = 0; i < commentFiles.length; i++) {
        var fileLink = document.createElement("a");
        fileLink.href = URL.createObjectURL(commentFiles[i]);
        fileLink.textContent = commentFiles[i].name;
        fileLink.target = "_blank"; // Abre o arquivo em uma nova aba
        filesList.appendChild(fileLink);
        filesList.appendChild(document.createElement("br")); // Adiciona uma quebra de linha entre os links
      }
      newComment.appendChild(filesList);
    }
  
    // Adiciona o ícone de lápis para edição
    var editIcon = document.createElement("span");
    editIcon.classList.add("edit-icon");
    editIcon.textContent = "✎"; // Ícone de lápis
    editIcon.onclick = function() {
      // Ao clicar no ícone, abre o modal com o conteúdo do comentário
      document.getElementById("commentTitle").value = titleElement.textContent;
      document.getElementById("commentText").value = textElement.textContent;
      document.getElementById("commentFiles").value = ""; // Não é possível editar arquivos no modal atual
      document.getElementById("commentText").removeAttribute("readonly");
      openModal(commentModal);
      
      // Define o comentário como sendo o que está sendo editado
      editingComment = newComment;
    };
    newComment.appendChild(editIcon);
  
    // Adiciona o comentário à área de comentários
    document.getElementById("commentsArea").appendChild(newComment);
  
    // Fecha o modal após adicionar o comentário
    closeModal(commentModal);
  }
  
  // Fecha os modais ao clicar fora deles
  window.onclick = function(event) {
    if (event.target === commentModal) {
      closeModal(commentModal);
    }
    if (event.target === editProfileModal) {
      closeModal(editProfileModal);
    }
  }
  
  // Obtém o elemento da foto de perfil e o input de arquivo
  var profilePic = document.querySelector(".profile-pic");
  var profilePicInput = document.getElementById("profilePicInput");
  
  // Função para lidar com a seleção de um novo arquivo de imagem
  profilePic.onclick = function() {
    profilePicInput.click(); // Abre o seletor de arquivos ao clicar na foto de perfil
  };
  
  // Função para atualizar a foto de perfil quando um novo arquivo é selecionado
  profilePicInput.onchange = function() {
    if (profilePicInput.files && profilePicInput.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        profilePic.src = e.target.result; // Atualiza o src da foto de perfil
      }
      
      reader.readAsDataURL(profilePicInput.files[0]); // Lê o arquivo selecionado
    }
  };