<?php
	require_once $path_direccion.'/controller/restaurantes_controller/restaurantes_controller.php';
	$restaurantes= new RestaurantesController();
?>
<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTADO DE RESTAURANTES  </li>
	</ol>

		<center>
			<!--  <button class="btn btn-primary" data-toggle="modal" data-target="#usuarios">
			<i class="fa fa-user"> </i> Nuevo Usuario
			 </button> -->
			 <ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="modal" data-target="#restaurantes" href="#"><i class="fa fa-user btn btn-outline-info btn-sm"> </i> Nuevo Restaurante </a>
				  </li>

			</ul>
	  <br>
 <div class="row">

	<div class="col-md-12">
		<table class="table table-bordered" id="tablaRestaurantes">
			<thead class="bg-primary">
				<tr>
					<td class="restaurantes" align="center">Nombre</td>
					<td class="restaurantes" align="center">Descripción</td>
					<td class="restaurantes" align="center">Estado</td>
					<td class="restaurantes" align="center">Acciones</td>
				</tr>
			</thead>
			<tbody>
				<?php
				  $respuesta =  $restaurantes->getRestaurantesController();
					//print_r($respuesta);
					foreach ($respuesta as $row) {
						?>
						<tr>
							  <td align="center"><?php print $row['nombre']; ?></td>
								<td align="center"><?php print $row['descripcion']; ?></td>
								<td align="center"><?php print $row['activo'] == "1" ? "Activo" : "Desactivado"; ?></td>
								<td align="center">
									<a href="index.php?action=editarRestaurantes&id_restaurantes=<?php print $row["id_restaurantes"] ?>"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		 							<a href="index.php?action=restaurantes&idBorrar=<?php print $row["id_restaurantes"] ?>"<i class="<?php print $row["id_restaurantes"] ?>fa fa-trash-o btn btn-danger btn-sm"></i></a>
				 				</td>
						</tr>
						<?php
						}
					
				 ?>
			</tbody>
		</table>
	</div>
 </div>

	 <?php require 'Views/modal/modal_restaurantes.php'; ?>
</div>

