-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 08:02 AM
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
-- Database: `queueable_mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `crontest`
--

CREATE TABLE `crontest` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crontest`
--

INSERT INTO `crontest` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(2, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(3, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(4, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(5, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(6, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(7, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(8, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(9, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(10, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(11, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(12, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(13, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL),
(14, 'Abdullah', 'abdullah@gmail.com', '7080183384', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '78536ab1-dcfd-48f8-b96c-821ce65abbef', 'database', 'default', '{\"uuid\":\"78536ab1-dcfd-48f8-b96c-821ce65abbef\",\"displayName\":\"App\\\\Jobs\\\\SendEmailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendEmailJob\",\"command\":\"O:21:\\\"App\\\\Jobs\\\\SendEmailJob\\\":11:{s:10:\\\"\\u0000*\\u0000details\\\";a:1:{s:5:\\\"email\\\";s:20:\\\"your_email@gmail.com\\\";}s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Error: Class \'App\\Jobs\\SendEmailTest\' not found in C:\\xampp\\htdocs\\queue-mail-with-laravel\\app\\Jobs\\SendEmailJob.php:35\nStack trace:\n#0 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendEmailJob->handle()\n#1 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendEmailJob))\n#7 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendEmailJob))\n#8 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(120): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendEmailJob), false)\n#10 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendEmailJob))\n#11 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendEmailJob))\n#12 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendEmailJob))\n#14 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(329): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->runNextJob(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#20 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#26 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\symfony\\console\\Command\\Command.php(299): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\symfony\\console\\Application.php(978): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\symfony\\console\\Application.php(295): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\queue-mail-with-laravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 {main}', '2021-11-20 02:52:01'),
(2, '86cf8de4-404c-475a-ac0b-9d3aa8c79861', 'database', 'default', '{\"uuid\":\"86cf8de4-404c-475a-ac0b-9d3aa8c79861\",\"displayName\":\"App\\\\Jobs\\\\SendEmailJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendEmailJob\",\"command\":\"O:21:\\\"App\\\\Jobs\\\\SendEmailJob\\\":11:{s:10:\\\"\\u0000*\\u0000details\\\";a:1:{s:5:\\\"email\\\";s:20:\\\"your_email@gmail.com\\\";}s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'InvalidArgumentException: View [emails.test] not found. in C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php:137\nStack trace:\n#0 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths(\'emails.test\', Array)\n#1 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Factory.php(138): Illuminate\\View\\FileViewFinder->find(\'emails.test\')\n#2 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(382): Illuminate\\View\\Factory->make(\'emails.test\', Array)\n#3 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(355): Illuminate\\Mail\\Mailer->renderView(\'emails.test\', Array)\n#4 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(273): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'emails.test\', NULL, NULL, Array)\n#5 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(187): Illuminate\\Mail\\Mailer->send(\'emails.test\', Array, Object(Closure))\n#6 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#7 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(188): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#8 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#9 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(258): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\SendEmailTest))\n#10 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\SendEmailTest))\n#11 C:\\xampp\\htdocs\\queue-mail-with-laravel\\app\\Jobs\\SendEmailJob.php(38): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\SendEmailTest))\n#12 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendEmailJob->handle()\n#13 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#18 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendEmailJob))\n#19 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendEmailJob))\n#20 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#21 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(120): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendEmailJob), false)\n#22 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(128): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendEmailJob))\n#23 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendEmailJob))\n#24 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendEmailJob))\n#26 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#27 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Jobs\\Job->fire()\n#28 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(378): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#29 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(329): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#30 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(117): Illuminate\\Queue\\Worker->runNextJob(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#31 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#32 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#33 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#34 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#35 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#36 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(653): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#37 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(136): Illuminate\\Container\\Container->call(Array)\n#38 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\symfony\\console\\Command\\Command.php(299): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#39 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#40 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\symfony\\console\\Application.php(978): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\symfony\\console\\Application.php(295): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(94): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 C:\\xampp\\htdocs\\queue-mail-with-laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 C:\\xampp\\htdocs\\queue-mail-with-laravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 {main}', '2021-11-20 02:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_20_081719_create_jobs_table', 1),
(6, '2021_11_20_175547_create_crontest_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(6, 'Afsar', 'afsar@gmail.com', NULL, 'admin', NULL, '2021-11-01 08:42:48', '2021-11-16 08:42:48'),
(7, 'Ali Akbar', 'akbar@gmail.com', NULL, 'admin', NULL, '2021-11-01 08:42:48', '2021-11-16 08:42:48'),
(8, 'Farhan', 'farhan@gmail.com', NULL, 'admin', NULL, '2021-11-01 08:42:48', '2021-11-16 08:42:48'),
(9, 'Wakar', 'wakar@gmail.com', NULL, 'admin', NULL, '2021-11-01 08:42:48', '2021-11-16 08:42:48'),
(10, 'Kamar', 'kamar@gmail.com', NULL, 'admin', NULL, '2021-11-01 08:42:48', '2021-11-16 08:42:48'),
(11, 'Mohammad', 'mohammad@gmail.com', NULL, 'admin', NULL, '2021-11-01 08:42:48', '2021-11-16 08:42:48'),
(12, 'Arham', 'arhan@gmail.com', NULL, 'admin', NULL, '2021-11-01 08:42:48', '2021-11-16 08:42:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crontest`
--
ALTER TABLE `crontest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `crontest`
--
ALTER TABLE `crontest`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
