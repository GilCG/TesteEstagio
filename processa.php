<?php

include_once("conexao.php");

$registro = $_POST["registro"];
$livro = $_POST["livro"];
$autor = $_POST["autor"];
$isbn = $_POST["isbn"];
$copias = $_POST["copias"];
$paginas = $_POST["paginas"];

$sql = "insert into registros (registro,livro,autor,isbn,copias,paginas) values ('$registro','$livro','$autor','$isbn','$copias','$paginas')";

$salvar = mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>