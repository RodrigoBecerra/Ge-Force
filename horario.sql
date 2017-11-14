-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2017 a las 18:48:47
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `Id_As` varchar(15) NOT NULL,
  `Plan` int(1) NOT NULL,
  `Asignatura` varchar(50) NOT NULL,
  `Profesor` varchar(30) DEFAULT NULL,
  `Repetición` varchar(2) NOT NULL,
  `Semestre` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`Id_As`, `Plan`, `Asignatura`, `Profesor`, `Repetición`, `Semestre`) VALUES
('FIS1102', 2, 'Física', '', 'Si', NULL),
('INFO1106', 1, 'Microcontroladores', 'L.Caro', 'No', NULL),
('INFO1108', 1, 'Sistemas De Comp. Y Plataforma Tec.', 'A. Mellado', 'No', NULL),
('INFO1110', 1, 'Tópicos Avanz. En Tecn. De Información II Menc 2', 'A. Mellado', 'No', NULL),
('INFO1111 ', 1, 'Tópicos Avanz. En Tecn. De Información l', 'A. Mellado', 'No', NULL),
('INFO1114', 1, 'Tendencias Tecnológicas', 'H. SALORT', 'No', NULL),
('INFO1115', 1, 'Tópicos Avanz. Mención 1', 'A. Valenzuela', 'No', NULL),
('INFO1116', 2, 'Mant. Y Adm. De Sist.', 'A. Mellado', 'No', NULL),
('INFO1118', 2, 'Desarrollo Web Sec. 1', 'O. Herrera', 'No', NULL),
('INFO1120', 2, 'Program. l', 'C. Friz', 'Si', NULL),
('INFO1122', 2, 'Intro. A Los Sist. De Base De Datos', 'O. Herrera', 'Si', NULL),
('INFO1123', 2, 'Programación ll', 'G. Venegas', 'No', NULL),
('INFO1125', 1, 'Des. Aplic. Cl. Serv.', 'G. Contreras', 'No', NULL),
('INFO1128', 1, 'Interfases De Gráfica', 'L. Caro', 'No', NULL),
('INFO1130', 1, 'Aplic. Empres.', 'G. Contreras', 'No', NULL),
('INFO1132', 1, 'Diseño De Software', 'G. Contreras', 'No', NULL),
('INFO1134', 1, 'Topicos Avanz. En Des. De Softw. I', 'G. Contreras', 'No', NULL),
('INFO1135', 1, 'Tópicos Av. De Des. De S. ll', 'G. Contreras', 'No', NULL),
('INFO1138', 1, 'Tópicos Avan. Mención 2', 'B. Peralta', 'No', NULL),
('INFO1139', 2, 'Program. De Robots', 'V. Valenzuela', 'Si', NULL),
('INFO1143', 1, 'Calculo Intermedio', '', 'No', NULL),
('INFO1144', 1, 'Elementos De Álgebra Lineal Para La Comp.', '', 'No', NULL),
('INFO1147', 1, 'Probabilidad Y Estadística', 'J. Moncada', 'No', NULL),
('INFO1148', 1, 'Teoría De La Computación', 'M. Levano', 'No', NULL),
('INFO1151', 1, 'Inteligencia De Negocios', 'B.Peralta', 'No', NULL),
('INFO1161', 1, 'Eval. De Proyectos', '', 'No', NULL),
('INFO1170 ', 2, 'Taller De Integración l', 'S.1 L. Caro-S.2 V.Valenzuela', 'No', NULL),
('INFO1171', 1, 'Taller De Integración ll', 'J. Rojas', 'No', NULL),
('INFO1172', 1, 'Taller De Integración lll', 'J. Rojas', 'No', NULL),
('INFO1173 ', 1, 'Taller De Integración lV', 'J. Rojas', 'No', NULL),
('INFO1175', 1, 'Taller De Integración Final', 'M. Levano', 'No', NULL),
('INFO1182', 1, 'Inglés ll', '', 'No', NULL),
('MAT1183', 2, 'Tópicos De Matemática', 'J. Oporto', 'Si', NULL),
('MAT1185', 2, 'Álgebra Sección 1', 'J. Oporto', 'No', NULL),
('MAT1185 2', 2, 'Álgebra Sección 2', '', 'No', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `Id_Ho` varchar(5) NOT NULL,
  `Id_As` varchar(30) NOT NULL,
  `Hora` varchar(15) NOT NULL,
  `Sala` varchar(15) NOT NULL,
  `Dia` varchar(12) NOT NULL,
  `Repitencia` varchar(2) NOT NULL,
  `Year` int(1) NOT NULL,
  `Seccion` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`Id_Ho`, `Id_As`, `Hora`, `Sala`, `Dia`, `Repitencia`, `Year`, `Seccion`) VALUES
