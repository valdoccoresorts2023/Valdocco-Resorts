-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-05-2023 a las 19:50:51
-- Versión del servidor: 5.7.15-log
-- Versión de PHP: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hoteles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `docum` varchar(10) NOT NULL,
  `fechain` date NOT NULL,
  `fechaout` date NOT NULL,
  `adultos` int(1) NOT NULL,
  `niños` int(1) NOT NULL,
  `adulto1` varchar(50) NOT NULL,
  `adulto2` varchar(50) NOT NULL,
  `kid1` varchar(50) NOT NULL,
  `kid2` varchar(50) NOT NULL,
  `idroom` varchar(2) NOT NULL,
  `room` varchar(50) NOT NULL,
  `valor` int(10) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`docum`, `fechain`, `fechaout`, `adultos`, `niños`, `adulto1`, `adulto2`, `kid1`, `kid2`, `idroom`, `room`, `valor`, `pais`, `telefono`) VALUES
('45155', '2023-04-19', '2023-04-24', 2, 1, 'RAFAEL ESCORCIA AMADOR', 'DORIS ELIZABETH SILIEZAR', 'RAFAEL ALEJANDRO ESCORCIA', '', 'H1', 'H1-HABITACION PRESIDENCIAL LUIS XV', 350, 'EL SALVADOR', '22536047'),
('9999990', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', '', 0, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
