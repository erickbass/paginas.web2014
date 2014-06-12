-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-06-2014 a las 04:58:45
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `colegioayo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `idalumno` int(11) NOT NULL AUTO_INCREMENT,
  `carnet` varchar(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `responsable_idpadres` int(11) NOT NULL,
  `asignacion_seccion_curso_idasignacion_seccion` int(11) NOT NULL,
  PRIMARY KEY (`idalumno`),
  KEY `fk_alumno_responsable1_idx` (`responsable_idpadres`),
  KEY `fk_alumno_asignacion_seccion_curso1_idx` (`asignacion_seccion_curso_idasignacion_seccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idalumno`, `carnet`, `nombre`, `apellido`, `fechanacimiento`, `edad`, `responsable_idpadres`, `asignacion_seccion_curso_idasignacion_seccion`) VALUES
(1, '$carne', '$nombre', '$apellido', '0000-00-00', 0, 1, 6),
(2, '1', 'jose', 'Molina', '0200-01-01', 14, 1, 4),
(3, '2', 'Ssteb', 'Ruiz', '1988-11-24', 25, 3, 6),
(4, '3', 'Ivan', 'de Leon ', '1986-09-05', 28, 4, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_seccion_curso`
--

CREATE TABLE IF NOT EXISTS `asignacion_seccion_curso` (
  `idasignacion_seccion` int(11) NOT NULL AUTO_INCREMENT,
  `seccion_idseccion` int(11) NOT NULL,
  `grado_idgrado` int(11) NOT NULL,
  `profesor_idprofesor` int(11) NOT NULL,
  PRIMARY KEY (`idasignacion_seccion`),
  KEY `fk_seccion_has_grado_grado1_idx` (`grado_idgrado`),
  KEY `fk_seccion_has_grado_seccion1_idx` (`seccion_idseccion`),
  KEY `fk_asignacion_seccion_curso_profesor1_idx` (`profesor_idprofesor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `asignacion_seccion_curso`
--

INSERT INTO `asignacion_seccion_curso` (`idasignacion_seccion`, `seccion_idseccion`, `grado_idgrado`, `profesor_idprofesor`) VALUES
(4, 7, 19, 1),
(5, 8, 20, 2),
(6, 9, 21, 4),
(7, 7, 21, 2),
(8, 10, 22, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE IF NOT EXISTS `grado` (
  `idgrado` int(11) NOT NULL AUTO_INCREMENT,
  `grado` int(11) NOT NULL,
  PRIMARY KEY (`idgrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`idgrado`, `grado`) VALUES
(19, 1),
(20, 2),
(21, 3),
(22, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE IF NOT EXISTS `inscripcion` (
  `idinscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `pago` decimal(2,0) NOT NULL,
  PRIMARY KEY (`idinscripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `idmateria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `grado_idgrado` int(11) NOT NULL,
  PRIMARY KEY (`idmateria`),
  KEY `fk_materia_grado1_idx` (`grado_idgrado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idmateria`, `nombre`, `grado_idgrado`) VALUES
(1, 'Matematicas', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensualidad`
--

CREATE TABLE IF NOT EXISTS `mensualidad` (
  `idmensualidad` int(11) NOT NULL AUTO_INCREMENT,
  `pago` decimal(2,0) NOT NULL,
  `fechapago` date NOT NULL,
  `mes` varchar(45) NOT NULL,
  PRIMARY KEY (`idmensualidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `idnota` int(11) NOT NULL AUTO_INCREMENT,
  `Total` int(11) NOT NULL,
  `materia_idmateria` int(11) NOT NULL,
  `unidad_idunidad` int(11) NOT NULL,
  `alumno_idalumno` int(11) NOT NULL,
  PRIMARY KEY (`idnota`),
  KEY `fk_nota_materia1_idx` (`materia_idmateria`),
  KEY `fk_nota_unidad1_idx` (`unidad_idunidad`),
  KEY `fk_nota_alumno1_idx` (`alumno_idalumno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`idnota`, `Total`, `materia_idmateria`, `unidad_idunidad`, `alumno_idalumno`) VALUES
(11, 0, 1, 1, 1),
(12, 90, 1, 1, 1),
(13, 80, 1, 1, 1),
(14, 90, 1, 1, 3),
(15, 50, 1, 2, 1),
(16, 40, 1, 2, 3),
(17, 70, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_realizados`
--

CREATE TABLE IF NOT EXISTS `pagos_realizados` (
  `idPagos_Realizados` int(11) NOT NULL,
  `inscripcion_idinscripcion` int(11) NOT NULL,
  `mensualidad_idmensualidad` int(11) NOT NULL,
  `alumno_idalumno` int(11) NOT NULL,
  PRIMARY KEY (`idPagos_Realizados`),
  KEY `fk_Pagos_Realizados_inscripcion1_idx` (`inscripcion_idinscripcion`),
  KEY `fk_Pagos_Realizados_mensualidad1_idx` (`mensualidad_idmensualidad`),
  KEY `fk_Pagos_Realizados_alumno1_idx` (`alumno_idalumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `idprofesor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `DPI` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idprofesor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idprofesor`, `nombre`, `apellido`, `telefono`, `Direccion`, `DPI`) VALUES
(1, 'jose', '', '55555', 'san juan', '1717'),
(2, 'Erik', 'Cardona', '66666666', 'Quetzaltenango', '1818'),
(3, '', '', '', '', ''),
(4, 'Ssteb', 'Ruiz', '888888888', 'Esperanza', '1919'),
(5, 'Luis', 'PÃ©rez', '88888888', 'Cajola', '2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE IF NOT EXISTS `responsable` (
  `idpadres` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `DPI` varchar(45) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idpadres`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `responsable`
--

INSERT INTO `responsable` (`idpadres`, `nombre`, `DPI`, `telefono`, `Direccion`) VALUES
(1, '$nombre', '$DPI', '$telefono', '$direccion'),
(2, '$nombre', '$DPI', '$telefono', '$direccion'),
(3, 'JOSE MOLINA', '1717', '55555555', 'SAN JUAN'),
(4, 'Jose Molina', '1717', '55555', 'san juan'),
(5, 'Jose', '1818', '999999999', 'Conce'),
(6, 'Jose', '1818', '999999999', 'Conce');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE IF NOT EXISTS `seccion` (
  `idseccion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`idseccion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`idseccion`, `nombre`) VALUES
(7, 'A'),
(8, 'B'),
(9, 'C'),
(10, 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE IF NOT EXISTS `unidad` (
  `idunidad` int(11) NOT NULL AUTO_INCREMENT,
  `unidad` int(11) NOT NULL,
  PRIMARY KEY (`idunidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`idunidad`, `unidad`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `NombreUser` varchar(64) NOT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `NombreUser`, `Password`) VALUES
(1, 'Jose', '123'),
(2, 'Maria', '2222'),
(7, 'Maria', '2222'),
(10, 'Julio', '3333'),
(11, 'Julio', '3333'),
(12, 'Rudy', '5555'),
(13, 'Ssteb', '6666'),
(14, 'ivan', 'ivan'),
(16, 'molina', 'molina');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_asignacion_seccion_curso1` FOREIGN KEY (`asignacion_seccion_curso_idasignacion_seccion`) REFERENCES `asignacion_seccion_curso` (`idasignacion_seccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumno_responsable1` FOREIGN KEY (`responsable_idpadres`) REFERENCES `responsable` (`idpadres`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asignacion_seccion_curso`
--
ALTER TABLE `asignacion_seccion_curso`
  ADD CONSTRAINT `fk_asignacion_seccion_curso_profesor1` FOREIGN KEY (`profesor_idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_seccion_has_grado_grado1` FOREIGN KEY (`grado_idgrado`) REFERENCES `grado` (`idgrado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_seccion_has_grado_seccion1` FOREIGN KEY (`seccion_idseccion`) REFERENCES `seccion` (`idseccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `fk_materia_grado1` FOREIGN KEY (`grado_idgrado`) REFERENCES `grado` (`idgrado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_nota_alumno1` FOREIGN KEY (`alumno_idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_materia1` FOREIGN KEY (`materia_idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_unidad1` FOREIGN KEY (`unidad_idunidad`) REFERENCES `unidad` (`idunidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pagos_realizados`
--
ALTER TABLE `pagos_realizados`
  ADD CONSTRAINT `fk_Pagos_Realizados_alumno1` FOREIGN KEY (`alumno_idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pagos_Realizados_inscripcion1` FOREIGN KEY (`inscripcion_idinscripcion`) REFERENCES `inscripcion` (`idinscripcion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pagos_Realizados_mensualidad1` FOREIGN KEY (`mensualidad_idmensualidad`) REFERENCES `mensualidad` (`idmensualidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
