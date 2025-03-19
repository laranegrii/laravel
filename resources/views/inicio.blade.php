@extends('_partials/main')

@section('conteudo')
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
              <a class="nav-link active" aria-current="page" href="#">Início</a>
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

    <!-- Hero Section -->
    <div class="container-fluid p-5 text-center" style="background-color: #8C031C;">
      <h1 class="display-4">Dê um lar para um amigo</h1>
      <p class="lead">Encontre seu novo companheiro e faça a diferença na vida de um animal de rua.</p>
      <a class="btn btn-custom btn-lg" href="#" role="button">Adotar Agora</a>
    </div>

    <!-- Cards Section -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-custom text-center p-4">
            <h3>Cães</h3>
            <p>Conheça nossos cães disponíveis para adoção.</p>
            <a href="#" class="btn btn-custom">Ver Cães</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-custom text-center p-4">
            <h3>Gatos</h3>
            <p>Encontre um gatinho para chamar de seu.</p>
            <a href="#" class="btn btn-custom">Ver Gatos</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-custom text-center p-4">
            <h3>Outros</h3>
            <p>Descubra outros animais que precisam de um lar.</p>
            <a href="#" class="btn btn-custom">Ver Outros</a>
          </div>
        </div>
      </div>
    </div>

    @endsection