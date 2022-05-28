-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2022 at 05:51 PM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wasoluti_dr_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `patinet_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patinet_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patinet_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patinet_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patinet_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patinet_previous_test` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `user_id`, `patinet_name`, `patinet_age`, `patinet_phone`, `patinet_email`, `patinet_condition`, `patinet_previous_test`, `appointment_id`, `transaction_id`, `payment_number`, `amount`, `created_at`, `updated_at`) VALUES
(1, '5', NULL, NULL, '462', '387', 'your.email+fakedata64351@gmail.com', 'Fugit et id ut vero.', NULL, NULL, NULL, NULL, NULL, '2022-03-26 03:12:04', '2022-03-26 03:12:04'),
(2, '5', NULL, NULL, '2', '448', 'your.email+fakedata66105@gmail.com', 'Aperiam et impedit placeat voluptatum eos.', NULL, NULL, NULL, NULL, NULL, '2022-03-26 03:13:06', '2022-03-26 03:13:06'),
(3, '5', NULL, 'Makenzie Hahn', '130', '56', 'your.email+fakedata58981@gmail.com', 'Est repellendus vero nesciunt dolores consectetur aspernatur.', NULL, NULL, NULL, NULL, NULL, '2022-03-26 03:13:33', '2022-03-26 03:13:33'),
(4, '5', NULL, 'Lou Armstrong', '34', '155', 'your.email+fakedata81275@gmail.com', 'Cupiditate iusto rerum et maiores eveniet.', NULL, NULL, NULL, NULL, NULL, '2022-03-26 03:17:59', '2022-03-26 03:17:59'),
(5, '5', NULL, 'Bettye Roberts', '570', '639', 'your.email+fakedata19842@gmail.com', 'Voluptatem et commodi quibusdam.', NULL, NULL, NULL, NULL, NULL, '2022-03-26 03:24:23', '2022-03-26 03:24:23'),
(6, '5', NULL, 'Melisa Williamson', '103', '414', 'your.email+fakedata74046@gmail.com', 'Fugit voluptatem pariatur velit eos quo.', NULL, NULL, NULL, NULL, NULL, '2022-03-26 05:23:11', '2022-03-26 05:23:11'),
(7, '5', NULL, 'Lina Pagac', '505', '377', 'your.email+fakedata70819@gmail.com', 'Id dolores ut magnam sit cum modi doloremque possimus nobis.', NULL, NULL, NULL, NULL, NULL, '2022-03-26 06:25:29', '2022-03-26 06:25:29'),
(8, '5', NULL, 'Roma Weber', '609', '114', 'your.email+fakedata14717@gmail.com', 'Pariatur qui qui.', NULL, NULL, NULL, NULL, NULL, '2022-03-26 06:26:11', '2022-03-26 06:26:11'),
(9, '5', NULL, 'Tara Hermann', '4', '411', 'your.email+fakedata16068@gmail.com', 'Non id qui neque sed vero aliquid aperiam voluptas quo.', NULL, NULL, NULL, NULL, NULL, '2022-03-26 06:27:16', '2022-03-26 06:27:16'),
(10, '5', NULL, 'Anais Muller', '496', '213', 'your.email+fakedata35768@gmail.com', 'Non ut dignissimos ducimus quis nobis voluptatum recusandae dignissimos omnis.', NULL, NULL, NULL, NULL, NULL, '2022-03-26 06:33:05', '2022-03-26 06:33:05'),
(11, '5', NULL, 'Maia D\'Amore', '154', '502', 'your.email+fakedata80218@gmail.com', 'Sunt officia quo dolorem.', NULL, NULL, NULL, '012115', NULL, '2022-03-26 06:43:29', '2022-03-26 06:43:29'),
(12, '5', NULL, 'Raul Turcotte', '171', '546', 'your.email+fakedata58818@gmail.com', 'Est excepturi corporis aspernatur nobis repellat quam.', '2022-03-26-623f147ab1b75.jpg', '623f135580b5b', NULL, '0175566', NULL, '2022-03-26 07:05:55', '2022-03-26 07:05:55'),
(13, '5', NULL, 'Annie Hickle', '38', '392', 'your.email+fakedata66495@gmail.com', 'Aperiam neque qui eveniet.', '2022-03-26-623f157792827.png', '623f156b7a729', NULL, '01729531881', NULL, '2022-03-26 07:30:11', '2022-03-26 07:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'elec', 'elec', 'elec-2021-09-02-61305c3ce73f5.jpg', '2021-09-01 23:08:20', '2021-09-01 23:08:20'),
(2, 'klkiji', 'klkiji', 'klkiji-2021-09-02-61307c9f612d8.jpg', '2021-09-02 01:26:35', '2021-09-02 01:26:35'),
(3, 'Weekends', 'weekends', 'weekends-2021-09-02-6130e34558dd6.jpg', '2021-09-02 08:44:28', '2021-09-02 08:44:28'),
(4, 'Naeem', 'naeem', 'naeem-2021-09-04-613391e7abaee.jpg', '2021-09-04 09:34:05', '2021-09-04 09:34:05'),
(5, 'Mehedi', 'mehedi', 'mehedi-2021-09-04-613391feee24e.jpg', '2021-09-04 09:34:28', '2021-09-04 09:34:28'),
(7, 'News', 'news', 'news-2021-09-04-6133933137f80.jpg', '2021-09-04 09:39:34', '2021-09-04 09:39:34'),
(8, 'News1', 'news1', 'news1-2021-09-04-613393438f55f.jpg', '2021-09-04 09:39:52', '2021-09-04 09:39:52'),
(9, 'News2', 'news2', 'news2-2021-09-04-61339358d2c81.jpg', '2021-09-04 09:40:13', '2021-09-04 09:40:13'),
(10, 'News3', 'news3', 'news3-2021-09-04-61339374b3dd9.jpg', '2021-09-04 09:40:41', '2021-09-04 09:40:41'),
(11, 'News4', 'news4', 'news4-2021-09-04-6133939139bd3.jpg', '2021-09-04 09:41:10', '2021-09-04 09:41:10'),
(12, 'News5', 'news5', 'news5-2021-09-04-613393ac2db93.jpg', '2021-09-04 09:41:37', '2021-09-04 09:41:37'),
(13, 'News6', 'news6', 'news6-2021-09-04-613393c10e3c1.jpg', '2021-09-04 09:41:58', '2021-09-04 09:41:58'),
(14, 'News7', 'news7', 'news7-2021-09-04-613393e2017e8.jpg', '2021-09-04 09:42:31', '2021-09-04 09:42:31'),
(15, 'News8', 'news8', 'news8-2021-09-04-613393ff7ff38.jpg', '2021-09-04 09:43:00', '2021-09-04 09:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-09-01 23:09:23', '2021-09-01 23:09:23'),
(3, 2, 3, '2021-09-02 08:47:05', '2021-09-02 08:47:05'),
(5, 3, 3, '2021-09-03 07:02:47', '2021-09-03 07:02:47'),
(6, 4, 1, '2021-09-03 09:10:30', '2021-09-03 09:10:30'),
(7, 5, 1, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(8, 5, 2, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(9, 5, 3, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(10, 5, 4, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(11, 5, 5, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(12, 5, 6, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(13, 5, 7, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(14, 5, 8, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(15, 5, 9, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(16, 5, 10, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(17, 5, 11, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(18, 5, 12, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(19, 5, 13, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(20, 5, 14, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(21, 5, 15, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(22, 6, 3, '2021-09-04 22:28:41', '2021-09-04 22:28:41'),
(23, 6, 7, '2021-09-04 22:28:41', '2021-09-04 22:28:41'),
(24, 6, 8, '2021-09-04 22:28:41', '2021-09-04 22:28:41'),
(25, 7, 8, '2021-09-04 22:30:09', '2021-09-04 22:30:09'),
(26, 8, 8, '2021-09-04 22:30:44', '2021-09-04 22:30:44'),
(27, 9, 7, '2021-09-04 22:31:22', '2021-09-04 22:31:22'),
(28, 9, 8, '2021-09-04 22:31:22', '2021-09-04 22:31:22'),
(29, 10, 7, '2021-09-04 22:32:30', '2021-09-04 22:32:30'),
(30, 10, 8, '2021-09-04 22:32:30', '2021-09-04 22:32:30'),
(31, 1, 7, '2021-09-04 22:33:07', '2021-09-04 22:33:07'),
(32, 1, 8, '2021-09-04 22:33:07', '2021-09-04 22:33:07'),
(33, 3, 7, '2021-09-04 22:33:27', '2021-09-04 22:33:27'),
(34, 3, 8, '2021-09-04 22:33:27', '2021-09-04 22:33:27'),
(35, 11, 7, '2021-09-04 22:34:10', '2021-09-04 22:34:10'),
(36, 11, 1, '2021-09-04 22:36:10', '2021-09-04 22:36:10'),
(37, 11, 2, '2021-09-04 22:36:10', '2021-09-04 22:36:10'),
(38, 11, 3, '2021-09-04 22:36:10', '2021-09-04 22:36:10'),
(39, 11, 4, '2021-09-04 22:36:10', '2021-09-04 22:36:10'),
(40, 11, 5, '2021-09-04 22:36:11', '2021-09-04 22:36:11'),
(41, 11, 6, '2021-09-04 22:36:11', '2021-09-04 22:36:11'),
(42, 11, 8, '2021-09-04 22:36:11', '2021-09-04 22:36:11'),
(43, 11, 9, '2021-09-04 22:36:11', '2021-09-04 22:36:11'),
(44, 11, 10, '2021-09-04 22:36:11', '2021-09-04 22:36:11'),
(45, 11, 11, '2021-09-04 22:36:11', '2021-09-04 22:36:11'),
(46, 11, 12, '2021-09-04 22:36:12', '2021-09-04 22:36:12'),
(47, 11, 13, '2021-09-04 22:36:12', '2021-09-04 22:36:12'),
(48, 11, 14, '2021-09-04 22:36:12', '2021-09-04 22:36:12'),
(49, 11, 15, '2021-09-04 22:36:12', '2021-09-04 22:36:12'),
(50, 10, 1, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(51, 10, 2, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(52, 10, 3, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(53, 10, 4, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(54, 10, 5, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(55, 10, 6, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(56, 10, 9, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(57, 10, 10, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(58, 10, 11, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(59, 10, 12, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(60, 10, 13, '2021-09-04 22:36:51', '2021-09-04 22:36:51'),
(61, 12, 8, '2021-09-05 00:04:30', '2021-09-05 00:04:30'),
(62, 13, 9, '2021-09-05 01:11:31', '2021-09-05 01:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 'Test Comment', '2021-09-05 09:56:27', '2021-09-05 09:56:27'),
(2, 11, 1, 'ygas dhadaid a a', '2021-09-05 10:29:35', '2021-09-05 10:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi Hasan', 'mehedinaeem66@gmail.com', '01729531881', 'adad', 'adasd', '2021-09-09 21:29:20', '2021-09-09 21:29:20'),
(2, 'Mehedi Hasan', 'mehedinaeem66@gmail.com', '01729531881', 'dada', 'adad', '2021-09-09 21:34:25', '2021-09-09 21:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educational_qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consultation_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_consultation_fee` int(11) DEFAULT NULL,
  `available` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `name`, `educational_qualification`, `phone`, `email`, `designation`, `specialist`, `hospital_name`, `consultation_fee`, `old_consultation_fee`, `available`, `description`, `picture`, `created_at`, `updated_at`, `experience`) VALUES
(5, '18', 'Professor Dr. Ehsan Mahmood', 'Bsc', '5456464', 'doctortest@gmail.com', 'Assistant Director «Admin»', 'Neurosurgeon (Brain, Nerve & Spine Surgeon)', 'Prime Medical College & Hospital, Rangpur', NULL, NULL, '9am - 7pm', '<p>test</p>', NULL, '2022-03-26 02:39:25', '2022-03-26 02:39:25', 'Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital');

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
-- Table structure for table `job_apply_lists`
--

CREATE TABLE `job_apply_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` text COLLATE utf8mb4_unicode_ci,
  `number` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_apply_lists`
--

INSERT INTO `job_apply_lists` (`id`, `job_id`, `name`, `email`, `file`, `address`, `city`, `number`, `created_at`, `updated_at`) VALUES
(1, 3, 'Hailie Kilback', 'your.email+fakedata38516@gmail.com', NULL, '4206 Dudley Land', 'Maritzafort', '479', '2022-03-25 10:54:22', '2022-03-25 10:54:22'),
(2, 3, 'Andres Frami', 'your.email+fakedata14558@gmail.com', NULL, '2244 Bahringer Street', 'Hartmannland', '20', '2022-03-25 10:56:15', '2022-03-25 10:56:15'),
(3, 3, 'Yasmeen Dickens', 'your.email+fakedata82201@gmail.com', NULL, '6627 Liza Locks', 'North Elsabury', '334', '2022-03-25 10:59:43', '2022-03-25 10:59:43'),
(4, 3, 'Sage Kuhn', 'your.email+fakedata20697@gmail.com', NULL, '5755 Leann Squares', 'Madelinebury', '561', '2022-03-25 11:11:09', '2022-03-25 11:11:09'),
(5, 3, 'Brain Collins', 'your.email+fakedata99906@gmail.com', NULL, '1548 Rhoda Fork', 'Shieldsview', '272', '2022-03-25 11:12:20', '2022-03-25 11:12:20'),
(6, 3, 'Zane Rempel', 'your.email+fakedata10923@gmail.com', NULL, '7642 Oscar Bypass', 'North Aldamouth', '19', '2022-03-25 11:12:52', '2022-03-25 11:12:52'),
(7, 3, 'Malachi Cronin', 'your.email+fakedata33552@gmail.com', '1648228717.png', '744 Gulgowski Station', 'Wardview', '644', NULL, NULL),
(8, 3, 'Marie Gerhold', 'your.email+fakedata49774@gmail.com', NULL, '61185 Ritchie Vista', 'East Darrylberg', '493', '2022-03-25 11:24:01', '2022-03-25 11:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `job_circulars`
--

CREATE TABLE `job_circulars` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci,
  `short_des` text COLLATE utf8mb4_unicode_ci,
  `deadline` date DEFAULT NULL,
  `social` text COLLATE utf8mb4_unicode_ci,
  `location` text COLLATE utf8mb4_unicode_ci,
  `workplace` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `departmant` text COLLATE utf8mb4_unicode_ci,
  `job_resposibilities` text COLLATE utf8mb4_unicode_ci,
  `education_requirments` text COLLATE utf8mb4_unicode_ci,
  `additaional_requirments` text COLLATE utf8mb4_unicode_ci,
  `vacancy` text COLLATE utf8mb4_unicode_ci,
  `salary` text COLLATE utf8mb4_unicode_ci,
  `apply_process` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_circulars`
--

INSERT INTO `job_circulars` (`id`, `title`, `company_name`, `type`, `des`, `short_des`, `deadline`, `social`, `location`, `workplace`, `tags`, `status`, `created_at`, `updated_at`, `departmant`, `job_resposibilities`, `education_requirments`, `additaional_requirments`, `vacancy`, `salary`, `apply_process`) VALUES
(1, 'Financial Analyst, Emerging Corporate, SME Banking Division', 'Grameenphone', 'Full Time', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>', 'ব্র্যাক ব্যাংক বাংলাদেশের একটি বেসরকারি বাণিজ্যিক ব্যাংক, ব্র্যাক উন্নয়ন সংস্থা দ্বারা পরিচালিত, ক্ষুদ্র ও মাঝারি উদ্যোগের উপর দৃষ্টি নিবদ্ধ করে। ব্যাংকটির প্রধান কার্যালয় ঢাকা, বাংলাদেশে রয়েছে। এর 187টি শাখা, 18টি প্রিমিয়াম ব্যাঙ্কিং লাউঞ্জ, 457টি এসএমই ইউনিট অফিস, 481টি এজেন্ট ব্যাংকিং আউটলেট, 375টি এটিএম এবং 96টি সিডিএম রয়েছে', '2022-03-12', NULL, 'It is a long established fact that a reader will be', 'Work From Office', NULL, 1, '2022-03-22 11:24:12', '2022-03-25 05:03:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Financial Analyst, Emerging Corporate, SME Banking Division', 'BRAC Bank Limited', 'Full Time', '<p>ব্র্যাক ব্যাংক বাংলাদেশের একটি বেসরকারি বাণিজ্যিক ব্যাংক, ব্র্যাক উন্নয়ন সংস্থা দ্বারা পরিচালিত, ক্ষুদ্র ও মাঝারি উদ্যোগের উপর দৃষ্টি নিবদ্ধ করে। ব্যাংকটির প্রধান কার্যালয় ঢাকা, বাংলাদেশে রয়েছে। এর 187টি শাখা, 18টি প্রিমিয়াম ব্যাঙ্কিং লাউঞ্জ, 457টি এসএমই ইউনিট অফিস, 481টি এজেন্ট ব্যাংকিং আউটলেট, 375টি এটিএম এবং 96টি সিডিএম রয়েছে</p><h3>Vacancy</h3><p><br>নির্দিষ্ট না</p><p>&nbsp;</p><h3>Educational Requirements<br>&nbsp;</h3><p>UGC অনুমোদিত বা স্বীকৃত বিশ্ববিদ্যালয় থেকে স্নাতক ডিগ্রী;</p><h3>Experience Requirements<br>&nbsp;</h3><p>2 থেকে 5 বছর</p><h3>Job Responsibilities<br>&nbsp;</h3><ol><li>সম্পর্ক দলের সাথে ঘনিষ্ঠ সহযোগিতার মাধ্যমে আঞ্চলিক ব্যবসার বৃদ্ধিতে সহায়তা এবং অবদান;</li><li>ব্যবসায়িক ঋণ প্রস্তাব প্রস্তুত করুন এবং সম্পর্ক দল থেকে প্রাসঙ্গিক নথির প্রয়োজন এবং ক্রেডিট ঝুঁকি এবং পরবর্তী প্রশমন শনাক্ত করুন;</li><li>ব্যাংকের ঋণ প্রদান নীতি এবং নিয়ন্ত্রক নির্দেশিকা বিশ্লেষণ এবং ঋণ প্রস্তাব মূল্যায়ন;</li><li>আন্ডাররাইটিং প্রস্তাবে ঝুঁকি ব্যবস্থাপনার প্রয়োজনীয়তাগুলি পরিচালনা এবং বজায় রাখা;</li><li>বৈচিত্র্যময় স্থানীয় শিল্পে ব্যবসায়িক ঋণ আবেদনকারীদের আর্থিক বিবৃতি প্রস্তুত, নির্মাণ এবং বিশ্লেষণ করা;</li><li>সম্ভাব্য গ্রাহক পরিদর্শন এবং সম্ভাব্য গ্রাহকদের ঝুঁকি মূল্যায়ন পরিচালনা;</li><li>ব্যবসার সম্ভাবনা এবং সংশ্লিষ্ট ঝুঁকি বোঝার জন্য স্থানীয় বাজার এবং শিল্প পর্যবেক্ষণ করুন;</li></ol><h3>Salary<br>&nbsp;</h3><p>আলোচনা সাপেক্ষ</p><p>&nbsp;</p>', 'ব্র্যাক ব্যাংক বাংলাদেশের একটি বেসরকারি বাণিজ্যিক ব্যাংক, ব্র্যাক উন্নয়ন সংস্থা দ্বারা পরিচালিত, ক্ষুদ্র ও মাঝারি উদ্যোগের উপর দৃষ্টি নিবদ্ধ করে। ব্যাংকটির প্রধান কার্যালয় ঢাকা, বাংলাদেশে রয়েছে। এর 187টি শাখা, 18টি প্রিমিয়াম ব্যাঙ্কিং লাউঞ্জ, 457টি এসএমই ইউনিট অফিস, 481টি এজেন্ট ব্যাংকিং আউটলেট, 375টি এটিএম এবং 96টি সিডিএম রয়েছে', '2022-04-05', NULL, 'সারা বাংলাদেশ।', 'Work From Office', NULL, 1, '2022-03-25 04:18:04', '2022-03-25 04:57:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Dynamic Solutions Orchestrator', 'Hand, Sauer and Schamberger', 'Part Time', '<p>A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax</p>\r\n<ul style=\"list-style-type: disc;\">\r\n<li style=\"text-align: right;\">A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. <a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Paragraph\" data-jsarwt=\"1\" data-usg=\"AOvVaw2LqLVxJo_lUbw3DaL9lCvj\" data-ved=\"2ahUKEwjopLHPsuH2AhVqxzgGHagmDMoQmhN6BAgNEAI\">Wikipedia</a>of any language, paragraphs are usually an expected part of forA paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. <a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Paragraph\" data-jsarwt=\"1\" data-usg=\"AOvVaw2LqLVxJo_lUbw3DaL9lCvj\" data-ved=\"2ahUKEwjopLHPsuH2AhVqxzgGHagmDMoQmhN6BAgNEAI\">Wikipedia</a>A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. <a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Paragraph\" data-jsarwt=\"1\" data-usg=\"AOvVaw2LqLVxJo_lUbw3DaL9lCvj\" data-ved=\"2ahUKEwjopLHPsuH2AhVqxzgGHagmDMoQmhN6BAgNEAI\">Wikipedia</a>A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. <a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Paragraph\" data-jsarwt=\"1\" data-usg=\"AOvVaw2LqLVxJo_lUbw3DaL9lCvj\" data-ved=\"2ahUKEwjopLHPsuH2AhVqxzgGHagmDMoQmhN6BAgNEAI\">Wikipedia</a>mal writing, used to organize longer prose. <a class=\"ruhjFe NJLBac fl\" href=\"https://en.wikipedia.org/wiki/Paragraph\" data-jsarwt=\"1\" data-usg=\"AOvVaw2LqLVxJo_lUbw3DaL9lCvj\" data-ved=\"2ahUKEwjopLHPsuH2AhVqxzgGHagmDMoQmhN6BAgNEAI\">Wikipedia</a></li>\r\n</ul>', 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. Wikipedia', '2022-02-09', NULL, 'Cupiditate laudantium dolorem dolor sed.', 'Work From Home', NULL, 1, '2022-03-25 07:45:22', '2022-03-25 11:45:39', 'Quitzon', 'Regional Interactions Agent', 'Molestiae doloribus doloribus.', '2087 Pollich Creek', '10', '2000 - 3000', '7217 Alfred View');

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
(3, '2018_04_21_145313_create_roles_table', 1),
(4, '2018_04_24_134132_create_tags_table', 1),
(5, '2018_04_26_144755_create_categories_table', 1),
(6, '2018_04_30_163457_create_posts_table', 1),
(7, '2018_04_30_163658_create_category_post_table', 1),
(8, '2018_04_30_163710_create_post_tag_table', 1),
(9, '2018_06_07_054134_create_subscribers_table', 1),
(10, '2018_06_13_082204_create_jobs_table', 1),
(11, '2018_07_12_154144_create_post_user_table', 1),
(12, '2018_07_18_142248_create_comments_table', 1),
(13, '2021_09_10_031425_contact', 2),
(14, '2022_03_25_124958_create_doctors_table', 3),
(15, '2022_03_26_083824_create_appointments_table', 4);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `image`, `body`, `view_count`, `status`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 1, 'Electronicsad', 'electronicsad', 'test-post-2021-07-01-60dd8849ca566.jpg', '<p>ElectronicefrdsfsdElectronicefrdsfsdElectronicefrdsfsdElectronicefrdsfsdElectronicefrdsfsd</p>', 1, 1, 1, '2021-09-01 23:09:23', '2021-09-04 22:33:07'),
(2, 1, 'tetrerefetrt', 'tetrerefetrt', 'test-post-2021-07-01-60dd8849ca566.jpg', '<p><strong>ere tert ewr&nbsp;</strong></p>', 2, 1, 1, '2021-09-02 00:03:27', '2021-09-02 08:54:10'),
(3, 1, 'er weioewj foiewr eworew', 'er-weioewj-foiewr-eworew', 'test-post-2021-07-01-60dd8849ca566.jpg', '<p>uiy98 8y8yy8&nbsp;</p>', 2, 1, 1, '2021-09-03 07:02:44', '2021-09-05 11:11:31'),
(4, 1, 'tesdt ewdpsd', 'tesdt-ewdpsd', 'test-post-2021-07-01-60dd8849ca566.jpg', '<p>dewf ewr we rwer&nbsp;</p>', 0, 1, 1, '2021-09-03 09:10:28', '2021-09-03 09:10:28'),
(5, 1, 'Test News Post', 'test-news-post', 'test-news-post-2021-09-04-61339ffde51ac.jpg', '<p>hjg iuy 8iuh9i</p>', 1, 1, 1, '2021-09-04 10:34:08', '2021-09-05 10:49:55'),
(6, 1, 'news1', 'news1', 'news1-2021-09-05-613447720813f.jpg', '<p>neswwqd wq rw</p>', 1, 1, 1, '2021-09-04 22:28:40', '2021-09-05 11:11:19'),
(7, 1, 'news2', 'news2', 'news2-2021-09-05-613447ce39029.jpg', '<p>dr eewr</p>', 0, 1, 1, '2021-09-04 22:30:09', '2021-09-04 22:31:31'),
(8, 1, 'new post3', 'new-post3', 'new-post3-2021-09-05-613447f123342.jpg', '<p>e sfokse w3miueq3 2</p>', 2, 1, 1, '2021-09-04 22:30:43', '2022-03-21 10:52:53'),
(9, 1, 'news4', 'news4', 'news4-2021-09-05-6134481743179.jpg', '<p>ewpor wekn eriwe ,m mwqkjoi qwkq q</p>', 1, 1, 1, '2021-09-04 22:31:22', '2022-03-15 05:05:13'),
(10, 1, 'new post5', 'new-post5', 'new-post5-2021-09-05-6134485b1e409.jpg', '<p>&nbsp;b rw3rewr ew er ter</p>', 6, 1, 1, '2021-09-04 22:32:29', '2022-04-06 15:30:04'),
(11, 1, 'k 3qihq3 ehemew r', 'k-3qihq3-ehemew-r', 'k-3qihq3-ehemew-r-2021-09-05-613448bfc7fe0.jpg', '<p>se werwer werwe</p>', 10, 1, 1, '2021-09-04 22:34:10', '2022-03-26 01:11:54'),
(12, 1, 'details with post', 'details-with-post', 'details-with-post-2021-09-05-61345deca1c18.png', '<p>From there, we generally start working on visual concepts that can make that vision more tangible. Our stakeholders are often editors with&nbsp;From there, we generally start working on visual concepts that can make that vision more tangible. Our stakeholders are often editors with&nbsp;From there, we generally start working on visual concepts that can make that vision more tangible. Our stakeholders are often editors with</p>', 6, 1, 1, '2021-09-05 00:04:30', '2022-03-26 01:13:28'),
(13, 1, 'kdf s sd fse ew se esr w', 'kdf-s-sd-fse-ew-se-esr-w', 'kdf-s-sd-fse-ew-se-esr-w-2021-09-05-61346d9cd77f1.jpg', '<p>uiyaw rasyd baw8eyqwewqiuyrwerhwrwq qw ywer hke9we&nbsp;</p>', 13, 1, 1, '2021-09-05 01:11:30', '2022-04-06 15:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-09-01 23:09:23', '2021-09-01 23:09:23'),
(2, 2, 1, '2021-09-02 00:03:27', '2021-09-02 00:03:27'),
(3, 3, 1, '2021-09-03 07:02:47', '2021-09-03 07:02:47'),
(4, 4, 1, '2021-09-03 09:10:30', '2021-09-03 09:10:30'),
(5, 5, 1, '2021-09-04 10:34:09', '2021-09-04 10:34:09'),
(6, 6, 1, '2021-09-04 22:28:41', '2021-09-04 22:28:41'),
(7, 7, 1, '2021-09-04 22:30:09', '2021-09-04 22:30:09'),
(8, 8, 1, '2021-09-04 22:30:44', '2021-09-04 22:30:44'),
(9, 9, 1, '2021-09-04 22:31:22', '2021-09-04 22:31:22'),
(10, 10, 1, '2021-09-04 22:32:30', '2021-09-04 22:32:30'),
(11, 11, 1, '2021-09-04 22:34:10', '2021-09-04 22:34:10'),
(12, 12, 1, '2021-09-05 00:04:30', '2021-09-05 00:04:30'),
(13, 13, 1, '2021-09-05 01:11:32', '2021-09-05 01:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `post_user`
--

CREATE TABLE `post_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_user`
--

INSERT INTO `post_user` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2021-09-02 02:04:50', '2021-09-02 02:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `doctor_id` int(10) UNSIGNED DEFAULT NULL,
  `appointment_id` int(10) UNSIGNED DEFAULT NULL,
  `short_presception` text,
  `presception` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Author', 'author', NULL, NULL),
(3, 'user', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin@blog.com', '2021-09-06 04:47:06', '2021-09-06 04:47:06'),
(2, 'freelancernoor0@gmail.com', '2021-10-28 14:58:04', '2021-10-28 14:58:04'),
(3, 'mehedunaeem66@gmail.com', '2022-03-17 21:54:54', '2022-03-17 21:54:54'),
(4, 'mehedi@gmail.com', '2022-04-10 02:23:50', '2022-04-10 02:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'sdfdsfds', 'sdfdsfds', '2021-09-01 23:08:36', '2021-09-01 23:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `about` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `password`, `image`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'MD.Admin', 'admin', 'admin@blog.com', '$2y$10$J3uYl2VWM8NupUOgs.TpVeVzAl2k0xvwnRUcdY63cunpvRzWhXZJO', 'mdadmin-2022-04-06-624da68217419.png', 'hjgjg  yutg', 'CbNEzNryrJsM0oMq02cJWRHnD7d0fvca7zZ4zM5yRtzPZ9WxVX89aErz7hBv', NULL, '2022-04-11 13:43:02'),
(2, 2, 'MD.Author', 'author', 'author@blog.com', '$2y$10$pUf7zzdk7hZrxFeRkRu/bue0LjpLLCF3DKnGTQJ0SSm8eiUD0YW6K', 'default.png', NULL, 'zr6QPCOy6nrA5YvM3EdoM3g7PMscEDr554KNt1b7Dm4K4DhbxB9BXJz4jrhI', NULL, NULL),
(3, 2, 'user', 'userrrr', 'user@gmail.com', '$2y$10$8kWL.0dq5.N14ZA1AceMRuoLeDCvrc1g8KYcIfnooK5H8ixGCitxO', 'default.png', NULL, NULL, '2021-09-03 09:52:19', '2021-09-03 09:52:19'),
(4, 2, 'Mehedi Hasan', 'dfsefs', 'mehedinaeem66@gmail.com', '$2y$10$5C5CJA1vWAYF8vJLpwO8LeKWbLVHwEUHj08Bmllv7aMrE/R1LsREi', 'default.png', NULL, NULL, '2021-09-07 05:11:32', '2021-09-07 05:11:32'),
(5, 2, 'Akbar', 'akbar', 'aliakbartutul749@gmail.com', '$2y$10$JpEIaE/pAg.t3K7sC.CD1.juEqxtbJ.0/qseyXHO1kmrxWJJJIA9m', 'default.png', NULL, NULL, '2021-09-10 07:32:44', '2021-09-10 07:32:44'),
(6, 2, 'Anwar Hossain', 'anwar', 'anwarhossain.csl@gmail.com', '$2y$10$yq4uiH6DrshCwla287Tu.uHdlGLGUm7QkxLjbKN1MWdhgnkEtDaVi', 'default.png', NULL, NULL, '2022-03-15 05:06:54', '2022-03-15 05:06:54'),
(7, 2, 'Chaya Breitenberg', 'nyasia12', 'your.email+fakedata22862@gmail.com', '$2y$10$ibAWXoBv849XS/5sKtbsuuFIlFtvkoNdv8kjSH3BoqbRlRj2kA25.', 'default.png', NULL, NULL, '2022-03-15 19:47:00', '2022-03-15 19:47:00'),
(8, 3, 'Cary Crist', 'sibyl-franecki', 'your.email+fakedata92505@gmail.com', '$2y$10$CIK4fOwl55.rePbgZZgCq.AKFBqAUc71jBYYo1JotgDLoTsxsT9y6', 'default.png', NULL, NULL, '2022-03-19 10:01:16', '2022-03-19 10:01:16'),
(9, 2, 'Doctor', 'doctor', 'doctor@gmail.com', '$2y$10$RkG2CHWRL8FqWK9IPPFKtuEaETK6ERRb61SG.DWEhQuULzU7BcuXW', 'default.png', NULL, 'DpmyJ94e3s8Hv5m7cGyeoCL4tgCG0B5AZjc0DRVgLbNCAkSmXwPDaiT1nsQD', '2022-03-19 10:11:51', '2022-03-19 10:11:51'),
(10, 3, 'Delta Grimes', 'neomajakubowski', 'your.email+fakedata24123@gmail.com', '$2y$10$FCuEr6zt/.qqZAU284ScruHSw104XAnzQRfpfzVKcTKhr2WllVZ4C', 'default.png', NULL, NULL, '2022-03-22 10:04:25', '2022-03-22 10:04:25'),
(11, 3, 'Joana Wiza', 'helmer68', 'your.email+fakedata15975@gmail.com', '$2y$10$rxpiX4bvuAh9OLBeazsYmuvEbhn.MIaR3vtPzCUwKxL3/KpzXlxZq', 'default.png', NULL, NULL, '2022-03-24 11:56:26', '2022-03-24 11:56:26'),
(12, 3, 'Edward Kshlerin', 'desmond-tromp', 'your.email+fakedata42098@gmail.com', '$2y$10$2dIh/D8I0v63gRKJGagcfeZ98Vf5U35UQ/4NbJdUXzW/VaYq84hM6', 'default.png', NULL, NULL, '2022-03-24 12:18:18', '2022-03-24 12:18:18'),
(13, 3, 'Dulce Block', 'pansyokeefe', 'your.email+fakedata99560@gmail.com', '$2y$10$ZWhoBxudHQ8o/IR4ASzYVOjR863rBib340ysiIeHUBbp6xjBt1Ns2', 'default.png', NULL, NULL, '2022-03-24 21:14:59', '2022-03-24 21:14:59'),
(14, 2, 'Mathias Dicki', 'Mathias Dicki', 'your.email+fakedata40813@gmail.com', '$2y$10$0G.PMZcFKf120dnPzMzLXu44Qc/kmHixF3jKtyGTVQaunVtlNWBf2', 'mathias-dicki-2022-03-26-623ec9dc0ef14.png', NULL, NULL, '2022-03-26 02:07:59', '2022-03-26 02:07:59'),
(16, 2, 'Delphia Gleichner', 'Delphia Gleichner', 'your.email+fakedata63208@gmail.com', '$2y$10$OrZd2OL98XshE2pYki8Dhe9Vh9i.nSZBQUs/T2fnPErMa0hxXjhEa', 'delphia-gleichner-2022-03-26-623eca849e835.png', NULL, NULL, '2022-03-26 02:10:45', '2022-03-26 02:10:45'),
(17, 2, 'Annalise Beer', 'Annalise Beer', 'your.email+fakedata44294@gmail.com', '$2y$10$lIVwm8y82pbgcpWW5kKsceE5DUEYa6HeY8T4DS/.NIi8LSiQi.Z3G', 'default.png', NULL, NULL, '2022-03-26 02:27:54', '2022-03-26 02:27:54'),
(18, 2, 'Dr. Mahfuzzaman dip', 'Dr. Mahfuzzaman dip', 'doctortest@gmail.com', '$2y$10$zh/rMcPO3hrNlC13xWhFE.zGY/vPjURHBZQMiIHjv9xTEgPUuDNH2', 'professor-dr-ehsan-mahmood-2022-03-27-623fe7338395a.jpgdr-mahfuzzaman-dip-2022-04-11-62544625204c8.jpg', 'deesed', 'xG6QXdJ16AnjxQ3qTHIOtwFGFdS7RyO2LnoldMNrRUqv1DFaGtvUEoFNXDJI', '2022-03-26 02:39:25', '2022-03-27 02:26:17'),
(19, 3, 'ullasshop', 'anwar4035', 'info@ullasshop.com', '$2y$10$OfnTYpJGv097MlbjjsiTWO5VlLeGU0fMBVW4rOSOFQ9HFHj/UpUxC', 'default.png', NULL, 'UlUkETQQ9CqxdGCxzD33oEQRhbAgUjZqsHFRqkZMnXPwNAnarigyJ9vQ4IUs', '2022-03-26 15:32:53', '2022-03-26 15:32:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_apply_lists`
--
ALTER TABLE `job_apply_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_circulars`
--
ALTER TABLE `job_circulars`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_user`
--
ALTER TABLE `post_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_post_id_foreign` (`post_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_apply_lists`
--
ALTER TABLE `job_apply_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_circulars`
--
ALTER TABLE `job_circulars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post_user`
--
ALTER TABLE `post_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_user`
--
ALTER TABLE `post_user`
  ADD CONSTRAINT `post_user_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
