-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2020 a las 19:29:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ochomiles`
--
CREATE DATABASE IF NOT EXISTS `ochomiles` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ochomiles`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pico`
--

DROP TABLE IF EXISTS `pico`;
CREATE TABLE `pico` (
  `orden` varchar(2) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `altura` int(11) DEFAULT NULL,
  `cordillera` varchar(50) DEFAULT NULL,
  `ascension` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pico`
--

INSERT INTO `pico` (`orden`, `nombre`, `altura`, `cordillera`, `ascension`) VALUES
('01', 'Everest', 8848, 'Himalaya', '1953'),
('02', 'K2', 8611, 'Karakorum', '1954'),
('03', 'Kangchenjunga', 8586, 'Himalaya', '1955'),
('04', 'Lhotse', 8516, 'Himalaya', '1956'),
('05', 'Makalu', 8462, 'Himalaya', '1955'),
('06', 'Cho Oyu', 8201, 'Himalaya', '1954'),
('07', 'Dhaulagiri', 8167, 'Himalaya', '1960'),
('08', 'Manaslu', 8163, 'Himalaya', '1956'),
('09', 'Nanga Parbat', 8125, 'Karakorum', '1953'),
('10', 'Annapurna', 8091, 'Himalaya', '1950'),
('11', 'Gasherbrum I', 8068, 'Karakorum', '1958'),
('12', 'Broad Peak', 8047, 'Karakorum', '1957'),
('13', 'Shisha Pangma', 8046, 'Himalaya', '1956'),
('14', 'Gasherbrum II', 8035, 'Karakorum', '1964');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pico`
--
ALTER TABLE `pico`
  ADD PRIMARY KEY (`orden`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Creamos el usuario
--

-- CREATE USER 'examen'@'localhost' IDENTIFIED BY 'examen123';
-- GRANT ALL PRIVILEGES ON *.* TO 'examen'@'localhost';
