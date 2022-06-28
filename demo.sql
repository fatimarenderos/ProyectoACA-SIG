-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 28-06-2022 a las 08:27:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `demo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` decimal(10,6) NOT NULL,
  `lng` decimal(10,6) NOT NULL,
  `organizer` varchar(200) NOT NULL,
  `eventdate` date NOT NULL,
  `goal` int(11) NOT NULL DEFAULT 1,
  `linkinformation` varchar(200) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `location_status` tinyint(1) DEFAULT 0,
  `nombreevento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `organizer`, `eventdate`, `goal`, `linkinformation`, `description`, `location_status`, `nombreevento`) VALUES
(1, '13.837563', '-89.027686', 'Laura Hernandez', '2022-06-16', 30, 'https://www.concienciaeco.com/wp-content/uploads/2012/08/reciclar.jpg', 'Reciclaje', 1, 'Reciclaje'),
(2, '14.278499', '-89.138356', 'Josué Gonzalez', '2022-06-16', 200, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJNgNMaMFTS0En6FiQ8Qd5QR7ZIubwJhBkOAP6zQnzdIdzLWgWyO-woUDhNRBVN-6iRRQ&usqp=CAU', 'Siembra de arboles', 1, 'Reforestación'),
(3, '13.833022', '-89.702772', 'Christian Renderos', '2022-06-10', 1, 'https://www.cuidatuvida.com/wp-content/uploads/2020/12/tipos-de-reciclaje-imagen-destacada.jpg', 'Limpieza de parque', 1, 'Limpieza parque'),
(4, '13.898657', '-89.505476', 'Diego Calixo', '2022-06-24', 100, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhIVFRUWFRgVFRcVFRcYFRcYFRYWFxgWFRUaHSggGBomHRYWIjEiJSkrLi4uFx8zODMsNygtLysBCgoKDg0OGxAQGy0lICUvLS0vLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tL', 'Siembra arboles', 1, 'Reforestación ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 1, 'admin', 'admin', '2022-06-23 04:16:41'),
(2, 95744713938127134, 'fatima', 'fatima', '2022-06-23 04:17:57'),
(3, 23760065321864, 'danni', 'danni', '2022-06-23 05:37:22'),
(4, 4831264389, 'dir', 'dir', '2022-06-23 05:38:45'),
(5, 903351311984880, 'clau', 'clau', '2022-06-23 05:50:11'),
(6, 1951915774, 'fatima', 'fatima', '2022-06-23 07:00:45'),
(7, 9223372036854775807, 'fatima', 'fatima', '2022-06-23 07:25:57'),
(8, 800743, 'admin', 'admin', '2022-06-28 06:25:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
