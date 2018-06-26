-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2018 a las 02:43:59
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagaaron`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnas`
--

CREATE TABLE `alumnas` (
  `id_alumna` int(11) NOT NULL,
  `nombre_alumna` varchar(100) NOT NULL,
  `grupo_alumna` int(11) NOT NULL,
  `fecha_nac` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnas`
--

INSERT INTO `alumnas` (`id_alumna`, `nombre_alumna`, `grupo_alumna`, `fecha_nac`) VALUES
(1, 'Niña', 1, '12/12/3'),
(2, 'Juanita', 2, '12/12/6'),
(3, 'Niña', 1, '12/12/3'),
(4, 'Juanita', 2, '12/12/6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `nombre_grupo`) VALUES
(1, '1A'),
(2, '1B'),
(3, '1C'),
(4, '1D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL,
  `id_alumna` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `nom_mama` varchar(200) NOT NULL,
  `fecha_pago` varchar(30) NOT NULL,
  `fecha_envio` varchar(20) NOT NULL,
  `url` varchar(300) NOT NULL,
  `folio` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `id_alumna`, `id_grupo`, `nom_mama`, `fecha_pago`, `fecha_envio`, `url`, `folio`) VALUES
(1, 2, 1, 'Mama luchona', '2018-06-14', '2018-06-12', 'hhttp.dgadgsd', '12423'),
(2, 2, 2, 'mande luchona 2', '0000-00-00', '25-06-2018 18:58:59', 'ruta url', '14654'),
(3, 3, 4, 'mande luchona 3', '0000-00-00', '25-06-2018 19:01:59', 'ruta url', '34534'),
(4, 2, 2, 'mande luchona 4', '06/20/2018', '25-06-2018 19:32:38', 'ruta url', '657567'),
(5, 4, 2, 'mande luchona 5', '06/19/2018', '25-06-2018 22:09:14', 'ruta url', '876');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `pass`) VALUES
(1, 'mario', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnas`
--
ALTER TABLE `alumnas`
  ADD PRIMARY KEY (`id_alumna`),
  ADD KEY `grupo_alumna` (`grupo_alumna`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_alumna` (`id_alumna`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnas`
--
ALTER TABLE `alumnas`
  MODIFY `id_alumna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnas`
--
ALTER TABLE `alumnas`
  ADD CONSTRAINT `alumnas_ibfk_1` FOREIGN KEY (`grupo_alumna`) REFERENCES `grupos` (`id_grupo`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_alumna`) REFERENCES `alumnas` (`id_alumna`),
  ADD CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
