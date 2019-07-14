<?php 

function usuarioautentico(){
	if (!revisarusuario()) {
		header('location:login.php');
		exit();
	}
}





function revisarusuario(){

	return isset($_SESSION['nombre']);
}

session_start();
usuarioautentico();

 ?>
