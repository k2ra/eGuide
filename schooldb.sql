-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-09-2018 a las 23:32:56
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
  `cod_materia` int(10) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_educador`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_educadores`
--

INSERT INTO `tbl_educadores` (`id_educador`, `nombres`, `apellidos`, `cedula`, `cod_materia`, `estado`) VALUES
(1, 'juan', 'perez', 88888888, 1, 1),
(2, 'maria', 'rodriguez', 9999999, 10, 1),
(3, 'jeronimo', 'mejia', 87777777, 7, 1),
(4, 'Florencia', 'Benítez Huerta', 71284408, 2, 1),
(5, 'Mariola', 'Callas Castaneda', 8046873, 3, 1),
(6, 'Johann', 'Velasco Linares', 6543261, 4, 1),
(7, 'Elba', 'Hernandes Villegas', 3967027, 5, 1),
(8, 'Eira', 'Perales Gaytan', 2044342, 6, 1),
(9, 'Alejandrina', 'Lomeli Enríquez', 83293816, 8, 1),
(10, 'Salvador', 'Roldán Guevara', 9244265, 9, 1),
(11, 'Severino', 'Peres Vera', 4238160, 11, 1);

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
-- Estructura de tabla para la tabla `tbl_materia`
--

DROP TABLE IF EXISTS `tbl_materia`;
CREATE TABLE IF NOT EXISTS `tbl_materia` (
  `cod_materia` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_materia`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_materia`
--

INSERT INTO `tbl_materia` (`cod_materia`, `descripcion`) VALUES
(1, 'Matematicas'),
(2, 'Español'),
(3, 'Ingles'),
(4, 'Geografia'),
(5, 'Historia'),
(6, 'Educacion Cristiana'),
(7, 'Civica'),
(8, 'Expresiones Artisticas'),
(9, 'Informatica'),
(10, 'Ciencias Naturales'),
(11, 'Educacion Fisica');

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
