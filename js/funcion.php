<?php

//definición de constantes usadas por el módulo
defined('TITULO_SITIO') ? NULL : define('TITULO_SITIO', 'Proyectos Espex');


function conectarse() {
   	if (!($conn = mysql_connect("localhost","plataformas","Espex.2016"))) {
      	echo 'Error conectando a la base de datos.';
      	exit();
   		}
   	if (!mysql_select_db("plataformas_proyectos",$conn)) {
      	echo 'Error seleccionando la base de datos.';
      	exit();
   		}
   	return $conn;
	}	 
	
function val_cadena($cadena) {
	$cadena = strip_tags($cadena);
	$cadena = str_replace("'","´",$cadena);
	return $cadena;
	} 

function fecha_actual() {
	return strftime("%Y-%m-%d %H:%M:%S", time());
}

function datetime_to_text($datetime="") {
	$unixdatetime = strtotime($datetime);
	return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
}

function datetime_a_fecha($datetime="") {
	$unixdatetime = strtotime($datetime);
	return strftime("%Y-%m-%d", $unixdatetime);
}

function datetime_a_fecha2($datetime="") {
	$unixdatetime = strtotime($datetime);
	return strftime("%d-%m-%Y", $unixdatetime);
}

function fecha_a_datetime($fecha="") {
	if (empty($fecha)) {
		return false;
	} else {
		$partes = explode("-", $fecha);
		$agno = $partes[2];
		$mes = $partes[1];
		$dia = $partes[0];
		$fecha = $partes[2]."-".$partes[1]."-".$partes[0]." 12:00:00";
		return $fecha;
	}
}
function fecha_a_datetime1($fecha="") {
	if (empty($fecha)) {
		return false;
	} else {
		$partes = explode("-", $fecha);
		$agno = $partes[2];
		$mes = $partes[1];
		$dia = $partes[0];
		$fecha = $partes[2]."-".$partes[1]."-".$partes[0]." 00:00:00";
		return $fecha;
	}
}

function fecha_a_datetime2($fecha="") {
	if (empty($fecha)) {
		return false;
	} else {
		$partes = explode("-", $fecha);
		$agno = $partes[2];
		$mes = $partes[1];
		$dia = $partes[0];
		$fecha = $partes[2]."-".$partes[1]."-".$partes[0]." 23:59:59";
		return $fecha;
	}
}

function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}

/********************* arrays y otros ************************************************/

//función para ejecutar una consulta sql y recibir el resulset como array
function query2array($query){
	$result = mysql_query($query) or die(mysql_error()." qry::$query");
	$tmp_array = array();
	$return_array = array();
	while ($obj = mysql_fetch_object($result)) {
		foreach($obj as $key => $value) {
			$tmp_array[$key] = $value;
		}
		$return_array[] = $tmp_array;
	}
	return $return_array;
}

//devuelve una fila de una consulta sql
function query2row($sql = NULL) {
	
	if (is_null($sql)) {
		return 0;
	} else {
		$result_set = mysql_query($sql);
		if (!$result_set) {
			return 0;
		} else {
			$row = mysql_fetch_array($result_set);
			return $row;
		}
	}
}	
	
//devuelve un array a partir de un resultset
function resultset2array($result)
{
	$table_result=array();
	$r=0;
	while($row = mysql_fetch_assoc($result)){
		$arr_row=array();
		$c=0;
		while ($c < mysql_num_fields($result)) {       
			$col = mysql_fetch_field($result, $c);   
			$arr_row[$col -> name] = $row[$col -> name];           
			$c++;
		}   
		$table_result[$r] = $arr_row;
		$r++;
	}   
	return $table_result;
}

//devuelve el resultado de una consulta sql cuando es solo un dato
function query2value($sql = NULL) {
	
	if (is_null($sql)) {
		return 0;
	} else {
		$result_set = mysql_query($sql);
		if (!$result_set) {
			return 0;
		} else {
			$row = mysql_fetch_array($result_set);
			return $row[0];
		}
	}
}
//función para eliminar elementos duplicados de un array multidimensional
function arrayUnique($myArray)
{
    if(!is_array($myArray))
           return $myArray;
    foreach ($myArray as &$myvalue){
        $myvalue=serialize($myvalue);
    }
    $myArray=array_unique($myArray);

	foreach ($myArray as &$myvalue){
        $myvalue=unserialize($myvalue);
    }
    return $myArray;
} 

