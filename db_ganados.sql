-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-12-2023 a las 02:36:04
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ganados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_comisionistas`
--

DROP TABLE IF EXISTS `tb_comisionistas`;
CREATE TABLE IF NOT EXISTS `tb_comisionistas` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `image` varchar(70) NOT NULL,
  `text` varchar(4000) NOT NULL,
  `gmail` varchar(120) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_noticias`
--

DROP TABLE IF EXISTS `tb_noticias`;
CREATE TABLE IF NOT EXISTS `tb_noticias` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tb_noticias`
--

INSERT INTO `tb_noticias` (`cod`, `titulo`, `imagen`, `descripcion`) VALUES
(1, '1', 'https://media.metrolatam.com/2017/07/20/webhtdocswpcontentuploadssites3620160513foto0000000420160513185359vacasbeneficiosamigaslechesaludistockphoto-1200x800.jpg', '1'),
(2, '1', 'https://media.metrolatam.com/2017/07/20/webhtdocswpcontentuploadssites3620160513foto0000000420160513185359vacasbeneficiosamigaslechesaludistockphoto-1200x800.jpg', '1'),
(3, '2', 'https://media.metrolatam.com/2017/07/20/webhtdocswpcontentuploadssites3620160513foto0000000420160513185359vacasbeneficiosamigaslechesaludistockphoto-1200x800.jpg', '2'),
(4, '4', 'https://media.metrolatam.com/2017/07/20/webhtdocswpcontentuploadssites3620160513foto0000000420160513185359vacasbeneficiosamigaslechesaludistockphoto-1200x800.jpg', '4'),
(5, '1', 'https://media.metrolatam.com/2017/07/20/webhtdocswpcontentuploadssites3620160513foto0000000420160513185359vacasbeneficiosamigaslechesaludistockphoto-1200x800.jpg', '1'),
(6, '5', 'https://media.metrolatam.com/2017/07/20/webhtdocswpcontentuploadssites3620160513foto0000000420160513185359vacasbeneficiosamigaslechesaludistockphoto-1200x800.jpg', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_razas`
--

DROP TABLE IF EXISTS `tb_razas`;
CREATE TABLE IF NOT EXISTS `tb_razas` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(70) NOT NULL,
  `text` varchar(4000) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tb_razas`
--

INSERT INTO `tb_razas` (`cod`, `name`, `image`, `text`) VALUES
(2, 'sajsajfasj', 'fsafasf', 'safasfasf'),
(3, 'sajsajfasj', 'fsafasf', 'safasfasf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`cod`, `username`, `password`, `is_admin`) VALUES
(1, 'Santino', '12345678', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
