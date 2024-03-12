-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2024 at 05:08 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `lead` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `lead`, `content`, `modified_at`) VALUES
(1, 'OVER THE COUNTER PRODUCTS', '<p>Menjawab kebutuhan masyarakat urban yang semakin tinggi akan produk kesehatan kulit sehari - hari, Erha secara khusus mengembangkan rangkaian produk perawatan terkini melalui produk - produk <i>Over The Counter.</i></p><p>Rangkaian produk <i>Over The Counter </i>merupakan inovasi baru produk perawatan kulit yang memadukan keahlian <i>Dermatologist </i>yang berpengalaman dan pemahaman akan perbedaan kebutuhan masing - masing individu.</p><p>Temui <i>Product Consultant </i>kami di Erha Derma Center, Erhaclinic, Erhaskin maupun Erha Apothecary terdekat dan dapatkan product <i>Over The Counter </i>yang tepat sesuai kebutuhan kulit.</p>', '2020-02-02 06:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `acnefacts`
--

CREATE TABLE `acnefacts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `acnefacts`
--

INSERT INTO `acnefacts` (`id`, `title`, `content`, `tags`, `image`, `status`, `created_at`, `modified_at`) VALUES
(3, 'Title acnefacts 1', 'Content acnefacts 1', 'tags, acnefacts, 1', 'article.png', 1, '2020-01-26 22:31:31', NULL),
(4, 'Title acnefacts 2', 'Title acnefacts 2', 'tags, acnefacts, 2', 'article.png', 1, '2020-01-26 22:31:56', NULL),
(5, 'Title acnefacts 3', 'Content acnefacts 3', 'tags, acnefacts, 3', 'article.png', 1, '2020-01-26 22:32:18', NULL),
(6, 'Title acnefacts 4', 'Content acnefacts 4', 'tags, acnefacts, 4', 'article.png', 1, '2020-01-26 22:32:47', NULL),
(7, 'Title acnefacts 5', 'Content acnefacts 5', 'tags, acnefacts, 5', 'article.png', 1, '2020-01-26 22:33:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `title`, `photo`, `description`) VALUES
(1, 'Ini adalah title', 'penguatan_pasar_DN.jpg', '<p>ini adalah keterangan saja</p>'),
(3, 'Ini adalah title', '1.jpg', '<p>asdasdas</p>'),
(4, 'Versi Polri Pengibaran Bendera Israel di Papua Bermotif Keagamaan', '01-KE.jpg', '<p>adalah ini</p>');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `segment` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `email`, `segment`, `type`, `tanggal`, `description`) VALUES
(1, 'muhammad45rifqi@gmail.com', 4, 'acnefacts', '2020-02-02', 'test'),
(3, 'tommy@localhost.com', 3, 'videos', '2020-02-02', 'test'),
(4, 'iksan.qren@gmail.com', 2, 'whatsnew', '2020-02-02', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'Test Message', 'test@message.com', '081811112222', 'Halo, test message nih', '2020-01-31 20:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `password`, `dob`, `created_at`, `modified_at`) VALUES
(1, 'Test Name', '12345678', 'test_email@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-01-25', '2020-01-25 23:23:22', NULL),
(2, 'test name', '12345678', 'test@mail.com', '25d55ad283aa400af464c76d713c07ad', '0000-00-00', '2020-01-27 08:17:49', NULL),
(3, 'test name lagi', '12345678', 'test@mail.com', '25d55ad283aa400af464c76d713c07ad', '0000-00-00', '2020-01-27 08:18:39', NULL),
(4, 'test lagi', '12345678', 'test@mail.com', '25d55ad283aa400af464c76d713c07ad', '0000-00-00', '2020-01-27 08:35:40', NULL),
(5, 'test register 2', '12345678', 'test@mail2.com', '25d55ad283aa400af464c76d713c07ad', '0000-00-00', '2020-01-27 09:45:51', NULL),
(6, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00', '2020-01-27 09:49:43', NULL),
(7, 'halo', '12345678', 'halo@halo.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', '2020-01-27 09:50:16', NULL),
(8, 'test date', '12345678', 'mail@mail.com', '25d55ad283aa400af464c76d713c07ad', '2020-01-01', '2020-01-27 09:51:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `lead_desc` text DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL,
  `store_link` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `banner` varchar(255) NOT NULL,
  `contains` varchar(255) DEFAULT NULL,
  `packaging` varchar(255) DEFAULT NULL,
  `howto` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `lead_desc`, `price`, `stock`, `rating`, `store_link`, `desc`, `image1`, `image2`, `image3`, `image4`, `background`, `banner`, `contains`, `packaging`, `howto`, `status`, `created_at`, `modified_at`) VALUES
(1, 'Product 1', 'Lead Description for product 1', 100000, 'Available', 5, 'https://www.erhastore.co.id', 'Description for product 1', 'Product_1.jpg', NULL, NULL, NULL, NULL, '', 'Contains Value', 'Packaging Value', 'How to value', 1, '2020-01-26 19:56:33', '2020-02-02 10:42:51'),
(2, 'Product 2', 'Lead description for product 2', 100000, 'Available', 4, 'https://www.erhastore.co.id', 'Description for product 2', 'Product_2.jpg', NULL, NULL, NULL, NULL, '', '', '', '', 1, '2020-01-26 19:57:57', '2020-02-02 09:06:30'),
(3, 'Product 3', 'Lead description product 3', 100000, 'Available', 3, 'https://www.erhastore.co.id', 'Description for product 3', 'Product_3.jpg', NULL, NULL, NULL, NULL, '', '', '', '', 1, '2020-01-26 19:59:19', '2020-01-31 21:56:26'),
(4, 'Product 4', 'Lead description for product 4', 100000, 'Available', 2, 'https://www.erhastore.co.id', 'Description for product 4', 'Product_4.jpg', NULL, NULL, NULL, NULL, '', '', '', '', 1, '2020-01-26 19:59:59', '2020-02-02 10:39:09'),
(5, 'Product 5', 'Lead description for product 5', 100000, 'Available', 1, 'https://erhastore.co.id', 'Description for product 5', 'product.png', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 1, '2020-01-26 20:00:50', '2020-01-26 20:31:10'),
(6, 'Product 6', 'Lead Description', 100000, 'Available', 5, 'google.com', 'Description for product 6', 'product.png', NULL, NULL, NULL, NULL, '', 'Contains', 'Packaging', 'How to use', 1, '2020-01-31 21:43:10', '2020-01-31 21:44:16'),
(7, 'Product 7', 'Lead Description', 100000, 'Available', 5, 'google.com', 'Description for product 7', 'product.png', NULL, NULL, NULL, NULL, '', 'Contains', 'Packaging', 'How To Use', 1, '2020-01-31 21:43:58', '2020-01-31 21:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `description`) VALUES
(1, '<p>ini adalah profile&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `description`) VALUES
(1, '<p>ini adalah service</p>');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title_1` varchar(255) DEFAULT NULL,
  `title_2` varchar(255) DEFAULT NULL,
  `lead_desc` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_1`, `title_2`, `lead_desc`, `link`, `image`, `status`, `created_at`, `modified_at`) VALUES
(4, 'Title 1', 'Title 2', 'Short description enter here', 'google.com', 'Banner_Home_desktop.jpg', 1, '2020-01-26 19:46:47', '2020-01-31 21:09:16'),
(5, 'Title 1 Part 2', 'Title 2 Part 2', 'Short description enter here', 'google.com', 'Banner_Home_desktop_2.jpg', 1, '2020-01-26 19:47:20', '2020-01-31 21:10:03'),
(6, 'Title 1 Part 3', 'Title 2 Part 3', 'Short description enter here', 'google.com', 'Banner_Home_desktop_3.jpg', 1, '2020-01-26 19:47:51', '2020-01-31 21:10:12');

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
(2, 'Test Campaign', 200000, 3430, 210592, 342676, '2024-03-08 09:33:00', '2024-03-08 09:33:00', 999999, '2024-03-08 13:37:32', '2024-03-12 04:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kols`
--

CREATE TABLE `tbl_kols` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `access` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `access`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@localhost.com', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@localhost', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `content`, `tags`, `link`, `status`, `created_at`, `modified_at`) VALUES
(3, 'Title videos 1', 'Content videos 1', 'tags, videos, 1', 'cYcYzUu9VjI', 1, '2020-01-26 22:44:51', NULL),
(4, 'Title videos 2', 'Content videos 2', 'tags, videos, 2', '67qyNCfEypk', 1, '2020-01-26 22:45:41', NULL),
(5, 'Title videos 3', 'Content videos 3', 'tags, videos, 3', '9MLgnD13aZc', 1, '2020-01-26 22:46:10', NULL),
(6, 'Title videos 4', 'Content videos 4', 'tags, videos, 4', 'ZGe4SM6Ds0Y', 1, '2020-01-26 22:46:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `whatsnew`
--

CREATE TABLE `whatsnew` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `whatsnew`
--

INSERT INTO `whatsnew` (`id`, `title`, `content`, `tags`, `image`, `status`, `created_at`, `modified_at`) VALUES
(2, 'Whats new 1', 'Content Whats New 1', 'content, whats, new, 1', 'article.png', 1, '2020-01-26 22:00:13', NULL),
(3, 'Title Whatsnew 2', 'Content Whatsnew 2', 'tags, whats, new, 2', 'article.png', 1, '2020-01-26 22:00:47', NULL),
(4, 'Title whatsnew 3', 'Content whatsnew 3', 'tags, whats, new, 3', 'article.png', 1, '2020-01-26 22:01:14', NULL),
(5, 'Title whatsnew 4', 'Content whatsnew 4', 'tags, whats, new, 4', 'article.png', 1, '2020-01-26 22:01:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `acnefacts`
--
ALTER TABLE `acnefacts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`) USING BTREE;

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`) USING BTREE;

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`) USING BTREE;

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_iklans`
--
ALTER TABLE `tbl_iklans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kols`
--
ALTER TABLE `tbl_kols`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lives`
--
ALTER TABLE `tbl_lives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `whatsnew`
--
ALTER TABLE `whatsnew`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `acnefacts`
--
ALTER TABLE `acnefacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_iklans`
--
ALTER TABLE `tbl_iklans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kols`
--
ALTER TABLE `tbl_kols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lives`
--
ALTER TABLE `tbl_lives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `whatsnew`
--
ALTER TABLE `whatsnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
