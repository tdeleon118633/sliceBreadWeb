<?php  require 'views/header/menu.php'; ?>
<br>
<section>
	<?php
		$path_direccion = dirname(__FILE__);
		require_once $path_direccion.'/config/Conexion.php';
		print_r($_POST);
		$idusuario = isset($_GET['idusuario']) ? intval($_GET['idusuario']) : 0;
		$idusuario = isset($_GET['action']) && $_GET['action'] == 'editar_permisos_usuario' ? 1 : 0;

		$id_eliminar = isset($_GET['idBorrar']) ? intval($_GET['idBorrar']) : 0;
		$eliminar = isset($_GET['action']) && $_GET['action'] == 'usuarios' ? 1 : 0;

		 if( ($idusuario == 0 && $idusuario == 0) && ($eliminar == 0  && $id_eliminar == 0)  ){
		 		require_once('views/modules/permisos_usuario/permisos_usuario.php');
	   }
		 else if( $eliminar == 1  && $id_eliminar != 0 ){
			 require_once('views/modules/permisos_usuario/permisos_usuario.php');
			 $usuario = new PermisosUsuarioController();
			 $usuario->deletePermisosUsuarioController();
			}
		 else{
		 require_once('/views/modules/permisos_usuario/editar_permisos_usuario.php');
		}

	 ?>
</section>