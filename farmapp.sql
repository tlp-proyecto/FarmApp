-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2020 a las 03:04:57
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
  `horario_matutino_2` text NOT NULL,
  `horario_vespertino_1` text NOT NULL,
  `horario_vespertino_2` text NOT NULL,
  `status` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `farmacias`
--

INSERT INTO `farmacias` (`id_farmacias`, `nombre`, `link_direccion`, `calle`, `altura`, `horario_matutino_1`, `horario_matutino_2`, `horario_vespertino_1`, `horario_vespertino_2`, `status`) VALUES
(1, 'FORMOSA 2', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57279.50925236951!2d-58.25487823973443!3d-26.197676010690323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e67a18fab3%3A0xc945982b47e25347!2sFarmacia%20Formosa%20II!5e0!3m2!1ses-419!2sar!4v1603893564970!5m2!1ses-419!2sar', 'Calle Alfonsina Storni', 0, '07:00hs', '12:00hs', '12:00hs', '00:00hs', 'de turno'),
(2, 'Formosa 1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1790.1965004514173!2d-58.16557565204223!3d-26.183891052319886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5de71b8abcf%3A0x41f2fadb4e117c60!2sBelgrano%20902%2C%20P3600ENP%20Formosa!5e0!3m2!1ses-419!2sar!4v1604266058445!5m2!1ses-419!2sar', 'Belgrano', 902, '00:00hs', '12:00hs', '12:00hs', '00:00hs', 'fuera de turno'),
(3, 'Formosa II', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.9651024957875!2d-58.18908488531387!3d-26.197813470075204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e67a18fab3%3A0xc945982b47e25347!2sFarmacia%20Formosa%20II!5e0!3m2!1ses-419!2sar!4v1604266166256!5m2!1ses-419!2sar', 'Av. Alfonsina Storni', 0, '07:00hs', '12:00hs', '12:00hs', '00:00hs', 'de turno'),
(4, 'Formosa IV', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57279.50925236951!2d-58.25487823973443!3d-26.197676010690323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e67a18fab3%3A0xc945982b47e25347!2sFarmacia%20Formosa%20II!5e0!3m2!1ses-419!2sar!4v1603893564970!5m2!1ses-419!2sar', '', 1234, '2', '2', '16:00hs', '22:00hs', 'fuera de turno'),
(5, 'Cabral', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7160.883101041704!2d-58.18953594454959!3d-26.182310971581504!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5f5e7b23b1f%3A0x6c27d5582a5000b!2sFarmacia%20y%20Perfumer%C3%ADa%20Cabral!5e0!3m2!1ses!2sar!4v1605487590835!5m2!1ses!2sar', 'Av. Juan Cabral', 0, '08:00hs', '12:00hs', '12:00hs', '23:00hs', 'fuera de turno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacias_usuarios`
--

CREATE TABLE `farmacias_usuarios` (
  `id_farmacia_usuarios` int(11) NOT NULL,
  `rela_farmacias` int(11) NOT NULL,
  `rela_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `farmacias_usuarios`
--

INSERT INTO `farmacias_usuarios` (`id_farmacia_usuarios`, `rela_farmacias`, `rela_usuarios`) VALUES
(1, 1, 14),
(2, 2, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacia_productos`
--

CREATE TABLE `farmacia_productos` (
  `id_farmacias` int(40) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `id_farmacia_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `farmacia_productos`
--

INSERT INTO `farmacia_productos` (`id_farmacias`, `id_productos`, `id_farmacia_producto`) VALUES
(3, 3, 1),
(1, 5, 2);

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
  `precio` double NOT NULL,
  `marca` varchar(40) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `icono_categoria` varchar(10) NOT NULL,
  `catidad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre_producto`, `precio`, `marca`, `descripcion`, `icono_categoria`, `catidad`) VALUES
(3, 'Shampoo', 91.5, 'Dave', 'Shampoo y acondicionador', 'leaf', '200ml'),
(4, 'Esmalte', 200, 'Estrella', 'Nueva linea de quitaesmaltes', 'paint brus', '100ml'),
(5, 'Cepillo', 200, 'Oral-B', 'Pro-Gengiva 35 Suave', 'medkit', '1 unidad'),
(6, 'In Your', 889.82, 'Face', 'Chocolate + Gloss + Baby Pink', 'paint brus', 'SET x 3 unidades'),
(7, 'In Your', 899.82, 'Face', 'Chocolate + Gloss + Baby Pink', 'paint brus', 'SET x 3 unidades');

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
-- Indices de la tabla `farmacias_usuarios`
--
ALTER TABLE `farmacias_usuarios`
  ADD PRIMARY KEY (`id_farmacia_usuarios`),
  ADD KEY `rela_farmacias` (`rela_farmacias`),
  ADD KEY `rela_usuarios` (`rela_usuarios`);

--
-- Indices de la tabla `farmacia_productos`
--
ALTER TABLE `farmacia_productos`
  ADD PRIMARY KEY (`id_farmacia_producto`),
  ADD KEY `farm_producto` (`id_farmacias`),
  ADD KEY `farm_product` (`id_productos`);

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
  ADD PRIMARY KEY (`id_productos`);

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
  MODIFY `id_farmacias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `farmacias_usuarios`
--
ALTER TABLE `farmacias_usuarios`
  MODIFY `id_farmacia_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `farmacia_productos`
--
ALTER TABLE `farmacia_productos`
  MODIFY `id_farmacia_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Filtros para la tabla `farmacias_usuarios`
--
ALTER TABLE `farmacias_usuarios`
  ADD CONSTRAINT `farmacias_usuarios_ibfk_1` FOREIGN KEY (`rela_farmacias`) REFERENCES `farmacias` (`id_farmacias`),
  ADD CONSTRAINT `farmacias_usuarios_ibfk_2` FOREIGN KEY (`rela_usuarios`) REFERENCES `usuarios` (`id_usuarios`);

--
-- Filtros para la tabla `farmacia_productos`
--
ALTER TABLE `farmacia_productos`
  ADD CONSTRAINT `farm_product` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id_productos`),
  ADD CONSTRAINT `farm_producto` FOREIGN KEY (`id_farmacias`) REFERENCES `farmacias` (`id_farmacias`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuario_personas` FOREIGN KEY (`id_usuarios`) REFERENCES `personas` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
