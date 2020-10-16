-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2020 a las 02:37:07
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgihd`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarPeula` (IN `id` INT)  NO SQL
DELETE FROM `peulot` WHERE `idPeula` = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerModuloPorID` (IN `id` INT)  NO SQL
SELECT * FROM `modulos` WHERE `idModulo` = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerModulosPorTzevet` (IN `id` INT)  NO SQL
SELECT * FROM `modulos` WHERE `tzevet` = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerPeulaPorID` (IN `id` INT)  NO SQL
SELECT * FROM `peulot` WHERE `idPeula` = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarUsuario` (IN `id` INT, IN `contra` VARCHAR(50))  NO SQL
SELECT * FROM `usuarios` WHERE `idUsuario` = id and `contraseña` = sha(contra)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kvutzot`
--

CREATE TABLE `kvutzot` (
  `idKvutza` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tzevet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `kvutzot`
--

INSERT INTO `kvutzot` (`idKvutza`, `nombre`, `tzevet`) VALUES
(1, 'Primer Grado', 1),
(2, 'Hamitzim', 1),
(3, 'Kojabim', 1),
(4, 'Smeijim', 2),
(5, 'Jalomot', 2),
(6, 'Atzlanim', 2),
(7, 'Letamid', 2),
(8, 'Alufim', 3),
(9, 'Muflaim', 3),
(10, 'Adirim', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `idModulo` int(11) NOT NULL,
  `tzevet` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `racional` varchar(250) NOT NULL,
  `objetivos` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`idModulo`, `tzevet`, `nombre`, `racional`, `objetivos`) VALUES
(1, 3, 'modulo prueba', 'un racional cualquiera', 'unos objetivos cualquiera lol'),
(2, 3, 'segundo de prueba', 'que se yo master', 'algunos debe tener');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peulot`
--

CREATE TABLE `peulot` (
  `idPeula` int(11) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `subtema` varchar(100) DEFAULT NULL,
  `modulo` int(11) NOT NULL,
  `racional` varchar(250) NOT NULL,
  `objetivos` varchar(250) NOT NULL,
  `metodologia` varchar(250) NOT NULL,
  `jomer` varchar(250) DEFAULT NULL,
  `kvutza` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peulot`
--

INSERT INTO `peulot` (`idPeula`, `tema`, `subtema`, `modulo`, `racional`, `objetivos`, `metodologia`, `jomer`, `kvutza`, `fecha`) VALUES
(1, 'esto es un tema', 'esto no es un tema', 1, ' soy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racional', 'Ey! yo soy los objetivos', 'jaja hagan lo que quieran', 'una cartulina darling', 10, '2020-10-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tafkidim`
--

CREATE TABLE `tafkidim` (
  `idTafkid` int(11) NOT NULL,
  `nombreTafkid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tafkidim`
--

INSERT INTO `tafkidim` (`idTafkid`, `nombreTafkid`) VALUES
(1, 'madrij'),
(2, 'boguer'),
(3, 'mazkir'),
(4, 'rosh jinuj'),
(5, 'guizbar'),
(6, 'rakaz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tzvatim`
--

CREATE TABLE `tzvatim` (
  `idTzevet` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tzvatim`
--

INSERT INTO `tzvatim` (`idTzevet`, `nombre`) VALUES
(1, 'garinim'),
(2, 'tzeirim'),
(3, 'beinonim');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tafkid` int(11) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `kvutza` int(11) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `tafkid`, `telefono`, `contraseña`, `kvutza`, `admin`) VALUES
(44599213, 'Ioel', 'Galante', 1, '11 5152-2984', '700078ec98515558dbf112f629f65eaa49c17db1', 10, 1),
(44598553, 'Julian', 'Taiter', 1, '11 4409-1525', 'bf5daf4a9d310ce86114cb2b34c0d4457a735a2f', 6, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `kvutzot`
--
ALTER TABLE `kvutzot`
  ADD PRIMARY KEY (`idKvutza`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`idModulo`);

--
-- Indices de la tabla `peulot`
--
ALTER TABLE `peulot`
  ADD PRIMARY KEY (`idPeula`);

--
-- Indices de la tabla `tafkidim`
--
ALTER TABLE `tafkidim`
  ADD PRIMARY KEY (`idTafkid`);

--
-- Indices de la tabla `tzvatim`
--
ALTER TABLE `tzvatim`
  ADD PRIMARY KEY (`idTzevet`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `kvutzot`
--
ALTER TABLE `kvutzot`
  MODIFY `idKvutza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `idModulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `peulot`
--
ALTER TABLE `peulot`
  MODIFY `idPeula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tafkidim`
--
ALTER TABLE `tafkidim`
  MODIFY `idTafkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tzvatim`
--
ALTER TABLE `tzvatim`
  MODIFY `idTzevet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para la tabla kvutzot
--

--
-- Metadatos para la tabla modulos
--

--
-- Metadatos para la tabla peulot
--

--
-- Metadatos para la tabla tafkidim
--

--
-- Metadatos para la tabla tzvatim
--

--
-- Metadatos para la tabla usuarios
--

--
-- Metadatos para la base de datos sgihd
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
