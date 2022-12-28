-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 02:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koskita_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `discount_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `discount_date_from` date NOT NULL,
  `discount_date_end` date NOT NULL,
  `referral_code` varchar(45) NOT NULL,
  `discount_ percent` decimal(10,0) NOT NULL,
  `discount_ nominal` decimal(10,0) NOT NULL,
  `min_transaction` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facility_id` int(11) NOT NULL,
  `size` varchar(5) NOT NULL,
  `bed` tinyint(1) NOT NULL,
  `cupboard` tinyint(1) NOT NULL,
  `pillow` tinyint(1) NOT NULL,
  `mirror` tinyint(1) NOT NULL,
  `desk` tinyint(1) NOT NULL,
  `chair` tinyint(1) NOT NULL,
  `window` tinyint(1) NOT NULL,
  `toilet` tinyint(1) NOT NULL,
  `tub` tinyint(1) NOT NULL,
  `shower` tinyint(1) NOT NULL,
  `electricity` tinyint(1) NOT NULL,
  `water` tinyint(1) NOT NULL,
  `ac` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facility_id`, `size`, `bed`, `cupboard`, `pillow`, `mirror`, `desk`, `chair`, `window`, `toilet`, `tub`, `shower`, `electricity`, `water`, `ac`, `created_at`, `updated_at`) VALUES
(3, '3x3', 1, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, '2022-12-25 07:42:33', '2022-12-28 05:15:04'),
(4, '3x3', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, '2022-12-26 05:22:45', '2022-12-26 05:22:45'),
(5, '3x4', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-12-26 05:22:45', '2022-12-26 05:22:45');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_03_190812_create_reviews_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_code` varchar(10) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `permalink` varchar(100) DEFAULT NULL,
  `package_desc` text NOT NULL,
  `feature_img` varchar(255) DEFAULT NULL,
  `facility_id` int(11) DEFAULT NULL,
  `price_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_code`, `package_name`, `permalink`, `package_desc`, `feature_img`, `facility_id`, `price_id`, `created_at`, `updated_at`) VALUES
(40, 'PKG001', 'Package 1', NULL, 'Size 3x3, bed, desk, mirror', '1466-min.jpg', 3, 1, '2022-12-25 21:29:32', '2022-12-25 21:29:32'),
(41, 'PKG002', 'Package 2', NULL, 'Size 3x3, bed, desk, cupboard', '1284-min.jpg', 4, 2, '2022-12-25 21:31:29', '2022-12-25 21:31:29'),
(42, 'PKG003', 'Package 3', NULL, 'Size 3x3, bed, desk, cupboard, AC', '417.jpg', 5, 3, '2022-12-25 21:36:13', '2022-12-25 21:36:13');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `price_id` int(11) NOT NULL,
  `price_name` varchar(50) DEFAULT NULL,
  `monthly_price` decimal(10,0) NOT NULL,
  `price_date_from` date DEFAULT NULL,
  `price_date_end` date DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`price_id`, `price_name`, `monthly_price`, `price_date_from`, `price_date_end`, `day`, `created_at`, `update_at`) VALUES
(1, 'PKG001 Price', '500000', NULL, NULL, NULL, '2022-12-03 02:03:06', '2022-12-03 02:03:06'),
(2, 'PKG002 Price', '750000', NULL, NULL, NULL, '2022-12-03 02:06:35', '2022-12-03 02:06:35'),
(3, 'PKG003 Price', '950000', NULL, NULL, NULL, '2022-12-03 02:06:35', '2022-12-03 02:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `rent_id` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` int(11) NOT NULL,
  `trash_bank` tinyint(1) DEFAULT NULL,
  `laundry` tinyint(1) DEFAULT NULL,
  `total_price` decimal(10,0) DEFAULT NULL,
  `validation` tinyint(1) NOT NULL DEFAULT 0,
  `resident_name` varchar(255) NOT NULL,
  `resident_gender` tinyint(1) NOT NULL,
  `resident_telp` varchar(20) NOT NULL,
  `resident_email` varchar(255) NOT NULL,
  `date_started` date DEFAULT NULL,
  `date_ended` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`rent_id`, `id`, `room_id`, `trash_bank`, `laundry`, `total_price`, `validation`, `resident_name`, `resident_gender`, `resident_telp`, `resident_email`, `date_started`, `date_ended`, `created_at`, `updated_at`) VALUES
