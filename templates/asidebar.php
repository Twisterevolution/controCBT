
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $_SESSION['nombre']; ?> </p>
          
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">SECCIONES</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="xactive"><a href="agenda.php"><i class="fa fa-tty"></i><span>AGENDA TELEFONICA</span></a></li>
        <li><a href="#"><span>APLICACIONES</span></a></li>
        <li><a href="srmcbt.php">&nbsp&nbsp&nbsp<i class="fa fa-wrench"></i> <span> SRM´s Gestion</span></a></li>
        <li><a href="pizarracontroles.php">&nbsp&nbsp&nbsp<i class="fa fa-bullhorn"></i> <span>- Control de Equipos</span></a></li>
        <li><a href="#">&nbsp&nbsp&nbsp<i class="fa fa-book"></i> <span>- Novedades</span></a></li>
           
        
        <li class="treeview">
          <a href="#"><i class="fa fa-th"></i> <span>HERRAMIENTAS</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="controlservicios.php">DESPACHOS 6-13 CENTRAL</a></li>
            <li><a href="setservicios.php">PIZARRA SERVICIOS </a></li>
          </ul>
        </li>
        <?php 
          if ($_SESSION['permiso']!=1) {
            $ver ="none";
          }else {
            
          }
          
         ?>

        <li class="treeview" style="display:<?php echo $ver ?>;">
          <a href="#"><i class="fa fa-th"></i> <span>ADMINISTRACION</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="ver-admins.php">VER ADMINISTRADORES</a></li>
            <li><a href="crea-admin.php">CREAR ADMINISTRADORES</a></li>
            
            
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>