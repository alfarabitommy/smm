-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2024 at 08:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lives`
--

CREATE TABLE `tbl_lives` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `penonton` int(11) DEFAULT 0,
  `shift` int(11) DEFAULT 0,
  `penjualan` int(11) NOT NULL,
  `likes` int(11) DEFAULT 0,
  `gifts` int(11) DEFAULT 0,
  `share` int(11) DEFAULT 0,
  `screenshot` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lives`
--

INSERT INTO `tbl_lives` (`id`, `nama`, `tanggal`, `penonton`, `shift`, `penjualan`, `likes`, `gifts`, `share`, `screenshot`, `created_at`, `updated_at`) VALUES
(1, 'Tes Nama', '2024-03-21 16:30:40', 200, 200, 0, 200, 200, 200, NULL, '2024-03-21 16:30:40', '2024-03-21 16:30:40'),
(3, 'Test Host 3 update', '2024-03-22 17:06:00', 300, 300, 0, 300, 300, 300, NULL, '2024-03-21 11:06:45', '2024-03-21 11:28:54'),
(6, 'Test Host 3 update', '2024-03-22 14:45:00', 200, 2, 0, 200, 200, 200, '3.3_Sale-02.png', '2024-03-22 08:46:05', NULL),
(7, 'asdasd', '2024-03-25 22:43:00', 200, 2, 0, 200, 200, 200, 'pexels-photo-907865.jpeg', '2024-03-25 16:44:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lives`
--
ALTER TABLE `tbl_lives`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_lives`
--
ALTER TABLE `tbl_lives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
