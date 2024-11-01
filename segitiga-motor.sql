-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 05:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `segitiga-motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plat_no` varchar(20) NOT NULL,
  `motor_brand` varchar(100) NOT NULL,
  `motor_type` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `notes` text DEFAULT NULL,
  `status` enum('Pending','Confirmed','Canceled') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `plat_no`, `motor_brand`, `motor_type`, `service_type`, `booking_date`, `booking_time`, `notes`, `status`) VALUES
(9, 3, 'Rafi ', 'eww', 'wege', 'ewwg', '2024-10-17', '09:00:00', 'idjiqdjiqdiqdjijd', 'Confirmed'),
(10, 3, 'Rafi ', 'eww', 'wege', 'ewwg', '2024-10-16', '09:00:00', 'wdwdwdwd', 'Canceled'),
(11, 3, 'Rafi ', 'eww', 'wege', 'ewwg', '2024-10-16', '10:00:00', 'wdwdwdwd', 'Confirmed'),
(12, 3, 'Rafi ', 'eww', 'wege', 'ewwg', '2024-10-16', '11:00:00', 'wdwdwdwd', 'Confirmed'),
(13, 3, 'Rafi ', 'eww', 'wege', 'ewwg', '2024-10-16', '12:00:00', 'wdwdwdwd', 'Canceled');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(2, 'Luthfi', 'Chandra', 'luthfidika31@gmail.com', '$2y$10$Zv8.NZtlkipx5NnQdDwhBOtsPRjDM7FaUwXM0Wo8fIdiHVgCoH2pG', 'user'),
(3, 'admin', 'admin', 'segitigamotor024@gmail.com', '$2y$10$fQJ1EgH5hhJHZ7zJXSFvo.55FD.DQsOnqGL6c6CzvLmM0NL.iw1s2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
