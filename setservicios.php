

      <?php 
        include_once 'funciones/bd_conexion.php';
        include_once 'templates/head.php';
        include_once 'templates/header.php';
        include_once 'templates/asidebar.php';
        include_once 'funciones/funciones.php';

        $mostrar="";
        if ($_SESSION['permiso']!=2) {

              $mostrar = "WHERE estado = 0"; 
               
             } else{
              $mostrar = "";
             }



        $sql = "SELECT * FROM set_servicio $mostrar";
        $resultado = $conn->query($sql);
        $resultado2 = $conn->query($sql);

      ?>  

       <?php 
                        if ($_SESSION['permiso']==4) {
                          $ver="none";
                        }else {
                          $ver="inline";
                        }

                         ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id=""> <!-- al id recargar -->
      <!-- Content Header (Page header) -->
      <section class="content-header">

        <div class="container" id="">
          <div class="col-md-3">
            <button type="button" class="btn btn-success" onclick="crearserviciocomandancia()" style="display: <?php echo $ver; ?>">Cargar Nuevo Servicio&nbsp<i class="fa fa-plus"></i></button>
          </div>
          <div class="col-md-8">
            <h2 class="titulolibro613" align=""><b>PROGRAMACION SERVICIOS</b></h2> 
          </div>
        </div>

      </section>

      <!-- Main content -->
    <section class="content container-fluid">

        



        <div class="box" id=""><!-- antes este id se llamaba tablaServiciosComandancia-->
             
              <!-- /.box-header -->
              <div class="box-body" id="recarga">
                <table id="example2" class="table table-hover table-responsive table-dark">
                  <thead>
                  <tr>
                    
                    <th>Ver</th>
                    <th>Compañia</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Motivo</th>
                    <th>Direccion/Lugar</th>                 
                    <th>estado</th>
                    <th>Acciones</th>
                    
                  </tr>
                  </thead>
                  <tbody id="recargartabla">
                
                    <?php 
                    while ($rows = $resultado->fetch_array()) {?>
                        
                    <tr id="aqui">
                      <td><button id="<?php echo $rows['id']; ?>" class="label label-success" onclick="verservicios(this.id)"><i class="fa fa-eye"></i></button></td>
                      <td>
                         <?php
                          
                              if ($rows['c1']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info ">1Cia</span></h4>';}
                              if ($rows['c2']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">2Cia</span></h4>';}
                              if ($rows['c3']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">3Cia</span></h4>';}
                              if ($rows['c4']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">4Cia</span></h4>';}
                              if ($rows['c5']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">5Cia</span></h4>';}
                              if ($rows['c6']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">6Cia</span></h4>';}
                              if ($rows['c7']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">7Cia</span></h4>';}
                              if ($rows['c8']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">8Cia</span></h4>';}
                              if ($rows['c9']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">9Cia</span></h4>';}
                              if ($rows['c10']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">10Cia</span></h4>';}
                              if ($rows['c11']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">11Cia</span></h4>';}
                              if ($rows['c12']==1){echo '<h4 style="margin-bottom: 13px"><span class="label label-info">12Cia</span></h4>';}
                              if ($rows['c13']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">B.Forestal</span></h4>';}
                              if ($rows['c14']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">B.Metrenco</span></h4>';}
                              if ($rows['c20']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">Comand.</span></h4>';}
                              if ($rows['c21']==1) {echo '<h4 style="margin-bottom: 13px"><span class="label label-info">SuperInt.</span></h5>';}
                         ?>
                      </td>
                      <!--<td> los tengo eliminados
                          <?php 
                            if ($rows['b1']==1) {echo '<h5><span class="label label-info">B1</span></h5>';}
                            if ($rows['q1']==1) {echo '<h5><span class="label label-info">Q1</span></h5>';}
                            if ($rows['m1']==1) {echo '<h5><span class="label label-info">M1</span></h5>';}
                            if ($rows['b2']==1) {echo '<h5><span class="label label-info">B2</span></h5>';}
                            if ($rows['h2']==1) {echo '<h5><span class="label label-info">H2</span></h5>';}
                            if ($rows['hx2']==1) {echo '<h5><span class="label label-info">HX2</span></h5>';}
                            if ($rows['b3']==1) {echo '<h5><span class="label label-info">B3</span></h5>';}
                            if ($rows['r3']==1) {echo '<h5><span class="label label-info">R3</span></h5>';}
                            if ($rows['rx3']==1) {echo '<h5><span class="label label-info">RX3</span></h5>';}
                            if ($rows['b4']==1) {echo '<h5><span class="label label-info">B4</span></h5>';}
                            if ($rows['bx4']==1) {echo '<h5><span class="label label-info">BX4</span></h5>';}
                            if ($rows['g4']==1) {echo '<h5><span class="label label-info">G4</span></h5>';}
                            if ($rows['b5']==1) {echo '<h5><span class="label label-info">B5</span></h5>';}
                            if ($rows['r5']==1) {echo '<h5><span class="label label-info">R5</span></h5>';}
                            if ($rows['b6']==1) {echo '<h5><span class="label label-info">B6</span></h5>';}
                            if ($rows['bx6']==1) {echo '<h5><span class="label label-info">BX6</span></h5>';}
                            if ($rows['ba6']==1) {echo '<h5><span class="label label-info">BA6</span></h5>';}
                            if ($rows['b7']==1) {echo '<h5><span class="label label-info">B7</span></h5>';}
                            if ($rows['bx7']==1) {echo '<h5><span class="label label-info">BX7</span></h5>';}
                            if ($rows['m7']==1) {echo '<h5><span class="label label-info">M7</span></h5>';}
                            if ($rows['b8']==1) {echo '<h5><span class="label label-info">B8</span></h5>';}
                            if ($rows['s8']==1) {echo '<h5><span class="label label-info">S8</span></h5>';}
                            if ($rows['b9']==1) {echo '<h5><span class="label label-info">B9</span></h5>';}
                            if ($rows['b10']==1) {echo '<h5><span class="label label-info">B10</span></h5>';}
                            if ($rows['bx10']==1) {echo '<h5><span class="label label-info">BX10</span></h5>';}
                            if ($rows['b11']==1) {echo '<h5><span class="label label-info">B11</span></h5>';}
                            if ($rows['b12']==1) {echo '<h5><span class="label label-info">B12</span></h5>';}
                            if ($rows['b13']==1) {echo '<h5><span class="label label-info">B13</span></h5>';}
                            if ($rows['z13']==1) {echo '<h5><span class="label label-info">Z13</span></h5>';}
                            if ($rows['b14']==1) {echo '<h5><span class="label label-info">B14</span></h5>';}
                            if ($rows['k1']==1) {echo '<h5><span class="label label-info">K1</span></h5>';}
                            if ($rows['k2']==1) {echo '<h5><span class="label label-info">K2</span></h5>';}
                            if ($rows['k3']==1) {echo '<h5><span class="label label-info">K3</span></h5>';}
                            if ($rows['k4']==1) {echo '<h5><span class="label label-info">K4</span></h5>';}
                            if ($rows['lt1']==1) {echo '<h5><span class="label label-info">LT1</span></h5>';}
                            if ($rows['j1']==1) {echo '<h5><span class="label label-info">J1</span></h5>';}
                            if ($rows['j2']==1) {echo '<h5><span class="label label-info">J2</span></h5>';}
                            if ($rows['j3']==1) {echo '<h5><span class="label label-info">J3</span></h5>';}
                            

                           ?>
                      </td>-->
                      <td><?php echo $rows['fecha'];?></td>
                      <td><?php echo $rows['hora'];?></td>
                      <td><?php echo $rows['motivo'];?></td>
                      <td><?php echo $rows['direccion'];?></td>                   
                      <td>

                      <?php 
                        switch ($rows['estado']) {
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

                       ?></td>
                                             
                      <td>
                        <button class="label label-warning" id="<?php echo $rows['id'] ?>" onclick="cambioestadoserviciocomandancia(this.id)">CAMBIAR ESTADO</button>

                        <?php 
                        if ($_SESSION['permiso']==4) {
                          $ver="none";
                        }else {
                          $ver="inline";
                        }

                         ?>

                        <button id="<?php echo $rows['id'] ?>" onclick="editarservcomandancia(this.id)" class="label label-info" style="display: <?php echo $ver ?>" >EDITAR </button>
                      </td>
                    </tr>

                  <?php } ?>
                 
               
                  </tbody>
                  <tfoot>
                  <tr>
                  
                    <th>Detalle</th>
                    <th>Comp</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Motivo</th>
                    <th>Direccion/Lugar</th>                 
                    <th>estado</th>
                    <th>acciones</th>
                    
                  </tr>
                  </tfoot>
                
                </table>
              </div>
              
            </div>

              <!-- /.box-body -->

    </section>

<script>
  function verservicios(id){
    
  $("#cambioEstado").load('ver-detalle.php',{
    id:id
  });
$("#cambioEstado").modal('show');

}

 function crearserviciocomandancia(){
    
  $("#setServicio").load('nuevo-serv-comandancia.php',{
    
  });
$("#setServicio").modal('show');

}


function editarservcomandancia(id){
  $("#setServicio").load('edit-serv-comandancia.php',{
    id:id
  });
  $("#setServicio").modal('show');

}

function cambioestadoserviciocomandancia(id){
  console.log(id);
  $("#estadoServicio").load('cambio-estado-ser-comandancia.php',{
     id:id
  });
  $("#estadoServicio").modal('show');
}

</script>
 
  <!--...........................................................................................-->
</div>


  <?php 
      include_once 'templates/footer.php';
      include_once 'templates/modales/modales.php';
   
        
  ?>


