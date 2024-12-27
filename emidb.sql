-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 12:46 PM
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
-- Database: `emidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `emi_details`
--

CREATE TABLE `emi_details` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `2018-06` varchar(50) DEFAULT '0.0',
  `2018-07` varchar(50) DEFAULT '0.0',
  `2018-08` varchar(50) DEFAULT '0.0',
  `2018-09` varchar(50) DEFAULT '0.0',
  `2018-10` varchar(50) DEFAULT '0.0',
  `2018-11` varchar(50) DEFAULT '0.0',
  `2018-12` varchar(50) DEFAULT '0.0',
  `2019-01` varchar(50) DEFAULT '0.0',
  `2019-02` varchar(50) DEFAULT '0.0',
  `2019-03` varchar(50) DEFAULT '0.0',
  `2019-04` varchar(50) DEFAULT '0.0',
  `2019-05` varchar(50) DEFAULT '0.0',
  `2019-06` varchar(50) DEFAULT '0.0',
  `2019-07` varchar(50) DEFAULT '0.0',
  `2019-08` varchar(50) DEFAULT '0.0',
  `2017-11` varchar(50) DEFAULT '0.0',
  `2017-12` varchar(50) DEFAULT '0.0',
  `2018-01` varchar(50) DEFAULT '0.0',
  `2018-02` varchar(50) DEFAULT '0.0',
  `2018-03` varchar(50) DEFAULT '0.0',
  `2018-04` varchar(50) DEFAULT '0.0',
  `2018-05` varchar(50) DEFAULT '0.0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emi_details`
--

INSERT INTO `emi_details` (`id`, `client_id`, `updated_at`, `2018-06`, `2018-07`, `2018-08`, `2018-09`, `2018-10`, `2018-11`, `2018-12`, `2019-01`, `2019-02`, `2019-03`, `2019-04`, `2019-05`, `2019-06`, `2019-07`, `2019-08`, `2017-11`, `2017-12`, `2018-01`, `2018-02`, `2018-03`, `2018-04`, `2018-05`) VALUES
(1, 1001, '2024-12-27 17:09:32', '129.17', '129.17', '129.17', '129.17', '129.17', '129.17', '129.17', '129.17', '129.17', '129.17', '129.17', '129.13', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(2, 1003, '2024-12-27 17:09:32', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '978.85', '978.85', '978.85', '978.85', '978.85', '978.85', '978.84', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(3, 1005, '2024-12-27 17:09:32', '105.88', '105.88', '105.88', '105.88', '105.88', '105.88', '105.88', '105.88', '105.88', '105.93', '0.0', '0.0', '0.0', '0.0', '0.0', '105.88', '105.88', '105.88', '105.88', '105.88', '105.88', '105.88');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_details`
--

CREATE TABLE `loan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clientid` int(11) NOT NULL,
  `num_of_payment` int(11) NOT NULL,
  `first_payment_date` date NOT NULL,
  `last_payment_date` date NOT NULL,
  `loan_amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_details`
--

INSERT INTO `loan_details` (`id`, `clientid`, `num_of_payment`, `first_payment_date`, `last_payment_date`, `loan_amount`, `created_at`, `updated_at`) VALUES
(10, 1001, 12, '2018-06-29', '2019-05-29', 1550.00, NULL, NULL),
(11, 1003, 7, '2019-02-15', '2019-08-15', 6851.94, NULL, NULL),
(12, 1005, 17, '2017-11-09', '2019-03-09', 1800.01, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_12_17_113707_create_loan_detail_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'developer', 'admin@g.com', '2024-12-17 07:09:35', '$2y$12$XqDsaWzGFj2e1SaKYKIuxOhJeEJm86oTgvRsUABfvAcMpg/IhohnW', 'FaqmWwvSUgFnNndasBRnowcMufQnLHm1GVzt1pAINYtlc74WvzwVWE7ymp0g', '2024-12-17 07:09:35', '2024-12-17 07:09:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emi_details`
--
ALTER TABLE `emi_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loan_details`
--
ALTER TABLE `loan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for table `emi_details`
--
ALTER TABLE `emi_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_details`
--
ALTER TABLE `loan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
