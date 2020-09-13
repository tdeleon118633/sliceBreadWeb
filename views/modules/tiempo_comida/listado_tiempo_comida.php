<?php
	require_once $path_direccion.'/controller/tiempo_comida_controller/tiempo_comida_controller.php';
	$tiempo_comida= new Tiempo_comidaController();
?>
<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTADO DE TIEMPOS DE COMIDA  </li>
	</ol>

		<center>
			<!--  <button class="btn btn-primary" data-toggle="modal" data-target="#usuarios">
			<i class="fa fa-user"> </i> Nuevo Usuario
			 </button> -->
			 <ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="modal" data-target="#tiempo_comida" href="#"><i class="fa fa-user btn btn-outline-info btn-sm"> </i> Nuevo tiempo de comida </a>
				  </li>

			</ul>
	  <br>
 <div class="row">

	<div class="col-md-12">
		<table class="table table-bordered" id="tablaTiempo_comida">
			<thead class="bg-primary">
				<tr>
					<td class="tiempo_comida" align="center">Nombre</td>					
					<td class="tiempo_comida" align="center">Estado</td>
					<td class="tiempo_comida" align="center">Acciones</td>
				</tr>
			</thead>
			<tbody>
				<?php
				  $respuesta =  $tiempo_comida->getTiempo_comidaController();
					//print_r($respuesta);
					foreach ($respuesta as $row) {
						?>
						<tr>
							  <td align="center"><?php print $row['nombre']; ?></td>
							
								<td align="center"><?php print $row['activo'] == "1" ? "Activo" : "Desactivado"; ?></td>
								<td align="center">
									<a href="index.php?action=editarTiempo_comida&id_tiempo_comida=<?php print $row["id_tiempo_comida"] ?>"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		 							<a href="index.php?action=tiempo_comida&idBorrar=<?php print $row["id_tiempo_comida"] ?>"<i class="<?php print $row["id_tiempo_comida"] ?>fa fa-trash-o btn btn-danger btn-sm"></i></a>
				 				</td>
						</tr>
						<?php
						}
					
				 ?>
			</tbody>
		</table>
	</div>
 </div>

	 <?php require 'Views/modal/modal_tiempo_comida.php'; ?>
</div>

