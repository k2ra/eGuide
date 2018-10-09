-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-10-2018 a las 23:56:54
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `schooldb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_asignaciones`
--

DROP TABLE IF EXISTS `tbl_asignaciones`;
CREATE TABLE IF NOT EXISTS `tbl_asignaciones` (
  `cod_materia` int(11) NOT NULL AUTO_INCREMENT,
  `fk_hora` int(11) NOT NULL,
  `fk_grupo` varchar(5) NOT NULL,
  `tipo_actividad` varchar(20) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha_ingreso` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cod_materia`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_asignaciones`
--

INSERT INTO `tbl_asignaciones` (`cod_materia`, `fk_hora`, `fk_grupo`, `tipo_actividad`, `descripcion`, `fecha_ingreso`) VALUES
(1, 11, '7a', 'Notas Diarias', 'Hacer practica del libro pagina 24-25-28', '2018-10-03 18:15:23'),
(2, 13, '7a', 'Notas Diarias', 'ejercicio palabras sinónimas', '2018-10-09 00:00:00'),
(4, 21, '7a', 'recordatorio', 'traer croquis', '2018-10-09 17:55:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_calificaciones`
--

DROP TABLE IF EXISTS `tbl_calificaciones`;
CREATE TABLE IF NOT EXISTS `tbl_calificaciones` (
  `fk_estudianteId` int(11) NOT NULL,
  `fk_materia` int(11) NOT NULL,
  `tipo_nota` varchar(10) NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_educadores`
--

DROP TABLE IF EXISTS `tbl_educadores`;
CREATE TABLE IF NOT EXISTS `tbl_educadores` (
  `id_educador` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `cedula` int(11) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_educador`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_educadores`
--

INSERT INTO `tbl_educadores` (`id_educador`, `nombres`, `apellidos`, `cedula`, `estado`) VALUES
(1, 'juan', 'perez', 88888888, 1),
(2, 'maria', 'rodriguez', 9999999, 1),
(3, 'jeronimo', 'mejia', 87777777, 1),
(4, 'Florencia', 'Benítez Huerta', 71284408, 1),
(5, 'Mariola', 'Callas Castaneda', 8046873, 1),
(6, 'Johann', 'Velasco Linares', 6543261, 1),
(7, 'Elba', 'Hernandes Villegas', 3967027, 1),
(8, 'Eira', 'Perales Gaytan', 2044342, 1),
(9, 'Alejandrina', 'Lomeli Enríquez', 83293816, 1),
(10, 'Salvador', 'Roldán Guevara', 9244265, 1),
(11, 'Severino', 'Peres Vera', 4238160, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estudiantes`
--

DROP TABLE IF EXISTS `tbl_estudiantes`;
CREATE TABLE IF NOT EXISTS `tbl_estudiantes` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cedula` int(11) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion` varchar(200) NOT NULL,
  `grado` int(11) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_estudiantes`
--

INSERT INTO `tbl_estudiantes` (`id_estudiante`, `nombre`, `apellido`, `cedula`, `fecha_nacimiento`, `direccion`, `grado`) VALUES
(1, 'kevin', 'rojas', 88162061, '1988-06-30', 'tocumen', 7),
(2, 'Juan', 'Rodriguez', 81111111, '1988-06-30', 'Panama', 8),
(3, 'Luis', 'Cedeño', 8, '1989-05-10', 'Panama', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estudiante_grupo`
--

DROP TABLE IF EXISTS `tbl_estudiante_grupo`;
CREATE TABLE IF NOT EXISTS `tbl_estudiante_grupo` (
  `fk_estudianteId` int(11) NOT NULL,
  `fk_grupoId` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_estudiante_grupo`
--

INSERT INTO `tbl_estudiante_grupo` (`fk_estudianteId`, `fk_grupoId`) VALUES
(1, '7a'),
(2, '8a'),
(3, '9a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_grupos`
--

DROP TABLE IF EXISTS `tbl_grupos`;
CREATE TABLE IF NOT EXISTS `tbl_grupos` (
  `id_grupo` varchar(5) NOT NULL,
  `descripcion` varchar(5) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_grupos`
--

INSERT INTO `tbl_grupos` (`id_grupo`, `descripcion`) VALUES
('7a', '7° A'),
('8a', '8° A'),
('9a', '9° A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horario`
--

DROP TABLE IF EXISTS `tbl_horario`;
CREATE TABLE IF NOT EXISTS `tbl_horario` (
  `id_horario` int(10) NOT NULL,
  `horaInicio` varchar(20) NOT NULL,
  `horaFinal` varchar(20) NOT NULL,
  `dia` varchar(10) NOT NULL,
  PRIMARY KEY (`id_horario`),
  UNIQUE KEY `id_horario` (`id_horario`,`horaInicio`,`dia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_horario`
--

INSERT INTO `tbl_horario` (`id_horario`, `horaInicio`, `horaFinal`, `dia`) VALUES
(11, '7:00 AM', '8:00 AM', 'LUNES'),
(12, '8:00 AM', '9:00 AM', 'LUNES'),
(13, '9:00 AM', '10:00 AM', 'LUNES'),
(14, '10:00 AM', '11:00 AM', 'LUNES'),
(23, '9:00 AM', '10:00 AM', 'MARTES'),
(24, '10:00 AM', '11:00 AM', 'MARTES'),
(21, '7:00 AM', '8:00 AM', 'MARTES'),
(22, '8:00 AM', '9:00 AM', 'MARTES'),
(31, '7:00 AM', '8:00 AM', 'MIERCOLES'),
(32, '8:00 AM', '9:00 AM', 'MIERCOLES'),
(33, '9:00 AM', '10:00 AM', 'MIERCOLES'),
(34, '10:00 AM', '11:00 AM', 'MIERCOLES'),
(41, '7:00 AM', '8:00 AM', 'JUEVES'),
(42, '8:00 AM', '9:00 AM', 'JUEVES'),
(43, '9:00 AM', '10:00 AM', 'JUEVES'),
(44, '10:00 AM', '11:00 AM', 'JUEVES'),
(51, '7:00 AM', '8:00 AM', 'VIERNES'),
(52, '8:00 AM', '9:00 AM', 'VIERNES'),
(53, '9:00 AM', '10:00 AM', 'VIERNES'),
(54, '10:00 AM', '11:00 AM', 'VIERNES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horario_semanal`
--

DROP TABLE IF EXISTS `tbl_horario_semanal`;
CREATE TABLE IF NOT EXISTS `tbl_horario_semanal` (
  `cod_horario` int(10) NOT NULL,
  `fk_materia` int(11) NOT NULL,
  `fk_grupo` varchar(5) NOT NULL,
  UNIQUE KEY `cod_horario` (`cod_horario`,`fk_grupo`) USING BTREE,
  UNIQUE KEY `cod_horario_2` (`cod_horario`,`fk_materia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_horario_semanal`
--

INSERT INTO `tbl_horario_semanal` (`cod_horario`, `fk_materia`, `fk_grupo`) VALUES
(11, 1, '7a'),
(12, 1, '7a'),
(13, 2, '7a'),
(14, 2, '7a'),
(21, 4, '7a'),
(22, 5, '7a'),
(23, 3, '7a'),
(24, 3, '7a'),
(31, 2, '7a'),
(32, 3, '7a'),
(33, 4, '7a'),
(34, 5, '7a'),
(41, 1, '7a'),
(42, 3, '7a'),
(43, 3, '7a'),
(44, 5, '7a'),
(51, 5, '7a'),
(52, 2, '7a'),
(53, 4, '7a'),
(54, 4, '7a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materia`
--

DROP TABLE IF EXISTS `tbl_materia`;
CREATE TABLE IF NOT EXISTS `tbl_materia` (
  `cod_materia` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `fk_educador` int(11) NOT NULL,
  PRIMARY KEY (`cod_materia`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_materia`
--

INSERT INTO `tbl_materia` (`cod_materia`, `descripcion`, `fk_educador`) VALUES
(1, 'Matematicas', 1),
(2, 'Español', 4),
(3, 'Ingles', 5),
(4, 'Geografia', 6),
(5, 'Historia', 7),
(6, 'Educacion Cristiana', 8),
(7, 'Civica', 3),
(8, 'Expresiones Artisticas', 9),
(9, 'Informatica', 10),
(10, 'Ciencias Naturales', 2),
(11, 'Educacion Fisica', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_materias_grupo`
--

DROP TABLE IF EXISTS `tbl_materias_grupo`;
CREATE TABLE IF NOT EXISTS `tbl_materias_grupo` (
  `fk_grupo` varchar(5) NOT NULL,
  `fk_materia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_materias_grupo`
--

INSERT INTO `tbl_materias_grupo` (`fk_grupo`, `fk_materia`) VALUES
('7a', 1),
('7a', 2),
('7a', 3),
('7a', 4),
('7a', 5),
('8a', 6),
('8a', 7),
('8a', 8),
('8a', 9),
('8a', 10),
('9a', 1),
('9a', 2),
('9a', 3),
('9a', 4),
('9a', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_role`
--

DROP TABLE IF EXISTS `tbl_role`;
CREATE TABLE IF NOT EXISTS `tbl_role` (
  `id_role` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `descripcion`) VALUES
(1, 'Adminitrativo'),
(2, 'Profesor'),
(3, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `fk_IdRole` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `rol` int(1) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `fk_IdRole`, `nombre`, `usuario`, `clave`, `rol`, `estado`) VALUES
(1, 1, 'Kevin Rojas', 'krojas', 'admin', 3, 1),
(2, 2, 'Juan Rodriguez', 'jrodriguez', '12345', 3, 1),
(3, 3, 'Luis Cedeño', 'lcedeno', '12345', 3, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
