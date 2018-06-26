-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 12:02 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pic_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `pic_name`, `ID`) VALUES
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 93),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 94),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 95),
('Yuri', 'gurgenidze', 'yurigurgenidze@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '5b320f16eae355.05055075.png', 96),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 97),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 98),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 99),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 100),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 101),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
