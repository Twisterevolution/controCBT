

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



        $sql = "SELECT * FROM control";
        $resultado = $conn->query($sql);
        $resultado2 = $conn->query($sql);

        $sql99 ="SELECT idcontrol, count(estado) FROM controlunidad where estado=0 and idcontrol=99 group by idcontrol";


      ?>  

       <?php 
                        if ($_SESSION['permiso']==4) {
                          $ver="inline";
                        }else {
                          $ver="none";
                        }

                         ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id=""> <!-- al id recargar -->
      <!-- Content Header (Page header) -->
      <section class="content-header">

        <div class="container" id="">
          <div class="col-md-2">
            <button type="button" class="btn btn-warning btn-lg" style="display: <?php echo $ver; ?>" onclick="nuevocontrolx()"><i class="fa fa-plus"></i> Nuevo C-E&nbsp</button>
          </div>
          <div class="col-md-9">
            <h2 class="titulolibro613" align=""><b>RESUMEN GENERAL DE CONTROL DE EQUIPOS</b></h2> 
          </div>
        </div>

      </section>

      <!-- Main content -->
    <section class="content container-fluid">

        



        <div class="box" id=""><!-- antes este id se llamaba tablaServiciosComandancia-->
             
              <!-- /.box-header -->
              <div class="box-body" id="recarga">
                <table id="example8" class="table table-hover table-responsive">
                  <thead>
                  <tr>
                    
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Motivo</th>
                    <th>Tot.0-8</th>
                    <th>Con-Nov</th>
                    <th>Realizado-Por</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody id="recargartabla">
                
                    <?php 
                    while ($rows = $resultado->fetch_array()) {?>
                        
                    <tr id="aqui">
                      <td><a href="uncontrol.php?idcontrol=<?php echo $rows['idcontrol']?>&fecha=<?php echo $rows['fecha'] ?>"><?php echo $rows['idcontrol'] ?></a></td>
                      <td><?php echo $rows['fecha']?></td>
                      <td><?php if($rows['horaControl']==1) {
                        echo '8:15';
                      }elseif ($rows['horaControl']==2) {
                        echo '12:15';
                      }else {
                        echo 'No-Realizado';
                      }
                      ?></td>
                      <td><?php echo $rows['motivo'] ?></td>
                      <td>
                        <?php
                        $id = $rows['idcontrol'];
                        $res = "SELECT idcontrol, count(estado) AS estados FROM controlunidad where estado=0 and idcontrol= $id group by idcontrol";
                        $res1 = $conn->query($res);
                        $res2 = $res1->fetch_array();
                        echo ($res2['estados']>0) ? $res2['estados'] : "-";
                        
                        ?>
                      </td>
                      <td>
                        <?php
                        $id = $rows['idcontrol'];
                        $res = "SELECT idcontrol, count(novedad) AS novedades FROM controlunidad where novedad=1 and idcontrol= $id group by idcontrol";
                        $res1 = $conn->query($res);
                        $res2 = $res1->fetch_array();
                        echo ($res2['novedades']>0) ? $res2['novedades'] : "-";
                        
                        ?>

                      </td>
                      <td><?php echo $rows['creadopor'];?></td>
                      
                    </tr>

                    <?php } ?>
                 
               
                  </tbody>
                  <tfoot>
                  <tr>
                  
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Motivo</th>
                    <th>Tot.0-8</th>
                    <th>Con-Nov</th>
                    <th>Realizado-Por</th>
                    
                    
                  </tr>
                  </tfoot>
                
                </table>
              </div>
              
            </div>

              <!-- /.box-body -->

    </section>

<script>
  function nuevocontrolx(){
    window.location.href = "controlEquipos.php";
}


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


