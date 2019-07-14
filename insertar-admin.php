<?php 



include_once 'funciones/bd_conexion.php';
include_once 'funciones/funciones.php';

//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';


if (isset($_POST['crear-admin'])) {
	
	

		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$correo=$_POST['email'];
		$pasword=$_POST['password'];
		$rol=$_POST['rol'];
		
		$opciones=array(
			'cost'=>12
		);


		$pasword_encriptado = password_hash($pasword, PASSWORD_BCRYPT,$opciones);

		echo $pasword_encriptado;
		
	
		try {

			$stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, clave, correo, permiso) VALUES (?, ?, ?, ?, ?)");
			$stmt->bind_param("ssssi", $nombre, $apellidos, $pasword_encriptado, $correo, $rol );
			$stmt->execute();
			$stmt->close();
			$conn->close();


			
		} catch (Exception $e) {
			echo 'errorrrr'.$e->getMessage();
		}

}

if (isset($_POST['login-admin'])) {

	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];

	try {
		$stmt =$conn->prepare("SELECT * FROM usuarios WHERE nombre=?");
		$stmt->bind_param("s", $usuario);
		$stmt->execute();
		$stmt->bind_result($id_usuario, $nombre_usuario, $apellidos_usuario, $clave_usuario, $correo_usuario, $activo_usuario, $permiso_usuario);
		if ($stmt->affected_rows){
			$existe = $stmt->fetch();
			if ($existe) {
				if (password_verify($clave, $clave_usuario)) {
					session_start();
					$_SESSION['nombre']=$nombre_usuario;
					$_SESSION['nombrecompleto']= $nombre_usuario." ".$apellidos_usuario;
					$_SESSION['permiso']=$permiso_usuario;



					$respuesta = array(
					'respuesta' => 'bien',
					'usuariolog'=> $nombre_usuario." ".$apellidos_usuario,
					'dato'=>$_SESSION['nombre']
					);
				
				}else {
					$respuesta = array(
					'respuesta' => 'mal'
					);
				}
				
				
			}else {
				$respuesta = array(
					'respuesta' => 'mal'
				);
			}
		}
		$stmt->close();
		$conn->close();
	} catch (Exception $e) {
		
	}

	die(json_encode($respuesta));


}

 ?>