-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2022 a las 23:48:30
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_limpieza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_de_limpieza`
--

CREATE TABLE `articulos_de_limpieza` (
  `codigo_del_producto` varchar(20) NOT NULL,
  `descripcion` varchar(70) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `precio` int(10) NOT NULL,
  `cantidad_en_stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos_de_limpieza`
--

INSERT INTO `articulos_de_limpieza` (`codigo_del_producto`, `descripcion`, `categoria`, `precio`, `cantidad_en_stock`) VALUES
('prod001', 'Producto 001', NULL, 2000, 20),
('prod002', 'Producto 002', NULL, 1500, 10),
('prod003', 'Producto 003', NULL, 5100, 20),
('prod004', 'Producto 004', NULL, 5200, 10),
('prod006', 'Producto 006', NULL, 4500, 25),
('prod007', 'Prodcuto 007', NULL, 3500, 10),
('prod008', 'Producto 008', NULL, 2500, 10),
('prod009', 'Prodcuto 009', NULL, 5000, 15),
('prod010', 'Producto 010', NULL, 5200, 20),
('prod012', 'Producto 012', NULL, 5100, 20);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos_de_limpieza`
--
ALTER TABLE `articulos_de_limpieza`
  ADD PRIMARY KEY (`codigo_del_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
