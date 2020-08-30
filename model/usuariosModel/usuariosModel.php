<?php
 class UsuariosModel{

      public function getUsuariosModel($tabla){
  		 	$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla");
  		 	$sql->execute();
  		 	return $sql->fetchAll();
  		 	$sql->close();
		  }



      public function ingresarUsuariosModel($datosModel , $tabla){

          $nombre = isset($_POST['nombres']) ? $_POST['nombres'] : "";
          $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : "";
          $usuario= isset($_POST['usuario']) ? $_POST['usuario'] : "";
          $documento = isset($_POST['documento']) ? $_POST['documento'] : "";
          $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : "";
          $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
          $email = isset($_POST['email']) ? $_POST['email'] : "";
          $tipo= isset($_POST['tipo']) ? $_POST['tipo'] : "";
          $password = isset($_POST['password']) ? hash("SHA256", $_POST['password']): "";
          $usuario_creacion= isset($_POST['usuario_creacion']) ? $_POST['usuario_creacion'] : "";
          $fecha_creacion = isset($_POST['fecha_creacion']) ? $_POST['fecha_creacion'] : "";

        	$sql = Conexion::conectar()->prepare("INSERT INTO $tabla (nombres,apellidos,usuario,documento,direccion,telefono,email,tipo,password,usuario_creacion,fecha_creacion)
               VALUES('{$nombre}','{$apellidos}','{$usuario}','{$documento}','{$direccion}','{$telefono}','{$email}','{$tipo}','{$password}',1,NOW())");

          if ($sql->execute()) {
        		return 'success';
        	}
          else{
        		return 'error';
        	}

          $sql->close();
      }

      public function deleteUsuariosModel($datosModel,$tabla){
        $sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idusuario = :idusuario");

        $sql->bindParam(':idusuario', $datosModel, PDO::PARAM_INT);

        if ($sql->execute()) {
           return 'success';
        }else{
          return 'Error';
        }

        $sql->close();
     }


  public function editarUsuariosModel($datosModel , $tabla){
     $sql = Conexion::conectar()->prepare("UPDATE $tabla SET nombreusuario = :nombreusuario, password = :password WHERE idusuario = :idusuario");

     $sql->bindParam(':nombreusuario',$datosModel['nombreusuario'] ,PDO::PARAM_STR);
     $sql->bindParam(':password',$datosModel['password'],PDO::PARAM_STR);
     $sql->bindParam(':idusuario',$datosModel['idusuario'],PDO::PARAM_STR);

     if ($sql->execute()) {
       return 'success';
     }else{
      return 'error';
     }

     $sql->close();
  }




 }
