-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2022 a las 01:33:59
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ugel_rd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resolucion`
--

CREATE TABLE `resolucion` (
  `id_resolucion` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `doc_url` varchar(45) DEFAULT NULL,
  `id_tipo_resolucion` int(11) NOT NULL,
  `numero_res` varchar(45) DEFAULT NULL,
  `dni` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `resolucion`
--

INSERT INTO `resolucion` (`id_resolucion`, `fecha`, `doc_url`, `id_tipo_resolucion`, `numero_res`, `dni`, `nombres`, `paterno`, `materno`) VALUES
(17, '2022-08-17', 'views/public/docs/O457.pdf', 21, '1', '73744393', 'FREDDY WALTER', 'HUAYNAPATA', 'UCHARICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_resolucion`
--

CREATE TABLE `tipo_resolucion` (
  `id_tipo_resolucion` int(11) NOT NULL,
  `detalle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_resolucion`
--

INSERT INTO `tipo_resolucion` (`id_tipo_resolucion`, `detalle`) VALUES
(21, 'CONCERDER LICENCIA POR MATERNIDAD CON GOCE DE REMUNERACION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `rol`) VALUES
(1, 'admin1', '321', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `resolucion`
--
ALTER TABLE `resolucion`
  ADD PRIMARY KEY (`id_resolucion`),
  ADD KEY `fk_resolucion_tipo_resolucion1` (`id_tipo_resolucion`);

--
-- Indices de la tabla `tipo_resolucion`
--
ALTER TABLE `tipo_resolucion`
  ADD PRIMARY KEY (`id_tipo_resolucion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `resolucion`
--
ALTER TABLE `resolucion`
  MODIFY `id_resolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tipo_resolucion`
--
ALTER TABLE `tipo_resolucion`
  MODIFY `id_tipo_resolucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `resolucion`
--
ALTER TABLE `resolucion`
  ADD CONSTRAINT `fk_resolucion_tipo_resolucion1` FOREIGN KEY (`id_tipo_resolucion`) REFERENCES `tipo_resolucion` (`id_tipo_resolucion`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
