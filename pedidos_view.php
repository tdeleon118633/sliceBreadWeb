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
		$idusuario = isset($_GET['idusuario']) ? intval($_GET['idusuario']) : 0;
		$idusuario = isset($_GET['action']) && $_GET['action'] == 'editarUsuarios' ? 1 : 0;

		$id_eliminar = isset($_GET['idBorrar']) ? intval($_GET['idBorrar']) : 0;
		$eliminar = isset($_GET['action']) && $_GET['action'] == 'usuarios' ? 1 : 0;

		 if( ($idusuario == 0 && $idusuario == 0) && ($eliminar == 0  && $id_eliminar == 0)  ){
		 		require_once('views/modules/pedidos/pedidos.php');
	   }
		 else if( $eliminar == 1  && $id_eliminar != 0 ){
			 require_once('views/modules/pedidos/pedidos.php');
			 $pedidos = new PedidosController();

			 $pedidos->deleteUsuariosController();
			 $test = $pedidos->getSelectCombosController();
			/* if( isset($_POST["editarUsuario"]) ){
					require_once('views/modules/usuarios/usuarios.php');
			 }
			 else{*/

			// }
			  // header('location:usuarios_view.php');
			 //
		 }
		 else{
			 require_once('views/modules/pedidos/editar_pedidos.php');
		 }

		 //require_once('views/modules/roles/listado_roles')
		 //require_once('views/modules/restaurantes/listado_restaurantes.php');
		 //require_once 'Model/enlaces.php';
		 //require_once 'Model/usuariosModel/usuariosModel.php';
		 //require_once 'controller/usuarios_controller/usuarios_controller.php';
		 // $usuarios= new UsuariosController();
		//	$usuarios->getUsuariosController();

	 ?>
</section>
