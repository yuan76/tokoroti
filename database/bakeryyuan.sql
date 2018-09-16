-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2018 at 05:56 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakeryyuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `idAkses` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`idAkses`, `username`, `password`, `salt`, `nama`) VALUES
(1, 'adminbakery', 'c4fccda50f327d82265f7faf5b6bce6024cecc7f6730d75227311dec1255685b', '5b9c4be8727dd0.94309546', 'adminbakery');

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

CREATE TABLE `jual` (
  `idJual` int(7) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `qty` int(6) NOT NULL,
  `total` int(8) NOT NULL,
  `tgl` datetime NOT NULL,
  `param1` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`idJual`, `kode`, `qty`, `total`, `tgl`, `param1`) VALUES
(1, 'A-002', 5, 30000, '2018-09-15 11:40:12', 1),
(2, 'A-007', 2, 50000, '2018-09-15 11:50:21', 1),
(3, 'A-004', 10, 140000, '2018-09-15 12:04:26', 1),
(4, 'A-008', 1, 16000, '2018-09-15 12:05:22', 1),
(7, 'A-002', 10, 60000, '2018-09-15 13:13:46', 2),
(8, 'A-002', 4, 24000, '2018-09-14 17:42:08', 3),
(9, 'A-007', 1, 25000, '2018-09-14 17:42:37', 3);

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `idMaster` int(6) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`idMaster`, `kode`, `nama`, `harga`) VALUES
(1, 'A-001', 'Roti Coklat', 5000),
(2, 'A-002', 'Roti Keju', 6000),
(3, 'A-003', 'Roti Daging', 8000),
(4, 'A-004', 'Roti Tawar', 14000),
(5, 'A-005', 'Roti Kelapa', 6000),
(6, 'A-006', 'Roti Srikaya', 6000),
(7, 'A-007', 'Roti Sobek', 25000),
(8, 'A-008', 'Roti Sandwich Keju', 16000),
(9, 'A-009', 'Roti Sandwich Mix', 20000),
(10, 'A-010', 'Roti Sobek Coklat Keju', 18000),
(11, 'A-011', 'Roti Manis', 10000),
(12, 'A-012', 'roti suka', 8000),
(13, 'A-013', 'roti jagung', 9000),
(14, 'A-014', 'roti keju susu', 9000),
(15, 'A-015', 'Roti Jakarta', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE `parameter` (
  `idParam` int(2) NOT NULL,
  `param1` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parameter`
--

INSERT INTO `parameter` (`idParam`, `param1`) VALUES
(1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`idAkses`);

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`idJual`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`idMaster`);

--
-- Indexes for table `parameter`
--
ALTER TABLE `parameter`
  ADD PRIMARY KEY (`idParam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `idAkses` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jual`
--
ALTER TABLE `jual`
  MODIFY `idJual` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `idMaster` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `parameter`
--
ALTER TABLE `parameter`
  MODIFY `idParam` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
