-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 10:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmhapu_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course` varchar(191) DEFAULT NULL,
  `session` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `course`, `session`, `created_at`, `updated_at`) VALUES
(9, NULL, '2008 - 2009', '2024-11-29 08:04:03', '2025-01-04 01:22:40'),
(10, NULL, '2009 - 2010', '2024-11-29 08:04:29', '2025-01-04 01:23:21'),
(11, NULL, '2010 - 2011', '2024-11-29 08:05:07', '2024-11-29 08:05:07'),
(12, NULL, '2011 - 2012', '2024-11-29 08:05:26', '2024-11-29 08:05:26'),
(13, NULL, '2012 - 2013', '2024-11-29 08:05:56', '2024-11-29 08:05:56'),
(14, NULL, '2013 - 2014', '2024-11-29 08:07:07', '2024-11-29 08:07:07'),
(15, NULL, '2014 - 2015', '2024-11-29 08:07:26', '2024-11-29 08:07:26'),
(16, NULL, '2015 - 2016', '2024-11-29 08:07:38', '2024-11-29 08:07:38'),
(17, NULL, '2016 - 2017', '2024-11-29 08:08:07', '2024-11-29 08:08:07'),
(18, NULL, '2017 - 2018', '2024-11-29 08:08:35', '2024-11-29 08:08:35'),
(19, NULL, '2018 - 2019', '2024-11-29 08:08:49', '2024-11-29 08:08:49'),
(20, NULL, '2019 - 2020', '2024-11-29 08:08:58', '2024-11-29 08:08:58'),
(21, NULL, '2020 - 2021', '2024-11-29 08:09:13', '2024-11-29 08:09:13'),
(22, NULL, '2021 - 2022', '2024-11-29 08:09:23', '2024-11-29 08:09:23'),
(23, NULL, '2022 - 2023', '2024-11-29 08:09:34', '2024-11-29 08:09:34'),
(24, NULL, '2023 - 2024', '2024-11-29 08:10:01', '2024-11-29 08:10:01'),
(27, 'vdsfvds', '2000-2002', '2025-01-04 01:23:27', '2025-01-04 01:23:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
