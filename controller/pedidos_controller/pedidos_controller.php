<?php

require_once $path_direccion.'/model/pedidos_model/pedidos_model.php';


//print_r($_POST);

 class PedidosController {
   //LISTA TODOS LOS USUARIOS
 	public function getPedidosController(){
		$respuesta = PedidosModel::getPedidosModel('usuarios');
    return $respuesta;
 	}

 	public function ingresarUsuariocontroller(){


 		if (isset($_POST['frmPedidos'])) {
				$datosController = array('IdCliente'=>$_POST['IdCliente'],
					                       'IdTiempoComida'=>$_POST['IdTiempoComida'],
															   'IdCombo'=>$_POST['IdCombo']
					                       );
      //print_r($datosController);
      reset($_POST);
      $Id_cliente = isset($_POST['IdCliente']) ? $_POST['IdCliente'] : "";
      $Id_tiempo_comida = isset($_POST['IdTiempoComida']) ? $_POST['IdTiempoComida'] : "";
      $Id_combo = isset($_POST['IdCombo']) ? $_POST['IdCombo'] : "";
      $intCorrelativo = PedidosModel::InsertPedidoCorrelativo();
      //print "XXXXXXX ".$intCorrelativo;
      while( $rTMP = each($_POST) ){
          $arrExplode = explode("_",$rTMP["key"]);
            //print_r($arrExplode[1]);
           if( $arrExplode[0] == "hdnProducto" && isset($arrExplode[1])  && isset($arrExplode[2])  ){
             //$inProduct = isset($_POST["hdnProducto_{$arrExplode[1]}_{$arrExplode[2]}"]) ? $_POST["hdnroducto_{$arrExplode[1]}_{$arrExplode[2]}"] : 0;
             //$inProduct = isset($_POST["hdnProducto_{$arrExplode[1]}"]) ? $_POST["hdnroducto_{$arrExplode[1]}"] : 0;
              $respuesta = PedidosModel::ingresarPedidosModel($intCorrelativo,$Id_cliente,$Id_tiempo_comida,$arrExplode[1],$arrExplode[2],1,'pedido');
            //  print $Id_cliente." - ".$Id_tiempo_comida." - ".$arrExplode[1]." - ".$arrExplode[2].' 1 - pedido |';
           }
            //  print "<br>";
      }

					#pedir la informacion al modelo.
		//	$respuesta = PedidosModel::ingresarPedidosModel($datosController , 'usuarios');
			//$respuesta = 'success';
				if ($respuesta == 'success') {
					//header('location:okUsuario');
				//	Conexion::fnt_alert_insertar();
				//  	header('location:pedidos_view.php');
           print '<meta http-equiv="Refresh" content="TIEMPO=10;url=pedidos_view.php"';

			//		header('location: '.$path_direccion);
				}
			else{
					header('location:reservas');

			   }
 			}
 	}


 	//borrar Usuario
   public function deleteUsuariosController(){
   	 if (isset($_GET['idBorrar'])) {
   	 	$datosController = $_GET['idBorrar'];
			PRINT "5465465";
   	 	$respuesta = UsuariosModel::deleteUsuariosModel($datosController, 'usuarios');
   	 	if ($respuesta == 'success') {
					Conexion::fnt_alert_borrar();
         print '<meta http-equiv="Refresh" content="TIEMPO=10;url=usuarios_view.php"';
   	 	}
   	 }

   }

   public function editarUsuariosController(){
		// print_r($_POST);
      if (isset($_POST['editarUsuario'])) {
       /*$datosController = array('nombres' => $_POST['nombres'],
                                 'apellidos'     => $_POST['apellidos'],
                                 'id_usuario'    => $_POST['id_usuario']);*/
				 $datosController = array('nombres'=>$_POST['nombres'],
 					                      'apellidos'=>$_POST['apellidos'],
 															'usuario'=>$_POST['usuario'],
 															'documento'=>$_POST['documento'],
 															'direccion'=>$_POST['direccion'],
 															'telefono'=>$_POST['telefono'],
 															'email'=>$_POST['email'],
 															'tipo'=>$_POST['tipo'],
															'id_usuario'=>$_POST['id_usuario'],
 															'password'=>$_POST['password']
 					                       );

       $respuesta = UsuariosModel::editarUsuariosModel($datosController , 'usuarios');
          if ($respuesta == 'success') {
								Conexion::fnt_alert_edicion();
								print '<meta http-equiv="Refresh" content="TIEMPO=10;url=usuarios_view.php"';
      	}
     }
   }

	 public function getUsuarioController($tabla,$idpedido,$idcliente){
	 		$respuesta = PedidosModel::getUsuarioModel($tabla,$idpedido,$idcliente);
			return $respuesta;
	 }

   public function getPedidoDetalleComboController($tabla,$idpedido,$idcliente){
      $respuesta = PedidosModel::getPedidoDetalleComboModel($tabla,$idpedido,$idcliente);
      return $respuesta;
   }

	 public function getSelectClienteController(){
		 $respuesta = PedidosModel::getSelectClienteModel('usuarios');
		 return $respuesta;
	 }

	 public function getSelectTiempoCodmidaController(){
		 $respuesta = PedidosModel::getSelectTiempoComidaModel('usuarios');
		 return $respuesta;
	 }


	 public function getSelectCombosController(){
		 //$respuesta = array();
	//	  if (isset($_POST['contentCombo'])) {
		     $respuesta = PedidosModel::getSelectCombosModel('usuarios');
				 print "hide";

		//	 }
		 return $respuesta;
	 }

 }

 ?>
