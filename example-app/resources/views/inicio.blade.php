<html>
 <head>
  <title>
   GestClass
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
        margin: 0;
        font-family: 'Inter', sans-serif;
        background: #fff;
        height: 100vh;
        overflow: hidden;
    }
    .container {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .header {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 40px;
        box-sizing: border-box;
    }
    .header .logo {
        font-size: 24px;
        font-weight: 600;
        color: #3b82f6;
    }
    .header .nav {
        display: flex;
        gap: 20px;
    }
    .header .nav a {
        text-decoration: none;
        color: #6b7280;
        font-weight: 500;
        cursor: pointer;
        position: relative; /* Necessário para posicionar o sublinhado */
    }
    /* Estilo para o link quando estiver selecionado (ativo) */
    .header .nav a.active {
        color: #3b82f6; /* Cor do texto ativa */
        font-weight: 600; /* Peso de fonte mais forte */
    }
    /* Adicionando sublinhado azul ao selecionar */
    .header .nav a.active::after {
        content: '';
        position: absolute;
        bottom: -4px; /* A distância entre o texto e o sublinhado */
        left: 0;
        width: 100%;
        height: 2px; /* Espessura do sublinhado */
        background-color: #3b82f6; /* Cor azul do sublinhado */
    }
    .carousel {
        flex: 1;
        position: relative;
        overflow: hidden;
    }
    .carousel-inner {
        display: flex;
        height: 100%;
        transition: transform 0.5s ease-in-out;
    }
    .carousel-item {
        min-width: 100%;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
        text-align: center;
    }
    .carousel-item .text {
        max-width: 50%;
    }
    .carousel-item .text h1 {
        font-size: 48px;
        font-weight: 600;
        margin: 0;
    }
    .carousel-item .text h1 span {
        color: #3b82f6;
    }
    .carousel-item .text p {
        color: #6b7280;
        margin: 20px 0;
        font-size: 18px;
    }
    .carousel-item .buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
    }
    .carousel-item .buttons a {
        text-decoration: none;
        padding: 15px 30px;
        border-radius: 8px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 16px;
    }
    .carousel-item .buttons .primary {
        background: #3b82f6;
        color: #fff;
    }
    .carousel-item .buttons .secondary {
        background: #e0e7ff;
        color: #3b82f6;
    }
    .carousel-item .image {
        max-width: 50%;
    }
    .carousel-item .image img {
        width: 100%;
        height: auto;
    }
    .about-section, .services-section, .contact-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%;
    }
    .about-section h1, .services-section h1, .contact-section h1 {
        font-size: 48px;
        font-weight: 600;
        margin-bottom: 20px;
    }
    .about-section p, .services-section p, .contact-section p {
        color: #6b7280;
        margin-bottom: 20px;
        max-width: 800px;
        font-size: 18px;
    }
    .about-section .team, .services-section .services-list, .contact-section .contact-methods {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        width: 100%;
    }
    .about-section .team-member, .services-section .service-item, .contact-section .contact-method {
        background: #f1f5f9;
        padding: 20px;
        border-radius: 10px;
        text-align: left;
        max-width: 300px;
        width: 100%;
    }
    .about-section .team-member strong, .services-section .service-item strong {
        color: #3b82f6;
        display: block;
        margin-bottom: 10px;
    }
    .contact-section .contact-method i {
        color: #3b82f6;
        font-size: 24px;
    }
    .contact-section .contact-method span {
        color: #6b7280;
    }
    .team-row {
        display: flex;
        justify-content: center;
        gap: 20px;
        width: 100%;
    }
  </style>
 </head>
 <body>
  <div class="container">
   <div class="header">
    <div class="logo">
     GestClass.
    </div>
    <div class="nav">
     <a data-index="0">
      Início
     </a>
     <a data-index="1">
      Nós
     </a>
     <a data-index="2">
      Serviços
     </a>
     <a data-index="3">
      Contato
     </a>
    </div>
   </div>
   <div class="carousel">
    <div class="carousel-inner">
     <div class="carousel-item">
      <div class="text account-section">
       <h1>
        Bem-Vindo ao
        <span>
         GestClass
        </span>
        <br/>
        Turbine seu negócio
       </h1>
       <p>
        A solução completa para sua Gestão.
       </p>
       <div class="buttons">
    <a class="primary" href="{{ route('login') }}">
        Entrar
         <i class="fas fa-arrow-right">
         </i>
        </a>
       </div>
      </div>
     </div>
     <div class="carousel-item">
      <div class="text about-section">
       <h1>
        Sobre
        <span>
         Nós.
        </span>
        <br/>
        Conheça a equipe.
       </h1>
       <p>
        A equipe do GestClass é dedicada à inovação na gestão de pessoas, oferecendo uma plataforma moderna e eficiente. Trabalhamos para simplificar processos, garantir segurança e proporcionar uma experiência única para nossos usuários.
       </p>
       <div class="team">
        <div class="team-row">
         <div class="team-member">
          <strong>
           Anderson Penna
          </strong>
          Front-End
         </div>
         <div class="team-member">
          <strong>
           Eloa Olimpio
          </strong>
          Designer
         </div>
        </div>
        <div class="team-row">
         <div class="team-member">
          <strong>
           Mirella Viana
          </strong>
          Back-End
         </div>
         <div class="team-member">
          <strong>
           Pietro Augusto
          </strong>
          Back-End
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="carousel-item">
      <div class="text services-section">
       <h1>
        Nossos
        <span>
         Serviços.
        </span>
        <br/>
        O que fazemos.
       </h1>
       <p>
        Esta plataforma foi criada como parte do nosso TCC. Nosso objetivo é oferecer soluções inovadoras que atendam às principais demandas de gestão, tornando os processos mais eficientes e estratégicos.
       </p>
       <div class="services-list">
        <div class="service-item">
         <strong>
          Agilidade
         </strong>
         Gestão simplificada de atendimentos
        </div>
        <div class="service-item">
         <strong>
          Segurança
         </strong>
         Armazenamento seguro de dados
        </div>
        <div class="service-item">
         <strong>
          Praticidade
         </strong>
         Ferramentas para adicionar e organizar informações
        </div>
        <div class="service-item">
         <strong>
          Eficiência
         </strong>
         Recursos para criar relatórios personalizados
        </div>
       </div>
      </div>
     </div>
     <div class="carousel-item">
      <div class="text contact-section">
       <h1>
        Precisa de
        <span>
        Ajuda?
        </span>
        <br/>
        Entre em contato.
       </h1>
       <p>
        Gostaríamos muito de ouvir de você! Se você tiver alguma dúvida sobre nossos serviços, precisar de suporte ou apenas quiser dizer olá, sinta-se à vontade para entrar em contato conosco. 
       </p>
       <div class="contact-methods">
        <div class="contact-method">
         <i class="fas fa-envelope">
         </i>
         <span>
          Email: contate@GestClass.com
         </span>
        </div>
        <div class="contact-method">
         <i class="fas fa-phone">
         </i>
         <span>
          Telefone:(55) 1291111-1111
         </span>
        </div>
        <div class="contact-method">
         <i class="fas fa-map-marker-alt">
         </i>
         <span>
          Endereço: Rua João Penido, 1750
         </span>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <script>
   const carouselInner = document.querySelector('.carousel-inner');
        const navLinks = document.querySelectorAll('.nav a');
        let currentIndex = 0;

        function updateCarousel(index) {
            const width = carouselInner.clientWidth;
            carouselInner.style.transform = `translateX(-${index * width}px)`;

            // Remover a classe active de todos os links
            navLinks.forEach(link => link.classList.remove('active'));

            // Adicionar a classe active ao link clicado
            navLinks[index].classList.add('active');
        }

        navLinks.forEach((link, index) => {
            link.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel(index);
            });
        });

        window.addEventListener('resize', () => updateCarousel(currentIndex));
  </script>
 </body>
</html>
