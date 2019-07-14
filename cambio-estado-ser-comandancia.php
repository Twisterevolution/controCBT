<?php 
include_once 'funciones/bd_conexion.php';
include_once 'funciones/funciones.php';

$id=$_POST['id'];

$sqlset = "SELECT * FROM set_servicio WHERE id = $id";
      $resultadoset = $conn->query($sqlset);
      $datosset = $resultadoset->fetch_assoc();
      $fecha = date_create($datosset['fecha']);

 ?>

 <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;"><b>DATOS DEL SERVICIO</b></h4>
        </div>
        <div class="modal-body">

          <div class="row">

            <div class="form-group">

              <div class="col-md-3">
                <label>Fecha : </label>
                <input type="text" name="" value="<?php echo date_format($fecha, 'd/m/Y'); ?>" disabled>
              </div> 

              <div class="col-md-3">
                <label>Hora : </label>

                <div class="col-md-12">
                 <input type="time" name="" value="<?php echo $datosset['hora'] ?>" disabled> 
                </div>
                
              </div> 

              <div class="col-md-3">
                <label>Autorizado por : </label>
                <input type="text" name="" value="<?php echo $datosset['autorizado']; ?>" disabled>
              </div>

              <div class="col-md-3">
                <label>Asignado por : </label>
                <input type="text" name="" value="<?php echo $datosset['asignado']; ?>" disabled>
              </div>

              

            </div>

            <div class="form-group">
              <div class="col-md-4">
                <label>Motivo :</label>
                <textarea type="text" name="" value="" disabled style="margin: 0px; width: 230px; height: 74px;"><?php echo $datosset['motivo']; ?></textarea>
              </div>
              <div class="col-md-4">
                <label>Lugar/Direccion :</label>
                <textarea type="text" name="" value="" disabled style="margin: 0px; width: 230px; height: 74px;"><?php echo $datosset['direccion']; ?></textarea>
              </div>
              <div class="col-md-4">
              <label>Observaciones :</label>
              
                <textarea disabled style="margin: 0px; width: 230px; height: 74px;"><?php echo $datosset['observaciones']; ?></textarea>
              </div>
            </div>
             
              
            
            <div class="col-md-4" style="padding: 10px; text-align: center;">
                <h5 style="text-align: center;">Compañia Asignada</h5>


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

               <div class="col-md-4">
                <h5 style="text-align: center;"><b>-----ESTADO ACTUAL-----</b></h5>
                <h4 style="text-align: center;"><span class="label label-warning"><?php 
                        switch ($datosset['estado']) {
                          case 0:
                            echo "Coordinado";
                            break;
                          case 1:
                            echo "Realizado";
                            break;
                          case 2:
                            echo "No Realizado";
                            break;
                          case 3:
                            echo "Suspendido";
                            break;
                          case 4:
                            echo "X Confirmar";
                            break;
                          default:
                            // code...
                            break;
                        }

                       ?></span></h4> 
              </div>

              <div class="col-md-4" style="padding: 10px; text-align: center;">
                
              
              <h5 style="text-align: center;">Unidad Asignada</h5>

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


             
              <div class="col-md-12" align="center">
                <h4 style="text-align: center;"><b>-----SELECCIONE EL NUEVO ESTADO DEL SERVICIO-----</b></h4>
                <botton class="btn btn-success" data-toggle="tooltip" title="El Servicio fue realziado" value="1" onclick="realizado1(1)">REALIZADO</botton>
                <botton class="btn btn-danger" data-toggle="tooltip" title="No se reportó hacia la central ninguna salida a este servicio" value="2" onclick="noRealizado2(2)">NO REALIZADO</botton> 
                <botton class="btn btn-warning" data-toggle="tooltip" title="Se recibió aviso que el servicio se suspendía y seria re agendado" value="3" onclick="suspendido3(3)">SUSPENDIDO</botton> 
                <botton class="btn btn-info" data-toggle="tooltip" title="Se solicito a compañia que lo coordine y avise a comandancia" value="3" onclick="porConfirmar4(4)">POR CONFIRMAR</botton>
                
              </div>

              <div class="col-md-12" align="center">
                <label>Informacion Adicional del cierre del servicio</label>
              </div>

              <div class="col-md-12" align="center">
                <textarea name="infocentral" style="margin: 0px; width: 445px; height: 53px;">.</textarea>
              </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-center" data-dismiss="modal">Cancelar</button>
          <input type="hidden" name="ids" value="<?php echo $id ?>">
        </div>
      </div>
    </div>
    <script>
    	function realizado1(valor) { 
    		var obser= $("textarea[name=infocentral]").val();
    		var ids=$("input[name=ids]").val();  			
    		$.ajax({
    			type: "POST",
    			url: "cambio-estado-guardar.php",
    			data:  {"estado" : valor, "obsCentral": obser, "id":ids},
    			success: function(data)             
           			{   

           			}
    			
				});
      setTimeout(function(){
       $("#estadoServicio").modal('hide');
      location.reload(); 
    },400);
    	      	
    	}

    	function noRealizado2(valor) {
    		var obser= $("textarea[name=infocentral]").val();
    		var ids=$("input[name=ids]").val();  			
    		$.ajax({
    			type: "POST",
    			url: "cambio-estado-guardar.php",
    			data:  {"estado" : valor, "obsCentral": obser, "id":ids},
    			success: function(data)             
           			{   
           				
           			}
    			
				});
    	setTimeout(function(){
       $("#estadoServicio").modal('hide');
      location.reload(); 
    },400);      	
    	}

    	function suspendido3(valor) {
    		var obser= $("textarea[name=infocentral]").val();
    		var ids=$("input[name=ids]").val();  			
    		$.ajax({
    			type: "POST",
    			url: "cambio-estado-guardar.php",
    			data:  {"estado" : valor, "obsCentral": obser, "id":ids},
    			success: function(data)             
           			{   
           				
           			}
    			
				});
    	setTimeout(function(){
       $("#estadoServicio").modal('hide');
      location.reload(); 
    },400);      	
    	}

      function porConfirmar4(valor) {
        var obser= $("textarea[name=infocentral]").val();
        var ids=$("input[name=ids]").val();       
        $.ajax({
          type: "POST",
          url: "cambio-estado-guardar.php",
          data:  {"estado" : valor, "obsCentral": obser, "id":ids},
          success: function(data)             
                {   
                  
                }
          
        });
      setTimeout(function(){
       $("#estadoServicio").modal('hide');
      location.reload(); 
    },400);       
      }


    </script>