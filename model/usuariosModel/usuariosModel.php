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
          $id_usuario = intval($_SESSION['id_usuario']);

        	$sql = Conexion::conectar()->prepare("INSERT INTO $tabla (nombres,apellidos,usuario,documento,direccion,telefono,email,tipo,password,usuario_creacion,fecha_creacion)
               VALUES('{$nombre}','{$apellidos}','{$usuario}','{$documento}','{$direccion}','{$telefono}','{$email}','{$tipo}','{$password}',{$id_usuario},NOW())");

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
        }
        else{
            return 'Error';
        }

          $sql->close();
        }

      public function editarUsuariosModel($datosModel , $tabla){
        //$sql = Conexion::conectar()->prepare("UPDATE $tabla SET nombreusuario = :nombreusuario, password = :password WHERE idusuario = :idusuario");
        //print_r($_POST);
        $nombre = isset($_POST['nombres']) ? $_POST['nombres'] : "";
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : "";
        $usuario= isset($_POST['usuario']) ? $_POST['usuario'] : "";
        $documento = isset($_POST['documento']) ? $_POST['documento'] : "";
        $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : "";
        $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $tipo= isset($_POST['tipo']) ? $_POST['tipo'] : "";
        $password = isset($_POST['password']) ? hash("SHA256", $_POST['password']): "";
        $id_usuario= isset($_POST['id_usuario']) ? $_POST['id_usuario'] : "";
        //$id_usuario = intval($_SESSION['id_usuario']);

        $sql = Conexion::conectar()->prepare("UPDATE $tabla  SET nombres =  '{$nombre}', apellidos = '{$apellidos}', usuario = '{$usuario}' ,documento = '{$documento}', direccion = '{$direccion}', telefono = '{$telefono}', email = '{$email}', tipo = '{$tipo}', password = '{$password}' , usuario_modificacion = {$id_usuario}, fecha_modificacion = NOW() WHERE id_usuario =  {$id_usuario} ");
        //  print_r($sql);


     if ($sql->execute()) {
       return 'success';
     }else{
      return 'error';
     }

     $sql->close();
  }

      public function getUsuarioModel($tabla,$id_usuario){
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_usuario = $id_usuario");
        $sql->execute();
        return $sql->fetchAll();
        $sql->close();
    }
 }
