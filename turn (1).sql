-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-06-2022 a las 11:47:30
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turn`
--

DROP TABLE IF EXISTS `turn`;
CREATE TABLE IF NOT EXISTS `turn` (
  `dni` int NOT NULL,
  `med` varchar(64) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `esp` varchar(99) COLLATE utf8_spanish_ci NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `aso` varchar(99) COLLATE utf8_spanish_ci NOT NULL,
  `cost` varchar(99) COLLATE utf8_spanish_ci NOT NULL,
  `atendido` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `sele` varchar(33) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `turn`
--

INSERT INTO `turn` (`dni`, `med`, `esp`, `dia`, `hora`, `aso`, `cost`, `atendido`, `id`, `sele`) VALUES
(1, 'Daneil ALzari', 'clinicos', '0000-00-00', '00:00:00', '', '', '', 50, 'Daneil ALzari'),
(1, 'Delfor Hernández', 'clinicos', '0000-00-00', '00:00:00', '', '', '', 49, 'Delfor Hernández'),
(1, 'Torresan Gabriela', 'clinicos', '0000-00-00', '00:00:00', '', '', '', 48, 'Torresan Gabriela'),
(1, 'Delfor Hernandez', 'cardiologia', '0000-00-00', '00:00:00', '', '', '', 22, 'Delfor Hernandez'),
(1, 'Marilin Hartmann', 'endocrinologa', '0000-00-00', '00:00:00', '', '', '', 23, 'Marilin Hartmann'),
(1, 'Frabro Glenda', 'ginecologia', '0000-00-00', '00:00:00', '', '', '', 24, 'Frabro Glenda'),
(1, 'Fay ernesto', 'ginecologo', '0000-00-00', '00:00:00', '', '', '', 25, 'Fay ernesto'),
(1, 'Ramacciotti Hugo', 'Traumatologia', '0000-00-00', '00:00:00', '', '', '', 26, 'Ramacciotti Hugo'),
(1, 'Alzari Daniel', 'cirugia general', '0000-00-00', '00:00:00', '', '', '', 27, 'Alzari Daniel'),
(1, 'cañellas Guillermo', 'psicologia', '0000-00-00', '00:00:00', '', '', '', 28, 'cañellas Guillermo'),
(1, 'Simori Malena', 'psicologia', '0000-00-00', '00:00:00', '', '', '', 29, 'Simori Malena'),
(1, 'Ferrero Edgardo', 'pediatria', '0000-00-00', '00:00:00', '', '', '', 30, 'Ferrero Edgardo'),
(1, 'Felici Fernando', 'kinesiologia', '0000-00-00', '00:00:00', '', '', '', 31, 'Felici Fernando'),
(1, 'Contreras Leonardo', 'psiquiatria', '0000-00-00', '00:00:00', '', '', '', 32, 'Contreras Leonardo'),
(1, 'Dubios Juan José ', 'tratamiento del dolor', '0000-00-00', '00:00:00', '', '', '', 33, 'Dubios Juan José '),
(1, 'servicio de enfermeria', '', '0000-00-00', '00:00:00', '', '', '', 34, 'servicio de enfermeria'),
(1, 'Burgués Vanesa', 'nutricionista', '0000-00-00', '00:00:00', '', '', '', 35, 'Burgués Vanesa'),
(1, 'Algaraña Analia', 'ecografia', '0000-00-00', '00:00:00', '', '', '', 36, 'Algaraña Analia'),
(1, 'Ressia', 'ecografia', '0000-00-00', '00:00:00', '', '', '', 37, 'Ressia'),
(1, 'Hartmamn Marilin', 'clinico', '0000-00-00', '00:00:00', '', '', '', 47, 'Hartmamn Marilin'),
(1, 'Araujo Viviana', 'clinico', '0000-00-00', '00:00:00', '', '', '', 46, 'Araujo Viviana'),
(1, 'Pablo Bosernitzan', 'Neumonologia', '0000-00-00', '00:00:00', '', '', '', 45, 'Pablo Bosernitzan'),
(1, 'Clavero Rubio', 'fisiatria', '0000-00-00', '00:00:00', '', '', '', 44, 'Clavero Rubio'),
(41658970, 'Delfor Hernandez', 'clinicos', '2022-06-11', '15:09:00', 'pami/santander', '2500$', '', 58, ''),
(0, 'Frabro Glenda', 'ginecologia', '2022-06-16', '16:09:00', 'pami/santander', '2500$', '', 59, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
