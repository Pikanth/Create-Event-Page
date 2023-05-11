-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 10:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pupets`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorynametb`
--

CREATE TABLE `categorynametb` (
  `category_name_id` int(11) NOT NULL,
  `event_name_id` int(11) NOT NULL,
  `event_type_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eventnametb`
--

CREATE TABLE `eventnametb` (
  `event_name_id` int(11) NOT NULL,
  `event_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eventtypetb`
--

CREATE TABLE `eventtypetb` (
  `event_type_id` int(11) NOT NULL,
  `event_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventtypetb`
--

INSERT INTO `eventtypetb` (`event_type_id`, `event_type`) VALUES
(1, 'Tournament'),
(2, 'Competition'),
(3, 'Standard');

-- --------------------------------------------------------

--
-- Table structure for table `listofeventtb`
--

CREATE TABLE `listofeventtb` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `event_type` varchar(30) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `event_description` text NOT NULL,
  `event_code` varchar(12) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorynametb`
--
ALTER TABLE `categorynametb`
  ADD PRIMARY KEY (`category_name_id`);

--
-- Indexes for table `eventnametb`
--
ALTER TABLE `eventnametb`
  ADD PRIMARY KEY (`event_name_id`);

--
-- Indexes for table `eventtypetb`
--
ALTER TABLE `eventtypetb`
  ADD PRIMARY KEY (`event_type_id`);

--
-- Indexes for table `listofeventtb`
--
ALTER TABLE `listofeventtb`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorynametb`
--
ALTER TABLE `categorynametb`
  MODIFY `category_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `eventnametb`
--
ALTER TABLE `eventnametb`
  MODIFY `event_name_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `eventtypetb`
--
ALTER TABLE `eventtypetb`
  MODIFY `event_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `listofeventtb`
--
ALTER TABLE `listofeventtb`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
