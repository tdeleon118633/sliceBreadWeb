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
		 require_once('views/modules/combo/listado_combo.php');
		 //require_once 'Model/enlaces.php';
		 //require_once 'Model/usuariosModel/usuariosModel.php';
		 //require_once 'controller/usuarios_controller/usuarios_controller.php';
		 // $usuarios= new UsuariosController();
		//	$usuarios->getUsuariosController();

	 ?>
</section>