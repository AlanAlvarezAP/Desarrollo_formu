-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2024 a las 00:35:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `hora` date NOT NULL,
  `ocupación` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Nacionalidad` varchar(50) NOT NULL,
  `ingles_name` varchar(50) NOT NULL,
  `Progra` varchar(50) NOT NULL,
  `data_list` varchar(50) NOT NULL,
  `Habilidades` varchar(255) NOT NULL,
  `texx` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id`, `nombre`, `apellido`, `hora`, `ocupación`, `telefono`, `email`, `Nacionalidad`, `ingles_name`, `Progra`, `data_list`, `Habilidades`, `texx`) VALUES
(31, 'Alan', 'Alvarez', '2024-04-02', 'Trabajador', '959677187', 'patrizioap5@gmail.com', 'Arabe', 'Intermedio', 'C, C++', 'Liderazgo', '', '        Trabajador de campo con experencia de 5 años'),
(32, 'Juan', 'Pérez', '1990-01-01', 'Ingeniero', '1234567890', 'juan.perez@ejemplo.com', 'Portugues', 'Basico', 'C, Python', 'Honestidad', '', '        Soy un ingeniero de software\r\n        '),
(33, 'María', 'García', '1985-05-17', 'Médico', '9876543210', 'maria.garcia@gmail.com', 'Arabe', 'Intermedio', 'Java', 'Liderazgo', '', '        Soy una médica con especialización en pediatría.'),
(34, 'Diego', 'Quispe', '2027-10-18', 'Albañil', '1122334455', 'diego.quispe@hotmail.com', 'Portugues', 'Fluido', 'C++, Python', 'Responsabilidad, Honestidad', '', '        Trabajador de obra\r\n        '),
(35, 'Piero', 'Quispe', '2022-01-04', 'Biologo', '959677187 ', 'piero.quispe@gmail.com', 'Chino', 'Intermedio', 'C++, Java', 'Inteligente', '', '    Persona dedicada a la investigación\r\n        ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
