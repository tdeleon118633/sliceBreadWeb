<?php

  require_once $path_direccion.'/model/permisos_usuario_model/permisos_usuario_Model.php';

 class PermisosUsuarioController {
   //LISTA TODOS LOS USUARIOS
  public function getPermisosUsuarioController(){
    $respuesta = PermisosUsuarioModel::getPermisosUsuarioModel('permisos_usuario');

    return $respuesta;
  }

/*  public function ingresarUsuariocontroller(){
  //  print_r($_POST);

  //  if (isset($_POST['guardarUsuario'])) {
    //    $datosController = array('nombres'=>$_POST['nombres'],
      //                          'apellidos'=>$_POST['apellidos'],
        //                      'usuario'=>$_POST['usuario'],
          //                    'documento'=>$_POST['documento'],
            //                  'direccion'=>$_POST['direccion'],
              //                'telefono'=>$_POST['telefono'],
                //              'email'=>$_POST['email'],
                  //            'tipo'=>$_POST['tipo'],
                              'password'=>$_POST['password']
                                 );

          #pedir la informacion al modelo.
      $respuesta = UsuariosModel::ingresarUsuariosModel($datosController , 'usuarios');
      //$respuesta = 'success';
        if ($respuesta == 'success') {
          //header('location:okUsuario');
          Conexion::fnt_alert_insertar();
          header('location:permisos_usuario_view.php');

      //    header('location: '.$path_direccion);
        }
      else{
          header('location:reservas');

         }
      }
  }*/


  //borrar Usuario
   public function deletePermisosUsuarioController(){
     if (isset($_GET['idBorrar'])) {
      $datosController = $_GET['idBorrar'];
      PRINT "5465465";
      $respuesta = PermisosUsuarioModel::deletePermisosUsuarioModel($datosController, 'permisos_usuario');
      if ($respuesta == 'success') {
          Conexion::fnt_alert_borrar();
         print '<meta http-equiv="Refresh" content="TIEMPO=10;url=permisos_usuario_view.php"';
      }
     }

   }

   public function editarPermisoUsuarioController(){
    // print_r($_POST);
      if (isset($_POST['editar_permisos_usuario'])) {
       /*$datosController = array('nombres' => $_POST['nombres'],
                                 'apellidos'     => $_POST['apellidos'],
                                 'id_usuario'    => $_POST['id_usuario']);*/
         $datosController = array('actualizar'=>$_POST['actualizar'],
                                'agregar'=>$_POST['agregar'],
                              'eliminar'=>$_POST['eliminar'],
                              'visualizar'=>$_POST['visualizar'],
                              'id_rol'=>$_POST['id_rol']
                                 );

       $respuesta = PermisosUsuarioModel::editarPermisosUsuarioModel($datosController , 'permisos_usuario');
      // print_r($respuesta);
          if ($respuesta == 'success') {
                Conexion::fnt_alert_edicion();
                print '<meta http-equiv="Refresh" content="TIEMPO=10;url=permisos_usuario_view.php"';
               //header('location:usuarios_view.php');

        }
     }



   }

   public function getPermisoUsuarioController($tabla,$id_usuario){
      $respuesta = PermisosUsuarioModel::getPermisoUsuarioModel($tabla,$id_usuario);
      return $respuesta;
   }


 }

 ?>
