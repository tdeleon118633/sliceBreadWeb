<?php
	require_once "global.php";
	class Conexion{
		public function conectar(){
			try {
				$conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME,'');
				return $conexion;
			} catch (Exception $e) {
				echo "ERROR DE CONEXION". $e->getMessage. $e->getLine;
			}
		}

		public function fnt_alert_insertar(){
						 echo '<center><div class="alert alert-success alert-dismissible fade in" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<strong>Exitos!! </strong>El Registro fue Insertado Satifactoriamente al sistema.
								</div>
							</center>';
		}

		public function fnt_alert_borrar(){

			echo '<center><div class="alert alert-danger alert-dismissible fade in" role="alert">
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
					 </button>
					 <strong>Exitos!! </strong>El Registro fue Borrado Satifactoriamente al sistema.
				 </div>
			 </center>';

		}

		public function fnt_alert_edicion(){

			echo '<center><div class="alert alert-success alert-dismissible fade in" role="alert">
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
					 </button>
					 <strong>Exitos!! </strong>El Registro fue Editado Satifactoriamente al sistema.
				 </div>
			 </center>';
		}
	}
?>
