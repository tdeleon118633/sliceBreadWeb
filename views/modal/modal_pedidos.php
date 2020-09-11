<?php
 //require_once 'Views/modules/ventas/conexion.php';
 //print_r($_GET);
 		//$idusuario = isset($_GET['idusuario']) ? $_GET['idusuario'] : 123;
		//print "total 44: ".$idusuario;
    //$path_direccion = dirname(__FILE__);
    //$test = $path_direccion.'/controller/pedidos_controller/pedidos_controller.php';
    // $consulta = $conexion->query("SELECT * FROM usuarios WHERE idusuario = $idusuario");
?>

		<div class="modal fade " id="pedidos">
			<div class="modal-dialog modal-lg  " role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title">Nuevo Pedido <?php print $test;   print $idusuario; ?> </h4>
					</div>
					<div class="modal-body">
          <form method="post"  >
	          <div class="row">
	          	<div class="col-md-6">
	              <div class="form-group">
	                <label for="recipient-name" class="form-control-label">Cliente:</label>
                  <select class="form-control" required="" >
                    <option value="0">Seleccione:</option>
                    <?php
                    	$select_cliente =  $usuarios->getSelectClienteController();
                    	foreach ($select_cliente as $row) {
                          echo '<option value="'.$row["id_usuario"].'">'.$row["nombres"].'</option>';
                      }
                    ?>
                  </select>
	              </div>
	            </div>
	            <div class="col-md-6">
		             <div class="form-group">
		              <label for="recipient-name" class="form-control-label">Tiempo Comida:</label>
                  <select class="form-control" id="IdTiempoComida" name="IdTiempoComida" required="" >
                    <option value="0">Seleccione:</option>
                    <?php
                    	$select_combos =  $usuarios->getSelectTiempoCodmidaController();
                      //print_r($select_combos);
                    	foreach ($select_combos as $row) {
                          echo '<option value="'.$row["id_tiempo_comida"].'">'.$row["nombre"].'</option>';
                      }
                    ?>
                  </select>
		            </div>
	            </div>
	          </div>
            <div class="row">
             <div class="col-md-6">
               <div class="form-group selector-combo"  >
                  <label for="recipient-name" class="form-control-label">Combos:</label>
                  <select class="form-control" required="" id="IdCombo"  name="IdCombo" >
                    <option value="0">Seleccione:</option>
                    <?php
                      $select_combos =  $usuarios->getSelectCombosController();
                      // Realizamos la consulta para extraer los datos
                      //foreach ($select_combos as $row) {
                          // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                        //  echo '<option value="'.$row["id_combo"].'">'.$row["nombre"].'</option>';
                      //}
                    ?>
                  </select>
                </div>
               </div>
               </div>

               <div class="row">
                <div class="col-md-6">
                  <div class="form-group" style="height: 160px; border: 1px solid">

                  </div>
                  </div>
                  </div>

		        <!--<div class="row">
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
	 										<input type="password" class="form-control" id="recipient-name" name="password" required="">
			            </div>
		            </div>
		            <div class="col-md-6">
			             <div class="form-group">
										 &nbsp;
			            </div>
		            </div>
		        </div>-->
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

		 $pedidos = new PedidosController();
		 $test = $pedidos->getSelectCombosController();
     //$usuario->deleteUsuariosController();

		 ?>

     <script>

      $("#IdTiempoComida").change(function() {
    //  alert($("#IdTiempoComida").val());
      $.ajax({

               url: "http://localhost/sliceBreadWeb/views/modal/modal_pedidos0.php",
                //url: "http://localhost/sliceBreadWeb/controller/pedidos_controller/pedidos_controller.php?contentCombo=true",
               data:{
                   "contentCombo" : "true",
                   "tiempo_comida" : $("#IdTiempoComida").val()
               },
                type: "POST",
               success: function(response)
               {
                  console.log(response);
                   $('.selector-combo select').html(response).fadeIn();
               }
       });
      });
     </script>
