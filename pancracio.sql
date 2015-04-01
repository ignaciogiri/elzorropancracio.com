-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-07-2011 a las 18:45:18
-- Versión del servidor: 5.1.49
-- Versión de PHP: 5.3.3-1ubuntu9.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pancracio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pistas`
--

CREATE TABLE IF NOT EXISTS `pistas` (
  `codigo` int(2) NOT NULL,
  `orden` int(10) unsigned NOT NULL,
  `pista` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`codigo`,`orden`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Volcar la base de datos para la tabla `pistas`
--

INSERT INTO `pistas` (`codigo`, `orden`, `pista`) VALUES
(1, 1, ' Me dijo que quer&iacute;a conocer la Casa Rosada.'),
(2, 1, 'Buscaba una gorra. Dijo que en Mar del Plata hay mucho sol.'),
(3, 1, ' Me estuvo haciendo preguntas sobre las ruinas de Cayast&aacute;.'),
(4, 1, ' Quer&iacute;a conocer la residencia de Justo Jos&eacute; de Urquiza.'),
(5, 1, ' Me dijo que quer&iacute;a conocer la ciudad en donde naci&oacute; San Mart&iacute;n.'),
(6, 1, ' Quer&iacute;a conocer las cataratas del Iguaz&uacute;.'),
(7, 1, 'Quer&iacute;a viajar a la ciudad de Clorinda.'),
(8, 1, 'Quer&iacute;a viajar a la ciudad de Resistencia.'),
(9, 1, ' Quer&iacute;a conocer la Quebrada de Humahuaca.'),
(10, 1, ' Estaba interesado en los vinos de Cafayate.'),
(11, 1, ' Estaba interesado en libros acerca de nuestra Independencia.'),
(12, 1, ' Quer&iacute;a conocer la Cuesta del Portezuelo.'),
(13, 1, 'Le&iacute;a un libro con la historia del caudillo Facundo Quiroga.'),
(14, 1, 'Ten&iacute;a un bombo leg&uuml;ero para tocar chacareras.'),
(15, 1, ' Quer&iacute;a conocer la Universidad m&aacute;s antigua de Argentina.'),
(16, 1, ' Me dijo que iba a visitar a un amigo puntano.'),
(17, 1, ' Me solicit&oacute; informaci&oacute;n acerca de Ischigualasto.'),
(18, 1, ' Me dijo que quer&iacute;a escalar el Aconcagua.'),
(19, 1, 'Quer&iacute;a viajar a General Pico.'),
(20, 1, ' Me dijo que pensaba escalar el volc&aacute;n Lan&iacute;n.'),
(21, 1, 'Quer&iacute;a viajar a Bariloche.'),
(22, 1, ' Me pidi&oacute; informaci&oacute;n acerca del Parque Nacional Los Alerces.'),
(23, 1, ' Quer&iacute;a conocer el Glaciar Perito Moreno.'),
(24, 1, 'Quer&iacute;a conocer la ciudad m&aacute;s austral del mundo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `codigo` int(2) NOT NULL,
  `provincia` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `interlocutor` varchar(40) COLLATE utf8_swedish_ci NOT NULL,
  `epigrafe_foto` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Volcar la base de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`codigo`, `provincia`, `interlocutor`, `epigrafe_foto`) VALUES
(1, ' Capital Federal (Ciudad de Buenos Aires)', 'Paloma', ' Casa Rosada'),
(2, ' Provincia de Buenos Aires', 'Caballo', ' Ciudad de Mar del Plata'),
(3, ' Provincia de Santa Fe', 'Vaca', ' Monumento a la Bandera'),
(4, ' Provincia de Entre R&iacute;os', 'Surub&iacute;', ' Palacio San Jos&eacute; (Residencia de J. J. de Urquiza)'),
(5, ' Provincia de Corrientes', 'Yacar&eacute;', ' Esteros del Iber&aacute;'),
(6, ' Provincia de Misiones', 'Yaguaret&eacute;', ' Cataratas del Iguaz&uacute;'),
(7, ' Provincia de Formosa', 'Tuc&aacute;n', ' Ba&ntilde;ado'),
(8, ' Provincia del Chaco', 'Carpincho', ' Ciudad de Resistencia (capital)'),
(9, ' Provincia de Jujuy', 'Vicu&ntilde;a', ' Quebrada de Humahuaca (Cerro 7 colores)'),
(10, ' Provincia de Salta', 'Llama', ' Cafayate'),
(11, ' Provincia de Tucum&aacute;n', 'Hornero', ' Casa de la Independencia'),
(12, ' Provincia de Catamarca', 'Suri', ' Cuesta del Portezuelo'),
(13, ' Provincia de La Rioja', 'Cabra', ' Talampaya'),
(14, ' Provincia de Santiago del Estero', 'Quirquincho', ' Santiago del Estero (capital)'),
(15, ' Provincia de C&oacute;rdoba', 'Burrito', ' Universidad Nacional de C&oacute;rdoba'),
(16, ' Provincia de San Luis', 'Venado de las pampas', ' Ciudad de San Luis (capital)'),
(17, ' Provincia de San Juan', 'C&oacute;ndor', ' Ischigualasto'),
(18, ' Provincia de Mendoza', 'Mula', ' Cerro Aconcagua. Es el m&aacute;s alto de Am&eacute;rica (6969 m.s.n.m)'),
(19, ' Provincia de La Pampa', '&Ntilde;and&uacute;', ' Cald&eacute;n'),
(20, ' Provincia del Neuqu&eacute;n', 'Guanaco', ' Lago Tromen y Volcan Lan&iacute;n'),
(21, ' Provincia de R&iacute;o Negro', 'Pud&uacute;', ' Lago Nahuel Huapi. Cerca de Bariloche.'),
(22, ' Provincia del Chubut', 'Ballena', ' Parque Nacional Los Alerces'),
(23, ' Provincia de Santa Cruz', 'Huemul', ' Glaciar Perito Moreno'),
(24, 'Provincia de Tierra del Fuego Ant&aacute;rtida e Islas del A', 'Ping&uuml;ino', ' Faro del Fin del Mundo');
