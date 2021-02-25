-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2021 a las 20:36:31
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ciente_poliza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poliza_automotor`
--

CREATE TABLE `poliza_automotor` (
  `dni_titular` int(30) DEFAULT NULL,
  `N_poliza` int(30) DEFAULT NULL,
  `carga_Pdf` varchar(50) DEFAULT NULL,
  `vigencia` int(50) DEFAULT NULL,
  `tipo_veiculo` varchar(20) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `tipo_de_uso` varchar(30) DEFAULT NULL,
  `Patente` varchar(30) DEFAULT NULL,
  `N_Chasis` varchar(30) DEFAULT NULL,
  `n_motor` varchar(30) DEFAULT NULL,
  `suma_asegurada` int(5) DEFAULT NULL,
  `TipoSeguro` varchar(30) DEFAULT NULL,
  `covertura` varchar(20) DEFAULT NULL,
  `localidad_automotor` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `poliza_automotor`
--

INSERT INTO `poliza_automotor` (`dni_titular`, `N_poliza`, `carga_Pdf`, `vigencia`, `tipo_veiculo`, `marca`, `modelo`, `tipo_de_uso`, `Patente`, `N_Chasis`, `n_motor`, `suma_asegurada`, `TipoSeguro`, `covertura`, `localidad_automotor`) VALUES
(1250, 6, 'Introducción_JSP.pdf', 1, 'camioneta', 'ford', '2000', 'comercial', '2a333', '22b1', '34533g', 30000, 'todoR', 'total', 'suipacha'),
(1444, 6, '2JSP.pdf', 1, 'camioneta', 'ford', '2000', 'comercial', '2a334ff433', '22b342f31', '33g435', 40000, 'todoR', 'total', 'suipacha'),
(14566, 6, '3_JSP.pdf', 1, 'camioneta', 'ford', '2000', 'comercial', '2a23333', '4323242b1', '33345t', 50000, 'todoR', 'total', 'chilcoy'),
(14566, 6, '55_JSP.pdf', 1, 'camioneta', 'ford', '2000', 'comercial', '2342d234f3', '422332b1', '2233f45t', 65000, 'todoR', 'total', 'chilcoy'),
(156757, 6, '4_JSP.pdf', 1, 'camioneta', 'ford', '2000', 'comercial', '2a33f333', '22b232f41', '3533f3g43', 70000, 'todoR', 'total', 'bragado'),
(111, 0, '', 0, '', '', '', '', '444', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titular`
--

CREATE TABLE `titular` (
  `user_id` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `clave` varchar(70) DEFAULT NULL,
  `domicilio` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `registro` varchar(50) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `dni_titular` int(35) DEFAULT NULL,
  `email` int(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `titular`
--

INSERT INTO `titular` (`user_id`, `usuario`, `nombre`, `apellido`, `clave`, `domicilio`, `telefono`, `registro`, `localidad`, `dni_titular`, `email`) VALUES
(1, 'rogers63', 'david', 'john', 'e6a33eee180b07e563d74fee8c2c66b8', NULL, NULL, NULL, NULL, 1250, NULL),
(2, 'mike28', 'rogers', 'paul', '2e7dc6b8a1598f4f75c3eaa47958ee2f', NULL, NULL, NULL, NULL, 5677, NULL),
(3, 'rivera92', 'david', 'john', '1c3a8e03f448d211904161a6f5849b68', NULL, NULL, NULL, NULL, 1667, NULL),
(4, 'ross95', 'maria', 'sanders', '62f0a68a4179c5cdd997189760cbcf18', NULL, NULL, NULL, NULL, 177446, NULL),
(5, 'paul85', 'morris', 'miller', '61bd060b07bddfecccea56a82b850ecf', NULL, NULL, NULL, NULL, 134554, NULL),
(6, 'smith34', 'daniel', 'michael', '7055b3d9f5cb2829c26cd7e0e601cde5', NULL, NULL, NULL, NULL, 1345453, NULL),
(7, 'james84', 'sanders', 'paul', 'b7f72d6eb92b45458020748c8d1a3573', NULL, NULL, NULL, NULL, 134535, NULL),
(8, 'daniel53', 'mark', 'mike', '299cbf7171ad1b2967408ed200b4e26c', NULL, NULL, NULL, NULL, 1453345, NULL),
(9, 'brooks80', 'morgan', 'maria', 'aa736a35dc15934d67c0a999dccff8f6', NULL, NULL, NULL, NULL, 134535, NULL),
(10, 'morgan65', 'paul', 'miller', 'a28dca31f5aa5792e1cefd1dfd098569', NULL, NULL, NULL, NULL, 134535, NULL),
(11, 'sanders84', 'david', 'miller', '0629e4f9f0e01e6f20bc2066175e09f7', NULL, NULL, NULL, NULL, 134535, NULL),
(12, 'maria40', 'chrishaydon', 'bell', '17f286a78c74db7ee24374c608a2f20c', NULL, NULL, NULL, NULL, 1345345, NULL),
(13, 'brown71', 'michael', 'brown', 'fa0c46cc4339a8a51a7da1b33e9d2831', NULL, NULL, NULL, NULL, 156757, NULL),
(14, 'james63', 'morgan', 'james', 'b945416fa907fac533d94efe1974ec07', NULL, NULL, NULL, NULL, 167567, NULL),
(15, 'jenny0993', 'rogers', 'chrishaydon', '388823cb9249d4cebc9d677a99e1d79d', NULL, NULL, NULL, NULL, 144, NULL),
(16, 'john96', 'morgan', 'wright', 'd0bb977705c3cdad1e346c898f32a1b7', NULL, NULL, NULL, NULL, 1333, NULL),
(17, 'miller64', 'morgan', 'wright', '58b207ee33794b046511203967c8e0d7', NULL, NULL, NULL, NULL, 1444, NULL),
(18, 'mark46', 'david', 'ross', '21cdcb68a932871524e16680fac72e18', NULL, NULL, NULL, NULL, 144534, NULL),
(10005, 'aaaaaaa', '', '', 'juab123', '', 0, '', '', 111, 0),
(10004, 'asdasd', '', '', 'juab123', '', 0, '', '', 32131, 0),
(21, 'morris72', 'miller', 'michael', 'bdb047eb9ea511052fc690a8ac72a7d3', NULL, NULL, NULL, NULL, 1223444, NULL),
(22, 'wright39', 'ross', 'rogers', '1b6859df2da2a416c5b0fa044b1c6a75', NULL, NULL, NULL, NULL, 187686756, NULL),
(23, 'paul68', 'brooks', 'mike', '12d836bf64839f987338414ccbec657f', NULL, NULL, NULL, NULL, 1867857, NULL),
(10001, 'juan123123', '', '', 'juab123', '111111111111', 0, '', '', 0, 0),
(10002, 'asdad', '', '', 'juab123', '', 0, '', '', 5555555, 0),
(10003, 'tt', '', '', 'juab123', '', 0, '', '', 2147483647, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `titular`
--
ALTER TABLE `titular`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `titular`
--
ALTER TABLE `titular`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
