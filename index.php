

    <?php 

      include_once 'funciones/sesiones.php';
      include_once 'templates/head.php';
      include_once 'templates/header.php';
      include_once 'templates/asidebar.php';
    ?>

      

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PAGINA PRINCIPAL DE CONTROLES
        <small>Selecciona la aplicacion que mas prefieras</small>
      </h1>
    <?php  
       
    //echo '<pre>';
    //var_dump($_SESSION);
    //echo '</pre>';
    ?>  
    </section>

    <!-- Main content -->
  <section class="content container-fluid">

        -----------------| tu paguina comienza aqui|--------------------------

    
        <!-- /.content -->
        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Agenda</h3>

              <p>lista general de contactos</p>
            </div>
            <div class="icon">
              <i class="fa fa-phone-square"></i>
            </div>
            <a href="#" class="small-box-footer">
              Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Control 6-13</h3>

              <p>control general de servicios</p>
            </div>
            <div class="icon">
              <i class="fa fa-check-square"></i>
            </div>
            <a href="controlservicios.php" class="small-box-footer">
              Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Control 6-14</h3>

              <p>control combustibles unidades</p>
            </div>
            <div class="icon">
              <i class="fa fa-truck"></i>
            </div>
            <a href="#" class="small-box-footer">
              Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3>Libro Novedades</h3>

              <p>Novedades del Cuerpo </p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">
              Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-sm-12 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 style= "text-align: center;">SISTEMA DE ADMINISTRACION Y DESPACHO DE UNIDADES</h3>

              <p style= "text-align: center; font-size: 20px">Sistema priorizacion de despacho <p>
            </div>
            <div class="icon">
              <i class="fa fa-truck"></i>
            </div>
            <a href="#" class="small-box-footer">
              Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        </div>
<section class="content container-fluid">
<div class="col-sm-12 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3 style= "text-align: center;">SISTEMA DE ASISTENCIA POR CUARLES</h3>

              <p style= "text-align: center; font-size: 20px">estado de personal por cuarteles<p>
            </div>
            <div class="icon">
              <i class="fa fa-odnoklassniki"></i>
            </div>
            <a href="#" class="small-box-footer">
              Entrar <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>  





</section>
  


        </div>
</section>
  <?php 
      include_once 'templates/footer.php';   
  ?>


