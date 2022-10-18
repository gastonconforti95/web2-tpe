-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2020 a las 22:31:53
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seleccion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `equipo` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `altura` float(11) NOT NULL,
  `peso` float(11) NOT NULL,
  `id_posicion_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id`, `nombre`, `img`, `equipo`, `numero`, `altura`, `peso`, `id_posicion_fk`)
VALUES (1, 'Lionel Messi', 'messi.webp', 'PSG', 10, 1.76, 80, 1);

INSERT INTO `jugador` (`id`, `nombre`, `img`, `equipo`, `numero`, `altura`, `peso`, `id_posicion_fk`)
VALUES (2, 'Lautaro Martinez', 'lautaro-martinez.webp', 'INTER', 10, 1.76, 80, 1);

INSERT INTO `jugador` (`id`, `nombre`, `img`, `equipo`, `numero`, `altura`, `peso`, `id_posicion_fk`)
VALUES (3, 'Julian Alvarez', 'julian-alvarez.webp', 'MANCHESTER CITY', 10, 1.76, 80, 1);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posicion`
--

CREATE TABLE `posicion` (
  `id` int(11) NOT NULL,
  `posicion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posicion`
--

INSERT INTO `posicion` (`id`, `posicion`) VALUES (1, 'Delantero');
INSERT INTO `posicion` (`id`, `posicion`) VALUES (2, 'Volante');
INSERT INTO `posicion` (`id`, `posicion`) VALUES (3, 'Defensor');
INSERT INTO `posicion` (`id`, `posicion`) VALUES (4, 'Arquero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `isAdmin`) VALUES
(1, 'admin', '$2y$10$R6jemoaOkkuCQoKq1t9FZ.yN3T9EvqHGAl0eZQjN/bIASZGPueisi', 1),
(22, 'invitado', '$2y$10$R6jemoaOkkuCQoKq1t9FZ.yN3T9EvqHGAl0eZQjN/bIASZGPueisi', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_posicion_fk` (`id_posicion_fk`);

--
-- Indices de la tabla `posicion`
--
ALTER TABLE `posicion`
  ADD PRIMARY KEY (`id`);
--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=460;

--
-- AUTO_INCREMENT de la tabla `posicion`
--
ALTER TABLE `posicion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posicion`
--

/*JUGADOR TIENE id_posicion_fk - POSICION TIENE ID*/
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`id_posicion_fk`) REFERENCES `posicion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*INFO TIENE id_jugador_fk - JUGADOR TIENE ID
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`id_jugador_fk`) REFERENCES `jugador` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;*/

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
