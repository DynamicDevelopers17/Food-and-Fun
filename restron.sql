-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 09:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restron`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `food_id`, `quantity`, `created_at`, `updated_at`) VALUES
(32, '2', '4', '3', '2022-01-07 07:07:51', '2022-01-07 07:07:51');

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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Chocolate Cake', '200', '1641208877.png', 'Unsalted butter, softened, plus extra for greasing, caster sugar, cocoa powder, baking powder.', '2021-12-23 10:46:02', '2022-01-03 05:51:17'),
(6, 'Pasta', '100', '1641208830.png', 'Best handmade tomato sauce, broccoli, mushrooms, peppers, zuccini, olive & jalapeno taste', '2021-12-24 02:47:53', '2022-01-03 05:50:30'),
(7, 'Salad', '100', '1641212261.png', 'Special Vegetable and Fruit Salad Watermelon Pineapple Apple Salad and many more.', '2021-12-24 02:55:16', '2022-01-03 06:47:41'),
(9, 'Pizza', '100', '1641559615.png', 'Best in taste', '2022-01-07 07:16:27', '2022-01-07 07:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `foodchefs`
--

CREATE TABLE `foodchefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foodchefs`
--

INSERT INTO `foodchefs` (`id`, `name`, `speciality`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Chef 1', 'Pizza chefs', '1640590610.jpg', '2021-12-27 01:45:38', '2021-12-27 02:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `getintouches`
--

CREATE TABLE `getintouches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `getintouches`
--

