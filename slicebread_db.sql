-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-09-2020 a las 00:26:58
-- Versión del servidor: 5.7.26
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `slicebread_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combo`
--

DROP TABLE IF EXISTS `combo`;
CREATE TABLE IF NOT EXISTS `combo` (
  `id_combo` int(11) NOT NULL AUTO_INCREMENT,
  `cod_combo` varchar(200) DEFAULT NULL COMMENT 'CODIGO DEL COMBO',
  `nombre` varchar(255) NOT NULL,
  `descuento_combo` int(11) DEFAULT NULL,
  `usuario_creacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_creacion` datetime NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  `usuario_modificacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (`id_combo`),
  KEY `id_com_cre_fk` (`usuario_creacion`),
  KEY `id_com_mod_fk` (`usuario_modificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `combo`
--

INSERT INTO `combo` (`id_combo`, `cod_combo`, `nombre`, `descuento_combo`, `usuario_creacion`, `fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`) VALUES
(1, '1', 'Combo 01', 0, 1, '2020-09-06 00:31:46', NULL, NULL),
(2, '2', 'Combo 02', 0, 1, '2020-09-06 00:31:46', NULL, NULL),
(3, '3', 'Combo 03 PROMO', 5, 1, '2020-09-06 00:31:46', NULL, NULL),
(4, '4', 'Combo 04', 0, 1, '2020-09-06 00:31:46', NULL, NULL),
(5, '4', 'Combo 05', 0, 1, '2020-09-06 00:31:46', NULL, NULL),
(6, '5', 'Combo 06', 0, 1, '2020-09-06 00:31:46', NULL, NULL),
(7, '1', 'Combo 01', 0, 1, '2020-09-06 00:31:46', NULL, NULL),
(8, '2', 'Combo 02', 0, 1, '2020-09-06 00:31:46', NULL, NULL),
(9, '3', 'Combo 03', 0, 1, '2020-09-06 00:31:46', NULL, NULL),
(10, '4', 'Combo 04', 0, 1, '2020-09-06 00:31:46', NULL, NULL),
(11, '1', 'Combo 01 C', 0, 1, '2020-09-12 00:00:00', NULL, NULL),
(12, '2', 'COMBO 2 A', 0, 1, '2020-09-12 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combo_producto`
--

DROP TABLE IF EXISTS `combo_producto`;
CREATE TABLE IF NOT EXISTS `combo_producto` (
  `id_combo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `id_tiempo_comida` int(11) DEFAULT NULL,
  `id_combo` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_total` int(11) DEFAULT NULL,
  `usuario_creacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_creacion` datetime NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  `usuario_modificacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (`id_combo_producto`),
  KEY `id_com_pro_tie_com_cre_fk` (`id_tiempo_comida`),
  KEY `id_com_pro_com_fk` (`id_combo`),
  KEY `id_com_pro_pro_fk` (`id_producto`),
  KEY `id_com_pro_usu_cre_fk` (`usuario_creacion`),
  KEY `id_com_pro_usu_mod_fk` (`usuario_modificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `combo_producto`
--

INSERT INTO `combo_producto` (`id_combo_producto`, `id_tiempo_comida`, `id_combo`, `id_producto`, `cantidad`, `precio_total`, `usuario_creacion`, `fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`) VALUES
(1, 1, 1, 1, 1, 6, 1, '2020-09-06 00:52:25', NULL, NULL),
(2, 1, 1, 2, 1, 15, 1, '2020-09-06 00:52:25', NULL, NULL),
(3, 1, 2, 3, 1, 7, 1, '2020-09-06 00:52:25', NULL, NULL),
(4, 1, 2, 8, 1, 5, 1, '2020-09-11 00:00:00', NULL, NULL),
(5, 1, 2, 9, 1, 0, 1, '2020-09-11 00:00:00', NULL, NULL),
(6, 1, 1, 10, 1, 0, 1, '2020-09-11 00:00:00', NULL, NULL),
(7, 2, 7, 5, 1, 20, 1, '2020-09-11 00:00:00', NULL, NULL),
(8, 2, 7, 12, 1, 10, 1, '2020-09-11 00:00:00', NULL, NULL),
(9, 2, 7, 11, 1, 0, 1, '2020-09-11 00:00:00', NULL, NULL),
(10, 2, 8, 13, 1, 20, 1, '2020-09-11 00:00:00', NULL, NULL),
(11, 2, 8, 1, 1, 10, 1, '2020-09-11 00:00:00', NULL, NULL),
(12, 3, 11, 14, 1, 20, 1, '2020-09-12 00:00:00', NULL, NULL),
(13, 3, 11, 8, 1, 10, 1, '2020-09-12 00:00:00', NULL, NULL),
(14, 3, 12, 15, 1, 20, 1, '2020-09-12 00:00:00', NULL, NULL),
(16, 3, 12, 6, 1, 10, 1, '2020-09-12 00:00:00', NULL, NULL),
(17, 3, 12, 16, 1, 10, 1, '2020-09-12 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_pedido`
--

DROP TABLE IF EXISTS `estado_pedido`;
CREATE TABLE IF NOT EXISTS `estado_pedido` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `pedido_finalizado` tinyint(1) DEFAULT '0' COMMENT 'DEL COCINERO AL AREA DE ENTREGA',
  `pedido_entregado` tinyint(1) DEFAULT '0' COMMENT 'YA ENTREGADO AL CLIENTE',
  `usuario_creacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_creacion` datetime NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  `usuario_modificacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (`id_estado`),
  KEY `id_est_ped_fk` (`id_pedido`),
  KEY `id_est_cre_fk` (`usuario_creacion`),
  KEY `id_est_mod_fk` (`usuario_modificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_pedido`
--

INSERT INTO `estado_pedido` (`id_estado`, `id_pedido`, `pedido_finalizado`, `pedido_entregado`, `usuario_creacion`, `fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`) VALUES
(1, 1, 0, 0, 1, '2020-09-06 01:06:35', NULL, NULL),
(2, 2, 0, 0, 1, '2020-09-06 01:06:35', NULL, NULL),
(3, 3, 0, 0, 1, '2020-09-06 01:06:35', NULL, NULL),
(4, 3, 0, 0, 1, '2020-09-06 01:06:35', NULL, NULL),
(5, 5, 0, 0, 1, '2020-09-06 01:06:35', NULL, NULL),
(6, 6, 0, 0, 1, '2020-09-06 01:06:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `cod_pedido` int(11) DEFAULT NULL COMMENT 'CODIGO DE PEDIDO',
  `id_cliente` int(11) UNSIGNED DEFAULT NULL,
  `id_tiempo_comida` int(11) DEFAULT NULL,
  `id_combo` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `usuario_creacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_creacion` datetime NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  `usuario_modificacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (`id_pedido`),
  KEY `id_tped_cli_fk` (`id_cliente`),
  KEY `id_tped_tie_com_fk` (`id_tiempo_comida`),
  KEY `id_tped_com_fk` (`id_combo`),
  KEY `id_tped_pro_fk` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `cod_pedido`, `id_cliente`, `id_tiempo_comida`, `id_combo`, `id_producto`, `cantidad`, `usuario_creacion`, `fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`) VALUES
(1, 1, 10, 1, 1, 1, 1, 1, '2020-09-06 01:01:12', NULL, NULL),
(2, 2, 4, 2, 2, 2, 2, 1, '2020-09-06 01:01:12', NULL, NULL),
(3, 3, 12, 3, 3, 3, 1, 1, '2020-09-06 01:01:12', NULL, NULL),
(4, 5, 11, 1, 4, 4, 2, 1, '2020-09-06 01:01:12', NULL, NULL),
(5, 5, 14, 2, 5, 1, 1, 1, '2020-09-06 01:01:12', NULL, NULL),
(6, 6, 12, 3, 6, 2, 2, 1, '2020-09-06 01:01:12', NULL, NULL),
(7, 7, 16, 3, 11, 14, 1, 1, '2020-09-12 00:00:00', NULL, NULL),
(8, 7, 16, 3, 11, 8, 1, 1, '2020-09-12 00:00:00', NULL, NULL),
(9, 7, 16, 3, 12, 15, 1, 1, '2020-09-12 00:00:00', NULL, NULL),
(10, 7, 16, 3, 12, 6, 1, 1, '2020-09-12 00:00:00', NULL, NULL),
(11, 7, 16, 3, 12, 16, 1, 1, '2020-09-12 00:00:00', NULL, NULL),
(13, 8, 16, 2, 1, 1, 1, 1, '2020-09-12 00:00:00', NULL, NULL),
(24, 26, 16, 1, 1, 1, 1, 1, '2020-09-12 17:04:35', NULL, NULL),
(25, 26, 16, 1, 1, 2, 1, 1, '2020-09-12 17:04:35', NULL, NULL),
(26, 26, 16, 1, 1, 10, 1, 1, '2020-09-12 17:04:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_correlativo`
--

DROP TABLE IF EXISTS `pedido_correlativo`;
CREATE TABLE IF NOT EXISTS `pedido_correlativo` (
  `cod_pedido` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido_correlativo`
--

INSERT INTO `pedido_correlativo` (`cod_pedido`) VALUES
(1),
(2),
(3),
(4),
(5),
(7),
(8),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_usuario`
--

DROP TABLE IF EXISTS `permisos_usuario`;
CREATE TABLE IF NOT EXISTS `permisos_usuario` (
  `id_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) UNSIGNED NOT NULL,
  `actualizar` varchar(1) NOT NULL,
  `agregar` varchar(1) NOT NULL,
  `eliminar` varchar(1) NOT NULL,
  `visualizar` varchar(1) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos_usuario`
--

INSERT INTO `permisos_usuario` (`id_usuario`, `id_rol`, `actualizar`, `agregar`, `eliminar`, `visualizar`) VALUES
(1, 1, 'Y', 'Y', 'Y', 'Y'),
(2, 5, 'N', 'N', 'N', 'Y'),
(15, 2, 'Y', 'Y', 'N', 'Y');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `is_comida` tinyint(1) DEFAULT '0' COMMENT '0 si es comida y 1 si es bebida',
  `id_extras` tinyint(1) DEFAULT '0' COMMENT 'si no es extra 0',
  `usuario_creacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_creacion` datetime NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  `usuario_modificacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (`id_producto`),
  KEY `id_pro_cre_fk` (`usuario_creacion`),
  KEY `id_pro_mod_fk` (`usuario_modificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `is_comida`, `id_extras`, `usuario_creacion`, `fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`) VALUES
(1, 'gaseosa', 0, 0, 1, '2020-09-06 00:24:16', NULL, NULL),
(2, 'Huevos rancheros', 1, 0, 1, '2020-09-06 00:24:16', NULL, NULL),
(3, 'Panes con frijol', 1, 0, 1, '2020-09-06 00:24:16', NULL, NULL),
(4, 'Panes salchichas', 1, 0, 1, '2020-09-06 00:24:16', NULL, NULL),
(5, 'Carne asada', 1, 0, 1, '2020-09-06 00:24:16', NULL, NULL),
(6, 'te', 0, 0, 1, '2020-09-06 00:24:16', NULL, NULL),
(7, 'Ensalada de pollo', 1, 0, 1, '2020-09-11 00:00:00', NULL, NULL),
(8, 'Cafe', 0, 0, 1, '2020-09-11 00:00:00', 1, NULL),
(9, 'Leche', 0, 1, 1, '2020-09-11 00:00:00', NULL, NULL),
(10, 'Quezo', 0, 1, 1, '2020-09-11 00:00:00', NULL, NULL),
(11, 'Caldo de entrada', 0, 1, 1, '2020-09-11 00:00:00', NULL, NULL),
(12, 'Picositas ', 0, 0, 1, '2020-09-11 00:00:00', NULL, NULL),
(13, 'Caldo de Pata', 1, 0, 1, '2020-09-11 00:00:00', NULL, NULL),
(14, 'Homelet', 1, 0, 1, '2020-09-12 00:00:00', NULL, NULL),
(15, 'Huevos rancheros ', 1, 0, 1, '2020-09-12 00:00:00', NULL, NULL),
(16, 'Papas fritas', 1, 0, 1, '2020-09-12 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

DROP TABLE IF EXISTS `restaurantes`;
CREATE TABLE IF NOT EXISTS `restaurantes` (
  `id_restaurantes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` tinytext NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `usuario_creacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_creacion` datetime NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  `usuario_modificacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (`id_restaurantes`),
  KEY `restaurantes_usu_cre_fk` (`usuario_creacion`),
  KEY `restaurantes_usu_mod_fk` (`usuario_modificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`id_restaurantes`, `nombre`, `descripcion`, `activo`, `usuario_creacion`, `fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`) VALUES
(1, 'MIRAFLORES', ' C.C. MIRAFLORES ZONA 11', 1, 1, '2020-09-01 23:13:49', NULL, NULL),
(2, 'TIKAL', 'HOTEL TIKAL FUTURA ZONA 11', 1, 1, '2020-09-01 23:13:49', NULL, NULL),
(3, 'SAN LUCAS', 'C.C. LAS PUERTAS DE SAN LUCAS', 1, 1, '2020-09-01 23:13:49', NULL, NULL),
(4, 'Estados Unidos', 'Central Park', 0, 2, '2020-09-01 23:14:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` tinytext NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `usuario_creacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_creacion` datetime NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  `usuario_modificacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (`id_rol`),
  KEY `roles_usu_cre_fk` (`usuario_creacion`),
  KEY `roles_usu_mod_fk` (`usuario_modificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre`, `descripcion`, `activo`, `usuario_creacion`, `fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`) VALUES
(1, 'COCINERO', 'El cocinero encargado de recibir la orden', 1, 1, '2020-08-29 21:49:04', NULL, NULL),
(2, 'CAJERO', 'El cajero encargado de cobrar la orden', 1, 1, '2020-08-29 21:49:04', NULL, NULL),
(3, 'ENCARGADO AREA DE COCINA', 'El encargado en cocina de recibir la orden', 1, 1, '2020-08-29 21:49:04', NULL, NULL),
(4, 'ENCARGADO ENTREGA', 'El encargado de entregar la orden', 1, 1, '2020-08-29 21:49:04', NULL, NULL),
(5, 'CLIENTE', 'La persona que recibe la orden', 1, 1, '2020-08-29 21:49:04', NULL, NULL),
(6, 'Cocinero individual', 'safefefsf', 0, 1, '2020-08-30 21:55:44', 2, '2020-09-04 02:18:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo_comida`
--

DROP TABLE IF EXISTS `tiempo_comida`;
CREATE TABLE IF NOT EXISTS `tiempo_comida` (
  `id_tiempo_comida` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `activo` tinyint(1) DEFAULT '1',
  `usuario_creacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_creacion` datetime NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  `usuario_modificacion` int(11) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (`id_tiempo_comida`),
  KEY `tiempo_comida_usu_cre_fk` (`usuario_creacion`),
  KEY `tiempo_comida_usu_mod_fk` (`usuario_modificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiempo_comida`
--

INSERT INTO `tiempo_comida` (`id_tiempo_comida`, `nombre`, `activo`, `usuario_creacion`, `fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`) VALUES
(1, 'DESAYUNO', 1, 1, '2020-09-05 19:56:11', NULL, NULL),
(2, 'ALMUERZO', 1, 1, '2020-09-05 19:56:11', NULL, NULL),
(3, 'CENA', 1, 1, '2020-09-05 19:56:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombres` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `documento` varchar(150) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tipo` enum('normal','admin') DEFAULT NULL,
  `password` varchar(150) NOT NULL,
  `usuario_creacion` int(10) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_creacion` datetime NOT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  `usuario_modificacion` int(10) UNSIGNED DEFAULT NULL COMMENT 'FK ID DEL USUARIO QUE INSERTO LA TUPLA',
  `fecha_modificacion` datetime DEFAULT NULL COMMENT 'FECHA EN LA QUE SE INSERTO LA TUPLA',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `documento`, `direccion`, `telefono`, `email`, `tipo`, `password`, `usuario_creacion`, `fecha_creacion`, `usuario_modificacion`, `fecha_modificacion`) VALUES
(1, 'Tito', 'De Leon', 'tdeleon', '1575165630101', 'ZONA 12', '54306466', 'compuaerv@gmail.com', 'admin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1, '2020-08-29 21:47:54', 1, '2020-09-11 20:53:32'),
(2, 'Osbin', 'Yos', 'oyos', '2117872384', 'Villa nueva', '64980938', 'osbinyos@gmail.com', 'admin', '74a86f62d0acd138c70368e4021620b4ff48666865d98580e35c55c3d5e72f8d', 1, '2020-08-29 22:04:09', NULL, NULL),
(4, 'Mario Ortega', 'rodriguez', 'arodriguez', '23434523', 'antigua', '2343534', 'alland@umg.edu.gt', 'normal', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 1, '2020-08-29 22:21:01', NULL, NULL),
(10, 'allan Sifuentes', 'rodriguez', 'arodriguez', '23434523', 'antigua', '2343534', 'alland@umg.edu.gt', 'normal', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 1, '2020-08-29 22:23:08', NULL, NULL),
(11, 'Jerardo', 'Ottoniel', 'adsfadsf', 'dsfdsafsa', 'zona 21', '5465654', 'jottoniel@gmail.com', 'normal', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 0, '2020-08-30 23:19:42', 11, '2020-09-11 20:53:21'),
(12, 'Mario', 'Julaju', 'mjula', '5456545654', 'zona 17', '56545865', 'mjulaju@hotmail.com', 'normal', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 0, '2020-08-30 23:19:48', 12, '2020-09-11 20:54:23'),
(14, 'Cesia', 'Noemi', 'cnoemi', '1235456546', 'zona 12', '54565456', 'cnoemi@gmail.com', 'normal', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 0, '2020-09-03 14:59:18', 14, '2020-09-11 20:57:46'),
(16, 'Yeimi Mileni', 'Contreras Garcia', 'ycontreras', '5456545654', 'zona 12 Jutiapa', '55655456', 'ycontreras@gmail.com', 'normal', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 0, '2020-09-12 03:01:23', NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `combo`
--
ALTER TABLE `combo`
  ADD CONSTRAINT `id_com_cre_fk` FOREIGN KEY (`usuario_creacion`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `id_com_mod_fk` FOREIGN KEY (`usuario_modificacion`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `combo_producto`
--
ALTER TABLE `combo_producto`
  ADD CONSTRAINT `id_com_pro_com_fk` FOREIGN KEY (`id_combo`) REFERENCES `combo` (`id_combo`),
  ADD CONSTRAINT `id_com_pro_pro_fk` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `id_com_pro_tie_com_cre_fk` FOREIGN KEY (`id_tiempo_comida`) REFERENCES `tiempo_comida` (`id_tiempo_comida`),
  ADD CONSTRAINT `id_com_pro_usu_cre_fk` FOREIGN KEY (`usuario_creacion`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `id_com_pro_usu_mod_fk` FOREIGN KEY (`usuario_modificacion`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `estado_pedido`
--
ALTER TABLE `estado_pedido`
  ADD CONSTRAINT `id_est_cre_fk` FOREIGN KEY (`usuario_creacion`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `id_est_mod_fk` FOREIGN KEY (`usuario_modificacion`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `id_est_ped_fk` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `id_tped_cli_fk` FOREIGN KEY (`id_cliente`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `id_tped_com_fk` FOREIGN KEY (`id_combo`) REFERENCES `combo` (`id_combo`),
  ADD CONSTRAINT `id_tped_pro_fk` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `id_tped_tie_com_fk` FOREIGN KEY (`id_tiempo_comida`) REFERENCES `tiempo_comida` (`id_tiempo_comida`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `id_pro_cre_fk` FOREIGN KEY (`usuario_creacion`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `id_pro_mod_fk` FOREIGN KEY (`usuario_modificacion`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD CONSTRAINT `restaurantes_usu_cre_fk` FOREIGN KEY (`usuario_creacion`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `restaurantes_usu_mod_fk` FOREIGN KEY (`usuario_modificacion`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_usu_cre_fk` FOREIGN KEY (`usuario_creacion`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `roles_usu_mod_fk` FOREIGN KEY (`usuario_modificacion`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `tiempo_comida`
--
ALTER TABLE `tiempo_comida`
  ADD CONSTRAINT `tiempo_comida_usu_cre_fk` FOREIGN KEY (`usuario_creacion`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `tiempo_comida_usu_mod_fk` FOREIGN KEY (`usuario_modificacion`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
