-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2024 at 09:08 AM
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
-- Table structure for table `tbl_iklans`
--

CREATE TABLE `tbl_iklans` (
  `id` int(11) NOT NULL,
  `campaign_name` varchar(255) DEFAULT NULL,
  `anggaran` int(11) NOT NULL,
  `hasil` int(11) NOT NULL,
  `jangkauan` int(11) NOT NULL,
  `impresi` int(11) NOT NULL,
  `periode_mulai` datetime DEFAULT NULL,
  `periode_berakhir` datetime DEFAULT NULL,
  `jumlah_dibelanjakan` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_iklans`
--

INSERT INTO `tbl_iklans` (`id`, `campaign_name`, `anggaran`, `hasil`, `jangkauan`, `impresi`, `periode_mulai`, `periode_berakhir`, `jumlah_dibelanjakan`, `date_created`, `date_updated`) VALUES
(2, 'Test Campaign', 200000, 3430, 210592, 342676, '2024-03-08 09:33:00', '2024-03-13 09:33:00', 999999, '2024-03-08 13:37:32', '2024-03-12 08:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kols`
--

CREATE TABLE `tbl_kols` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `whatsapp` int(11) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `tiktok_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `alamat_domisili` varchar(255) DEFAULT NULL,
  `followers_instagram` int(11) DEFAULT NULL,
  `followers_tiktok` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal_upload` datetime DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kols`
--

INSERT INTO `tbl_kols` (`id`, `nama`, `username`, `whatsapp`, `platform`, `tiktok_link`, `instagram_link`, `alamat_domisili`, `followers_instagram`, `followers_tiktok`, `keterangan`, `tanggal_upload`, `product`, `created_at`, `updated_at`) VALUES
(1, 'Test Kol Pertama', '@testpertama', 123123, 'Tiktok', 'google.com', 'google.com', 'Jl. Raya Besar', 3000, 3000, 'Sudah Dikirim', '2026-11-23 01:00:00', 'FOLLOWME EXCLUSIVE Extrait de Parfum - SENSO DI BLOSSOM', '2024-03-12 09:26:16', '2024-03-14 08:55:31'),
(2, 'Kol 2', NULL, 12313123, 'tiktok', 'google.com', 'google.com', 'Jl. Raya KOL', 3000, 3000, 'Sudah Dikirim', NULL, 'Senso di Blossom', '2024-03-12 09:27:52', '2024-03-12 09:27:52'),
(3, 'Test KOL 3', NULL, 123123123, 'Tiktok', 'google.com', 'google.com', 'Jl. Raya Pasar Minggu', 3000, 3000, 'Sudah Diproses', '0000-00-00 00:00:00', 'Senso di Blossom', '2024-03-12 09:31:58', '2024-03-12 09:31:58'),
(4, 'Test Kol 3', NULL, 12313123, 'Tiktok', 'google.com', 'google.com', 'Jl. Raya Besar', 3000, 3000, 'Sudah Diproses', '2024-03-11 15:33:00', 'Senso di Blossom', '2024-03-12 09:33:44', '2024-03-12 09:50:36'),
(5, 'Mang Ijong', '@ijongcute', 2147483647, 'Tiktok', 'google.com', 'google.com', 'jl. raya', 3000, 3000, 'waras', '2024-03-16 11:13:00', 'Senso di Blossom', '2024-03-14 05:13:51', '2024-03-14 05:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lives`
--

CREATE TABLE `tbl_lives` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `penonton` int(11) DEFAULT 0,
  `pengikut_baru` int(11) DEFAULT 0,
  `likes` int(11) DEFAULT 0,
  `gifts` int(11) DEFAULT 0,
  `share` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `aroma` varchar(255) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `formulasi` varchar(100) NOT NULL,
  `berat_produk` varchar(100) NOT NULL,
  `masa_penyimpanan` varchar(100) NOT NULL,
  `kandungan_parfum` varchar(100) NOT NULL,
  `bpom` varchar(100) NOT NULL,
  `ukuran_per_produk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_kadaluarsa` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `nama`, `jenis_kelamin`, `aroma`, `volume`, `formulasi`, `berat_produk`, `masa_penyimpanan`, `kandungan_parfum`, `bpom`, `ukuran_per_produk`, `deskripsi`, `tgl_kadaluarsa`, `created_at`, `updated_at`) VALUES
