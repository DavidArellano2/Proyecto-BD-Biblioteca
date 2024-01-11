-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2021 a las 23:40:04
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(10) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Carrera` varchar(35) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `Codigo`, `Nombre`, `Carrera`, `Email`, `Telefono`) VALUES
(3, '214792199', 'Cesar Guzman', 'ingeniería en computación', 'sociedadcreativati@gmail.com', '3314007428'),
(5, '217136143', 'Ricardo David Lopez Arellano', 'ingeniería en computación', 'david@gmail.com', '3317468824'),
(6, '215478963', 'Marcos Alberto', 'ingeniería en computación', 'marcos@udg.mx', '3355447894'),
(7, '216753661', 'Arturo Ibarra Castañeda', 'ingeniería en Informatica', 'artu03_11@outlook.com', '3328211025');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `NSS` varchar(15) NOT NULL,
  `Domicilio` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `FechaNacimiento` varchar(10) NOT NULL,
  `FechaInicioTrabajo` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `rol` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `NSS`, `Domicilio`, `Telefono`, `Nombre`, `FechaNacimiento`, `FechaInicioTrabajo`, `pass`, `rol`) VALUES
(2, '214793198', 'emiliano zapata #56', '333285205', 'cesar equipo', '29-12-200', '01-10-202', '5678', 'empleado'),
(6, '2132852050', 'emiliano zapata #500', '36550121', 'octavio', '29-12-200', '01-10-202', '1234', 'empleado'),
(7, '12345678', 'emiliano zapata #509', '333285205', 'admin', '29-12-200', '01-10-202', '1234', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int(11) NOT NULL,
  `ISBN` varchar(10) NOT NULL,
  `Titulo` varchar(60) NOT NULL,
  `Autor` varchar(25) NOT NULL,
  `Editorial` varchar(25) NOT NULL,
  `NumeroEjemplar` varchar(11) NOT NULL,
  `anoPublicacion` varchar(10) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `ISBN`, `Titulo`, `Autor`, `Editorial`, `NumeroEjemplar`, `anoPublicacion`, `stock`) VALUES
(2, 'libr6578', 'colores viejos', 'Erika Torres', 'Santillana', '3455', '2020', 5),
(3, 'libr6578', 'colores', 'Lourdes Mares', 'Santillana', '3455', '2000', 2),
(4, 'libro2345', 'Redes de computadoras', 'Miguel Guzman', 'Santillana', '123', '2010', 4),
(5, 'redlibr855', 'Programacion POO', 'Miguel Aleman', 'Santillana', '3453', '2000', 7),
(6, 'redlibr855', 'Matematicas discretas', 'Ricardo de Lara', 'Santillana', '543', '1998', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id` int(11) NOT NULL,
  `Codigo` varchar(10) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Carrera` varchar(35) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `GradoEst` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id`, `Codigo`, `Nombre`, `Carrera`, `Email`, `Telefono`, `GradoEst`) VALUES
(1, '224499198', 'ricardo anaya', 'ingeniería en computación', 'sociedadcreativati@gmail.com', '3314007428', 'Doctorado'),
(2, '8523697', 'Olivares Perez Maria Elena', 'ingeniería en computación', 'mariaelena@udeg.mx', '3565847598', 'Doctorado'),
(3, '3314007428', 'Anaya Oliveros Jorge', 'ingeniería en Informatica', 'jorge-anaya@udg.mx', '3314007429', 'Licenciatura'),
(4, '214597354', 'Castellanos Barajas Janette Araceli', 'ingeniería en computación', 'Barajas-Jannete@udg.mx', '3315669785', 'Doctorado'),
(5, '875412369', 'Luis Felipe Mariscal Lugo', 'ingeniería en computación', 'luisfelipe@udg.mx', '8574123698', 'Maestria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id` int(11) NOT NULL,
  `id_maestro` int(11) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL,
  `fechaPrestamo` datetime NOT NULL,
  `fechaEntrega` datetime NOT NULL,
  `multa` int(11) DEFAULT NULL,
  `estatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id`, `id_maestro`, `id_alumno`, `id_libro`, `fechaPrestamo`, `fechaEntrega`, `multa`, `estatus`) VALUES
(18, 1, NULL, 2, '2021-11-23 00:00:00', '2021-11-30 00:00:00', NULL, 'prestamo'),
(21, 1, NULL, 2, '2021-11-25 00:00:00', '2021-11-26 00:00:00', NULL, 'Prestado'),
(22, NULL, 3, 3, '2021-11-23 00:00:00', '2021-11-28 00:00:00', NULL, 'Prestado'),
(23, NULL, 3, 2, '2021-11-01 00:00:00', '2021-11-26 00:00:00', NULL, 'Prestado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prestamo_ibfk_1` (`id_alumno`),
  ADD KEY `prestamo_ibfk_2` (`id_maestro`),
  ADD KEY `prestamo_ibfk_3` (`id_libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`id_maestro`) REFERENCES `maestro` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,
  ADD CONSTRAINT `prestamo_ibfk_3` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id`) ON DELETE CASCADE ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
