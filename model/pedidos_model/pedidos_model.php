<?php
 class PedidosModel{

      public function getPedidosModel($tabla){

        $query = 'select p.id_pedido,
                         p.id_cliente,
                         u.nombres,
                         u.apellidos,
                         P.id_tiempo_comida,
                         tc.nombre,
                         p.id_combo,
                         c.nombre,
                         P.id_producto,
                         pro.nombre
                  FROM pedido p
                       INNER JOIN usuarios u
                       	ON  u.id_usuario = P.id_cliente
                       INNER  JOIN tiempo_comida tc
                       	ON  tc.id_tiempo_comida = p.id_tiempo_comida
                       INNER JOIN combo c
                       	ON  c.id_combo = p.id_combo
                       INNER JOIN producto pro
                       	ON  pro.id_producto = p.id_producto
                  WHERE u.tipo = "normal" ';

        $sql = Conexion::conectar()->prepare($query);
        $sql->execute();
        return $sql->fetchAll();
        $sql->close();
		  }

      public function ingresarPedidosModel($datosModel , $tabla){

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
          if ($sql->execute()) {
              return 'success';
          }
          else{
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


      public function getSelectClienteModel($tabla){
          $arrDatos =  array();
          $sql = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE tipo = 'normal' ");
          $sql->execute();
          return $sql->fetchAll();
          $sql->close();
      }

      public function getSelectCombosModel($tabla){
          $arrDatos =  array();
          $sql = Conexion::conectar()->prepare("SELECT * FROM combo");
          $sql->execute();
          return $sql->fetchAll();
          $sql->close();
      }

      public function getSelectTiempoComidaModel($tabla){
          $arrDatos =  array();
          $sql = Conexion::conectar()->prepare("SELECT * FROM tiempo_comida WHERE activo = 1");
          $sql->execute();
          return $sql->fetchAll();
          $sql->close();
      }

 }
