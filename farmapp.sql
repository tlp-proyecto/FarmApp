-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-09-2020 a las 02:21:13
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenios`
--

DROP TABLE IF EXISTS `convenios`;
CREATE TABLE IF NOT EXISTS `convenios` (
  `farmacias_id_farmacias` int(11) DEFAULT NULL,
  `obras_sociales_id_obras_social` int(11) DEFAULT NULL,
  `id_convenios` int(11) NOT NULL,
  PRIMARY KEY (`id_convenios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

DROP TABLE IF EXISTS `direccion`;
CREATE TABLE IF NOT EXISTS `direccion` (
  `id_direccion` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_calle_direccion` int(11) NOT NULL,
  `nro_calle_direccion` int(11) NOT NULL,
  PRIMARY KEY (`id_direccion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacias`
--

DROP TABLE IF EXISTS `farmacias`;
CREATE TABLE IF NOT EXISTS `farmacias` (
  `id_farmacias` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_farmacias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_sociales`
--

DROP TABLE IF EXISTS `obras_sociales`;
CREATE TABLE IF NOT EXISTS `obras_sociales` (
  `id_obras_social` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_obras_social`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_persona` varchar(120) DEFAULT NULL,
  `apellido_persona` varchar(11) NOT NULL,
  `dni_persona` varchar(8) DEFAULT NULL,
  `fecha_nac_persona` date DEFAULT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `nombre_persona`, `apellido_persona`, `dni_persona`, `fecha_nac_persona`) VALUES
(6, 'lucas', 'prato', '1238354', '2020-09-24'),
(7, 'carlos', 'viera', '40803842', '2020-09-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_productos` int(11) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `detalle` varchar(200) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `presentacion` varchar(100) DEFAULT NULL,
  `codigo_barra` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id_productos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

DROP TABLE IF EXISTS `sucursales`;
CREATE TABLE IF NOT EXISTS `sucursales` (
  `id_sucursales` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `id_farmacias` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_sucursales`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuarios` varchar(45) DEFAULT NULL,
  `password_usuarios` varchar(200) DEFAULT NULL,
  `id_personas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre_usuarios`, `password_usuarios`, `id_personas`) VALUES
(3, 'lucas@gmail.com', '$2y$10$JHZ496MetGQW49oQZCdRWOV9LcUnkrfvUAvvU8l0CzTTEhq6dOKC6', 6),
(4, 'vieracarlos10@gmail.com', '$2y$10$83EBecEBmbK6YEFwyJPyAOjCqHrEsy5W6hyIkLWPcnwTPDu5smqrO', 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
