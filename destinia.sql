-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 08:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destinia`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospedajes`
--

CREATE TABLE `hospedajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `numeroDeEstrellas` int(11) DEFAULT NULL,
  `tipoDeHabitacion` varchar(255) DEFAULT NULL,
  `numeroDeApartamentosDisponibles` int(11) DEFAULT NULL,
  `capacidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospedajes`
--

INSERT INTO `hospedajes` (`id`, `nombre`, `ubicacion`, `tipo`, `numeroDeEstrellas`, `tipoDeHabitacion`, `numeroDeApartamentosDisponibles`, `capacidad`) VALUES
(1, 'Hotel Azul', 'València, Valencia', 'hotel', 3, 'doble con vistas', 0, 4),
(2, 'Apartamentos Beach', 'Almeria, Almeria', 'apartamento', 5, '6', 6, 4),
(3, 'Hotel Blanco', 'Mojacar, Almería', 'hotel', 4, 'doble', 0, 4),
(4, 'Hotel Rojo', 'Sanlucar, Cádiz', 'hotel', 3, 'sencilla', 0, 2),
(5, 'Apartamentos Sol y playa', 'Málaga, Málaga', 'apartamento', 4, '9', 10, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospedajes`
--
ALTER TABLE `hospedajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospedajes`
--
ALTER TABLE `hospedajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
