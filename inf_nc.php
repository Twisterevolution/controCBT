<?
include ("../seguridad.php");
include ("../funciones/funcion.php");
include ("../funciones/funcion_noconformidades.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script language="JavaScript" src ="../funciones/funcion_js.js"></script>
<title>Portal <?php echo TITULO_SITIO; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../estilo1.css">
<link rel="stylesheet" type="text/css" href="imp.css" media="print"> 
</head>
<?php $conn = conectarse(); ?>
<body>
<div id="contenedor">
<div id="cabecera">
	<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo TITULO_SITIO; ?></h1>
</div>
<? include ("../header.php"); ?>
<div id="cuerpo">
	<h2>Detalle No Conformidad </h2>
	<p>Las siguientes tablas detallan la informaci&oacute;n disponible para la no conformidad seleccionada.</p>
	<div id="detalle">
<?php
	//si es que no venía la variable o no existe la nc con ese id
	if (!isset($_GET['id_nc']) || !nc_hay($_GET['id_nc'])):
?>
		<p><strong>No se encontr&oacute; la No Conformidad solicitada.</strong></p>
<?php
	//si existe la nc con el id solicitado mostramos sus datos generales
	else:
		$datos_generales = nc_obtener($_GET['id_nc']);
		include ("tmpl.nc_general.php");
?>

<?php 
	//si es que es el usuario que creó la rendición y ésta sigue en estado informada
	//mostramos el formulario para editar la nc
	if ( ($_SESSION['id_user'] == $datos_generales['registraId'])
		&& ($datos_generales['estadoId'] == 1) ): 
?>
<form name="f_edit_general" action="editar_nc_datos_generales.php" method="post">
	<br>
	<input type="hidden" name="id_nc" value="<?php echo $_GET['id_nc']; ?>">
	<input type="submit" name="editar_nc" value="Editar Datos Generales">
</form>
<?php endif; //formulario editar datos generales ?>

<br class="salto_pag">
<?php 
	//si es que hay datos del proceso registrado los desplegamos
	if (nc_hay_proceso($_GET['id_nc'])) { 
		$datos_proceso = nc_proceso_obtener($_GET['id_nc']);
		include ("tmpl.nc_proceso.php");
	}
?>

<?php 
	//nc no tiene que estar cerrada

	//si el usuario tiene el permiso para editar todas, mostramos el formulario
	
	//por otra parte, si todavía no se registra el proceso
	//y el usuario es el encargado del proceso, mostramos el formulario
	$datos_param_proceso = param_proceso_obtener($datos_generales['procesoId']);
	if ( ($datos_generales['estadoId'] != 3) &&
		( valida_acceso($_SESSION["id_user"], 58, $conn) 
			|| (($datos_param_proceso['responsableId'] == $_SESSION["id_user"]) && !nc_hay_proceso($_GET['id_nc'])) )
		):
?>
<form name="f_edit_proceso" action="editar_nc_proceso.php" method="post">
	<br>
	<input type="hidden" name="id_nc" value="<?php echo $_GET['id_nc']; ?>">
	<input type="submit" value="Agregar Acciones (An&aacute;lisis de Causa)">
</form>
<?php endif; //formulario editar proceso ?>

<br class="salto_pag">
<?php 
	//si es que hay datos de auditorías las desplegamos
	if (nc_hay_auditorias($_GET['id_nc'])) { 
		$datos_auditorias = nc_auditorias_obtener($_GET['id_nc']);
		include ("tmpl.nc_auditorias.php");
	}
?>

<?php 
	//si es que el usuario tiene permiso para agregar auditorías
	//y la nc no está cerrada mostramos el formulario para agregar una auditoría
	if ( valida_acceso($_SESSION["id_user"], 55, $conn) 
		&& ($datos_generales['estadoId'] != 3) ):
?>
<form name="f_add_auditoria" action="agregar_auditoria.php" method="post">
	<br>
	<input type="hidden" name="id_nc" value="<?php echo $_GET['id_nc']; ?>">
	<input type="submit" value="Agregar Revisi&oacute;n o Seguimiento">
</form>
<?php endif; //formulario agregar auditoría ?>

<?php 
	//si es que el usuario tiene permiso para cerrar nc
	//y ésta se encuentra en proceso mostramos el formulario para cerrar una nc
	if ( valida_acceso($_SESSION["id_user"], 57, $conn) 
		&& ($datos_generales['estadoId'] == 2) ):
?>
<form name="f_cerrar" action="cerrar_nc.php" method="post">
	<br>
	<input type="hidden" name="id_nc" value="<?php echo $_GET['id_nc']; ?>">
	<input type="submit" value="Cerrar No Conformidad">
</form>
<?php endif; //formulario cerrar ?>

<?php endif; //parámetros correctos (inicio) ?>
	</div>
</div>
<div id="lateral">
<?php include ("sidebar.php"); ?>
</div>
<div id="pie">
Copyright &copy; Proyectos Espex 2007. Dise&ntilde;ado por GEAA.
</div>
</div>
</body>
</html>