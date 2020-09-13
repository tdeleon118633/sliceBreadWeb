<?php
 class Tiempo_comidaModel{

      public function getTiempo_comidaModel($tabla){
  		 	$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
  		 	$sql->execute();
  		 	return $sql->fetchAll();
  		 	$sql->close();
		  }



      public function ingresarTiempo_comidaModel($datosModel , $tabla){

          $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
          //$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
          $activo= isset($_POST['activo']) ? $_POST['activo'] : "";
          //$id_usuario = $_SESSION['id_usuario'];
           $id_usuario = 1;
            //   print_r($_SESSION);
          //die();
        	$sql = Conexion::conectar()->prepare("INSERT INTO $tabla (
            nombre,activo,usuario_creacion,fecha_creacion)
               VALUES('{$nombre}',{$activo},{$id_usuario},NOW())");
   
          if ($sql->execute()) {
        		return 'success';

        	}
          else{
        		return 'error';
        	}

          $sql->close();
      }

      public function deleteTiempo_comidaModel($datosModel,$tabla){
        $sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_tiempo_comida = :id_tiempo_comida");

        $sql->bindParam(':id_tiempo_comida', $datosModel, PDO::PARAM_INT);

        if ($sql->execute()) {
           return 'success';
        }else{
          return 'Error';
        }

        $sql->close();
     }


  public function editarTiempo_comidaModel($datosModel , $tabla){
     $sql = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id_tiempo_comida = :id_tiempo_comida");

     $sql->bindParam(':nombre',$datosModel['nombre'] ,PDO::PARAM_STR);
     $sql->bindParam(':id_tiempo_comida',$datosModel['id_tiempo_comida'],PDO::PARAM_STR);

     if ($sql->execute()) {
       return 'success';
     }else{
      return 'error';
     }

     $sql->close();
  }




 }