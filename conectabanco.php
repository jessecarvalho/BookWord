<?php

class bd {

    //host
    private $host = 'localhost';
    //usuario
    private $user = 'root';
    //senha
    private $password = '';
    //banco de dados
    private $database = 'livros';

    public function conecta_mysql(){
        #Realiza tentativa de conexão ao servidor
        $con = mysqli_connect($this->host, $this->user, $this->password) or die("Erro ao conectar ao servidor: ");
        #Realiza tentativa de conexão ao banco de dados
        mysqli_select_db($con, $this->database) or die("Erro ao selecionar o Banco de Dados: ");
        #configurações de conexão
        mysqli_query($con, "SET NAMES 'utf8'");
        mysqli_query($con, "SET character_set_connection-utf8");
        mysqli_query($con, "SET character_set_client-utf8");
        mysqli_query($con, "SET character_set_results-utf8");
        #retorna a conexão para a chamada de função
        return $con;

    }
}

?>