function dibujar_tabla ($array_cabecera, $array_datos) {

	echo "\n<tr class='tr_cabecera'>";
	foreach ($array_cabecera as $campo => $nombre) {
		echo '<td><b>'.$nombre.'</b></td>'; }
	echo "</tr>";
	
	foreach ($array_datos as $datos => $valores) {
		echo "\n<tr class=tr_detalle onmouseover='color_over(this)' onmouseout='color_out(this)'>";
		foreach ($valores as $valor => $v) {
			if (is_numeric($v) && ($valor != "agno")) { 
				echo '<td>'.number_format($v,0,',','.').'</td>'; 
			} else { 
				echo '<td>'.$v.'</td>'; 
			}
		}
		echo "</tr>";
	}
}

function mostrar_r($array) {

	echo "<pre>";
	print_r($array);
	echo "</pre>";
	return;
}

/********************* DEVUELVE NOMBRES Y SACA CUENTA ********************************/
	
function nombre_mes_anterior($fecha) {
	$fecha = explode("-",$fecha);
	switch(intval($fecha[1] - 1))
       {
	   case 0:
          $mes="Diciembre";
          break;
       case 1:
          $mes="Enero";
          break;
       case 2:
          $mes="Febrero";
          break;
       case 3:
          $mes="Marzo";
          break;
       case 4:
          $mes="Abril";
          break;
       case 5:
          $mes="Mayo";
          break;
       case 6:
          $mes="Junio";
          break;
       case 7:
          $mes="Julio";
          break;
       case 8:
          $mes="Agosto";
          break;
       case 9:
          $mes="Septiembre";
          break;
       case 10:
          $mes="Octubre";
          break;
       case 11:
          $mes="Noviembre";
          break;
	   default:
	   	  $mes="Indefinido";
       } 
	return $mes;
	}
	
function nombre_mes($fecha) {
	switch(intval($fecha))
       {
       case 1:
          $mes="Enero";
          break;
       case 2:
          $mes="Febrero";
          break;
       case 3:
          $mes="Marzo";
          break;
       case 4:
          $mes="Abril";
          break;
       case 5:
          $mes="Mayo";
          break;
       case 6:
          $mes="Junio";
          break;
       case 7:
          $mes="Julio";
          break;
       case 8:
          $mes="Agosto";
          break;
       case 9:
          $mes="Septiembre";
          break;
       case 10:
          $mes="Octubre";
          break;
       case 11:
          $mes="Noviembre";
          break;
	   case 12:
          $mes="Diciembre";
          break;
	   default:
	   	  $mes="Indefinido";
       } 
	return $mes;
}

function nombre_empresa($id_empresa) {
	
	$conn = conectarse();
	$ssql = 'SELECT p.nombre FROM proy_empresa p WHERE id_empresa ='.$id_empresa.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}
	
function nombre_area($id_categoria, $conn) {
	
	$ssql = 'SELECT p.descripcion FROM proy_sueldo_categoria p
			 WHERE p.id_categoria = '.$id_categoria.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function nombre_cc($id_cc, $conn = NULL) {
	
	$ssql = 'SELECT codigo_cc, nombre_cc FROM proy_centro_costo
			 WHERE id_cc = '.$id_cc.';';
	if (is_null($conn)) {
		$rs = mysql_query($ssql);
	} else {
		$rs = mysql_query($ssql,$conn);
	}
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[1];
}

