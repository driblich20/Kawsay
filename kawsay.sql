-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2016 a las 05:07:49
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kawsay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegio`
--

CREATE TABLE IF NOT EXISTS `colegio` (
  `col_usu_correo` varchar(25) NOT NULL,
  `col_usu_nombre` varchar(25) NOT NULL,
  `col_password` varchar(25) NOT NULL,
  `col_id` int(11) NOT NULL,
  `col_punt_id` int(11) NOT NULL,
  `col_fecha_log` date NOT NULL,
  `col_privilegio` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`col_usu_correo`),
  UNIQUE KEY `col_password` (`col_password`),
  UNIQUE KEY `col_usu_nombre` (`col_usu_nombre`),
  KEY `col_nombre` (`col_id`),
  KEY `col_nombre_2` (`col_id`),
  KEY `punt_id` (`col_punt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colegio`
--

INSERT INTO `colegio` (`col_usu_correo`, `col_usu_nombre`, `col_password`, `col_id`, `col_punt_id`, `col_fecha_log`, `col_privilegio`) VALUES
('admin@gmail.com', 'mastersillo', 'mast3r', 1, 0, '2016-05-08', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios`
--

CREATE TABLE IF NOT EXISTS `colegios` (
  `col_id` int(11) NOT NULL AUTO_INCREMENT,
  `col_ciudad` varchar(12) NOT NULL,
  `col_nombre` varchar(30) NOT NULL,
  `col_dependencia` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`col_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `colegios`
--

INSERT INTO `colegios` (`col_id`, `col_ciudad`, `col_nombre`, `col_dependencia`) VALUES
(1, 'La Paz', 'San Calixto', 'Privado'),
(2, 'La Paz', 'Instituto Americano', 'Privado'),
(3, 'La Paz', 'San Patricio', 'Privado'),
(4, 'Oruro', 'AlemÃ¡n', 'Privado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `sol_id` int(11) NOT NULL AUTO_INCREMENT,
  `sol_colegio` varchar(30) NOT NULL,
  `sol_ciudad` varchar(20) NOT NULL,
  `sol_dependencia` varchar(10) NOT NULL,
  `sol_visto` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`sol_id`, `sol_colegio`, `sol_ciudad`, `sol_dependencia`, `sol_visto`) VALUES
(1, 'San Calixto', 'PotosÃ­', 'Fiscal', 1),
(2, 'Instituto Americano', 'Santa Cruz', 'Privado', 1),
(3, 'San Patricio', 'La Paz', 'Privado', 1),
(4, 'AlemÃ¡n', 'Oruro', 'Privado', 1),
(5, 'Instituto Americano', 'La Paz', 'Privado', 1),
(6, 'San Calixto', 'La Paz', 'Privado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_correo` varchar(25) NOT NULL,
  `usu_nombre` varchar(25) NOT NULL,
  `usu_password` varchar(25) NOT NULL,
  `usu_fecha_log` date NOT NULL,
  `usu_punt_id` int(11) NOT NULL DEFAULT '0',
  `usu_privilegio` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`usu_correo`),
  UNIQUE KEY `usu_nombre` (`usu_nombre`),
  KEY `usu_puntaje` (`usu_punt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_correo`, `usu_nombre`, `usu_password`, `usu_fecha_log`, `usu_punt_id`, `usu_privilegio`) VALUES
('admin@gmail.com', 'mastersillo', 'mast3r', '2016-07-05', 0, 1),
('blipich@gmail.com', 'palgo', 'asdsd', '2016-04-28', 0, 0),
('blopa@hotmail.com', 'pals', 'pahd', '2016-04-27', 0, 0),
('clau@hotmail.com', 'claudio', 'poloo', '2016-04-27', 0, 0),
('dieomontes@hotmail.com', 'pabuq', 'lajsdf', '2016-04-27', 0, 0),
('driblich12@gmail.com', 'blooopa', 'pablo', '2016-04-28', 0, 0),
('gimo@gmail.com', 'poli', 'jiji', '2016-04-27', 0, 0),
('ogpl@hotmail.com', 'marty', 'poÃ±o', '2016-05-01', 0, 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `colegio`
--
ALTER TABLE `colegio`
  ADD CONSTRAINT `colegio_ibfk_1` FOREIGN KEY (`col_id`) REFERENCES `colegios` (`col_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
