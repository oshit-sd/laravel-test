-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 10:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiny_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  `block` tinyint(1) NOT NULL DEFAULT 0,
  `status` enum('a','d') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'a',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `mobile`, `address`, `profile`, `role_id`, `block`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Oshit Sutra Dar', 'oshitsd', 'oshitsd@gmail.com', '$2y$10$.gIg9c9y8RXE5A3a2jUgG.1vUZl3wzx2OWPtVqAFZaj2iUz2JU9mC', '01883847733', 'Dhaka', 'upload/profile/a307KCxL9miK9GecRH9cfcHsHG19pULE0v8bujWZ.jpeg', 1, 0, 'a', NULL, '2020-05-20 06:06:40', '2020-06-08 06:33:48'),
(3, 'Bappy Sutra Dar', 'oshitsd', 'oshit@gmail.com', '$2y$10$ChwGECbUeecaazxerIND7eCx809GbERydweF2kaZ/URgdOARP4eKy', '01883847733', 'Feni,Bd', '', 2, 0, 'a', NULL, '2020-05-20 06:06:40', '2020-06-09 04:49:54'),
(4, 'Oshitsd', NULL, 'oshitsd99@gmail.com', '$2y$10$mBlg8uM9vSDfhtppcJFNsuNsk6q6OZdDRS8cJ8H8lUYZQy5PhsIky', '01862534183', 'Dhaka', '', 2, 0, 'a', NULL, '2020-05-27 04:54:12', '2020-06-09 04:50:03'),
(6, 'Admin', NULL, 'admin@gmail.com', '$2y$10$TJhmV1U2n.ap.A5lki6Peu4eD9CBQ.rPfFz9aTz/lYclVpCBB/2Ru', '01883847733', 'Dhaka', NULL, 2, 0, 'a', NULL, '2020-06-09 22:15:45', '2020-06-11 20:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2020_07_03_043006_create_posts_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_section` tinyint(4) NOT NULL,
  `publish` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `image`, `video_url`, `description`, `content_type`, `show_section`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Hi', 'hi', 'upload/post/V3qyyp8GE8ke8jh7V3mEaPvAaiDpTTBvZxD8LJYQ.jpeg', 'V3r5JLDlCQM', 'Single navbar example with a fixed top navbar along with some additional content. Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.', 'video', 1, 1, '2020-07-02 23:32:54', '2020-07-02 23:32:54'),
(2, 'Lore rere r e re r e r er e r e r er e rw r fsfd', 'lore-rere-r-e-re-r-e-r-er-e-r-e-r-er-e-rw-r-fsfd', 'upload/post/Gp0LQZT8p1btvE0FiTYbERUh2FSIMfvucShRXF8Q.jpeg', 'V3r5JLDlCQM', 'Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.', 'post', 2, 1, '2020-07-02 23:39:23', '2020-07-02 23:39:23'),
(3, 'BASIS Photos of 2019', 'basis-photos-of-2019', 'upload/post/rWn11LVclYjO4Hy148NbyLm7iSof3f901SX6F4N2.jpeg', 'V3r5JLDlCQM', 'Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.', 'post', 1, 1, '2020-07-03 00:34:38', '2020-07-03 00:34:38'),
(4, 'FDSF', 'fdsf', 'upload/post/z0EesKra03NzOnkuG7J2mEG90pcgKlGOgM9CMxXo.jpeg', 'sdf', 'sdfsdf', 'post', 2, 1, '2020-07-03 00:36:57', '2020-07-03 00:36:57'),
(5, 'What is loream ipsum', 'what-is-loream-ipsum', 'upload/post/6cQZQDQLuJtQbDopDUz4YwZyKLVthcCEhGWo01Bk.jpeg', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'post', 1, 1, '2020-07-03 01:37:29', '2020-07-03 01:37:29'),
(6, 'SDGSD', 'sdgsd', 'upload/post/vPpVL70lfrZpJVKVBE9vJTzPGXAdgNSMMs7PCQaO.jpeg', NULL, 'sdgsdg dssdg', 'post', 2, 1, '2020-07-03 01:48:51', '2020-07-03 01:48:51'),
(7, 'sdf', 'sdf', 'upload/post/ULbnpHWHZm9FMozJUwGeJzOCLN6W4p2TsZziRgxP.jpeg', 'V3r5JLDlCQM', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'video', 1, 1, '2020-07-03 01:50:50', '2020-07-03 01:50:50'),
(8, 'Lore rere r e re r e r er e r e r er e rw r fsfd', 'lore-rere-r-e-re-r-e-r-er-e-r-e-r-er-e-rw-r-fsfd', 'upload/post/Gp0LQZT8p1btvE0FiTYbERUh2FSIMfvucShRXF8Q.jpeg', 'V3r5JLDlCQM', 'Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.', 'post', 1, 1, '2020-07-02 23:39:23', '2020-07-02 23:39:23'),
(9, 'Lore rere r e re r e r er e r e r er e rw r fsfd', 'lore-rere-r-e-re-r-e-r-er-e-r-e-r-er-e-rw-r-fsfd', 'upload/post/Gp0LQZT8p1btvE0FiTYbERUh2FSIMfvucShRXF8Q.jpeg', 'V3r5JLDlCQM', 'Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.Single navbar example with a fixed top navbar along with some additional content.', 'video', 2, 1, '2020-07-02 23:39:23', '2020-07-02 23:39:23'),
(10, 'This is video for section 2', 'this-is-video-for-section-2', 'upload/post/GksRg83ocTyJLUbJA8d9KsxEwAgkLXNczfBu99QD.jpeg', 'V3r5JLDlCQM', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'video', 2, 1, '2020-07-03 02:11:27', '2020-07-03 02:11:27');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