function nombre_proveedor($id_proveedor, $conn) {
	
	$ssql = 'SELECT nombre FROM proy_proveedor
			 WHERE id_proveedor = '.$id_proveedor.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function nombre_proveedor_2($id_proveedor) {
	
	$ssql = 'SELECT nombre FROM proy_proveedor
			 WHERE id_proveedor = '.$id_proveedor.';';
	$rs = mysql_query($ssql);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function nombre_activo($id) {
	
	if ($id) {
		return "Si";
	} else {
		return "No";
	}
}

function nombre_familia($fam, $conn) {
	
	if (strlen($fam) == 2) {
		$ssql = "SELECT descr_familia FROM proy_familia 
				 WHERE cod_familia LIKE '%".$fam."%';"; 
		$rs = mysql_query($ssql,$conn);
		$fila = mysql_fetch_row($rs);
		$caption = $fila[0];
		}
	else {
		$ssql = "SELECT descr_familia FROM proy_familia 
				 WHERE cod_familia LIKE '%".substr($fam,0,2)."%';"; 
		$rs = mysql_query($ssql,$conn);
		$fila = mysql_fetch_row($rs);

		$ssql2 = "SELECT descr_familia FROM proy_familia 
				  WHERE cod_familia LIKE '%".$fam."%';"; 
		$rs2 = mysql_query($ssql2,$conn);
		$fila2 = mysql_fetch_row($rs2);
		mysql_free_result($rs2);
		
		$caption = ''.$fila[0].' - '.$fila2[0].'';
	}
	mysql_free_result($rs);
	return $caption;
}

function nombre_forma_pago($id_forma_pago, $conn) {
	
	$ssql = 'SELECT descripcion FROM proy_forma_pago
			 WHERE id_forma_pago = '.$id_forma_pago.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function nombre_cat_rend($id_cat, $conn = NULL) {
	
	$ssql = 'SELECT descripcion FROM proy_rendicion_categoria
			 WHERE id_rend_cat = '.$id_cat.';';
	if (is_null($conn)) {
		$rs = mysql_query($ssql);
	} else {
		$rs = mysql_query($ssql,$conn);
	}
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function nombre_tipo_rend($id_tipo, $conn) {
	
	$ssql = 'SELECT descripcion FROM proy_rendicion_tipo
			 WHERE id_tipo = '.$id_tipo.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function nombre_rend_f_ent($id_forma, $conn) {

	$ssql = 'SELECT descripcion FROM proy_rendicion_entrega
			 WHERE id_rend_entrega = '.$id_forma.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function cuenta_areas() {

	$conn = conectarse();
	$ssql = 'SELECT COUNT(p.id_categoria) FROM proy_sueldo_categoria p;';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];	
}

function cuenta_cc() {

	$conn = conectarse();
	$ssql = 'SELECT COUNT(id_cc) FROM proy_centro_costo;';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];	
}

function nombre_persona($id_persona, $conn) {
	
	$ssql = 'SELECT p.nombre FROM proy_personal p
			 WHERE p.id_personal = '.$id_persona.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function nombrec_usuario($id_usuario, $conn) {
	
	$ssql = 'SELECT p.nombrec_usuario FROM proy_usuario p
			 WHERE p.id_usuario = '.$id_usuario.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function nombrec_usuario2($id_usuario) {
	
	if (is_null($id_usuario)) {
		return "";
	} else {
		$ssql = 'SELECT p.nombrec_usuario FROM proy_usuario p
				 WHERE p.id_usuario = '.$id_usuario.';';
		$rs = mysql_query($ssql);
		$fila = mysql_fetch_row($rs);
		mysql_free_result($rs);
		return $fila[0];
	}
}

function nombre_estado_rend($id_estado, $conn) {
	
	$ssql = 'SELECT * FROM proy_rendicion_estado
			 WHERE id_rendicion_estado = '.$id_estado.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[1];
}

function nombre_estado_cons($id_estado, $conn) {
	
	$ssql = 'SELECT * FROM proy_consolidar_estado
			 WHERE id_cons_estado = '.$id_estado.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[1];
}

function nombre_estado_entrega($id_estado) {
	
	$ssql = 'SELECT * FROM proy_entrega_estado
			 WHERE enes_ncorr = '.$id_estado.';';
	$rs = mysql_query($ssql);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[1];
}

function nombre_estado_doc_ent($id_estado) {
	
	$ssql = 'SELECT * FROM proy_entrega_detalle_estado 
			 WHERE edes_ncorr = '.$id_estado.';';
	$rs = mysql_query($ssql);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[1];
}

function formato_nombre($nombrec) {
	
	$nombrec = explode(",", $nombrec);
	$apellidos = ucfirst(strtolower($nombrec[0]));
	$apellidos = explode(" ", $apellidos);
	$nombres = ucfirst(trim(strtolower($nombrec[1])));
	$nombres = explode(" ", $nombres);
	$final = '';
	$final .= $nombres[0];
	$final .= ' ';
	$final .= $apellidos[0];	
	return $final;
}

function formato_n($valor) {
	
	return (number_format($valor,0,',','.'));

}

function formato_s($valor) {
	
	return (number_format($valor,2,',','.'));

}

function rol_usuario($id_usuario, $conn)
{	
	$ssql = 'SELECT * FROM proy_usuario
			 WHERE id_usuario = '.$id_usuario.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[6];
}

/********************* SUMAS DE MATRICES *********************************************/

