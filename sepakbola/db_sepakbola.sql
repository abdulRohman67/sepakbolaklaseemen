-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 05:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sepakbola`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_club`
--

CREATE TABLE `data_club` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `kota` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_club`
--

INSERT INTO `data_club` (`kode`, `nama`, `kota`) VALUES
('a1', 'persib', 'abndung'),
('k2', 'persija', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `info` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`info`, `keterangan`) VALUES
('Persija VS Persib', '24 Januari 2024 jam 16.00 wib');

-- --------------------------------------------------------

--
-- Table structure for table `skor`
--

CREATE TABLE `skor` (
  `nama` varchar(50) NOT NULL,
  `main` int(2) NOT NULL,
  `menang` int(2) NOT NULL,
  `seri` int(2) NOT NULL,
  `kalah` int(2) NOT NULL,
  `gm` int(2) NOT NULL,
  `gk` int(2) NOT NULL,
  `total` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skor`
--

INSERT INTO `skor` (`nama`, `main`, `menang`, `seri`, `kalah`, `gm`, `gk`, `total`) VALUES
('persija', 1, 1, 2, 1, 1, 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_club`
--
ALTER TABLE `data_club`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`info`);

--
-- Indexes for table `skor`
--
ALTER TABLE `skor`
  ADD PRIMARY KEY (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
