
<?php
 include_once 'funciones/bd_conexion.php';
  include_once 'funciones/funciones.php';
  $idver = $_POST['id'];

      $sqlset = "SELECT * FROM set_servicio WHERE id = $idver";
      $resultadoset = $conn->query($sqlset);
      $datosset = $resultadoset->fetch_assoc();
      $fecha = date_create($datosset['fecha']);
    ?>


<div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;"><b>DATOS DEL SERVICIO</b></h4>
        </div>
        <div class="modal-body">

          <div class="row">

            <div class="form-group">

              <div class="col-md-4">
                <label>Fecha : </label>
                <input type="text" name="" value="<?php echo date_format($fecha, 'd/m/Y'); ?>" disabled>
              </div> 

              <div class="col-md-4">
                <label>Autorizado por : </label>
                <input type="text" name="" value="<?php echo $datosset['autorizado']; ?>" disabled>
              </div>

              <div class="col-md-4">
                <label>Asignado por : </label>
                <input type="text" name="" value="<?php echo $datosset['asignado']; ?>" disabled>
              </div>

            </div>
            <div class="form-group">
              
              <div class="col-md-4">
                <label>Motivo :</label>
                <input type="text" name="" value="<?php echo $datosset['motivo']; ?>" disabled>
              </div>

              <div class="col-md-8">
                <label>Lugar/Direccion :</label>
              
              
                <input type="text" name="" value="<?php echo $datosset['direccion']; ?>" disabled style="width: 374px;">
              </div>
            </div>
             
              <div align="center" class="col-md-12">
                <label>Observaciones :</label>
              </div>
              <div class="col-md-12">
                <textarea disabled style="margin: 0px; width: 574px; height: 74px;"><?php echo $datosset['observaciones']; ?></textarea>
              </div>
            
            <div class="col-md-12" style="padding: 10px;">
                <h5 style="text-align: left;">Compañia Asignada--------</h5>


                <?php 

                  if ($datosset['c1']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">1Cia</span>';
                  }
                  if ($datosset['c2']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">2Cia</span>';
                  }
                  if ($datosset['c3']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">3Cia</span>';
                  }
                  if ($datosset['c4']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">4Cia</span>';
                  }
                  if ($datosset['c5']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">5Cia</span>';
                  }
                  if ($datosset['c6']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">6Cia</span>';
                  }
                  if ($datosset['c7']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">7Cia</span>';
                  }
                  if ($datosset['c8']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">8Cia</span>';
                  }
                  if ($datosset['c9']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">9Cia</span>';
                  }
                  if ($datosset['c10']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">10Cia</span>';
                  }
                  if ($datosset['c11']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">11Cia</span>';
                  }
                  if ($datosset['c12']==1){
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">12Cia</span>';
                  }
                  if ($datosset['c13']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B.Forestal</span>';
                  }
                  if ($datosset['c14']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B.Metrenco</span>';
                  }
                  if ($datosset['c20']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">Comand.</span>';
                  }
                  if ($datosset['c21']==1) {
                    echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">SuperInt.</span>';
                  }
               
                 ?>
              </div>
              <div class="col-md-12" style="padding: 10px;">
                
              
              <h5 style="text-align: left;">Unidad Asignada---------</h5>

              <?php  
              if ($datosset['b1']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B1</span>';}
              if ($datosset['q1']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">Q1</span>';}
              if ($datosset['m1']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">M1</span>';}
              if ($datosset['b2']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B2</span>';}
              if ($datosset['h2']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">H2</span>';}
              if ($datosset['hx2']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">HX2</span>';}
              if ($datosset['b3']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B3</span>';}
              if ($datosset['r3']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">R3</span>';}
              if ($datosset['rx3']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">RX3</span>';}
              if ($datosset['b4']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B4</span>';}
              if ($datosset['bx4']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">BX4</span>';}
              if ($datosset['g4']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">G4</span>';}
              if ($datosset['b5']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B5</span>';}
              if ($datosset['r5']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">R5</span>';}
              if ($datosset['b6']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B6</span>';}
              if ($datosset['bx6']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">BX6</span>';}
              if ($datosset['ba6']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">BA6</span>';}
              if ($datosset['b7']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B7</span>';}
              if ($datosset['bx7']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">BX7</span>';}
              if ($datosset['m7']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">M7</span>';}
              if ($datosset['b8']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B8</span>';}
              if ($datosset['s8']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">S8</span>';}
              if ($datosset['b9']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B9</span>';}
              if ($datosset['b10']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B10</span>';}
              if ($datosset['bx10']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">BX10</span>';}
              if ($datosset['b11']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B11</span>';}
              if ($datosset['b12']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B12</span>';}
              if ($datosset['b13']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B13</span>';}
              if ($datosset['z13']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">Z13</span>';}
              if ($datosset['b14']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">B14</span>';}
              if ($datosset['k1']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">K1</span>';}
              if ($datosset['k2']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">K2</span>';}
              if ($datosset['k3']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">K3</span>';}
              if ($datosset['k4']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">K4</span>';}
              if ($datosset['lt1']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">LT1</span>';}
              if ($datosset['j1']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">J1</span>';}
              if ($datosset['j2']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">J2</span>';}
              if ($datosset['j3']==1) {echo '<span class="label label-info" style="margin-left: 10px; font-size: 18px">J3</span>';}              
                ?>
              </div>

              <div class="col-md-12">
                <h4 style="text-align: center;"><b>-----ESTADO ACTUAL-----</b></h4>
                <h2 style="text-align: center;"><span class="label label-warning"><?php echo ($datosset['estado']==0?"PENDIENTE":"EN CURSO") ?></span></h2> 
              </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>