function suma_col($montos) {
	$j = 0;
	$total = 0;
	while ($j < (count($montos))) {
		$total = $total + $montos[$j];
		$j = $j + 1;
	}
	return $total;
}

function suma_fila_unica($montos) {
	$i = 0;
	$total = 0;
	while ($i < (count($montos))) {
		$total = $total + $montos[$i];
		$i = $i + 1;
	}
	return $total;
}

function suma_fila($montos, $fila) {
	$i = 0;
	$j = $fila;
	$total = 0;
	while ($i < (count($montos))) {
		$total = $total + $montos[$i][$j];
		$i = $i + 1;
	}
	return $total;
}

function suma($montos) {
	$total = 0;
	for ($i=0; $i<count($montos); $i++) {
		for ($j=0; $j<count($montos[$i]); $j++) {
			$total = $total + $montos[$i][$j]; }
		}
	return $total;
}
/********************* VALIDA ACCESOS A SECCIONES DEL SITIO ***************************/
function valida_acceso($id_user, $accion, $conn) {

//	echo $id_user.' - '.$accion;
	$ssql = 'SELECT COUNT(id_rol_permiso) FROM proy_rol_permiso p 
			 INNER JOIN proy_usuario u ON u.id_rol = p.id_rol 
			 WHERE u.id_usuario = '.$id_user.' AND p.id_permiso = '.$accion.'';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] == 1) {
		return 1; }
	else {
		return 0; }	
}

function valida_acceso2($id_user, $accion) {

	$ssql = 'SELECT COUNT(id_rol_permiso) FROM proy_rol_permiso p 
			 INNER JOIN proy_usuario u ON u.id_rol = p.id_rol 
			 WHERE u.id_usuario = '.$id_user.' AND p.id_permiso = '.$accion.'';
	$rs = mysql_query($ssql);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] == 1) {
		return 1; }
	else {
		return 0; }	
}

/********************* HAY FACTURA/DETALLE FACTURA? ***********************************/

function hay_factura($factura, $id_proveedor, $conn) {

	$ssql = 'SELECT COUNT(id_factura) FROM proy_factura p 
			 WHERE numero_factura = '.$factura.' AND id_proveedor = '.$id_proveedor.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function hay_factura_detalle($factura, $conn) {

	$ssql = 'SELECT COUNT(id_fact_docs) FROM proy_factura_docs 
			 WHERE id_fact = '.$factura.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function hay_rend_detalle($id_rend, $conn) {

	$ssql = 'SELECT COUNT(id_rend_det) FROM proy_rendicion_detalle
			 WHERE id_rend = '.$id_rend.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return 0; }
}

function hay_sueldo_cc_fecha($id_cc, $fecha, $conn) {

	$mes = substr($fecha, 5, 2);
	$agno = substr($fecha, 0, 4); 
	$ssql = 'SELECT COUNT(costo_empresa) FROM proy_sueldo
			 WHERE SUBSTRING(fecha, 7, 4) = '.$agno.' AND SUBSTRING(fecha, 4, 2) = '.$mes.'
			 AND id_cc = '.$id_cc.'';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function factura_finalizada($id_fact, $conn) {

	$ssql = 'SELECT finalizada FROM proy_factura 
			 WHERE id_factura = '.$id_fact.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] == 0) {
		return 0; }
	else {
		return 1; }
}

function rendicion_finalizada($id_rend, $conn) {

	$ssql = 'SELECT id_estado_rendicion FROM proy_rendicion 
			 WHERE id_rendicion = '.$id_rend.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] == 1) {
		return 0; }
	else {
		return 1; }
}

function rendicion_monto_solic($id_rend, $conn) {

	$ssql = 'SELECT monto_solicitado FROM proy_rendicion 
			 WHERE id_rendicion = '.$id_rend.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return $fila[0]; }
	else {
		return 0; }
}

