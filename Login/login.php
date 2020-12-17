<?php
include_once("../projetomafra/conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

//$senhabd=md5($senha);


$result_usu = "SELECT * FROM cad_funcionario WHERE email_fun='$email' AND senha_fun='$senha'";
//echo $result_usu;
$resultado_usuario = mysqli_query($conn, $result_usu) or die("Erro");
while($dados=mysqli_fetch_assoc($resultado_usuario))
{
   echo 'Usuário logado';
}
?>