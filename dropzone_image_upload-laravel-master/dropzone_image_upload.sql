-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 06:03 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropzone_image_upload`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_uploads`
--

CREATE TABLE `image_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_uploads`
--

INSERT INTO `image_uploads` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, '1637729674621.jpg', '2021-11-23 23:24:36', '2021-11-23 23:24:36'),
(2, '1637729674625.jpg', '2021-11-23 23:24:37', '2021-11-23 23:24:37'),
(3, '1637729674634.png', '2021-11-23 23:24:38', '2021-11-23 23:24:38'),
(4, '1637729674636.jpg', '2021-11-23 23:24:39', '2021-11-23 23:24:39'),
(5, '1637729674637.jpg', '2021-11-23 23:24:39', '2021-11-23 23:24:39'),
(6, '1637729674639.jpg', '2021-11-23 23:24:40', '2021-11-23 23:24:40'),
(7, '1637729685197.jpg', '2021-11-23 23:24:45', '2021-11-23 23:24:45'),
(8, '1637729696506.jpg', '2021-11-23 23:24:57', '2021-11-23 23:24:57'),
(9, '1637729711729.jpg', '2021-11-23 23:25:12', '2021-11-23 23:25:12'),
(10, '1637729717283.jpg', '2021-11-23 23:25:17', '2021-11-23 23:25:17'),
(11, '1637729717287.jpg', '2021-11-23 23:25:18', '2021-11-23 23:25:18'),
(12, '1637729717289.jpg', '2021-11-23 23:25:19', '2021-11-23 23:25:19'),
(13, '1637729729043.jpg', '2021-11-23 23:25:29', '2021-11-23 23:25:29'),
(14, '1637729750371.jpg', '2021-11-23 23:25:50', '2021-11-23 23:25:50'),
(15, '1637729750374.jpg', '2021-11-23 23:25:51', '2021-11-23 23:25:51'),
(16, '1637729750379.jpg', '2021-11-23 23:25:51', '2021-11-23 23:25:51'),
(17, '1637729750381.jpg', '2021-11-23 23:25:52', '2021-11-23 23:25:52'),
(18, '1637729750384.jpg', '2021-11-23 23:25:53', '2021-11-23 23:25:53'),
(19, '1637729750387.jpg', '2021-11-23 23:25:53', '2021-11-23 23:25:53'),
(20, '1637729750389.jpg', '2021-11-23 23:25:54', '2021-11-23 23:25:54'),
(21, '1637729750392.jpg', '2021-11-23 23:25:55', '2021-11-23 23:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_28_201459_create_image_uploads_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_uploads`
--
ALTER TABLE `image_uploads`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_uploads`
--
ALTER TABLE `image_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
