-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2017 a las 16:35:33
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `Id_Se` int(1) NOT NULL,
  `Asignatura` varchar(50) NOT NULL,
  `Profesor` varchar(30) DEFAULT NULL,
  `Repetición` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`Id_As`, `Id_Se`, `Asignatura`, `Profesor`, `Repetición`) VALUES
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
  `Id_Horario` varchar(5) NOT NULL,
  `Id_As` varchar(30) NOT NULL,
  `Hora` varchar(15) NOT NULL,
  `Sala` varchar(15) NOT NULL,
  `Dia` varchar(12) NOT NULL,
  `Repitencia` varchar(2) NOT NULL,
  `A` int(1) NOT NULL,
  `Seccion` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`Id_Horario`, `Id_As`, `Hora`, `Sala`, `Dia`, `Repitencia`, `A`, `Seccion`) VALUES
('1', 'INFO1108', '9:10-10:50', 'EB-204', 'Lunes', 'No', 3, '1'),
('2', 'INFO1143', '11:30-13:40', 'DIS-104', 'Lunes', 'No', 3, '1'),
('3', 'INFO1143', '10:20-11:20', 'EB3-504', 'Martes', 'No', 3, '1'),
('4', 'INFO1132', '11:30-13:10', 'LAB.1', 'Martes', 'No', 3, '1'),
('5', 'INFO1182', '15:00-17:10', 'LAB. EB- 3 Piso', 'Martes', 'No', 3, '1'),
('6', 'INFO1172', '9:40-12:00', 'SALA DE ESTUDIO', 'Miercoles', 'No', 3, '1'),
('7', 'INFO1108', '9:10-10:50', 'EB3-202', 'Jueves', 'No', 3, '1'),
('8', 'INFO1132', '15:00-16:40', 'LAB.1', 'Jueves', 'No', 3, '1'),
('9', 'INFO1144', '10:20-13:40', 'CT-454', 'Viernes', 'No', 3, '1'),
('10', 'FIS1102', '12:40-14:50', 'CT-253', 'Lunes', 'Si', 1, '1'),
('11', 'INFO1122', '15:00-17:50', 'LAB.2', 'Lunes', 'Si', 1, '1'),
('12', 'MAT1183', '18:30-20:40', 'CT-454', 'Lunes', 'Si', 1, '1'),
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
('24', 'INFO1151', '15:00-16:40', 'EB-COMP', 'Miercoles', 'No', 5, '1'),
('25', 'INFO1138', '16:40-18:20', 'EB-COMP', 'Miercoles', 'No', 5, '2'),
('26', 'INFO1114', '9:10-10:50', 'EB-204', 'Jueves', 'No', 5, '1'),
('27', 'INFO1138', '10:50-12:30', 'EB-204', 'Jueves', 'No', 5, '2'),
('28', 'INFO1151', '15:00-16:40', 'EB3-202', 'Jueves', 'No', 5, '1'),
('29', 'INFO1114', '9:10-10:50', 'SALA.EB3-202', 'Viernes', 'No', 5, '1'),
('30', 'INFO1128', '14:20-17:10', 'Lab.1', 'Lunes', 'No', 2, '1'),
('31', 'INFO1171', '9:40-13:10', 'LAB.1', 'Lunes', 'No', 2, '1'),
('32', 'INFO1130', '9:10-12:00', 'LAB.2', 'Miercoles', 'No', 2, '1'),
('33', 'INFO1106', '15:00-17:50', 'EB-204', 'Miercoles', 'No', 2, '1'),
('34', 'INFO1128', '14:20-17:10', 'EB3-401', 'Jueves', 'No', 2, '1'),
('35', 'INFO1106', '9:40-12:00', 'LAB.1', 'Viernes', 'No', 2, '1'),
('36', 'INFO1130', '14:20-17:10', 'LAB.2', 'Viernes', 'No', 2, '1'),
('37', 'INFO1118', '9:10-12:00', 'LAB.2', 'Lunes', 'No', 1, '1'),
('38', 'INFO1118', '9:10-12:00', 'LAB.ROBOTICA', 'Lunes', 'No', 1, '2'),
('39', 'INFO1118', '9:10-12:00', 'LAB.1', 'Lunes', 'No', 1, '3'),
('40', 'INFO1116', '15:00-17:10', 'EB-204', 'Lunes', 'No', 1, '1'),
('41', 'MAT1185', '17:20-19:30', 'EB-103', 'Lunes', 'No', 1, '1'),
('42', 'INFO1123', '9:10-11:20', 'EB3-202', 'Martes', 'No', 1, '1'),
('43', 'INFO1123', '9:10-11:20', 'LAB.1', 'Martes', 'No', 1, '2'),
('44', 'INFO1116', '11:00-12:30', 'EB-204', 'Martes', 'No', 1, '1'),
('45', 'INFO1170', '15:00-18:20', 'CENTRO DESARROL', 'Martes', 'No', 1, '1'),
('46', 'INFO1170', '15:00-18:20', 'LAB.ROBOTICA', 'Martes', 'No', 1, '2'),
('47', 'INFO1123', '9:10-11:30', 'LAB.1', 'Miercoles', 'No', 1, '1'),
('48', 'INFO1123', '9:10-11:30', 'EB3-202', 'Miercoles', 'No', 1, '2'),
('49', 'MAT1185', '16:30-19:30', 'EB3-303', 'Miercoles', 'No', 1, '1'),
('50', 'INFO1118', '9:10-12:00', 'LAB.2', 'Jueves', 'No', 1, '1'),
('51', 'INFO1118', '9:10-12:00', 'SALA DE ESTUDIO', 'Jueves', 'No', 1, '2'),
('52', 'INFO1118', '9:10-12:00', 'LAB.1', 'Jueves', 'No', 1, '3'),
('53', 'INFO1116', '15:00-17:10', 'EB-204', 'Jueves', 'No', 1, '1'),
('54', 'MAT1185', '15:00-18:20', 'CT-453', 'Viernes', 'No', 1, '2'),
('55', 'MAT1185', '12:00-13:40', 'SALA DE ESTUDIO', 'Jueves', 'No', 1, '1'),
('56', 'INFO1148', '10:50-12:30', 'EB3-202', 'Lunes', 'No', 4, '1'),
('57', 'INFO1134', '12:40-14:20', 'LAB.2', 'Lunes', 'No', 4, '1'),
('58', 'INFO1147', '15:00-18:20', 'LAB. EB-301', 'Lunes', 'No', 4, '1'),
('59', 'INFO1110', '9:10-11:20', 'LAB.2', 'Martes', 'No', 4, '1'),
('60', 'INFO1111', '15:00-16:40', 'LAB.2', 'Martes', 'No', 4, '1'),
('61', 'INFO1135', '16:40-18:20', 'LAB.2', 'Martes', 'No', 4, '1'),
('62', 'INFO1148', '9:40-11:20', 'EB-204', 'Miercoles', 'No', 4, '1'),
('63', 'INFO1111', '15:00-16:40', 'LAB.2', 'Miercoles', 'No', 4, '1'),
('64', 'INFO1173', '9:40-12:00', 'SALA DE ESTUDIO', 'Jueves', 'No', 4, '1'),
('65', 'INFO1110', '12:00-13:10', 'EB-202', 'Jueves', 'No', 4, '1'),
('66', 'INFO1161', '15:00-17:10', 'EB3-301', 'Jueves', 'No', 4, '1'),
('67', 'INFO1135', '9:10-10:50', 'LAB.2', 'Viernes', 'No', 4, '1'),
('68', 'INFO1134', '10:50-12:30', 'LAB.2', 'Viernes', 'No', 4, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
