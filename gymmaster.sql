-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 04:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactinformation`
--

CREATE TABLE `contactinformation` (
  `id` int(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactinformation`
--

INSERT INTO `contactinformation` (`id`, `username`, `email`, `mobile`, `comment`) VALUES
(0, 'ds', 'sdfsd', 1223, '        wdwsad');

-- --------------------------------------------------------

--
-- Table structure for table `memberinformation`
--

CREATE TABLE `memberinformation` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memberinformation`
--

INSERT INTO `memberinformation` (`id`, `firstname`, `lastname`, `username`, `age`, `email`, `mobile`) VALUES
(1, 'dfv', 'czs', 'sd', 12, 'ds', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactinformation`
--
ALTER TABLE `contactinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberinformation`
--
ALTER TABLE `memberinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memberinformation`
--
ALTER TABLE `memberinformation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
