-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 07:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(200) NOT NULL,
  `vehicle_model` varchar(200) NOT NULL,
  `vehicle_number` varchar(200) NOT NULL,
  `seating_cap` int(200) NOT NULL,
  `rent_pd` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `vehicle_model`, `vehicle_number`, `seating_cap`, `rent_pd`) VALUES
(1, 'Honda', '100', 8, 3000),
(2, 'Ferari ', '200', 2, 5000),
(3, 'Bugatti', '300', 4, 25000),
(4, 'Bugatti', '500', 4, 2900),
(5, 'Maruti', '700', 9, 4500),
(6, 'Bugatti', '800', 8, 12500),
(7, 'Lamborgini', '1200', 3, 14000),
(8, 'SPORTS CAR', 'AH1238', 3, 14000),
(9, 'Lamborgini', '1200', 3, 14000),
(13, 'SEDAN', '12345', 8, 9870),
(14, 'STATION WAGON', 'PH1260', 4, 2650);

-- --------------------------------------------------------

--
-- Table structure for table `rent_car`
--

CREATE TABLE `rent_car` (
  `id` int(200) NOT NULL,
  `vehicle_model` varchar(200) NOT NULL,
  `vehicle_number` varchar(200) NOT NULL,
  `seating_cap` int(200) NOT NULL,
  `rent_pd` int(11) NOT NULL,
  `day` int(200) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_car`
--

INSERT INTO `rent_car` (`id`, `vehicle_model`, `vehicle_number`, `seating_cap`, `rent_pd`, `day`, `start_date`) VALUES
(2, 'Ferari hai sahi', '200', 2, 5000, 0, '2021-10-11'),
(1, 'Honda', '100', 8, 3000, 4, '2021-10-11'),
(2, 'Ferari hai sahi', '200', 2, 5000, 2, '2021-10-11'),
(5, 'Maruti', '700', 9, 4500, 2, '2021-10-11'),
(8, 'Lamborgini', '1200', 3, 14000, 2, '2021-10-11'),
(8, 'Lamborgini', '1200', 3, 14000, 10, '2021-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `user_type`) VALUES
(1, 'hello', 'friends', 'a@gmail.com', '1234', 2),
(2, 'test', 'user', 'test@gmail.com', '1234', 2),
(3, 'Rohit', 'Sharma', 'r@gmail.com', '1234', 2),
(5, 'agent', 'vinod', 'b@gmail.com', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
