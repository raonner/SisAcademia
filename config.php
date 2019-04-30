<?php 
session_start(); //adicionado


function verificaLogin(){
//session_start();
if(!$_SESSION['usuario']) {
	header('Location: index.php');
	exit();

}
}
function logout(){
session_destroy();
header('Location: index.php');
exit();
}

spl_autoload_register(function($class_name){

	$filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

	if (file_exists(($filename))) {
		require_once($filename);
	}

});
 

 ?>