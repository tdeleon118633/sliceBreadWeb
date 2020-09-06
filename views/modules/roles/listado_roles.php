<?php
	require_once $path_direccion.'/controller/roles_controller/roles_controller.php';
	$roles= new RolesController();
?>
<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTADO DE ROLES  </li>
	</ol>

		<center>
			<!--  <button class="btn btn-primary" data-toggle="modal" data-target="#usuarios">
			<i class="fa fa-user"> </i> Nuevo Usuario
			 </button> -->
			 <ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="modal" data-target="#roles" href="#"><i class="fa fa-user btn btn-outline-info btn-sm"> </i> Nuevo Rol </a>
				  </li>

			</ul>
	  <br>
 <div class="row">

	<div class="col-md-12">
		<table class="table table-bordered" id="tablaRoles">
			<thead class="bg-primary">
				<tr>
					<td class="roles" align="center">Nombre</td>
					<td class="roles" align="center">Descripción</td>
					<td class="roles" align="center">Estado</td>
					<td class="roles" align="center">Ajustes</td>
				</tr>
			</thead>
			<tbody>
				<?php
				  $respuesta =  $roles->getRolesController();
					//print_r($respuesta);
					foreach ($respuesta as $row) {
						?>
						<tr>
							  <td align="center"><?php print $row['nombre']; ?></td>
								<td align="center"><?php print $row['descripcion']; ?></td>
								<td align="center"><?php print $row['activo'] == "1" ? "Activo" : "Desactivado"; ?></td>
								<td align="center">
									<a href="roles_view.php?action=editar_roles&id_rol=<?php print $row["id_rol"] ?>"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		 							<a href="roles_view.php?action=roles&idBorrar=<?php print $row["id_rol"] ?>"<i class="<?php print $row["id_rol"] ?>fa fa-trash-o btn btn-danger btn-sm"></i></a>
				 				</td>

				 			

						</tr>
						<?php
						}
					
				 ?>
			</tbody>
		</table>
	</div>
 </div>

	 <?php require 'views/modal/modal_roles.php'; ?>
</div>

