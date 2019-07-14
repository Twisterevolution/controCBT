<?php 
include_once 'funciones/sesiones.php';


//var_dump($_POST);

$dato=$_POST['estado'];
$observCentral=$_POST['obsCentral'];
$id=$_POST['id'];
$modificado=$_SESSION['nombrecompleto'];


try {
	
	include_once 'funciones/funciones.php';
	
   $stmt = $conn->prepare("UPDATE set_servicio SET estado=?, obsCentral=?, modificado=? WHERE id=?");
   $stmt->bind_param("issi", $dato, $observCentral, $modificado, $id);
   $stmt->execute();
   $stmt->close();
   $conn->close();


} catch (Exception $e) {
	
}



 ?>