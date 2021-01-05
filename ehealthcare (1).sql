-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 09:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehealthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `details`, `photo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'First Blog', 'this is blogLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen boo', '5.jpg', '3', '2020-12-16 06:57:18', '2020-12-16 06:57:18'),
(2, 'A LESSON IN SURGERY PREPAREDNESS - FROM HURRICANE SEASON', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '6.jpg', '3', '2021-01-02 22:33:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `consults`
--

CREATE TABLE `consults` (
  `id` int(100) NOT NULL,
  `department` int(100) NOT NULL,
  `d_id` int(100) NOT NULL,
  `date` int(100) NOT NULL,
  `time` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `dob`, `qualification`, `about`, `user_id`, `fee`, `created_at`, `updated_at`) VALUES
(1, '06/23/1986', 'MBBS', 'Very Good', 3, '500', '2020-12-16 02:34:54', '2020-12-16 02:34:54'),
(2, '06/23/1986', 'MBBS', 'GOOD', 14, '600', '2021-01-02 13:10:02', NULL);

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
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(1, 'napa', '10', '5', 'napa.jpg'),
(2, 'seclo', '60', '10', 'seclo.jpg'),
(3, 'savlon', '20', '20', 'savlon.jpg'),
(4, 'cosec\r\n', '60\r\n', '20', 'cosec.jpg');

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2020_12_16_041838_create_doctors_table', 2),
(6, '2020_12_16_085333_create_patients_table', 3),
(7, '2020_12_16_124447_create_blogs_table', 4),
(8, '2019_08_19_000000_create_failed_jobs_table', 5);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloodgroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bmi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloodpressure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `dob`, `address`, `bloodgroup`, `bmi`, `weight`, `bloodpressure`, `cal`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '06/20/2020', '4463 Norman Street', 'B+', '33', '65', '80-100', '29.44', 6, '2020-12-16 03:10:06', '2020-12-16 03:10:06'),
(2, '1998-12-18', '9,Dabi das ghat,chawkbazar,lalbagh,dhaka', 'A+', '70', '80', '80/120', '1200', 12, '2020-12-17 13:48:05', NULL),
(3, '2020-07-14', '9,Dabi das ghat,chawkbazar,lalbagh,dhaka', 'A+', '24', '80', '80/120', '1200', 13, '2021-01-01 10:15:57', NULL),
(5, '', '9,Dabi das ghat,chawkbazar,lalbagh,dhaka', '', '25', '75', '80/120', '1200', 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(100) NOT NULL,
  `gateway` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `list_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `gateway`, `date`, `status`, `user_id`, `list_id`) VALUES
(1, 'bkash', '2021-01-05', 'Successfull', '17', '0');

-- --------------------------------------------------------

--
-- Table structure for table `test_reports`
--

CREATE TABLE `test_reports` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_reports`
--

INSERT INTO `test_reports` (`id`, `name`, `photo`, `user_id`, `date`) VALUES
(1, 'X-RAY', 'test.jpg', 13, '2021-01-03 19:08:05.000000'),
(3, 'MRI', 'mri.jpg', 13, 'Sun Jan 03 2021 22:13:58 GMT+0600 (Bangladesh Standard Time)'),
(4, 'CT Scan', 'ct_scan.jpg', 13, 'Mon Jan 04 2021 01:33:02 GMT+0600 (Bangladesh Standard Time)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `type`, `photo`, `contactno`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'Badhon Ghosh', '', 'badhonghosh09@gmail.com', '$2y$10$r44fMZi79SHyqiB/gWvxWuEqto5m9aEggiQKP9mFNytZpgAhi5KXO', 'admin', '1608050300.jpg', '09765374346', NULL, NULL, '2020-12-15 10:38:20', '2020-12-15 10:38:20'),
(3, 'Mr. Ahmed', 'doctor', 'doctor@mail.com', '$2y$10$l05zi4mJTNBjzUUNb0mNSOH3j5jpAp3NDXjwB8tTxuPdKiePMcPaO', 'doctor', 'nayeem.jpg', '08889', NULL, NULL, '2020-12-16 02:34:54', '2020-12-16 02:34:54'),
(6, 'Mr Osutho Patient', 'patient', 'patient@mail.com', '$2y$10$0gs0RkmZTqSmLZaBbTN31eZr6ITrpcJqEH/Mvr7nXZzoYv7RW9EYq', 'patient', '1608109806.png', '0987655', NULL, NULL, '2020-12-16 03:10:06', '2020-12-16 03:10:06'),
(12, 'Nayeem Ahmed', 'nayeem', 'nayeemr.4545@gmail.com', '1234', 'patient', 'nayeem.jpg', '01535831456', NULL, NULL, '2020-12-17 13:48:05', NULL),
(13, 'noman', 'noman', 'noman@gmail.com', '$2y$10$4b2UaLZftpHW3KAqsXTK5uqKi2dSQnul.HAl8Kif.EA9KGj5rs8.u', 'patient', 'nayeem.jpg', '12343569874', NULL, NULL, '2021-01-01 10:15:57', NULL),
(14, 'Tamim', 'doctor2', 'doctor2@gmail.com', '$2y$10$4b2UaLZftpHW3KAqsXTK5uqKi2dSQnul.HAl8Kif.EA9KGj5rs8.u', 'doctor', 'nayeem.jpg', '01236547895', NULL, NULL, '2021-01-03 13:08:05', NULL),
(17, 'Nayeem Ahmēd', '', 'nayeemr.45@gmail.com', '', 'patient', 'nayeem.jpg', '12343569874', '1860342550798745', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `validators`
--

CREATE TABLE `validators` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `validators`
--

INSERT INTO `validators` (`id`, `username`, `password`, `email`) VALUES
(1, 'nayeem', '12345678', 'nayeem@gmail.com'),
(2, 'nayeem1', '12345678', 'nayeem1@gmail.com'),
(3, 'nayeem2', '12345678', 'nayeem2@gmail.com'),
(4, 'nayeem3', '12345678\r\n', 'nayeem3@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consults`
--
ALTER TABLE `consults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_reports`
--
ALTER TABLE `test_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `validators`
--
ALTER TABLE `validators`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consults`
--
ALTER TABLE `consults`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_reports`
--
ALTER TABLE `test_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `validators`
--
ALTER TABLE `validators`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
