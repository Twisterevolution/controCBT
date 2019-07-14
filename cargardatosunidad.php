<?php 
  //echo '<pre>';
  //var_dump($_GET);
  //echo '</pre>';

  include_once 'funciones/bd_conexion.php';
  include_once 'funciones/funciones.php';


    $sql5 = "SELECT * FROM unidades_servicios WHERE id_unidad_servicio = '".$_POST['id']."'";
    $resultado5 = $conn->query($sql5);
    
    if($resultado5->num_rows > 0){
        while ($datos= $resultado5->fetch_array()) { 
        //echo '<pre>';
        //var_dump($datos);
        //echo '</pre>';

        
        echo'<div class="row">';
        echo'  <div class="col-md-4">';
        echo'    <label class="">Unidad:</label>';
        echo'    <input disabled class="form-control" type="text" name="unidad" value="'.$datos['us_unidad'].'">';
        echo'    <input class="form-control" type="hidden" name="unidadx" id="unidadxxx" value="'.$datos['us_unidad'].'">';
        echo'    </div>';
        echo'    <div class="col-md-4">';                    
        echo'      <label class="">Fecha Salida :</label>';
        echo'      <input disabled  class="form-control" type="text" name="fecha" value="'.$datos['us_fecha'].'">';
        echo'    </div>';
        echo'    <div class="col-md-4">';
        echo'      <label class="">Autorizado Por :</label>';
        echo'      <input disabled class="form-control" type="text" name="autoriza" value="'.$datos['us_autorizado'].'">';
        echo'    </div>';
        echo'  </div> ';
        echo'  <div class="row"> ';                 
        echo'          <div class="col-md-4">';
        echo'            <label for="message-text" class="control-label">Conductor:</label>';
        echo'            <input disabled type="text" name="conductor" class="form-control" value="'.$datos['us_conductor'].'">';
        echo'          </div>';

        echo'          <div class="col-md-4">';
        echo'            <label for="message-text" class="control-label">Obac:</label>';
        echo'            <input disabled type="text" name="obac" class="form-control" value="'.$datos['us_obac'].'">';
        echo'          </div>';
        echo'          <div class="col-md-4">';
        echo'            <label for="message-text" class="control-label">NºBomberos:</label>';
        echo'            <input disabled type="text" name="tbomberos" class="form-control" value="'.$datos['us_nbomberos'].'">';
        echo'          </div>';       
        echo'      </div>';
        echo'      <div class="row">';
        echo'          <div class="col-md-6">';
        echo'            <label class="control-label">Km Salida</label>';
        echo'            <input id="kms" disabled="disable" type="text" name="kmsalida" class="form-control" value="'.$datos['us_kmsalida'].'">';
        echo'          </div>';
        echo'           <div class="col-md-6">';
        echo'            <label class="control-label">Km llegada</label>';
        echo'            <input id="kmll" type="text" name="kmllegada" class="form-control" required>';
        echo'          </div>';
        echo'           <div class="col-md-6">';
        echo'            <label class="control-label">Horometro Salida</label>';
        echo'            <input id="hrsa" disabled="disable" type="text" name="horosalida" class="form-control"value="'.$datos['us_horometrosalida'].'">';
        echo'          </div>';
        echo'           <div class="col-md-6">';
        echo'            <label class="control-label">Horometro llegada</label>';
        echo'            <input id="hrll" type="numbre" min="'.$datos['us_horometrosalida'].'"name="horollegada" class="form-control">';
        echo'          </div>';
        echo'           <div class="col-md-6">';
        echo'            <label class="control-label">Hora de Salida</label>';
        echo'            <input id="horas" disabled="disable" type="text" name="horasalida" class="form-control" value="'.$datos['us_horasalida'].'">';
        echo'          </div>';
        echo'           <div class="col-md-6">';
        echo'            <label class="control-label">Hora de llegada</label>';
        echo'            <input id="horall"type="time" name="horallegada" class="form-control" required>';
        echo'          </div>';
        echo'          <div class="col-md-12">';
        echo'            <label class="control-label">Novedades</label>';
        echo'            <textarea type="text" name="novedad" class="form-control"></textarea>';
        echo'            <input class="loadfolio" type="hidden" name="idunidadx" id="'.$datos['id_servicio_aso'].'">';
        echo'            <input id="'.$datos['id_servicio_aso'].'"type="hidden" name="idunidad" value="'.$_POST['id'].'">';
        echo'          </div>';
        echo'      </div>';





              
           };

    };


?>