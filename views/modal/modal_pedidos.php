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
                  </select>
                </div>
               </div>
               <div class="col-md-6">
                <div class="form-group selector-combo"  >
                   <label for="recipient-name" class="form-control-label">VACIO:</label>
                 </div>
                </div>
            </div>

               <div class="row" id="id_detalle_g" >
                    <div class="col-md-6"  >
                      <div class="form-group"  >
                        <div style="height: 300px; border: 1px solid" id="divProgramaCurso">
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6"  >
                                <!--  <div class="form-group">
                                        <div class="col-lg-12" style="">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div id="divGeneral" class="col-xs-12" style="height: 600px; background-color: #e7e7e7; border: 1px solid #ccc; overflow-x: hidden; overflow-y: visible;">
                                                        <div class="form-group" id="divDetalleMasivo">
                                                            <div class="col-xs-12">
                                                                <div class="form-group" id="divDetalle">
                                                                    <div class="col-xs-12">
                                                                        <div class="col-xs-1" style="width: 2%">&nbsp;</div>
                                                                        <div class="col-xs-11 main-color-fondo" style="color: #fff;">
                                                                            <div class="col-xs-5 text-center">
                                                                              A
                                                                            </div>
                                                                            <div class="col-xs-3 text-left">
                                                                              A
                                                                            </div>
                                                                            <div class="col-xs-3 text-right">
                                                                              A
                                                                            </div>
                                                                            <div class="col-xs-1">&nbsp;</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12" id="divEstudiantes">&nbsp;</div>
                                    </div>-->
                                     <div class="form-group">
                                       <div class="col-xs-11" id="idResponsiv" style="height: 675px; background-color: #e7e7e7; border: 1px solid #ccc; overflow-x: hidden; overflow-y: visible;">
                                       <div class="form-group" id="idWidth">


                                                  <div class="form-group">
                                                      <div class="col-xs-12">
                                                        <table class="table table-bordered"   id="divDetalle" >
                                                          <thead  class="bg-primary">
                                                            <tr>
                                                              <td align="center" style="width: 50px">&nbsp;</td>
                                                              <td align="center" style="width: 30px">Total</td>
                                                              <td align="center" style="width: 30px">Cantidad</td>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                  </div>


                                        </div>
                                    </div>
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
      $("#divLineaDivisora").hide();
      $("#divGeneral").addClass("table-responsive");
      $("#divDetalleMasivo").css("width","350px");
      $("#divGeneral").css("overflow-x","");
      $("#divGeneral").css("overflow-y","");
      $("#divGeneral").css("overflow-y","visible");

      $("#IdTiempoComida").change(function() {
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
                     $("#id_detalle_g").hide();
                 }
         });
      });

      $("#id_detalle_g").hide();
      $("#IdCombo").change(function() {
           if( $(this).val() > 0 ){
              console.log("Si");
              $("#id_detalle_g").show();
              fntGetDetalle();
           }
           else{
             $("#id_detalle_g").hide();
           }
        });


        function fntGetDetalle(){
            $.ajax({
                   url: "http://localhost/sliceBreadWeb/views/modal/modal_pedidos0.php",
                   async: false,
                   data:{
                       "contentDetalle" : true,
                       "tiempo_comida" : $("#IdTiempoComida").val(),
                       "IdCombo" : $("#IdCombo").val()
                   },
                   type:'post',
                   dataType:'html',
                   beforeSend:function(){
                   },
                   success:function(data){
                       $("#divProgramaCurso").html("");
                       $("#divProgramaCurso").html(data);
                   }
               });
        }

        function fntAgregar($intSumaTotal){
          //alert();
          var intRubro = 1;
          var strNombreRubro = "";
          var strHtmlInputText = "";
          var boolExistenDetalles = false;
          var strCombo = $( "#IdCombo option:selected" ).text();;





                                      strHtml = "<tr  style=\"border-bottom: 1px solid #929496;\" id=\"divDetalle_"+intRubro+"\" >"+
                                                    "<td class=\" text-left\">"+
                                                        strCombo+
                                                    "</td>"+
                                                    "<td class=\" text-left\">"+
                                                        $intSumaTotal+
                                                    "</td>"+
                                                    "<td>"+
                                                      "<span id=\"imgDelete_0_18_1\" onclick=\"fntDeleteRubroDetalle('"+intRubro+"');\" class=\"glyphicon glyphicon-trash glyphicon-color btn-md cursor\"></span>"+
                                                    "</td>"+
                                               "</tr>";
                   if(boolExistenDetalles){
                       $("#divDetalle_"+intRubro).append(strHtml);
                   }
                   else{
                       $("#divDetalle").append(strHtml);
                   }

                   intRubro ++;
        }

        function fntDeleteRubroDetalle(intRubro){
             arrSplitRubro = intRubro.split("_");
             fntShowEliminarRelacionAnterior(intRubro);
             $("#divDetalle_"+intRubro).remove();
             fntCalcularTotalPagosRubros();
             if(arrSplitRubro[0] != 0){
                $("#divPanelRubro_"+arrSplitRubro[0]+"_"+arrSplitRubro[1]).css("background-color","#ac162c");
             }
         }
     </script>
