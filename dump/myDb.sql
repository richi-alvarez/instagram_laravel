-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 24-05-2023 a las 16:38:37
-- Versión del servidor: 8.0.32
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `epayco_shopify_credentials`
--

CREATE TABLE `epayco_shopify_credentials` (
  `p_cust_id` varchar(255) NOT NULL,
  `public_key` varchar(255) NOT NULL,
  `p_key` varchar(255) NOT NULL,
  `tipe_checkout` varchar(45) NOT NULL,
  `checkout_test` varchar(45) NOT NULL,
  `language_checkout` varchar(45) NOT NULL,
  `shop_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shopify_shop`
--

CREATE TABLE `shopify_shop` (
  `id` int NOT NULL,
  `shop_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `hmac` varchar(255) NOT NULL,
  `install_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `epayco_shopify_credentials`
--
ALTER TABLE `epayco_shopify_credentials`
  ADD UNIQUE KEY `epayco_shop` (`shop_url`) USING BTREE;

--
-- Indices de la tabla `shopify_shop`
--
ALTER TABLE `shopify_shop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop_utl` (`shop_url`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `shopify_shop`
--
ALTER TABLE `shopify_shop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `epayco_shopify_credentials`
--
ALTER TABLE `epayco_shopify_credentials`
  ADD CONSTRAINT `epayco_shop` FOREIGN KEY (`shop_url`) REFERENCES `shopify_shop` (`shop_url`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;