-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 09:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) UNSIGNED NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_details`) VALUES
(1, 'Bags', 'Buy Ladies shoulder bag (handmade) at lowest prices in Bangladesh. Express Home Delivery in Dhaka'),
(2, 'Saree', 'Explore RubieSangeeth\'s board \"handmade saree\" on Pinterest. See more ideas about saree painting, hand painted sarees'),
(9, 'Handkerchief', 'Directory of Bangladesh Handkerchief Manufacturers provides list of handkerchief products supplied by quality Bangladeshi handkerchief manufacturers, suppliers ...');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2022-12-27-030157', 'App\\Database\\Migrations\\Products', 'default', 'App', 1672345733, 1),
(6, '2022-12-29-192853', 'App\\Database\\Migrations\\Catagory', 'default', 'App', 1672345733, 1),
(7, '2022-12-31-144012', 'App\\Database\\Migrations\\Users', 'default', 'App', 1672499458, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) UNSIGNED NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_details` varchar(250) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_img` varchar(250) NOT NULL,
  `product_catagory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_details`, `product_price`, `product_img`, `product_catagory`) VALUES
(17, 'Bag-01', 'Bangladeshi fashion brand Gootipa offers ethically handcrafted premium quality leather bags by ensuring sustainable livelihoods and women\'s empowerment.', '500.00', 'assets/uploads/bag1.jpg', 6),
(18, 'Bag-02', 'Bangladeshi fashion brand Gootipa offers ethically handcrafted premium quality leather bags by ensuring sustainable livelihoods and women\'s empowerment.', '500.00', 'assets/uploads/bag2.jpg', 6),
(19, 'Bag-03', 'Bangladeshi fashion brand Gootipa offers ethically handcrafted premium quality leather bags by ensuring sustainable livelihoods and women\'s empowerment.', '500.00', 'assets/uploads/bag3.jpg', 6),
(20, 'Bag-04', 'Bangladeshi fashion brand Gootipa offers ethically handcrafted premium quality leather bags by ensuring sustainable livelihoods and women\'s empowerment.', '500.00', 'assets/uploads/bag4.jpg', 6),
(21, 'Bag-05', 'Bangladeshi fashion brand Gootipa offers ethically handcrafted premium quality leather bags by ensuring sustainable livelihoods and women\'s empowerment.', '555.00', 'assets/uploads/bag5.jpg', 6),
(22, 'Bag-06', 'Bangladeshi fashion brand Gootipa offers ethically handcrafted premium quality leather bags by ensuring sustainable livelihoods and women\'s empowerment.', '555.00', 'assets/uploads/bag6.jpg', 6),
(23, 'Bag-07', 'Bangladeshi fashion brand Gootipa offers ethically handcrafted premium quality leather bags by ensuring sustainable livelihoods and women\'s empowerment.', '599.00', 'assets/uploads/bag7.jpg', 6),
(24, 'Bag-08', 'Bangladeshi fashion brand Gootipa offers ethically handcrafted premium quality leather bags by ensuring sustainable livelihoods and women\'s empowerment.', '599.00', 'assets/uploads/bag8.jpg', 6),
(25, 'Bag-09', 'Bangladeshi fashion brand Gootipa offers ethically handcrafted premium quality leather bags by ensuring sustainable livelihoods and women\'s empowerment.', '599.00', 'assets/uploads/bag9.jpg', 6),
(26, 'handkerchief-01', 'Directory of Bangladesh Handkerchief Manufacturers provides list of handkerchief products supplied by quality Bangladeshi handkerchief manufacturers, suppliers ...', '200.00', 'assets/uploads/handi1.jpg', 8),
(27, 'Handkerchief-02', 'Directory of Bangladesh Handkerchief Manufacturers provides list of handkerchief products supplied by quality Bangladeshi handkerchief manufacturers, suppliers ...', '250.00', 'assets/uploads/handi2.jpg', 8),
(28, 'handkerchief-03', 'Directory of Bangladesh Handkerchief Manufacturers provides list of handkerchief products supplied by quality Bangladeshi handkerchief manufacturers, suppliers ...\r\n', '299.00', 'assets/uploads/handi3.jpg', 8),
(29, 'Handkerchief-04', 'Directory of Bangladesh Handkerchief Manufacturers provides list of handkerchief products supplied by quality Bangladeshi handkerchief manufacturers, suppliers ...\r\n', '299.00', 'assets/uploads/handi4.jpg', 8),
(30, 'Handkerchief-05', 'Directory of Bangladesh Handkerchief Manufacturers provides list of handkerchief products supplied by quality Bangladeshi handkerchief manufacturers, suppliers ...', '299.00', 'assets/uploads/handi5.jpg', 8),
(31, 'Handkerchief-06', 'Directory of Bangladesh Handkerchief Manufacturers provides list of handkerchief products supplied by quality Bangladeshi handkerchief manufacturers, suppliers ...\r\n', '250.00', 'assets/uploads/handi6.jpg', 8),
(32, 'Handkerchief-07', '                                    Directory of Bangladesh Handkerchief Manufacturers provides list of handkerchief products supplied by quality Bangladeshi handkerchief manufacturers, suppliers ...\r\n                                    ', '260.00', 'assets/uploads/handi7_1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'anam', 'anam@gmail.com', '$2y$10$caHNIoXiFFPnbn14nyYxZuPIwqBFcKLVsmS/8.asT50OvTsJYtrLO', '2022-12-31 16:20:34'),
(2, 'anamul', 'anamul@gmail.com', '$2y$10$gMq/n3Ug0fma8J98fBJvY.Kxw1Fo7Ier8bofUi/gV3B6laz1i9WfG', '2022-12-31 17:18:37'),
(7, 'Faizullah', 'Faizullah@gmail.com', '$2y$10$G3xa0eED9TRn7bNZZ1CahevzoeZhnfI4Wc.oNtf3gR4b8NcMdAUR2', '2023-01-03 07:46:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
