-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 10:48 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanjoo_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `nama`, `umur`, `created_at`, `updated_at`) VALUES
(3, 'Danial1', '11', '2020-03-07 11:23:40', '2020-03-09 00:25:17'),
(4, 'Danial2', '2', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(5, 'Danial3', '3', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(6, 'Danial4', '4', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(7, 'Danial5', '5', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(8, 'Danial6', '6', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(9, 'Danial7', '7', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(10, 'Danial8', '8', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(11, 'Danial9', '9', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(12, 'Danial10', '10', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(13, 'Danial11', '11', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(14, 'Danial12', '12', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(15, 'Danial13', '13', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(16, 'Danial14', '14', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(17, 'Danial15', '15', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(18, 'Danial16', '16', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(19, 'Danial17', '17', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(20, 'Danial18', '18', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(21, 'Danial19', '19', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(22, 'Danial20', '20', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(23, 'Danial21', '21', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(24, 'Danial22', '22', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(25, 'Danial23', '23', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(26, 'Danial24', '24', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(27, 'Danial25', '25', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(28, 'Danial26', '26', '2020-03-07 11:23:40', '2020-03-07 11:23:40'),
(29, 'Danial27', '27', '2020-03-07 11:23:40', '2020-03-07 11:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_07_164525_create_cruds_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tamu1', 'tamu1', 'tamu1@tamu1.com', NULL, '$2y$10$Q0o0erxYPiM2OaaQ2JrOFuHokoOca0VWR6vFrlgHpBtPv2BZjA2A2', NULL, '2020-03-06 03:18:41', '2020-03-06 03:18:41'),
(2, 'tamu2', 'tamu2', 'tamu2@tamu2.com', NULL, '$2y$10$DM1CoZv3JrYpYzZMOjBXf.GLHX0cPgOiElp.5baK31QBteVF5JEou', NULL, '2020-03-06 03:44:19', '2020-03-06 03:44:19'),
(3, 'tamu3', 'tamu3', 'tamu3@tamu3.com', NULL, '$2y$10$5Q9LjL3OfqRumAnuF3sgVub32I/Av97TYvLf9kPkd2yos4IhafBFq', NULL, '2020-03-06 03:46:03', '2020-03-06 03:46:03'),
(4, 'tamu4', 'tamu4', 'tamu4@tamu4.com', NULL, '$2y$10$Ccdtv5XAynmxQMvP4uMIm.3SxD/8pkkK1ocONm8YuauZ9dFf9PVai', NULL, '2020-03-06 03:49:00', '2020-03-06 03:49:00'),
(5, 'Tamu5', 'tamu5', 'tamu5@tamu5', NULL, '$2y$10$2hlExpDk3mBE8mn8ugTF8ey774kVB4DcXOEz9z.BJpJbJrzkJaujm', NULL, '2020-03-06 22:15:15', '2020-03-06 22:15:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
