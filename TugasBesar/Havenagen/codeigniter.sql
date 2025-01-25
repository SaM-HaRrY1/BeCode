-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2025 at 11:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'side administrator'),
(2, 'user', 'regular user');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'nabilaimina@gmail.com', 3, '2025-01-16 03:50:12', 0),
(2, '::1', 'nabilaimina@gmail.com', 3, '2025-01-16 03:51:41', 1),
(3, '::1', 'nabilaimina@gmail.com', 3, '2025-01-16 04:19:55', 1),
(4, '::1', 'nabilaimina@gmail.com', 3, '2025-01-17 22:55:38', 1),
(5, '::1', 'nabilaimina@gmail.com', 3, '2025-01-18 01:07:04', 1),
(6, '::1', 'nabilaimina@gmail.com', 3, '2025-01-18 01:10:28', 1),
(7, '::1', 'bilaa', NULL, '2025-01-18 01:16:53', 0),
(8, '::1', 'nabilaimina@gmail.com', 3, '2025-01-18 01:17:01', 1),
(9, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 02:51:35', 1),
(10, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 02:54:12', 1),
(11, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 03:44:05', 1),
(12, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 07:57:21', 1),
(13, '::1', 'bilaa', NULL, '2025-01-22 07:58:13', 0),
(14, '::1', 'bilaa', NULL, '2025-01-22 07:58:20', 0),
(15, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 07:58:37', 1),
(16, '::1', 'bilaa', NULL, '2025-01-22 14:06:39', 0),
(17, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 14:06:54', 1),
(18, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 14:49:13', 1),
(19, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 14:50:43', 1),
(20, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 15:00:16', 1),
(21, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 15:00:54', 1),
(22, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 15:11:50', 1),
(23, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 15:16:56', 1),
(24, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 15:18:29', 1),
(25, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 15:24:10', 1),
(26, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 15:25:17', 1),
(27, '::1', 'nabilaimina@gmail.com', 3, '2025-01-22 15:26:46', 1),
(28, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 03:19:30', 1),
(29, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 03:20:04', 1),
(30, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 03:39:15', 1),
(31, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 03:39:44', 1),
(32, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 03:44:58', 1),
(33, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 03:53:14', 1),
(34, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 13:13:06', 1),
(35, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 13:13:49', 1),
(36, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 13:18:49', 1),
(37, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 13:48:21', 1),
(38, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 14:31:14', 1),
(39, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 14:44:26', 1),
(40, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 14:45:05', 1),
(41, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 14:45:41', 1),
(42, '::1', 'nabilaimina@gmail.com', 3, '2025-01-23 15:42:12', 1),
(43, '::1', 'nabilaimina@gmail.com', 3, '2025-01-24 02:50:22', 1),
(44, '::1', 'nabilaimina@gmail.com', 3, '2025-01-24 04:04:55', 1),
(45, '::1', 'bilaa', NULL, '2025-01-24 07:47:04', 0),
(46, '::1', 'nabilaimina@gmail.com', 3, '2025-01-24 07:47:12', 1),
(47, '::1', 'nabilaimina@gmail.com', 3, '2025-01-24 09:03:14', 1),
(48, '::1', 'nabilaimina@gmail.com', 3, '2025-01-24 09:58:13', 1),
(49, '::1', 'nabilaimina@gmail.com', 3, '2025-01-24 10:13:15', 1),
(50, '::1', 'nabilaimina@gmail.com', 3, '2025-01-24 10:15:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'manage all user'),
(2, 'manage-profile', 'manage user\'s profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int UNSIGNED NOT NULL,
  `selector` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hashedValidator` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1736483392, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int NOT NULL,
  `nama_menu` varchar(256) NOT NULL,
  `jenis` int NOT NULL,
  `kategori` enum('enak','best','best seller') NOT NULL,
  `harga` int NOT NULL,
  `foto_menu` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `jenis`, `kategori`, `harga`, `foto_menu`) VALUES
(1, 'Nagen Orange', 1, 'best', 15000, 'nagen-oranje.WEBP'),
(2, 'Cofee Latte', 1, 'enak', 16000, 'cofee-latte.WEBP'),
(3, 'Green Thai Tea', 1, 'enak', 17000, 'green-thai-tea.WEBP'),
(5, 'Honey Lemon', 1, 'enak', 15000, 'honey-lemon.WEBP'),
(6, 'Iced Choko', 1, 'enak', 15000, 'iced-choko.WEBP'),
(7, 'Mocha', 1, 'enak', 17000, 'mocha.WEBP'),
(9, 'Naturan Green', 1, 'enak', 15000, 'naturan-green.WEBP'),
(10, 'Ovaltine', 1, 'enak', 18000, 'ovaltine2.WEBP'),
(11, 'Royal Mixer', 1, 'enak', 18000, 'royal-mixer.WEBP'),
(12, 'Thai Milk', 1, 'enak', 12000, 'thai-milk.WEBP'),
(13, 'Thai', 1, 'enak', 12000, 'thai.WEBP'),
(14, 'Ultimate Mango', 1, 'enak', 17000, 'ultimate mango.WEBP'),
(15, 'Ultimate Mango Large', 1, 'enak', 18000, 'ultimate-mango-(large).WEBP'),
(16, 'French Fries', 2, 'enak', 15000, 'french-fries.WEBP'),
(17, 'Kentang Goreng dan Sosis', 2, 'enak', 17000, 'snack.jpg'),
(18, 'Roti Bakar', 2, 'enak', 12000, 'snack2.jpg'),
(19, 'Roti Kupi', 2, 'enak', 6000, 'Rotikupi.WEBP'),
(20, 'Mie Tek-tek', 3, 'enak', 17000, 'mie-tek-tek.WEBP'),
(21, 'Dismum', 3, 'enak', 17000, 'Dimsum.WEBP'),
(22, 'Nasgor', 3, 'enak', 16000, 'nophoto.png'),
(23, 'nasi sayur', 3, 'best', 17000, 'nophoto.png'),
(24, 'mie goreng', 3, 'best seller', 17000, 'nophoto.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int NOT NULL,
  `id_menu` int NOT NULL,
  `nama_menu` varchar(256) NOT NULL,
  `foto_menu` varchar(255) NOT NULL,
  `jumlah` int NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `harga` decimal(10,2) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_menu`, `nama_menu`, `foto_menu`, `jumlah`, `total_harga`, `tgl_transaksi`, `harga`, `nama_pengirim`, `nomor_rekening`) VALUES
(7, 14, 'Ultimate Mango', 'Img/ultimate mango.WEBP', 1, 23000.00, '2025-01-23 19:29:02', 17000.00, 'bila', '56565656'),
(8, 19, 'Roti Kupi', 'Img/Rotikupi.WEBP', 1, 23000.00, '2025-01-23 19:29:02', 6000.00, 'bila', '56565656'),
(9, 17, 'Kentang Goreng dan Sosis', 'Img/snack.jpg', 1, 34000.00, '2025-01-23 21:04:29', 17000.00, 'mina', '56565656'),
(10, 21, 'Dismum', 'Img/Dimsum.WEBP', 1, 34000.00, '2025-01-23 21:04:29', 17000.00, 'mina', '56565656'),
(11, 3, 'Green Thai Tea', 'Img/green-thai-tea.WEBP', 1, 34000.00, '2025-01-24 02:14:51', 17000.00, 'samuel', '56565656'),
(12, 14, 'Ultimate Mango', 'Img/ultimate mango.WEBP', 1, 34000.00, '2025-01-24 02:14:51', 17000.00, 'samuel', '56565656'),
(13, 1, 'Nagen Orange', 'Img/nagen-oranje.WEBP', 1, 32000.00, '2025-01-24 03:14:46', 15000.00, 'samuel', '5656565'),
(14, 3, 'Green Thai Tea', 'Img/green-thai-tea.WEBP', 1, 32000.00, '2025-01-24 03:14:46', 17000.00, 'samuel', '5656565'),
(15, 1, 'Nagen Orange', 'Img/nagen-oranje.WEBP', 1, 32000.00, '2025-01-25 03:38:12', 15000.00, 'Sabil', '5656565656'),
(16, 23, 'nasi sayur', 'Img/nophoto.png', 1, 32000.00, '2025-01-25 03:38:12', 17000.00, 'Sabil', '5656565656'),
(17, 2, 'Cofee Latte', 'Img/cofee-latte.WEBP', 1, 33000.00, '2025-01-25 03:43:06', 16000.00, 'Nina', '5656565656'),
(18, 17, 'Kentang Goreng dan Sosis', 'Img/snack.jpg', 1, 33000.00, '2025-01-25 03:43:06', 17000.00, 'Nina', '5656565656'),
(19, 2, 'Cofee Latte', 'Img/cofee-latte.WEBP', 1, 33000.00, '2025-01-25 03:43:09', 16000.00, 'Nina', '5656565656'),
(20, 17, 'Kentang Goreng dan Sosis', 'Img/snack.jpg', 1, 33000.00, '2025-01-25 03:43:09', 17000.00, 'Nina', '5656565656'),
(21, 16, 'French Fries', 'Img/french-fries.WEBP', 1, 32000.00, '2025-01-25 03:46:05', 15000.00, 'ilham', '5656565656'),
(22, 17, 'Kentang Goreng dan Sosis', 'Img/snack.jpg', 1, 32000.00, '2025-01-25 03:46:05', 17000.00, 'ilham', '5656565656'),
(23, 9, 'Naturan Green', 'Img/naturan-green.WEBP', 1, 32000.00, '2025-01-25 03:49:10', 15000.00, 'Diah ', '5656565656'),
(24, 7, 'Mocha', 'Img/mocha.WEBP', 1, 32000.00, '2025-01-25 03:49:10', 17000.00, 'Diah ', '5656565656'),
(25, 13, 'Thai', 'Img/thai.WEBP', 1, 27000.00, '2025-01-25 03:55:44', 12000.00, 'Ahmad', '5656565656'),
(26, 16, 'French Fries', 'Img/french-fries.WEBP', 1, 27000.00, '2025-01-25 03:55:44', 15000.00, 'Ahmad', '5656565656'),
(27, 3, 'Green Thai Tea', 'Img/green-thai-tea.WEBP', 1, 17000.00, '2025-01-25 04:00:40', 17000.00, 'ismi', '5656565656'),
(28, 5, 'Honey Lemon', 'Img/honey-lemon.WEBP', 1, 15000.00, '2025-01-25 04:02:26', 15000.00, 'surya', '5656565656'),
(29, 2, 'Cofee Latte', 'Img/cofee-latte.WEBP', 1, 16000.00, '2025-01-25 04:05:22', 16000.00, 'nanda', '5656565656');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `reset_hash` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_message` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ranaz@gmail.com', 'ranaz', NULL, 'default.svg', '$2y$10$Kt6FYFsIb2EB8JDYI0/r7OgyIulJyONCVNG3iJcEb0vLdZmi1AGO.', NULL, NULL, NULL, 'd29b5c0224c8b881826f58d3c68838ad', NULL, NULL, 0, 0, '2025-01-16 03:40:53', '2025-01-16 03:40:53', NULL),
(2, 'bila6@gmail.com', 'bila', NULL, 'default.svg', '$2y$10$LFFwHO6gdFewsXujLNKnx.OOGr3VOxFcnYwL6B0cWPZi6T1xcuTKa', NULL, NULL, NULL, '45224d04c721051c78d4daea2ed0382e', NULL, NULL, 0, 0, '2025-01-16 03:42:41', '2025-01-16 03:42:41', NULL),
(3, 'nabilaimina@gmail.com', 'bilaa', NULL, 'default.svg', '$2y$10$AnK6ObcABnbfj35tFzlJa./9fSIOQtlEYOWmTn9tPOvzcWv2hGzz6', NULL, NULL, NULL, 'b50ac2a4a8c851cad7137cf0ec335995', NULL, NULL, 1, 0, '2025-01-16 03:47:20', '2025-01-16 03:47:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `menu` (`id_menu`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
