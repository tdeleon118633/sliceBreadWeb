<div class="modal fade" id="roles">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title">Nuevo Rol</h4>
					</div>
					<div class="modal-body">

          <form method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre:</label>
                <input type="text" class="form-control" id="recipient-name" name="nombre" required="">
              </div>
            </div>
            <div class="col-md-8">
             	<div class="form-group">
              	<label for="recipient-name" class="form-control-label">Descripción:</label>
							<input type="text" class="form-control" id="recipient-name" name="descripcion" required="">
            	</div>
            </div>
          </div>

				<div class="row">
		            <div class="col-md-6">
		             	<div class="form-group">
		              		<label for="recipient-name" class="form-control-label">Estado:</label>
								<select class="form-control chosen-select" id="activo" name="activo">
				        	   		<option value=""  required="" >Seleccione una opción...</option>
				            			 <option value="1"> Activo</option>
										 <option value="0"> Desactivado</option>
				        		</select>

		            	</div>
		            </div>
		        </div>

						<div class="row">
		            <div class="col-md-6">
		             <div class="form-group">

		            </div>
		            </div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		          <button type="submit" class="btn btn-primary" name="guardarRol">Guardar</button>
		          </form>
		        </div>
      		</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<?php

		 $roles = new RolesController();
		 $roles->ingresarRolescontroller();
     //$usuario->deleteUsuariosController();

		 ?>
