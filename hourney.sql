-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 10:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hourney`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `suhu` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `id_user`, `tanggal`, `waktu`, `lokasi`, `suhu`) VALUES
(1, 1, '2022-04-14', '13:04', 'Sekolah', 36),
(3, 1, '2022-04-13', '22:45', 'Toilet', 34),
(6, 1, '2022-04-09', '19:05', 'Museum ', 34),
(7, 1, '2022-04-16', '15:03', 'Mall', 35),
(8, 1, '2022-04-16', '23:05', 'Pecel lele', 35),
(9, 1, '2022-04-02', '12:43', 'Masjid', 36),
(10, 1, '2022-04-16', '08:07', 'Kantin', 34),
(11, 1, '2022-04-30', '09:05', 'Kelas', 33),
(12, 1, '2022-04-30', '06:30', 'Parkiran', 32),
(13, 1, '2022-04-23', '15:04', 'Taman', 33),
(14, 1, '2022-05-07', '11:04', 'Pavilion', 36),
(15, 1, '2022-04-30', '04:06', 'Lapangan sekolah', 35),
(16, 1, '2022-04-24', '11:11', 'Fotokopi', 34),
(17, 1, '2022-04-30', '23:46', 'Busway', 35),
(18, 1, '2022-04-14', '12:04', 'Kelas c22', 36);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama`) VALUES
(1, 1920118161, 'Rakha Andhika'),
(2, 1920118181, 'Andela Putri'),
(3, 1920111111, 'Jotaro Kujo'),
(4, 192011123, 'azmi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `catatan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
