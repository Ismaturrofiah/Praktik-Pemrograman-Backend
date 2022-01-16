-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 05:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `NIM` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sandi` varchar(10) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `program_studi` varchar(20) NOT NULL,
  `warga_negara` varchar(3) NOT NULL,
  `stat` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`NIM`, `nama`, `sandi`, `tanggal_lahir`, `jenis_kelamin`, `program_studi`, `warga_negara`, `stat`, `keterangan`) VALUES
('V12', 'Muhammad Fahri', '$2y$10$mqN', '2021-09-12', 'Laki-Laki', 'Teknik Sipil', 'WNI', 'mahasiswa aktif', 'Mahasiswa Baru'),
('V7690', 'Lilyana', '$2y$10$iKB', '2021-09-17', 'Perempuan', 'Matematika', 'WNA', 'mahasiswa aktif', 'Mahasiswa Baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
