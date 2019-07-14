
<?php 
//$sql6 = "SELECT * FROM unidades_servicios WHERE id_servicio_aso = '".$_GET['id']."'";
  //  $resultado6 = $conn->query($sql6);
 ?>



  


<!--........ver todos los datos de un 6-13-------------------->


<div class="modal fade" id="verTodo" role="dialog">

</div>
  

<!--........Agregar carros a un servicio---------------------->
<div class="modal fade" id="agregarunidad" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        
        <form action="agregar-carro-servicio.php" method="post" accept-charset="utf-8" role="form" name="agregarcarro" id="agregarcarro" class="ingresa form-horizontal">
             
        <!-- Modal Header -->
          <div class="modal-header text-center">
            <h3 class="modal-title" style="font-weight: bolder;">Agregar Unidad</h3>
            <h3  class="folio modal-title" style= "color: red; font-weight: bold; font-size: 20px;"></h3>
            <h6 class="modal-title" id="datosDelServicio"></h6>
            
            <?php
            $sqlx = "SELECT * FROM servicios ";
            $resultadox = $conn->query($sqlx);
            $sieldato = $resultadox->fetch_assoc();

            $sql = "SELECT * FROM unidades WHERE ocupado = 0 ORDER BY compañia asc, idunidad asc;";
            $resultado3 = $conn->query($sql);
            $resultado2 = $conn->query($sql);
            ?>

          </div>
       
          
            <div class="modal-body" style="margin-top: 5px;">
              <div class="row">
              <div class="row form-inline">
                <div class="form-group">
                  <label class="control-label col-md-3">Unidad:</label>
                  <div class="col-md-3">
                  <select class="form-control input-sm" name="unidad" id="unidad" style="margin-bottom: 15px;">  
                    <option value="0" selected>selecciona una unidad</option>                
                            <?php 
                                  while ($unidad = $resultado3->fetch_array()) { ?> 
                                  <option value="<?php echo $unidad["nombre_unidad"];?>"><?php echo $unidad["nombre_unidad"];?></option>       
                                       
                          <?php  
                            }
                          ?>  
                          </select>
                  </div>
                
                                     
                    <label class="control-label col-md-3">Fecha Salida :</label>
                    <div class="col-md-3">
                      <input class="form-control input-sm" type="date" name="fecha" id="fecha" required="" style="margin-bottom: 15px;">
                    </div>
                  </div>
                </div>
                </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Hora de Salida :</label>
                    <div class="col-sm-7">
                      <input class="form-control input-sm" type="time" name="horasalida" id="horasalida" value="" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Autorizado Por :</label>
                    <div class="col-sm-7">
                      <input class="form-control input-sm" type="text" name="autoriza" id="autoriza" required="" autocomplete="off">
                    </div>
                  </div>
                          
                  <div class="form-group">
                    <label for="message-text" class="control-label col-sm-3">Conductor:</label>
                    <div class="col-sm-7">
                    <input type="text" name="conductor" class="form-control input-sm" id="conductor" required="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="control-label col-sm-3">OBAC:</label>
                    <div class="col-sm-7">
                      <input type="text" name="obac" class="form-control input-sm" id="obac" required="">
                    </div>
                  </div>
                        
                  <div class="form-group">
                    <label for="message-text" class="control-label col-sm-3">NºBomberos:</label>
                    <div class="col-sm-7">
                     <input type="text" name="nbomberos" class="form-control input-sm" id="nbomberos" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Kilometraje de Salida</label>
                    <div class="col-sm-7">
                      <input type="text" name="kmsalida" class="form-control input-sm" id="kmsalida" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Horometro Salida</label>
                    <div class="col-sm-7">
                      <input type="text" name="hrosalida" class="form-control input-sm" id="hrosalida" required="">
                    </div>
                  </div>
            </div>


          <!-- Modal footer -->
          <div class="modal-footer">

            <input type="hidden" name="motivo">
            <input type="hidden" name="direccion">
            
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <input type="hidden" name="nuevoserv" value="1" />
            <input type="hidden" name="servicioasociado" class="servicioasociado" id="eldato" value="">
            <button type="submit" class="btn btn-primary" >Agregar Carro a 6-13</button>
          
          </div>

       </form>
      </div>
    </div>
</div>