function rendicion_estado_img($id_rend, $conn) {

	//Buscar el id de la ultima consolidacion que hay para esta rendicion
	$ssql = 'SELECT id_cons FROM proy_consolidar_detalle
					 WHERE id_rend = '.$id_rend.' ORDER BY id_cons DESC LIMIT 1';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila == NULL) {
		echo '<td><input type="checkbox" name="rendiciones[]" value="'.$id_rend.'"></td>';
	}
	else {	
		$id_cons = $fila[0];
		//Revisar el estado de la consolidacion, si es generada, la rendicion qda generada, si es confirmada se ve el estado de la rend
		$ssql2 = 'SELECT id_estado FROM proy_consolidar
						  WHERE id_consolidar = '.$id_cons.'';
		$rs2 = mysql_query($ssql2,$conn);
		$fila2 = mysql_fetch_row($rs2);
		mysql_free_result($rs2);	
		if ($fila2[0] == 1) {
			echo '<td><img src="../img/rend_generada.GIF" alt="Generada" width="15" height="15" border="0" /></td>';
		}
		else {
			$ssql3 = 'SELECT id_estado FROM proy_consolidar_detalle 
							 WHERE id_cons = '.$id_cons.' AND id_rend = '.$id_rend.';';
			$rs3 = mysql_query($ssql3,$conn);
			$fila3 = mysql_fetch_row($rs3);
			mysql_free_result($rs3);		
			if ($fila3[0] == 1) {
				echo '<td><img src="../img/rend_generada.GIF" title="Generada" width="15" height="15" border="0" /></td>';
			}
			else if ($fila3[0] == 2) {
				echo '<td><img src="../img/rend_ok.jpg" title="Confirmada" width="15" height="15" border="0" /></td>';
			}
			else if ($fila3[0] == 3) {
				echo '<td><input type="checkbox" name="rendiciones[]" value="'.$id_rend.'"></td>';
			}
		}
	}
	return;
}

function rendicion_estado_det_img($id_cons, $id_rend, $conn) {

	$ssql = 'SELECT id_estado FROM proy_consolidar_detalle 
			 		 WHERE id_rend = '.$id_rend.' AND id_cons = '.$id_cons.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
/*	if (count($fila) == 2) {
			echo '<td><img src="../img/rend_ok.jpg" alt="Confirmada" width="15" height="15" border="0" /></td>';
	}
	else if (count($fila) == 1){
*/		if ($fila[0] == 1) {
			echo '<td><img src="../img/rend_generada.GIF" title="Generada" width="15" height="15" border="0" /></td>';
		}
		else if ($fila[0] == 2) {
			echo '<td><img src="../img/rend_ok.jpg" title="Confirmada" width="15" height="15" border="0" /></td>';
		}
		else if ($fila[0] == 3) {
			echo '<td><img src="../img/rend_rechazada.GIF" title="Rechazada" width="15" height="15" border="0" /></td>';
		}
//	}
	return;
}

function consolidacion_estado($id_cons, $conn) {

	$ssql = 'SELECT id_estado FROM proy_consolidar 
			 		 WHERE id_consolidar = '.$id_cons.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function consolidacion_monto_conf($id_cons, $conn) {

	$ssql = ' SELECT SUM(monto_usado) FROM proy_rendicion r
						INNER JOIN proy_consolidar_detalle cd ON cd.id_rend = r.id_rendicion
						WHERE cd.id_estado = 2
						AND cd.id_cons = '.$id_cons.'';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function valor_rend_det($id_rend, $id_cat, $id_tipo, $conn) {

	$ssql = 'SELECT SUM(monto) FROM proy_rendicion_detalle
			 WHERE id_rend = '.$id_rend.' AND id_cat = '.$id_cat.' AND id_tipo = '.$id_tipo.';';
	$rs = mysql_query($ssql,$conn);
	if (!$rs) {
		return 0; }
	else {
		$fila = mysql_fetch_row($rs);
		mysql_free_result($rs);
		if ($fila[0] > 0) {
			return $fila[0]; }
		else {
			return 0; }
		}
}

function valor_rend_det_iva($id_rend, $id_cat, $id_tipo, $conn) {

	$ssql = 'SELECT SUM(monto_iva) FROM proy_rendicion_detalle
			 WHERE id_rend = '.$id_rend.' AND id_cat = '.$id_cat.' AND id_tipo = '.$id_tipo.';';
	$rs = mysql_query($ssql,$conn);
	if (!$rs) {
		return 0; }
	else {
		$fila = mysql_fetch_row($rs);
		mysql_free_result($rs);
		if ($fila[0] > 0) {
			return $fila[0]; }
		else {
			return 0; }
		}
}

function valor_total_rend($id_rend, $conn) {

	$ssql = 'SELECT (SUM(monto)+SUM(monto_iva)) FROM proy_rendicion_detalle
			 WHERE id_rend = '.$id_rend.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila[0];
}

