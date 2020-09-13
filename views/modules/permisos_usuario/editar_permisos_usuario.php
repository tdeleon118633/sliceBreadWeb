

<?php
  require_once $path_direccion.'/controller/permisos_usuario_controller/permisos_usuario_controller.php';
    $idusuario = $_GET['idusuario'];
    $usuarios= new PermisosUsuarioController();
    $consulta =  $usuarios->getPermisoUsuarioController("permisos_usuario",$idusuario);
?>


<div class="container">
  <ol class="breadcrumb">
     <li class="breadcrumb-item active"><i class="fa fa-list"> </i>Editar Roles y Perfiles </li>
  </ol>
  <div class="row">
    <div class="col-md-2">
      &nbsp;
    </div>
     <div class="col-md-8">
        <form method="post">
        <?php foreach ($consulta as $row => $value): ?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Actualizar:</label>
                <input type="text" class="form-control" id="recipient-name" name="actualizar" value="<?php echo $value['actualizar'] ?>" required="">
                 <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $value['id_usuario']; ?>">
              </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                <label for="recipient-name" class="form-control-label">Agregar:</label>
                <input type="text" class="form-control" id="recipient-name" name="agregar" value="<?php echo $value['agregar'] ?>" required="">
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Eliminar:</label>
                    <input type="text" class="form-control" id="recipient-name" name="eliminar" value="<?php echo $value['eliminar'] ?>" required="">
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Visualizar:</label>
                    <input type="text" class="form-control" id="recipient-name" name="visualizar" value="<?php echo $value['visualizar'] ?>" required="">
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Rol:</label>
                    <input type="text" class="form-control" id="recipient-name" name="id_rol" value="<?php echo $value['id_rol'] ?>" required="">
                </div>
              </div>
 
          </div>
          <div class="row">

              <div class="col-md-6">
                 <div class="form-group">
                   &nbsp;
                </div>
              </div>
          </div>

             <button type="submit" name="editar_permisos_usuario" class="btn btn-primary">Guardar</button>

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

$eU = new PermisosUsuarioController();
$eU->editarPermisoUsuarioController();



 ?>