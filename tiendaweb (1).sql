-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-07-2022 a las 14:24:55
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesventas`
--

CREATE TABLE `detallesventas` (
  `id` int(11) NOT NULL,
  `idventas` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `precio` decimal(60,2) NOT NULL,
  `subtotal` decimal(60,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detventasnotlog`
--

CREATE TABLE `detventasnotlog` (
  `idnotlog` int(11) NOT NULL,
  `idventas` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `precio` decimal(60,2) NOT NULL,
  `subtotal` decimal(60,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `idventas` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `Fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Total` decimal(60,2) NOT NULL,
  `estado` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `username`, `email`, `pass`) VALUES
(1, 'Brayan', 'melgar10barca@gmail.com', '$2y$10$RQwgsFGNqeBEpNmMcqNmB.oCmSnmKmZKgH92mZoa226');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasnotlog`
--

CREATE TABLE `ventasnotlog` (
  `idventas` int(11) NOT NULL,
  `DNI` varchar(500) NOT NULL,
  `Direccion` varchar(500) NOT NULL,
  `Telefono` varchar(500) NOT NULL,
  `Correo` varchar(500) NOT NULL,
  `Fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Total` decimal(60,2) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallesventas`
--
ALTER TABLE `detallesventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detventasnotlog`
--
ALTER TABLE `detventasnotlog`
  ADD PRIMARY KEY (`idnotlog`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`idventas`),
  ADD KEY `tblventas_usuarios` (`idusuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `ventasnotlog`
--
ALTER TABLE `ventasnotlog`
  ADD PRIMARY KEY (`idventas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallesventas`
--
ALTER TABLE `detallesventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detventasnotlog`
--
ALTER TABLE `detventasnotlog`
  MODIFY `idnotlog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `idventas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventasnotlog`
--
ALTER TABLE `ventasnotlog`
  MODIFY `idventas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD CONSTRAINT `tblventas_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
