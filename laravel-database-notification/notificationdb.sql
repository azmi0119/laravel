-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 04:09 PM
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
-- Database: `notificationdb`
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
(4, '2021_11_25_130933_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0dbe72ea-539e-4a30-9c12-d211a08f3c08', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:26', '2021-11-27 02:44:26'),
('11dbf319-d81f-4f95-906b-09f433aa8757', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 02:11:51', '2021-11-27 01:55:54', '2021-11-27 02:11:51'),
('136aaf06-c0b8-4722-97dd-64c397f9208a', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 02:43:45', '2021-11-27 02:19:38', '2021-11-27 02:43:45'),
('1a3a858c-4a8b-4f2e-8913-e86b732a0c8e', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 01:54:16', '2021-11-27 01:54:13', '2021-11-27 01:54:16'),
('209c45de-2000-4511-a38c-524c5038f07f', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:17', '2021-11-27 02:44:17'),
('299316ac-c56c-4bef-b6e6-9347830aeb84', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 02:11:50', '2021-11-27 01:57:43', '2021-11-27 02:11:50'),
('385b1273-62bc-4f9f-9a65-f498f0b69153', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 03:03:35', '2021-11-27 03:03:35'),
('39df495b-4737-4850-b04c-32bae83872c5', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 6, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 03:29:05', '2021-11-27 03:06:58', '2021-11-27 03:29:05'),
('3b685c7a-7a3f-4790-b62e-a1cd26c1ae5b', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:22', '2021-11-27 02:44:22'),
('3bc187de-9251-467a-90f2-03abae23609d', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 1, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 01:38:15', '2021-11-27 01:35:34', '2021-11-27 01:38:15'),
('3c3a0cc9-86f0-4e59-a49e-c1b17e9485e9', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 1, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 01:38:15', '2021-11-27 01:35:29', '2021-11-27 01:38:15'),
('41788dc9-210d-4c24-a0e8-4d024e4896ed', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 03:03:23', '2021-11-27 03:03:23'),
('465cbd3f-fecf-44d5-85a5-0ec5d47c8e3d', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 02:11:50', '2021-11-27 02:11:37', '2021-11-27 02:11:50'),
('46d61180-7068-4d20-9550-385c3056b78f', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 02:11:50', '2021-11-27 02:11:41', '2021-11-27 02:11:50'),
('4a194856-7741-4647-989b-a20d424168cb', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 03:03:25', '2021-11-27 03:03:25'),
('5142bec8-433b-4f16-8cd0-b77d07dbbe89', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 6, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 03:29:12', '2021-11-27 03:29:12'),
('5904e56d-a79f-49b1-81da-11000ebab4f7', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 6, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 03:29:05', '2021-11-27 03:06:55', '2021-11-27 03:29:05'),
('5b389364-fe8f-49ad-95cd-9420f470c440', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 02:43:46', '2021-11-27 02:11:54', '2021-11-27 02:43:46'),
('61b0a189-8a71-48b0-bfc3-d0f06dcb4a9e', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:11', '2021-11-27 02:44:11'),
('62dec663-418b-498a-8803-89fddebaf859', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 02:43:45', '2021-11-27 02:29:56', '2021-11-27 02:43:45'),
('6934c99e-0f7b-4965-bfaa-977873ab3f94', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 02:11:50', '2021-11-27 01:58:22', '2021-11-27 02:11:50'),
('83ac2424-6613-4f95-993b-6775a71a8517', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 03:03:24', '2021-11-27 03:03:24'),
('8c7f028f-6bce-490f-b2bb-00e22b27a195', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 01:54:16', '2021-11-27 01:54:10', '2021-11-27 01:54:16'),
('9874cbbd-c33b-4110-b833-3980fc303628', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:13', '2021-11-27 02:44:13'),
('9910b5ee-10fa-40eb-9054-4e5b46eb60bc', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 6, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 03:29:16', '2021-11-27 03:29:16'),
('9aef45e3-29e0-4ee3-931d-b24df53628ff', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 01:54:16', '2021-11-27 01:54:05', '2021-11-27 01:54:16'),
('9d703193-26b8-4fee-92b2-fa0b0ad6be92', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 02:43:45', '2021-11-27 02:11:57', '2021-11-27 02:43:45'),
('9f083f77-6090-41d9-a4e4-5c4ae17c2fdb', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:07', '2021-11-27 02:44:07'),
('a097c1ba-09e8-4338-b501-84c5749c9e8e', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 01:54:17', '2021-11-27 01:53:33', '2021-11-27 01:54:17'),
('ad0451d6-d8d6-4352-9a35-5f0277f65934', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 03:03:44', '2021-11-27 03:03:44'),
('b006cfda-b0b4-4fa0-b5a2-872a94a9bc69', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:03', '2021-11-27 02:44:03'),
('c1e8610b-a34b-4df8-b4f3-799e1183aa3e', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 03:03:22', '2021-11-27 03:03:22'),
('c5e4d4f8-7248-4ffc-b29d-0f19dc88ebad', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 1, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 01:38:15', '2021-11-27 01:35:31', '2021-11-27 01:38:15'),
('dec90eea-a0e2-4fe5-8bc1-4b8bfc1cdcc7', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 02:43:45', '2021-11-27 02:12:00', '2021-11-27 02:43:45'),
('e09f1a7d-862b-48b1-9bc2-9d1555107aae', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:20', '2021-11-27 02:44:20'),
('e30be96f-db84-46e8-8aba-af37afd7704f', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 1, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 01:38:15', '2021-11-27 01:35:12', '2021-11-27 01:38:15'),
('e636fd6f-b658-4ae2-871d-2f5922a9a5ce', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:09', '2021-11-27 02:44:09'),
('e990db7e-4b50-41e6-bbd3-72538bde3813', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 01:54:16', '2021-11-27 01:54:08', '2021-11-27 01:54:16'),
('f090a5e0-d30f-43c0-b05d-40090c43d2f3', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:24', '2021-11-27 02:44:24'),
('f23722cc-8733-4f8d-855b-7cc23b8f7c51', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 4, '{\"order_id\":\"Order-20190000151\"}', NULL, '2021-11-27 02:44:15', '2021-11-27 02:44:15'),
('f800ac23-41ac-41ff-83f0-a64081ac454e', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 1, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 01:38:15', '2021-11-27 01:35:33', '2021-11-27 01:38:15'),
('ff98b002-53b8-4016-b527-f21e4cf182e9', 'App\\Notifications\\DatabaseNotification\\DemoNotification', 'App\\User', 6, '{\"order_id\":\"Order-20190000151\"}', '2021-11-27 03:29:05', '2021-11-27 03:07:01', '2021-11-27 03:29:05');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah Shaikh', 'abdullahtech0119@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(4, 'Rafe Shaikh', 'rafe@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(5, 'Afsar Shaikh', 'afsar@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(6, 'Rahil Shaikh', 'rahil@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(7, 'Akhlad Shaikh', 'akhlad@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(8, 'Akbar Shaikh', 'akbar@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(9, 'Ozair Shaikh', 'ozair@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(10, 'Amjad Shaikh', 'amjad@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(11, 'Farhan Shaikh', 'farhan@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(12, 'Naseh Shaikh', 'naseh@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(13, 'Moshahid Shaikh', 'moshahid@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(14, 'Kamar Shaikh', 'kamar@gmail.com', NULL, '$2y$10$LDSJWb3RKMU2coAplYqGK.jDJbi53Jo3BI6/GpHIndh83iQuaGSwC', NULL, '2021-11-26 12:46:51', '2021-11-26 12:46:51'),
(15, 'Jakayla Swaniawski DVM', 'halvorson.gerda@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WzaahfITHd', '2021-11-26 23:52:43', '2021-11-26 23:52:43'),
(16, 'Jocelyn Carter', 'prohaska.demarcus@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tvOI3ix6mA', '2021-11-26 23:52:43', '2021-11-26 23:52:43'),
(17, 'Herminia Breitenberg', 'herman.fletcher@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ViPGzI4SND', '2021-11-26 23:52:43', '2021-11-26 23:52:43'),
(18, 'Jamar Jerde', 'deangelo.lockman@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tEegwR2tSJ', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(19, 'Dr. Dane Skiles', 'emmitt25@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a6cSQ7tpKj', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(20, 'Melyssa Jaskolski DVM', 'emmerich.dovie@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qxHnIgLbDJ', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(21, 'Miss Elza Stokes', 'lilian.pagac@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xvy0NLUemx', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(22, 'Lynn Sauer', 'lacy33@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'p70I0Ka3fJ', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(23, 'Mr. Dale Durgan', 'kris.jerrold@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LexmTL3zUb', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(24, 'Cristian Lakin', 'joany.hackett@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xpa29GsaRx', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(25, 'Gudrun Gerlach IV', 'carmine.leffler@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mCMrfxAUJK', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(26, 'Prof. Pink Lowe', 'koch.rodolfo@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AwyaHyXhKG', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(27, 'Torrance Kirlin', 'helen54@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0uVLu1W38q', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(28, 'Claud Batz', 'howe.lillian@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N3A17MUd7a', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(29, 'Dr. Bartholome O\'Reilly', 'grant.tyra@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bqby15vjJf', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(30, 'Hassie Maggio', 'daniel.jeremie@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SjFDXYVlXs', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(31, 'Garett Prohaska', 'tremblay.bonnie@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6rmIj8aSFS', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(32, 'Garett Torp', 'morar.shanny@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QRepNZCnjM', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(33, 'Kianna Larkin', 'thalvorson@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xhr5XUCKyw', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(34, 'Baylee Schmidt', 'tatyana.stamm@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kvjkqhUcWc', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(35, 'Mable Medhurst', 'otis.eichmann@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oVfzILuchy', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(36, 'Jamel DuBuque', 'francis03@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BXYJQRS0D4', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(37, 'Eve Tillman', 'margret92@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ztigkZou7Y', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(38, 'Buster Stroman', 'sarai.zulauf@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tGPxSVM7aL', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(39, 'Bessie Batz', 'jamir.weber@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hu0cw8WJQX', '2021-11-26 23:52:44', '2021-11-26 23:52:44'),
(40, 'Jerad Connelly PhD', 'schuster.rosetta@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ufV5DnHVhG', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(41, 'Dr. Casimer Flatley', 'mark43@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Pc4VqwX5AH', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(42, 'Blanche Goyette', 'ohauck@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SdM28R53RX', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(43, 'Mrs. Tressa Morissette III', 'paolo.klocko@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Aiap7k9Rgs', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(44, 'Shirley Douglas', 'katelyn26@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RcDlqC9kd5', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(45, 'Jacinthe Waters MD', 'bernier.dayna@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'flYqtzGbjI', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(46, 'Alec Koss Sr.', 'ehaag@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WhieWS1YWM', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(47, 'Layla Emmerich', 'larry.miller@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hiIJAAFHAY', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(48, 'Nayeli Beatty', 'lelah.pfeffer@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TETBtbwUcQ', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(49, 'Orion Schuppe Jr.', 'albertha.kreiger@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NPqziQD8X6', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(50, 'Marshall King', 'kuphal.ettie@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KUNqtcq0bz', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(51, 'Percy Feeney', 'dejon33@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '11zNmMFkza', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(52, 'Jacinto Heidenreich', 'tobin43@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gnXuM78OB4', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(53, 'Winfield Dietrich IV', 'qbruen@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3VvCxjRMpo', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(54, 'Prof. Gage Daniel DDS', 'renee46@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vD5gAOxj6y', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(55, 'Eladio Bailey', 'robin44@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jftZ1bZILU', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(56, 'Camilla Watsica', 'fermin.murphy@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XNYMpkUCpe', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(57, 'Gregg Emard', 'quigley.isidro@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mLAOrmZyNm', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(58, 'Jordy Runolfsdottir', 'yabshire@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tmDfNfvcYg', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(59, 'Adelle Hammes Sr.', 'shannon98@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NSgEOGQjlR', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(60, 'Kylee Spencer', 'jeanette.rowe@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'SYw1abQDsK', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(61, 'Kristin Leffler IV', 'rsimonis@example.net', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yNmk60Xazk', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(62, 'Fletcher Macejkovic', 'rogahn.heath@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6zFaKVJaQq', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(63, 'Deborah Kerluke', 'stanton.eva@example.com', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VDTxnSCixc', '2021-11-26 23:52:45', '2021-11-26 23:52:45'),
(64, 'Georgiana Bednar MD', 'pollich.perry@example.org', '2021-11-26 23:52:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 's3qfHDbYS1', '2021-11-26 23:52:45', '2021-11-26 23:52:45');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
