-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-12-2021 a las 16:58:46
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `humanbrands`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `dpi` text,
  `fecha_nacimiento` date DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `dpi`, `fecha_nacimiento`, `estado`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Huber Torres', '3428 05452 2205', '2021-12-01', 1, '2021-12-20 14:21:34', NULL, 1),
(2, 'Mark', '3428 05452 2205', '2021-12-09', 1, '2021-12-20 14:59:25', NULL, 1),
(3, 'Mark', '3428 05452 2205', '2021-12-16', 1, '2021-12-20 14:59:36', NULL, 1),
(4, 'Mark', '3428 05452 2205', '2021-12-16', 1, '2021-12-20 15:10:29', NULL, 1),
(5, 'Mark', '3428 05452 2205', '2021-12-16', 0, '2021-12-20 15:10:48', NULL, 1),
(6, 'Mark', '3428 05452 2205', '2021-12-16', 0, '2021-12-20 15:11:25', NULL, 1),
(7, 'Mark', '3428 05452 2205', '2021-12-16', 0, '2021-12-20 15:11:29', NULL, 1),
(8, 'carlos', '3428 05452 2203', '2021-12-02', 1, '2021-12-20 15:16:37', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
