<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos/style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imagens/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Bookworld!</title>
  </head>
  <body>

    <!-- Logo-->
    <nav class="barra-nav navbar navbar-expand-lg navbar-dark">
        <a class="logo navbar-brand" href="index.php">
            <img src="imagens/logo.png" width="160" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <!-- Navbar -->
       <div class="menu collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li><a class="link-menu nav-link" href="#">Home</a></li>
                <li><a class="link-menu nav-link" href="listaLivros.php">Livros</a></li>
                <li><a class="link-menu nav-link" href="contato.php">Contato</a></li>
            </ul>
        </div>
      </nav>
    <!-- Capa do site -->
      <div class="capa">
        <div class="texto-capa">
          <h1> BOOKWORD </h1>
          <h3> SEU UNIVERSO LITERARIO </h3>
          <a href="listaLivros.php"><button type="button" class="btn-lista btn btn-dark">Ver lista completa de livros</button></a>
          <hr id="divisoria">
          <nav class="navbar navbar-light">
            <form method="post" action ="pesquisa.php" class="navbar-search form-inline needs-validation">
              <input class="form-control mr-sm-2" type="search" name= "search" placeholder="Digite o nome do livro" aria-label="Pesquisar" required>
                <button class="btn-search btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
          </nav>
        </div>  
      </div>
 
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>