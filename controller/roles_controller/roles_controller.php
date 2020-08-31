<?php

	require_once $path_direccion.'/model/roles_model/roles_model.php';

 class RolesController {
   //LISTA TODOS LOS ROLES
 	public function getRolesController(){
		$respuesta = RolesModel::getRolesModel('roles');
    return $respuesta;
 	}

 	public function ingresarRolesController(){
	//	print_r($_POST);

 		if (isset($_POST['guardarRol'])) {
				$datosController = array('nombre'=>$_POST['nombre'],
					                      'descripcion'=>$_POST['descripcion'],
															'activo'=>$_POST['activo']
					                       );

					#pedir la informacion al modelo.
			$respuesta = RolesModel::ingresarRolesModel($datosController , 'roles');
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
   public function deleteRolesController(){
   	 if (isset($_GET['idBorrar'])) {
   	 	$datosController = $_GET['idBorrar'];

   	 	$respuesta = RolesModel::deleteRolesModel($datosController, 'roles');
   	 	if ($respuesta == 'success') {
         header('location:okBorrado');
   	 	}
   	 }

   }

   public function editarRolesController(){
      if (isset($_POST['editarrol'])) {
       $datosController = array('nombre' => $_POST['nombre'],
                                 'id_rol'    => $_POST['id_rol']);

       $respuesta = RolesModel::editarRolesModel($datosController , 'roles');

          if ($respuesta == 'success') {
         header('location:okEditadoRoles');

      }
     }



   }


 }

 ?>
