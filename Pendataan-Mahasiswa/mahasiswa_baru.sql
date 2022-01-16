-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 04:29 AM
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
-- Table structure for table `mahasiswa_baru`
--

CREATE TABLE `mahasiswa_baru` (
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `katasandi` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `statusmhs` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_baru`
--

INSERT INTO `mahasiswa_baru` (`nim`, `nama`, `katasandi`, `jeniskelamin`, `statusmhs`, `prodi`, `alamat`) VALUES
('V3420042', 'Ismaturrofiah', '$2y$10$6Aq9dzGZTD07KelQX5j6y.IalhA5YMC0JT3NCDBClHujCV50JVoyC', 'Perempuan', 'AKTIF', 'Teknik Informatika', 'Temanggung, Jawa Tengah'),
('V3420030', 'Ditya Galassepda', '$2y$10$zRHSc52Hh9YB4WYThjBzWupEYBd65qjS.szF1YnzQ7nqIijADC5au', 'Perempuan', 'TIDAK AKTIF', 'Teknik Informatika', 'Nganjuk, Jawa Timur'),
('V3420043', 'Jovian', '$2y$10$eakgrAhanPDw8tthlcf4POzNL4g8vxvGkuld.NlcSwOvGi4vAXdDu', 'Laki-Laki', 'TIDAK AKTIF', 'Teknik Informatika', 'Magetan, Jawa Timur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
