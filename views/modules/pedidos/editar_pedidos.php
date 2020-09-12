

<?php
//print_r($_GET);
 //require_once 'Views/modules/ventas/conexion.php';
 	  require_once $path_direccion.'/controller/pedidos_controller/pedidos_controller.php';
    $idpedido = $_GET['idPedido'];
    $idcliente = $_GET['idCliente'];
    $usuarios= new PedidosController();
    $consulta =  $usuarios->getUsuarioController("usuarios",$idpedido,$idcliente);
    print "<pre>";
    //print_r($consulta);
    print "</pre>";
    //$consulta = getUsuarios("usuarios",$idusuario);
  //  print_r($_GET);
  //print_r($consulta);
   /*-$arrData = array();
   foreach ($consulta as $row => $value2){
      $arrData["cod_pedido"] = $value2["cod_pedido"];
      $arrData["id_cliente"] = $value2["id_cliente"];
      $arrData["id_tiempo_comida"] = $value2["id_tiempo_comida"];
   }*/

  // print_r($arrData);
?>



<div class="container">
	<ol class="breadcrumb">
	   <li class="breadcrumb-item active"><i class="fa fa-list"> </i>EDITAR PEDIDO </li>
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
                <label for="recipient-name" class="form-control-label">Cliente:</label>
                <select class="form-control" id="IdCliente" name="IdCliente"  required="" >
                  <option value="0">Seleccione:</option>
                  <?php
                    $select_cliente =  $usuarios->getSelectClienteController();
                  //  print_r($select_cliente);
                    foreach ($select_cliente as $row) {
                        $strSelect = $value['id_cliente'] == $row["id_usuario"] ? 'selected' : '';
                        echo '<option value="'.$row["id_usuario"].'"  '.$strSelect.'   >'.$row["nombres"].'</option>';
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
                    foreach ($select_combos as $row) {
                           $strSelect = $value['id_tiempo_comida'] == $row["id_tiempo_comida"] ? 'selected' : '';
                        echo '<option value="'.$row["id_tiempo_comida"].'" '.$strSelect.' >'.$row["nombre"].'</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
          </div>
             <div class="row" id="id_detalle_g" >
                  <div class="col-md-12"  >
                    <div class="form-group"  >
                      <div style="height: 300px; border: 1px solid" id="divProgramaCurso">
                        <?php
                          /*
                            $pedidos_detalle =  $usuarios->getPedidoDetalleComboController("usuarios",$idpedido,$idcliente);
                            foreach ($pedidos_detalle as $row) {

                                echo '<input type="text" value="'.$row["id_combo"].'" '.$strSelect.' >';
                            }*/
                         ?>
                      </div>
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
<script>
 $("#divLineaDivisora").hide();
 $("#divGeneral").addClass("table-responsive");
 $("#divDetalleMasivo").css("width","350px");
 $("#divGeneral").css("overflow-x","");
 $("#divGeneral").css("overflow-y","");
 $("#divGeneral").css("overflow-y","visible");



// $("#id_detalle_g").hide();
 $("#IdCombo").change(function() {
      if( $(this).val() > 0 ){
         console.log("Si");
         //$("#id_detalle_g").show();
         fntGetDetalle();
      }
      else{
      //  $("#id_detalle_g").hide();
      }
   });


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
<?php

//$eU = new UsuariosController();
//$eU->editarUsuariosController();



 ?>
