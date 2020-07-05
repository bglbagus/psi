-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 02:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgl`
--

-- --------------------------------------------------------

--
-- Table structure for table `bgl`
--

CREATE TABLE `bgl` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Namauser` varchar(100) NOT NULL,
  `NPM` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bgl`
--

INSERT INTO `bgl` (`username`, `password`, `Namauser`, `NPM`, `telepon`) VALUES
('', '', 'bagsu', 'bagus', ''),
('bgl', 'bagus', 'bagus', '14.2019.1.90135', '089898989');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bgl`
--
ALTER TABLE `bgl`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
