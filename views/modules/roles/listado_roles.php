<?php
	require_once $path_direccion.'/controller/roles_controller/roles_controller.php';
	$roles= new RolesController();
?>
<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTADO DE ROLES  </li>
	</ol>
<?php

if (isset($_GET['action'])) {
 	if ($_GET['action']== 'okUsuario') {
 	     echo '<center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong>El Rol fue Agregado Satifactoriamente al sistema.
          </div>
        </center>';
 	}

 	if ($_GET['action']== 'okBorrado') {
 	     echo '<center><div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong>El Rol fue Borrado Satifactoriamente al sistema.
          </div>
        </center>';
 	}

 	if ($_GET['action']== 'okEdiatdoUsuarios') {
 	     echo '<center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong>El Rol fue Editado Satifactoriamente al sistema.
          </div>
        </center>';
 	}
 }


 ?>

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
									<a href="index.php?action=editarRoles&id_rol=<?php print $row["id_rol"] ?>"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		 							<a href="index.php?action=roles&idBorrar=<?php print $row["id_rol"] ?>"<i class="<?php print $row["id_rol"] ?>fa fa-trash-o btn btn-danger btn-sm"></i></a>
				 				</td>
						</tr>
						<?php
						}
					
				 ?>
			</tbody>
		</table>
	</div>
 </div>

	 <?php require 'Views/modal/modal_roles.php'; ?>
</div>

