





    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <form action="newComandancia.php" method="post" accept-charset="utf-8" name="newServiciosxx" id="newServiciosxx" class="">

          <!-- Modal Header --> 
          <div class="modal-header text-center">

            <h3 class="modal-title" style="font-weight: bolder;"> Nuevo Servicio Extraordinario comandancia</h3>
          </div>        
                
          <!-- Modal body -->
          <div class="modal-body">
              <div class="row">              
                <div class="form-group col-md-3">
                  <label class="">Fecha :</label>
                  <input class="form-control" type="date" name="fecha" id="fecha" required>
                </div>
                <div class="form-group col-md-2">
                  <label class="">Hora del Servicio:</label>
                  <input class="form-control" type="time" name="horasalida" id="horasalida" required>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Motivo :</label>
                  <input class="form-control" name="motivo" id="motivo" required>
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Direccion:</label>
                  <input class="form-control" type="text" name="direccion"  id="direccion" required>
                </div>
              </div>  

              <div class="row principal">

                <div class="form-group col-md-3">
                  <label class="control-label">Autorizado Por:</label>
                  <input class="form-control" type="text" name="autoriza" id="autoriza" required>
                  <label class="control-label">Observaciones</label>
                  <textarea name="obs" id="obs" style="width: 194px; height: 188px;"></textarea>
                  <label><input type="checkbox" value="4" name="xconfirmar">Servicio X Confirmar</label>
                </div>

                <div class="form-group col-md-5 col-md-offset-1">
                  <h4><b>COMPAÑIAS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp UNIDADES</b></h4>

                  <div class="checkbox">
                    
                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania1">1Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b1">B1</label>
                     </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="q1">Q1</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="m1">M1</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania2">2Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b2">B2</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="h2">H2</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="hx2">HX2</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania3">3Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b3">B3</label>
                     </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="r3">R3</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="rx3">RX3</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania4">4Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b4">B4</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="bx4">BX4</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="g4">G4</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania5">5Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b5">B5</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="r5">R5</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania6">6Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b6">B6</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="bx6">BX6</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="ba6">BA6</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania7">7Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b7">B7</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="bx7">BX7</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="m7">M7</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania8">8Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b8">B8</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="s8">S8</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania9">9Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b9">B9</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania10">10Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b10">B10</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="bx10">BX10</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania11">11Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b11">B11</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania12">12Compañía</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b12">B12</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania13">B.Forestal</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b13">B13</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="z13">Z13</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label><input type="checkbox" value="1" name="compania14">B.Metrenco</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" value="1" name="b14">B14</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-3">
                  <h4><b>U.Menores</b></h4>
                    <div class="checkbox">
                      <div class="row">
                        <div class="col-md-4">
                          <label><input type="checkbox" value="1" name="compania20"><b>Comandancia</b></label>
                          <div class="col-md-12 col-md-offset-1">
                            <label><input type="checkbox" value="1" name="k1">K1</label>
                            <label><input type="checkbox" value="1" name="k2">K2</label>
                            <label><input type="checkbox" value="1" name="k3">K3</label>
                            <label><input type="checkbox" value="1" name="k4">K4</label>
                            <label><input type="checkbox" value="1" name="lt1">LT1</label>
                          </div>
                          <label><input type="checkbox" value="1" name="compania21"><b>S.Intendencia</b></label>
                            <div class="col-md-12 col-md-offset-1">
                            <label><input type="checkbox" value="1" name="j1">J1</label>
                            <label><input type="checkbox" value="1" name="j2">J2</label>
                            <label><input type="checkbox" value="1" name="j3">J3</label>
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
            
            <button type="submit" class="btn btn-primary" id="submitNuevoServicio">Guardar Nuevo 6-13</button>

            <input type="hidden" name="modificar" value="0" >
            <input type="hidden" name="idmodifica" value="0" >
          </div>

        </form>
    

<script>
  
$("#newServiciosxx").on("submit", function(e){
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
