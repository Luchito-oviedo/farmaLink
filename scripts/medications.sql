-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2024 a las 04:48:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmalink`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medications`
--

CREATE TABLE `medications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `descriptions` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `medications`
--

INSERT INTO `medications` (`id`, `name`, `descriptions`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Paracetamol', 'Alivia dolores estomacales', 2000, '2023-05-31 17:00:00', '2024-06-01 06:27:47'),
(3, 'Aceite esencial de eucalipto ', '6 G + 5 G + 3 G +4.8 G / 100 G', 4000, '2023-05-31 17:00:00', '2024-06-01 06:48:59'),
(4, 'Aceite de Hígado de pescado + Oxido de ZINC', '20 G + 27 G /100 G', 5000, '2023-05-31 17:00:00', '2024-06-01 06:26:17'),
(5, 'Acetaminofén', 'Concentrada de 500 MG', 300, '2023-05-31 17:00:00', '2024-06-01 06:25:23'),
(6, 'ACETAMINOFÉN', '3.2G / 100ML', 1500, '2023-05-31 17:00:00', '2024-06-01 06:23:46'),
(26, 'Ibuprofeno', 'Pastillas para calmar dolores fuertes de cabeza', 700, '2024-06-01 06:23:24', '2024-06-01 06:23:24'),
(27, 'Metacarbamol', 'Pastillas cero nell', 1000, '2024-06-01 06:44:38', '2024-06-01 06:44:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medications`
--
ALTER TABLE `medications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
