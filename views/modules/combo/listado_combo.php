<?php
	require_once $path_direccion.'/controller/combo_controller/combo_controller.php';
	$combo= new ComboController();
?>
<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i> LISTADO DE COMBOS  </li>
	</ol>

		<center>
			<!--  <button class="btn btn-primary" data-toggle="modal" data-target="#usuarios">
			<i class="fa fa-user"> </i> Nuevo Usuario
			 </button> -->
			 <ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="modal" data-target="#combo" href="#"><i class="fa fa-user btn btn-outline-info btn-sm"> </i> Nuevo combo </a>
				  </li>

			</ul>
	  <br>
 <div class="row">

	<div class="col-md-12">
		<table class="table table-bordered" id="tablaCombo">
			<thead class="bg-primary">
				<tr>
					<td class="combo" align="center">Nombre</td>					
					<td class="combo" align="center">Estado</td>
					<td class="combo" align="center">Acciones</td>
				</tr>
			</thead>
			<tbody>
				<?php
				  $respuesta =  $combo->getComboController();
					//print_r($respuesta);
					foreach ($respuesta as $row) {
						?>
						<tr>
							  <td align="center"><?php print $row['nombre']; ?></td>
							
								<td align="center"><?php print $row['activo'] == "1" ? "Activo" : "Desactivado"; ?></td>
								<td align="center">
									<a href="index.php?action=editarCombo&id_combo=<?php print $row["id_combo"] ?>"<i class="fa fa-edit btn btn-primary btn-sm"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
		 							<a href="index.php?action=combo&idBorrar=<?php print $row["id_combo"] ?>"<i class="<?php print $row["id_combo"] ?>fa fa-trash-o btn btn-danger btn-sm"></i></a>
				 				</td>
						</tr>
						<?php
						}
					
				 ?>
			</tbody>
		</table>
	</div>
 </div>

	 <?php require 'Views/modal/modal_combo.php'; ?>
</div>

