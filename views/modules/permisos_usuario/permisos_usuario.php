<?php
	require_once $path_direccion.'/controller/permisos_usuario_controller/permisos_usuario_controller.php';
	$usuarios= new UsuariosController();
?>
<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTADO DE USUARIOS  </li>
	</ol>
		<center>
			<!--  <button class="btn btn-primary" data-toggle="modal" data-target="#usuarios">
			<i class="fa fa-user"> </i> Nuevo Usuario
			 </button> -->
			 <ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="modal" data-target="#usuarios" href="#"><i class="fa fa-user btn btn-outline-info btn-sm"> </i> Nuevo Usuario</a>
				  </li>
			</ul>
	  <br>
 <div class="row">

	<div class="col-md-12">
		<table class="table table-bordered" id="tablaProductos">
			<thead class="bg-primary">
				<tr>
					<td class="usuarios" align="center">Nombres</td>
					<td class="usuarios" align="center">Apellidos</td>
					<td class="usuarios" align="center">Doc.Id</td>
					<td class="usuarios" align="center">email</td>
					<td class="usuarios" align="center">Tipo</td>
					<td class="usuarios" align="center">&nbsp;</td>
				</tr>
			</thead>
			<tbody>
				<?php
				  $respuesta =  $usuarios->getUsuariosController();
					//print_r($respuesta);
					print $path_direccion;
					foreach ($respuesta as $row) {
						?>
						<tr>
							  <td align="center"><?php print $row['nombres']; ?></td>
								<td align="center"><?php print $row['apellidos']; ?></td>
								<td align="center"><?php print $row['documento']; ?></td>
								<td align="center"><?php print $row['email']; ?></td>
								<td align="center"><?php print $row['tipo'] == "admin" ? "Administrador" : "Normal"; ?></td>
								<td align="center">
									<a href="usuarios_view.php?action=editarUsuarios&idusuario=<?php print $row["id_usuario"] ?>"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		 							<a href="usuarios_view.php?action=usuarios&idBorrar=<?php print $row["id_usuario"] ?>"<i class="<?php print $row["id_usuario"] ?>fa fa-trash-o btn btn-danger btn-sm"></i></a>
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
