-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2023 at 07:40 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

DROP TABLE IF EXISTS `aboutuses`;
CREATE TABLE IF NOT EXISTS `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci,
  `week_days_timing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday_timing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday_timing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `call_now` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description_logo` blob,
  `signature` blob,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `title`, `short_description`, `about_us`, `week_days_timing`, `saturday_timing`, `sunday_timing`, `call_now`, `short_description_logo`, `signature`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Delicious Food, Friendly Staff, Cozy Atmosphere & Positive Emotions!', 'El Royale was the first restaurant to open in Egypt, the resturant was designed with the history in mind we have created a soft industrial dining room.', 'Allow us to make your next special event extra special. We cater for all sized functions, ideal for your larger functions or an intimate gathering, our team can curate a menu to suit your taste.\r\n\r\nReservations are for lunch and dinner, check the availability of your table & book it now!', '09.00 – 24:00', '08:00 – 03.00', 'Day off', '0201023456789', 0x744261345430342d30342d323032332d3036343335322e706e67, 0x70514d6e5130342d30342d323032332d3036343335322e706e67, 1, NULL, '2023-04-04 01:43:52', '2023-04-04 01:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` blob,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `description`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Healthy & Simple Recipes That Are Perfect for Spring', '5uDfC', 'My favorite form of cold weather exercise is snow-shoeing, but by chance I haven’t been able to go this year. Busy working at the computer when fresh snow fell...', 0x567266453030332d30342d323032332d3131323430352e6a7067, 1, NULL, '2023-04-03 06:24:05', '2023-04-03 06:24:05'),
