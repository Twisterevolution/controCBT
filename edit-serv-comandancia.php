
<?php
 include_once 'funciones/bd_conexion.php';
  include_once 'funciones/funciones.php';

  $idmodif = $_POST['id'];

      $sqlset = "SELECT * FROM set_servicio WHERE id = $idmodif";
      $resultadoset = $conn->query($sqlset);
      $datosset = $resultadoset->fetch_assoc();
      $fecha = date_create($datosset['fecha']);

       
    ?>



    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <form action="newComandancia.php" method="post" accept-charset="utf-8" name="setServicios" id="setServicios" class="">

          <!-- Modal Header -->
          <div class="modal-header text-center">

            <h3 class="modal-title" style="font-weight: bolder;"> Nuevo Servicio Extraordinario comandancia</h3>
          </div>        
                
          <!-- Modal body -->
          <div class="modal-body">
              <div class="row">              
                <div class="form-group col-md-3">
                  <label class="">Fecha :</label>
                  <input class="form-control" type="date" name="fecha" id="fecha" value="<?php echo $datosset['fecha']; ?>" required>
                </div>
                <div class="form-group col-md-2">
                  <label class="">Hora del Servicio:</label>
                  <input class="form-control" type="time" name="horasalida" id="horasalida"  value="<?php echo $datosset['hora']; ?>" required>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Motivo :</label>
                  <input class="form-control" name="motivo" id="motivo" value="<?php echo $datosset['motivo']; ?>" required>
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Direccion:</label>
                  <input class="form-control" type="text" name="direccion"  id="direccion" value="<?php echo $datosset['direccion']; ?>" required>
                </div>
              </div>  

              <div class="row principal">

                <div class="form-group col-md-3">
                  <label class="control-label">Autorizado Por:</label>
                  <input class="form-control" type="text" name="autoriza" id="autoriza" value="<?php echo $datosset['autorizado']; ?>" required>
                  <label class="control-label">Observaciones</label>
                  <textarea name="obs" id="obs" style="width: 194px; height: 231px;"><?php echo $datosset['observaciones']; ?></textarea>
                  <label><input type="checkbox" value="4" name="xconfirmar" <?php echo $datosset['estado']==4?"checked":""; ?>>Servicio X Confirmar</label>
                </div>

                <div class="form-group col-md-5 col-md-offset-1">
                  <h4><b>COMPAÑIAS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp UNIDADES</b></h4>

                  <div class="checkbox">
                    
                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania1" <?php echo $datosset['c1']==1?"checked":"" ?> >1Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b1"<?php echo $datosset['b1']==1?"checked":"" ?> >B1</label>
                     </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="q1"<?php echo $datosset['q1']==1?"checked":"" ?> >Q1</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="m1"<?php echo $datosset['m1']==1?"checked":"" ?> >M1</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania2"<?php echo $datosset['c2']==1?"checked":"" ?> >2Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b2"<?php echo $datosset['b2']==1?"checked":"" ?> >B2</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="h2"<?php echo $datosset['h2']==1?"checked":"" ?> >H2</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="hx2"<?php echo $datosset['hx2']==1?"checked":"" ?> >HX2</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania3" <?php echo $datosset['c3']==1?"checked":"" ?> >3Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b3" <?php echo $datosset['b3']==1?"checked":"" ?> >B3</label>
                     </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="r3" <?php echo $datosset['r3']==1?"checked":"" ?> >R3</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="rx3" <?php echo $datosset['rx3']==1?"checked":"" ?> >RX3</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania4" <?php echo $datosset['c4']==1?"checked":"" ?> >4Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b4" <?php echo $datosset['b4']==1?"checked":"" ?> >B4</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="bx4" <?php echo $datosset['bx4']==1?"checked":"" ?> >BX4</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="g4" <?php echo $datosset['g4']==1?"checked":"" ?> >G4</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania5" <?php echo $datosset['c5']==1?"checked":"" ?> >5Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b5" <?php echo $datosset['b5']==1?"checked":"" ?> >B5</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="r5" <?php echo $datosset['r5']==1?"checked":"" ?> >R5</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania6" <?php echo $datosset['c6']==1?"checked":"" ?> >6Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b6" <?php echo $datosset['b6']==1?"checked":"" ?> >B6</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="bx6" <?php echo $datosset['bx6']==1?"checked":"" ?> >BX6</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="ba6" <?php echo $datosset['ba6']==1?"checked":"" ?> >BA6</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania7" <?php echo $datosset['c7']==1?"checked":"" ?> >7Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b7" <?php echo $datosset['b7']==1?"checked":"" ?> >B7</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="bx7" <?php echo $datosset['bx7']==1?"checked":"" ?> >BX7</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="m7" <?php echo $datosset['m7']==1?"checked":"" ?> >M7</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania8" <?php echo $datosset['c8']==1?"checked":"" ?> >8Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b8" <?php echo $datosset['b8']==1?"checked":"" ?> >B8</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="s8" <?php echo $datosset['s8']==1?"checked":"" ?> >S8</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania9" <?php echo $datosset['c9']==1?"checked":"" ?> >9Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b9" <?php echo $datosset['b9']==1?"checked":"" ?> >B9</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania10" <?php echo $datosset['c10']==1?"checked":"" ?> >10Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b10" <?php echo $datosset['b10']==1?"checked":"" ?> >B10</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="bx10" <?php echo $datosset['bx10']==1?"checked":"" ?> >BX10</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania11" <?php echo $datosset['c11']==1?"checked":"" ?> >11Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b11" <?php echo $datosset['b11']==1?"checked":"" ?> >B11</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania12" <?php echo $datosset['c12']==1?"checked":"" ?> >12Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b12" <?php echo $datosset['b12']==1?"checked":"" ?> >B12</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania13" <?php echo $datosset['c13']==1?"checked":"" ?> >B.Forestal</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b13" <?php echo $datosset['b13']==1?"checked":"" ?> >B13</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="z13" <?php echo $datosset['z13']==1?"checked":"" ?> >Z13</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania14" <?php echo $datosset['c14']==1?"checked":"" ?> >B.Metrenco</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b14" <?php echo $datosset['b14']==1?"checked":"" ?> >B14</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-3">
                  <h4><b>U.Menores</b></h4>
                    <div class="checkbox">
                      <div class="row">
                        <div class="col-md-4">
                          <label><input type="checkbox" value="1" name="compania20" <?php echo $datosset['c20']==1?"checked":"" ?> ><b>Comandancia</b></label>
                          <div class="col-md-12 col-md-offset-1">
                            <label><input type="checkbox" value="1" name="k1" <?php echo $datosset['k1']==1?"checked":"" ?> >K1</label>
                            <label><input type="checkbox" value="1" name="k2" <?php echo $datosset['k2']==1?"checked":"" ?> >K2</label>
                            <label><input type="checkbox" value="1" name="k3" <?php echo $datosset['k3']==1?"checked":"" ?> >K3</label>
                            <label><input type="checkbox" value="1" name="k4" <?php echo $datosset['k4']==1?"checked":"" ?> >K4</label>
                            <label><input type="checkbox" value="1" name="lt1" <?php echo $datosset['lt1']==1?"checked":"" ?> >LT1</label>
                          </div>
                          <label><input type="checkbox" value="1" name="compania21" <?php echo $datosset['c21']==1?"checked":"" ?> ><b>S.Intendencia</b></label>
                            <div class="col-md-12 col-md-offset-1">
                            <label><input type="checkbox" value="1" name="j1" <?php echo $datosset['j1']==1?"checked":"" ?> >J1</label>
                            <label><input type="checkbox" value="1" name="j2" <?php echo $datosset['j2']==1?"checked":"" ?> >J2</label>
                            <label><input type="checkbox" value="1" name="j3" <?php echo $datosset['j3']==1?"checked":"" ?> >J3</label>
                          </div>
                        </div>

                      </div> 
                    </div>
                </div>

              </div>
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            
            <button type="submit" class="btn btn-primary" id="actualizar">Actualizar Datos Servicio</button>

            <input type="hidden" name="modificar" value="1" >
            <input type="hidden" name="idmodifica" value="<?php echo $idmodif ?>" >

          </div>

        </form>
    

<script>
  $("#setServicios").on("submit", function(e){
          e.preventDefault();          
          if ((!this.compania1.checked) && (!this.compania2.checked) && (!this.compania3.checked) && (!this.compania4.checked) && (!this.compania5.checked) && (!this.compania6.checked) && (!this.compania7.checked) && (!this.compania8.checked) && (!this.compania9.checked) && (!this.compania10.checked) && (!this.compania11.checked) && (!this.compania12.checked) && (!this.compania13.checked) && (!this.compania14.checked) && (!this.compania20.checked) && (!this.compania21.checked)){
            alert("El servicio debe tener a lo menos\n una Compañia seleccionada");
           
          }else{
          var datos = $(this).serializeArray();
          $.ajax({
            url: 'newComandancia.php',
            type: 'POST',
            data: datos,
            success: function(data){console.log(data);},
            error: function(req, err){ console.log('el error ese =' + err); }
          })

          setTimeout (function(){
            $("#setServicio").modal('hide');
            location.reload();
          },600);
          
          }

         
          
          

});

</script>

      </div>
    </div>