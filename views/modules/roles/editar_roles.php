

<?php
 //require_once 'Views/modules/ventas/conexion.php';
 	  require_once $path_direccion.'/controller/roles_controller/roles_controller.php';
    $id_rol = $_GET['id_rol'];
    $roles= new RolesController();
    $consulta =  $roles->getRolController("roles",$id_rol);
    //$consulta = getUsuarios("usuarios",$idusuario);
  //  print_r($_GET);
?>


<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i>EDITAR ROLES </li>
	</ol>
  <div class="row">
    <div class="col-md-2">
      &nbsp;
    </div>
     <div class="col-md-8">
	      <form method="post">
	      <?php foreach ($consulta as $row => $value): ?>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre:</label>
                <input type="text" class="form-control" id="recipient-name" name="nombre" value="<?php echo $value['nombre'] ?>" required="">
                 <input type="hidden" name="idrol" id="idrol" value="<?php echo $value['id_rol']; ?>">
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-8">
               <div class="form-group">
                <label for="recipient-name" class="form-control-label">Descripción:</label>
                <input type="text" class="form-control" id="recipient-name" name="descripcion" value="<?php echo $value['descripcion'] ?>" required="">
              </div>
            </div>

          </div>

          <div class="row">
              <div class="col-md-8">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Estado:</label>
                    <select class="form-control chosen-select" id="activo" name="activo">
                     <option value=""  required="" >Seleccione una opción...</option>
                       <option value="1" <?php echo $value['activo'] == "1" ? 'selected' : ''   ?> > Activo</option>
                       <option value="0" <?php echo $value['activo'] == "0" ? 'selected' : '' ?>  > Desactivado</option>
                    </select>
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                   &nbsp;
                </div>
              </div>
          </div>

			       <button type="submit" name="editarRol" class="btn btn-primary">Guardar</button>

	      <?php endforeach ?>
         </form>
     </div>

        <div class="col-md-2">
          &nbsp;
        </div>
  </div>
        <br>
</div>

<?php

$eU = new RolesController();
$eU->editarRolesController();



 ?>