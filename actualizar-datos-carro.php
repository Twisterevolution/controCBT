<?php 

//var_dump($_POST);

$kmllegada =  $_POST['kmllegada'];
$horometrollegada = $_POST['horollegada'];
$horallegada = $_POST['horallegada'];
$novedad = $_POST['novedad'];
$oculto = $_POST['actualizardatosdeuncarro'];
$iddelcarro = $_POST['idunidad'];
$carro = $_POST['unidadx'];

$ocupado = 1;

if ($kmllegada>0) {
	$ocupado = 0;
}


if ($_POST['actualizardatosdeuncarro'] == 'actualizar') {

	try {
		include_once 'funciones/funciones.php';
		$stmt = $conn->prepare("UPDATE unidades_servicios SET us_kmllegada=?, us_horometrollegada=?, us_horallegada=?, us_novedades =? WHERE id_unidad_servicio=?");
		$stmt->bind_param("ddssi", $kmllegada, $horometrollegada, $horallegada, $novedad, $iddelcarro);
		$stmt->execute();

		$stmt8 = $conn->prepare("UPDATE unidades SET ocupado=? WHERE nombre_unidad=?");
		$stmt8->bind_param("is", $ocupado, $carro);
		$stmt8->execute();
		
		$stmt->close();
		$stmt8->close();
		$conn->close();
	} catch (Exception $e) {
		
	}
	
}else {
	echo "no se que pasa";
}




 ?>