function valor_cons_det($id_cons, $id_cat, $id_tipo, $conn, $id_cc = NULL) {

	$sql  = "SELECT rd.id_cat, rd.id_tipo, SUM(rd.monto), SUM(rd.monto_iva) ";
	$sql .= "FROM (proy_consolidar_detalle cd INNER JOIN proy_rendicion_detalle rd ON cd.id_rend = rd.id_rend) ";
	$sql .= "INNER JOIN proy_rendicion r ON cd.id_rend = r.id_rendicion ";
	$sql .= "WHERE cd.id_cons = {$id_cons} AND cd.id_estado = 2 AND rd.id_cat = {$id_cat} AND rd.id_tipo = {$id_tipo} ";
	if (!is_null($id_cc)) {
		$sql .= "AND r.id_cc = {$id_cc} "; }
	$sql .= "GROUP BY id_cat, id_tipo ";

	$rs = mysql_query($sql,$conn);
	if (!$rs) {
		return 0; }
	else {
		$fila = mysql_fetch_row($rs);
		mysql_free_result($rs);
		if ($fila[2] > 0) {
			return $fila[2]; }
		else {
			return 0; }
		}
}

function valor_cons_det_iva($id_cons, $id_cat, $id_tipo, $conn, $id_cc = NULL) {
			 
	$sql  = "SELECT rd.id_cat, rd.id_tipo, SUM(rd.monto_iva) ";
	$sql .= "FROM (proy_consolidar_detalle cd INNER JOIN proy_rendicion_detalle rd ON cd.id_rend = rd.id_rend) ";
	$sql .= "INNER JOIN proy_rendicion r ON cd.id_rend = r.id_rendicion ";
	$sql .= "WHERE cd.id_cons = {$id_cons} AND cd.id_estado = 2 AND rd.id_cat = {$id_cat} AND rd.id_tipo = {$id_tipo} ";
	if (!is_null($id_cc)) {
		$sql .= "AND r.id_cc = {$id_cc} "; }
	$sql .= "GROUP BY id_cat, id_tipo ";

	$rs = mysql_query($sql,$conn);
	if (!$rs) {
		return 0; }
	else {
		$fila = mysql_fetch_row($rs);
		mysql_free_result($rs);
		if ($fila[2] > 0) {
			return $fila[2]; }
		else {
			return 0; }
		}
}

function valor_total_cons($id_cons, $conn) {

	$ssql = 'SELECT SUM(rd.monto), SUM(rd.monto_iva)
					 FROM proy_consolidar_detalle cd INNER JOIN proy_rendicion_detalle rd ON cd.id_rend = rd.id_rend
					 WHERE cd.id_cons = '.$id_cons.' AND cd.id_estado = 2
					 GROUP BY id_cons;';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	$total = ($fila[0] + $fila[1]);
	if ($total == 0) {
		return 1; }
	else {
		return ($total); }
}

function hay_valor_det($id_rend, $id_cat, $id_tipo, $conn) {

	$ssql = 'SELECT count(id_rend) FROM proy_rendicion_detalle
			 WHERE id_rend = '.$id_rend.' AND id_cat = '.$id_cat.' AND id_tipo = '.$id_tipo.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return 0; }
}

function hay_nc($nc, $id_proveedor, $conn) {

	$ssql = 'SELECT COUNT(id_nc) FROM proy_nota_credito p 
			 WHERE n_nc = '.$nc.' AND id_proveedor = '.$id_proveedor.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function id_fact($fact, $id_proveedor, $conn = NULL) {

	$ssql = 'SELECT id_factura FROM proy_factura 
			 WHERE numero_factura = '.$fact.' AND id_proveedor = '.$id_proveedor.';';
	if (is_null($conn)) {
		$rs = mysql_query($ssql);
	} else {
		$rs = mysql_query($ssql,$conn);
	}
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return $fila[0]; }
	else {
		return 0; }
}

function id_fact_asoc($id_nc, $conn) {

	$ssql = 'SELECT id_fact_asoc FROM proy_nota_credito
			 WHERE id_nc = '.$id_nc.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return $fila[0]; }
	else {
		return 0; }
}

function id_nc($nc, $id_proveedor, $conn) {

	$ssql = 'SELECT id_nc FROM proy_nota_credito
			 WHERE n_nc = '.$nc.' AND id_proveedor = '.$id_proveedor.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return $fila[0]; }
	else {
		return 0; }
}

