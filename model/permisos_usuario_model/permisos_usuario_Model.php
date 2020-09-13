<?php
 class PermisosUsuarioModel{

      public function getPermisosUsuarioModel($tabla){
        $sql = Conexion::conectar()->prepare("
          SELECT usuarios.usuario ,roles.nombre,$tabla.id_usuario,$tabla.id_rol, $tabla.actualizar, $tabla.agregar, $tabla.eliminar,$tabla.visualizar   FROM $tabla INNER JOIN roles ON $tabla.id_rol = roles.id_rol INNER JOIN usuarios ON $tabla.id_usuario = usuarios.id_usuario  ");
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

      public function deletePermisosUsuarioModel($datosModel,$tabla){

        $sql = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_usuario = {$datosModel}");
        print_r($sql);

        if ($sql->execute()) {
           return 'success';
        }
        else{
            return 'Error';
        }

          $sql->close();
        }

      public function editarPermisosUsuarioModel($datosModel , $tabla){
        //$sql = Conexion::conectar()->prepare("UPDATE $tabla SET nombreusuario = :nombreusuario, password = :password WHERE idusuario = :idusuario");
        //print_r($_POST);
        $actualizar = isset($_POST['actualizar']) ? $_POST['actualizar'] : "";
        $agregar = isset($_POST['agregar']) ? $_POST['agregar'] : "";
        $eliminar= isset($_POST['eliminar']) ? $_POST['eliminar'] : "";
        $visualizar = isset($_POST['visualizar']) ? $_POST['visualizar'] : "";
        $id_rol = isset($_POST['id_rol']) ? $_POST['id_rol'] : "";
        $idusuario= isset($_POST['idusuario']) ? $_POST['idusuario'] : 0;
        $id_usuario = 15;
        
        //$id_usuario = intval($_SESSION['id_usuario']);

        $sql = Conexion::conectar()->prepare("UPDATE $tabla  SET actualizar =  '{$actualizar}', agregar = '{$agregar}', eliminar = '{$eliminar}' ,visualizar = '{$visualizar}',id_rol = '{$id_rol}' WHERE id_usuario =  {$id_usuario} ");
        //  print_r($sql);


     if ($sql->execute()) {
       return 'success';
     }else{
      return 'error';
     }

     $sql->close();
  }

      public function getPermisoUsuarioModel($tabla,$id_usuario){
        $sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_usuario = $id_usuario");
        $sql->execute();
        return $sql->fetchAll();
        $sql->close();
    }
 }
