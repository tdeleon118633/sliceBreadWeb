<?php
 class RolesModel{

      public function getRolesModel($tabla){
  		 	$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
  		 	$sql->execute();
  		 	return $sql->fetchAll();
  		 	$sql->close();
		  }


      public function ingresarRolesModel($datosModel , $tabla){

          $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
          $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
          $activo= isset($_POST['activo']) ? $_POST['activo'] : "";
          $id_usuario = 1;
         //$id_usuario = intval($_SESSION['id_usuario']);
          //$id_usuario = $_SESSION['id_usuario'];
          
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

      public function deleteRolesModel($datosModel,$tabla){

        $sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_rol = {$datosModel}");


        if ($sql->execute()) {
           return 'success';
          }
          else{
            return 'Error';
          }

          $sql->close();
      }


      public function editarRolesModel($datosModel , $tabla){

          $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
          $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
          $activo= isset($_POST['activo']) ? $_POST['activo'] : "";
          $id_rol= isset($_POST['idrol']) ? $_POST['idrol'] : 0;
          $id_usuario = 1;
          //$id_usuario= isset($_POST['id_usuario']) ? $_POST['id_usuario'] : "";
          //$id_usuario = $_SESSION['id_usuario'];
          
            //  print_r($_SESSION);
          //die();
          $sql = Conexion::conectar()->prepare("UPDATE $tabla SET nombre =  '{$nombre}', descripcion = '{$descripcion}', activo = {$activo}, usuario_modificacion = {$id_usuario}, fecha_modificacion = NOW() WHERE id_rol =  {$id_rol} ");
  

     if ($sql->execute()) {
       return 'success';
     }
     else{
      return 'error';
     }

     $sql->close();
      }


      public function getRolModel($tabla,$id_rol){
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_rol = $id_rol");
        $sql->execute();
        return $sql->fetchAll();
        $sql->close();
    }


 }