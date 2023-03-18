-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-03-2023 a las 00:13:44
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id20029126_programador__web__282`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombre`, `apellido`, `email`, `mensaje`) VALUES
(1, 'dddd', 'dd', 'aa', 'aa'),
(2, 'sada', 'aa', 'asa', 'dasdadasdasdas'),
(3, 's', 's', 'rodriguez.superviell', 'aaaaa'),
(4, 's', 's', 'rodriguez.superviell', 'aaaaa'),
(5, 'a', 'a', 'rodriguez.superviell', 'aaa'),
(6, 'a', 'a', 'rodriguez.superviell', 'aaa'),
(7, 'a', 'a', 'rodriguez.superviell', 'aaa'),
(8, 'aaa', 'ra', 'nicolas_rodriguez1@h', 'pruebaaaa'),
(9, 'saa', 'aa', 'rodriguez.superviell', 'asdqfgvv'),
(10, 'saa', 'aa', 'rodriguez.superviell', 'goalssas'),
(11, 'aq', 'bv', 'nicolas_rodriguez1@h', 'avvb'),
(12, 'aq', 'bv', 'nicolas_rodriguez1@h', 'avvb'),
(13, 'aaa', 'aa', 'nicolas_rodriguez1@h', 'ddd'),
(14, 'vff', 'qq', 'rodriguez.superviell', 'adasd'),
(15, '', '', '', ''),
(16, 'probando', 'PRBOANDO', 'PROBANDO@RPOBNADO', 'PROBNADO'),
(17, 'shavo', 'shavo', 'shavo@shalam.com', 'Obrigado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
