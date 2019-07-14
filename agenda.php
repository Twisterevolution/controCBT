

    <?php 
      include_once 'funciones/bd_conexion.php';
      include_once 'templates/head.php';
      include_once 'templates/header.php';
      include_once 'templates/asidebar.php';

      $sql = "SELECT * FROM contactoscbt";
      $resultado = $conn->query($sql);
    ?>     

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><b>AGENDA GENERAL DEL CBT PARA PUESTO DE MANDO</b></h1>  
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

<div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example4" class="table table-hover table-responsive">
                <thead>
                <tr>
                  <th>Institucion</th>
                  <th>Detalle</th>
                  <th>Ciudad</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Telefono1</th>
                  <th>Telefono2</th>
                  <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  while ($row = $resultado->fetch_array()) { ?>
                            <tr>
                              <td><?php echo $row["institucion"]; ?></td>
                              <td><?php echo $row["cargo"]; ?></td>
                              <td><?php echo $row["ciudad"]; ?></td>
                              <td><?php echo $row["nombre"]; ?></td>
                              <td><?php echo $row["apellido"]; ?></td>
                              <td><?php echo $row["telefono1"]; ?></td>
                              <td><?php echo $row["telefono2"]; ?></td>
                              <td><?php echo $row["email"]; ?></td>
                            </tr>
                  <?php  
                  }
                 ?>
             
              
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Institucion</th>
                  <th>Cargo</th>
                  <th>Ciudad</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Telefono1</th>
                  <th>Telefono2</th>
                  <th>Email</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->

    </section>
 
  </div>

  <?php 
      include_once 'templates/footer.php';   
  ?>


