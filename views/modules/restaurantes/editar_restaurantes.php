<?php
 require_once '/controller/restaurantes_controller/restaurantes_controller.php';
 $idusuario = $_GET['id_restaurantes'];
     $consulta = $conexion->query("SELECT * FROM restaurantes WHERE id_restaurantes = $id_restaurantes");
?>


<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i>EDITAR RESTAURANTE </li>
	</ol>
  <div class="row">
     <div class="col-md-7">


	      	<form method="post">
	      		<?php foreach ($consulta as $row => $value): ?>
	      			<input type="hidden" name="id_restaurantes" value="<?php echo $value['id_restaurantes'] ?>">
			  			<div class="form-group">
			    			<label for="formGroupExampleInput">Nombre Restaurante</label>
			   		 		<input type="text" name="nombre" class="form-control" id="formGroupExampleInput" value="<?php echo $value['nombre'] ?>">
			 		 </div>
			  <div class="form-group">
			   	 <label for="formGroupExampleInput">Descripción</label>
			   	 <input type="text" name="descripcion" class="form-control" id="formGroupExampleInput2" value="<?php echo $value['descripcion'] ?>">
			  </div>
		      <div class="form-group">
		       	<label for="recipient-name" class="form-control-label">Estado:</label>
					<select class="form-control chosen-select" id="activo" name="activo">
				        <option value=""  required="" >Seleccione una opción...</option>
				         	<option value="1"> Activo</option>
							<option value="0"> Desactivado</option>
				    </select>

		      </div>

			<button type="submit" name="editarRol" class="btn btn-primary">Guardar Cambios</button>
           </form>
	      <?php endforeach ?>
     </div>

        <div class="col-md-5">
          <img src="assets/img/foto1.jpg" width="450" height="250">
        </div>
  </div>
        <br>
</div>

<?php

//$eU = new UsuariosController();
//$eU->editarUsuariosController();



 ?>