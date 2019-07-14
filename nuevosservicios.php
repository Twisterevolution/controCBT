<?php 
//echo "<pre>"; 
//var_dump($_POST);
//echo "</pre>";



if (isset($_POST['nuevoserv'])) {



	$fecha = $_POST['fecha2'];
	$horasalida = $_POST['horasalida2'];
	$autoriza = $_POST['autoriza2'];
	$motivo = $_POST['motivo2'];
	$unidad = $_POST['unidad2'];
	$conductor = $_POST['conductor2'];
	$direccion = $_POST['direccion2'];
	$obac = $_POST['obac2'];
	$nbomberos = $_POST['nbomberos2'];
	$kmsalida = $_POST['kmsalida2'];
	$hrosalida = $_POST['hrosalida2'];
	$serasociado =$_POST['servicioasociado'];
	$ocupado =0;

	if ($kmsalida>0) {
		$ocupado = 1;
	}


//die();


	try {
		include_once 'funciones/funciones.php';
		$stmt = $conn-> prepare("INSERT INTO servicios (fservicio, direccion, motivo, autoriza, horasalida)VALUES(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $fecha, $direccion, $motivo, $autoriza, $horasalida);
		$stmt->execute();
		$id_guardado= $stmt->insert_id;

		if ($id_guardado > 0) {
			$respuesta = array(
				'respuesta'=> 'se ingresaron bien',
				'idingresado'=> $id_guardado
			);
		}
		// cuando se crea un nuevo servicio los datos de la unidad se van a la tabla unidades servicios
		$stmt2 =$conn-> prepare("INSERT INTO unidades_servicios (us_autorizado, us_unidad, us_fecha, us_horasalida, us_conductor, us_obac, us_nbomberos, us_kmsalida, us_horometrosalida, 	id_servicio_aso)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt2 ->bind_param("sssssssddi", $autoriza, $unidad, $fecha, $horasalida, $conductor, $obac, $nbomberos, $kmsalida, $hrosalida, $id_guardado);
		$stmt2 ->execute();

		$stmt8 =$conn->prepare("UPDATE unidades SET ocupado=? WHERE nombre_unidad=?");
		$stmt8->bind_param("is", $ocupado, $unidad);
		$stmt8->execute();

		
		

		$stmt->close();
		$stmt2 ->close();
		$stmt8->close();
		
		$conn->close();

	} catch (Exception $e) {
		echo "error".$e->getMessage();
	}

	
}





 ?>

