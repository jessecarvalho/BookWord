<?php 

require_once('conectabanco.php');

$objbd = new bd();
$objbd->conecta_mysql();

//$sql = "select * from usuarios where usuario = '$usuario' ";

$sql = "select * from livros";

$sql = "select * from livros as a inner join autor as b on a.id = b.id_autor"

$con = mysqli_connect('localhost', 'root', '', 'livros') or die("Erro ao conectar ao servidor:");
$resultado_id = mysqli_query($con, $sql);
if($resultado_id){
    while($livros = mysqli_fetch_array($resultado_id)){
        echo $livros['nomeLivro'];
    }
}


?>