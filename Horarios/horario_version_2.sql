-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2017 a las 16:59:10
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
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `Id_Horario` varchar(5) NOT NULL,
  `Id_Pl` varchar(5) NOT NULL,
  `Hora` varchar(15) NOT NULL,
  `Sala` varchar(15) NOT NULL,
  `Dia` varchar(12) NOT NULL,
  `Repitencia` varchar(2) NOT NULL,
  `Año` int(1) NOT NULL,
  `Seccion` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`Id_Horario`, `Id_Asignatura`, `Hora`, `Sala`, `Dia`, `Repitencia`, `Año`, `Seccion`) VALUES
('INFO1108', '', '9:10-10:50', 'EB-204', 'Lunes', 'No', 3, '1'),
('INFO1143', '1', '11:30-13:40', 'DIS-104', 'Lunes', 'No', 3, '1'),
('INFO1143', '1', '10:20-11:20', 'EB3-504', 'Martes', 'No', 3, '1'),
('INFO1132', '1', '11:30-13:10', 'LAB.1', 'Martes', 'No', 3, '1'),
('INFO1182', '1', '15:00-17:10', 'LAB. EB- 3 Piso', 'Martes', 'No', 3, '1'),
('6', '1', '9:40-12:00', 'SALA DE ESTUDIO', 'Miercoles', 'No', 3, '1'),
('7', '1', '9:10-10:50', 'EB3-202', 'Jueves', 'No', 3, '1'),
('8', '1', '15:00-16:40', 'LAB.1', 'Jueves', 'No', 3, '1'),
('9', '1', '10:20-13:40', 'CT-454', 'Viernes', 'No', 3, '1'),
('10', '2', '12:40-14:50', 'CT-253', 'Lunes', 'Si', 1, '1'),
('11', '2', '15:00-17:50', 'LAB.2', 'Lunes', 'Si', 1, '1'),
('12', '2', '18:30-20:40', 'CT-454', 'Lunes', 'Si', 1, '1'),
('13', '2', '8:30-11:20', 'EB-204', 'Martes', 'Si', 1, '1'),
('14', '2', '11:30-13:40', 'EB3-202', 'Martes', 'Si', 1, '1'),
('15', '2', '9:10-12:30', 'LAB.ROBOTICA', 'Miercoles', 'Si', 1, '1'),
('16', '2', '15:00-17:50', 'EB3-202', 'Miercoles', 'Si', 1, '1'),
('17', '2', '8:00-11:20', 'EB3-403', 'Jueves', 'Si', 1, '1-2'),
('18', '2', '15:00-17:50', 'LAB.2', 'Jueves', 'Si', 1, '1'),
('19', '2', '12:40-14:50', 'CT-253', 'Viernes', 'Si', 1, '2'),
('20', '2', '15:00-18:20', 'CT-454', 'Viernes', 'Si', 1, '1'),
('21', '1', '11:30-14:20', 'EB-204', 'Lunes', 'No', 5, '1'),
('22', '1', '15:00-16:40', 'EB3-202', 'Lunes', 'No', 5, '1'),
('23', '1', '15:00-16:40', 'EB3-202', 'Martes', 'No', 5, '1'),
('24', '1', '15:00-16:10', 'EB-COMP', 'Miercoles', 'No', 5, '1'),
('25', '1', '16:40-18:20', 'EB-COMP', 'Miercoles', 'No', 5, '2'),
('26', '1', '9:10-10:50', 'EB-204', 'Jueves', 'No', 5, '1'),
('27', '1', '10:50-12:30', 'EB-204', 'Jueves', 'No', 5, '2'),
('28', '1', '15:00-16:40', 'EB3-202', 'Jueves', 'No', 5, '1'),
('29', '1', '', '9:10-10:50', 'Viernes', 'No', 5, '1'),
('30', '1', '14:20-17:10', 'Lab.1', 'Lunes', 'No', 2, '1'),
('31', '1', '9:40-17:10', 'LAB.1', 'Lunes', 'No', 2, '1'),
('32', '1', '9:10-12:00', 'LAB.2', 'Miercoles', 'No', 2, '1'),
('33', '1', '15:00-17:50', 'EB-204', 'Miercoles', 'No', 2, '1'),
('34', '1', '14:20-17:10', 'EB3-401', 'Jueves', 'No', 2, '1'),
('35', '1', '9:40-12:00', 'LAB.1', 'Viernes', 'No', 2, '1'),
('36', '1', '14:20-17:10', 'LAB.2', 'Viernes', 'No', 2, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
