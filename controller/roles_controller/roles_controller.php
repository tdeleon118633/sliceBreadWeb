<?php

	require_once $path_direccion.'/model/roles_model/roles_model.php';

 class RolesController {
   //LISTA TODOS LOS ROLES
 	                          public function getRolesController(){
		                       $respuesta = RolesModel::getRolesModel('roles');
                           return $respuesta;
                    	}

    	public function ingresarRolController(){
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
					             Conexion::fnt_alert_insertar();
                       header('location:roles_view.php');
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
        Conexion::fnt_alert_borrar();
         print '<meta http-equiv="Refresh" content="TIEMPO=10;url=roles_view.php"';
   	 	}
   	 }

   }

  public function editarRolesController(){
  print_r($_POST);

              if (isset($_POST['editarRol'])) {
       
                        $datosController = array('nombre'=>$_POST['nombre'],
                                                  'descripcion'=>$_POST['descripcion'],
                                                  'activo'=>$_POST['activo']
                                                 );

          #pedir la informacion al modelo.
                $respuesta = RolesModel::editarRolesModel($datosController , 'roles');
      //$respuesta = 'success';
                  if ($respuesta == 'success') {
                     Conexion::fnt_alert_edicion();
                     print '<meta http-equiv="Refresh" content="TIEMPO=10;url=roles_view.php"';
                     }

                }

  }

   public function getRolController($tabla,$id_rol){
      $respuesta = RolesModel::getRolModel($tabla,$id_rol);
      return $respuesta;
   }

 }

 ?>
