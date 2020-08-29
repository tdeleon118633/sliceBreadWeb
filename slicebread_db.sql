
/*TITO DE LEON 22-08-2020 INICIO */ 
CREATE TABLE usuarios (
  id_usuario int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  nombres varchar(150) NOT NULL, 
  apellidos VARCHAR(150) NOT NULL,
  documento VARCHAR(150) NOT NULL,
  direccion VARCHAR(200) NULL,
  telefono VARCHAR(10) NULL,
  email VARCHAR(30) NULL,
  tipo ENUM('normal','admin') NULL,
  password VARCHAR(150) NOT NULL,
  usuario_creacion INT(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  fecha_creacion DATETIME NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  usuario_modificacion INT(10) UNSIGNED NULL DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  fecha_modificacion DATETIME NULL DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO usuarios (id_usuario,nombres,apellidos,documento,direccion,telefono,email,tipo,password,usuario_creacion,fecha_creacion,usuario_modificacion,fecha_modificacion) 
VALUES
		 (1, 'Tito','De Leon','1575165630101','ZONA 12','54306466','compuaerv@gmail.com','admin','8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918',1,now(),NULL,NULL);

/*TITO DE LEON 22-08-2020 FIN */ 
/*
  PARA FOREING KEY
  nombre tabla actual, primeras letras(3) de la tabla referencia, primeras letras del campo de cada palabra
*/

/*OSBIN YOS 22-08-2020 INICIO */ 
CREATE TABLE roles (
  id_rol int(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL, 
  descripcion TEXT(150) NOT NULL,
  activo boolean DEFAULT 1,
  usuario_creacion INT(11) UNSIGNED  DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  fecha_creacion DATETIME NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  usuario_modificacion INT(11) UNSIGNED NULL DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  fecha_modificacion DATETIME NULL DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (id_rol),
  CONSTRAINT roles_usu_cre_f FOREIGN KEY (usuario_creacion) REFERENCES usuarios (id_usuario) ON UPDATE RESTRICT ON DELETE RESTRICT,
  CONSTRAINT roles_usu_mod_f FOREIGN KEY (usuario_modificacion) REFERENCES usuarios (id_usuario) ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





INSERT INTO roles (id_rol,nombre,descripcion,activo,usuario_creacion,fecha_creacion,usuario_modificacion,fecha_modificacion) 
VALUES
		 (1, 'COCINERO','El cocinero encargado de recibir la orden',1,1,now(),NULL,NULL),
		 (2, 'CAJERO','El cajero encargado de cobrar la orden',1,1,now(),NULL,NULL),
		 (3, 'ENCARGADO AREA DE COCINA','El encargado en cocina de recibir la orden',1,1,now(),NULL,NULL),
		 (4, 'ENCARGADO ENTREGA','El encargado de entregar la orden',1,1,now(),NULL,NULL),
		 (5, 'CLIENTE','La persona que recibe la orden',1,1,now(),NULL,NULL);

/*OSBIN YOS 22-08-2020 FIN */ 

/*JORGE MONTOYA 23-08-2020 INICIO */ 

CREATE TABLE restaurante (
  id_restaurante int(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL, 
  descripcion TEXT(150) NOT NULL,
  activo boolean DEFAULT 1,
  usuario_creacion INT(11) UNSIGNED  DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  fecha_creacion DATETIME NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  usuario_modificacion INT(11) UNSIGNED NULL DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  fecha_modificacion DATETIME NULL DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (id_restaurante),
  CONSTRAINT restaurante_usu_cre_f FOREIGN KEY (usuario_creacion) REFERENCES usuarios (id_usuario) ON UPDATE RESTRICT ON DELETE RESTRICT,
  CONSTRAINT restaurante_usu_mod_f FOREIGN KEY (usuario_modificacion) REFERENCES usuarios (id_usuario) ON UPDATE RESTRICT ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO restaurante (id_restaurante,nombre,descripcion,activo,usuario_creacion,fecha_creacion,usuario_modificacion,fecha_modificacion) 
VALUES
     (1, 'MIRAFLORES',' C.C. MIRAFLORES ZONA 11',1,1,now(),NULL,NULL),
     (2, 'TIKAL','HOTEL TIKAL FUTURA ZONA 11',1,1,now(),NULL,NULL),
     (3, 'SAN LUCAS','C.C. LAS PUERTAS DE SAN LUCAS',1,1,now(),NULL,NULL);


/*JORGE MONTOYA 23-08-2020 FIN */ 