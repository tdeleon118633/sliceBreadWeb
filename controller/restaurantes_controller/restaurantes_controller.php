<?php

	require_once $path_direccion.'/model/restaurantes_model/restaurantes_model.php';

 class RestaurantesController {
   //LISTA TODOS LOS RESTAURANTES
 	public function getRestaurantesController(){
		$respuesta = RestaurantesModel::getRestaurantesModel('restaurantes');
    return $respuesta;
 	}

 	public function ingresarRestaurantesController(){
	//	print_r($_POST);

 		if (isset($_POST['guardarRestaurantes'])) {
				$datosController = array('nombre'=>$_POST['nombre'],
					                      'descripcion'=>$_POST['descripcion'],
															'activo'=>$_POST['activo']
					                       );

					#pedir la informacion al modelo.
			$respuesta = RestaurantesModel::ingresarRestaurantesModel($datosController , 'restaurantes');
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


 	//borrar Usuario
   public function deleteRestaurantesController(){
   	 if (isset($_GET['idBorrar'])) {
   	 	$datosController = $_GET['idBorrar'];

   	 	$respuesta = RestaurantesModel::deleteRestaurantesModel($datosController, 'restaurantes');
   	 	if ($respuesta == 'success') {
         header('location:okBorrado');
   	 	}
   	 }

   }

   public function editarRestaurantesController(){
      if (isset($_POST['editarrestaurantes'])) {
       $datosController = array('nombre' => $_POST['nombre'],
                                 'id_restaurantes'    => $_POST['id_restaurantes']);

       $respuesta = RestaurantesModel::editarRestaurantesModel($datosController , 'restaurantes');

          if ($respuesta == 'success') {
         header('location:okEditadoRestaurantes');

      }
     }



   }


 }

 ?>