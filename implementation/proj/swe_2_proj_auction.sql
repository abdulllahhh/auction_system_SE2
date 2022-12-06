-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 10:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swe_2_proj_auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name1` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password1` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `roles` varchar(20) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name1`, `Username`, `Password1`, `Email`, `L_name`, `date_of_birth`, `country`, `city`, `roles`, `phone_number`) VALUES
(1, 'ahmed', 'ahmed123', 'ahmed123', 'ahmed@gmail.com', 'abdo', '0000-00-00', 'egypt', 'cairo', 'user', 123),
(1000, 'steve', 'admin', '12345', 'admin@gmail.com', 'max', '2021-11-01', 'usa', 'new york', 'admin', 111000202),
(1001, 'Abdalla Ibrahim', 'abdo', '123', 'abdallaebrahim51@gmail.com', 'ibrah', '0000-00-00', 'Egypt', 'Cairo', 'user', 2147483647),
(1002, 'ali', 'ali321', 'ali123', 'ali@gmail.com', 'mohammed', '0000-00-00', 'holanda', 'nami', 'user', 412512),
(1003, 'user2', 'user2', '1234', 'user@gmail.com', 'asdd', '0000-00-00', 'Egypt', 'Cairo', 'user', 123123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