function info_rend($id_rend, $conn) {

	$ssql ='SELECT * FROM proy_rendicion p
					WHERE id_rendicion = '.$id_rend.'';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	return $fila;
}

function info_fact($id_fact) {

	$ssql ='SELECT * FROM proy_factura
					WHERE id_factura = '.$id_fact.'';
	$rs = mysql_query($ssql);
	$fila = mysql_fetch_array($rs);
	mysql_free_result($rs);
	return $fila;
}

function info_doc($id_doc, $tipo_doc) {

	if ($tipo_doc == 1) {
		$ssql = 'SELECT * FROM proy_factura WHERE id_factura = '.$id_doc.'';
	} elseif ($tipo_doc == 2) {
		$ssql = 'SELECT * FROM proy_nota_credito WHERE id_nc = '.$id_doc.'';	
	}
	$rs = mysql_query($ssql);
	$fila = mysql_fetch_array($rs);
	mysql_free_result($rs);
	return $fila;
}
/********************* HAY NOTAS DE CREDITO?******************************************/

function hay_NC_factura($id_factura, $conn) {

	$ssql = 'SELECT COUNT(id_nc) FROM proy_nota_credito WHERE id_fact_asoc = '.$id_factura.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function hay_NC_cc($id_cc, $conn) {

	$ssql = 'SELECT COUNT(id_nc) FROM proy_nota_credito WHERE id_cc = '.$id_cc.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function hay_NC_prov($id_prov, $conn) {

	$ssql = 'SELECT COUNT(id_nc) FROM proy_nota_credito WHERE id_proveedor = '.$id_prov.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function hay_NC_distribuidor_mes($id_proveedor, $mes, $conn) {

	$ssql = 'SELECT COUNT(id_nc) FROM proy_nota_credito
			 WHERE SUBSTRING(fecha_emision,4,2) = '.$mes.' 
			 AND id_proveedor = '.$id_proveedor.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function hay_NC_distribuidor_mes_agno($id_proveedor, $mes, $agno, $conn) {

	$ssql = 'SELECT COUNT(id_nc) FROM proy_nota_credito
			 WHERE SUBSTRING(fecha_emision,4,2) = '.$mes.' AND SUBSTRING(fecha_emision,7,4) = '.$agno.' 
			 AND id_proveedor = '.$id_proveedor.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function hay_NC_mes($mes, $conn) {

	$ssql = 'SELECT COUNT(id_nc) FROM proy_nota_credito 
			 WHERE SUBSTRING(fecha_emision,4,2) = '.$mes.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function hay_NC_mes_agno($mes, $agno, $conn) {

	$ssql = 'SELECT COUNT(id_nc) FROM proy_nota_credito 
			 WHERE SUBSTRING(fecha_emision,4,2) = '.$mes.' AND SUBSTRING(fecha_emision,7,4) = '.$agno.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function hay_NC_cc_mes($id_cc, $mes, $conn) {

	$ssql = 'SELECT COUNT(id_nc) FROM proy_nota_credito 
			 WHERE SUBSTRING(fecha_emision,4,2) = '.$mes.'
			 AND id_cc = '.$id_cc.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}

function hay_NC_cc_mes_agno($id_cc, $mes, $agno, $conn) {

	$ssql = 'SELECT COUNT(id_nc) FROM proy_nota_credito 
			 WHERE SUBSTRING(fecha_emision,4,2) = '.$mes.' AND SUBSTRING(fecha_emision,7,4) = '.$agno.'
			 AND id_cc = '.$id_cc.';';
	$rs = mysql_query($ssql,$conn);
	$fila = mysql_fetch_row($rs);
	mysql_free_result($rs);
	if ($fila[0] > 0) {
		return 1; }
	else {
		return $fila[0]; }
}
function suma_fechas($fecha,$ndias)     
{
      if (preg_match("/[0-9]{1,2}\/[0-9]{1,2}\/([0-9][0-9]){1,2}/",$fecha))
            
              list($dia,$mes,$año)=split("/", $fecha);
            
      if (preg_match("/[0-9]{1,2}-[0-9]{1,2}-([0-9][0-9]){1,2}/",$fecha))
            
              list($dia,$mes,$año)=split("-",$fecha);
        $nueva = mktime(0,0,0, $mes,$dia,$año) + $ndias * 24 * 60 * 60;
        $nuevafecha=date("d-m-Y",$nueva);
            
      return ($nuevafecha);  
}
?>