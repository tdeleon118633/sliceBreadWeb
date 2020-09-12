

<?php
print_r($_GET);
 //require_once 'Views/modules/ventas/conexion.php';
 	  require_once $path_direccion.'/controller/pedidos_controller/pedidos_controller.php';
    $idusuario = $_GET['idPedido'];
    $usuarios= new PedidosController();
    $consulta =  $usuarios->getUsuarioController("usuarios",$idusuario);
    //$consulta = getUsuarios("usuarios",$idusuario);
  //  print_r($_GET);
?>


<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i>EDITAR USUARIOS </li>
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
                <label for="recipient-name" class="form-control-label">Nombres:</label>
                <input type="text" class="form-control" id="recipient-name" name="nombres" value="<?php echo $value['nombres'] ?>" required="">
                 <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $value['id_usuario']; ?>">
              </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                <label for="recipient-name" class="form-control-label">Apellidos:</label>
                <input type="text" class="form-control" id="recipient-name" name="apellidos" value="<?php echo $value['apellidos'] ?>" required="">
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Usuario :</label>
                    <input type="text" class="form-control" id="recipient-name" name="usuario" value="<?php echo $value['usuario'] ?>" required="">
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Documento:</label>
                    <input type="text" class="form-control" id="recipient-name" name="documento" value="<?php echo $value['documento'] ?>" required="">
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Direccion :</label>
                    <input type="text" class="form-control" id="recipient-name" name="direccion" value="<?php echo $value['direccion'] ?>" required="">
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Telefono:</label>
                    <input type="text" class="form-control" id="recipient-name" name="telefono" value="<?php echo $value['telefono'] ?>" required="">
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Correo :</label>
                    <input type="email" class="form-control" id="recipient-name" name="email" value="<?php echo $value['email'] ?>" required="">
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Tipo:</label>
                    <select class="form-control chosen-select" id="tipo" name="tipo">
                     <option value=""  required="" >Seleccione una opción...</option>
                       <option value="admin" <?php echo $value['tipo'] == 'admin' ? 'selected' : ''   ?> > Administrador</option>
                       <option value="normal" <?php echo $value['tipo'] == 'normal' ? 'selected' : '' ?>  > Normal</option>
                    </select>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Contraseña :</label>
                    <input type="password" class="form-control" id="recipient-name" name="password" required="">
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                   &nbsp;
                </div>
              </div>
          </div>

			       <button type="submit" name="editarUsuario" class="btn btn-primary">Guardar</button>

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

//$eU = new UsuariosController();
//$eU->editarUsuariosController();



 ?>
