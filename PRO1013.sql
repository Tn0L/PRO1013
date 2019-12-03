-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 01:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro1013`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
 
CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `admin` varchar(16) COLLATE utf8_unicode_520_ci NOT NULL,
  `adminPass` varchar(16) COLLATE utf8_unicode_520_ci NOT NULL,
  `adminAvatar` varchar(45) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `admin`, `adminPass`, `adminAvatar`) VALUES
(1, 'tn0luong', '123', 'tn-logo.jpg'),
(2, 'tien', '123', 'tien-logo.jpg'),
(3, 'nhon', '123', 'nhon-logo.jpg'),
(4, 'minh', '123', 'minh-logo,jpg'),
(5, 'nhat', '123', 'nhat-logo.jpg'),
(6, 'admin', 'admin', 'admin.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
