<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Nossas Lagoas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="{{ asset('css/lista_lagoa.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montaga|Montserrat|Raleway:700|Righteous&display=swap" rel="stylesheet">
    <script src='main.js'></script>
</head>
<body>
  <!-- HEADER -->
  <header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark" id="menu">
      <a class="navbar-brand" href="#" id="logo-lagoas">
        <img src="img/logo/logo.png" width="100" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav" id="itens-menu">
          <li class="nav-item">
            <a class="nav-link active" href="index.html" id="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#projeto" id="projeto">O projeto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#quem-somos" id="quem-somos">Quem somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" id="blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#fale-conosco" id="fale-conosco">Fale conosco</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#lagoas" id="lagoas">Lagoas</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <section class="container-fluid bloco" id="imagem-topo">
      <section class="container titulo tit-topo col-10 col-md-6">
          <h1>Lagoas</h1>
      </section>
  </section>

  <section class="container-fluid bloco bloco-lagoas">
    <section class="titulo">
      <div class="btn-group btn-group-toggle" id="mostra-lagoas"data-toggle="buttons">
        <label class="btn btn-secondary active" id="botao-lista">
          <input type="radio" name="options" id="option1" autocomplete="off" checked> LISTA
        </label>
        <label class="btn btn-secondary" id="botao-mapa">
          <input type="radio" name="options" id="option2" autocomplete="off"> MAPA
        </label>
      </div>
      <h3>Escolha acima como deseja visualizar as lagoas cadastradas</h3>
      <hr id="separa-titulo-lagoa">
    </section>
    <section class="lagoas col-md-10">
      <div class="row lista-lagoas">
        <div class="quadro-imagem col-lg-4 col-md-6 col-xs-12">
          <div class="borda">
            <article class="img" id="lagoa">
                <img src="img/testes/lagoa-01.jpg" class="d-inline-block align-top" id="imagem-lagoa" alt="">
            </article>
            <article class="descricao">
              <h2>Lagoa Grande</h2>
              <h3>Lorem impsum, latus ive lorai</h3>
              <hr> 
            </article>
          </div>
        </div>

        <div class="quadro-imagem col-lg-4 col-md-6 col-xs-12">
          <div class="borda">
            <article id="lagoa">
              <img src="img/testes/lagoa-02.jpg" class="d-inline-block align-top" id="imagem-lagoa" alt="">
            </article>
            <article class="descricao">
              <h2>Lagoa do Geladinho</h2>
              <h3>Av. Antonio Bernardino de Carvalho</h3> 
              <hr>
            </article>
          </div>
        </div>

        <div class="quadro-imagem col-lg-4 col-md-6 col-xs-12">
           <div class="borda">
            <article id="lagoa">
                <img src="img/testes/lagoa-03.jpg" class="d-inline-block align-top" id="imagem-lagoa" alt="">
            </article>
            <article class="descricao">
              <h2>Lagoa do Subaé</h2>
              <h3>Avas script subium, 976</h3>
              <hr> 
            </article>
          </div>
        </div>
        <div class="quadro-imagem col-lg-4 col-md-6 col-xs-12">
          <div class="borda">
            <article class="img" id="lagoa">
                <img src="img/testes/lagoa-01.jpg" class="d-inline-block align-top" id="imagem-lagoa" alt="">
            </article>
            <article class="descricao">
              <h2>Lagoa Grande</h2>
              <h3>Lorem impsum, latus ive lorai</h3>
              <hr> 
            </article>
          </div>
        </div>

        <div class="quadro-imagem col-lg-4 col-md-6 col-xs-12">
          <div class="borda">
            <article id="lagoa">
              <img src="img/testes/lagoa-02.jpg" class="d-inline-block align-top" id="imagem-lagoa" alt="">
            </article>
            <article class="descricao">
              <h2>Lagoa do Geladinho</h2>
              <h3>Av. Antonio Bernardino de Carvalho</h3> 
              <hr>
            </article>
          </div>
        </div>

        <div class="quadro-imagem col-lg-4 col-md-6 col-xs-12">
           <div class="borda">
            <article id="lagoa">
                <img src="img/testes/lagoa-03.jpg" class="d-inline-block align-top" id="imagem-lagoa" alt="">
            </article>
            <article class="descricao">
              <h2>Lagoa do Subaé</h2>
              <h3>Avas script subium, 976</h3>
              <hr> 
            </article>
          </div>
        </div>
      </div>
    </section>
  </section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+9655DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>