INSERT INTO `getintouches` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'demo@gmail.com', '8989898989', 'Hello', '2021-12-30 06:02:13', '2021-12-30 06:02:13'),
(2, 'Customer 1', 'demo1@gmail.com', '8989898989', 'Hi there', '2021-12-30 06:04:09', '2021-12-30 06:04:09'),
(3, 'Customer 2', 'demo2@gmail.com', '8989898989', 'Please help', '2021-12-30 06:05:29', '2021-12-30 06:05:29'),
(4, 'Customer 3', 'hey.aditya.burman@gmail.com', '8989898989', 'Hi', '2021-12-30 06:07:59', '2021-12-30 06:07:59'),
(5, 'Customer 4', 'adityaburman969@gmail.com', '8989898989', 'Demo demo', '2021-12-30 09:52:14', '2021-12-30 09:52:14'),
(6, 'Customer 5', 'demo@gmail.com', '8989898989', 'Hi demo', '2021-12-30 09:53:05', '2021-12-30 09:53:05'),
(7, 'Customer 6', 'demo@gmail.com', '8989898989', 'Hello there', '2021-12-30 09:54:17', '2021-12-30 09:54:17'),
(8, 'Customer 7', 'demo@gmail.com', '8989898989', 'fgjm', '2021-12-30 09:57:20', '2021-12-30 09:57:20'),
(9, 'Customer 8', 'demo@gmail.com', '7878787878', 'db', '2021-12-30 10:02:41', '2021-12-30 10:02:41'),
(10, 'Customer 9', 'demo@gmail.com', '8989898989', 'Please read my message', '2021-12-30 10:07:19', '2021-12-30 10:07:19'),
(11, 'Customer 10', 'demo@gmail.com', '8989898989', 'Nice', '2021-12-30 10:08:17', '2021-12-30 10:08:17'),
(12, 'Customer 11', 'demo@gmail.com', '08989898989', 'Good', '2021-12-30 10:09:31', '2021-12-30 10:09:31'),
(13, 'Customer 12', 'demo@gmail.com', '8888888888', 'Hi', '2021-12-30 10:11:58', '2021-12-30 10:11:58'),
(14, 'Customer 13', 'demo@gmail.com', '8989898989', 'Hello', '2021-12-30 12:15:13', '2021-12-30 12:15:13');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_12_21_132147_create_sessions_table', 1),
(7, '2021_12_22_124117_create_food_table', 2),
(8, '2021_12_26_132402_create_reservations_table', 3),
(9, '2021_12_27_064237_create_foodchefs_table', 4),
(10, '2021_12_27_081101_create_carts_table', 5),
(11, '2021_12_27_184054_create_orders_table', 6),
(12, '2021_12_30_103129_create_contacts_table', 7),
(13, '2021_12_30_103726_create_contacts_table', 8),
(14, '2021_12_30_112552_create_getintouches_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foodname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `foodname`, `price`, `quantity`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Demo 1', '100', '6', 'Aditya Burman', '8989898989', 'demo address', '2021-12-27 13:18:39', '2021-12-27 13:18:39'),
(2, 'Momos', '200', '5', 'Aditya Burman', '8989898989', 'demo address', '2021-12-27 13:18:39', '2021-12-27 13:18:39'),
(3, 'Pasta', '100', '1', 'Aditya Burman', '8989898989', 'demo address', '2021-12-27 13:18:39', '2021-12-27 13:18:39'),
(4, 'Demo 1', '100', '6', 'demo1', '8989898989', 'demo address', '2021-12-29 06:07:42', '2021-12-29 06:07:42'),
(5, 'Momos', '200', '5', 'demo1', '8989898989', 'demo address', '2021-12-29 06:07:42', '2021-12-29 06:07:42'),
(6, 'Salad', '100', '6', 'Aditya Burman', '8989898989', 'demo address', '2022-01-04 04:08:14', '2022-01-04 04:08:14'),
(7, 'Chocolate Cake', '200', '1', 'Aditya Burman', '8989898989', 'demo address', '2022-01-04 04:08:14', '2022-01-04 04:08:14'),
(8, 'Chocolate Cake', '200', '1', 'Aditya Burman', '8989898989', 'demo address', '2022-01-04 04:08:14', '2022-01-04 04:08:14'),
(9, 'Chocolate Cake', '200', '1', 'Aditya Burman', '8989898989', 'demo address', '2022-01-04 04:08:14', '2022-01-04 04:08:14'),
(10, 'Chocolate Cake', '200', '1', 'Aditya Burman', '8989898989', 'demo address', '2022-01-04 04:08:14', '2022-01-04 04:08:14'),
(11, 'Chocolate Cake', '200', '1', 'Aditya Burman', '8989898989', 'demo address', '2022-01-04 04:08:14', '2022-01-04 04:08:14'),
(12, 'Chocolate Cake', '200', '1', 'Aditya Burman', '8989898989', 'demo address', '2022-01-04 04:08:14', '2022-01-04 04:08:14'),
(13, 'Salad', '100', '6', 'Demo', '7878787878', 'demo address', '2022-01-04 14:05:09', '2022-01-04 14:05:09'),
(14, 'Chocolate Cake', '200', '1', 'Demo', '7878787878', 'demo address', '2022-01-04 14:05:09', '2022-01-04 14:05:09'),
(15, 'Chocolate Cake', '200', '1', 'Demo', '7878787878', 'demo address', '2022-01-04 14:05:09', '2022-01-04 14:05:09'),
(16, 'Chocolate Cake', '200', '1', 'Demo', '7878787878', 'demo address', '2022-01-04 14:05:09', '2022-01-04 14:05:09'),
(17, 'Salad', '100', '1', 'Demo', '7878787878', 'demo address', '2022-01-04 14:05:09', '2022-01-04 14:05:09'),
(18, 'Pasta', '100', '3', 'Aditya Burman', '8989898989', 'demo address', '2022-01-06 09:28:08', '2022-01-06 09:28:08'),
(19, 'Chocolate Cake', '200', '5', 'Aditya Burman', '8989898989', 'demo address', '2022-01-06 09:28:08', '2022-01-06 09:28:08'),
(20, 'Pasta', '100', '3', 'demo', '8989898989', 'adadada', '2022-01-06 09:28:29', '2022-01-06 09:28:29'),
(21, 'Chocolate Cake', '200', '5', 'demo', '8989898989', 'adadada', '2022-01-06 09:28:29', '2022-01-06 09:28:29'),
(22, 'Pasta', '100', '3', 'demo', '9090909090', 'asd', '2022-01-06 09:35:53', '2022-01-06 09:35:53'),
(23, 'Chocolate Cake', '200', '5', 'demo', '9090909090', 'asd', '2022-01-06 09:35:53', '2022-01-06 09:35:53'),
(24, 'Chocolate Cake', '200', '3', 'demo', '9090909090', 'demo address', '2022-01-07 07:08:45', '2022-01-07 07:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('amitkumar291199@gmail.com', '$2y$10$r9M05hzMTNDliuoHC25SVu3zP/uHt7oOwwHDLlcJ3rNUtPHBGkGpe', '2021-12-31 03:23:12'),
('hey.aditya.burman@gmail.com', '$2y$10$mtDImkN85wM9ZdFWxUKz.uJBaRgInW03C4eWvmyErZGi2qh3iXIQK', '2021-12-31 06:53:22'),
('adityaburman24@gmail.com', '$2y$10$zcAjoPXhut2HiP.8HOaNSeFx/2mcCJXMQnh9vhyKdB1SM3iuMI15u', '2022-01-02 06:02:08'),
('adityaburman969@gmail.com', '$2y$10$VksPAFnZFhj3msoutbJPruQX1Zo83HesEMJEeXdnlKF8dZOZLfZEi', '2022-01-02 06:02:33');

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `guest`, `date`, `time`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Aditya Burman', 'hey.aditya.burman@gmail.com', '8989898989', '6', '2022-01-01', '21:00', 'Hi there', '2021-12-26 08:09:25', '2021-12-26 08:09:25'),
(2, 'Demo', 'demo@gmail.com', '7878787878', '8', '2022-01-01', '20:00', 'Hi there', '2021-12-29 06:10:39', '2021-12-29 06:10:39'),
(3, 'Aditya', 'adityaburman969@gmail.com', '8989898989', '8', '2022-01-08', '21:00', 'hello', '2022-01-07 07:13:15', '2022-01-07 07:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cZuZM07UeolrXCusVyUJHqv1Or5dVeuPNm3b1TWp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM0xmcEVVNnJkTjExZ0ZjM2pPWGlkMG5raW5JVjNGUlJOVDNSdE1RSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9yZWRpcmVjdHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkNllHUkM1Y0VSS2J0YzYzNVZ5M2NpT3VwaXVGbkdZaU0ySUJnY0JiN1hHaHlCSW9zMDFvcnEiO30=', 1641563141),
('JsF3q094Gu33iLQnp2ji01IBd9Gf7RCJLUGIu9DN', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSHhpQzBLZVMzNmdpb1h3cWdEdGRKaTdUT1BYYUJ3WWdBTFFGTFFlMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWRpcmVjdHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo4O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkL0h1WWE2SnRlQlZ6djRPalIuV0lWT25mb010M08uUmw4WHE1V3gyRkdFZkNmclM5eGQzNGkiO30=', 1641631926),
('MEhqugnBOCpcv3CbxjhL0RSnPP0f5n9ug4nUuSkW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRmlNS1RIWThyOUROdXpIQ2xBdUFiQ24xeWRYc3BaN25wS25NVjhpdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9mb29kbWVudSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQ2WUdSQzVjRVJLYnRjNjM1VnkzY2lPdXBpdUZuR1lpTTJJQmdjQmI3WEdoeUJJb3MwMW9ycSI7fQ==', 1641555480);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Dynamic Developer', 'hey.aditya.burman@gmail.com', '1', NULL, '$2y$10$6YGRC5cERKbtc635Vy3ciOupiuFnGYiM2IBgcBb7XGhyBIos01orq', NULL, NULL, 'dJEC6QxeVwTODOvSSiVGPbs2BwSOIM7j9NfKBE2TCbRg779o7tm0idISs0ZE', NULL, NULL, '2021-12-21 08:00:38', '2021-12-21 08:00:38'),
(3, 'Durga Sahu', 'durga788sahu@gmail.com', '0', NULL, '$2y$10$sFkioGbhLOV2OEMTUzmqP.L6f2FEMBrcvpqJdOYw/wh8/oy2xm.Fa', NULL, NULL, NULL, NULL, NULL, '2021-12-22 03:26:24', '2021-12-22 03:26:24'),
(4, 'Anshu Jangid', 'jangidanshu2000@gmail.com', '1', NULL, '$2y$10$B8qJiM/TT0Aka9VHK1fnxeRCybmwoHeMmz5OCI4hrQXBv/VjiIciW', NULL, NULL, NULL, NULL, NULL, '2021-12-22 03:27:26', '2021-12-22 03:27:26'),
(5, 'Amit Kumar', 'amitkumar291199@gmail.com', '1', NULL, '$2y$10$BksHa8DPHNQ1eobtgfc9T.8e5bb5refKNFXt5E5Wy2p8kdTBUXldK', NULL, NULL, NULL, NULL, NULL, '2021-12-22 03:28:05', '2021-12-22 03:28:05'),
(6, 'Chef 1', 'adityaburman24@gmail.com', '0', NULL, '$2y$10$UJQvE1R4zbsy.MuELO4wXenfHxX.Gb/eG/haImbF.pDwf69d3wdpG', NULL, NULL, NULL, NULL, NULL, '2021-12-31 05:38:09', '2021-12-31 05:38:09'),
(7, 'Demo 2', 'demo2@gmail.com', '0', NULL, '$2y$10$zYPPIinjWhiYbocAFDhsAeM/kTlayB/5G99I9GUHKbK9NZYNeyRaa', NULL, NULL, NULL, NULL, NULL, '2022-01-02 06:00:37', '2022-01-02 06:00:37'),
(8, 'Dynamic Developer', 'adityaburman969@gmail.com', '0', NULL, '$2y$10$/HuYa6JteBVzv4OjR.WIVOnfoMt3O.Rl8Xq5Wx2FGEfCfrS9xd34i', NULL, NULL, NULL, NULL, NULL, '2022-01-08 03:20:15', '2022-01-08 03:20:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodchefs`
--
ALTER TABLE `foodchefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getintouches`
--
ALTER TABLE `getintouches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `foodchefs`
--
ALTER TABLE `foodchefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `getintouches`
--
ALTER TABLE `getintouches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
