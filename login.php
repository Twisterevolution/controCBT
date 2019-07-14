

      <?php 

      	session_start();

        if (isset($_GET['cerrar_sesion'])) {
         $cerar=$_GET['cerrar_sesion']; 
          if ($cerar) {
          session_destroy();
          }
        }


      	
      
        include_once 'funciones/bd_conexion.php';
        include_once 'templates/head.php';
        include_once 'funciones/funciones.php';

      ?>



<div class="login-box">
  <div class="login-logo" align="center">
  	<h1 style="color: white;">Plataformas CBT</h1>
  	<h3 style="color: white;"><b>TELECOMUNICACIONES</b></h3>
    

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa tus datos para iniciar sesión</p>
 

    <form class="" method="POST" action="insertar-admin.php" name="login-admin" id="login-admin">
      <div class="form-group has-feedback">
        <input name="usuario" type="text" class="form-control" placeholder="Ingesa solo tu primer nombre">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="clave" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12 ">
        	<input type="hidden" name="login-admin" value="1">
          	<button type="submit" class="btn btn-primary btn-block btn-flat">Ingresa al sistema</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

 

    <a>Olvidaste tu Contraseña</a><br>
    <a>Solicita ayuda al dpto de Telecomunicaciones</a>

  </div>
  <!-- /.login-box-body -->
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/es.js"></script>
<script src="js/adminlte.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/icheck.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="js/insertar-ajax.js"></script>
<script src="js/datos-carro.js"></script>

<?php 
	include_once 'templates/modales/modales.php';
?>