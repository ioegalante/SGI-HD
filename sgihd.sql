-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 18:01:08
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
CREATE DATABASE IF NOT EXISTS `sgihd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sgihd`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `editarJanij`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `editarJanij` (IN `id` INT, IN `nombre` VARCHAR(50), IN `apellido` VARCHAR(50), IN `kvutza` INT, IN `escuela` VARCHAR(100), IN `fechaNac` DATE, IN `telefono` VARCHAR(15), IN `mail` VARCHAR(50), IN `obs` VARCHAR(1500), IN `idViejo` INT)  NO SQL
UPDATE `janijim` SET `idJanij`=id,`nombre`=nombre,`apellido`=apellido,`kvutza`=kvutza,`fechaNac`=fechaNac,
`escuela`=escuela,`telefono`=telefono,`mail`=mail,`observaciones`=obs WHERE `idJanij`= idViejo$$

DROP PROCEDURE IF EXISTS `editarResponsable`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `editarResponsable` (IN `id` INT, IN `nom` VARCHAR(50), IN `ape` VARCHAR(50), IN `tel` VARCHAR(50), IN `mail` VARCHAR(50), IN `rel` VARCHAR(50), IN `obs` VARCHAR(5000), IN `fecha` DATE, IN `viejo` INT)  NO SQL
UPDATE `responsables` SET `idResponsable`=id, `nombreR`=nom, `apellidoR`=ape, `telefonoR`=tel, `mailR`=mail, `relacion`=rel, `observacionesR`=obs, `fechaNacR`=fecha WHERE `idResponsable` = viejo$$

DROP PROCEDURE IF EXISTS `editarTablaMedio`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `editarTablaMedio` (IN `id` INT, IN `idViejo` INT)  NO SQL
UPDATE `responsableporjanij` SET `janij`= id WHERE `janij` = idViejo$$

DROP PROCEDURE IF EXISTS `editarTablaMedio2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `editarTablaMedio2` (IN `id` INT, IN `idViejo` INT)  NO SQL
UPDATE `responsableporjanij` SET `responsable`= id WHERE `responsable` = idViejo$$

DROP PROCEDURE IF EXISTS `EliminarPeula`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarPeula` (IN `id` INT)  NO SQL
DELETE FROM `peulot` WHERE `idPeula` = id$$

DROP PROCEDURE IF EXISTS `insertarJanij`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarJanij` (IN `id` INT, IN `nombre` VARCHAR(50), IN `apellido` VARCHAR(50), IN `kvutza` INT, IN `escuela` VARCHAR(100), IN `fechaNac` DATE, IN `telefono` VARCHAR(30), IN `mail` VARCHAR(50), IN `obs` VARCHAR(1500))  NO SQL
INSERT INTO `janijim`(`idJanij`, `nombre`, `apellido`, `kvutza`, `fechaNac`, `escuela`, `telefono`, `mail`, `observaciones`) VALUES (id,nombre,apellido,kvutza,fechaNac,escuela,telefono,mail,obs)$$

DROP PROCEDURE IF EXISTS `insertarResponsable`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarResponsable` (IN `id` INT, IN `nom` VARCHAR(50), IN `ape` VARCHAR(50), IN `tel` VARCHAR(50), IN `mail` VARCHAR(50), IN `rel` VARCHAR(50), IN `obs` VARCHAR(5000), IN `fecha` DATE)  NO SQL
INSERT INTO `responsables`(`idResponsable`, `nombreR`, `apellidoR`, `telefonoR`, `mailR`, `relacion`, `observacionesR`, `fechaNacR`) VALUES (id,nom,ape,tel,mail,rel,obs,fecha)$$

DROP PROCEDURE IF EXISTS `insertarRespPorJanij`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarRespPorJanij` (IN `idResp` INT, IN `janij` INT)  NO SQL
INSERT INTO `responsableporjanij`(`responsable`, `janij`) VALUES (idResp,janij)$$

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
SELECT `idResponsable`, `nombreR` as 'nombre', `apellidoR` as 'apellido', `telefonoR` as 'telefono' , `mailR` as 'mail', `relacion`, `observacionesR` as 'obs', `fechaNacR` as 'fechaNac' FROM `janijim` inner join `responsableporjanij` on `idJanij` = `janij` inner join `responsables` on `responsable` = `idResponsable` WHERE `idJanij` = id$$

DROP PROCEDURE IF EXISTS `obtenerRespPorID`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerRespPorID` (IN `id` INT)  NO SQL
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
CREATE TABLE `janijim` (
  `idJanij` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `kvutza` int(11) NOT NULL,
  `fechaNac` date NOT NULL,
  `escuela` varchar(100) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `observaciones` varchar(1500) DEFAULT NULL
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

DROP TABLE IF EXISTS `modulos`;
CREATE TABLE `modulos` (
  `idModulo` int(11) NOT NULL,
  `tzevet` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `racional` mediumtext NOT NULL,
  `objetivos` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
CREATE TABLE `peulot` (
  `idPeula` int(11) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `subtema` varchar(150) DEFAULT NULL,
  `modulo` int(11) NOT NULL,
  `racional` mediumtext NOT NULL,
  `objetivos` mediumtext NOT NULL,
  `metodologia` mediumtext NOT NULL,
  `jomer` varchar(500) DEFAULT NULL,
  `kvutza` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
CREATE TABLE `responsableporjanij` (
  `responsable` int(11) NOT NULL,
  `janij` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsableporjanij`
--

INSERT INTO `responsableporjanij` (`responsable`, `janij`) VALUES
(20405060, 40513018),
(22445566, 40513018),
(1800000, 49189511),
(23502545, 49189511);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsables`
--

DROP TABLE IF EXISTS `responsables`;
CREATE TABLE `responsables` (
  `idResponsable` int(11) NOT NULL,
  `nombreR` varchar(50) NOT NULL,
  `apellidoR` varchar(50) NOT NULL,
  `telefonoR` varchar(50) NOT NULL,
  `mailR` varchar(50) NOT NULL,
  `relacion` varchar(50) NOT NULL,
  `observacionesR` varchar(5000) DEFAULT NULL,
  `fechaNacR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `responsables`
--

INSERT INTO `responsables` (`idResponsable`, `nombreR`, `apellidoR`, `telefonoR`, `mailR`, `relacion`, `observacionesR`, `fechaNacR`) VALUES
(1800000, 'Alejandro', 'Alfie', '11 8989-7654', 'alejandroalfie@gmail.com', 'Padre', '', '1980-05-05'),
(20405060, 'Juan Carlos', 'Barki', '11 1216-0312', 'juancarbarki@gmail.com', 'Padre', 'Buen tipo', '1964-05-24'),
(22445566, 'Ester', 'Goldstein', '11 1203-1216', 'estergold@gmail.com', 'Madre', '', '1965-09-07'),
(23502545, 'Andrea', 'Bertea', '11 9889-2345', 'andreabertea@gmail.com', 'Madre', 'la mama de javito wacho', '1974-10-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tafkidim`
--

DROP TABLE IF EXISTS `tafkidim`;
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

DROP TABLE IF EXISTS `tzvatim`;
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

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `janijim`
--
ALTER TABLE `janijim`
  ADD PRIMARY KEY (`idJanij`);

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
-- Indices de la tabla `responsables`
--
ALTER TABLE `responsables`
  ADD PRIMARY KEY (`idResponsable`);

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
  MODIFY `idModulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `peulot`
--
ALTER TABLE `peulot`
  MODIFY `idPeula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
