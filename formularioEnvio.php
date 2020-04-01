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
    <!--Envio de formulário via telegram-->
      <?php
      #setando as váriaveis puxando cada item do formulário a partir do método post.
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
      #Chamando a função envia mensagem passando cada campo como parametro.
        enviaMensagem('nome: '.$nome);
        enviaMensagem('email: '.$email);
        enviaMensagem('assunto: '.$assunto);
        enviaMensagem('mensagem: '.$mensagem);
      #função que faz o envio para telegram
        function enviaMensagem($arg)
        {
          #token do bot
            $apiToken = "1224359576:AAExT6RvRaKKI1cKvCEQkuBto-lWERUkrxQ";
          #infos de envio (id do chat + texto a ser enviado)
            $data = [
                'chat_id' => '@botzinmaneiro',
                'text' => $arg # arg é o que vem enviado do parametro
            ];
            $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
        }
        #Mensagens de agradecimentos.
        echo "<div class='msgSend'>";
        echo "<h1>Muito obrigado pelo contato $nome!</h1>";
        echo "<h2>Recebemos sua mensagem e entraremos em contato em breve!</h2>";
        echo "</div>";
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>



