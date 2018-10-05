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



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_final`
--

CREATE TABLE `t_final` (
  `id_equipo` int(2) NOT NULL,
  `nom_equipo` varchar(20) DEFAULT NULL,
  `GF` int(2) DEFAULT NULL,
  `GC` int(2) DEFAULT NULL,
  `PF` int(2) DEFAULT NULL,
  `PE` int(2) DEFAULT NULL,
  `PT` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_final`
--

INSERT INTO `t_final` (`id_equipo`, `nom_equipo`, `GF`, `GC`, `PF`, `PE`, `PT`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_grupoa`
--

CREATE TABLE `t_grupoa` (
  `id_equipo` int(1) NOT NULL,
  `nom_equipo` varchar(20) NOT NULL,
  `PJ` int(2) NOT NULL,
  `PT` int(2) NOT NULL,
  `PF` int(2) NOT NULL,
  `PE` int(2) NOT NULL,
  `GF` int(2) NOT NULL,
  `GC` int(2) NOT NULL,
  `GD` int(2) NOT NULL,
  `GolF1` int(2) DEFAULT NULL,
  `GolF2` int(2) DEFAULT NULL,
  `GolF3` int(2) DEFAULT NULL,
  `PE_F1` int(2) DEFAULT NULL,
  `PE_F2` int(2) DEFAULT NULL,
  `PE_F3` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_grupoa`
--

INSERT INTO `t_grupoa` (`id_equipo`, `nom_equipo`, `PJ`, `PT`, `PF`, `PE`, `GF`, `GC`, `GD`, `GolF1`, `GolF2`, `GolF3`, `PE_F1`, `PE_F2`, `PE_F3`) VALUES
(1, 'Rusia', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Arabia Saudita', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Egipto', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Uruguay', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_grupob`
--

CREATE TABLE `t_grupob` (
  `id_equipo` int(1) NOT NULL,
  `nom_equipo` varchar(20) NOT NULL,
  `PJ` int(2) NOT NULL,
  `PT` int(2) NOT NULL,
  `PF` int(2) NOT NULL,
  `PE` int(2) NOT NULL,
  `GF` int(2) NOT NULL,
  `GC` int(2) NOT NULL,
  `GD` int(2) NOT NULL,
  `GolF1` int(2) DEFAULT NULL,
  `GolF2` int(2) DEFAULT NULL,
  `GolF3` int(2) DEFAULT NULL,
  `PE_F1` int(2) DEFAULT NULL,
  `PE_F2` int(2) DEFAULT NULL,
  `PE_F3` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_grupob`
--

INSERT INTO `t_grupob` (`id_equipo`, `nom_equipo`, `PJ`, `PT`, `PF`, `PE`, `GF`, `GC`, `GD`, `GolF1`, `GolF2`, `GolF3`, `PE_F1`, `PE_F2`, `PE_F3`) VALUES
(1, 'Portugal', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'España', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Marruecos', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Irán', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_grupoc`
--

CREATE TABLE `t_grupoc` (
  `id_equipo` int(1) NOT NULL,
  `nom_equipo` varchar(20) NOT NULL,
  `PJ` int(2) NOT NULL,
  `PT` int(2) NOT NULL,
  `PF` int(2) NOT NULL,
  `PE` int(2) NOT NULL,
  `GF` int(2) NOT NULL,
  `GC` int(2) NOT NULL,
  `GD` int(2) NOT NULL,
  `GolF1` int(2) DEFAULT NULL,
  `GolF2` int(2) DEFAULT NULL,
  `GolF3` int(2) DEFAULT NULL,
  `PE_F1` int(2) DEFAULT NULL,
  `PE_F2` int(2) DEFAULT NULL,
  `PE_F3` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_grupoc`
--

INSERT INTO `t_grupoc` (`id_equipo`, `nom_equipo`, `PJ`, `PT`, `PF`, `PE`, `GF`, `GC`, `GD`, `GolF1`, `GolF2`, `GolF3`, `PE_F1`, `PE_F2`, `PE_F3`) VALUES
(1, 'Francia', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Australia', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Perú', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Dinamarca', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_grupod`
--

CREATE TABLE `t_grupod` (
  `id_equipo` int(1) NOT NULL,
  `nom_equipo` varchar(20) NOT NULL,
  `PJ` int(2) NOT NULL,
  `PT` int(2) NOT NULL,
  `PF` int(2) NOT NULL,
  `PE` int(2) NOT NULL,
  `GF` int(2) NOT NULL,
  `GC` int(2) NOT NULL,
  `GD` int(2) NOT NULL,
  `GolF1` int(2) DEFAULT NULL,
  `GolF2` int(2) DEFAULT NULL,
  `GolF3` int(2) DEFAULT NULL,
  `PE_F1` int(2) DEFAULT NULL,
  `PE_F2` int(2) DEFAULT NULL,
  `PE_F3` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_grupod`
--

INSERT INTO `t_grupod` (`id_equipo`, `nom_equipo`, `PJ`, `PT`, `PF`, `PE`, `GF`, `GC`, `GD`, `GolF1`, `GolF2`, `GolF3`, `PE_F1`, `PE_F2`, `PE_F3`) VALUES
(1, 'Argentina', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Islandia', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Croacia', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Nigeria', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_grupoe`
--

CREATE TABLE `t_grupoe` (
  `id_equipo` int(1) NOT NULL,
  `nom_equipo` varchar(20) NOT NULL,
  `PJ` int(2) NOT NULL,
  `PT` int(2) NOT NULL,
  `PF` int(2) NOT NULL,
  `PE` int(2) NOT NULL,
  `GF` int(2) NOT NULL,
  `GC` int(2) NOT NULL,
  `GD` int(2) NOT NULL,
  `GolF1` int(2) DEFAULT NULL,
  `GolF2` int(2) DEFAULT NULL,
  `GolF3` int(2) DEFAULT NULL,
  `PE_F1` int(2) DEFAULT NULL,
  `PE_F2` int(2) DEFAULT NULL,
  `PE_F3` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_grupoe`
--

INSERT INTO `t_grupoe` (`id_equipo`, `nom_equipo`, `PJ`, `PT`, `PF`, `PE`, `GF`, `GC`, `GD`, `GolF1`, `GolF2`, `GolF3`, `PE_F1`, `PE_F2`, `PE_F3`) VALUES
(1, 'Brasil', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Suiza', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Costa Rica', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Serbia', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_grupof`
--

CREATE TABLE `t_grupof` (
  `id_equipo` int(1) NOT NULL,
  `nom_equipo` varchar(20) NOT NULL,
  `PJ` int(2) NOT NULL,
  `PT` int(2) NOT NULL,
  `PF` int(2) NOT NULL,
  `PE` int(2) NOT NULL,
  `GF` int(2) NOT NULL,
  `GC` int(2) NOT NULL,
  `GD` int(2) NOT NULL,
  `GolF1` int(2) DEFAULT NULL,
  `GolF2` int(2) DEFAULT NULL,
  `GolF3` int(2) DEFAULT NULL,
  `PE_F1` int(2) DEFAULT NULL,
  `PE_F2` int(2) DEFAULT NULL,
  `PE_F3` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_grupof`
--

INSERT INTO `t_grupof` (`id_equipo`, `nom_equipo`, `PJ`, `PT`, `PF`, `PE`, `GF`, `GC`, `GD`, `GolF1`, `GolF2`, `GolF3`, `PE_F1`, `PE_F2`, `PE_F3`) VALUES
(1, 'Alemania', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Mexico', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Suecia', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Corea del Sur', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_grupog`
--

CREATE TABLE `t_grupog` (
  `id_equipo` int(1) NOT NULL,
  `nom_equipo` varchar(20) NOT NULL,
  `PJ` int(2) NOT NULL,
  `PT` int(2) NOT NULL,
  `PF` int(2) NOT NULL,
  `PE` int(2) NOT NULL,
  `GF` int(2) NOT NULL,
  `GC` int(2) NOT NULL,
  `GD` int(2) NOT NULL,
  `GolF1` int(2) DEFAULT NULL,
  `GolF2` int(2) DEFAULT NULL,
  `GolF3` int(2) DEFAULT NULL,
  `PE_F1` int(2) DEFAULT NULL,
  `PE_F2` int(2) DEFAULT NULL,
  `PE_F3` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_grupog`
--

INSERT INTO `t_grupog` (`id_equipo`, `nom_equipo`, `PJ`, `PT`, `PF`, `PE`, `GF`, `GC`, `GD`, `GolF1`, `GolF2`, `GolF3`, `PE_F1`, `PE_F2`, `PE_F3`) VALUES
(1, 'Belgica', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Panamá', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Túnez', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Inglaterra', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_grupoh`
--

CREATE TABLE `t_grupoh` (
  `id_equipo` int(1) NOT NULL,
  `nom_equipo` varchar(20) NOT NULL,
  `PJ` int(2) NOT NULL,
  `PT` int(2) NOT NULL,
  `PF` int(2) NOT NULL,
  `PE` int(2) NOT NULL,
  `GF` int(2) NOT NULL,
  `GC` int(2) NOT NULL,
  `GD` int(2) NOT NULL,
  `GolF1` int(2) DEFAULT NULL,
  `GolF2` int(2) DEFAULT NULL,
  `GolF3` int(2) DEFAULT NULL,
  `PE_F1` int(2) DEFAULT NULL,
  `PE_F2` int(2) DEFAULT NULL,
  `PE_F3` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_grupoh`
--

INSERT INTO `t_grupoh` (`id_equipo`, `nom_equipo`, `PJ`, `PT`, `PF`, `PE`, `GF`, `GC`, `GD`, `GolF1`, `GolF2`, `GolF3`, `PE_F1`, `PE_F2`, `PE_F3`) VALUES
(1, 'Polonia', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Senegal', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Colombia', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Japón', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_llavea_fve`
--

CREATE TABLE `t_llavea_fve` (
  `id_equipo` int(2) NOT NULL,
  `nom_equipo` varchar(20) DEFAULT NULL,
  `GF` int(2) DEFAULT NULL,
  `GC` int(2) DEFAULT NULL,
  `PF` int(2) DEFAULT NULL,
  `PE` int(2) DEFAULT NULL,
  `PT` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_llavea_fve`
--

INSERT INTO `t_llavea_fve` (`id_equipo`, `nom_equipo`, `GF`, `GC`, `PF`, `PE`, `PT`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_llaveb_cvg`
--

CREATE TABLE `t_llaveb_cvg` (
  `id_equipo` int(2) NOT NULL,
  `nom_equipo` varchar(20) DEFAULT NULL,
  `GF` int(2) DEFAULT NULL,
  `GC` int(2) DEFAULT NULL,
  `PF` int(2) DEFAULT NULL,
  `PE` int(2) DEFAULT NULL,
  `PT` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_llaveb_cvg`
--

INSERT INTO `t_llaveb_cvg` (`id_equipo`, `nom_equipo`, `GF`, `GC`, `PF`, `PE`, `PT`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_llavec_bvd`
--

CREATE TABLE `t_llavec_bvd` (
  `id_equipo` int(2) NOT NULL,
  `nom_equipo` varchar(20) DEFAULT NULL,
  `GF` int(2) DEFAULT NULL,
  `GC` int(2) DEFAULT NULL,
  `PF` int(2) DEFAULT NULL,
  `PE` int(2) DEFAULT NULL,
  `PT` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_llavec_bvd`
--

INSERT INTO `t_llavec_bvd` (`id_equipo`, `nom_equipo`, `GF`, `GC`, `PF`, `PE`, `PT`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_llaved_avh`
--

CREATE TABLE `t_llaved_avh` (
  `id_equipo` int(2) NOT NULL,
  `nom_equipo` varchar(20) DEFAULT NULL,
  `GF` int(2) DEFAULT NULL,
  `GC` int(2) DEFAULT NULL,
  `PF` int(2) DEFAULT NULL,
  `PE` int(2) DEFAULT NULL,
  `PT` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_llaved_avh`
--

INSERT INTO `t_llaved_avh` (`id_equipo`, `nom_equipo`, `GF`, `GC`, `PF`, `PE`, `PT`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_semi_a_avsb`
--

CREATE TABLE `t_semi_a_avsb` (
  `id_equipo` int(2) NOT NULL,
  `nom_equipo` varchar(20) DEFAULT NULL,
  `GF` int(2) DEFAULT NULL,
  `GC` int(2) DEFAULT NULL,
  `PF` int(2) DEFAULT NULL,
  `PE` int(2) DEFAULT NULL,
  `PT` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_semi_a_avsb`
--

INSERT INTO `t_semi_a_avsb` (`id_equipo`, `nom_equipo`, `GF`, `GC`, `PF`, `PE`, `PT`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_semi_b_cvsd`
--

CREATE TABLE `t_semi_b_cvsd` (
  `id_equipo` int(2) NOT NULL,
  `nom_equipo` varchar(20) NOT NULL,
  `GF` int(2) DEFAULT NULL,
  `GC` int(2) DEFAULT NULL,
  `PF` int(2) DEFAULT NULL,
  `PE` int(2) DEFAULT NULL,
  `PT` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_semi_b_cvsd`
--

INSERT INTO `t_semi_b_cvsd` (`id_equipo`, `nom_equipo`, `GF`, `GC`, `PF`, `PE`, `PT`) VALUES
(1, '', NULL, NULL, NULL, NULL, NULL),
(2, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_final`
--
ALTER TABLE `t_final`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_grupoa`
--
ALTER TABLE `t_grupoa`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_grupob`
--
ALTER TABLE `t_grupob`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_grupoc`
--
ALTER TABLE `t_grupoc`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_grupod`
--
ALTER TABLE `t_grupod`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_grupoe`
--
ALTER TABLE `t_grupoe`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_grupof`
--
ALTER TABLE `t_grupof`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_grupog`
--
ALTER TABLE `t_grupog`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_grupoh`
--
ALTER TABLE `t_grupoh`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_llavea_fve`
--
ALTER TABLE `t_llavea_fve`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_llaveb_cvg`
--
ALTER TABLE `t_llaveb_cvg`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_llavec_bvd`
--
ALTER TABLE `t_llavec_bvd`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_llaved_avh`
--
ALTER TABLE `t_llaved_avh`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_semi_a_avsb`
--
ALTER TABLE `t_semi_a_avsb`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_semi_b_cvsd`
--
ALTER TABLE `t_semi_b_cvsd`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `t_user_album`
--
ALTER TABLE `t_user_album`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_final`
--
ALTER TABLE `t_final`
  MODIFY `id_equipo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_grupoa`
--
ALTER TABLE `t_grupoa`
  MODIFY `id_equipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_grupob`
--
ALTER TABLE `t_grupob`
  MODIFY `id_equipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_grupoc`
--
ALTER TABLE `t_grupoc`
  MODIFY `id_equipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_grupod`
--
ALTER TABLE `t_grupod`
  MODIFY `id_equipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_grupoe`
--
ALTER TABLE `t_grupoe`
  MODIFY `id_equipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_grupof`
--
ALTER TABLE `t_grupof`
  MODIFY `id_equipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_grupog`
--
ALTER TABLE `t_grupog`
  MODIFY `id_equipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_grupoh`
--
ALTER TABLE `t_grupoh`
  MODIFY `id_equipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_llavea_fve`
--
ALTER TABLE `t_llavea_fve`
  MODIFY `id_equipo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_llaveb_cvg`
--
ALTER TABLE `t_llaveb_cvg`
  MODIFY `id_equipo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_llavec_bvd`
--
ALTER TABLE `t_llavec_bvd`
  MODIFY `id_equipo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_llaved_avh`
--
ALTER TABLE `t_llaved_avh`
  MODIFY `id_equipo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_semi_a_avsb`
--
ALTER TABLE `t_semi_a_avsb`
  MODIFY `id_equipo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_semi_b_cvsd`
--
ALTER TABLE `t_semi_b_cvsd`
  MODIFY `id_equipo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_user_album`
--
ALTER TABLE `t_user_album`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;