-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2019 a las 20:34:16
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agendacbt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companias`
--

CREATE TABLE `companias` (
  `id` int(11) NOT NULL,
  `nombre_cia` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `numero` int(4) NOT NULL,
  `disponible` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `companias`
--

INSERT INTO `companias` (`id`, `nombre_cia`, `numero`, `disponible`) VALUES
(1, '1Cía.', 1, 0),
(2, '2Cía.', 2, 0),
(3, '3Cía.', 3, 0),
(4, '4Cía.', 4, 0),
(5, '5Cía.', 5, 0),
(6, '6Cía.', 6, 0),
(7, '7Cía.', 7, 0),
(8, '8Cía.', 8, 0),
(9, '9Cía.', 9, 0),
(10, '10Cía.', 10, 0),
(11, '11Cía.', 11, 0),
(12, '12Cía.', 12, 0),
(13, '13Cía.', 13, 0),
(14, 'B.Metrenco.', 14, 0),
(50, 'Prueba', 50, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactoscbt`
--

CREATE TABLE `contactoscbt` (
  `idcontactos` int(4) NOT NULL,
  `institucion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `cargo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `ciudad` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono1` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `telefono2` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `contactoscbt`
--

INSERT INTO `contactoscbt` (`idcontactos`, `institucion`, `cargo`, `ciudad`, `nombre`, `apellido`, `telefono1`, `telefono2`, `email`) VALUES
(67, 'AGUAS ARAUCANIA', 'Inspector de redes', 'Temuco', 'Eugenio', 'Garrido', '983611547', '', ''),
(68, 'AGUAS ARAUCANIA', 'Inspector de redes', 'Temuco', 'Ricardo', 'Huaquilef', '983601623', '', ''),
(69, 'AGUAS ARAUCANIA', 'Inspector de redes', 'Temuco', 'Luis', 'Fuentes', '983605376', '', ''),
(70, 'ABASTIBLE', 'Mesa central', 'Temuco', 'Abastible', '', '6002009000', '', ''),
(71, 'AGUAS SAN ISIDRO', 'Tecnico', '', 'Marco', 'Manquemil', '87780442', '', ''),
(72, 'AGUAS SAN ISIDRO', 'Tecnico', '', 'Pedro', 'Paillanao', '87780412', '', ''),
(73, 'ALUMBRADO PUBLICO', '', '', '', '', '452 211353', '', ''),
(74, 'BASE AEREA MAQUEHUE', '', '', '', '', '452 337783', '', ''),
(75, 'ELECTRICIDAD', 'CGE', '', '', '', '452 554581', '', ''),
(76, 'CARCEL DE MUJERES', '', 'Temuco', '', '', '452 210138', '', ''),
(77, 'CARCEL DE HOMBRES', '', 'Temuco', '', '', '452 210180', '', ''),
(78, 'RUTA DE LA ARAUCANIA', 'CONCESIONARIA', 'Temuco', '', '', '452 393911', '', ''),
(79, 'CENCO', '', '', '', '', '452 466000', '452 466860', ''),
(80, 'CARABINEROS', '2DA COMISARIA', 'Temuco', '', '', '452 466124', '', ''),
(81, 'CARABINEROS', '3ERA COMISARIA PADRE LAS CASAS', 'Temuco', '', '', '452 466154', '', ''),
(82, 'CARABINEROS', '8VA COMISARIA', 'Temuco', '', '', '452 466313', '', ''),
(83, 'CARABINEROS', 'TENENCIA LABRANZA', 'Temuco', '', '', '452 466331', '', ''),
(84, 'CARABINEROS', 'RETEN CAJON', 'Temuco', '', '', '452 466173', '', ''),
(85, 'CARABINEROS', 'RETEN QUEPE', 'Temuco', '', '', '452 466174', '', ''),
(86, 'CARABINEROS', 'SIAT', 'Temuco', '', '', '452 466065', '', ''),
(87, 'CARABINEROS', 'GOPE', 'Temuco', '', '', '452 236025', '', ''),
(88, 'CONAF', '', '', '', '', '452 341521', '42 456417', ''),
(89, 'SALUD', 'CONSULTORIO MIRAFLORES', '', '', '', '452 404012', '', ''),
(90, 'SALUD', 'CONSULTORIO AMANECER', '', '', '', '452 343703', '', ''),
(91, 'SALUD', 'CONSULTORIO PUEBLO NUEVO', '', '', '', '452 224631', '', ''),
(92, 'SALUD', 'CONSULTORIO SANTA ROSA', '', '', '', '452 220194', '', ''),
(93, 'SALUD', 'CONSULTORIO VILLA ALEGRE', '', '', '', '452 365810', '', ''),
(94, 'SALUD', 'CLINICA ALEMANA', '', '', '', '452 201201', '', ''),
(95, 'SALUD', 'CLINICA MAYOR', '', '', '', '452 310265', '', ''),
(96, 'METEOROLOGIA', 'DIRECCION METEOROLOGICA', '', '', '', '452 554806', '', ''),
(97, 'ELECTRICIDAD', 'FRONTEL', '', '', '', '452 593375', '452 593371', ''),
(98, 'EFE', 'FERROCARRILES (tren 24 hrs)', '', '', '', '452 211482', '452 233416', ''),
(99, 'GAS', 'GASCO', '', '', '', '452 405959', '', ''),
(100, 'GRUAS', 'GRUAS SERVI GRUAS', '', '', '', '452 311515', '', ''),
(101, 'GRUAS', 'GRUAS GISELINI', '', '', '', '452 236025', '', ''),
(102, 'GAS', 'INTERGAS', 'Temuco', '', '', '452 451045', '', ''),
(103, 'GAS', 'INTERGAS (planta)', 'Temuco', '', '', '452 210310', '', ''),
(104, 'GAS', 'LIPIGAS', '', '', '', '6006009200', '', ''),
(105, 'MUNICIPALIDAD DE TEMUCO', 'MUNICIPALIDAD DE TEMUCO', '', '', '', '452 973911', '1409', ''),
(106, 'MUNICIPALIDAD DE TEMUCO', 'MUNICIPALIDAD DE TEMUCO', 'Boris', 'Pardo', '', '9 82932746', '', ''),
(107, 'MUNICIPALIDAD PADRE LAS CASAS', 'MUNICIPALIDAD PADRE LAS CASAS', '', '', '', '452 590051', '452 590052', ''),
(108, 'METEOROLOGIA', 'METEOROLIGIA FREIRE', '', '', '', '452 554927', '', ''),
(109, 'ONEMI', 'Onemi Araucania', '', '', '', '452 747070', '452 747074', ''),
(110, 'SALUD', 'SAMU', '', '', '', '452 658280', '', ''),
(111, 'SAG', 'SAG', '', '', '', '452 211705', '', ''),
(112, 'ELECTRICIDAD', 'TRANSELEC', '', '', '', '452 220005', '', ''),
(113, 'Transito', 'UOCT (unidad operativa control de transito)', '', '', '', '452 748690', '452 748691', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `idcontrol` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `horaControl` int(11) NOT NULL,
  `motivo` varchar(300) COLLATE latin1_spanish_ci DEFAULT NULL,
  `creado` datetime DEFAULT CURRENT_TIMESTAMP,
  `creadopor` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`idcontrol`, `fecha`, `horaControl`, `motivo`, `creado`, `creadopor`) VALUES
(73, '2018-12-18', 1, NULL, '2019-01-04 16:12:18', NULL),
(74, '2018-12-18', 1, NULL, '2019-01-04 16:12:18', NULL),
(75, '2018-12-18', 1, NULL, '2019-01-04 16:12:18', NULL),
(76, '2018-12-18', 1, NULL, '2019-01-04 16:12:18', NULL),
(77, '2018-12-18', 1, NULL, '2019-01-04 16:12:18', NULL),
(78, '2018-12-18', 2, NULL, '2019-01-04 16:12:18', NULL),
(79, '2018-12-28', 1, NULL, '2019-01-04 16:12:18', NULL),
(80, '2018-12-19', 1, NULL, '2019-01-04 16:12:18', NULL),
(81, '2018-12-29', 1, NULL, '2019-01-04 16:12:18', NULL),
(82, '2018-12-19', 2, NULL, '2019-01-04 16:12:18', NULL),
(83, '2018-12-01', 2, NULL, '2019-01-04 16:12:18', NULL),
(84, '2018-12-01', 2, NULL, '2019-01-04 16:12:18', NULL),
(85, '2019-01-04', 3, 'en llamado', '2019-01-04 16:12:18', NULL),
(86, '2019-01-04', 3, 'en llamado2', '2019-01-04 16:12:18', NULL),
(87, '2019-01-04', 3, 'prueba 1', '2019-01-04 16:12:18', NULL),
(88, '2019-01-04', 3, 'Ahora si', '2019-01-04 16:12:18', NULL),
(89, '2019-01-04', 3, 'ya ahora??', '2019-01-04 16:12:18', NULL),
(90, '2019-01-04', 3, 'ddd', '2019-01-04 16:12:18', NULL),
(91, '2019-01-04', 3, 'aaaaa', '2019-01-04 16:12:18', NULL),
(92, '2019-01-04', 3, 'si que si', '2019-01-04 16:12:18', NULL),
(93, '2019-01-04', 1, '', '2019-01-04 16:12:18', NULL),
(94, '2019-01-04', 1, '', '2019-01-04 16:12:18', NULL),
(95, '2019-01-04', 1, '', '2019-01-04 16:12:18', NULL),
(96, '2019-01-04', 1, '', '2019-01-04 16:12:18', NULL),
(97, '2019-01-04', 3, 'por Problemas de Horario', '2019-01-04 16:14:37', NULL),
(98, '2019-01-04', 3, 'prueba4', '2019-01-04 16:16:40', 'central'),
(99, '2019-01-04', 2, '', '2019-01-04 18:43:37', 'central'),
(100, '2019-01-05', 1, '', '2019-01-05 14:16:14', 'central'),
(101, '2019-01-08', 3, 'Es solo control de Prueba', '2019-01-08 18:06:15', 'central'),
(102, '2019-01-08', 3, 'Prueba 1', '2019-01-08 18:10:05', 'central'),
(103, '2019-01-08', 3, 'prueba 2', '2019-01-08 18:17:54', 'central'),
(104, '2019-01-08', 3, 'prueba 3', '2019-01-08 18:18:24', 'central'),
(105, '2019-01-08', 3, 'prueba 4', '2019-01-08 18:22:36', 'central'),
(106, '2019-01-08', 3, 'prueba 5', '2019-01-08 18:23:26', 'central'),
(107, '2019-01-08', 3, 'ahora', '2019-01-08 18:33:07', 'central'),
(108, '2019-01-08', 2, 'prueba', '2019-01-08 18:34:31', 'central'),
(109, '2019-01-08', 3, 'funcionaraa???', '2019-01-08 18:37:44', 'central'),
(110, '2019-01-08', 3, 'gf', '2019-01-08 18:45:53', 'central'),
(111, '2019-01-08', 3, 'hhggffffffff', '2019-01-08 18:47:49', 'central'),
(112, '2019-01-08', 3, 'Ahora si funciono', '2019-01-08 18:49:43', 'central'),
(113, '2019-01-09', 3, 'swal', '2019-01-09 09:50:09', 'central'),
(114, '2019-01-09', 3, 'swal2', '2019-01-09 09:51:30', 'central'),
(115, '2019-01-09', 3, 'swal3', '2019-01-09 09:52:10', 'central');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlunidad`
--

CREATE TABLE `controlunidad` (
  `idcontrol` int(11) NOT NULL,
  `idunidadcontrol` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `disponible` int(11) NOT NULL,
  `novedad` int(11) NOT NULL,
  `detalle` varchar(500) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `controlunidad`
--

INSERT INTO `controlunidad` (`idcontrol`, `idunidadcontrol`, `estado`, `disponible`, `novedad`, `detalle`) VALUES
(73, 1, 1, 1, 0, ''),
(74, 1, 1, 1, 0, ''),
(75, 1, 0, 0, 0, ''),
(76, 1, 1, 1, 0, ''),
(76, 2, 0, 0, 0, ''),
(77, 1, 1, 0, 0, ''),
(77, 2, 0, 0, 0, ''),
(77, 4, 1, 1, 0, ''),
(78, 1, 1, 0, 0, ''),
(78, 2, 0, 0, 0, ''),
(78, 4, 1, 1, 0, ''),
(79, 1, 1, 0, 0, ''),
(79, 2, 0, 0, 0, ''),
(79, 3, 1, 0, 1, 'bomba mala'),
(79, 4, 1, 1, 0, ''),
(80, 1, 1, 0, 0, ''),
(80, 4, 1, 0, 0, ''),
(80, 7, 1, 0, 0, ''),
(80, 10, 1, 0, 0, ''),
(80, 12, 1, 0, 0, ''),
(80, 14, 1, 0, 0, ''),
(80, 16, 1, 0, 0, ''),
(80, 19, 1, 0, 0, ''),
(80, 21, 1, 0, 0, ''),
(80, 22, 1, 0, 0, ''),
(80, 24, 1, 0, 0, ''),
(80, 25, 1, 0, 0, ''),
(80, 26, 1, 0, 0, ''),
(81, 1, 1, 0, 0, ''),
(81, 4, 1, 0, 0, ''),
(81, 7, 1, 1, 0, ''),
(81, 10, 1, 0, 0, ''),
(81, 12, 1, 0, 0, ''),
(81, 14, 1, 0, 0, ''),
(81, 16, 1, 0, 0, ''),
(81, 19, 1, 0, 0, ''),
(81, 21, 1, 0, 0, ''),
(81, 22, 1, 0, 0, ''),
(81, 24, 1, 0, 1, ''),
(81, 25, 1, 0, 0, ''),
(81, 26, 0, 0, 0, ''),
(82, 1, 1, 1, 0, ''),
(82, 4, 1, 0, 0, ''),
(82, 7, 1, 0, 0, ''),
(82, 10, 0, 0, 0, ''),
(82, 12, 1, 0, 0, ''),
(82, 14, 1, 0, 0, ''),
(82, 16, 1, 0, 0, ''),
(82, 19, 1, 0, 1, ''),
(82, 21, 0, 0, 0, ''),
(82, 22, 1, 0, 0, ''),
(82, 24, 1, 0, 0, ''),
(82, 25, 1, 0, 0, ''),
(82, 26, 1, 0, 1, ''),
(83, 1, 1, 1, 0, '1'),
(83, 2, 1, 0, 0, '26'),
(83, 3, 1, 0, 0, '24'),
(83, 4, 0, 0, 0, '2'),
(83, 5, 1, 0, 0, '22'),
(83, 6, 1, 0, 0, '23'),
(83, 7, 1, 0, 1, 'problema'),
(83, 8, 1, 0, 0, '19'),
(83, 10, 0, 0, 0, '3'),
(83, 11, 1, 0, 0, '14'),
(83, 12, 1, 0, 0, '4'),
(83, 13, 1, 0, 0, '20'),
(83, 14, 0, 0, 0, '5'),
(83, 15, 1, 0, 0, '15'),
(83, 16, 1, 0, 0, '6'),
(83, 17, 1, 0, 0, '16'),
(83, 18, 1, 0, 0, '25'),
(83, 19, 1, 0, 1, '7'),
(83, 20, 1, 0, 0, '28'),
(83, 21, 1, 0, 0, '8'),
(83, 22, 1, 0, 0, '9'),
(83, 23, 1, 0, 0, '17'),
(83, 24, 1, 0, 0, '10'),
(83, 25, 1, 0, 0, '11'),
(83, 26, 1, 0, 0, '12'),
(83, 27, 1, 0, 0, '29'),
(83, 28, 1, 0, 0, '13'),
(83, 29, 1, 0, 0, '30'),
(83, 30, 1, 0, 0, '31'),
(83, 31, 1, 0, 0, '32'),
(83, 32, 1, 0, 0, '33'),
(83, 33, 1, 0, 0, '34'),
(83, 34, 1, 0, 0, '35'),
(83, 35, 1, 0, 0, '36'),
(83, 36, 1, 0, 0, '37'),
(83, 37, 2, 0, 0, '18'),
(84, 1, 1, 1, 0, 'b1 detalle'),
(84, 2, 1, 0, 0, 'q1  detalle'),
(84, 3, 1, 0, 0, 'm1 detalle'),
(84, 4, 0, 0, 0, 'b2 detalle'),
(84, 5, 1, 0, 0, 'h2 detalle'),
(84, 6, 1, 0, 0, 'hx2 detalle'),
(84, 7, 1, 0, 1, 'b3 detalle'),
(84, 8, 1, 0, 0, 'r3 detalle'),
(84, 10, 0, 0, 0, 'b4 detalle'),
(84, 11, 1, 0, 0, 'bx4 detalle'),
(84, 12, 1, 0, 0, 'b5 detalle'),
(84, 13, 1, 0, 0, 'r5 detalle'),
(84, 14, 0, 0, 0, 'b6 detalle'),
(84, 15, 1, 0, 0, 'bx6 detalle'),
(84, 16, 1, 0, 0, 'b7'),
(84, 17, 1, 0, 0, 'bx7'),
(84, 18, 1, 0, 0, 'm7'),
(84, 19, 1, 0, 1, 'b8'),
(84, 20, 1, 0, 0, 's8'),
(84, 21, 1, 0, 0, 'b9'),
(84, 22, 1, 0, 0, 'b10'),
(84, 23, 1, 0, 0, 'bx10'),
(84, 24, 1, 0, 0, 'b11'),
(84, 25, 1, 0, 0, 'b12'),
(84, 26, 1, 0, 0, 'b13'),
(84, 27, 1, 0, 0, 'z13'),
(84, 28, 1, 0, 0, 'b14'),
(84, 29, 1, 0, 0, 'k1'),
(84, 30, 1, 0, 0, 'k2'),
(84, 31, 1, 0, 0, 'k3'),
(84, 32, 1, 0, 0, 'k4'),
(84, 33, 1, 0, 0, 'j1'),
(84, 34, 1, 0, 0, 'j2'),
(84, 35, 1, 0, 0, 'j3'),
(84, 36, 1, 0, 0, 'lt1'),
(84, 37, 2, 0, 0, 'ba6'),
(92, 50, 1, 1, 0, 'no-realizado'),
(93, 50, 1, 1, 0, 'no-realizado'),
(94, 50, 1, 1, 0, 'no-realizado'),
(95, 50, 1, 1, 0, 'no-realizado'),
(96, 1, 1, 1, 0, ''),
(96, 2, 1, 0, 0, ''),
(96, 3, 1, 0, 0, ''),
(96, 4, 1, 1, 0, 'sin motor1'),
(96, 5, 1, 0, 0, ''),
(96, 6, 1, 0, 0, ''),
(96, 7, 1, 0, 0, ''),
(96, 8, 1, 0, 0, ''),
(96, 9, 1, 0, 0, ''),
(96, 10, 0, 0, 0, ''),
(96, 11, 1, 0, 0, ''),
(96, 12, 0, 0, 0, ''),
(96, 13, 1, 0, 0, ''),
(96, 14, 1, 0, 0, ''),
(96, 15, 1, 0, 0, ''),
(96, 16, 1, 1, 0, 'vidrio malo'),
(96, 17, 1, 0, 0, ''),
(96, 18, 1, 0, 0, ''),
(96, 19, 1, 0, 0, 'intermitente quemado'),
(96, 20, 1, 0, 0, ''),
(96, 21, 1, 0, 0, ''),
(96, 22, 1, 0, 0, ''),
(96, 23, 1, 0, 0, ''),
(96, 24, 1, 0, 0, ''),
(96, 25, 1, 0, 0, ''),
(96, 26, 1, 0, 0, ''),
(96, 27, 1, 0, 0, ''),
(96, 28, 1, 0, 0, ''),
(96, 29, 1, 0, 0, ''),
(96, 30, 1, 0, 0, ''),
(96, 31, 1, 0, 0, ''),
(96, 32, 1, 0, 0, ''),
(96, 33, 1, 0, 0, ''),
(96, 34, 1, 0, 0, ''),
(96, 35, 1, 0, 0, ''),
(96, 36, 1, 0, 0, ''),
(96, 37, 2, 0, 0, ''),
(97, 50, 1, 1, 0, 'no-realizado'),
(98, 50, 3, 1, 0, 'no-realizado'),
(99, 1, 1, 0, 1, 'nov1'),
(99, 2, 1, 0, 0, ''),
(99, 3, 1, 0, 0, ''),
(99, 4, 1, 0, 1, 'nov2'),
(99, 5, 1, 0, 0, ''),
(99, 6, 1, 0, 0, ''),
(99, 7, 1, 0, 0, ''),
(99, 8, 1, 0, 0, ''),
(99, 9, 1, 0, 0, ''),
(99, 10, 1, 0, 0, ''),
(99, 11, 1, 0, 0, ''),
(99, 12, 1, 0, 0, ''),
(99, 13, 1, 0, 0, ''),
(99, 14, 1, 0, 0, ''),
(99, 15, 1, 0, 0, ''),
(99, 16, 1, 0, 0, ''),
(99, 17, 1, 0, 0, ''),
(99, 18, 1, 0, 0, ''),
(99, 19, 1, 0, 0, ''),
(99, 20, 1, 0, 0, ''),
(99, 21, 1, 0, 0, ''),
(99, 22, 1, 0, 0, ''),
(99, 23, 1, 0, 0, ''),
(99, 24, 1, 0, 0, ''),
(99, 25, 1, 0, 0, ''),
(99, 26, 1, 0, 0, ''),
(99, 27, 1, 0, 0, ''),
(99, 28, 1, 0, 0, ''),
(99, 29, 1, 0, 0, ''),
(99, 30, 1, 0, 0, ''),
(99, 31, 1, 0, 0, ''),
(99, 32, 1, 0, 0, ''),
(99, 33, 1, 0, 0, ''),
(99, 34, 1, 0, 0, ''),
(99, 35, 1, 0, 0, ''),
(99, 36, 1, 0, 0, ''),
(99, 37, 1, 0, 0, ''),
(100, 1, 1, 0, 0, ''),
(100, 2, 1, 0, 0, ''),
(100, 3, 1, 0, 0, ''),
(100, 4, 0, 0, 0, ''),
(100, 5, 1, 0, 0, ''),
(100, 6, 1, 0, 0, ''),
(100, 7, 1, 0, 1, 'sin motor'),
(100, 8, 1, 0, 0, ''),
(100, 9, 1, 0, 0, ''),
(100, 10, 1, 0, 1, 'vidrio quebrado'),
(100, 11, 1, 0, 0, ''),
(100, 12, 0, 0, 0, ''),
(100, 13, 1, 0, 0, ''),
(100, 14, 1, 0, 0, ''),
(100, 15, 1, 0, 0, ''),
(100, 16, 1, 0, 0, ''),
(100, 17, 1, 0, 0, ''),
(100, 18, 1, 0, 0, ''),
(100, 19, 1, 0, 0, ''),
(100, 20, 1, 0, 0, ''),
(100, 21, 0, 0, 0, ''),
(100, 22, 1, 1, 0, ''),
(100, 23, 1, 0, 0, ''),
(100, 24, 1, 1, 0, ''),
(100, 25, 1, 0, 0, ''),
(100, 26, 1, 0, 0, ''),
(100, 27, 1, 0, 0, ''),
(100, 28, 1, 0, 0, ''),
(100, 29, 1, 0, 0, ''),
(100, 30, 1, 0, 0, ''),
(100, 31, 1, 0, 0, ''),
(100, 32, 1, 0, 0, ''),
(100, 33, 1, 0, 0, ''),
(100, 34, 1, 0, 0, ''),
(100, 35, 1, 0, 0, ''),
(100, 36, 1, 0, 0, ''),
(100, 37, 1, 0, 0, ''),
(100, 38, 1, 0, 0, ''),
(101, 50, 1, 1, 0, 'no-realizado'),
(102, 50, 1, 1, 0, 'no-realizado'),
(103, 50, 1, 1, 0, 'no-realizado'),
(104, 50, 1, 1, 0, 'no-realizado'),
(105, 50, 1, 1, 0, 'no-realizado'),
(106, 50, 1, 1, 0, 'no-realizado'),
(107, 50, 1, 1, 0, 'no-realizado'),
(108, 1, 1, 0, 0, 'puebasss'),
(108, 2, 1, 0, 0, ''),
(108, 3, 1, 0, 0, ''),
(108, 4, 1, 0, 0, ''),
(108, 5, 1, 0, 0, ''),
(108, 6, 1, 0, 0, ''),
(108, 7, 1, 0, 0, ''),
(108, 8, 1, 0, 0, ''),
(108, 9, 1, 0, 0, ''),
(108, 10, 1, 0, 0, ''),
(108, 11, 1, 0, 0, ''),
(108, 12, 1, 0, 0, ''),
(108, 13, 1, 0, 0, ''),
(108, 14, 1, 0, 0, ''),
(108, 15, 1, 0, 0, ''),
(108, 16, 1, 0, 0, ''),
(108, 17, 1, 0, 0, ''),
(108, 18, 1, 0, 0, ''),
(108, 19, 1, 0, 0, ''),
(108, 20, 1, 0, 0, ''),
(108, 21, 1, 0, 0, ''),
(108, 22, 1, 0, 0, ''),
(108, 23, 1, 0, 0, ''),
(108, 24, 1, 0, 0, ''),
(108, 25, 1, 0, 0, ''),
(108, 26, 1, 0, 0, ''),
(108, 27, 1, 0, 0, ''),
(108, 28, 1, 0, 0, ''),
(108, 29, 1, 0, 0, ''),
(108, 30, 1, 0, 0, ''),
(108, 31, 1, 0, 0, ''),
(108, 32, 1, 0, 0, ''),
(108, 33, 1, 0, 0, ''),
(108, 34, 1, 0, 0, ''),
(108, 35, 1, 0, 0, ''),
(108, 36, 1, 0, 0, ''),
(108, 37, 1, 0, 0, ''),
(108, 38, 1, 0, 0, ''),
(109, 50, 1, 1, 0, 'no-realizado'),
(110, 50, 1, 1, 0, 'no-realizado'),
(111, 50, 1, 1, 0, 'no-realizado'),
(112, 50, 1, 1, 0, 'no-realizado'),
(113, 50, 1, 1, 0, 'no-realizado'),
(114, 50, 1, 1, 0, 'no-realizado'),
(115, 50, 1, 1, 0, 'no-realizado');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `mivista1`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `mivista1` (
`idcontrol` int(11)
,`nombre_unidad` varchar(11)
,`estado` varchar(3)
,`Disponible` varchar(10)
,`novedades` varchar(2)
,`detalle` varchar(500)
,`hora` varchar(12)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(11) NOT NULL,
  `fservicio` date NOT NULL,
  `direccion` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `motivo` text COLLATE latin1_spanish_ci NOT NULL,
  `autoriza` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `horasalida` time NOT NULL,
  `creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uactualizacion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `fservicio`, `direccion`, `motivo`, `autoriza`, `horasalida`, `creacion`, `uactualizacion`) VALUES
(105, '2018-10-01', 'Desconocida', 'Prueba de sistema', 'Jonathan Prieto', '10:27:00', '2018-10-01 13:28:23', '0000-00-00 00:00:00'),
(106, '2018-10-22', 'Cuartel Segunda Cia', 'Traslado de Cadetes', 'Telecomuniaciones', '13:36:00', '2018-10-22 16:37:25', '0000-00-00 00:00:00'),
(163, '2018-11-04', 'Isla Cautin', 'Traslado de Cadetes por ejercicio', 'Comandante', '21:11:00', '2018-11-05 00:12:06', '0000-00-00 00:00:00'),
(164, '2018-11-04', 'Cueartes 6cia', 'Carga d cilindros', '3 comandante', '21:32:00', '2018-11-05 00:32:40', '0000-00-00 00:00:00'),
(165, '2018-11-04', 'Hospital Regional', 'Retiro de Material', 'Comandante', '21:47:00', '2018-11-05 00:47:30', '0000-00-00 00:00:00'),
(166, '2018-11-08', 'U autonoma', 'Retiro de Material', 'Comandante', '18:27:00', '2018-11-08 21:27:51', '0000-00-00 00:00:00'),
(167, '2019-01-05', 'Cuartel 5 cia', 'carga de cilindros', 'Comandante', '14:04:00', '2019-01-05 17:04:58', '0000-00-00 00:00:00'),
(168, '2019-01-09', 'Isla cautin', 'Traslado de cadetes', 'Comandante', '00:01:00', '2019-01-09 13:19:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `set_servicio`
--

CREATE TABLE `set_servicio` (
  `id` int(11) NOT NULL,
  `fecha` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `hora` time NOT NULL,
  `motivo` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `observaciones` varchar(400) COLLATE latin1_spanish_ci NOT NULL,
  `asignado` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `autorizado` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `obsCentral` varchar(600) COLLATE latin1_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modificado` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL,
  `c8` int(11) NOT NULL,
  `c9` int(11) NOT NULL,
  `c10` int(11) NOT NULL,
  `c11` int(11) NOT NULL,
  `c12` int(11) NOT NULL,
  `c13` int(11) NOT NULL,
  `c14` int(11) NOT NULL,
  `c20` int(11) NOT NULL,
  `c21` int(11) NOT NULL,
  `b1` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `m1` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `h2` int(11) NOT NULL,
  `hx2` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `rx3` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `bx4` int(11) NOT NULL,
  `g4` int(11) NOT NULL,
  `b5` int(11) NOT NULL,
  `r5` int(11) NOT NULL,
  `b6` int(11) NOT NULL,
  `bx6` int(11) NOT NULL,
  `ba6` int(11) NOT NULL,
  `b7` int(11) NOT NULL,
  `bx7` int(11) NOT NULL,
  `m7` int(11) NOT NULL,
  `b8` int(11) NOT NULL,
  `s8` int(11) NOT NULL,
  `b9` int(11) NOT NULL,
  `b10` int(11) NOT NULL,
  `bx10` int(11) NOT NULL,
  `b11` int(11) NOT NULL,
  `b12` int(11) NOT NULL,
  `b13` int(11) NOT NULL,
  `z13` int(11) NOT NULL,
  `b14` int(11) NOT NULL,
  `k1` int(11) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL,
  `k4` int(11) NOT NULL,
  `lt1` int(11) NOT NULL,
  `j1` int(11) NOT NULL,
  `j2` int(11) NOT NULL,
  `j3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `set_servicio`
--

INSERT INTO `set_servicio` (`id`, `fecha`, `hora`, `motivo`, `direccion`, `observaciones`, `asignado`, `autorizado`, `obsCentral`, `estado`, `creado`, `modificado`, `last_update`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`, `c13`, `c14`, `c20`, `c21`, `b1`, `q1`, `m1`, `b2`, `h2`, `hx2`, `b3`, `r3`, `rx3`, `b4`, `bx4`, `g4`, `b5`, `r5`, `b6`, `bx6`, `ba6`, `b7`, `bx7`, `m7`, `b8`, `s8`, `b9`, `b10`, `bx10`, `b11`, `b12`, `b13`, `z13`, `b14`, `k1`, `k2`, `k3`, `k4`, `lt1`, `j1`, `j2`, `j3`) VALUES
(48, '2018-11-30', '01:01:00', 'a1', 'a1', 'a1', '', 'a1', ' aqui va el texto', 3, '2018-11-30 16:44:30', '', '0000-00-00 00:00:00', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, '2018-11-30', '01:02:00', 'Prueba de Equipos', 'Los Trigales 1130', '', '', 'Telecomunicaciones', ' aqui va el texto', 2, '2018-11-30 16:44:30', '', '0000-00-00 00:00:00', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, '2018-12-01', '01:10:00', 'Prueba de Equipos', 'Los Trigales 1130', '', '', 'Telecomunicaciones', '.', 4, '2018-11-30 16:44:30', 'sec sec', '2018-12-04 13:42:29', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, '2018-12-01', '01:03:00', 'Prueba deeee Equipos', 'Los Trigales 1130', '', '', 'yoni', '.', 2, '2018-11-30 16:44:30', 'central central', '2019-01-05 17:13:26', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, '2018-11-29', '02:00:00', 'Prueba de Equipos', 'Otro Lugar', '', '', 'yoni', '.', 3, '2018-11-30 16:44:30', 'sec sec', '2018-12-04 13:39:26', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, '2018-12-02', '01:01:00', 'Visita Jardin', 'Los Trigales 1130', 'sa', 'sec sec', 'yoni', '.', 1, '2018-11-30 16:44:30', 'central central', '2019-01-05 17:13:07', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, '2018-12-03', '01:01:00', 'Prueba de Equipos', 'REIGOLIL #2051', 'a', 'sec sec', 'yoni', '.', 1, '2018-11-30 21:52:51', 'central central', '2018-12-04 22:17:35', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, '2019-07-17', '03:00:00', 'Revision red seca', 'Los Poetas S/N', 'Deben ir 3 bomberos', 'sec sec', 'comandancia', '.', 1, '2019-07-03 22:13:35', 'central central', '2019-07-03 22:14:53', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `idunidad` int(11) NOT NULL,
  `nombre_unidad` varchar(11) COLLATE latin1_spanish_ci NOT NULL,
  `compañia` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `ocupado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`idunidad`, `nombre_unidad`, `compañia`, `estado`, `ocupado`) VALUES
(1, 'B1', 1, 1, 0),
(2, 'Q1', 1, 1, 0),
(3, 'M1', 1, 1, 0),
(4, 'B2', 2, 1, 0),
(5, 'H2', 2, 1, 0),
(6, 'HX2', 2, 1, 0),
(7, 'B3', 3, 1, 0),
(8, 'R3', 3, 1, 0),
(9, 'RX3', 3, 1, 0),
(10, 'B4', 4, 1, 0),
(11, 'BX4', 4, 1, 0),
(12, 'B5', 5, 1, 0),
(13, 'R5', 5, 1, 0),
(14, 'B6', 6, 1, 0),
(15, 'BX6', 6, 1, 0),
(16, 'B7', 7, 1, 0),
(17, 'BX7', 7, 1, 0),
(18, 'M7', 7, 1, 0),
(19, 'B8', 8, 1, 0),
(20, 'S8', 8, 1, 0),
(21, 'B9', 9, 1, 0),
(22, 'B10', 10, 1, 0),
(23, 'BX10', 10, 1, 0),
(24, 'B11', 11, 1, 0),
(25, 'B12', 12, 1, 0),
(26, 'B13', 13, 1, 0),
(27, 'Z13', 13, 1, 0),
(28, 'B14', 14, 1, 0),
(29, 'K1', 20, 1, 0),
(30, 'K2', 20, 1, 0),
(31, 'K3', 20, 1, 0),
(32, 'K4', 20, 1, 0),
(33, 'J1', 21, 1, 0),
(34, 'J2', 21, 1, 0),
(35, 'J3', 21, 1, 0),
(36, 'LT1', 20, 1, 0),
(37, 'BA6', 6, 1, 0),
(38, 'G4', 4, 1, 0),
(50, 'ficticia', 50, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_servicios`
--

CREATE TABLE `unidades_servicios` (
  `id_unidad_servicio` int(11) NOT NULL,
  `id_servicio_aso` int(11) NOT NULL,
  `us_autorizado` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `us_horasalida` time NOT NULL,
  `us_unidad` varchar(4) COLLATE latin1_spanish_ci NOT NULL,
  `us_fecha` date NOT NULL,
  `us_conductor` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `us_obac` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `us_nbomberos` int(2) NOT NULL,
  `us_kmsalida` double NOT NULL,
  `us_kmllegada` double NOT NULL,
  `us_horometrosalida` double NOT NULL,
  `us_horometrollegada` double NOT NULL,
  `us_horallegada` time NOT NULL,
  `us_novedades` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `us_sgas` int(1) NOT NULL,
  `operadora_sgas` int(4) NOT NULL,
  `us_fcreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `us_fmodificacion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `unidades_servicios`
--

INSERT INTO `unidades_servicios` (`id_unidad_servicio`, `id_servicio_aso`, `us_autorizado`, `us_horasalida`, `us_unidad`, `us_fecha`, `us_conductor`, `us_obac`, `us_nbomberos`, `us_kmsalida`, `us_kmllegada`, `us_horometrosalida`, `us_horometrollegada`, `us_horallegada`, `us_novedades`, `us_sgas`, `operadora_sgas`, `us_fcreacion`, `us_fmodificacion`) VALUES
(90, 105, 'Jonathan Prieto', '10:27:00', 'B3', '2018-10-01', '399', 'joaquin fuentes', 2, 123, 124, 123, 124, '10:30:00', 'Se quemo pantalla', 1, 1, '2018-10-01 13:28:23', '2019-01-09 13:32:54'),
(114, 106, 'Telecomuniaciones', '13:36:00', 'BX10', '2018-10-22', '1099', 'Claudio Faundez', 3, 2345, 2346, 345, 346.5, '13:20:00', 'Sin Novedades', 1, 8, '2018-10-22 16:37:25', '2018-11-09 15:04:10'),
(132, 106, 'Espex', '10:30:00', 'M1', '2018-10-22', 'juan pablo', '103', 3, 333, 377, 235, 0, '00:00:00', '', 1, 2, '2018-10-22 19:03:17', '2018-11-08 20:05:22'),
(182, 105, 'Jonathan Prieto', '10:59:00', 'HX2', '2018-10-31', '299', 'Felipe Veliz', 2, 678, 6799, 890, 222, '11:40:00', 'siiiiiiiii', 1, 2, '2018-10-31 14:00:08', '2019-01-09 13:32:57'),
(183, 105, 'Telecomunicaciones', '11:25:00', 'B1', '2018-10-31', '399', '201', 2, 333, 334, 23, 334, '03:03:00', 'dddddddddddd', 1, 6, '2018-10-31 14:26:01', '2019-01-09 13:33:09'),
(184, 163, 'Comandante', '21:11:00', 'B3', '2018-11-04', '399', 'Jaime Lopez', 3, 333.3, 333.4, 13.3, 13.3, '21:11:00', 'Sin Novedades...', 1, 7, '2018-11-05 00:12:06', '2018-11-08 20:38:46'),
(185, 164, '3 comandante', '21:32:00', 'B4', '2018-11-04', '499', 'Luis Mella', 2, 123, 124, 123, 123, '21:32:00', 'sn', 1, 7, '2018-11-05 00:32:40', '2018-11-08 21:06:26'),
(186, 165, 'Comandante', '21:47:00', 'R5', '2018-11-04', '599', 'ricardo castillo', 5, 123, 124, 123, 123, '21:48:00', 'ahora si', 1, 7, '2018-11-05 00:47:30', '2018-11-08 16:35:27'),
(187, 166, 'Comandante', '18:27:00', 'Q1', '2018-11-08', '199', '101', 3, 123, 1234, 234, 234, '18:28:00', 'pruebas10000', 1, 5, '2018-11-08 21:27:51', '2019-01-09 13:15:24'),
(188, 167, 'Comandante', '14:04:00', 'B8', '2019-01-05', '899', '801', 1, 345, 345.1, 654, 36664, '14:07:00', '', 1, 1, '2019-01-05 17:04:58', '2019-01-05 17:09:28'),
(189, 168, 'Comandante', '00:01:00', 'BX4', '2019-01-09', '499', 'cesar ', 3, 1, 1.1, 1, 1.1, '00:00:00', '', 1, 1, '2019-01-09 13:19:24', '2019-01-09 13:35:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(2) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `clave` varchar(80) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `activo` int(1) NOT NULL,
  `permiso` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `clave`, `correo`, `activo`, `permiso`) VALUES
(1, 'Jonathan', 'Prieto Ili', '$2y$12$xfYl/XgJzdAJH4zWGHRbP.PMInKQEf7KqiZ9PDY7DQuiZjM7BIRcu', 'jonathan.prieto@espex.cl', 0, 1),
(2, 'martin', 'CIFUENTES HIGERA', '$2y$12$6rq9EEzCgUMduU7VhtHhc.IpNZKeylVSvhkmA7w8o1lbvoq/uYEju', 'jp_ili@hotmail.com', 0, 2),
(19, 'sec', 'sec', '$2y$12$5B6R0RHFavGvHJLgRoeCoukAb.E7EfmM2JB/D5cZPtO9iFnxmIXzC', 'jonathan.prieto@espex.cl', 0, 2),
(20, 'central', 'central', '$2y$12$fAFR91gdpjixN1dOb9EfBeWgnCX8z/hRQH7JNhVCUktcE6Ab9Y.He', 'jonathan.prieto@espex.cl', 0, 4);

-- --------------------------------------------------------

--
-- Estructura para la vista `mivista1`
--
DROP TABLE IF EXISTS `mivista1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mivista1`  AS  select `c`.`idcontrol` AS `idcontrol`,`u`.`nombre_unidad` AS `nombre_unidad`,if((`c`.`estado` = 0),'0-8','0-9') AS `estado`,if((`c`.`disponible` = 1),'DISPONIBLE','-') AS `Disponible`,if((`c`.`novedad` = 1),'SI','NO') AS `novedades`,`c`.`detalle` AS `detalle`,if((`con`.`horaControl` = 1),'8:15',if((`con`.`horaControl` = 2),'12:15','No-Realizado')) AS `hora` from ((`controlunidad` `c` join `unidades` `u`) join `control` `con`) where ((`c`.`idunidadcontrol` = `u`.`idunidad`) and (`c`.`idcontrol` = `con`.`idcontrol`)) order by `c`.`idcontrol` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `companias`
--
ALTER TABLE `companias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactoscbt`
--
ALTER TABLE `contactoscbt`
  ADD PRIMARY KEY (`idcontactos`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`idcontrol`);

--
-- Indices de la tabla `controlunidad`
--
ALTER TABLE `controlunidad`
  ADD PRIMARY KEY (`idcontrol`,`idunidadcontrol`),
  ADD KEY `idunidadcontrol` (`idunidadcontrol`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indices de la tabla `set_servicio`
--
ALTER TABLE `set_servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`idunidad`);

--
-- Indices de la tabla `unidades_servicios`
--
ALTER TABLE `unidades_servicios`
  ADD PRIMARY KEY (`id_unidad_servicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `companias`
--
ALTER TABLE `companias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `contactoscbt`
--
ALTER TABLE `contactoscbt`
  MODIFY `idcontactos` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `idcontrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT de la tabla `set_servicio`
--
ALTER TABLE `set_servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `idunidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `unidades_servicios`
--
ALTER TABLE `unidades_servicios`
  MODIFY `id_unidad_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `controlunidad`
--
ALTER TABLE `controlunidad`
  ADD CONSTRAINT `controlunidad_ibfk_1` FOREIGN KEY (`idcontrol`) REFERENCES `control` (`idcontrol`),
  ADD CONSTRAINT `controlunidad_ibfk_2` FOREIGN KEY (`idunidadcontrol`) REFERENCES `unidades` (`idunidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
