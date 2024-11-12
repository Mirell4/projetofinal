<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page With Light/Dark Mode</title>
    <link rel="stylesheet" href="inicio.css" />
    @vite('resources/css/inicio.css')
    
  </head>
  <body>
    <main>
      <div class="big-wrapper dark">
      <img src="{{ asset('storage/img/shape.png') }}" alt="Shape" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
            <img src="{{ asset('storage/img/logo.png') }}" alt="Logo" class="logo" />
              <h3>GestClass</h3>
            </div>

            <div class="links">
              <ul>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#" class="btn">Sign up</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Future is here,</h1>
                <h1>Start Exploring now.</h1>
              </div>
              <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Delectus eius distinctio odit, magni magnam qui ex perferendis
                vitae!
              </p>
              <div class="cta">
                <a href="#" class="btn">Get started</a>
              </div>
            </div>

            <div class="right">
            <img src="{{ asset('storage/img/person.png') }}" alt="Person" class="person" />
            </div>
          </div>
        </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="./app.js"></script>
  </body>
</html>
