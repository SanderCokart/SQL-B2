-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 03:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_level2_opdr1`
--

-- --------------------------------------------------------

--
-- Table structure for table `verjaardagen`
--

CREATE TABLE `verjaardagen` (
  `ID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `birthDay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verjaardagen`
--

INSERT INTO `verjaardagen` (`ID`, `firstName`, `lastName`, `birthDay`) VALUES
(1, 'Sander', 'Cokart', '1998-04-25'),
(6, 'Hubs', 'Bunny', '2018-04-25'),
(8, 'Souraya', 'Hilm', '1998-05-02'),
(9, 'Heba', 'Abaas', '1996-03-02'),
(11, 'Our', 'Hubs', '2017-09-27'),
(12, 'Falco', 'van der Ver', '1998-09-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `verjaardagen`
--
ALTER TABLE `verjaardagen`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `verjaardagen`
--
ALTER TABLE `verjaardagen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