(3, 7, 2, NULL, 1, '550000', 1, 'Mellisa Damayanti', 0, '08980798454', 'mellisa@user.com', '2022-12-28', '2023-01-27', '2022-12-27 08:40:33', '2022-12-27 08:40:33'),
(5, 7, 5, NULL, 1, '800000', 0, 'Putu Adi Sastrawan', 1, '08980798454', 'adi@user.com', '2022-12-28', '2023-01-27', '2022-12-27 09:16:26', '2022-12-27 09:16:26'),
(6, 7, 10, NULL, NULL, '950000', 0, 'Dewa Komang Reiki Perdana Wisnu', 1, '08980798454', 'reiki@admin.com', '2022-12-28', '2023-01-27', '2022-12-27 16:32:50', '2022-12-27 16:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `package_id`, `rating`, `description`, `created_at`, `updated_at`) VALUES
(5, 7, 40, 4, 'Uwuu', '2022-12-28 03:07:13', '2022-12-28 04:39:53'),
(6, 7, 0, 2, 'Uwu', '2022-12-27 19:32:23', '2022-12-27 19:32:23'),
(12, 7, NULL, 4, 'uwa', '2022-12-28 05:22:47', '2022-12-28 05:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `room_number` int(11) DEFAULT NULL,
  `max_resident` int(11) DEFAULT NULL,
  `room_booked` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `package_id`, `room_number`, `max_resident`, `room_booked`, `created_at`, `updated_at`) VALUES
(1, 40, 1, 1, 0, '2022-12-26 05:41:34', '2022-12-27 09:27:21'),
(2, 40, 2, 1, 1, '2022-12-26 05:41:34', '2022-12-28 05:13:56'),
(3, 40, 3, 1, 0, '2022-12-26 05:42:54', '2022-12-26 05:42:54'),
(4, 40, 4, 1, 0, '2022-12-26 05:42:54', '2022-12-26 05:42:54'),
(5, 41, 5, 1, 1, '2022-12-26 05:43:42', '2022-12-27 09:13:33'),
(6, 41, 6, 1, 0, '2022-12-26 05:43:42', '2022-12-27 09:18:02'),
(7, 41, 7, 1, 0, '2022-12-26 06:06:02', '2022-12-26 06:06:02'),
(8, 41, 8, 1, 0, '2022-12-26 06:06:02', '2022-12-27 16:32:07'),
(9, 42, 9, 1, 0, '2022-12-26 06:06:35', '2022-12-27 09:10:41'),
(10, 42, 10, 1, 1, '2022-12-26 06:06:35', '2022-12-27 16:32:42'),
(11, 42, 11, 1, 0, '2022-12-26 06:06:58', '2022-12-27 16:37:37'),
(12, 42, 12, 1, 0, '2022-12-26 06:06:58', '2022-12-26 06:06:58');

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
  `role` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `id_card` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `id_card`, `phone_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Putu Adi Sastrawan', 'adi@admin.com', NULL, '$2y$10$kC7TZPMqN82oB430O8poHuJrlrT.923j2y2vSq8JsD45E8JyAkL9a', 1, NULL, NULL, NULL, '2022-12-25 21:08:59', '2022-12-25 21:08:59'),
(5, 'Putu Adi Sastrawan', 'adi@user.com', NULL, '$2y$10$GvCZmMQOl2qfA24zsmdmBeqocX775sr3kkqobV6iWlVXXKyBNoxIe', 0, NULL, NULL, NULL, '2022-12-25 21:10:27', '2022-12-25 21:10:27'),
(6, 'Mellisa Damayantii', 'mellisa@admin.com', NULL, '$2y$10$t/Zy7UhR2L4ybBR90.GSGeTRk50XJmPp8XmcK6KgSwqEORmZoIrii', 1, NULL, NULL, NULL, '2022-12-25 21:12:14', '2022-12-25 21:12:14'),
(7, 'Mellisa Damayanti', 'mellisa@user.com', NULL, '$2y$10$bc9w6e1Rz3LQJmRm5k1XsePkiZcHS0bvNe5ApsBilXaHN1wgsdto.', 0, NULL, NULL, NULL, '2022-12-25 21:12:46', '2022-12-25 21:12:46'),
(8, 'Dewa Komang Reiki Perdana Wisnu', 'reiki@admin.com', NULL, '$2y$10$yJQNI1Ms2MHafYznffhduOsEUhcndbzMFtEObU5WxfYjo80hWxzzm', 1, NULL, NULL, NULL, '2022-12-25 21:15:45', '2022-12-25 21:15:45'),
(9, 'Dewa Komang Reiki Perdana Wisnu', 'reiki@user.com', NULL, '$2y$10$Lj7SkkFviQdV/WqEAqSWFeRkowvE3bC.IX0ULpDH57wFXpDmqoZl.', 0, NULL, NULL, NULL, '2022-12-25 21:16:25', '2022-12-25 21:16:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`discount_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facility_id`);

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
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`),
  ADD UNIQUE KEY `permalink` (`permalink`),
  ADD KEY `fk_package_price` (`price_id`),
  ADD KEY `packages_ibfk_1` (`facility_id`);

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
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `rents_ibfk_1` (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `package_id` (`package_id`);

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
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON UPDATE CASCADE;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_2` FOREIGN KEY (`price_id`) REFERENCES `prices` (`price_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `packages_ibfk_3` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`facility_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `rents_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rents_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
