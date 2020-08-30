		<div class="modal fade" id="usuarios">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title">Nuevo Usuario</h4>
					</div>
					<div class="modal-body">

          <form method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombres:</label>
                <input type="text" class="form-control" id="recipient-name" name="nombres" required="">
              </div>
            </div>
            <div class="col-md-6">
             <div class="form-group">
              <label for="recipient-name" class="form-control-label">Apellidos:</label>
							<input type="text" class="form-control" id="recipient-name" name="apellidos" required="">
            </div>
            </div>
          </div>
		        <div class="row">
		            <div class="col-md-6">
		             <div class="form-group">
		              <label for="recipient-name" class="form-control-label">Usuario :</label>
		              <input type="text" class="form-control" id="recipient-name" name="usuario" required="">
		            </div>
		            </div>
		            <div class="col-md-6">
		             <div class="form-group">
		              <label for="recipient-name" class="form-control-label">Documento:</label>
		              <input type="text" class="form-control" id="recipient-name" name="documento" required="">
		            </div>
		            </div>
		        </div>

						<div class="row">
		            <div class="col-md-6">
		             <div class="form-group">
		              <label for="recipient-name" class="form-control-label">Direccion :</label>
		              <input type="text" class="form-control" id="recipient-name" name="direccion" required="">
		            </div>
		            </div>
		            <div class="col-md-6">
		             <div class="form-group">
		              <label for="recipient-name" class="form-control-label">Telefono:</label>
		              <input type="text" class="form-control" id="recipient-name" name="telefono" required="">
		            </div>
		            </div>
		        </div>

						<div class="row">
		            <div class="col-md-6">
		             <div class="form-group">
		              <label for="recipient-name" class="form-control-label">Correo :</label>
		              <input type="email" class="form-control" id="recipient-name" name="email" required="">
		            </div>
		            </div>
		            <div class="col-md-6">
		             <div class="form-group">
		              <label for="recipient-name" class="form-control-label">Tipo:</label>
									<select class="form-control chosen-select" id="tipo" name="tipo">
				           <option value=""  required="" >Seleccione una opción...</option>
				             <option value="admin"> Administrador</option>
										 <option value="normal"> Normal</option>
				        </select>

		            </div>
		            </div>
		        </div>

						<div class="row">
		            <div class="col-md-6">
		             <div class="form-group">
		              <label for="recipient-name" class="form-control-label">Contraseña :</label>
 									<input type="text" class="form-control" id="recipient-name" name="password" required="">
		            </div>
		            </div>
		            <div class="col-md-6">
		             <div class="form-group">

		            </div>
		            </div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		          <button type="submit" class="btn btn-primary" name="guardarUsuario">Guardar</button>
		          </form>
		        </div>
      		</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<?php

		 $usuario = new UsuariosController();
		 $usuario->ingresarUsuariocontroller();
     //$usuario->deleteUsuariosController();

		 ?>
