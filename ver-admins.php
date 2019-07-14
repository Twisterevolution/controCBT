
      <?php 
        include_once 'funciones/bd_conexion.php';
        include_once 'templates/head.php';
        include_once 'templates/header.php';
        include_once 'templates/asidebar.php';
        include_once 'funciones/funciones.php';

      ?>  



<div class="content-wrapper">
	<section class="content-header">
		<h1>Listado de Todos los Administradores</h1>
	</section>
	<div class="row">
		<div class="">
			<section class="content">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Administradores</h3>
						<div class="box-body">
							
							<div class="box box-info">
					            <div class="box-header with-border">
					              <h3 class="box-title"></h3>

					              <table id="example3" class="table table-hover table-responsive">
					              	<caption>Datos de Administradores del sistema</caption>
					              	
									    
					              	<thead>
					              		<tr>
					              			<th>id</th>
					              			<th>nombre</th>
					              			<th>apellido</th>
					              			<th>Tipo Usuario</th>
					              			<th>Acciones</th>

					              		</tr>
					              	</thead>
					              	<tbody>

					              	<?php  
					              	
					              	$sqlAdmin = "SELECT * FROM usuarios";
					              	$adminis = $conn->query($sqlAdmin);

									while ($datos=$adminis->fetch_array()) { ?>
					              		
					              		<tr>
					              			<td><?php echo $datos['id'] ?></td>
					              			<td><?php echo $datos['nombre'] ?></td>
					              			<td><?php echo $datos['apellido'] ?></td>
					              			<td><?php 

					              					switch ($datos['permiso']) {
					              						case 1:
					              							echo "Administrador";
					              							break;
					              						case 2:
					              							echo "P.Administrativo";
					              							break;
					              						case 3:
					              							echo "Comandante";
					              							break;
					              						case 4:
					              							echo "Op. Central";
					              							break;
					              						default:
					              							// code...
					              							break;
					              					}
					              					
					              				?>
					               			</td>
					              			<td>EDITAR</td>
					              		</tr>

					              	<?php } ?>

					              	</tbody>
					              </table>
					            </div>
					           
					            
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