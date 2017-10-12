-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2017 a las 17:16:43
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `Id_As` varchar(15) NOT NULL,
  `Id_Pl` int(1) NOT NULL,
  `Asignatura` varchar(50) NOT NULL,
  `Profesor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`Id_As`, `Id_Pl`, `Asignatura`, `Profesor`) VALUES
('INFO1110', 1, 'Tópicos Avanz. En Tecn. De Información II Menc 2', 'A. Mellado'),
('INFO1111 ', 1, 'Tópicos Avanz. En Tecn. De Información l', 'A. Mellado'),
('INFO1114', 1, 'Tendencias Tecnológicas', 'H. SALORT'),
('INFO1115', 1, 'Tópicos Avanz. Mención 1', 'A. Valenzuela'),
('INFO1134', 1, 'Topicos Avanz. En Des. De Softw. I', 'G. Contreras'),
('INFO1135', 1, 'Tópicos Av. De Des. De S. ll', 'G. Contreras'),
('INFO1138', 1, 'Tópicos Avan. Mención 2', 'B. Peralta'),
('INFO1147', 1, 'Probabilidad Y Estadística', 'J. Moncada'),
('INFO1148', 1, 'Teoría De La Computación', 'M. Levano'),
('INFO1151', 1, 'Inteligencia De Negocios', 'B.Peralta'),
('INFO1161', 1, 'Eval. De Proyectos', 'Nulo'),
('INFO1173 ', 1, 'Taller De Integración lV', 'J. Rojas'),
('INFO1175', 1, 'Taller De Integración Final', 'M. Levano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `Id_Horario` int(5) NOT NULL,
  `Id_Pl` int(5) NOT NULL,
  `Hora` int(5) NOT NULL,
  `Sala` varchar(10) NOT NULL,
  `Dia` varchar(8) NOT NULL,
  `Repitencia` varchar(2) NOT NULL,
  `Año` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `Id_Pl` int(5) NOT NULL,
  `Plan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`Id_Pl`, `Plan`) VALUES
(1, '2'),
(2, '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `Id_Se` int(2) NOT NULL,
  `Id_Pl` int(2) NOT NULL,
  `Semestre` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`Id_Se`, `Id_Pl`, `Semestre`) VALUES
(1, 1, '1'),
(2, 1, '2'),
(3, 1, '3'),
(4, 1, '4'),
(5, 1, '5'),
(6, 1, '6'),
(7, 1, '7'),
(8, 1, '8'),
(9, 1, '9'),
(10, 1, '10'),
(11, 2, '1'),
(12, 2, '2'),
(13, 2, '3'),
(14, 2, '4'),
(15, 2, '5'),
(16, 2, '6'),
(17, 2, '7'),
(18, 2, '8'),
(19, 2, '9'),
(20, 2, '10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`Id_As`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`Id_Horario`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`Id_Pl`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`Id_Se`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