('1', 'INFO1108', '9:10-10:50', 'EB-204', 'Lunes', 'No', 3, '1'),
('2', 'INFO1143', '11:30-13:40', 'DIS-104', 'Lunes', 'No', 3, '1'),
('3', 'INFO1143', '10:20-11:20', 'EB3-504', 'Martes', 'No', 3, '1'),
('4', 'INFO1132', '11:30-13:10', 'LAB.1', 'Martes', 'No', 3, '1'),
('5', 'INFO1182', '15:00-17:10', 'LAB. EB- 3 Piso', 'Martes', 'No', 3, '1'),
('6', 'INFO1172', '9:40-12:00', 'SALA DE ESTUDIO', 'Miercoles', 'No', 3, '1'),
('7', 'INFO1108', '9:10-10:50', 'EB3-202', 'Jueves', 'No', 3, '1'),
('8', 'INFO1132', '15:00-16:40', 'LAB.1', 'Jueves', 'No', 3, '1'),
('9', 'INFO1144', '10:20-13:40', 'CT-454', 'Viernes', 'No', 3, '1'),
('10', 'INFO1102', '12:40-14:50', 'CT-253', 'Lunes', 'Si', 1, '1'),
('11', 'INFO1122', '15:00-17:50', 'LAB.2', 'Lunes', 'Si', 1, '1'),
('12', 'INFO1183', '18:30-20:40', 'CT-454', 'Lunes', 'Si', 1, '1'),
('13', 'INFO1120', '8:30-11:20', 'EB-204', 'Martes', 'Si', 1, '1'),
('14', 'INFO1139', '11:30-13:40', 'EB3-202', 'Martes', 'Si', 1, '1'),
('15', 'INFO1139', '9:10-12:30', 'LAB.ROBOTICA', 'Miercoles', 'Si', 1, '1'),
('16', 'INFO1120', '15:00-17:50', 'EB3-202', 'Miercoles', 'Si', 1, '1'),
('17', 'FIS1102', '8:00-11:20', 'EB3-403', 'Jueves', 'Si', 1, '1-2'),
('18', 'INFO1122', '15:00-17:50', 'LAB.2', 'Jueves', 'Si', 1, '1'),
('19', 'FIS1102', '12:40-14:50', 'CT-253', 'Viernes', 'Si', 1, '2'),
('20', 'MAT1183', '15:00-18:20', 'CT-454', 'Viernes', 'Si', 1, '1'),
('21', 'INFO1115', '11:30-14:20', 'EB-204', 'Lunes', 'No', 5, '1'),
('22', 'INFO1175', '15:00-16:40', 'EB3-202', 'Lunes', 'No', 5, '1'),
('23', 'INFO1175', '15:00-16:40', 'EB3-202', 'Martes', 'No', 5, '1'),
('24', 'INFO1151', '15:00-16:10', 'EB-COMP', 'Miercoles', 'No', 5, '1'),
('25', 'INFO1138', '16:40-18:20', 'EB-COMP', 'Miercoles', 'No', 5, '2'),
('26', 'INFO1114', '9:10-10:50', 'EB-204', 'Jueves', 'No', 5, '1'),
('27', 'INFO1138', '10:50-12:30', 'EB-204', 'Jueves', 'No', 5, '2'),
('28', 'INFO1151', '15:00-16:40', 'EB3-202', 'Jueves', 'No', 5, '1'),
('29', 'INFO1114', '9:10-10:50', 'LAB.2', 'Viernes', 'No', 5, '1'),
('30', 'INFO1128', '14:20-17:10', 'Lab.1', 'Lunes', 'No', 2, '1'),
('31', 'INFO1171', '9:40-17:10', 'LAB.1', 'Lunes', 'No', 2, '1'),
('32', 'INFO1130', '9:10-12:00', 'LAB.2', 'Miercoles', 'No', 2, '1'),
('33', 'INFO1106', '15:00-17:50', 'EB-204', 'Miercoles', 'No', 2, '1'),
('34', 'INFO1128', '14:20-17:10', 'EB3-401', 'Jueves', 'No', 2, '1'),
('35', 'INFO1106', '9:40-12:00', 'LAB.1', 'Viernes', 'No', 2, '1'),
('36', 'INFO1130', '14:20-17:10', 'LAB.2', 'Viernes', 'No', 2, '1'),
('47', 'INFO1106', '9:40-12:00', 'LAB.1', 'Viernes', 'No', 2, '1'),
('48', 'INFO1130', '14:20-17:10', 'LAB.2', 'Viernes', 'No', 2, '1'),
('49', 'INFO1119', '15:00-17:10', 'EB-204', 'Lunes', 'No', 1, '1-2'),
('50', 'INFO1119', '11:30-12:30', 'EB-204', 'Martes', 'No', 1, '1-2'),
('51', 'INFO1119', '15:00-17:10', 'EB-204', 'Jueves', 'No', 1, '1-2'),
('52', 'INFO1118', '9:10-12:00', 'LAB 2', 'Lunes', 'No', 1, '1'),
('53', 'INFO1118', '9:10-12:00', 'LAB 2', 'Jueves', 'No', 1, '1'),
('37', 'INFO1148', '10:50-11:30', 'EB3-202', 'Lunes', 'No', 4, '1'),
('38', 'INFO1134', '12:40-14:20', 'Lab. 2', 'Lunes', 'No', 4, '1'),
('39', 'INFO1147', '15:00-18:20', 'LAB. EB-301', 'Lunes', 'No', 4, '1'),
('40', 'INFO1110', '09:10-11:20', 'LAB.2', 'Martes', 'No', 4, '1'),
('41', 'INFO1111', '15:00-16:40', 'LAB.2', 'Martes', 'No', 4, '1'),
('42', 'INFO1135', '16:40-18:20', 'LAB.2', 'Martes', 'No', 4, '1'),
('43', 'INFO1148', '09:40-11:20', 'EB-204', 'Miercoles', 'No', 4, '1'),
('44', 'INFO1111', '15:00-16:40', 'LAB.2', 'Miercoles', 'No', 4, '1'),
('45', 'INFO1173', '09:40-12:00', 'SALA DE ESTUDIO', 'Jueves', 'No', 4, '1'),
('46', 'INFO1161', '15:00-17:10', 'EB3-301', 'Jueves', 'No', 4, '1'),
('54', 'INFO1135', '09:10-10:50', 'LAB.2', 'Viernes', 'No', 4, '1'),
('55', 'INFO1134', '10:50-12:30', 'LAB.2', 'Viernes', 'No', 4, '1'),
('56', 'INFO1110', '12:00-13:10', '', 'Jueves', 'No', 4, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
