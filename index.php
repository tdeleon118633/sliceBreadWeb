<?php session_start();
print $_SESSION['usuario'];
if (!isset($_SESSION['usuario'])  && $_GET["action"] != "salir" ) {
	header('location:Views/login/login.php');
}else{
	//print "INDEX"."<BR>";
 //print_r($_GET);
 	if( isset($_GET["action"]) && $_GET["action"] == "index" || isset($_GET["action"])  && $_GET["action"] == "index.php"   ){

 			?>
 			<!-- <link rel="stylesheet" href="public/css/bootstrap.min.css">
 			<link rel="stylesheet" href="public/css/font-awesome.css">
 		    <link rel="stylesheet" href="public/css/AdminLTE.min.css"> -->
 			<?php
 			require_once 'config/Conexion.php';
 			 require_once 'model/template_model/template_model.php';
			require 'views/template.php';
			?>
 			<!-- <script src="public/js/jquery-3.1.1.min.js"></script>-->
    <!-- Bootstrap 3.3.5 -->
    <!-- AdminLTE App -->
   <!-- <script src="public/js/app.min.js"></script>
     <script src="public/js/bootbox.min.js"></script> 
    <script src="public/js/bootstrap-select.min.js"></script> -->

 			<?php

			$index = new MvcController();
			$index->plantilla();


	}
	if( isset($_SESSION['usuario']) && isset($_GET["action"]) && $_GET["action"] == "Salir" ){
 			session_destroy();
		  header("Location: Views/login/login.php");


		/*	print '<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-3">Haz Salido de la Aplicacion Suerte.!</h1>
				    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
				  </div>
				</div>';*/


	}


}
