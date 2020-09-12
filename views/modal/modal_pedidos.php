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
                  <select class="form-control" id="IdCliente" name="IdCliente"  required="" >
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
                  <select class="form-control" id="IdTiempoComida" name="IdTiempoComida" required>
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
		                   <div class="form-group">
			                     <div class="col-xs-11" id="idResponsiv" style="height: 400px; background-color: #e7e7e7; border: 1px solid #ccc; overflow-x: hidden; overflow-y: visible;">
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
		        <div class="modal-footer">
		          <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		          <button type="submit" class="btn btn-primary" name="frmPedidos">Guardar</button>
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
       var intRubro = 1;
        function fntAgregar($intSumaTotal){
          //alert();

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
                                                      "<span id=\"imgDelete_"+intRubro+"\" onclick=\"fntDeleteRubroDetalle('"+intRubro+"');\" class=\"fa fa-trash-o btn btn-danger btn-sm\"></span>"+
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
             //arrSplitRubro = intRubro.split("_");
             //fntShowEliminarRelacionAnterior(intRubro);
             $("#divDetalle_"+intRubro).remove();
            // fntCalcularTotalPagosRubros();
             if(arrSplitRubro[0] != 0){
              //  $("#divPanelRubro_"+arrSplitRubro[0]+"_"+arrSplitRubro[1]).css("background-color","#ac162c");
             }
         }
     </script>
