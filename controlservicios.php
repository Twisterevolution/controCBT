

      <?php 
        include_once 'funciones/bd_conexion.php';
        include_once 'templates/head.php';
        include_once 'templates/header.php';
        include_once 'templates/asidebar.php';
        include_once 'funciones/funciones.php';     

        $sql = "SELECT * FROM servicios";
        $resultado = $conn->query($sql);

        $sql2 = "SELECT * FROM unidades WHERE ocupado = 0 ORDER BY compañia asc, idunidad asc;";
        $resultado2 = $conn->query($sql2);
        $resultado3 = $conn->query($sql2);

      ?>  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id=""> <!-- al id recargar -->
      <!-- Content Header (Page header) -->
      <section class="content-header">

        <div class="container">
          <div class="col-md-4">

                <?php 
                $display ="";
                if ($_SESSION['permiso']!=4) {
                $display="none";
                }                  
                ?>

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nuevoServicio" style="display: <?php echo $display ?>">NUEVO 6-13 <i class="fa fa-plus"></i></button>
          </div>
          <div class="col-md-8">
            <h2 class="titulolibro613" align=""><b>LIBRO DIGITAL DE 6-13</b></h2> 
          </div>
        </div>

      </section>

      <!-- Main content -->
    <section class="content container-fluid">
        <div class="box" id="">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-hover table-responsive">
                  <thead>
                  <tr>
                    <th>Folio</th>
                    <th>Unidades</th>
                    <th style="display:<?php echo $display ?>">+Unidad</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Direccion/Lugar</th>                 
                    <th>Motivo</th>
                    <th>Autorizado X</th>
                    <th></th>
                    
                  </tr>
                  </thead>
                  <tbody id="recargartabla">
                  <?php 
                    while ($row = $resultado->fetch_array()) { ?>
                              <tr>
                                <td id="<?php echo $row["id_servicios"]; ?>"><?php echo $row["id_servicios"]; ?></td>

                                <?php
                                  $sqlx = "SELECT * FROM unidades_servicios WHERE id_servicio_aso ='".$row['id_servicios']."'" ; 
                                  $unidadservicio =$conn->query($sqlx);
                                ?> 

                                <td>
                                <?php
                                  while ($sip = $unidadservicio->fetch_array()) {
                                    
                                  if ($sip['us_sgas']==0 || $sip['us_kmllegada']<=0) {
                                      echo '<span class="label label-default">'.$sip['us_unidad'].'</span>&nbsp';
                                    }else {
                                      echo '<span class="label label-info">'.$sip['us_unidad'].'</span>&nbsp';
                                    };  
                                    
                                  };
                                ?>    
                                </td>

                                <?php 
                                $disable ="";
                                if ($_SESSION['permiso']!=4) {
                                   $disable="disabled";
                                 } 


                                 ?>

                                <td style="display: <?php echo $display ?>"><button class="btn btn-success ser" id="<?php echo $row['id_servicios']?>" onclick="agregarunidad(this.id)" <?php echo $disable ;?> ><i class="fa fa-plus"></i><i class="fa fa-truck"></i></button></td>
                                <td style=""><?php echo $row["fservicio"]; ?></td>
                                <td><?php echo $row["horasalida"]; ?></td>
                                <td style=""><?php echo $row["direccion"]; ?></td>
                                <td><?php echo $row["motivo"]; ?></td>                             
                                <td><?php echo $row["autoriza"]; ?></td>                              
                                <td>
                                  <button id="<?php echo $row['id_servicios'];?>" class="btn btn-success" onclick="vertodosloscarros(this.id)"><i class="fa fa-eye"></i></button>
                                </td>
                                  
                                                    
                              </tr>
                    <?php  
                    }
                   ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Folio</th>
                    <th>Unidades</th>
                    <th style="display: <?php echo $display ?>">+Unidad</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Direccion/Lugar</th>                 
                    <th>Motivo</th>
                    <th>Autorizado por</th>
                    <th></th>
                    
                  </tr>
                  </tfoot>
                
                </table>
              </div>
              
            </div>

              <!-- /.box-body -->

    </section>
</div>


  <?php 
      include_once 'templates/footer.php';
      include_once 'templates/modales/modales.php';
   
        
  ?>


