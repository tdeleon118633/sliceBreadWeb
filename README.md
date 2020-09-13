# RESTAURANT
SISTEMA BASICO PARA RESTAURAN
1) intalar xamp/wamp para windos, en linux lamp
2) Crear bd : slicebread_db
3) Corres script: slicebread_db.sql
4) ruta de acceso: http://localhost/sliceBreadWeb/pedidos_view.php
5) usuario: tdeleon
6) contraseña: 123456
7) extras:
Dentro del config/global revisar que las variables esten correctas:

configuracion exacta actual:
  define("DB_HOST", "localhost"); //tdeleon ip de la pc servidor base de datos
  define("DB_NAME", "slicebread_db");//tdeleon nombre de la base de datos
  define("DB_USERNAME", "root");//tdeleon nombre de usuario de base de datos
  define("DB_PASSWORD", "");//tdeleon conraseña del usuario de base de datos
  define("DB_ENCODE", "utf8");// tdeleon codificacion de caracteres
