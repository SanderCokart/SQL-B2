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
-- Table structure for table `verlanglijst`
--

CREATE TABLE `verlanglijst` (
  `ID` int(11) NOT NULL,
  `Product` text NOT NULL,
  `Description` text NOT NULL,
  `Source` text NOT NULL,
  `image` text NOT NULL,
  `Price` float(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verlanglijst`
--

INSERT INTO `verlanglijst` (`ID`, `Product`, `Description`, `Source`, `image`, `Price`) VALUES
(1, 'Creative Sound Blasterx Katana Channel Gaming Speaker Black', 'Under monitor audio system: so slim and but as powerful and easier\r\nAurora reactive lighting system: Back Your installation the perspective\r\n5 driver design: experts Undig matched acoustic\r\n2.5 inch and middle Lbas driver, upward facing (63.5 mm) 1/2 inch high excursion woofers (34 mm) x 5 1/4 \"subwoofer driver (133 mm)\r\nTri amplification design: Latest listening', 'https://www.amazon.de/Creative-Sound-BlasterX-Katana-Lautsprecher/dp/B01N5FV9PC/ref=sr_1_1_sspa?ie=UTF8&qid=1547539736&sr=8-1-spons&keywords=katana+x&psc=1', 'https://images-na.ssl-images-amazon.com/images/I/61PDbstf3bL._SL1500_.jpg', 131),
(2, 'Lenovo Yoga 730 33.78 cm (13.3 Inch Full HD IPS Matte) Slim Convertible Notebook (Intel Core i7-8565U, 8GB RAM, 256GB SSD, Intel UHD Graphics 620, Windows 10 Home) Grey', 'Processor: Intel Core i7-8565U Processor (up to 4.60GHz with Intel Turbo Boost Technology 2.0, 8MB Intel Cache)\r\n360 degree adjustable multi-touch display in full HD resolution, Dolby Atmos and JBL speakers, fingerprint scanner, writing on display with active pen, backlit keyboard\r\nBattery: Li-polymer, 48 Wh, up to 11.5 hours run time\r\nWarranty: 24 Months For the warranty conditions, see \"Further technical information\". Your statutory warranty rights remain unaffected\r\nBox contents: Lenovo Yoga 730-13IWL Iron Grey, Active Pen, power supply, documentation', 'https://www.amazon.de/Lenovo-Convertible-Notebook-i7-8565U-Windows-grau/dp/B07KTFYB38/ref=sr_1_1?ie=UTF8&qid=1547539777&sr=8-1&keywords=yoga+730', 'https://images-na.ssl-images-amazon.com/images/I/5158rhlVw0L._SL1000_.jpg', 1078),
(3, 'Intel Core i7 9700K Processor 3.6GHz Box 12MB Smart Cache BX80684I79700K', 'Intel Core i7 9700K - 3.6 GHz - 8 cores - 8 threads - 12 MB cache memory - LGA1151 socket - box', 'https://www.amazon.de/Intel-i7-9700K-Prozessor-Smart-BX80684I79700K/dp/B07HHN6KBZ/ref=sr_1_1?s=computers&ie=UTF8&qid=1547947740&sr=1-1&keywords=9700k', 'https://images-na.ssl-images-amazon.com/images/I/71t%2Bu3X3ImL._SL1500_.jpg', 456),
(4, 'AMD 2700X 3.7 Ghz, Maximum Turbo Core Clock Speed: 4.35 Ghz.', 'AMD Ryzen 7 2700X\r\nStandard speed: 3.7 GHz; Maximum turbo core clock speed: 4.35 GHz\r\n12 New 28nm process', 'https://www.amazon.de/AMD-Ryzen-2700X-Prozessor-Basistakt/dp/B07B428M7F/ref=sr_1_1?s=computers&ie=UTF8&qid=1547947811&sr=1-1&keywords=2700x', 'https://images-na.ssl-images-amazon.com/images/I/61IsA3O32GL._SL1178_.jpg', 319);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `verlanglijst`
--
ALTER TABLE `verlanglijst`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `verlanglijst`
--
ALTER TABLE `verlanglijst`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
