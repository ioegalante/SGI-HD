-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2020 a las 23:37:40
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10
=======
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-10-2020 a las 18:08:50
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35
>>>>>>> df2ca42897815e8b3e81d3ce2a9339ea9867ebd3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
DROP PROCEDURE IF EXISTS `editarJanij`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `editarJanij` (IN `id` INT, IN `nombre` VARCHAR(50), IN `apellido` VARCHAR(50), IN `kvutza` INT, IN `escuela` VARCHAR(100), IN `fechaNac` DATE, IN `telefono` VARCHAR(15), IN `mail` VARCHAR(50), IN `obs` VARCHAR(1500))  NO SQL
UPDATE `janijim` SET `nombre`=nombre,`apellido`=apellido,`kvutza`=kvutza,`fechaNac`=fechaNac,
`escuela`=escuela,`telefono`=telefono,`mail`=mail,`observaciones`=obs WHERE `idJanij`=id$$

DROP PROCEDURE IF EXISTS `EliminarPeula`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarPeula` (IN `id` INT)  NO SQL
DELETE FROM `peulot` WHERE `idPeula` = id$$

DROP PROCEDURE IF EXISTS `insertarJanij`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarJanij` (IN `id` INT, IN `nombre` VARCHAR(50), IN `apellido` VARCHAR(50), IN `kvutza` INT, IN `escuela` VARCHAR(100), IN `fechaNac` DATE, IN `telefono` VARCHAR(30), IN `mail` VARCHAR(50), IN `obs` VARCHAR(1500))  NO SQL
INSERT INTO `janijim`(`idJanij`, `nombre`, `apellido`, `kvutza`, `fechaNac`, `escuela`, `telefono`, `mail`, `observaciones`) VALUES (id,nombre,apellido,kvutza,fechaNac,escuela,telefono,mail,obs)$$

DROP PROCEDURE IF EXISTS `obtenerIdResponsable`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerIdResponsable` (IN `janij` INT)  NO SQL
SELECT `idResponsable` FROM `responsableporjanij` WHERE `idJanij` = janij$$

DROP PROCEDURE IF EXISTS `obtenerJanijimPorKvutza`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerJanijimPorKvutza` (IN `id` INT)  NO SQL
SELECT * FROM `janijim` WHERE `kvutza` = id$$

DROP PROCEDURE IF EXISTS `obtenerJanijPorID`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerJanijPorID` (IN `id` INT)  NO SQL
SELECT * FROM `janijim` WHERE `idJanij` = id$$

DROP PROCEDURE IF EXISTS `obtenerKvutza`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerKvutza` (IN `id` INT)  NO SQL
SELECT * FROM `kvutzot` WHERE `idKvutza` = id$$

DROP PROCEDURE IF EXISTS `obtenerModuloPorID`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerModuloPorID` (IN `id` INT)  NO SQL
SELECT * FROM `modulos` WHERE `idModulo` = id$$

DROP PROCEDURE IF EXISTS `obtenerModulosPorTzevet`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerModulosPorTzevet` (IN `id` INT)  NO SQL
SELECT * FROM `modulos` WHERE `tzevet` = id$$

DROP PROCEDURE IF EXISTS `obtenerPeulaPorID`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerPeulaPorID` (IN `id` INT)  NO SQL
SELECT * FROM `peulot` WHERE `idPeula` = id$$

DROP PROCEDURE IF EXISTS `obtenerPeulotPorKvutza`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerPeulotPorKvutza` (IN `id` INT)  NO SQL
SELECT * FROM `peulot` WHERE `kvutza` = id$$

DROP PROCEDURE IF EXISTS `obtenerResponsablesPorJanij`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerResponsablesPorJanij` (IN `id` INT)  NO SQL
SELECT * FROM `janijim` inner join `responsableporjanij` on `janijim.idJanij` = `responsableporjanij.idJanij` inner join `responsables` on `responsableporjanij.idResponsable` = `responsables.idResponsable` WHERE `janijim.idJanij` = id$$

DROP PROCEDURE IF EXISTS `obtenerResponsablesPorJanij2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerResponsablesPorJanij2` (IN `id` INT)  NO SQL
SELECT * FROM `responsables` WHERE `idResponsable` = id$$

DROP PROCEDURE IF EXISTS `traerUsuarioPorID`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `traerUsuarioPorID` (IN `id` INT)  NO SQL
SELECT * FROM `usuarios` WHERE `idUsuario` = id$$

DROP PROCEDURE IF EXISTS `validarUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `validarUsuario` (IN `id` INT, IN `contra` VARCHAR(50))  NO SQL
SELECT * FROM `usuarios` WHERE `idUsuario` = id and `contraseña` = sha(contra)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `janijim`
--

