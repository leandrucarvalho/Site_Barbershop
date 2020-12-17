<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "barbershop";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

mysqli_select_db($conn, "barbershop");
?>