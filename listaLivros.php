
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos/style.css">
    <link rel="stylesheet" type="text/css" href="estilos/listaStyle.css">
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
    <!--Listagem de livros-->
      <div class="corpo row">
        <!--coluna vazia para dar espaçamento lateral-->
        <div class="coluna col-sm-1 col-md-2 col-lg-2"></div>
        <!--Coluna de listagem-->
        <div class="coluna col-sm-7 col-md-6 col-lg-6">
          <div class="row">
            <!--PHP FUNCTIONS -->
            <?php 
            #solicita dados de conexão 
            require_once('conectabanco.php');
            #cria novo objeto de conexão
            $objbd = new bd();
            $objbd->conecta_mysql();
            #Verifica se algum genero foi passado via GET.
            #Caso tenha sido passado adicionar clausura where em query            
            $where= '';
            $gen = (isset($_GET['genero']))? $_GET['genero'] : ''; 
            if($gen){
              $genero = $_GET['genero'];
              $where = "where a.genero = '$genero'";
            }

            //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
            $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
        
            //seleciona todos os itens da tabela 
            $cmd = "select * from livros as a $where"; 
            $produtos = mysqli_query($objbd->conecta_mysql(), $cmd); 
        
            //conta o total de itens 
            $total = mysqli_num_rows($produtos); 
        
            //seta a quantidade de itens por página, neste caso, 2 itens 
            $registros = 9; 
        
            //calcula o número de páginas arredondando o resultado para cima 
            $numPaginas = ceil($total/$registros); 
        
            //variavel para calcular o início da visualização com base na página atual 
            $inicio = ($registros*$pagina)-$registros; 
            
            //query para selecionar os itens por página e (talvez) por gênero
            $cmd = "select * from livros as a inner join autor as b on a.id = b.id_autor $where order by a.id desc limit $inicio,$registros"; 

            #executa query
            $livros = mysqli_query($objbd->conecta_mysql(), $cmd); 
            $total = mysqli_num_rows($livros); 
            //exibe os produtos selecionados 
            while ($livro = mysqli_fetch_array($livros)) { 
              echo '<div class="coluna col-sm-7 col-md-6 col-lg-4">';
              echo '<div id="div-livro">';
              echo '<img class="capa-livro" src="'.$livro['imagem'].'"> ';
              echo '<br />';
              echo $livro['nomeLivro'];
              echo '<br />';
              echo $livro['autor'];
              echo '<br />';
              echo '<a href ="'.$livro['link'].'">';
              echo '<button type="button" class="btn btn-dark">Baixar</button>';
              echo '</a>';
              echo '</div>';
              echo '<br />';
              echo '</div>';
            } 
        
            //exibe a paginação 
            echo '<div class="paginas">';
            if($gen){
              for($i = 1; $i < $numPaginas + 1; $i++) { 
                echo "<a href='listaLivros.php?pagina=$i&genero=$genero' class= 'pagina-bottom'>".$i."</a> "; 
            } 
                echo '</div>';
            }else{
              for($i = 1; $i < $numPaginas + 1; $i++) { 
                echo "<a href='listaLivros.php?pagina=$i' class= 'pagina-bottom'>".$i."</a> "; 
            } 
                echo '</div>';
            }

        ?>
        </div>  
        </div>  
        <!--Lista de gêneros-->
        <div class="coluna col-sm-3 col-md-3 col-lg-2">
          <form action="listaLivros.php" method="get">
            <div class="list-group">
              <a href="listaLivros.php?" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "todos") ? "btnActive" : "";?> list-group-item list-group-item-action">Todos genêros</a>
              <a href="listaLivros.php?genero=autoajuda" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "autoajuda") ? "btnActive" : "";?> list-group-item list-group-item-action">Autoajuda</a>
              <a href="listaLivros.php?genero=aventura" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "aventura") ? "btnActive" : "";?> list-group-item list-group-item-action">Aventura</a>
              <a href="listaLivros.php?genero=contos" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "contos") ? "btnActive" : "";?> list-group-item list-group-item-action">Contos</a>
              <a href="listaLivros.php?genero=scifi" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "scifi") ? "btnActive" : "";?> list-group-item list-group-item-action">Ficção Ciêntifica</a>
              <a href="listaLivros.php?genero=fantasia" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "fantasia") ? "btnActive" : "";?> list-group-item list-group-item-action">Ficção Fantastica</a>
              <a href="listaLivros.php?genero=humor" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "humor") ? "btnActive" : "";?> list-group-item list-group-item-action">Humor</a>
              <a href="listaLivros.php?genero=juvenil" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "juvenil") ? "btnActive" : "";?> list-group-item list-group-item-action">Infanto-Juvenil</a>
              <a href="listaLivros.php?genero=poesia" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "poesia") ? "btnActive" : "";?> list-group-item list-group-item-action">Poesia</a>
              <a href="listaLivros.php?genero=policial" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "policial") ? "btnActive" : "";?> list-group-item list-group-item-action">Policial</a>
              <a href="listaLivros.php?genero=religiao" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "religiao") ? "btnActive" : "";?> list-group-item list-group-item-action">Religião</a>
              <a href="listaLivros.php?genero=romance" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "romance") ? "btnActive" : "";?> list-group-item list-group-item-action">Romance</a>
              <a href="listaLivros.php?genero=suspense" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "suspense") ? "btnActive" : "";?> list-group-item list-group-item-action">Suspense</a>
              <a href="listaLivros.php?genero=terror" class="<?=(isset($_GET['genero']) && $_GET['genero'] == "terror") ? "btnActive" : "";?> list-group-item list-group-item-action">Terror</a>
            </div>
          </form>
        </div>
        <div class="coluna col-sm-1 col-md-2 col-lg-12"></div>
      </div>
      
      
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>