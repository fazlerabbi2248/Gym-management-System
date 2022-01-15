-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 05:00 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'rabbi', 'fazlerabbi2248@gmail.com', '123');

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
(1, 'ds', 'sdfsd', 1223, '        wdwsad');

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
(3, 'Masum', 'Billah', 'masum', 12, 'masum@gmail.com', 2147483647),
(5, 'Rabbi', 'islam', 'rabbi', 11, 'rabbi@gmail.com', 1611098010),
(6, 'Ariq', 'Ayan', 'ariq3', 3, 'ariq@gmai.com', 12345678),
(7, 'rabbi', 'islam', 'rabbi', 22, 'rabbi@gmail.com', 12345678),
(8, 'Fazle ', 'rabbi', 'rabbi', 12, 'rabb@gmail.com', 612138);

-- --------------------------------------------------------

--
-- Table structure for table `shedule`
--

CREATE TABLE `shedule` (
  `id` int(2) NOT NULL,
  `day` varchar(30) NOT NULL,
  `t1` varchar(20) NOT NULL,
  `t2` varchar(20) NOT NULL,
  `t3` varchar(20) NOT NULL,
  `t4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shedule`
--

INSERT INTO `shedule` (`id`, `day`, `t1`, `t2`, `t3`, `t4`) VALUES
(1, 'saturday', 'Women', 'Men', 'Mem', 'wommen'),
(2, 'sunday', 'Women', 'Men', 'Men', 'Men'),
(3, 'monday', 'Women', 'Men', 'Women', 'Men'),
(4, 'Tuesday', 'Women', 'Men', 'Women', 'Men'),
(5, 'Wednesday', 'Women', 'Men', 'Women', 'men'),
(6, 'Thursday', 'Women', 'Men', 'Women', 'men'),
(7, 'Friday', 'off', 'Women', 'off', 'men');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `shedule`
--
ALTER TABLE `shedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactinformation`
--
ALTER TABLE `contactinformation`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `memberinformation`
--
ALTER TABLE `memberinformation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shedule`
--
ALTER TABLE `shedule`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
