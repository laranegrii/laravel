<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #261210;
        color: #BFA393;
      }
      .navbar-custom {
        background-color: #590212;
      }
      .btn-custom {
        background-color: #A6032F;
        color: #BFA393;
      }
      .btn-custom:hover {
        background-color: #8C031C;
        color: #BFA393;
      }
      .card-custom {
        background-color: #590212;
        border: none;
      }
      .footer-custom {
        background-color: #590212;
        color: #BFA393;
      }
      .animal-card {
        background-color: #8C031C;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
      }
      .animal-card img {
        border-radius: 10px;
        width: 100%;
        height: auto;
      }
      .animal-card h3 {
        color: #BFA393;
      }
      .animal-card p {
        color: #BFA393;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="animais.html">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Animal List Section -->
    <div class="container my-5">
      <h1 class="text-center mb-5">Animais para Adoção</h1>
      <div class="row">
        <!-- Animal Card 1 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Cachorro 1">
            <h3 class="mt-3">Rex</h3>
            <p>Rex é um cachorro muito brincalhão e cheio de energia. Ele adora correr e brincar ao ar livre.</p>
            <a href="#" class="btn btn-custom">Adotar</a>
          </div>
        </div>
        <!-- Animal Card 2 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Gato 1">
            <h3 class="mt-3">Mimi</h3>
            <p>Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo e um lugar quentinho para dormir.</p>
            <a href="#" class="btn btn-custom">Adotar</a>
          </div>
        </div>
        <!-- Animal Card 3 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Cachorro 2">
            <h3 class="mt-3">Luna</h3>
            <p>Luna é uma cachorrinha muito dócil e amorosa. Ela é perfeita para uma família que busca um companheiro fiel.</p>
            <a href="#" class="btn btn-custom">Adotar</a>
          </div>
        </div>
        <!-- Animal Card 4 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Gato 2">
            <h3 class="mt-3">Thor</h3>
            <p>Thor é um gato muito curioso e brincalhão. Ele adora explorar novos ambientes e brincar com bolinhas.</p>
            <a href="#" class="btn btn-custom">Adotar</a>
          </div>
        </div>
        <!-- Animal Card 5 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Cachorro 3">
            <h3 class="mt-3">Bobby</h3>
            <p>Bobby é um cachorro muito inteligente e obediente. Ele é ótimo para quem busca um amigo para treinar e brincar.</p>
            <a href="#" class="btn btn-custom">Adotar</a>
          </div>
        </div>
        <!-- Animal Card 6 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" alt="Gato 3">
            <h3 class="mt-3">Luna</h3>
            <p>Luna é uma gatinha muito tranquila e amorosa. Ela adora um carinho e um lugar quentinho para dormir.</p>
            <a href="#" class="btn btn-custom">Adotar</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer-custom text-center p-4">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>