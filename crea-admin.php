
      <?php 
      	include_once 'funciones/sesiones.php';
        include_once 'funciones/bd_conexion.php';
        include_once 'templates/head.php';
        include_once 'templates/header.php';
        include_once 'templates/asidebar.php';
        include_once 'funciones/funciones.php';

      ?>  



<div class="content-wrapper">
	<section class="content-header">
		<h1>Crear Administradores</h1>
	</section>
	<div class="row">
		<div class="col-md-6">
			<section class="content">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Crear Administrador</h3>
						<div class="box-body">
							
							<div class="box box-info">
					            <div class="box-header with-border">
					              <h3 class="box-title"></h3>
					            </div>
					            <!-- /.box-header -->
					            <!-- form start -->
					            <form class="form-horizontal" method="POST" action="insertar-admin.php" name="crear-admin" id="crear-admin" >
					              <div class="box-body" id="formulario-crear-admin">
					                <div class="form-group">
					                  <label for="nombre" class="col-sm-2 control-label">Nombre</label>

					                  <div class="col-sm-10">
					                    <input type="text" class="form-control" id="nombre" placeholder="Solo Nombre" name="nombre">
					                  </div>
					                </div>

					                <div class="form-group">
					                  <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>

					                  <div class="col-sm-10">
					                    <input type="text" class="form-control" id="apellidos" placeholder="Ambos Apellidos" name="apellidos">
					                  </div>
					                </div>

					                <div class="form-group">
					                  <label for="apellidos" class="col-sm-2 control-label">Email</label>

					                  <div class="col-sm-10">
					                    <input type="email" class="form-control" id="email" placeholder="correo" name="email">
					                  </div>
					                </div>

					                <div class="form-group">
					                  <label for="password" class="col-sm-2 control-label">Password</label>

					                  <div class="col-sm-10">
					                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
					                  </div>
					                </div>


					                <div class="form-group">
					                  <label for="password" class="col-sm-2 control-label">Rol.</label>

					                  <div class="col-sm-10">

					                  	<select name="rol" class="form-control" placeholder="selecciona">
					                  		<option value="0"></option>
					                  		<option value="1">Administrador</option>
					                  		<option value="2">Adminitrativo</option>
					                  		<option value="3">Comandante</option>
					                  		<option value="4">Central</option>
					                  	</select>
					                    
					                  </div>
					                </div>

					                
					              </div>
					              <!-- /.box-body -->
					              <div class="box-footer">
					                <input type="hidden" name="crear-admin" value="1">
					                <button type="submit" class="btn btn-info pull-left">Agregar Usuario</button>
					              </div>
					              <!-- /.box-footer -->
					            </form>
					          </div>


					    </div>	
					</div>
				</div>
			</section>
		</div>
		
	</div>
			
	
</div>


















<?php 
	include_once 'templates/footer.php';
	include_once 'templates/modales/modales.php';
?>