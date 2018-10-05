-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2018 a las 23:00:53
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- ----------------------------------------------------------
-- Estructura de tabla para la tabla `t_user_album`
--

CREATE TABLE `t_user_album` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `documento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `habeas` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegis` date NOT NULL,
  `perfil` int(11) NOT NULL,
  `porcentaje` decimal(14,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `t_user_album`
--
ALTER TABLE `t_user_album`
  ADD PRIMARY KEY (`id_usuario`);



--
-- AUTO_INCREMENT de la tabla `t_user_album`
--
ALTER TABLE `t_user_album`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;