<!--........Nuevo 6-13---------------------------------------->
  <div class="modal fade" id="nuevoServicio" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <form action="nuevosservicios.php" method="post" accept-charset="utf-8" role="form" name="nuevosservicios" id="nuevosservicios" class="ingresa">

          <!-- Modal Header -->
          <div class="modal-header text-center">
            <h2 class="modal-title" style="font-weight: bolder;">Nuevo 6-13</h2>
          </div>        
                
          <!-- Modal body -->
            <div class="modal-body">
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="control-label">Motivo :</label>
                  <input class="form-control" name="motivo2" id="motivo2" required>
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Direccion:</label>
                  <input class="form-control" type="text" name="direccion2"  id="direccion2" required>
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Autorizado Por:</label>
                  <input class="form-control" type="text" name="autoriza2" id="autoriza2" required>
                </div>
              </div>  
         
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Unidad:</label>
                      <select class="form-control" name="unidad2" id="unidad2">                  
                      <?php 
                        while ($row = $resultado2->fetch_array()) { ?>        
                        <option id="carro" value="<?php echo $row["nombre_unidad"];?>"><?php echo $row["nombre_unidad"];?></option>
                      <?php  
                        }
                      ?>  
                      </select>    
                    </div>
                </div>

                <div class="form-group col-md-4">
                  <label for="message-text" class="control-label">Kilometraje Salida</label>
                  <input type="text" name="kmsalida2" class="form-control" id="kmsalida2">
                </div>

                <div class="form-group col-md-4">
                  <label for="message-text" class="control-label">Horometro Salida</label>
                  <input type="text" name="hrosalida2" class="form-control" id="hrosalida2">
                </div>
              </div> 

              <div class="row">
                <div class="form-group col-md-4">
                  <label for="message-text" class="control-label">Conductor:</label>
                  <input type="text" name="conductor2" class="form-control" id="conductor2" required>
                </div>

                <div class="form-group col-md-4">
                  <label for="message-text" class="control-label">Obac:</label>
                  <input type="text" name="obac2" class="form-control" id="obac2">
                </div>
                  
                <div class="form-group col-md-4">
                  <label for="message-text" class="control-label">NºBomberos</label>
                  <input type="number" name="nbomberos2" class="form-control" id="nbomberos2" required>
                </div>
              </div>
                
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="">Fecha :</label>
                  <input class="form-control" type="date" name="fecha2" id="fecha2" required>
                </div>
                <div class="form-group col-md-6">
                  <label class="">Hora de Salida :</label>
                  <input class="form-control" type="time" name="horasalida2" id="horasalida2" required>
                </div>
              </div> 
            </div> 

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <input type="hidden" name="nuevoserv" value="1" />
            <button type="submit" class="btn btn-primary" id="actualizar">Guardar Nuevo 6-13</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- .......Editar datos carro-------------------------------->
<div class="modal fade" id="completarDatosCarro">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="actualizar-datos-carro.php" method="post" accept-charset="utf-8" name="actulizardatoscarro" id="actulizardatoscarro" class="">
        <!-- Modal Header -->
        <div class="modal-header text-center">
          <h2 class="modal-title" style="font-weight: bolder;">Agregar Datos de LLegada</h2>
          <h3  id="folio" class="folio" style= "color: red; font-weight: bold; font-size: 20px;"></h3>
        </div>
        
        <div class="modal-body" id="datocarro" style="margin-top: 5px;">



        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          
          <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#verTodo">Cancelar</button>
          <button id="activo" type="submit" class="btn btn-primary">guardar Datos</button>

          <input id="actualizarte" type="hidden" name="actualizardatosdeuncarro" value="actualizar">
      

     
         
        </div>
      </form>
    </div>
   
  </div>
</div>



<!-- .......confirma ingreso a SGAS-------------------------------->

<div class="modal fade" id="ingresosgas">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      <form action="sgas-actualiza-dato.php" method="post" accept-charset="utf-8" name="sgas" id="sgas" class="">
        <!-- Modal Header -->
        <div class="modal-header text-center">
          <h2 class="modal-title" style="font-weight: bolder;">Ingresado y Finalizado en SGAS por:</h2>
        </div>
        
        <div class="modal-body" id="sgasOpSelect">

          


        </div>


        <!-- Modal footer -->
        <div class="modal-footer">
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>

          <button id="activos" type="submit" class="btn btn-primary">Guardar y Confirmar ingreso</button>

        
      
        
     
         
        </div>
      </form>
    </div>
   
  </div>
</div>

<!-- .......Setear nuevo servicio-------------------------------->

<div class="modal fade" id="setServicio" role="dialog">
    
</div>

<!----------ver Estado de un servicio de comandancia------->

<div class="modal fade" id="cambioEstado" role="dialog">
 
</div>

<!----------modal cambio de estado servicio de comandancia------->

<div class="modal fade" id="estadoServicio" role="dialog">

 </div>



