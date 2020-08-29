<?php session_start();
print $_SESSION['usuario'];
if (!isset($_SESSION['usuario'])  && $_GET["action"] != "salir" ) {
	header('location:Views/login/login.php');
}else{
	//print "INDEX"."<BR>";
 //print_r($_GET);
 	if( isset($_GET["action"]) && $_GET["action"] == "index" || isset($_GET["action"])  && $_GET["action"] == "index.php"   ){
			require 'views/template.php';

			$index = new MvcController();
			$index->plantilla();


	}
	else if(isset($_GET["action"]) && $_GET["action"] == "salir" ){
header("Location: Views/login/login.php");
		 session_destroy();

		/*	print '<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-3">Haz Salido de la Aplicacion Suerte.!</h1>
				    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
				  </div>
				</div>';*/


	}


}
