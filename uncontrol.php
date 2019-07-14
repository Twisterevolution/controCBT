

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

        $idcontrol = $_GET['idcontrol'];
        
        $fecha = date_create($_GET['fecha']);

        $sql = "SELECT * FROM mivista1 WHERE idcontrol= $idcontrol";
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
          
          <div class="col-md-12">
            <button class="btn btn-danger" onclick="location.href='pizarracontroles.php'">VOLVER</button>
            <h3 class="titulolibro613" align=""><b>CONTROL DE EQUIPOS </b></h3>
            <h4 id="fecha">FECHA : <?php echo date_format($fecha, 'd/m/Y') ?></h4> 
          </div>
        </div>

      </section>

      <!-- Main content -->
    <section class="content container-fluid">

        



        <div class="box" id=""><!-- antes este id se llamaba tablaServiciosComandancia-->
             
              <!-- /.box-header -->
              <div class="box-body" id="recarga">
                <table id="example9" class="table table-hover table-responsive table-dark cell-border">
                  <thead>
                  <tr>
                    
                    <th>Folio Control</th>
                    <th>Unidad</th>
                    <th>Estado</th>
                    <th>Disponible</th>
                    <th>Novedad</th>
                    <th>Detalle Novedad</th>
                    <th>Hora</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody id="recargartabla">
                
                    <?php 
                    while ($rows = $resultado->fetch_array()) {?>
                        
                    <tr id="aqui">
                      <td><?php echo $rows['idcontrol'] ?></td>
                      <td><?php echo $rows['nombre_unidad']?></td>
                      <td><?php echo $rows['estado']?></td>
                      <td><?php echo $rows['Disponible'] ?></td>
                      <td><?php echo $rows['novedades'];?></td>
                      <td><?php echo $rows['detalle'];?></td>
                      <td><?php echo $rows['hora'];?></td>      
                    </tr>

                    <?php } ?>
                 
               
                  </tbody>
                  <tfoot>
                  <tr>
                  
                    <th>Folio Control</th>
                    <th>Unidad</th>
                    <th>estado</th>
                    <th>Disponible</th>
                    <th>novedad</th>
                    <th>Detalle Novedad</th>
                    <th>Hora</th>
                    
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


