-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 01:36 PM
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
-- Database: `v2database`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `password`, `student_id`, `order_status`) VALUES
(1, 'Jones', 'Sta Rita', '4Jones42', '5', 'Complete'),
(2, 'Kid', 'San pablo 1st', '12345', '6', 'Complete'),
(3, 'look', 'City See', '12345', '23', 'Pending'),
(4, 'cop', 'police station', '0987', '13', 'Pending'),
(5, 'Peter', 'Guagua', '58', '4324', 'Pending'),
(6, 'Peter2nd', 'Guagua', '55', '432', 'Pending'),
(7, 'Andy', 'San Pablo 1st', '12331', '2344', 'Complete'),
(8, 'apple', 'apple tree', 'apple', '0982', 'Pending'),
(9, 'kiwi', 'kiwi tree', 'kiwi2', '0982', 'Pending'),
(10, 'bookk', 'libarayyy', '12345', '12345', 'Pending'),
(11, 'towo', 'towoo', '123', '23', 'Pending'),
(12, 'fofofo', 'foafao', '123', '13131', 'Pending'),
(13, 'pat', 'Far City', '123', '13131', 'Pending'),
(14, 'key', 'Lock Gate', 'Lock2', '59', 'Complete'),
(15, 'Roy', 'PH', 'roy2', '2221', 'Complete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
