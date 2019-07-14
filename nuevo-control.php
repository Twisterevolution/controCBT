
<?php 
 include_once 'funciones/sesiones.php';
 include_once 'funciones/bd_conexion.php';
 include_once 'funciones/funciones.php';

$fecha = $_POST['fechacontrol'];
$hora = $_POST['hcontrol']; //1=8:15  2=12:15  3=No realizado
$motivo= $_POST['motivo'];
$creadopor = $_SESSION['nombre'];

echo '<pre>';
var_dump($_POST);
echo '</pre>';





$stmt1 = $conn->prepare("INSERT INTO control (fecha, horacontrol, motivo, creadopor) VALUES (?,?,?,?)");
$stmt1->bind_param("siss", $fecha, $hora, $motivo, $creadopor);
$stmt1->execute();
$idcontrol = $conn->insert_id;
$idcarro = $idcontrol;

//die();

if ($hora==1 || $hora==2) {

	$stmt20 = $conn->prepare("INSERT INTO `controlunidad` (idcontrol, idunidadcontrol, estado, disponible, novedad, detalle) VALUES (?,?,?,?,?,?)");
	$stmt20->bind_param("iiiiis", $idcontrols, $unidad, $estado, $disponible, $novedad, $detalle);	
	 


	//carro b1
	$idcontrols = $idcarro;
	$unidad = $_POST['b1'];
	$estado = (isset($_POST['sb1'])) ? $_POST['sb1'] : 0;
	$disponible = (isset($_POST['db1'])) ? $_POST['db1'] : 0;
	$novedad = (isset($_POST['nb1'])) ? $_POST['nb1'] : 1;
	$detalle = $_POST['novb1'];

	$stmt20->execute();


	// carro b2
	$idcontrols = $idcarro;
	$unidad = $_POST['b2'];
	$estado = (isset($_POST['sb2'])) ? $_POST['sb2'] : 0;
	$disponible = (isset($_POST['db2'])) ? $_POST['db2'] : 0;
	$novedad = (isset($_POST['nb2'])) ? $_POST['nb2'] : 1;
	$detalle = $_POST['novb2'];

	$stmt20->execute();

	// carro b3
	$idcontrols = $idcarro;
	$unidad = $_POST['b3'];
	$estado = (isset($_POST['sb3'])) ? $_POST['sb3'] : 0;
	$disponible = (isset($_POST['db3'])) ? $_POST['db3'] : 0;
	$novedad = (isset($_POST['nb3'])) ? $_POST['nb3'] : 1;

	$detalle = $_POST['novb3'];

	$stmt20->execute();

	// carro b4
	$idcontrols = $idcarro;
	$unidad = $_POST['b4'];
	$estado = (isset($_POST['sb4'])) ? $_POST['sb4'] : 0;
	$disponible = (isset($_POST['db4'])) ? $_POST['db4'] : 0;
	$novedad = (isset($_POST['nb4'])) ? $_POST['nb4'] : 1;
	$detalle = $_POST['novb4'];

	$stmt20->execute();

	// carro bx4
	$idcontrols = $idcarro;
	$unidad = $_POST['bx4'];
	$estado = (isset($_POST['sbx4'])) ? $_POST['sbx4'] : 0;
	$disponible = (isset($_POST['dbx4'])) ? $_POST['dbx4'] : 0;
	$novedad = (isset($_POST['nbx4'])) ? $_POST['nbx4'] : 1;
	$detalle = $_POST['novbx4'];

	$stmt20->execute();

	// carro g4
	$idcontrols = $idcarro;
	$unidad = $_POST['g4'];
	$estado = (isset($_POST['sg4'])) ? $_POST['sg4'] : 0;
	$disponible = (isset($_POST['dg4'])) ? $_POST['dg4'] : 0;
	$novedad = (isset($_POST['ng4'])) ? $_POST['ng4'] : 1;
	$detalle = $_POST['novg4'];

	$stmt20->execute();

	// carro b5
	$idcontrols = $idcarro;
	$unidad = $_POST['b5'];
	$estado = (isset($_POST['sb5'])) ? $_POST['sb5'] : 0;
	$disponible = (isset($_POST['db5'])) ? $_POST['db5'] : 0;
	$novedad = (isset($_POST['nb5'])) ? $_POST['nb5'] : 1;
	$detalle = $_POST['novb5'];

	$stmt20->execute();

	// carro b6
	$idcontrols = $idcarro;
	$unidad = $_POST['b6'];
	$estado = (isset($_POST['sb6'])) ? $_POST['sb6'] : 0;
	$disponible = (isset($_POST['db6'])) ? $_POST['db6'] : 0;
	$novedad = (isset($_POST['nb6'])) ? $_POST['nb6'] : 1;
	$detalle = $_POST['novb6'];

	$stmt20->execute();

	// carro bx6
	$idcontrols = $idcarro;
	$unidad = $_POST['bx6'];
	$estado = (isset($_POST['sbx6'])) ? $_POST['sbx6'] : 0;
	$disponible = (isset($_POST['dbx6'])) ? $_POST['dbx6'] : 0;
	$novedad = (isset($_POST['nbx6'])) ? $_POST['nbx6'] : 1;
	$detalle = $_POST['novbx6'];

	$stmt20->execute();

	// carro b7
	$idcontrols = $idcarro;
	$unidad = $_POST['b7'];
	$estado = (isset($_POST['sb7'])) ? $_POST['sb7'] : 0;
	$disponible = (isset($_POST['db7'])) ? $_POST['db7'] : 0;
	$novedad = (isset($_POST['nb7'])) ? $_POST['nb7'] : 1;
	$detalle = $_POST['novb7'];

	$stmt20->execute();

	// carro bx7
	$idcontrols = $idcarro;
	$unidad = $_POST['bx7'];
	$estado = (isset($_POST['sbx7'])) ? $_POST['sbx7'] : 0;
	$disponible = (isset($_POST['dbx7'])) ? $_POST['dbx7'] : 0;
	$novedad = (isset($_POST['nbx7'])) ? $_POST['nbx7'] : 1;
	$detalle = $_POST['novbx7'];

	$stmt20->execute();

	// carro b8
	$idcontrols = $idcarro;
	$unidad = $_POST['b8'];
	$estado = (isset($_POST['sb8'])) ? $_POST['sb8'] : 0;
	$disponible = (isset($_POST['db8'])) ? $_POST['db8'] : 0;
	$novedad = (isset($_POST['nb8'])) ? $_POST['nb8'] : 1;
	$detalle = $_POST['novb8'];

	$stmt20->execute();

	// carro b9
	$idcontrols = $idcarro;
	$unidad = $_POST['b9'];
	$estado = (isset($_POST['sb9'])) ? $_POST['sb9'] : 0;
	$disponible = (isset($_POST['db9'])) ? $_POST['db9'] : 0;
	$novedad = (isset($_POST['nb9'])) ? $_POST['nb9'] : 1;
	$detalle = $_POST['novb9'];

	$stmt20->execute();

	// carro b10
	$idcontrols = $idcarro;
	$unidad = $_POST['b10'];
	$estado = (isset($_POST['sb10'])) ? $_POST['sb10'] : 0;
	$disponible = (isset($_POST['db10'])) ? $_POST['db10'] : 0;
	$novedad = (isset($_POST['nb10'])) ? $_POST['nb10'] : 1;
	$detalle = $_POST['novb10'];

	$stmt20->execute();

	// carro bx10
	$idcontrols = $idcarro;
	$unidad = $_POST['bx10'];
	$estado = (isset($_POST['sbx10'])) ? $_POST['sbx10'] : 0;
	$disponible = (isset($_POST['dbx10'])) ? $_POST['dbx10'] : 0;
	$novedad = (isset($_POST['nbx10'])) ? $_POST['nbx10'] : 1;
	$detalle = $_POST['novbx10'];

	$stmt20->execute();

	// carro b11
	$idcontrols = $idcarro;
	$unidad = $_POST['b11'];
	$estado = (isset($_POST['sb11'])) ? $_POST['sb11'] : 0;
	$disponible = (isset($_POST['db11'])) ? $_POST['db11'] : 0;
	$novedad = (isset($_POST['nb11'])) ? $_POST['nb11'] : 1;
	$detalle = $_POST['novb11'];

	$stmt20->execute();

	// carro b12
	$idcontrols = $idcarro;
	$unidad = $_POST['b12'];
	$estado = (isset($_POST['sb12'])) ? $_POST['sb12'] : 0;
	$disponible = (isset($_POST['db12'])) ? $_POST['db12'] : 0;
	$novedad = (isset($_POST['nb12'])) ? $_POST['nb12'] : 1;
	$detalle = $_POST['novb12'];

	$stmt20->execute();

	// carro b13
	$idcontrols = $idcarro;
	$unidad = $_POST['b13'];
	$estado = (isset($_POST['sb13'])) ? $_POST['sb13'] : 0;
	$disponible = (isset($_POST['db13'])) ? $_POST['db13'] : 0;
	$novedad = (isset($_POST['nb13'])) ? $_POST['nb13'] : 1;
	$detalle = $_POST['novb13'];

	$stmt20->execute();

	// carro b14
	$idcontrols = $idcarro;
	$unidad = $_POST['b14'];
	$estado = (isset($_POST['sb14'])) ? $_POST['sb14'] : 0;
	$disponible = (isset($_POST['db14'])) ? $_POST['db14'] : 0;
	$novedad = (isset($_POST['nb14'])) ? $_POST['nb14'] : 1;
	$detalle = $_POST['novb14'];

	$stmt20->execute();

	// carro m1
	$idcontrols = $idcarro;
	$unidad = $_POST['m1'];
	$estado = (isset($_POST['sm1'])) ? $_POST['sm1'] : 0;
	$disponible = (isset($_POST['dm1'])) ? $_POST['dm1'] : 0;
	$novedad = (isset($_POST['nm1'])) ? $_POST['nm1'] : 1;
	$detalle = $_POST['novm1'];

	$stmt20->execute();

	// carro m7
	$idcontrols = $idcarro;
	$unidad = $_POST['m7'];
	$estado = (isset($_POST['sm7'])) ? $_POST['sm7'] : 0;
	$disponible = (isset($_POST['dm7'])) ? $_POST['dm7'] : 0;
	$novedad = (isset($_POST['nm7'])) ? $_POST['nm7'] : 1;
	$detalle = $_POST['novm7'];

	$stmt20->execute();

	// carro q1
	$idcontrols = $idcarro;
	$unidad = $_POST['q1'];
	$estado = (isset($_POST['sq1'])) ? $_POST['sq1'] : 0;
	$disponible = (isset($_POST['dq1'])) ? $_POST['dq1'] : 0;
	$novedad = (isset($_POST['nq1'])) ? $_POST['nq1'] : 1;
	$detalle = $_POST['novq1'];

	$stmt20->execute();

	// carro h2
	$idcontrols = $idcarro;
	$unidad = $_POST['h2'];
	$estado = (isset($_POST['sh2'])) ? $_POST['sh2'] : 0;
	$disponible = (isset($_POST['dh2'])) ? $_POST['dh2'] : 0;
	$novedad = (isset($_POST['nh2'])) ? $_POST['nh2'] : 1;
	$detalle = $_POST['novh2'];

	$stmt20->execute();

	// carro hx2
	$idcontrols = $idcarro;
	$unidad = $_POST['hx2'];
	$estado = (isset($_POST['shx2'])) ? $_POST['shx2'] : 0;
	$disponible = (isset($_POST['dhx2'])) ? $_POST['dhx2'] : 0;
	$novedad = (isset($_POST['nhx2'])) ? $_POST['nhx2'] : 1;
	$detalle = $_POST['novhx2'];

	$stmt20->execute();

	// carro r3
	$idcontrols = $idcarro;
	$unidad = $_POST['r3'];
	$estado = (isset($_POST['sr3'])) ? $_POST['sr3'] : 0;
	$disponible = (isset($_POST['dr3'])) ? $_POST['dr3'] : 0;
	$novedad = (isset($_POST['nr3'])) ? $_POST['nr3'] : 1;
	$detalle = $_POST['novr3'];

	$stmt20->execute();

	// carro rx3
	$idcontrols = $idcarro;
	$unidad = $_POST['rx3'];
	$estado = (isset($_POST['srx3'])) ? $_POST['srx3'] : 0;
	$disponible = (isset($_POST['drx3'])) ? $_POST['drx3'] : 0;
	$novedad = (isset($_POST['nrx3'])) ? $_POST['nrx3'] : 1;
	$detalle = $_POST['novrx3'];

	$stmt20->execute();

	// carro r5
	$idcontrols = $idcarro;
	$unidad = $_POST['r5'];
	$estado = (isset($_POST['sr5'])) ? $_POST['sr5'] : 0;
	$disponible = (isset($_POST['dr5'])) ? $_POST['dr5'] : 0;
	$novedad = (isset($_POST['nr5'])) ? $_POST['nr5'] : 1;
	$detalle = $_POST['novr5'];

	$stmt20->execute();

	// carro s8
	$idcontrols = $idcarro;
	$unidad = $_POST['s8'];
	$estado = (isset($_POST['ss8'])) ? $_POST['ss8'] : 0;
	$disponible = (isset($_POST['ds8'])) ? $_POST['ds8'] : 0;
	$novedad = (isset($_POST['ns8'])) ? $_POST['ns8'] : 1;
	$detalle = $_POST['novs8'];

	$stmt20->execute();


	// carro z13
	$idcontrols = $idcarro;
	$unidad = $_POST['z13'];
	$estado = (isset($_POST['sz13'])) ? $_POST['sz13'] : 0;
	$disponible = (isset($_POST['dz13'])) ? $_POST['dz13'] : 0;
	$novedad = (isset($_POST['nz13'])) ? $_POST['nz13'] : 1;
	$detalle = $_POST['novz13'];

	$stmt20->execute();

	// carro bA6
	$idcontrols = $idcarro;
	$unidad = $_POST['ba6'];
	$estado = (isset($_POST['sba6'])) ? $_POST['sba6'] : 0;
	$disponible = (isset($_POST['dba6'])) ? $_POST['dba6'] : 0;
	$novedad = (isset($_POST['nba6'])) ? $_POST['nba6'] : 1;
	$detalle = $_POST['novba6'];

	$stmt20->execute();

	// carro k1
	$idcontrols = $idcarro;
	$unidad = $_POST['k1'];
	$estado = (isset($_POST['sk1'])) ? $_POST['sk1'] : 0;
	$disponible = (isset($_POST['dk1'])) ? $_POST['dk1'] : 0;
	$novedad = (isset($_POST['nk1'])) ? $_POST['nk1'] : 1;
	$detalle = $_POST['novk1'];

	$stmt20->execute();

	// carro k2
	$idcontrols = $idcarro;
	$unidad = $_POST['k2'];
	$estado = (isset($_POST['sk2'])) ? $_POST['sk2'] : 0;
	$disponible = (isset($_POST['dk2'])) ? $_POST['dk2'] : 0;
	$novedad = (isset($_POST['nk2'])) ? $_POST['nk2'] : 1;
	$detalle = $_POST['novk2'];

	$stmt20->execute();

	// carro k3
	$idcontrols = $idcarro;
	$unidad = $_POST['k3'];
	$estado = (isset($_POST['sk3'])) ? $_POST['sk3'] : 0;
	$disponible = (isset($_POST['dk3'])) ? $_POST['dk3'] : 0;
	$novedad = (isset($_POST['nk3'])) ? $_POST['nk3'] : 1;
	$detalle = $_POST['novk3'];

	$stmt20->execute();

	// carro k4
	$idcontrols = $idcarro;
	$unidad = $_POST['k4'];
	$estado = (isset($_POST['sk4'])) ? $_POST['sk4'] : 0;
	$disponible = (isset($_POST['dk4'])) ? $_POST['dk4'] : 0;
	$novedad = (isset($_POST['nk4'])) ? $_POST['nk4'] : 1;
	$detalle = $_POST['novk4'];

	$stmt20->execute();

	// carro lt1
	$idcontrols = $idcarro;
	$unidad = $_POST['lt1'];
	$estado = (isset($_POST['slt1'])) ? $_POST['slt1'] : 0;
	$disponible = (isset($_POST['dlt1'])) ? $_POST['dlt1'] : 0;
	$novedad = (isset($_POST['nlt1'])) ? $_POST['nlt1'] : 1;
	$detalle = $_POST['novlt1'];

	$stmt20->execute();

	// carro j1
	$idcontrols = $idcarro;
	$unidad = $_POST['j1'];
	$estado = (isset($_POST['sj1'])) ? $_POST['sj1'] : 0;
	$disponible = (isset($_POST['dj1'])) ? $_POST['dj1'] : 0;
	$novedad = (isset($_POST['nj1'])) ? $_POST['nj1'] : 1;
	$detalle = $_POST['novj1'];

	$stmt20->execute();

	// carro j2
	$idcontrols = $idcarro;
	$unidad = $_POST['j2'];
	$estado = (isset($_POST['sj2'])) ? $_POST['sj2'] : 0;
	$disponible = (isset($_POST['dj2'])) ? $_POST['dj2'] : 0;
	$novedad = (isset($_POST['nj2'])) ? $_POST['nj2'] : 1;
	$detalle = $_POST['novj2'];

	$stmt20->execute();

	// carro j3
	$idcontrols = $idcarro;
	$unidad = $_POST['j3'];
	$estado = (isset($_POST['sj3'])) ? $_POST['sj3'] : 0;
	$disponible = (isset($_POST['dj3'])) ? $_POST['dj3'] : 0;
	$novedad = (isset($_POST['nj3'])) ? $_POST['nj3'] : 1;
	$detalle = $_POST['novj3'];

	$stmt20->execute();

} else {
	$idcontrols = $idcarro; 
	$a=50;
	$b=1;
	$c=1;
	$d=0;
	$e="no-realizado";	
	$stmt21 = $conn->prepare("INSERT INTO `controlunidad` (idcontrol, idunidadcontrol, estado, disponible, novedad, detalle) VALUES (?,?,?,?,?,?)");
	$stmt21->bind_param("iiiiis", $idcontrols, $a, $b, $c, $d, $e);

	$stmt21->execute();

 } 

 ?>