(1, 'FOLLOWME EXCLUSIVE Exrait de Parfum - L’AME DE L’OCEAN', 'Unisex', 'Segar, Marine, Aquatic', '50ML', 'Spray', '200g', '36 bulan', 'Exrait de Parfum', 'NA18230606437', '50ML', 'Explore the enchanting scent, alluring Patchouli, majistic Dry Amber and captivating Musk giving you an unparalleled experience. Create lasting memories with L’AME DE L’OCEAN.\r\n\r\n\r\nMIND 	| Plum, Blackcurrant, Bergamot, Patchouli, Ambroxan\r\nHEART	| Fig Milk, Geranium, Dry Amber, Violet Leaves\r\nSOUL	| Coconut, Milk Moss, Sandalwood, Musk\r\n\r\nLONGEVITY UP TO 12 HOUR', '2026-11-23 15:52:00', '2024-03-13 09:52:29', '2024-03-14 07:53:30'),
(2, 'FOLLOWME EXCLUSIVE Exrait de Parfum - GLORIOUS MOONLIGHT', 'Unisex', 'Citrus, Woody, Black Tea', '50ML', 'Spray', '200g', '36 Bulan', 'Exrait de Parfum', 'NA18230603626', '50ML', 'A sparkling night full of stars, GLORIOUS MOONLIGHT convey Charles and mystery. The beauty of the mohon and stars are reflected in the harmony of alluring Black Tea, graceful of Lily of The Valley and seductive Citrus. Let this parfume brings you to an unforgettable evening, adoring every moment with unmatched luxury.\r\n\r\n\r\nMIND 	| Citrus, Bergamot, Elemi, Geranium, Oud, Rose,\r\nBlacktea, Patchouli\r\nHEART	| Cedarwood, Patchouli, Apple, Jasmine, Leathery\r\nAccord, Lily of The Valley\r\nSOUL	| Citrus, Amberwood, Musk, White Sandalwood,\r\nPatchouli, Spices\r\n\r\n\r\n\r\nLONGEVITY UP TO 12 HOUR', '2026-11-23 14:08:00', '2024-03-14 08:08:46', '2024-03-14 08:08:46'),
(3, 'FOLLOWME EXCLUSIVE Extrait de Parfum - SENSO DI BLOSSOM', 'Unisex', 'Citrus, Bunga, Floral', '50ML', 'Spray', '200g', '36 Bulan', 'Exrait de Parfum', 'NA18230603627', '50ML', 'Fresh Bergamot and alluring Mandarin take you on an unforgettable scent journey. The luxurious combination of Lily of The Valley and Jasmine brings a seductive feminine feel, creating a scent that is uplifting and enchanting.\r\n\r\n\r\nMIND	| Lime, Bergamot, Pineapple, Mandarin, Grapefruit, \r\nBlackcurrant\r\nHEART	| Lily of The Valley, Orris, Jasmine, Freesia, Orange\r\nFlower, Ambroxan\r\nSOUL	| White Peach, Vanilla, Musk, Benzoin\r\n\r\n\r\nLONGEVITY UP TO 12 HOUR', '2026-11-23 14:12:00', '2024-03-14 08:12:31', '2024-03-14 08:12:31'),
(4, 'FOLLOWME EXCLUSIVE Exrait de Parfum - SUNSET FALVOR', 'Unisex', 'Citrus, Segar, Buah', '50ML', 'Spray', '200g', '36 Bulan', 'Exrait de Parfum', 'NA18230606431', '50ML', 'With every spray of SUNSET FALVOR, you’ll be brings to a magical world of sunset beauty, exploring the shades of of twilight, and presents an unforgettable experience. Let this parfume be the part of YOUR story.\r\n\r\n\r\nMIND 	| Nashi Pear, Kumquat, Bergamot, Mandarin,\r\n                  Galbanum, Ylang Ylang\r\nHEART	| Geranium, Caramel, Tuberose, Jasmine, Orange\r\n                   Flower\r\nSOUL	| Ambergris, Musk, Oakmoss, Vanilla, Tonka Bean\r\n\r\n\r\nLONGEVITY UP TO 12 HOUR', '2026-11-23 14:55:00', '2024-03-14 08:55:19', '2024-03-14 08:55:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_iklans`
--
ALTER TABLE `tbl_iklans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kols`
--
ALTER TABLE `tbl_kols`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_lives`
--
ALTER TABLE `tbl_lives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_iklans`
--
ALTER TABLE `tbl_iklans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kols`
--
ALTER TABLE `tbl_kols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_lives`
--
ALTER TABLE `tbl_lives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
