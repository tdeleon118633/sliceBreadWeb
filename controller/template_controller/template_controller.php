<?php

	require_once $path_direccion.'/model/template_model/template_model.php';

 class TemplateController {
   //LISTA TODOS LOS USUARIOS
 	public function getTemplateController(){
		$respuesta = TemplateModel::getTemplateModel('pedido');
    return $respuesta;
 	}

 	/*
 	public function ingresarUsuariocontroller(){
	//	print_r($_POST);

 		if (isset($_POST['guardarUsuario'])) {
				$datosController = array('nombres'=>$_POST['nombres'],
					                      'apellidos'=>$_POST['apellidos'],
															'usuario'=>$_POST['usuario'],
															'documento'=>$_POST['documento'],
															'direccion'=>$_POST['direccion'],
															'telefono'=>$_POST['telefono'],
															'email'=>$_POST['email'],
															'tipo'=>$_POST['tipo'],
															'password'=>$_POST['password']
					                       );

					#pedir la informacion al modelo.
			$respuesta = UsuariosModel::ingresarUsuariosModel($datosController , 'usuarios');
			//$respuesta = 'success';
				if ($respuesta == 'success') {
					//header('location:okUsuario');
					Conexion::fnt_alert_insertar();
					header('location:usuarios_view.php');

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
       /* $datosController = array('nombres' => $_POST['nombres'],
                                 'apellidos'     => $_POST['apellidos'],
                                 'id_usuario'    => $_POST['id_usuario']);
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
			// print_r($respuesta);
          if ($respuesta == 'success') {
								Conexion::fnt_alert_edicion();
								print '<meta http-equiv="Refresh" content="TIEMPO=10;url=usuarios_view.php"';
         			 //header('location:usuarios_view.php');

      	}
     }



   }

	 public function getUsuarioController($tabla,$id_usuario){
	 		$respuesta = UsuariosModel::getUsuarioModel($tabla,$id_usuario);
			return $respuesta;
	 }



*/

 }

 ?>
