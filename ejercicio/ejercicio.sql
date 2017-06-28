-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2017 a las 15:34:20
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejercicio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `ciudad`, `provincia`, `latitud`, `longitud`) VALUES
(1, 'Madrid', 'Madrid', 40.4167018, -3.703778800000009),
(2, 'Getafe', 'Madrid', 40.30858970000001, -3.732916199999977),
(3, 'Leganés', 'Madrid', 40.3320764, -3.768786500000033),
(4, 'Móstoles', 'Madrid', 40.32331870000001, -3.8676849999999376),
(5, 'Alcalá de Henares', 'Madrid', 40.4820397, -3.363514000000009),
(6, 'Fuenlabrada', 'Madrid', 40.2905389, -3.8037190999999666),
(7, 'Barcelona', 'Barcelona', 41.3850595, 2.173406699999987),
(8, 'Hospitalet de Llobregat', 'Barcelona', 41.366161, 2.116547800000035),
(9, 'Badalona', 'Barcelona', 41.44718, 2.2447899999999663),
(10, 'Tarrasa', 'Barcelona', 41.5633118, 2.008912699999996),
(11, 'Sabadell', 'Barcelona', 41.5462534, 2.108571299999994),
(12, 'Valencia', 'Valencia', 39.4701285, -0.37622620000001916),
(13, 'Torrente', 'Valencia', 39.4321797, -0.47231940000006034),
(14, 'Gandía', 'Valencia', 38.9680466, -0.18455370000003768),
(15, 'Paterna', 'Valencia', 39.5035882, -0.4431250000000091),
(16, 'Sagunto', 'Valencia', 39.6798664, -0.27845030000003135),
(17, 'Sevilla', 'Sevilla', 37.3891044, -5.984507200000053),
(18, 'Dos Hermanas', 'Sevilla', 37.2866725, -5.924567400000001),
(19, 'Alcalá de Guadaíra', 'Sevilla', 37.33975, -5.841769999999997),
(20, 'Utrera', 'Sevilla', 37.1848208, -5.77946559999998),
(21, 'Mairena del Aljarafe', 'Sevilla', 37.3401302, -6.062379400000054),
(22, 'Écija', 'Sevilla', 37.5414766, -5.082706899999948),
(23, 'Bilbao', 'Vizcaya', 43.26336, -2.9350500000000466),
(24, 'Baracaldo', 'Vizcaya', 43.2967518, -2.985929800000008),
(25, 'Guecho', 'Vizcaya', 43.3388385, -3.008164500000021),
(26, 'Portugalete', 'Vizcaya', 43.31635139999999, -3.0201113000000532),
(27, 'Santurzi', 'Vizcaya', 43.3281245, -3.033647999999971);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
