-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2016 a las 15:18:24
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pdf`
--
CREATE DATABASE IF NOT EXISTS `pdf` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `pdf`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblalumno`
--

CREATE TABLE `tblalumno` (
  `idalumno` int(10) UNSIGNED NOT NULL,
  `paterno` varchar(15) NOT NULL,
  `materno` varchar(15) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `grado` varchar(10) NOT NULL,
  `grupo` varchar(2) NOT NULL,
  `fec_nac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblalumno`
--

INSERT INTO `tblalumno` (`idalumno`, `paterno`, `materno`, `nombre`, `grado`, `grupo`, `fec_nac`) VALUES
(1, 'fernandez', 'rodriguez', 'manuel', '1', 'c', '2015-05-12'),
(2, 'fer', 'rod', 'soila', '3', 'd', '2016-12-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblalumno`
--
ALTER TABLE `tblalumno`
  ADD PRIMARY KEY (`idalumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblalumno`
--
ALTER TABLE `tblalumno`
  MODIFY `idalumno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