(2, 'Healthy & Simple Recipes That Are Perfect for Winter', 'Liecl', 'My favorite form of cold weather exercise is snow-shoeing, but by chance I haven’t been able to go this year. Busy working at the computer when fresh snow fell...', 0x7333777a4c30342d30342d323032332d3131313533332e6a7067, 1, NULL, '2023-04-04 05:15:07', '2023-04-04 06:15:33'),
(3, 'Healthy & Simple Recipes That Are Perfect for Autumn', 'BKXL3', 'My favorite form of cold weather exercise is snow-shoeing, but by chance I haven’t been able to go this year. Busy working at the computer when fresh snow fell...', 0x5a5041545a30342d30342d323032332d3130313534392e6a7067, 1, NULL, '2023-04-04 05:15:49', '2023-04-04 05:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

DROP TABLE IF EXISTS `company_profiles`;
CREATE TABLE IF NOT EXISTS `company_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_address` text COLLATE utf8mb4_unicode_ci,
  `map_url` text COLLATE utf8mb4_unicode_ci,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `logo`, `footer_logo`, `favicon`, `company`, `email`, `phone`, `website`, `country`, `full_address`, `map_url`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, '1680589795-cO3P6n.png', '1680373479-7XJVkm.png', '1680373479-PxdDJh.png', 'Elroyale Restaurant & Cafe', 'support@cajunchickenandwings.com', '02 010123456789', 'http://localhost:8000/', 'Egypt', '22 Alnahas Building, 2 AlBahr St, Tanta\r\nAl-Gharbia Governorate, Egypt', NULL, NULL, NULL, '2023-04-01 13:24:39', '2023-04-04 01:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `email_configs`
--

DROP TABLE IF EXISTS `email_configs`;
CREATE TABLE IF NOT EXISTS `email_configs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mail_mailer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_host` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_port` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_encryption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_from_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `foodservices`
--

DROP TABLE IF EXISTS `foodservices`;
CREATE TABLE IF NOT EXISTS `foodservices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `foodservices`
--

INSERT INTO `foodservices` (`id`, `title`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Start Eating Better', 0x524d4b746d30332d30342d323032332d3132313130362e6a7067, 1, NULL, '2023-04-03 07:11:06', '2023-04-03 07:11:06'),
(2, 'Quality Is The Heart', 0x417832463530332d30342d323032332d3132313135332e6a7067, 1, NULL, '2023-04-03 07:11:53', '2023-04-03 07:11:53'),
(3, 'Hot & Ready To Serve', 0x6b5967344330332d30342d323032332d3132313234312e6a7067, 1, NULL, '2023-04-03 07:12:41', '2023-04-03 07:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` blob NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0x655064785830342d30342d323032332d3138333732392e6a7067, 1, NULL, '2023-04-04 13:37:29', '2023-04-04 13:37:29'),
(2, 0x4f3771526330342d30342d323032332d3138333732392e6a7067, 1, NULL, '2023-04-04 13:37:29', '2023-04-04 13:37:29'),
(3, 0x4b6e5a525830342d30342d323032332d3138333732392e6a7067, 1, NULL, '2023-04-04 13:37:29', '2023-04-04 13:37:29'),
(4, 0x466b54335430342d30342d323032332d3138333732392e6a7067, 1, NULL, '2023-04-04 13:37:29', '2023-04-04 13:37:29'),
(5, 0x564f374a6930342d30342d323032332d3138333732392e6a7067, 1, NULL, '2023-04-04 13:37:29', '2023-04-04 13:37:29'),
(6, 0x354441525630342d30342d323032332d3138333732392e6a7067, 1, NULL, '2023-04-04 13:37:29', '2023-04-04 13:37:29'),
(7, 0x786e43784330342d30342d323032332d3138333732392e6a7067, 1, NULL, '2023-04-04 13:37:29', '2023-04-04 13:37:29'),
(8, 0x326651337530342d30342d323032332d3138333732392e6a7067, 1, NULL, '2023-04-04 13:37:29', '2023-04-04 13:37:29'),
(9, 0x684465676530342d30342d323032332d3138333732392e6a7067, 1, NULL, '2023-04-04 13:37:29', '2023-04-04 13:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `log_activities`
--

DROP TABLE IF EXISTS `log_activities`;
CREATE TABLE IF NOT EXISTS `log_activities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `log_activities`
--

INSERT INTO `log_activities` (`id`, `subject`, `url`, `method`, `ip`, `agent`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Role updated', 'http://localhost/cajun-restaurant/admin/role/1', 'PATCH', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, NULL, '2023-04-02 20:10:03', '2023-04-02 20:10:03'),
(2, 'Role updated', 'http://localhost/cajun-restaurant/admin/role/1', 'PATCH', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, NULL, '2023-04-02 20:20:41', '2023-04-02 20:20:41'),
(3, 'Role updated', 'http://localhost/cajun-restaurant/admin/role/1', 'PATCH', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, NULL, '2023-04-03 06:31:23', '2023-04-03 06:31:23'),
(4, 'Role updated', 'http://localhost/cajun-restaurant/admin/role/1', 'PATCH', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, NULL, '2023-04-03 06:51:48', '2023-04-03 06:51:48'),
(5, 'Role updated', 'http://localhost/cajun-restaurant/admin/role/1', 'PATCH', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, NULL, '2023-04-03 07:09:17', '2023-04-03 07:09:17'),
(6, 'Role updated', 'http://localhost/cajun-restaurant/admin/role/1', 'PATCH', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, NULL, '2023-04-03 07:26:17', '2023-04-03 07:26:17'),
(7, 'Role updated', 'http://localhost/cajun-restaurant/admin/role/1', 'PATCH', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, NULL, '2023-04-03 07:52:30', '2023-04-03 07:52:30'),
(8, 'Role updated', 'http://localhost/cajun-restaurant/admin/role/1', 'PATCH', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 1, NULL, '2023-04-04 01:39:27', '2023-04-04 01:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `menucategories`
--

DROP TABLE IF EXISTS `menucategories`;
CREATE TABLE IF NOT EXISTS `menucategories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` blob NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menucategories`
--

INSERT INTO `menucategories` (`id`, `title`, `start_time`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast Menu', '11:30', 0x73546b617130332d30342d323032332d3132333432342e6a7067, 1, NULL, '2023-04-03 07:34:24', '2023-04-03 07:34:24'),
(2, 'Lunch Menu', '14:00', 0x314349347330332d30342d323032332d3132333631342e6a7067, 1, NULL, '2023-04-03 07:36:14', '2023-04-03 07:36:14'),
(3, 'Dinner Menu', '19:00', 0x584673466f30332d30342d323032332d3132333830302e6a7067, 1, NULL, '2023-04-03 07:38:00', '2023-04-03 07:38:00'),
(4, 'Dessert Menu', NULL, 0x6f6231467930332d30342d323032332d3132333934302e6a7067, 1, NULL, '2023-04-03 07:39:40', '2023-04-03 07:39:40'),
(5, 'Drinks Menu', NULL, 0x3542355a6330332d30342d323032332d3132343034372e6a7067, 1, NULL, '2023-04-03 07:40:47', '2023-04-03 07:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_of` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_of`, `parent_id`, `menu`, `icon`, `label`, `url`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, 'blog', '<i class=\"fa fa-rss\" aria-hidden=\"true\"></i>', 'All Blogs', 'admin/blog', 1, NULL, '2023-04-02 20:28:34', '2023-04-02 20:28:34'),
(2, 'admin', NULL, 'slider', '<i class=\"fa fa-sliders\" aria-hidden=\"true\"></i>', 'All Sliders', 'admin/slider', 1, NULL, '2023-04-03 06:30:50', '2023-04-03 06:30:50'),
(4, 'admin', NULL, 'ourmenu', '<i class=\"fa fa-compass\" aria-hidden=\"true\"></i>', 'Our Menus', 'admin/ourmenu', 1, NULL, '2023-04-03 06:51:05', '2023-04-03 06:51:05'),
(5, 'admin', NULL, 'foodservice', '<i class=\"fa fa-free-code-camp\" aria-hidden=\"true\"></i>', 'Our Food Service', 'admin/foodservice', 1, NULL, '2023-04-03 07:08:42', '2023-04-03 07:08:42'),
(6, 'admin', NULL, 'menucategory', '<i class=\"fa fa-crosshairs\" aria-hidden=\"true\"></i>', 'Our Menu Categories', 'admin/menucategory', 1, NULL, '2023-04-03 07:25:41', '2023-04-03 07:25:41'),
(9, 'admin', NULL, 'gallery', '<i class=\"fa fa-wpexplorer\" aria-hidden=\"true\"></i>', 'Our Gallery', 'admin/gallery', 1, NULL, '2023-04-03 08:04:05', '2023-04-03 08:04:05'),
(10, 'admin', NULL, 'aboutus', '<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>', 'About Us', 'admin/aboutus', 1, NULL, '2023-04-04 01:38:56', '2023-04-04 01:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_14_193534_create_menus_table', 1),
(6, '2022_11_15_210300_create_permission_tables', 1),
(7, '2022_11_16_000508_create_system_settings_table', 1),
(8, '2022_11_16_165530_create_email_configs_table', 1),
(9, '2022_11_16_204532_create_log_activities_table', 1),
(10, '2022_11_16_225454_create_user_profiles_table', 1),
(11, '2022_11_17_203444_create_notifications_table', 1),
(12, '2022_11_17_222822_create_users_verify_table', 1),
(14, '2022_11_24_104414_create_categories_table', 1),
(17, '2022_11_18_164332_create_company_profiles_table', 2),
(19, '2023_04_03_012834_create_blogs_table', 3),
(20, '2023_04_03_113050_create_sliders_table', 4),
(21, '2023_04_03_115105_create_ourmenus_table', 5),
(22, '2023_04_03_120842_create_foodservices_table', 6),
(23, '2023_04_03_122541_create_menucategories_table', 7),
(26, '2023_04_03_010405_create_galleries_table', 8),
(27, '2023_04_04_063856_create_aboutuses_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `ourmenus`
--

DROP TABLE IF EXISTS `ourmenus`;
CREATE TABLE IF NOT EXISTS `ourmenus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_category_id` bigint(20) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `discount_price` double(8,2) DEFAULT '0.00',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ourmenus`
--

INSERT INTO `ourmenus` (`id`, `menu_category_id`, `title`, `slug`, `description`, `price`, `discount_price`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Smoked Meat Sandwich', 'XjHHb', 'Baguette, basil, arugula, olives, cherry-tomatoes.', 12.95, NULL, 1, NULL, '2023-04-03 07:01:56', '2023-04-03 07:01:56'),
(2, 1, 'Chicken Breast', 'Ysmvq', 'Paupiette of chicken, blue cheese, rosemary.', 33.95, NULL, 1, NULL, '2023-04-04 02:46:47', '2023-04-04 02:46:47'),
(3, 1, 'Salmon Steak', 'JdmNX', 'Salmon, butter, lemon juice, onion, garlic & salad.', 41.95, NULL, 1, NULL, '2023-04-04 02:52:49', '2023-04-04 02:52:49'),
(4, 1, 'Chicken Crispy', 'A5IOo', 'Smoked quail, crispy egg, spelt, girolles, parsley.', 33.95, NULL, 1, NULL, '2023-04-04 02:53:30', '2023-04-04 02:53:30'),
(5, 1, 'Grilled Fillet', 'HoPwf', 'Pork fillet, ginger, garlic, honey, pepper & oil.', 26.95, NULL, 1, NULL, '2023-04-04 02:54:06', '2023-04-04 02:54:06'),
(6, 1, 'Salmon Sandwich', 'q0Q8i', 'Salmon, butter, lemon juice, onion, garlic & salad', 15.95, NULL, 1, NULL, '2023-04-04 02:56:53', '2023-04-04 02:56:53'),
(7, 1, 'Pan Of Fried Eggs', 'k5N6P', 'Eggs, bacon and cherry-tomatoes with bread.', 13.95, NULL, 1, NULL, '2023-04-04 02:57:34', '2023-04-04 02:57:34'),
(8, 1, 'Breakfast Set', 'ZOvWT', 'Croissants with strawberries, mascarpone, honey.', 20.95, NULL, 1, NULL, '2023-04-04 02:58:06', '2023-04-04 02:58:06'),
(9, 1, 'Healthy Breakfast', 'LWPWF', 'at granola with fresh blueberries, almond.', 18.95, NULL, 1, NULL, '2023-04-04 02:59:05', '2023-04-04 02:59:05'),
(10, 1, 'Traditional Pancakes', 'V6drH', 'Paupiette of chicken, blue cheese, rosemary.', 8.95, NULL, 1, NULL, '2023-04-04 02:59:38', '2023-04-04 02:59:38'),
(11, 1, 'American Brunch', 'og7Oy', 'Applewood smoked bacon, tomatoes', 14.95, NULL, 1, NULL, '2023-04-04 03:00:08', '2023-04-04 03:00:08'),
(12, 1, 'Cannoli With Cream Cheese', 'aF1tz', 'Cheese, eggs, strawberries, butter & maple', 15.95, NULL, 1, NULL, '2023-04-04 03:00:41', '2023-04-04 03:00:41'),
(13, 1, 'Chocolate Cherry Cake', '1qg55', 'Vanilla, milk, dark chocolate, cherries', 9.95, NULL, 1, NULL, '2023-04-04 03:01:09', '2023-04-04 03:01:09'),
(14, 1, 'Pain Au Chocolat', 'vwrpH', 'Homemade croissant contain a bar of', 3.95, NULL, 1, NULL, '2023-04-04 03:01:55', '2023-04-04 03:01:55'),
(15, 2, 'Smoked Meat Sandwich', 'MXIhR', 'Baguette, basil, arugula, olives, cherry-tomatoes.', 12.95, NULL, 1, NULL, '2023-04-04 03:19:54', '2023-04-04 03:19:54'),
(16, 2, 'Salmon Sandwich', 'nKbIh', 'Salmon, butter, lemon juice, onion, garlic & salad.', 15.95, NULL, 1, NULL, '2023-04-04 03:20:53', '2023-04-04 03:20:53'),
(17, 2, 'Pan Of Fried Eggs', 'VoPM3', 'Eggs, bacon and cherry-tomatoes with bread.', 13.95, NULL, 1, NULL, '2023-04-04 03:21:48', '2023-04-04 03:21:48'),
(18, 2, 'Breakfast Set', 'rR4xO', 'Croissants with strawberries, mascarpone, honey.', 20.95, NULL, 1, NULL, '2023-04-04 03:22:28', '2023-04-04 03:22:28'),
(19, 2, 'Healthy Breakfast', 'gOlJi', 'Oat granola with fresh blueberries, almond.', 18.95, NULL, 1, NULL, '2023-04-04 03:23:16', '2023-04-04 03:23:16'),
(20, 2, 'Traditional Pancakes', 'L5Sxq', 'Paupiette of chicken, blue cheese, rosemary.', 8.95, NULL, 1, NULL, '2023-04-04 03:23:54', '2023-04-04 03:23:54'),
(21, 2, 'American Brunch', 'bkWhF', 'Cheese, eggs, strawberries, butter & maple', 15.95, NULL, 1, NULL, '2023-04-04 03:24:36', '2023-04-04 03:24:36'),
(22, 2, 'Chocolate Cherry Cake', 'D840d', 'Vanilla, milk, dark chocolate, cherries', 9.95, NULL, 1, NULL, '2023-04-04 03:25:14', '2023-04-04 03:25:14'),
(23, 2, 'Pain Au  Chocolat', 'VZwpX', 'Homemade croissant contain a bar of', 3.95, NULL, 1, NULL, '2023-04-04 03:25:57', '2023-04-04 03:25:57'),
(24, 2, 'Chicken Breast', 'SXjuc', 'Paupiette of chicken, blue cheese, rosemary.', 33.95, NULL, 1, NULL, '2023-04-04 03:26:44', '2023-04-04 03:26:44'),
(25, 2, 'Salmon Steak', '2s7Q1', 'Salmon, butter, lemon juice, onion, garlic & salad.', 41.95, NULL, 1, NULL, '2023-04-04 03:27:27', '2023-04-04 03:27:27'),
(26, 2, 'Chicken Crispy', 'HoIH8', 'Smoked quail, crispy egg, spelt, girolles, parsley.', 33.95, NULL, 1, NULL, '2023-04-04 03:28:14', '2023-04-04 03:28:14'),
(27, 2, 'Grilled Fillet', 'WEZeb', 'Pork fillet, ginger, garlic, honey, pepper & oil.', 26.95, NULL, 1, NULL, '2023-04-04 03:29:00', '2023-04-04 03:29:00'),
(28, 3, 'Chicken Breast', 'V5cUo', 'Paupiette of chicken,  blue cheese, rosemary.', 33.95, NULL, 1, NULL, '2023-04-04 03:30:44', '2023-04-04 03:30:44'),
(29, 3, 'Salmon Steak', 'yz99H', 'Salmon, butter, lemon juice, onion, garlic & salad.', 41.95, NULL, 1, NULL, '2023-04-04 03:31:36', '2023-04-04 03:31:36'),
(30, 3, 'Chicken  Crispy', '2912F', 'Smoked quail, crispy egg, spelt, girolles, parsley.', 33.95, NULL, 1, NULL, '2023-04-04 03:32:25', '2023-04-04 03:32:25'),
(31, 3, 'Grilled Fillet', 'XuenV', 'Pork fillet, ginger, garlic, honey, pepper & oil.', 26.95, NULL, 1, NULL, '2023-04-04 03:33:15', '2023-04-04 03:33:15'),
(32, 3, 'Salmon  Steak', 'mgE0e', 'Salmon, butter, lemon juice, onion, garlic & salad.', 27.95, NULL, 1, NULL, '2023-04-04 03:34:57', '2023-04-04 03:34:57'),
(33, 3, 'Smoked Meat Sandwich', 'nCMeI', 'Baguette, basil, arugula, olives, cherry-tomatoes.', 12.95, NULL, 1, NULL, '2023-04-04 03:35:41', '2023-04-04 03:35:41'),
(34, 3, 'Salmon Sandwich', 'QqZYF', 'Salmon, butter, lemon juice, onion, garlic & salad', 15.95, NULL, 1, NULL, '2023-04-04 03:36:27', '2023-04-04 03:36:27'),
(35, 3, 'Pan Of  Fried Eggs', 'DR7Hh', 'Eggs, bacon and cherry-tomatoes with bread.', 13.95, NULL, 1, NULL, '2023-04-04 03:37:21', '2023-04-04 03:37:21'),
(36, 3, 'Breakfast Set', '5QcBr', 'Croissants with strawberries, mascarpone, honey.', 20.95, NULL, 1, NULL, '2023-04-04 03:38:14', '2023-04-04 03:38:14'),
(37, 3, 'Healthy Breakfast', 'qwHqy', 'Oat granola with fresh blueberries, almond.', 18.95, NULL, 1, NULL, '2023-04-04 03:39:19', '2023-04-04 03:39:19'),
(38, 3, 'Traditional Pancakes', 'gf5i6', 'Paupiette of chicken, blue cheese, rosemary.', 8.95, NULL, 1, NULL, '2023-04-04 03:40:09', '2023-04-04 03:40:09'),
(39, 3, 'American Brunch', 'zDnrF', 'Applewood smoked bacon, tomatoes', 14.95, NULL, 1, NULL, '2023-04-04 03:40:59', '2023-04-04 03:40:59'),
(40, 3, 'Cannoli With Cream Cheese', 'jgWtm', 'Cheese, eggs, strawberries, butter & maple', 15.95, NULL, 1, NULL, '2023-04-04 03:41:56', '2023-04-04 03:41:56'),
(41, 3, 'Chocolate Cherry Cake', 'SGN6g', 'Vanilla, milk, dark chocolate, cherries', 9.95, NULL, 1, NULL, '2023-04-04 03:42:41', '2023-04-04 03:42:41'),
(42, 3, 'Pain Au Chocolat', 'HPtUC', 'Homemade croissant contain a bar of', 3.95, NULL, 1, NULL, '2023-04-04 03:43:28', '2023-04-04 03:43:28'),
(43, 4, 'Chicken Breast', 'E8pkP', 'Paupiette of chicken, blue cheese, rosemary.', 33.95, NULL, 1, NULL, '2023-04-04 03:44:30', '2023-04-04 03:44:30'),
(44, 4, 'Salmon Steak', 'GPzqx', 'Salmon, butter, lemon juice, onion, garlic & salad.', 41.95, NULL, 1, NULL, '2023-04-04 03:45:12', '2023-04-04 03:45:12'),
(45, 4, 'Chicken  Crispy', 'l2lk3', 'Smoked quail, crispy egg, spelt, girolles, parsley.', 33.95, NULL, 1, NULL, '2023-04-04 03:45:57', '2023-04-04 03:45:57'),
(46, 4, 'Grilled Fillet', 'jX75r', 'Pork fillet, ginger, garlic, honey, pepper & oil.', 26.95, NULL, 1, NULL, '2023-04-04 03:46:43', '2023-04-04 03:46:43'),
(47, 4, 'Smoked Meat Sandwich', 'O7fYi', 'Baguette, basil, arugula, olives, cherry-tomatoes.', 12.95, NULL, 1, NULL, '2023-04-04 03:47:34', '2023-04-04 03:47:34'),
(48, 4, 'Salmon Sandwich', 'P9MMb', 'almon, butter, lemon juice, onion, garlic & salad', 15.95, NULL, 1, NULL, '2023-04-04 03:48:13', '2023-04-04 03:48:13'),
(49, 4, 'Pan Of Fried Eggs', 'zB8CT', 'Eggs, bacon and cherry-tomatoes with bread.', 13.95, NULL, 1, NULL, '2023-04-04 03:48:54', '2023-04-04 03:48:54'),
(50, 4, 'Breakfast Set', '9uetz', 'Croissants with strawberries, mascarpone, honey.', 20.95, NULL, 1, NULL, '2023-04-04 03:49:32', '2023-04-04 03:49:32'),
(51, 4, 'Traditional Pancakes', '8qEjY', 'Paupiette of chicken, blue cheese, rosemary.', 8.95, NULL, 1, NULL, '2023-04-04 03:50:15', '2023-04-04 03:50:15'),
(52, 4, 'American Brunch', '1Qfp8', 'Applewood smoked bacon, tomatoes', 14.95, NULL, 1, NULL, '2023-04-04 03:50:58', '2023-04-04 03:50:58'),
(53, 4, 'Cannoli With Cream Cheese', 'voGLE', 'Cheese, eggs, strawberries, butter & maple', 15.95, NULL, 1, NULL, '2023-04-04 03:51:43', '2023-04-04 03:51:43'),
(54, 4, 'Chocolate Cherry Cake', 'Qzk1P', 'Vanilla, milk, dark chocolate, cherries', 9.95, NULL, 1, NULL, '2023-04-04 03:52:20', '2023-04-04 03:52:20'),
(55, 5, 'Drinks Set', '4Vypp', 'Croissants with strawberries, mascarpone, honey.', 20.95, NULL, 1, NULL, '2023-04-04 03:53:07', '2023-04-04 03:53:07'),
(56, 5, 'Healthy Breakfast', 'nxV4u', 'Oat granola with fresh blueberries, yogurt.', 18.95, NULL, 1, NULL, '2023-04-04 03:53:48', '2023-04-04 03:53:48'),
(57, 5, 'Chicken Crispy', '4eWLP', 'Smoked quail, crispy egg, spelt, girolles, parsley.', 33.95, NULL, 1, NULL, '2023-04-04 03:54:22', '2023-04-04 03:54:22'),
(58, 5, 'Grilled Fillet', 'HNgpM', 'Pork fillet, ginger, garlic, honey & canola oil.', 26.95, NULL, 1, NULL, '2023-04-04 03:55:01', '2023-04-04 03:55:01'),
(59, 5, 'Cannoli With Cream Cheese', 'qr6HV', 'Cheese, eggs, strawberries, butter & maple', 15.95, NULL, 1, NULL, '2023-04-04 04:04:45', '2023-04-04 04:04:45'),
(60, 5, 'Chocolate Cherry Cake', 'ApANO', 'Vanilla, milk, dark chocolate, cherries', 9.95, NULL, 1, NULL, '2023-04-04 04:05:29', '2023-04-04 04:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(2, 'role-create', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(3, 'role-edit', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(4, 'role-delete', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(5, 'permission-list', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(6, 'permission-create', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(7, 'permission-edit', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(8, 'permission-delete', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(9, 'user-list', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(10, 'user-create', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(11, 'user-edit', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(12, 'user-delete', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(13, 'logactivity-list', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(14, 'logactivity-create', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(15, 'logactivity-edit', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(16, 'logactivity-delete', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(17, 'companyprofile-list', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(18, 'companyprofile-create', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(19, 'companyprofile-edit', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(20, 'companyprofile-delete', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(21, 'setting-list', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(22, 'setting-create', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(23, 'setting-edit', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(24, 'setting-delete', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(25, 'emailconfig-list', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(26, 'emailconfig-create', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(27, 'emailconfig-edit', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(28, 'emailconfig-delete', 'web', NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(29, 'menu-list', 'web', NULL, '2023-04-02 20:09:50', '2023-04-02 20:09:50'),
(30, 'menu-create', 'web', NULL, '2023-04-02 20:09:50', '2023-04-02 20:09:50'),
(31, 'menu-edit', 'web', NULL, '2023-04-02 20:09:50', '2023-04-02 20:09:50'),
(32, 'menu-delete', 'web', NULL, '2023-04-02 20:09:50', '2023-04-02 20:09:50'),
(33, 'blog-list', 'web', NULL, '2023-04-02 20:20:28', '2023-04-02 20:20:28'),
(34, 'blog-create', 'web', NULL, '2023-04-02 20:20:28', '2023-04-02 20:20:28'),
(35, 'blog-edit', 'web', NULL, '2023-04-02 20:20:28', '2023-04-02 20:20:28'),
(36, 'blog-delete', 'web', NULL, '2023-04-02 20:20:28', '2023-04-02 20:20:28'),
(37, 'slider-list', 'web', NULL, '2023-04-03 06:31:09', '2023-04-03 06:31:09'),
(38, 'slider-create', 'web', NULL, '2023-04-03 06:31:09', '2023-04-03 06:31:09'),
(39, 'slider-edit', 'web', NULL, '2023-04-03 06:31:09', '2023-04-03 06:31:09'),
(40, 'slider-delete', 'web', NULL, '2023-04-03 06:31:09', '2023-04-03 06:31:09'),
(41, 'ourmenu-list', 'web', NULL, '2023-04-03 06:51:32', '2023-04-03 06:51:32'),
(42, 'ourmenu-create', 'web', NULL, '2023-04-03 06:51:32', '2023-04-03 06:51:32'),
(43, 'ourmenu-edit', 'web', NULL, '2023-04-03 06:51:32', '2023-04-03 06:51:32'),
(44, 'ourmenu-delete', 'web', NULL, '2023-04-03 06:51:32', '2023-04-03 06:51:32'),
(45, 'foodservice-list', 'web', NULL, '2023-04-03 07:09:01', '2023-04-03 07:09:01'),
(46, 'foodservice-create', 'web', NULL, '2023-04-03 07:09:01', '2023-04-03 07:09:01'),
(47, 'foodservice-edit', 'web', NULL, '2023-04-03 07:09:01', '2023-04-03 07:09:01'),
(48, 'foodservice-delete', 'web', NULL, '2023-04-03 07:09:01', '2023-04-03 07:09:01'),
(49, 'menucategory-list', 'web', NULL, '2023-04-03 07:26:02', '2023-04-03 07:26:02'),
(50, 'menucategory-create', 'web', NULL, '2023-04-03 07:26:02', '2023-04-03 07:26:02'),
(51, 'menucategory-edit', 'web', NULL, '2023-04-03 07:26:02', '2023-04-03 07:26:02'),
(52, 'menucategory-delete', 'web', NULL, '2023-04-03 07:26:02', '2023-04-03 07:26:02'),
(53, 'gallery-list', 'web', NULL, '2023-04-03 07:52:11', '2023-04-03 07:52:11'),
(54, 'gallery-create', 'web', NULL, '2023-04-03 07:52:11', '2023-04-03 07:52:11'),
(55, 'gallery-edit', 'web', NULL, '2023-04-03 07:52:11', '2023-04-03 07:52:11'),
(56, 'gallery-delete', 'web', NULL, '2023-04-03 07:52:11', '2023-04-03 07:52:11'),
(57, 'aboutus-list', 'web', NULL, '2023-04-04 01:39:11', '2023-04-04 01:39:11'),
(58, 'aboutus-create', 'web', NULL, '2023-04-04 01:39:11', '2023-04-04 01:39:11'),
(59, 'aboutus-edit', 'web', NULL, '2023-04-04 01:39:11', '2023-04-04 01:39:11'),
(60, 'aboutus-delete', 'web', NULL, '2023-04-04 01:39:11', '2023-04-04 01:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', 1, NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17'),
(2, 'User', 'web', 1, NULL, '2023-04-01 09:52:18', '2023-04-01 09:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(10, 2),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `slug`, `sub_title`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Offering The Best Tasting Experience!', 'W21St', 'Offering The Best Tasting Experience!', 0x386968493830332d30342d323032332d3131333831372e6a7067, 1, NULL, '2023-04-03 06:38:17', '2023-04-03 06:38:17'),
(2, 'Creative Chefs, Fresh & Tasty Meals', 'O1haS', 'Offering The Best Tasting Experience!', 0x5361514c4430342d30342d323032332d3039323531372e6a7067, 1, NULL, '2023-04-04 04:25:17', '2023-04-04 04:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

DROP TABLE IF EXISTS `system_settings`;
CREATE TABLE IF NOT EXISTS `system_settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `per_page_record` int(11) NOT NULL DEFAULT '10',
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_email_verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `is_email_verified`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$UoUZD7Ctlnd7QEYWsbnJfO/LXUpbdPLNldJg54FoWFP4gnU2gcI/W', 1, NULL, NULL, '2023-04-01 09:52:17', '2023-04-01 09:52:17', 0),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$Ur5jWI0vdKsFmDou0EXv8ebjXv.vEERtfts3UHBa4Wuo4ZQMsxtw2', 1, NULL, NULL, '2023-04-01 09:52:18', '2023-04-01 09:52:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_verify`
--

DROP TABLE IF EXISTS `users_verify`;
CREATE TABLE IF NOT EXISTS `users_verify` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
