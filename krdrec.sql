-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 01:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krdrec`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cafe', NULL, NULL),
(3, 'Restaurant', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`post_id`, `category_id`) VALUES
(22, 1),
(23, 1),
(25, 3),
(27, 1),
(27, 3);

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
(4, '2021_02_21_124110_create_posts_table', 2),
(5, '2021_02_21_124430_create_categories_table', 3),
(6, '2021_02_21_124601_create_category_post_table', 4),
(7, '2021_02_21_125143_create_photos_table', 5),
(8, '2021_02_21_125241_create_photo_post_table', 6);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'You Can Add Here Image Title',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'You Can Add Here Image Description',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1613929463-m2YXJJ6Wd8-barb.jpg', '2021-02-21 14:44:23', '2021-02-21 14:44:23'),
(3, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1613930570-oyRgigCdFu-lai.jpg', '2021-02-21 15:02:50', '2021-02-21 15:02:50'),
(4, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1613933589-YUedjhXc2a-moka.jpg', '2021-02-21 15:53:09', '2021-02-21 15:53:09'),
(5, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614090131-PTdtuVQUqF-lai.jpg', '2021-02-23 11:22:11', '2021-02-23 11:22:11'),
(6, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614090183-ovsrUPAzyI-lai.jpg', '2021-02-23 11:23:03', '2021-02-23 11:23:03'),
(7, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614090547-TdfnAhudTF-barb.jpg', '2021-02-23 11:29:08', '2021-02-23 11:29:08'),
(8, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614090556-Jg4cSKHqGZ-lai.jpg', '2021-02-23 11:29:16', '2021-02-23 11:29:16'),
(9, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614091027-ohLdkmr4P7-barb.jpg', '2021-02-23 11:37:07', '2021-02-23 11:37:07'),
(10, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614091836-9bUM0qNVkH-barb.jpg', '2021-02-23 11:50:36', '2021-02-23 11:50:36'),
(11, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614106692-CcIb2nPVf7-barb.jpg', '2021-02-23 15:58:13', '2021-02-23 15:58:13'),
(12, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614106825-gFBKuQoeMB-barb.jpg', '2021-02-23 16:00:25', '2021-02-23 16:00:25'),
(13, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614109277-2R1SDhHA4v-lai.jpg', '2021-02-23 16:41:17', '2021-02-23 16:41:17'),
(14, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614174560-4ryAqeMRJR-barb.jpg', '2021-02-24 10:49:20', '2021-02-24 10:49:20'),
(15, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614175312-AIwEJvvgEm-diwan.jpg', '2021-02-24 11:01:52', '2021-02-24 11:01:52'),
(16, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614183997-8dGbofPWHz-moka.jpg', '2021-02-24 13:26:37', '2021-02-24 13:26:37'),
(17, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614184025-0YM4nACoAV-barb.jpg', '2021-02-24 13:27:05', '2021-02-24 13:27:05'),
(18, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614184041-RsUodMsB5k-diwan.jpg', '2021-02-24 13:27:21', '2021-02-24 13:27:21'),
(19, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614184124-3QcdjVFQ6L-diw.jpg', '2021-02-24 13:28:44', '2021-02-24 13:28:44'),
(20, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614184367-sgshgBBmgH-lai awk.jpg', '2021-02-24 13:32:47', '2021-02-24 13:32:47'),
(21, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614184443-ZYp89cnDPN-lai lawk.jpg', '2021-02-24 13:34:03', '2021-02-24 13:34:03'),
(22, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614184471-6xvnlTB0Vu-barb.jpg', '2021-02-24 13:34:31', '2021-02-24 13:34:31'),
(23, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614184554-tM7yuvM9Bk-134751696_3996512457046508_6941308932082488568_o.jpg', '2021-02-24 13:35:54', '2021-02-24 13:35:54'),
(24, 'You Can Add Here Image Title', 'You Can Add Here Image Description', '1614361245-OB9M1WXPpQ-2.png', '2021-02-26 14:40:46', '2021-02-26 14:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `photo_post`
--

CREATE TABLE `photo_post` (
  `photo_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_post`
--

INSERT INTO `photo_post` (`photo_id`, `post_id`) VALUES
(16, 22),
(17, 23),
(19, 25),
(23, 27);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `view_count`, `created_at`, `updated_at`) VALUES
(22, 'Moka & More', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, '2021-02-24 13:26:37', '2021-02-24 13:26:37'),
(23, 'Barbera', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, '2021-02-24 13:27:05', '2021-02-24 13:27:05'),
(25, 'Diwan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, '2021-02-24 13:28:44', '2021-02-24 13:28:44'),
(27, 'Lai Lawk', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, '2021-02-24 13:34:03', '2021-02-24 13:34:03');

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
(1, 'Pesha', 'peshrawhasan@outlook.com', NULL, '$2y$10$.rpCEs58aXTKwgcMFyY2xechIWUqlmgK8EClbE.6HbT2fy6I8eDJK', NULL, '2021-02-21 09:28:55', '2021-02-21 09:28:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD KEY `category_post_post_id_foreign` (`post_id`),
  ADD KEY `category_post_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `photos_image_unique` (`image`);

--
-- Indexes for table `photo_post`
--
ALTER TABLE `photo_post`
  ADD KEY `photo_post_photo_id_foreign` (`photo_id`),
  ADD KEY `photo_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photo_post`
--
ALTER TABLE `photo_post`
  ADD CONSTRAINT `photo_post_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `photo_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
