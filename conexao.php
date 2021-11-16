<?php

$hostnane = "localhost";
$user = "root";
$password = "";
$database = "registros";
$conexao = mysqli_connect($hostnane,$user,$password,$database);

if (!$conexao) {
    print "Falha na conexão com o Banco de Dados";
}

?>