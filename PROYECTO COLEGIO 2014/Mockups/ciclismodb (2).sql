-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2014 a las 23:28:19
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ciclismodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `Nombre`, `Descripcion`) VALUES
(1, 'Pre-cadetes', '10 a 13 aÃ±os'),
(2, 'Cadetes', '13 a 15 aÃ±os'),
(3, 'Juvenil', '15 a 18 aÃ±os'),
(4, 'Elite', '18 a 35 aÃ±os'),
(5, 'Master', '35 aÃ±os en adelante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclista`
--

CREATE TABLE IF NOT EXISTS `ciclista` (
  `IdMaillot` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `CodigoUCI` varchar(15) NOT NULL,
  `Equipo_idEquipo` int(11) NOT NULL,
  PRIMARY KEY (`IdMaillot`),
  KEY `fk_Ciclista_Equipo1_idx` (`Equipo_idEquipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciclista`
--

INSERT INTO `ciclista` (`IdMaillot`, `Nombre`, `Apellido`, `FechaNacimiento`, `CodigoUCI`, `Equipo_idEquipo`) VALUES
(1, 'Santiago ', 'Rodriguez', '2000-01-01', 'Gua1', 1),
(2, 'Mario', 'Cottom', '2000-02-01', 'Gua2', 2),
(3, 'Manuel', 'Rodas', '2000-03-01', 'Gua3', 3),
(4, 'Marvin ', 'Montalvo', '2000-04-01', 'Gua4', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE IF NOT EXISTS `clasificacion` (
  `idClasificacion` int(11) NOT NULL AUTO_INCREMENT,
  `Tiempo` time NOT NULL,
  `Inscripcion_idInscripcion` int(11) NOT NULL,
  PRIMARY KEY (`idClasificacion`),
  KEY `fk_Clasificacion_Inscripcion1_idx` (`Inscripcion_idInscripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`idClasificacion`, `Tiempo`, `Inscripcion_idInscripcion`) VALUES
(1, '03:04:05', 1),
(2, '01:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `idEquipo` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEquipo` varchar(75) NOT NULL,
  PRIMARY KEY (`idEquipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idEquipo`, `NombreEquipo`) VALUES
(1, 'Coca-cola'),
(2, 'CableDX-DecorabaÃ±os'),
(3, 'Hinno'),
(4, 'Instacooffe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(75) NOT NULL,
  `Fecha` date NOT NULL,
  `Distancia` varchar(45) NOT NULL,
  `Lugar` varchar(100) NOT NULL,
  `Hora` time NOT NULL,
  `TipoEvento_idTipoEvento` int(11) NOT NULL,
  PRIMARY KEY (`idEvento`),
  KEY `fk_Evento_TipoEvento_idx` (`TipoEvento_idTipoEvento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `Nombre`, `Fecha`, `Distancia`, `Lugar`, `Hora`, `TipoEvento_idTipoEvento`) VALUES
(1, 'Vuelta a Guatemala I', '2014-06-07', '80 km', 'Guatemala', '08:00:00', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE IF NOT EXISTS `inscripcion` (
  `idInscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `Evento_idEvento` int(11) NOT NULL,
  `Categoria_idCategoria` int(11) NOT NULL,
  `Ciclista_IdMaillot` int(11) NOT NULL,
  PRIMARY KEY (`idInscripcion`),
  KEY `fk_Inscripcion_Evento1_idx` (`Evento_idEvento`),
  KEY `fk_Inscripcion_Categoria1_idx` (`Categoria_idCategoria`),
  KEY `fk_Inscripcion_Ciclista1_idx` (`Ciclista_IdMaillot`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`idInscripcion`, `Evento_idEvento`, `Categoria_idCategoria`, `Ciclista_IdMaillot`) VALUES
(1, 1, 2, 1),
(2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoevento`
--

CREATE TABLE IF NOT EXISTS `tipoevento` (
  `idTipoEvento` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idTipoEvento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipoevento`
--

INSERT INTO `tipoevento` (`idTipoEvento`, `Nombre`) VALUES
(1, 'Circuito'),
(2, 'Destreza'),
(3, 'Contrareloj'),
(4, 'Ruta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `NombreUsuario`, `Password`) VALUES
(1, 'Jose', 'Jose');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciclista`
--
ALTER TABLE `ciclista`
  ADD CONSTRAINT `fk_Ciclista_Equipo1` FOREIGN KEY (`Equipo_idEquipo`) REFERENCES `equipo` (`idEquipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD CONSTRAINT `fk_Clasificacion_Inscripcion1` FOREIGN KEY (`Inscripcion_idInscripcion`) REFERENCES `inscripcion` (`idInscripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `fk_Evento_TipoEvento` FOREIGN KEY (`TipoEvento_idTipoEvento`) REFERENCES `tipoevento` (`idTipoEvento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `fk_Inscripcion_Categoria1` FOREIGN KEY (`Categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Inscripcion_Ciclista1` FOREIGN KEY (`Ciclista_IdMaillot`) REFERENCES `ciclista` (`IdMaillot`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Inscripcion_Evento1` FOREIGN KEY (`Evento_idEvento`) REFERENCES `evento` (`idEvento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
