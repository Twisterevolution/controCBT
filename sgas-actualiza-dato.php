<?php 

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$sgasestado = $_POST['sgasok'];
$sgasoperadora = $_POST['op'];
$unidadsgas = $_POST['carroactualizar'];

try {

	include_once 'funciones/funciones.php';
	$stmtsgas =$conn->prepare("UPDATE unidades_servicios SET us_sgas=?, operadora_sgas=? WHERE id_unidad_servicio =?");
	$stmtsgas->bind_param("iii", $sgasestado, $sgasoperadora, $unidadsgas);
	$stmtsgas->execute();
	$stmtsgas->close();
	$conn->close();

} catch (Exception $e) {
	
}
	

 ?>