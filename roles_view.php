<?php  require 'views/header/menu.php'; ?>
<br>
<section>
	<?php
		$path_direccion = dirname(__FILE__);
		require_once $path_direccion.'/config/Conexion.php';
	 	// print "VISTA/CONTROLLDOR/MODELO"."<br>";
	  // print_r($_GET);
		// require_once 'model/usuariosModel/usuariosModel.php';
    //	require 'controller/usuarios_controller/usuarios_controller.php';
		 print_r($_POST);
		$id_rol = isset($_GET['id_rol']) ? intval($_GET['id_rol']) : 0;
		$id_rol = isset($_GET['action']) && $_GET['action'] == 'editar_roles' ? 1 : 0;

		$id_eliminar = isset($_GET['idBorrar']) ? intval($_GET['idBorrar']) : 0;
		$eliminar = isset($_GET['action']) && $_GET['action'] == 'roles' ? 1 : 0;

		 if( ($id_rol == 0 && $id_rol == 0) && ($eliminar == 0  && $id_eliminar == 0)  ){
		 		require_once('views/modules/roles/listado_roles.php');
	   }
		 else if( $eliminar == 1  && $id_eliminar != 0 ){
			 require_once('views/modules/roles/listado_roles.php');
			 $rol = new RolesController();
			 $rol->deleteRolesController();
			/* if( isset($_POST["editarUsuario"]) ){
					require_once('views/modules/usuarios/usuarios.php');
			 }
			 else{*/

			// }
			  // header('location:usuarios_view.php');
			 //
			}
		 else{
		 require_once('/views/modules/roles/editar_roles.php');
		}
		 //require_once 'Model/enlaces.php';
		 //require_once 'Model/usuariosModel/usuariosModel.php';
		 //require_once 'controller/usuarios_controller/usuarios_controller.php';
		 // $usuarios= new UsuariosController();
		//	$usuarios->getUsuariosController();

	 ?>
</section>