<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Adote um Amigo</title>
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
      .register-container {
        max-width: 500px;
        margin: 100px auto;
        padding: 20px;
        background-color: #590212;
        border-radius: 10px;
      }
      .form-control-custom {
        background-color: #8C031C;
        border: none;
        color: #BFA393;
      }
      .form-control-custom:focus {
        background-color: #8C031C;
        color: #BFA393;
        border-color: #A6032F;
        box-shadow: 0 0 0 0.2rem rgba(166, 3, 47, 0.25);
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
              <a class="nav-link" href="#">Adotar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Register Form -->
    <div class="register-container card-custom">
      <h2 class="text-center mb-4">Registro</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Nome Completo</label>
          <input type="text" class="form-control form-control-custom" id="name" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control form-control-custom" id="email" placeholder="Digite seu email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control form-control-custom" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control form-control-custom" id="confirm-password" placeholder="Confirme sua senha" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-custom">Registrar</button>
        </div>
        <div class="text-center mt-3">
          <p>Já tem uma conta? <a href="login.html" style="color: #BFA393;">Faça login</a></p>
        </div>
      </form>
    </div>

    <!-- Footer -->
    <footer class="footer-custom text-center p-4 mt-5">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>