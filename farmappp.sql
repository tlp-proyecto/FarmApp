-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2020 a las 04:02:35
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.2.15

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

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descripcion`, `detalle`) VALUES
(0, 'cuidado personal', 'shanpoos'),
(1, 'perfumeria', 'perfumes,desodorantes,velas aromaticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenios`
--

CREATE TABLE `convenios` (
  `id_farmacias` int(11) DEFAULT NULL,
  `id_obras_sociales` int(11) NOT NULL,
  `id_convenios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacias`
--

CREATE TABLE `farmacias` (
  `id_farmacias` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `link_direccion` text NOT NULL,
  `calle` varchar(256) NOT NULL,
  `altura` int(11) NOT NULL,
  `horario_matutino_1` text NOT NULL,
  `horario_matutino_2` varchar(8) NOT NULL,
  `horario_vespertino_1` text NOT NULL,
  `horario_vespertino_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `farmacias`
--

INSERT INTO `farmacias` (`id_farmacias`, `nombre`, `link_direccion`, `calle`, `altura`, `horario_matutino_1`, `horario_matutino_2`, `horario_vespertino_1`, `horario_vespertino_2`) VALUES
(1, 'FORMOSA 1', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d447.5507461455298!2d-58.164539000000005!3d-26.183469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3d717b331d7fa47!2sFARMALIFE!5e0!3m2!1ses-419!2sar!4v1603378818115!5m2!1ses-419!2sar', 'Belgrano', 902, '00:00hs', '12:00hs', '12:00hs', '00:00hs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacia_productos`
--

CREATE TABLE `farmacia_productos` (
  `id_farmacias` int(40) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `id_farmacia_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marcas` int(11) NOT NULL,
  `nombre_marcas` varchar(40) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `detalle` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marcas`, `nombre_marcas`, `descripcion`, `detalle`) VALUES
(1, 'plusbell', 'producto de aceo personal', ''),
(2, 'veritas', 'perfumeria', 'crema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_sociales`
--

CREATE TABLE `obras_sociales` (
  `id_obras_social` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `obras_sociales`
--

INSERT INTO `obras_sociales` (`id_obras_social`, `nombre`, `descripcion`) VALUES
(0, 'iasep', 'salud integral'),
(1, 'aclisa', 'asociacion de clinicas y sanatorios privados de formosa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `nombre_persona` varchar(120) DEFAULT NULL,
  `apellido_persona` varchar(11) NOT NULL,
  `dni_persona` varchar(8) DEFAULT NULL,
  `fecha_nac_persona` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `nombre_persona`, `apellido_persona`, `dni_persona`, `fecha_nac_persona`) VALUES
(6, 'lucas', 'prato', '1238354', '2020-09-24'),
(7, 'carlos', 'viera', '40803842', '2020-09-24'),
(8, 'ivan', 'viera', '35058199', '1990-02-18'),
(9, 'ivan', 'viera', '35058199', '1990-02-18'),
(10, 'heber', 'caballero', '20320544', '1981-12-15'),
(11, 'heber', 'caballero', '20320544', '1987-10-05'),
(12, 'Juan David', 'Ferreira', '35625161', '1990-10-29'),
(13, 'Juan David', 'Ferreira', '35625161', '1994-06-16'),
(14, 'ivan', 'viera', '35058199', '2020-10-19'),
(15, 'heber', 'caballero', '20320544', '1990-10-21'),
(16, 'Juan David', 'Ferreira', '35625161', '1990-10-29'),
(17, 'Juan David', 'Ferreira', '35625161', '2004-06-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombre_producto` varchar(250) DEFAULT NULL,
  `marca` int(40) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `presentacion` varchar(100) DEFAULT NULL,
  `codigo_barra` varchar(13) DEFAULT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre_producto`, `marca`, `id_categoria`, `presentacion`, `codigo_barra`, `precio`) VALUES
(1, 'desodorante', 2, 1, 'pote de 60g', '7791520011', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id_sucursales` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `id_farmacias` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre_usuarios` varchar(45) DEFAULT NULL,
  `password_usuarios` varchar(200) DEFAULT NULL,
  `id_personas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre_usuarios`, `password_usuarios`, `id_personas`) VALUES
(11, 'lucas@gmail.com', '$2y$10$JHZ496MetGQW49oQZCdRWOV9LcUnkrfvUAvvU8l0CzTTEhq6dOKC6', 6),
(12, 'vieraatilio2017@gmail.com', '$2y$10$0PPryL73BhRcwX02Yird3Ou7nFIt86GjpuKXOmEWA9FSGaBk3/S.a', 14),
(13, 'hebercaballero@outlook.com', '$2y$10$wBZ6edcEnCe6VmxTjtbAVOX5Qf2YoJzgu.tKvuWByIu6IcQ.CdEdO', 15),
(14, 'juandavid9a0@gmail.com', '$2y$10$3poNDbjXCi9p8mIN16oNleBEcX11OuLROzCuseL.a.76LEkZusErC', 16),
(15, 'juandavid90@gmail.com', '$2y$10$iVWYeIWp1.adfJC8QzgCDupDTzETE50XPhoxZeWQN5eLg/3fwwGii', 17);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `convenios`
--
ALTER TABLE `convenios`
  ADD PRIMARY KEY (`id_convenios`),
  ADD KEY `farmacia_os` (`id_farmacias`),
  ADD KEY `farm_os` (`id_obras_sociales`);

--
-- Indices de la tabla `farmacias`
--
ALTER TABLE `farmacias`
  ADD PRIMARY KEY (`id_farmacias`);

--
-- Indices de la tabla `farmacia_productos`
--
ALTER TABLE `farmacia_productos`
  ADD PRIMARY KEY (`id_farmacia_producto`),
  ADD KEY `farm_producto` (`id_farmacias`),
  ADD KEY `farm_product` (`id_productos`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marcas`);

--
-- Indices de la tabla `obras_sociales`
--
ALTER TABLE `obras_sociales`
  ADD PRIMARY KEY (`id_obras_social`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD KEY `marca_productos` (`marca`),
  ADD KEY `productos_categoria` (`id_categoria`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_sucursales`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `farmacias`
--
ALTER TABLE `farmacias`
  MODIFY `id_farmacias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `farmacia_productos`
--
ALTER TABLE `farmacia_productos`
  MODIFY `id_farmacia_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marcas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `convenios`
--
ALTER TABLE `convenios`
  ADD CONSTRAINT `farm_os` FOREIGN KEY (`id_obras_sociales`) REFERENCES `obras_sociales` (`id_obras_social`),
  ADD CONSTRAINT `farmacia_os` FOREIGN KEY (`id_farmacias`) REFERENCES `farmacias` (`id_farmacias`);

--
-- Filtros para la tabla `farmacia_productos`
--
ALTER TABLE `farmacia_productos`
  ADD CONSTRAINT `farm_product` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id_productos`),
  ADD CONSTRAINT `farm_producto` FOREIGN KEY (`id_farmacias`) REFERENCES `farmacias` (`id_farmacias`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `marca_productos` FOREIGN KEY (`marca`) REFERENCES `marcas` (`id_marcas`),
  ADD CONSTRAINT `productos_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuario_personas` FOREIGN KEY (`id_usuarios`) REFERENCES `personas` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
