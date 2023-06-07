-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 09:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpo-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `button_styles`
--

CREATE TABLE `button_styles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `btn_radius` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `button_styles`
--

INSERT INTO `button_styles` (`id`, `name`, `btn_radius`) VALUES
(1, 'Not rounded', 'rounded-none'),
(2, 'Rounded button', 'rounded-full'),
(3, 'semi rounded button', 'rounded-md');

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
-- Table structure for table `flexbox_justifications`
--

CREATE TABLE `flexbox_justifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `justification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `font_sizes`
--

CREATE TABLE `font_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fontsize` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'd076ae54-f7d2-45bf-92c1-f041911dcd3e', 'singleimage', '500x500', '500x500.jpg', 'image/jpeg', 'public_images', 'public_images', 20325, '[]', '[]', '[]', '[]', 1, '2023-05-09 08:03:53', '2023-05-09 08:03:53'),
(2, 'App\\Models\\User', 3, '3a52ee15-bdd3-49a2-b4d5-3e1bfde7379e', 'singleimage', '1811836', '1811836.webp', 'image/webp', 'public_images', 'public_images', 139134, '[]', '[]', '[]', '[]', 2, '2023-05-09 08:05:23', '2023-05-09 08:05:23'),
(3, 'App\\Models\\User', 3, '70e62e3f-9af0-4473-a617-6b8993d55a61', 'singleimage', '2944933', '2944933.jpg', 'image/jpeg', 'public', 'public', 235983, '[]', '[]', '[]', '[]', 3, '2023-05-09 10:40:25', '2023-05-09 10:40:25'),
(4, 'App\\Models\\User', 3, 'f8cb5018-31ba-45e5-b21b-17bb27dcf1cd', 'singleimage', '834d1930d0b42d0b0ef3e8601353729433b330de', '834d1930d0b42d0b0ef3e8601353729433b330de.jpeg', 'image/jpeg', 'public', 'public', 412363, '[]', '[]', '[]', '[]', 4, '2023-05-09 18:13:56', '2023-05-09 18:13:56'),
(5, 'App\\Models\\User', 3, '51ed797c-a3fa-42c6-a11f-fb5199930319', 'singleimage', 'pict1', 'pict1.jpg', 'image/jpeg', 'public_images', 'public_images', 82763, '[]', '[]', '[]', '[]', 5, '2023-05-09 18:26:37', '2023-05-09 18:26:37'),
(6, 'App\\Models\\User', 3, '51c057d4-cb27-4536-9234-e816758030e8', 'singleimage', 'pict2', 'pict2.jpg', 'image/jpeg', 'public_images', 'public_images', 543372, '[]', '[]', '[]', '[]', 6, '2023-05-09 18:27:00', '2023-05-09 18:27:00'),
(7, 'App\\Models\\User', 3, '3f7e2d1b-dbb0-42b9-b275-74fa45db67c5', 'singleimage', 'pict4', 'pict4.jpg', 'image/jpeg', 'public_images', 'public_images', 582139, '[]', '[]', '[]', '[]', 7, '2023-05-09 18:27:18', '2023-05-09 18:27:18'),
(8, 'App\\Models\\User', 3, '29301905-1d1a-4cba-af23-b7aa88cc075b', 'singleimage', 'pict3', 'pict3.jpg', 'image/jpeg', 'public_images', 'public_images', 729555, '[]', '[]', '[]', '[]', 8, '2023-05-09 18:27:46', '2023-05-09 18:27:46'),
(9, 'App\\Models\\User', 3, '84c427e6-2169-4bb2-b22d-b525e554d361', 'singleimage', 'pict5', 'pict5.jpg', 'image/jpeg', 'public_images', 'public_images', 605123, '[]', '[]', '[]', '[]', 9, '2023-05-09 18:28:03', '2023-05-09 18:28:03'),
(11, 'App\\Models\\User', 3, '192cf762-2323-4bbe-a258-0e2d7656139b', 'pdf', 'Process for the Printing of Identification Card for WMSU employee', 'Process-for-the-Printing-of-Identification-Card-for-WMSU-employee.pdf', 'application/pdf', 'public', 'public', 48174, '[]', '[]', '[]', '[]', 10, '2023-05-09 18:49:41', '2023-05-09 18:49:41'),
(12, 'App\\Models\\User', 3, '80195655-0f0d-4507-9024-1ef7ae130a50', 'pdf', 'WMSUCETSHED2021', 'WMSUCETSHED2021.pdf', 'application/pdf', 'public', 'public', 596404, '[]', '[]', '[]', '[]', 11, '2023-05-09 18:50:40', '2023-05-09 18:50:40'),
(13, 'App\\Models\\User', 5, 'af453739-077f-4d2c-8ca9-d81ce7b9bfd9', 'singleimage', '1180w-600h_111617_things-we-learned-about-coco', '1180w-600h_111617_things-we-learned-about-coco.jpg', 'image/jpeg', 'public_images', 'public_images', 164590, '[]', '[]', '[]', '[]', 12, '2023-05-18 18:34:26', '2023-05-18 18:34:26'),
(17, 'App\\Models\\User', 5, 'b5d5abe2-7977-4217-a438-128b99186f68', 'singleimage', 'istockphoto-1133498023-170667a', 'istockphoto-1133498023-170667a.jpg', 'image/jpeg', 'public_images', 'public_images', 47727, '[]', '[]', '[]', '[]', 13, '2023-05-18 18:43:56', '2023-05-18 18:43:56'),
(18, 'App\\Models\\User', 5, '1b7fb9fc-edab-4cf4-8d18-7c7b34576f5c', 'singleimage', 'istockphoto-518497178-612x612', 'istockphoto-518497178-612x612.jpg', 'image/jpeg', 'public', 'public', 21522, '[]', '[]', '[]', '[]', 14, '2023-05-18 18:49:21', '2023-05-18 18:49:21'),
(19, 'App\\Models\\User', 5, '90ecc69b-43ab-407f-b2be-a42fbc17124e', 'singleimage', 'istockphoto-1065506912-612x612-1', 'istockphoto-1065506912-612x612-1.jpg', 'image/jpeg', 'public', 'public', 45406, '[]', '[]', '[]', '[]', 15, '2023-05-18 19:06:02', '2023-05-18 19:06:02'),
(21, 'App\\Models\\User', 6, '05e5d8bf-1f57-45f8-be97-e3955dd0c4cb', 'singleimage', 'benmar-schmidhuber-gzqRY2EFddg-unsplash-scaled', 'benmar-schmidhuber-gzqRY2EFddg-unsplash-scaled.webp', 'image/webp', 'public_images', 'public_images', 298522, '[]', '[]', '[]', '[]', 16, '2023-05-25 23:01:22', '2023-05-25 23:01:22'),
(22, 'App\\Models\\User', 6, 'a2ff4eb0-ecfb-4346-9688-5fd0b60fc078', 'singleimage', '0_SlHquVRq34q99iHg', '0_SlHquVRq34q99iHg.jpg', 'image/jpeg', 'public_images', 'public_images', 57511, '[]', '[]', '[]', '[]', 17, '2023-05-25 23:01:42', '2023-05-25 23:01:42'),
(23, 'App\\Models\\User', 6, '6284f0cc-b392-42da-938b-d9456bc49667', 'singleimage', 'christ_second_coming_anderson_art', 'christ_second_coming_anderson_art.png', 'image/png', 'public', 'public', 949906, '[]', '[]', '[]', '[]', 18, '2023-05-25 23:02:52', '2023-05-25 23:02:52'),
(24, 'App\\Models\\User', 6, '4b7f4247-8ae7-4f45-884c-902ebacc87a5', 'pdf', 'TRY-LANG', 'TRY-LANG.pdf', 'application/pdf', 'public', 'public', 4158752, '[]', '[]', '[]', '[]', 19, '2023-05-25 23:04:01', '2023-05-25 23:04:01'),
(25, 'App\\Models\\User', 6, '4a3b28ff-6235-478b-bb21-a8b067239180', 'pdf', 'ASAKIL-ATILANO-RICAFORT_ACTIVITY-4-Marketing-plan', 'ASAKIL-ATILANO-RICAFORT_ACTIVITY-4-Marketing-plan.pdf', 'application/pdf', 'public', 'public', 68463, '[]', '[]', '[]', '[]', 20, '2023-05-25 23:05:18', '2023-05-25 23:05:18'),
(26, 'App\\Models\\User', 6, '9b45f824-afe7-45b0-82f0-05cd9151d6eb', 'pdf', 'Topic1-Introduction-1', 'Topic1-Introduction-1.pdf', 'application/pdf', 'public', 'public', 1064840, '[]', '[]', '[]', '[]', 21, '2023-05-25 23:05:59', '2023-05-25 23:05:59'),
(27, 'App\\Models\\User', 6, 'f89b5e7c-65a1-4087-a1da-db48a3885b5d', 'pdf', 'COR-202220232', 'COR-202220232.pdf', 'application/pdf', 'public', 'public', 64966, '[]', '[]', '[]', '[]', 22, '2023-05-31 18:37:41', '2023-05-31 18:37:41'),
(28, 'App\\Models\\User', 6, 'b504f008-0906-4ede-a6b8-0f5ed727f118', 'logo', 'ccslogo', 'ccslogo.jpg', 'image/jpeg', 'public', 'public', 156640, '[]', '[]', '[]', '[]', 23, '2023-05-31 18:52:01', '2023-05-31 18:52:01');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2023_02_19_140030_create_permission_tables', 1),
(4, '2023_02_19_140031_create_users_table', 1),
(5, '2023_02_22_072330_create_media_table', 1),
(6, '2023_02_28_092056_create_processes_table', 1),
(7, '2023_03_02_114340_create_themes_table', 1),
(8, '2023_03_12_112111_create_flexbox_justifications_table', 1),
(9, '2023_03_13_125259_create_pages_table', 1),
(10, '2023_03_19_004355_create_font_sizes_table', 1),
(11, '2023_03_19_005647_create_place_selves_table', 1),
(12, '2023_03_19_020646_create_button_styles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme_id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `path_of_content` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `theme_id`, `page_name`, `path_of_content`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Home', 'Themes/Sample Theme/Homepage.txt', 'Homepage', '2023-05-09 08:03:06', '2023-05-09 08:03:06', NULL),
(2, 2, 'Home', 'Themes/Title of the theme/Homepage.txt', 'Homepage', '2023-05-09 08:05:08', '2023-05-09 08:05:08', NULL),
(3, 1, 'About', 'Themes/Sample Theme/Aboutpage.txt', 'Aboutpage', '2023-05-09 18:19:44', '2023-05-09 18:19:44', NULL),
(4, 1, 'Policy', 'Themes/Sample Theme/Policypage.txt', 'Policypage', '2023-05-09 18:49:30', '2023-05-09 18:49:30', NULL),
(5, 3, 'Home', 'Themes/Example theme/Homepage.txt', 'Homepage', '2023-05-09 20:18:53', '2023-05-09 20:18:53', NULL),
(6, 1, 'Gallery', 'Themes/Sample Theme/Gallerypage.txt', 'Gallerypage', '2023-05-09 20:23:54', '2023-05-09 20:23:54', NULL),
(7, 4, 'Home', 'Themes/hero1/Homepage.txt', 'Homepage', '2023-05-18 18:35:13', '2023-05-18 18:35:13', NULL),
(8, 4, 'Hero', 'Themes/hero1/Heropage.txt', 'Heropage', '2023-05-18 18:48:57', '2023-05-18 18:48:57', NULL),
(9, 5, 'Home', 'Themes/Rham theme/Homepage.txt', 'Homepage', '2023-05-25 23:08:41', '2023-05-25 23:08:41', NULL),
(10, 5, 'Policy', 'Themes/Rham theme/Policypage.txt', 'Policypage', '2023-06-01 19:15:40', '2023-06-01 19:27:55', '2023-06-01 19:27:55'),
(11, 5, 'Gallery', 'Themes/Rham theme/Gallerypage.txt', 'Gallerypage', '2023-06-01 19:16:35', '2023-06-01 19:16:35', NULL),
(12, 5, 'Gallery', 'Themes/Rham theme/Gallerypage.txt', 'Gallerypage', '2023-06-01 19:16:35', '2023-06-01 19:16:35', NULL),
(13, 6, 'Home', 'Themes/Rham 2023 theme/Homepage.txt', 'Homepage', '2023-06-01 22:26:25', '2023-06-01 22:26:25', NULL),
(14, 6, 'Policy', 'Themes/Rham 2023 theme/Policypage.txt', 'Policypage', '2023-06-01 22:31:42', '2023-06-01 22:37:15', '2023-06-01 22:37:15'),
(15, 7, 'Home', 'Themes/Final theme/Homepage.txt', 'Homepage', '2023-06-01 22:46:46', '2023-06-01 22:46:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sample@email.com', '$2y$10$ZMRhRKqcsgi2DO4RMJ4Sg.FGHwvuSJ0vJJedr0kIQDz4a90lK2H9C', '2023-05-09 19:13:38'),
('jaafar.rhamirl@wmsu.edu.ph', '$2y$10$chDiQ9uMGgGxcLbgmzSRAOZo5ZbJfE/lsJoxqL7xASsV7uAO9zh76', '2023-05-25 22:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Can add user', 'web', '2023-05-09 07:59:46', '2023-05-09 07:59:46'),
(2, 'Can approve', 'web', '2023-05-09 07:59:46', '2023-05-09 07:59:46'),
(3, 'Can edit', 'web', '2023-05-09 07:59:46', '2023-05-09 07:59:46'),
(4, 'Can View', 'web', '2023-05-09 07:59:46', '2023-05-09 07:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `place_selves`
--

CREATE TABLE `place_selves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `placeself` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place_selves`
--

INSERT INTO `place_selves` (`id`, `name`, `placeself`) VALUES
(1, 'Left', 'place-self-start'),
(2, 'Center', 'place-self-center'),
(3, 'Right', 'place-self-end');

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE `processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `processable_id` int(11) NOT NULL,
  `processable_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `processable_id`, `processable_type`, `name`, `is_approved`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'App\\Models\\Theme', 'Sample Theme', 0, '2023-05-09 08:03:06', '2023-06-01 23:01:34', NULL),
(2, 2, 'App\\Models\\Theme', 'Title of the theme', 0, '2023-05-09 08:05:08', '2023-06-01 23:01:34', NULL),
(3, 3, 'App\\Models\\Theme', 'Example theme', 0, '2023-05-09 20:18:54', '2023-06-01 23:01:34', NULL),
(4, 4, 'App\\Models\\Theme', 'hero1', 0, '2023-05-18 18:35:13', '2023-06-01 23:01:34', NULL),
(5, 5, 'App\\Models\\Theme', 'Rham theme', 0, '2023-05-25 23:08:41', '2023-06-01 23:01:34', NULL),
(6, 6, 'App\\Models\\Theme', 'Rham 2023 theme', 0, '2023-06-01 22:26:25', '2023-06-01 23:01:34', NULL),
(7, 7, 'App\\Models\\Theme', 'Final theme', 1, '2023-06-01 22:46:46', '2023-06-01 23:01:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'web', '2023-05-09 07:59:45', '2023-05-09 07:59:45'),
(2, 'admin', 'web', '2023-05-09 07:59:46', '2023-05-09 07:59:46'),
(3, 'editor', 'web', '2023-05-09 07:59:46', '2023-05-09 07:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `screenshot_path` varchar(255) DEFAULT NULL,
  `approval_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `user_id`, `name`, `screenshot_path`, `approval_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Sample Theme', NULL, '2023-05-10 04:21:28', '2023-05-09 08:03:06', '2023-05-09 20:21:28', NULL),
(2, 3, 'Title of the theme', NULL, '2023-05-09 16:12:44', '2023-05-09 08:05:08', '2023-05-09 08:12:44', NULL),
(3, 3, 'Example theme', NULL, '2023-05-10 04:20:42', '2023-05-09 20:18:53', '2023-05-09 20:20:42', NULL),
(4, 5, 'hero1', NULL, '2023-05-19 02:53:02', '2023-05-18 18:35:13', '2023-05-18 18:53:02', NULL),
(5, 6, 'Rham theme', NULL, '2023-05-26 07:10:27', '2023-05-25 23:08:41', '2023-05-25 23:10:27', NULL),
(6, 6, 'Rham 2023 theme', NULL, NULL, '2023-06-01 22:26:25', '2023-06-01 22:26:25', NULL),
(7, 7, 'Final theme', NULL, '2023-06-02 07:01:34', '2023-06-01 22:46:46', '2023-06-01 23:01:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super-admin', 1, 'superadmin@email.com', NULL, '$2y$10$8kSrajAKsNRKGzhFcPsDEuHdVYg1wVUafmaNNgQdIgPhYIZ8iYSt2', 'FwXLS1X2fwYjhaD8Xf0l9M5KKMbLwt8L7YPxVCCcAx0y8Iryopy2i2NVTsBX', '2023-05-09 07:59:49', '2023-05-09 07:59:49', NULL),
(2, 'admin', 2, 'wavepex@gmail.com', NULL, '$2y$10$PUZFFcz9Me.PDqfj9ucS7u/PnQZJAwOTUkdp0YpPmDV/eZKxiSNd6', 'AAtENJMplzaWwNQlA4Xa80nNHwhLamRxZjWsGrY8Wb8R8QPxWNKLujMrN9sY', '2023-05-09 07:59:49', '2023-05-18 18:13:14', NULL),
(3, 'Editor', 3, 'editor@email.com', NULL, '$2y$10$xp3kAdKbIHGjukauKy9H0u3SmAYnI/2axHUDvZpu.dOUDwUGnOnLW', 'TuF3QCw63CUPY4VRN40AQGX7k8OV2bMKhsaLAoG7YlqneLh4AkUr2gQ15HAy', '2023-05-09 07:59:49', '2023-05-09 07:59:49', NULL),
(4, 'sample', 3, 'sample@email.com', NULL, '$2y$10$LWegOZfnME4k4IF5vMqeyegovxrMnTBy16ySbnlR1PyOqNcBbP8ry', 'szgRqeEulcMZtT56NmE56nXahRTg7M7ApzOmWghE4ERQhxBe7AG5Cfpr1O03', '2023-05-09 19:12:01', '2023-05-09 19:12:01', NULL),
(5, 'hero', 3, 'hero@mail.com', NULL, '$2y$10$0VVh2sttwuYsMzmQh54WRegw.Jrg7KflMq5d2dFkaNvS2plvO0WNa', 'vTJxJxtmgDAuS9xLMeqz5r06uXtfatkz6xj9Ujm7PKQ5jx43QmAUC6SoS4do', '2023-05-18 18:14:13', '2023-05-18 18:14:13', NULL),
(6, 'rham', 2, 'jaafar.rhamirl@wmsu.edu.ph', NULL, '$2y$10$UPBG.ciDcPA./hJekxuCUOFI9Ve0I22PoahcrgE8fxMs7pTVvOYSy', 'dJEmqN9I5OX8RH6DafiNyWC5AuTF98SBl4tIWA8uiPv03NSY5Ax9zkMn8nRy', '2023-05-25 22:51:41', '2023-05-26 23:50:52', NULL),
(7, 'Jesse james', 2, 'Jessejames@gmail.com', NULL, '$2y$10$FDFHFWP5AUv7ZG.98W6Oq.79LnNbv2C/QZwL/K0lETkroWq7ZwhoS', NULL, '2023-06-01 22:45:12', '2023-06-01 22:45:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `button_styles`
--
ALTER TABLE `button_styles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flexbox_justifications`
--
ALTER TABLE `flexbox_justifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `font_sizes`
--
ALTER TABLE `font_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_name_unique` (`name`),
  ADD UNIQUE KEY `media_file_name_unique` (`file_name`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_theme_id_foreign` (`theme_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `place_selves`
--
ALTER TABLE `place_selves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `processes_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `themes_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `button_styles`
--
ALTER TABLE `button_styles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flexbox_justifications`
--
ALTER TABLE `flexbox_justifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `font_sizes`
--
ALTER TABLE `font_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `place_selves`
--
ALTER TABLE `place_selves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `processes`
--
ALTER TABLE `processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_theme_id_foreign` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `themes`
--
ALTER TABLE `themes`
  ADD CONSTRAINT `themes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
