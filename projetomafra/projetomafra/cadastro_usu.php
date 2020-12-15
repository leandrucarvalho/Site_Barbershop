<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);


$result_usu = "INSERT INTO cad_usuario (nome_usu) VALUES ('$nome')";
$resultado_usuario = mysqli_query($conn, $result_usu);

?>