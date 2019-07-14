<?php 
//echo "<pre>"; 
//var_dump($_POST);
//echo "</pre>";

if (isset($_POST['nuevoserv'])) {



	$fecha = $_POST['fecha'];
	$horasalida = $_POST['horasalida'];
	$autoriza = $_POST['autoriza'];
	$motivo = $_POST['motivo'];
	$unidad = $_POST['unidad'];
	$conductor = $_POST['conductor'];
	$direccion = $_POST['direccion'];
	$obac = $_POST['obac'];
	$nbomberos = $_POST['nbomberos'];
	$kmsalida = $_POST['kmsalida'];
	$hrosalida = $_POST['hrosalida'];
	$serasociado =$_POST['servicioasociado'];
	$ocupado = 0;

	if ($kmsalida>0) {
		$ocupado = 1;
	}


//die();


	try {
		include_once 'funciones/funciones.php';
		
		$stmt4 =$conn->prepare("INSERT INTO unidades_servicios (us_unidad, us_fecha, us_horasalida, us_autorizado, us_conductor, us_obac, us_nbomberos, us_kmsalida, us_horometrosalida, id_servicio_aso) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt4 ->bind_param("ssssssiddi", $unidad, $fecha, $horasalida, $autoriza, $conductor, $obac, $nbomberos, $kmsalida, $hrosalida, $serasociado);
		$stmt4 ->execute();
		
		$stmtocupado =$conn->prepare("UPDATE unidades SET ocupado=? WHERE nombre_unidad=?");
		$stmtocupado->bind_param("is", $ocupado, $unidad);
		$stmtocupado->execute();
		$ver = $stmt4;
		 		
		$stmt4->close();
		$stmtocupado->close();
		$conn->close();

	} catch (Exception $e) {
		echo "error".$e->getMessage();
	}

	
}





 ?>

