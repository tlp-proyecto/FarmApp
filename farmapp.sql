-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2020 a las 23:56:04
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenios`
--

CREATE TABLE `convenios` (
  `farmacias_id_farmacias` int(11) DEFAULT NULL,
  `obras_sociales_id_obras_social` int(11) DEFAULT NULL,
  `id_convenios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(10) NOT NULL,
  `link_direccion` text NOT NULL,
  `nombre_calle_direccion` varchar(256) NOT NULL,
  `rela_farmacias` int(11) NOT NULL,
  `horario_farmacia` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id_direccion`, `link_direccion`, `nombre_calle_direccion`, `rela_farmacias`, `horario_farmacia`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.2433143045782!2d-58.168131802233084!3d-26.188762147986225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5fa0338bbf9%3A0xbd8f416a631272a8!2sFarmacia%20Central%20-%20Formosa!5e0!3m2!1ses!2sar!4v1602967458991!5m2!1ses!2sar', '9 de Julio 501', 1, '7:00hs-\r\n20:00hs'),
(2, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.335055787214!2d-58.177755582556195!3d-26.1857768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e67a18fab3%3A0xc945982b47e25347!2sFarmacia%20Formosa%20II!5e0!3m2!1ses!2sar!4v1602967965384!5m2!1ses!2sar', 'Mitre 596', 2, '7:00hs-\r\n20:00hs'),
(3, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.429885695007!2d-58.17286018531424!3d-26.182690619457095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e7bb10f0ed%3A0x3fbbe49daf952651!2sFarmacia%20San%20Luis!5e0!3m2!1ses-419!2sar!4v1603039600116!5m2!1ses-419!2sar', 'Moreno 602', 3, '7:00hs-\r\n20:00hs'),
(4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.430182537523!2d-58.17286018548777!3d-26.18268095837069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e77eb3da35%3A0xb662e57e2ac7ae20!2sFarmacia%20San%20Luis%20II!5e0!3m2!1ses-419!2sar!4v1603039803930!5m2!1ses-419!2sar', 'Rivadavia 701', 4, '7:00hs-\r\n20:00hs'),
(5, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14321.57360784017!2d-58.17457799999999!3d-26.183878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef30a859ba7571cc!2sFarmacia%20y%20Perfumer%C3%ADa%20San%20Luis%20III!5e0!3m2!1ses-419!2sar!4v1603039950721!5m2!1ses-419!2sarm', 'España 897', 5, '7:00hs-\r\n20:00hs'),
(6, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d895.1328148939583!2d-58.168230070827484!3d-26.179391095435008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e7e63e8cdd%3A0x389632e7de60e14d!2sPerfumeria%20Pringles!5e0!3m2!1ses-419!2sar!4v1603040966907!5m2!1ses-419!2sar', 'Rivadavia 499', 6, '7:00hs-\r\n20:00hs'),
(7, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d447.71405077407024!2d-58.158355517669044!3d-26.140918525911466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5091f4307c9%3A0x3d28dbe947e3539b!2sAv.%20Ana%20Esther%20El%C3%ADas%20de%20Canepa%201836%2C%20P3600HLK%20Formosa!5e0!3m2!1ses-419!2sar!4v1603041940370!5m2!1ses-419!2sar', 'Av. Canepa 1836', 7, '7:00hs-\r\n20:00hs'),
(8, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223.77000284355344!2d-58.16612899555184!3d-26.18626526960314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5de2cd6fbb9%3A0xf237666269a1dfa6!2sMoreno%201102%2C%20P3600OEV%20Formosa!5e0!3m2!1ses-419!2sar!4v1603042541567!5m2!1ses-419!2sar', 'Moreno 1102', 8, '7:00hs-\r\n20:00hs'),
(9, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.3538960129467!2d-58.168787885694414!3d-26.1851636834464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e0a675f709%3A0xdef3a74f45cb3fc9!2sMoreno%20998%2C%20P3600OET%20Formosa!5e0!3m2!1ses-419!2sar!4v1603055954745!5m2!1ses-419!2sar', 'Moreno 998', 9, '7:00hs-\r\n20:00hs'),
(10, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.5083834358607!2d-57.71422398533885!3d-25.287118133456207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945d08c2a873cd8b%3A0x783935a904b47486!2sAv.%20San%20Mart%C3%ADn%20534%2C%20P3610%20Clorinda%2C%20Formosa!5e0!3m2!1ses-419!2sar!4v1603046570292!5m2!1ses-419!2sar', 'B Simon Bolivar\r\nMz1 C29', 10, '7:00hs-\r\n20:00hs'),
(11, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.5083834358607!2d-57.71422398533885!3d-25.287118133456207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945d08c2a873cd8b%3A0x783935a904b47486!2sAv.%20San%20Mart%C3%ADn%20534%2C%20P3610%20Clorinda%2C%20Formosa!5e0!3m2!1ses-419!2sar!4v1603046570292!5m2!1ses-419!2sar', 'San Martin 534', 11, '7:00hs-\r\n20:00hs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacias`
--

CREATE TABLE `farmacias` (
  `id_farmacias` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `farmacias`
--

INSERT INTO `farmacias` (`id_farmacias`, `nombre`) VALUES
(1, 'FORMOSA 1'),
(2, 'FORMOSA 2'),
(3, 'SAN LUIS I'),
(4, 'SAN LUIS II'),
(5, 'SAN LUIS III'),
(6, 'PRINGLES'),
(7, 'CIRCUITO 5'),
(8, 'FORFAR'),
(9, 'MORENO'),
(10, 'MORENO ANEXO I'),
(11, 'SAN LUIS IV'),
(12, 'FERREYRA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_sociales`
--

CREATE TABLE `obras_sociales` (
  `id_obras_social` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(13, 'Juan David', 'Ferreira', '35625161', '1994-06-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `detalle` varchar(200) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `presentacion` varchar(100) DEFAULT NULL,
  `codigo_barra` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 'lucas@gmail.com', '$2y$10$JHZ496MetGQW49oQZCdRWOV9LcUnkrfvUAvvU8l0CzTTEhq6dOKC6', 6),
(4, 'vieracarlos10@gmail.com', '$2y$10$83EBecEBmbK6YEFwyJPyAOjCqHrEsy5W6hyIkLWPcnwTPDu5smqrO', 7),
(6, 'vieraatilio2017@gmail.com', '$2y$10$0OQPIF9tnHJ8Z54PpwrrWubDIrXRfj.MofOw/oiZyEBfU47nLmqZO', 9),
(8, 'hebercaballero@outlook.com', '$2y$10$g8j6d7hjAvqEM4O82mxG.uigMXGFZhcCFl3ZJlLPKLmxt5MUAYM7q', 11),
(9, 'juandavid9a0@gmail.com', '$2y$10$rhF9GGXggmP.UoIMXL9ZgugCs0tU7VCAp7NP3Q3tjlP7YDvM0tYFG', 12),
(10, 'juandavid90@gmail.com', '$2y$10$KPzbWnNVBNbftGNNv926zeiL49mfsJWaHUKkVvYJG7n5NuSuaT.yW', 13);

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
  ADD PRIMARY KEY (`id_convenios`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `farmacias`
--
ALTER TABLE `farmacias`
  ADD PRIMARY KEY (`id_farmacias`);

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
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

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
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `farmacias`
--
ALTER TABLE `farmacias`
  MODIFY `id_farmacias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
