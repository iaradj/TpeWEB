-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 23:24:41
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_vinilos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_g` int(11) NOT NULL,
  `genero` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_g`, `genero`) VALUES
(2, 'Pop'),
(3, 'Indie Rock '),
(4, 'Desert rock'),
(5, 'Rock'),
(11, 'FELI<3'),
(12, 'FELIPE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinilos`
--

CREATE TABLE `vinilos` (
  `id` int(11) NOT NULL,
  `vinilo` varchar(50) NOT NULL,
  `artista` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `lanzamiento` int(11) NOT NULL,
  `generosfk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vinilos`
--

INSERT INTO `vinilos` (`id`, `vinilo`, `artista`, `precio`, `lanzamiento`, `generosfk`) VALUES
(1, 'Big Blue', 'Bandalos Chinos', 2022, 4500, 4),
(2, 'Ultraviolence', 'Lana Del Rey', 20000, 2014, 4),
(8, 'Cabildo y Juramento', 'Conociendo Rusia', 2019, 10000, 5),
(35, 'Comedown Machine', 'The Strokes', 2013, 9000, 4),
(36, 'The New Abnormal', 'The Strokes', 13000, 2020, 5),
(37, 'Revolver', 'The Beatles', 8500, 1967, 5),
(38, 'Strangeways, Here we come', 'The Smiths', 9000, 1985, 5),
(39, ' Bohemian Rhapsody', 'Queen', 15000, 1975, 5),
(41, 'Humbug', 'Arctic Monkeys', 8910, 2009, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_g`);

--
-- Indices de la tabla `vinilos`
--
ALTER TABLE `vinilos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `generosfk` (`generosfk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_g` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `vinilos`
--
ALTER TABLE `vinilos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vinilos`
--
ALTER TABLE `vinilos`
  ADD CONSTRAINT `genero_fk` FOREIGN KEY (`generosfk`) REFERENCES `generos` (`id_g`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
