<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta tags padrões de HTML + favicon + links para estilos -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos/style.css">
    <link rel="stylesheet" type="text/css" href="estilos/listaStyle.css">
    <link rel="stylesheet" type="text/css" href="estilos/contatoStyle.css">
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
                <li><a class="link-menu nav-link" href="index.php">Home</a></li>
                <li><a class="link-menu nav-link" href="listaLivros.php">Livros</a></li>
                <li><a class="link-menu nav-link" href="contato.php">Contato</a></li>
            </ul>
        </div>
      </nav>
    <!--Container de formulario-->
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
          </div>
          <div class="contato col-sm-8">
            <form class="needs-validation" action="formularioEnvio.php" method="POST">
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationTooltip01">Nome Completo</label>
                  <input type="text" name = "nome" class="form-control" id="validationTooltip01" placeholder="Digite seu nome" value="" required>
                  <br>
                  <label for="assunto">Assunto</label>
                  <select class="form-control" id="assunto" name="assunto">
                    <option><--Escolha um assunto--></option>
                    <option>Solicitar um livro</option>
                    <option>Link quebrado/fora do ar</option>
                    <option>Problema com o site</option>
                    <option>Outro</option>
                  </select>
                  </div>
                <div class="col-md-8 mb-3">
                <label for="validationTooltip01">Email</label>
                  <input type="text" name = "email" class="form-control" id="validationTooltip01" placeholder="Digite seu email" value="" required>
                </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Mensagem</label>
              <textarea class="form-control" id="mensagem" rows="3" placeholder="Descreva seu problema." name="mensagem"></textarea>
            </div>
            <button class="btn btn-primary bg-dark" type="submit">Enviar</button>
          </form>
          </div>
          <div class="col-sm-2 ">
          </div>
        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>