DROP TABLE IF EXISTS `janijim`;
CREATE TABLE IF NOT EXISTS `janijim` (
  `idJanij` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `kvutza` int(11) NOT NULL,
  `fechaNac` date NOT NULL,
  `escuela` varchar(100) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `observaciones` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`idJanij`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `janijim`
--

INSERT INTO `janijim` (`idJanij`, `nombre`, `apellido`, `kvutza`, `fechaNac`, `escuela`, `telefono`, `mail`, `observaciones`) VALUES
(40513018, 'Julian', 'Barki', 10, '2000-10-12', 'ORT', '11 0312-1612', 'julian.barki@ort.edu.ar', 'se porta muy mal en peula'),
(49189511, 'Javier', 'Alfie', 6, '2008-11-01', 'Scholem Aleijem', '11 5327-8960', '', 'javito es javito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kvutzot`
--

DROP TABLE IF EXISTS `kvutzot`;
CREATE TABLE IF NOT EXISTS `kvutzot` (
  `idKvutza` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tzevet` int(11) NOT NULL,
  PRIMARY KEY (`idKvutza`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

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

DROP TABLE IF EXISTS `modulos`;
CREATE TABLE IF NOT EXISTS `modulos` (
  `idModulo` int(11) NOT NULL AUTO_INCREMENT,
  `tzevet` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `racional` mediumtext NOT NULL,
  `objetivos` mediumtext NOT NULL,
  PRIMARY KEY (`idModulo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`idModulo`, `tzevet`, `nombre`, `racional`, `objetivos`) VALUES
(1, 3, 'modulo prueba', 'un racional cualquiera', 'unos objetivos cualquiera lol'),
(2, 3, 'segundo de prueba', 'que se yo master', 'algunos debe tener'),
(3, 2, 'atzlanismo', 'no', 'dominar el mundo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peulot`
--

DROP TABLE IF EXISTS `peulot`;
CREATE TABLE IF NOT EXISTS `peulot` (
  `idPeula` int(11) NOT NULL AUTO_INCREMENT,
  `tema` varchar(100) NOT NULL,
  `subtema` varchar(150) DEFAULT NULL,
  `modulo` int(11) NOT NULL,
  `racional` mediumtext NOT NULL,
  `objetivos` mediumtext NOT NULL,
  `metodologia` mediumtext NOT NULL,
  `jomer` varchar(500) DEFAULT NULL,
  `kvutza` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idPeula`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peulot`
--

INSERT INTO `peulot` (`idPeula`, `tema`, `subtema`, `modulo`, `racional`, `objetivos`, `metodologia`, `jomer`, `kvutza`, `fecha`) VALUES
(1, 'esto es un tema', 'esto no es un tema', 1, ' soy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racionalsoy un racional', 'Ey! yo soy los objetivos', 'jaja hagan lo que quieran', 'una cartulina darling', 10, '2020-10-15'),
(2, 'vamo atzla', 'que grande atzla', 3, 'que se yo', 'no gracias', 'hagan lo que quieran', 'zoom premium', 6, '2020-10-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsableporjanij`
--

DROP TABLE IF EXISTS `responsableporjanij`;
CREATE TABLE IF NOT EXISTS `responsableporjanij` (
  `idResponsable` int(11) NOT NULL,
  `idJanij` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsableporjanij`
--

INSERT INTO `responsableporjanij` (`idResponsable`, `idJanij`) VALUES
(20405060, 40513018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsables`
--

DROP TABLE IF EXISTS `responsables`;
CREATE TABLE IF NOT EXISTS `responsables` (
  `idResponsable` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `relacion` varchar(50) NOT NULL,
  `observaciones` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`idResponsable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsables`
--

INSERT INTO `responsables` (`idResponsable`, `nombre`, `apellido`, `telefono`, `mail`, `relacion`, `observaciones`) VALUES
(20405060, 'Juan Carlos', 'Barki', '11 1216-0312', 'juancarbarki@gmail.com', 'Padre', 'Buen tipo'),
(22445566, 'Ester', 'Goldstein', '11 1203-1216', 'estergold@gmail.com', 'Madre', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tafkidim`
--

DROP TABLE IF EXISTS `tafkidim`;
CREATE TABLE IF NOT EXISTS `tafkidim` (
  `idTafkid` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTafkid` varchar(50) NOT NULL,
  PRIMARY KEY (`idTafkid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

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

DROP TABLE IF EXISTS `tzvatim`;
CREATE TABLE IF NOT EXISTS `tzvatim` (
  `idTzevet` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idTzevet`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

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

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tafkid` int(11) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `kvutza` int(11) DEFAULT NULL,
  `tzevet` int(11) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `tafkid`, `telefono`, `contraseña`, `kvutza`, `tzevet`, `admin`) VALUES
(44599213, 'Ioel', 'Galante', 1, '11 5152-2984', '700078ec98515558dbf112f629f65eaa49c17db1', 10, NULL, 1),
(44598553, 'Julian', 'Taiter', 1, '11 4409-1525', 'bf5daf4a9d310ce86114cb2b34c0d4457a735a2f', 6, NULL, 1),
(33016244, 'Lionel', 'Messi', 6, '11 7301-0000', 'a4ccfbdb886b7831465c5b11e2d070573b5461c8', NULL, 3, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
