const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

// O redirecionamento será feito pelo próprio formulário com o action="index.html"
// Não há necessidade de usar esse script, por isso foi removido
