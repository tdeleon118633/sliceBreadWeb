<?php
 class RestaurantesModel{

      public function getRestaurantesModel($tabla){
  		 	$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
  		 	$sql->execute();
  		 	return $sql->fetchAll();
  		 	$sql->close();
		  }



      public function ingresarRestaurantesModel($datosModel , $tabla){

          $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
          $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
          $activo= isset($_POST['activo']) ? $_POST['activo'] : "";
          //$id_usuario = $_SESSION['id_usuario'];
           $id_usuario = 2;
            //   print_r($_SESSION);
          //die();
        	$sql = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,descripcion,activo,usuario_creacion,fecha_creacion)
               VALUES('{$nombre}','{$descripcion}',{$activo},{$id_usuario},NOW())");
   
          if ($sql->execute()) {
        		return 'success';

        	}
          else{
        		return 'error';
        	}

          $sql->close();
      }

      public function deleteRestaurantesModel($datosModel,$tabla){
        $sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_restaurantes = :id_restaurantes");

        $sql->bindParam(':id_restaurantes', $datosModel, PDO::PARAM_INT);

        if ($sql->execute()) {
           return 'success';
        }else{
          return 'Error';
        }

        $sql->close();
     }


  public function editarRestaurantesModel($datosModel , $tabla){
     $sql = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id_restaurantes = :id_restaurantes");

     $sql->bindParam(':nombre',$datosModel['nombre'] ,PDO::PARAM_STR);
     $sql->bindParam(':id_restaurantes',$datosModel['id_restaurantes'],PDO::PARAM_STR);

     if ($sql->execute()) {
       return 'success';
     }else{
      return 'error';
     }

     $sql->close();
  }




 }