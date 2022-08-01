-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2022 a las 02:16:01
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sport_log`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `jugador` varchar(45) NOT NULL,
  `Tipo_de_asistencia` varchar(45) NOT NULL,
  `fecha` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `jugador`, `Tipo_de_asistencia`, `fecha`) VALUES
(29, '3', 'llego tarde', '2019-11-28'),
(30, '54', 'no asistio', '2019-11-28'),
(31, '226', 'llego tarde', '2019-11-28'),
(32, '1001917552', 'asitio', '2019-11-28'),
(33, '3', 'no asistio', '2022-07-11'),
(34, '226', 'asitio', '2022-07-31'),
(35, '1001917552', 'asitio', '2022-07-31'),
(36, '1002028561', 'asitio', '2022-07-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Fecha` varchar(45) NOT NULL,
  `Cantidad_de_articulos` int(11) NOT NULL,
  `Estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `Nombre`, `Fecha`, `Cantidad_de_articulos`, `Estado`) VALUES
(8, 'uniformes ', '2019-11-08', 55, 'Malo'),
(10, 'conos', '2022-07-29', 20, 'Bueno'),
(11, 'sueteres del junir', '2022-07-31', 60, 'Bueno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Tipo_de_Identificacion` varchar(45) NOT NULL,
  `Numero_de_Identificacion` int(20) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Sexo` varchar(45) NOT NULL,
  `Posicion` varchar(45) NOT NULL,
  `EPS` varchar(45) NOT NULL,
  `Categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`Nombre`, `Apellido`, `Tipo_de_Identificacion`, `Numero_de_Identificacion`, `Edad`, `Sexo`, `Posicion`, `EPS`, `Categoria`) VALUES
('lil uzi ', 'lil pep', 'CC', 3, 12, 'Masculino', 'Delantero', 'sura ', 'pony'),
('miura ', 'pripra ', 'CC', 54, 10, 'Masculino', 'Pivote', 'vv', 'pony'),
('joe', 'aha', 'C.C', 226, 12, 'Hombre', 'Media punta', 'sh', 'Juvenil'),
('camilo ', 'andres ', 'TI', 312, 21, 'Masculino', 'Delantero', 'vv', 'pre-juvenil'),
('samir triple seis ', 'orozco ', 'TI', 666, 25, 'Femenino', 'Carrilero', 'tww', 'pre-juvenil'),
('yo soy', 'tuyo bb', 'CC', 1444, 21, 'Masculino', 'Delantero', 'vv', 'pre-juvenil'),
('joel', 'albino', 'T.I', 1001917552, 17, 'Hombre', 'Volante', 'no sabe', 'Juvenil'),
('luis cv', 'florez', 'TI', 1002028561, 17, 'Masculino', 'Delantero', 'sura ', 'juvenil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rendimiento_fisico`
--

CREATE TABLE `rendimiento_fisico` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Numero_de_Identificacion` int(11) NOT NULL,
  `Posicion_de_juego` varchar(45) NOT NULL,
  `velocidad` int(11) NOT NULL,
  `Destreza` int(11) NOT NULL,
  `Agilidad` int(11) NOT NULL,
  `Resistencia` int(11) NOT NULL,
  `Disciplina` int(11) NOT NULL,
  `Punteria` int(11) NOT NULL,
  `Control` int(11) NOT NULL,
  `promedio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rendimiento_fisico`
--

INSERT INTO `rendimiento_fisico` (`id`, `Nombre`, `Numero_de_Identificacion`, `Posicion_de_juego`, `velocidad`, `Destreza`, `Agilidad`, `Resistencia`, `Disciplina`, `Punteria`, `Control`, `promedio`) VALUES
(11, 'xxx TENTACION ', 54, 'Delantero', 4, 4, 9, 8, 6, 8, 4, 6.142857142857143),
(12, 'lil uzi ', 1002, 'Extremo', 3, 6, 10, 10, 10, 10, 10, 8.428571428571429),
(13, 'maluma bby', 111, 'Libero', 1, 1, 1, 1, 1, 1, 1, 1),
(14, 'el burriquete ', 0, 'Media punta', 8, 5, 7, 7, 7, 7, 7, 6.857142857142857);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Usuario` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `tipo_de_cargo` varchar(45) NOT NULL,
  `numero_de_documento` int(11) NOT NULL,
  `contraseña1` varchar(45) NOT NULL,
  `Contraseña2` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Usuario`, `Nombre`, `tipo_de_cargo`, `numero_de_documento`, `contraseña1`, `Contraseña2`) VALUES
('1', 'x', 'jx', 1, '1', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`Numero_de_Identificacion`),
  ADD KEY `Categoria_idx` (`Categoria`);

--
-- Indices de la tabla `rendimiento_fisico`
--
ALTER TABLE `rendimiento_fisico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Usuario`),
  ADD KEY `Contraseña_idx` (`Contraseña2`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `rendimiento_fisico`
--
ALTER TABLE `rendimiento_fisico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
