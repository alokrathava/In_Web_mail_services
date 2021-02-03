-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 01:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(5) NOT NULL,
  `to_mail` varchar(50) NOT NULL,
  `from_mail` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `to_mail`, `from_mail`, `subject`, `message`, `day`) VALUES
(1, 'alokrathava@gmail.com', 'alpha@alpine.com', 'Test 1', 'Hello Test !', 'February 3, 2021'),
(2, 'alokrathava@gmail.com', 'alpha@alpine.com', 'Test 2', 'This is a test to message need to be small and simple.', 'February 3, 2021'),
(3, 'alpha@alpine.com', 'alokrathava@gmail.com', 'Test 3', 'alpha@alpine.com back to alpha', 'February 3, 2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
