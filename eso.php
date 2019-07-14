<?php 
  include_once 'funciones/bd_conexion.php';
  include_once 'funciones/funciones.php';
  $informacion = "SELECT * FROM servicios WHERE id_servicios = ".$_POST['detalle']."";
   
  $infor = $conn->query($informacion);
  $columna = $infor->fetch_assoc();
 
 echo 'Fecha:<b>'.$columna['fservicio'].'</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Hora de Inicio:<b>'.$columna['horasalida'].'</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDonde:<b>'.$columna['direccion'].'</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAutorizado por:<b>'.$columna['autoriza'].'</b></h4>';
 echo' <input type="hidden" name="" id="direccion" value="'.$columna['direccion'].'" placeholder="">';
 echo' <input type="hidden" name="" id="motivo" value="'.$columna['motivo'].'" placeholder="">';
 


?>
