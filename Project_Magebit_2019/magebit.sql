-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2019 at 07:19 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magebit`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `record_id` int(3) NOT NULL,
  `user` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`record_id`, `user`, `category`, `value`) VALUES
(1, 'Guntis Berzins ', 'Height', '180'),
(2, 'Janis Berzins ', 'Height', '190'),
(3, 'Janis Berzins ', 'Age', '27'),
(4, 'Janis Berzins ', 'Address', 'London Street 1 - 1'),
(5, 'Janis Berzins ', 'Phone Number', '+12345678'),
(6, 'Guntis Berzins ', 'Age', '29'),
(7, 'Guntis Berzins ', 'Phone Number', '+87654321'),
(8, 'Guntis Berzins ', 'Address', 'California Street  1 - 1'),
(9, 'Guntis Berzins ', 'Position', 'Engineer'),
(10, 'Jim Scott ', 'Height', '184'),
(11, 'Jim Scott ', 'Age', '32'),
(12, 'Jim Scott ', 'Address', 'California Street  1 - 1'),
(13, 'Jim Scott ', 'Phone Number', '+12345678'),
(14, 'Guntis Berzins ', 'Weight', '77'),
(15, 'Zane Liepina ', 'Age', '28'),
(16, 'Janis Berzins ', 'Education', 'New York University'),
(17, 'Janis Berzins ', 'Shipping', 'DHL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `randSalt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `randSalt`) VALUES
(1, 'Guntis Berzins', 'guntis@test.com', '123', NULL),
(2, 'Janis Berzins', 'janis@test.com', '12345', NULL),
(3, 'Juris Liepa', 'juris@test.com', '123', NULL),
(4, 'John Kenny', 'kenny@test.com', '123', NULL),
(7, 'John Kennedy', 'john@test.com', '123', NULL),
(8, 'Charles Barkley', 'charles@test.com', '123', NULL),
(9, 'Zane Liepina', 'Zane@test.com', '1234567', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `record_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
