<?php 
include_once 'funciones/sesiones.php';
echo "<pre>";
var_dump($_POST);
echo '</pre>';

$fecha=$_POST['fecha'];
$horasalida=$_POST['horasalida'];
$motivo=$_POST['motivo'];
$direccion=$_POST['direccion'];
$autoriza=$_POST['autoriza'];
$modificar=$_POST['modificar'];
$idmodifica=$_POST['idmodifica'];
$observaciones=$_POST['obs'];
$asignado=$_SESSION['nombrecompleto'];


if (isset($_POST['xconfirmar'])) {$estado=$_POST['xconfirmar'];}else{$estado=0;}

if (isset($_POST['compania1'])) {$compania1=$_POST['compania1'];}else{$compania1=0;}
if (isset($_POST['b1'])) {$b1=$_POST['b1'];}else{$b1=0;}
if (isset($_POST['q1'])) {$q1=$_POST['q1'];}else{$q1=0;}
if (isset($_POST['m1'])) {$m1=$_POST['m1'];}else{$m1=0;}

if (isset($_POST['compania2'])) {$compania2=$_POST['compania2'];}else{$compania2=0;}
if (isset($_POST['b2'])) {$b2=$_POST['b2'];}else{$b2=0;}
if (isset($_POST['b2'])) {$b2=$_POST['b2'];}else{$b2=0;}
if (isset($_POST['h2'])) {$h2=$_POST['h2'];}else{$h2=0;}
if (isset($_POST['hx2'])) {$hx2=$_POST['hx2'];}else{$hx2=0;}

if (isset($_POST['compania3'])) {$compania3=$_POST['compania3'];}else{$compania3=0;}
if (isset($_POST['b3'])) {$b3=$_POST['b3'];}else{$b3=0;}
if (isset($_POST['r3'])) {$r3=$_POST['r3'];}else{$r3=0;}
if (isset($_POST['rx3'])) {$rx3=$_POST['rx3'];}else{$rx3=0;}

if (isset($_POST['compania4'])) {$compania4=$_POST['compania4'];}else{$compania4=0;}
if (isset($_POST['b4'])) {$b4=$_POST['b4'];}else{$b4=0;}
if (isset($_POST['bx4'])) {$bx4=$_POST['bx4'];}else{$bx4=0;}
if (isset($_POST['g4'])) {$g4=$_POST['g4'];}else{$g4=0;}

if (isset($_POST['compania5'])) {$compania5=$_POST['compania5'];}else{$compania5=0;}
if (isset($_POST['b5'])) {$b5=$_POST['b5'];}else{$b5=0;}
if (isset($_POST['r5'])) {$r5=$_POST['r5'];}else{$r5=0;}

if (isset($_POST['compania6'])) {$compania6=$_POST['compania6'];}else{$compania6=0;}
if (isset($_POST['b6'])) {$b6=$_POST['b6'];}else{$b6=0;}
if (isset($_POST['bx6'])) {$bx6=$_POST['bx6'];}else{$bx6=0;}
if (isset($_POST['ba6'])) {$ba6=$_POST['ba6'];}else{$ba6=0;}

if (isset($_POST['compania7'])) {$compania7=$_POST['compania7'];}else{$compania7=0;}
if (isset($_POST['b7'])) {$b7=$_POST['b7'];}else{$b7=0;}
if (isset($_POST['bx7'])) {$bx7=$_POST['bx7'];}else{$bx7=0;}
if (isset($_POST['m7'])) {$m7=$_POST['m7'];}else{$m7=0;}

if (isset($_POST['compania8'])) {$compania8=$_POST['compania8'];}else{$compania8=0;}
if (isset($_POST['b8'])) {$b8=$_POST['b8'];}else{$b8=0;}
if (isset($_POST['s8'])) {$s8=$_POST['s8'];}else{$s8=0;}

if (isset($_POST['compania9'])) {$compania9=$_POST['compania9'];}else{$compania9=0;}
if (isset($_POST['b9'])) {$b9=$_POST['b9'];}else{$b9=0;}

if (isset($_POST['compania10'])) {$compania10=$_POST['compania10'];}else{$compania10=0;}
if (isset($_POST['b10'])) {$b10=$_POST['b10'];}else{$b10=0;}
if (isset($_POST['bx10'])) {$bx10=$_POST['bx10'];}else{$bx10=0;}

if (isset($_POST['compania11'])) {$compania11=$_POST['compania11'];}else{$compania11=0;}
if (isset($_POST['b11'])) {$b11=$_POST['b11'];}else{$b11=0;}

if (isset($_POST['compania12'])) {$compania12=$_POST['compania12'];}else{$compania12=0;}
if (isset($_POST['b12'])) {$b12=$_POST['b12'];}else{$b12=0;}

