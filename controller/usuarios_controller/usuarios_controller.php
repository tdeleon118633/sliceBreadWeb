<?php

	require_once $path_direccion.'/model/usuariosModel/usuariosModel.php';

 class UsuariosController {
   //LISTA TODOS LOS USUARIOS
 	public function getUsuariosController(){
		$respuesta = UsuariosModel::getUsuariosModel('usuarios');
    return $respuesta;
 	}

 	public function ingresarUsuariocontroller(){
		print_r($_POST);
		
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

 			if ($respuesta == 'success') {
 				header('location:okUsuario');
 			}else{
 				header('location:reservas');

 		   }
 			}
 	}


 	//borrar Usuario
   public function deleteUsuariosController(){
   	 if (isset($_GET['idBorrar'])) {
   	 	$datosController = $_GET['idBorrar'];

   	 	$respuesta = UsuariosModel::deleteUsuariosModel($datosController, 'usuarios');
   	 	if ($respuesta == 'success') {
         header('location:okBorrado');
   	 	}
   	 }

   }

   public function editarUsuariosController(){
      if (isset($_POST['editarUsuario'])) {
       $datosController = array('nombreusuario' => $_POST['nombreusuario'],
                                 'password'     => $_POST['password'],
                                 'idusuario'    => $_POST['idusuario']);

       $respuesta = UsuariosModel::editarUsuariosModel($datosController , 'usuarios');

          if ($respuesta == 'success') {
         header('location:okEdiatdoUsuarios');

      }
     }



   }


 }

 ?>
