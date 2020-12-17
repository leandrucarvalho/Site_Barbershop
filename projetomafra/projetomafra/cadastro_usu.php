<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$confirmeasenha = $_POST['confirmeasenha'];

if($senha != $confirmeasenha){
    echo "<script>alert('Senhas diferentes')</script> ";
    echo "<script>window.location.href='cadastro.php'</script>";
    
    //header('location: cadastro.php');

    exit;
}
//var_dump($_POST);
$result_usu = "INSERT INTO cad_usuario (nome_usu, email_usu, senha_usu, telefone_usu) VALUES ('$nome', '$email','$senha', '$telefone')";
$resultado_usuario = mysqli_query($conn, $result_usu);

echo "<script>alert('cadastrado com sucesso')</script> ";
echo "<script>window.location.href='cadastro.php'</script>";

?>