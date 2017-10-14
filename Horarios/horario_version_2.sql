-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2017 a las 21:59:08
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
  `Profesor` varchar(30) DEFAULT NULL,
  `Repetición` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`Id_As`, `Id_Pl`, `Asignatura`, `Profesor`, `Repetición`) VALUES
('FIS1102', 2, 'Física', '', 'Si'),
('INFO1106', 1, 'Microcontroladores', 'L.Caro', 'No'),
('INFO1108', 1, 'Sistemas De Comp. Y Plataforma Tec.', 'A. Mellado', 'No'),
('INFO1110', 1, 'Tópicos Avanz. En Tecn. De Información II Menc 2', 'A. Mellado', 'No'),
('INFO1111 ', 1, 'Tópicos Avanz. En Tecn. De Información l', 'A. Mellado', 'No'),
('INFO1114', 1, 'Tendencias Tecnológicas', 'H. SALORT', 'No'),
('INFO1115', 1, 'Tópicos Avanz. Mención 1', 'A. Valenzuela', 'No'),
('INFO1116', 2, 'Mant. Y Adm. De Sist.', 'A. Mellado', 'No'),
('INFO1118', 2, 'Desarrollo Web Sec. 1', 'O. Herrera', 'No'),
('INFO1120', 2, 'Program. l', 'C. Friz', 'Si'),
('INFO1122', 2, 'Intro. A Los Sist. De Base De Datos', 'O. Herrera', 'Si'),
('INFO1123', 2, 'Programación ll', 'G. Venegas', 'No'),
('INFO1125', 1, 'Des. Aplic. Cl. Serv.', 'G. Contreras', 'No'),
('INFO1128', 1, 'Interfases De Gráfica', 'L. Caro', 'No'),
('INFO1130', 1, 'Aplic. Empres.', 'G. Contreras', 'No'),
('INFO1132', 1, 'Diseño De Software', 'G. Contreras', 'No'),
('INFO1134', 1, 'Topicos Avanz. En Des. De Softw. I', 'G. Contreras', 'No'),
('INFO1135', 1, 'Tópicos Av. De Des. De S. ll', 'G. Contreras', 'No'),
('INFO1138', 1, 'Tópicos Avan. Mención 2', 'B. Peralta', 'No'),
('INFO1139', 2, 'Program. De Robots', 'V. Valenzuela', 'Si'),
('INFO1143', 1, 'Calculo Intermedio', '', 'No'),
('INFO1144', 1, 'Elementos De Álgebra Lineal Para La Comp.', '', 'No'),
('INFO1147', 1, 'Probabilidad Y Estadística', 'J. Moncada', 'No'),
('INFO1148', 1, 'Teoría De La Computación', 'M. Levano', 'No'),
('INFO1151', 1, 'Inteligencia De Negocios', 'B.Peralta', 'No'),
('INFO1161', 1, 'Eval. De Proyectos', '', 'No'),
('INFO1170 ', 2, 'Taller De Integración l', 'S.1 L. Caro-S.2 V.Valenzuela', 'No'),
('INFO1171', 1, 'Taller De Integración ll', 'J. Rojas', 'No'),
('INFO1172', 1, 'Taller De Integración lll', 'J. Rojas', 'No'),
('INFO1173 ', 1, 'Taller De Integración lV', 'J. Rojas', 'No'),
('INFO1175', 1, 'Taller De Integración Final', 'M. Levano', 'No'),
('INFO1182', 1, 'Inglés ll', '', 'No'),
('MAT1183', 2, 'Tópicos De Matemática', 'J. Oporto', 'Si'),
('MAT1185', 2, 'Álgebra Sección 1', 'J. Oporto', 'No'),
('MAT1185 2', 2, 'Álgebra Sección 2', '', 'No');

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
