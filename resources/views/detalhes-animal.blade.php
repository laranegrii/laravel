<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Animal - Adote um Amigo</title>
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
      .animal-details {
        background-color: #8C031C;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
      }
      .animal-details img {
        border-radius: 10px;
        width: 100%;
        height: auto;
      }
      .animal-details h2 {
        color: #BFA393;
      }
      .animal-details p {
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

    <!-- Animal Details Section -->
    <div class="container my-5">
      <div class="animal-details">
        <div class="row">
          <div class="col-md-6">
            <img src="https://images.pexels.com/photos/8229898/pexels-photo-8229898.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Rex">
          </div>
          <div class="col-md-6">
            <h2>Rex</h2>
            <p><strong>Espécie:</strong> Cachorro</p>
            <p><strong>Raça:</strong> Labrador</p>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Sexo:</strong> Macho</p>
            <p><strong>Descrição:</strong> Rex é um cachorro muito brincalhão e cheio de energia. Ele adora correr e brincar ao ar livre. Rex é muito amigável e se dá bem com crianças e outros animais.</p>
            <p><strong>História:</strong> Rex foi resgatado das ruas quando era apenas um filhote. Desde então, ele tem recebido todos os cuidados necessários e está pronto para encontrar um lar amoroso.</p>
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