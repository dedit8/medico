-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-05-2022 a las 15:34:37
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
-- Estructura de tabla para la tabla `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE IF NOT EXISTS `adm` (
  `usu` varchar(21) COLLATE utf8_spanish_ci NOT NULL,
  `contra` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `adm`
--

INSERT INTO `adm` (`usu`, `contra`, `id`) VALUES
('mitre', 1234, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dni`
--

DROP TABLE IF EXISTS `dni`;
CREATE TABLE IF NOT EXISTS `dni` (
  `nom` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int NOT NULL,
  `mutual` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `carnet` varchar(68) COLLATE utf8_spanish_ci NOT NULL,
  `tel` bigint NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dni`
--

INSERT INTO `dni` (`nom`, `dni`, `mutual`, `carnet`, `tel`, `id`) VALUES
('gui', 41658970, 'santander', '5555555', 3462368526, 1);

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
