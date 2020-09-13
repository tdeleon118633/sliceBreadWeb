<?php

	require_once $path_direccion.'/model/combo_model/combo_model.php';

 class ComboController {
   //LISTA TODAS LAS CATEGORIAS
 	public function getComboController(){
		$respuesta = ComboModel::getComboModel('combo');
    return $respuesta;
 	}

 	public function ingresarComboController(){
	//	print_r($_POST);

 		if (isset($_POST['guardarCombo'])) {
				$datosController = array('nombre'=>$_POST['nombre'],
															'activo'=>$_POST['activo']
					                       );

					#pedir la informacion al modelo.
			$respuesta = ComboModel::ingresarComboModel($datosController ,'Combo');
			//$respuesta = 'success';
				if ($respuesta == 'success') {
					//header('location:okUsuario');
					Conexion::fntInsertado();
				}
			else{
					header('location:reservas');

			   }
 			}
 	}


 	//borrar categorias
   public function deleteComboController(){
   	 if (isset($_GET['idBorrar'])) {
   	 	$datosController = $_GET['idBorrar'];

   	 	$respuesta = ComboModel::deleteComboModel($datosController, 'combo');
   	 	if ($respuesta == 'success') {
         header('location:okBorrado');
   	 	}
   	 }

   }

   public function editarComboController(){
      if (isset($_POST['editarcombo'])) {
       $datosController = array('nombre' => $_POST['nombre'],
                                 'id_combo'    => $_POST['id_combo']);

       $respuesta = ComboModel::editarComboModel($datosController , 'combo');

          if ($respuesta == 'success') {
         header('location:okEditadoCombo');

      }
     }



   }


 }

 ?>