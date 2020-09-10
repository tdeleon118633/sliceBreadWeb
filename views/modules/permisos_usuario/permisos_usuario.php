<?php
require_once $path_direccion.'/controller/permisos_usuario_controller/permisos_usuario_controller.php';
	$usuarios= new PermisosUsuarioController();
?>
<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i> Roles y Perfiles </li>
	</ol>
		<center>
			<!--  <button class="btn btn-primary" data-toggle="modal" data-target="#usuarios">
			<i class="fa fa-user"> </i> Nuevo Usuario
			 </button> -->
			<!-- <ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="modal" data-target="#usuarios" href="#"><i class="fa fa-user btn btn-outline-info btn-sm"> </i> Nuevo Usuario</a>
				  </li>-->
			</ul>
	  <br>
 <div class="row">

	<div class="col-md-12">
		<table class="table table-bordered" id="tablaProductos">
			<thead class="bg-primary">
				<tr>
					<td class="usuarios" align="center">Usuario</td>
					<td class="usuarios" align="center">Rol</td>					
					<td class="usuarios" align="center">Actualizar</td>
					<td class="usuarios" align="center">Agregar</td>
					<td class="usuarios" align="center">Eliminar</td>
					<td class="usuarios" align="center">Visualizar</td>
					<td class="usuarios" align="center">Rol</td>
					<td class="usuarios" align="center">&nbsp;</td>
				</tr>
			</thead>
			<tbody>
				<?php
				  $respuesta =  $usuarios->getPermisosUsuarioController();
					//print_r($respuesta);
					print $path_direccion;
					foreach ($respuesta as $row) {
						?>
						<tr>
							    <td align="center"><?php print $row['usuario']; ?></td>
								<td align="center"><?php print $row['nombre']; ?></td>				
							    <td align="center"><?php print $row['actualizar']; ?></td>
								<td align="center"><?php print $row['agregar']; ?></td>
								<td align="center"><?php print $row['eliminar']; ?></td>
								<td align="center"><?php print $row['visualizar']; ?></td>
								<td align="center"><?php print $row['id_rol']; ?></td>
								<td align="center">
									<a href="permisos_usuario_view.php?action=editar_permisos_usuario&idusuario=<?php print $row["id_usuario"] ?>"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		 							<a href="permisos_usuario_view.php?action=usuarios&idBorrar=<?php print $row["id_usuario"] ?>"<i class="<?php print $row["id_usuario"] ?>fa fa-trash-o btn btn-danger btn-sm"></i></a>
				 				</td>
						</tr>
						<?php
					}
				 ?>
			</tbody>
		</table>
	</div>
 </div>

	 <?php require 'Views/modal/modal_permisos_usuario.php'; ?>
</div>
