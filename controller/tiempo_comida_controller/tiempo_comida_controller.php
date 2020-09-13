<?php

	require_once $path_direccion.'/model/tiempo_comida_model/tiempo_comida_model.php';

 class Tiempo_comidaController {
   //LISTA TODAS LAS CATEGORIAS
 	public function getTiempo_comidaController(){
		$respuesta = Tiempo_comidaModel::getTiempo_comidaModel('tiempo_comida');
    return $respuesta;
 	}

 	public function ingresarTiempo_comidaController(){
	//	print_r($_POST);

 		if (isset($_POST['guardarTiempo_comida'])) {
				$datosController = array('nombre'=>$_POST['nombre'],
															'activo'=>$_POST['activo']
					                       );

					#pedir la informacion al modelo.
			$respuesta = Tiempo_comidaModel::ingresarTiempo_comidaModel($datosController ,'Tiempo_comida');
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
   public function deleteTiempo_comidaController(){
   	 if (isset($_GET['idBorrar'])) {
   	 	$datosController = $_GET['idBorrar'];

   	 	$respuesta = Tiempo_comidaModel::deleteTiempo_comidaModel($datosController, 'tiempo_comida');
   	 	if ($respuesta == 'success') {
         header('location:okBorrado');
   	 	}
   	 }

   }

   public function editarTiempo_comidaController(){
      if (isset($_POST['editartiempo_comida'])) {
       $datosController = array('nombre' => $_POST['nombre'],
                                 'id_tiempo_comida'    => $_POST['id_tiempo_comida']);

       $respuesta = Tiempo_comidaModel::editarTiempo_comidaModel($datosController , 'tiempo_comida');

          if ($respuesta == 'success') {
         header('location:okEditadoTiempo_comida');

      }
     }



   }


 }

 ?>