if (isset($_POST['compania13'])) {$compania13=$_POST['compania13'];}else{$compania13=0;}
if (isset($_POST['b13'])) {$b13=$_POST['b13'];}else{$b13=0;}
if (isset($_POST['z13'])) {$z13=$_POST['z13'];}else{$z13=0;}

if (isset($_POST['compania14'])) {$compania14=$_POST['compania14'];}else{$compania14=0;}
if (isset($_POST['b14'])) {$b14=$_POST['b14'];}else{$b14=0;}

if (isset($_POST['compania20'])) {$compania20=$_POST['compania20'];}else{$compania20=0;}
if (isset($_POST['k1'])) {$k1=$_POST['k1'];}else{$k1=0;}
if (isset($_POST['k2'])) {$k2=$_POST['k2'];}else{$k2=0;}
if (isset($_POST['k3'])) {$k3=$_POST['k3'];}else{$k3=0;}
if (isset($_POST['k4'])) {$k4=$_POST['k4'];}else{$k4=0;}
if (isset($_POST['lt1'])) {$lt1=$_POST['lt1'];}else{$lt1=0;}

if (isset($_POST['compania21'])) {$compania21=$_POST['compania21'];}else{$compania21=0;}
if (isset($_POST['j1'])) {$j1=$_POST['j1'];}else{$j1=0;}
if (isset($_POST['j2'])) {$j2=$_POST['j2'];}else{$j2=0;}
if (isset($_POST['j3'])) {$j3=$_POST['j3'];}else{$j3=0;}


//die();



	try {
		include_once 'funciones/funciones.php';
	
	if ($_POST['modificar']==1) {

		$stmt = $conn->prepare("UPDATE set_servicio SET fecha=?, hora=?, motivo=?, direccion=?, autorizado=?, c1=?, c2=?, c3=?, c4=?, c5=?, c6=?, c7=?, c8=?, c9=?, c10=?, c11=?, c12=?, c13=?, c14=?, c20=?, c21=?, b1=?, q1=?, m1=?, b2=?, h2=?, hx2=?, b3=?, r3=?, rx3=?, b4=?, bx4=?, g4=?, b5=?, r5=?, b6=?, bx6=?, ba6=?, b7=?, bx7=?, m7=?, b8=?, s8=?, b9=?, b10=?, bx10=?, b11=?, b12=?, b13=?, z13=?, b14=?, k1=?, k2=?, k3=?, k4=?, lt1=?, j1=?, j2=?, j3=?, observaciones=?, modificado=?, estado=? WHERE id=?");
		$stmt->bind_param("sssssiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiissii", $fecha, $horasalida, $motivo, $direccion, $autoriza, $compania1, $compania2, $compania3,	$compania4,	$compania5,	$compania6,	$compania7,	$compania8,	$compania9,	$compania10, $compania11, $compania12, $compania13, $compania14, $compania20,	$compania21, $b1, $q1, $m1, $b2, $h2, $hx2, $b3, $r3, $rx3, $b4, $bx4, $g4, $b5, $r5, $b6, $bx6, $ba6, $b7, $bx7, $m7, $b8, $s8, $b9, $b10, $bx10, $b11, $b12, $b13, $z13, $b14, $k1, $k2, $k3, $k4, $lt1, $j1, $j2, $j3, $observaciones, $asignado, $estado, $idmodifica);
		
	}else{
		
		$stmt = $conn->prepare("INSERT INTO set_servicio (fecha, hora, motivo, direccion, autorizado, c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12, c13, c14, c20, c21, b1, q1, m1, b2, h2, hx2, b3, r3, rx3, b4, bx4, g4, b5, r5, b6, bx6, ba6, b7, bx7, m7, b8, s8, b9, b10, bx10, b11, b12, b13, z13, b14, k1, k2, k3, k4, lt1, j1, j2, j3, observaciones, asignado, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiissi", $fecha, $horasalida, $motivo, $direccion, $autoriza, $compania1, $compania2, $compania3,	$compania4,	$compania5,	$compania6,	$compania7,	$compania8,	$compania9,	$compania10, $compania11, $compania12, $compania13, $compania14, $compania20,	$compania21, $b1, $q1, $m1, $b2, $h2, $hx2, $b3, $r3, $rx3, $b4, $bx4, $g4, $b5, $r5, $b6, $bx6, $ba6, $b7, $bx7, $m7, $b8, $s8, $b9, $b10, $bx10, $b11, $b12, $b13, $z13, $b14, $k1, $k2, $k3, $k4, $lt1, $j1, $j2, $j3, $observaciones, $asignado, $estado);
	}

		
		$stmt->execute();
		$idServicioComan = $stmt->insert_id;
		$stmt->close();
		$conn->close();
		


	} catch (Exception $e) {
		
	}


 ?>

