<?php 
include('config.php'); 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha= md5($senha);


$user = new Usuario();

if ($user->login($usuario,$senha)) {
	# code...
}else{
echo"usuario ou senha invalidos";
}
 ?>
