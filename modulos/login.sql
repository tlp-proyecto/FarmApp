-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2020 a las 02:06:52
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(2, 'carlos@10.com', '$2y$10$nDnS8aJ14ZYvR9YmfH450uEITKn1DTSwm8AQGb18bv1FzITAaCvxq'),
(3, 'vieracarlos10@gmail.com', '$2y$10$s7wB0T1k2LcyT73Lvx0sJOnSwY7EfgFWcswU15QkwzHwjtFW4CIpm'),
(4, 'walterviera@98.com', '$2y$10$X15MitKAIM5lLdw/4N1iB..KNu3IRiJXZu.UhyN4993bYzPFQkhFC'),
(5, 'dani@98.com', '$2y$10$Kohv2IYBxFHmqmpih8u1vepNUSESJPPDjBqbOV4wVWSRHK.dyLU7a'),
(6, 'manu@98', '$2y$10$YeroajmwRF8LPE5AMYvFuO5VE925kLKuG33keZWTkEOYDBFwhyQCC'),
(24, 'marce_cantero@gmail.com', '$2y$10$YQlaCormHTVMjlBugpTEeOvX7b4lO/QQW3EQCssz46JABBUpvzgXq'),
(18, 'nico22@gmail.com', '$2y$10$7Bmdlr.jgQLhHh0zddoZpO887eUFyehcVt11v5O3IlimWQzrYKCvm'),
(21, 'dayesquivel@gamil.com', '$2y$10$YlYkIZKywZp7m1eAiV5bgOgWYD35pAHVyoPkQzDepBd9wRJTzTgjm'),
(22, 'fufi@gmail.com', '$2y$10$5yX7kiTHjLQRtJIlku.HieUwyHhRWFg7s77TLrUNuF2249o9lAIRm'),
(23, 'cachete@gmail.com', '$2y$10$gplv2mNRWbYZN9iTO1hKfu67iecDwmhzBm647.E8/l2yCBTPAFugG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
