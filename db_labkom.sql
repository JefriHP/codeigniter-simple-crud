-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 02:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_labkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `skills`, `address`, `designation`, `age`) VALUES
(2, 'test', 'test', 'test', 'test', 24),
(2, 'test', 'test', 'test', 'test', 24);

-- --------------------------------------------------------

--
-- Table structure for table `t_barang`
--

CREATE TABLE `t_barang` (
  `ID` int(11) NOT NULL,
  `BrgCode` varchar(100) NOT NULL,
  `BrgName` varchar(150) NOT NULL,
  `Satuan` varchar(50) NOT NULL,
  `HargaBeli` decimal(10,0) NOT NULL,
  `HargaJual` decimal(10,0) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `InputBy` varchar(30) NOT NULL,
  `InputDate` datetime NOT NULL,
  `UpdateBy` varchar(30) NOT NULL,
  `UpdateDate` datetime NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_barang`
--

INSERT INTO `t_barang` (`ID`, `BrgCode`, `BrgName`, `Satuan`, `HargaBeli`, `HargaJual`, `Gambar`, `InputBy`, `InputDate`, `UpdateBy`, `UpdateDate`, `Status`) VALUES
(1, 'BRG0001', 'Bolpoint Merah', '', '4000', '8000', '', '', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 1),
(2, 'BRG0002', 'Pensil', 'PCS', '0', '0', '', '', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 0),
(56, 'BRG0004', 'test', '', '200000', '2000000', 'C:\\fakepath\\Logo Purna Jaya.PNG', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(60, 'test444', '123', '', '4000', '8000', 'C:\\fakepath\\Logo Purna Jaya 2.PNG', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_satuan`
--

CREATE TABLE `t_satuan` (
  `SatCode` varchar(5) NOT NULL,
  `SatDesc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_satuan`
--

INSERT INTO `t_satuan` (`SatCode`, `SatDesc`) VALUES
('PACK', 'PACK'),
('PCS', 'PIECES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_satuan`
--
ALTER TABLE `t_satuan`
  ADD PRIMARY KEY (`SatCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_barang`
--
ALTER TABLE `t_barang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
