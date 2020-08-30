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

		public function fntInsertado(){
						 echo '<center><div class="alert alert-success alert-dismissible fade in" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<strong>Exitos!! </strong>Registro guardado
								</div>
							</center>';
		}
	}
?>
