document.addEventListener('DOMContentLoaded', function () {
    // Elementos do DOM
    const addCommentBtn = document.getElementById('addCommentBtn');
    const modal = document.getElementById('commentModal');
    const closeModalBtns = document.querySelectorAll('.close');
    const submitComment = document.getElementById('submitComment');
    const commentsList = document.querySelector('.comments-list');
    const optionsMenu = document.getElementById('optionsMenu');
    const openCommentModal = document.getElementById('openCommentModal');
    const editCommentModal = document.getElementById('editAtendimentoModal');
    const editModal = document.getElementById('editModal');
    const openEditModal = document.getElementById('openEditModal');
    let editingComment = null;

    // Função para limpar campos do modal
    function clearModalFields() {
        document.getElementById('commentTitle').value = '';
        document.getElementById('commentText').value = '';
        document.getElementById('fileUpload').value = '';
        document.getElementById('commentStatus').value = 'Ativo';
    }

    // Função para fechar um modal
    function closeModal(modal) {
        modal.style.display = 'none';
    }

    // Abrir o menu de opções
    addCommentBtn.addEventListener('click', function () {
        optionsMenu.style.display = optionsMenu.style.display === 'block' ? 'none' : 'block';
    });

    // Abrir o modal perfil
    openEditModal.addEventListener('click', function () {
        editModal.style.display = 'block';
        optionsMenu.style.display = 'none';

    });

    // Abrir o modal de adição de comentário
    openCommentModal.addEventListener('click', function () {
        editingComment = null; // Reseta a edição
        clearModalFields();
        optionsMenu.style.display = 'none';
        modal.style.display = 'block';
    });

    // Fechar modais ao clicar nos botões de fechar
    closeModalBtns.forEach((btn) => {
        btn.addEventListener('click', function () {
            const modalToClose = btn.closest('.modal');
            closeModal(modalToClose);
        });
    });

    // Fechar modais ao clicar fora deles
    window.addEventListener('click', function (event) {
        if (event.target.classList.contains('modal')) {
            closeModal(event.target);
        }
    });

    // Adicionar ou editar comentário
    if (submitComment) {
        submitComment.addEventListener('click', function () {
            const title = document.getElementById('commentTitle').value;
            const text = document.getElementById('commentText').value;
            const status = document.getElementById('commentStatus').value;
            const fileInput = document.getElementById('fileUpload');
            const file = fileInput.files[0];

            if (title && text) {
                let comment;

                if (editingComment) {
                    // Editar comentário
                    comment = editingComment;
                    comment.innerHTML = ''; // Limpa o conteúdo
                } else {
                    // Criar novo comentário
                    comment = document.createElement('div');
                    comment.classList.add('comment');
                    commentsList.appendChild(comment);
                }

                const statusContainer = document.createElement('div');
                statusContainer.classList.add('status-container');

                const statusText = document.createElement('span');
                statusText.classList.add('status-text');
                statusText.textContent = status;

                const statusIndicator = document.createElement('div');
                statusIndicator.classList.add('comment-status');
                statusIndicator.classList.add(status.toLowerCase());

                statusContainer.appendChild(statusText);
                statusContainer.appendChild(statusIndicator);

                comment.innerHTML = `<h3>${title}</h3><p>${text}</p>`;

                if (file) {
                    const fileLink = document.createElement('a');
                    fileLink.textContent = `Arquivo: ${file.name}`;
                    fileLink.href = URL.createObjectURL(file);
                    fileLink.download = file.name;
                    comment.appendChild(fileLink);
                }

                comment.appendChild(statusContainer);
                clearModalFields();
                closeModal(modal);
            } else {
                alert('Preencha o título e o comentário!');
            }
        });
    }

    // Abrir modal de edição de comentário
    

    // Abrir modal de edição de atendimento
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.onclick = function() {
            const atendimentoId = this.getAttribute('data-id');
            const titulo = this.getAttribute('data-titulo');
            const comentario = this.getAttribute('data-comentario');
            const status = this.getAttribute('data-status');
            const arquivo = this.getAttribute('data-arquivo');
            
            // Preencher os campos do modal com os dados
            document.getElementById('titulo').value = titulo;
            document.getElementById('comentario').value = comentario;
            document.getElementById('status').value = status;

            if (arquivo) {
                // Limpar o conteúdo existente antes de adicionar o novo link
                const arquivoExistenteContainer = document.getElementById('arquivo-existente');
                arquivoExistenteContainer.innerHTML = ''; // Limpar qualquer conteúdo anterior
            
                const arquivoLink = document.createElement('a');
                arquivoLink.href = `/storage/${arquivo}`;
                arquivoLink.textContent = 'Arquivo existente';
                
                arquivoExistenteContainer.appendChild(arquivoLink);
            } else {
                // Limpar o conteúdo do arquivo existente quando não houver arquivo
                document.getElementById('arquivo-existente').innerHTML = '';
            }
            

            // Configurar o formulário para enviar os dados
            editAtendimentoForm.action = `/atendimentos/${atendimentoId}`; // Ajuste conforme sua rota do backend

            // Exibir o modal
            editAtendimentoModal.style.display = 'block';
        };
    });

    // Fechar modal de edição de atendimento
    document.getElementById('closeEditModal').addEventListener('click', function () {
        closeModal(editModal);
    });
    
});
