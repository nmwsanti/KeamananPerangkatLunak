-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 03:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kplbynmw`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` enum('Dosen','Staff','Mahasiswa') NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `email`, `level`, `date`) VALUES
(1, 'widia.santi5@gmail.com', 'Mahasiswa', '2021-09-30'),
(2, 'widia.santi5@gmail.com', 'Mahasiswa', '2021-09-30'),
(3, 'nmwsanti@gmail.com', 'Staff', '2021-09-30'),
(4, 'nmwsanti@gmail.com', 'Staff', '2021-09-30'),
(5, 'asaadvertisingofc@gmail.com', 'Dosen', '2021-09-30'),
(6, 'nmwsanti@gmail.com', 'Staff', '2021-09-30'),
(7, 'asaadvertisingofc@gmail.com', 'Dosen', '2021-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassw`
--

CREATE TABLE `resetpassw` (
  `id` int(50) NOT NULL,
  `code` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resetpassw`
--

INSERT INTO `resetpassw` (`id`, `code`, `email`) VALUES
(0, '1615497afc86d5', 'widia.santi5@gmail.com'),
(0, '1615499cd6212e', 'widia.santi5@gmail.com'),
(0, '16154a0421b619', 'widia.santi5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `verif_code` varchar(100) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `level` enum('Dosen','Staff','Mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `verif_code`, `is_verified`, `level`) VALUES
(2, 'Widiasanti', 'widia.santi5@gmail.com', 'ae1d4b431ead52e5ee1788010e8ec110', '201ee2d79172107f003553deb1c97394', 1, 'Mahasiswa'),
(3, 'Nimade Santi', 'nmwsanti@gmail.com', '066a0eb72a41e6a12aae48fd1ee1a790', '83b3ff5a3ddfd173e7ae472692996c5e', 1, 'Staff'),
(4, 'Kharismaharani A.P.', 'kharismaharani09@gmail.com', '8d54d98edb4b4ebdb4a2cc0cffe6eb1f', '16d8f99b958a119ce85fc13db101a6a1', 0, 'Dosen'),
(5, 'Nimade Widiasanti', 'asaadvertisingofc@gmail.com', '7717aabe359aee2965d17285960abfee', '68a82a9764a849fd970f81ce8411f51a', 1, 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
