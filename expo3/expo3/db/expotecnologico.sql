-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 02:08:13
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `expotecnologico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `cedula` int(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`cedula`, `nombre`, `correo`, `clave`) VALUES
(12345, 'admin', 'admin@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspirante`
--

CREATE TABLE `aspirante` (
  `id` int(4) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Clave` varchar(12) NOT NULL,
  `Correo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aspirante`
--

INSERT INTO `aspirante` (`id`, `Nombre`, `Clave`, `Correo`) VALUES
(1, 'denisse', '40bd00156308', 'denisse@gmail.com'),
(2, 'usuario1', 'f6242462ecee', 'usuario1@gmail.com'),
(3, 'usuario', '3c9909afec25', 'usuario@gmail.com'),
(5, 'user', '40bd00156308', 'user@gmail.com'),
(6, 'a', '3c9909afec25', 'a'),
(7, '1', '4dff4ea340f0', '1'),
(8, '2', 'da4b9237bacc', '2'),
(9, 'b', '5267768822ee', 'b'),
(10, 'intento', 'e9d71f5ee7c9', 'intento@gmail.com'),
(12, 'x', '11f6ad8ec52a', 'x@gmail.com'),
(13, 'Usuario registrado', '7b52009b64fd', 'usuariore@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `cod_trabajo` int(4) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor_uno` varchar(100) DEFAULT NULL,
  `autor_dos` varchar(100) DEFAULT NULL,
  `correo_uno` varchar(250) DEFAULT NULL,
  `correo_dos` varchar(250) DEFAULT NULL,
  `modalidad` varchar(100) NOT NULL,
  `articulo` varchar(250) DEFAULT NULL,
  `aspirante` int(4) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`cod_trabajo`, `titulo`, `autor_uno`, `autor_dos`, `correo_uno`, `correo_dos`, `modalidad`, `articulo`, `aspirante`, `estado`) VALUES
(48, 'titulo usuario registrado', 'autore', 'autor', 'coore@gamil.com', 'correo2@gmail.com', 'investigativa', 'archivos/prueba2.pdf', 13, 'pendiente'),
(49, 'Titulo trabajo x', 'autorx', NULL, 'correox', NULL, 'investigativa', 'archivos/S-SDLC mapa conceptual.pdf', 12, 'pendiente'),
(50, 'titulo prueba', 'autores', NULL, 'correoprueba@gmail.com', NULL, 'investigativa', 'archivos/prueba3.pdf', 12, 'Aprobado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `aspirante`
--
ALTER TABLE `aspirante`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`cod_trabajo`),
  ADD KEY `aspirante` (`aspirante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aspirante`
--
ALTER TABLE `aspirante`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `cod_trabajo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `trabajo_ibfk_1` FOREIGN KEY (`aspirante`) REFERENCES `aspirante` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
