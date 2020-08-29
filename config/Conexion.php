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
	}
?>
