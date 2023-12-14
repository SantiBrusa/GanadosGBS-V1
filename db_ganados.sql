-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-12-2023 a las 14:58:57
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tb_comisionistas`
--

INSERT INTO `tb_comisionistas` (`cod`, `name`, `image`, `text`, `gmail`) VALUES
(4, 'hyscagi', 'ahjvca', 'bjcsajca', 'hshavh@gmail.com');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tb_noticias`
--

INSERT INTO `tb_noticias` (`cod`, `titulo`, `imagen`, `descripcion`) VALUES
(8, 'Cargas', 'https://radiografiainformativa.com/wp-content/uploads/2016/10/camiones-de-carga-robados-edomex.jpg', 'El dia sabado 26 de septiembre, se hizo una carga de al rededor de 197kg de comida para animales en la estancia de las chilchas');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tb_razas`
--

INSERT INTO `tb_razas` (`cod`, `name`, `image`, `text`) VALUES
(6, 'Overo', 'https://www.definiciones-de.com/Imagen/Clavel.jpg381.jpg', 'Una vaca mestiza con patrón de pelaje overo resulta de la cuidadosa selección y cruce de diferentes razas de ganado bovino. Estos cruces se llevan a cabo con el objetivo de combinar características genéticas deseables y adaptabilidad al entorno local. La elección de razas parentales considera factores como resistencia a las condiciones climáticas variables, adaptación a pastizales específicos y calidad de la carne.  La vaca mestiza con patrón overo presenta un pelaje distintivo, con manchas blancas y oscuras distribuidas de manera irregular. Este patrón no solo puede tener una apariencia llamativa, sino que también puede conferir ciertas ventajas, como una regulación térmica más eficiente en climas cálidos.'),
(5, 'Mestizo', 'https://th.bing.com/th/id/OIP.1aM7Ig52hfEosdi8RBLJgQHaFj?rs=1&pid=ImgD', 'Una vaca mestiza en la zona norte de Córdoba, Argentina, se refiere a un ejemplar de ganado bovino que es el resultado de cruzar diferentes razas. En esta región, la cría de ganado es una actividad importante, y los productores suelen realizar cruzamientos para obtener animales con características deseables, como adaptabilidad al clima local, resistencia a enfermedades y calidad de carne. Las vacas mestizas suelen exhibir características de ambas razas parentales, lo que puede incluir pelaje adaptado al clima, buena conversión de pasto en carne y resistencia a enfermedades locales. Este enfoque de cría busca mejorar la productividad y sostenibilidad de la ganadería en la región, teniendo en cuenta las condiciones particulares del norte de Córdoba, como las altas temperaturas y la disponibilidad variable de recursos forrajeros.'),
(7, 'Cruza', 'https://www.ellitoral.com/images/2022/03/12/GaaNHzzcD_1300x655__1.jpg', 'la práctica de cruza de ganado bovino es una estrategia clave empleada por los productores para mejorar la calidad y las características del ganado en la región. La cruza implica la combinación de diferentes razas con el objetivo de aprovechar las ventajas genéticas de cada una. Este proceso se lleva a cabo cuidadosamente para lograr animales que sean más resistentes, adaptables y productivos en el entorno local.  Los productores en la región pueden optar por cruzar razas como Criollo y Cebú, que son conocidas por su resistencia a las condiciones climáticas cambiantes y su capacidad para prosperar en pastizales menos fértiles. La selección de las razas parentales se realiza considerando atributos como la capacidad de conversión de pasto en carne, resistencia a enfermedades locales y adaptabilidad al clima del norte de Córdoba.  El resultado de estas cruces es una población de ganado mestizo que hereda lo mejor de ambas razas parentales. Estos animales pueden exhibir características como pelaje adaptado al clima, mayor eficiencia en la conversión de alimentos y resistencia a enfermedades específicas de la región. En última instancia, la cruza de ganado en la zona norte de Córdoba busca mejorar la productividad y sostenibilidad de la ganadería, contribuyendo al desarrollo de un ganado robusto y adaptado a las condiciones locales.');

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
