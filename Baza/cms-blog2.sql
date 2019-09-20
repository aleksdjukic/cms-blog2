-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 03:51 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mania`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `is_active`, `author`, `photo`, `email`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Admin', '1564332113administrator.png', 'admin@gmail.com', 'Laravel je super framework :D', '2019-07-28 14:53:40', '2019-07-28 14:54:55'),
(2, 3, 1, 'Admin', '1564332113administrator.png', 'admin@gmail.com', 'Razmisljas li o ucenju nekih frameworka za php? Pozz', '2019-07-28 14:54:07', '2019-07-28 14:54:57'),
(3, 5, 1, 'Admin', '1564332113administrator.png', 'admin@gmail.com', 'Pozdrav, zanima me koliko dugo vec radis C#?', '2019-07-28 14:54:47', '2019-07-28 14:54:58'),
(4, 1, 1, 'Aleksandar Djukic', '1564331647aco.jpg', 'djukicaleks91@gmail.com', 'Jeste i ja se slazem...pozz', '2019-07-28 14:56:16', '2019-07-28 14:58:53'),
(5, 4, 1, 'Aleksandar Djukic', '1564331647aco.jpg', 'djukicaleks91@gmail.com', 'Potreban nam je java programer, ako si zainteresovan...javi se na mail.', '2019-07-28 14:57:16', '2019-07-28 14:58:55'),
(6, 3, 1, 'Aleksandar Djukic', '1564331647aco.jpg', 'djukicaleks91@gmail.com', 'Koliko dugo vec radis u php?', '2019-07-28 15:01:56', '2019-07-28 15:02:04'),
(7, 3, 1, 'User', '1564332144user.png', 'user@gmail.com', 'Planiram da pocnem sa ucenjem Symphony.Pozz', '2019-07-28 15:08:55', '2019-07-28 15:10:04'),
(8, 5, 1, 'Ana Pavlovic', '1564331740ana.jpg', 'ana@gmail.com', 'Radim vec 3 godine', '2019-07-28 15:10:35', '2019-07-28 15:10:35'),
(9, 4, 1, 'User', '1564332144user.png', 'user@gmail.com', 'Hvala na ponudi, ali radim vec u jednoj firmi.', '2019-07-28 15:11:15', '2019-07-28 15:11:15'),
(11, 2, 1, 'Aleksandar Djukic', '1564331647aco.jpg', 'djukicaleks91@gmail.com', 'Angular je super...pozz', '2019-07-28 20:56:30', '2019-07-28 20:56:46'),
(12, 2, 1, 'User', '1564332144user.png', 'user@gmail.com', 'Slazem se :D', '2019-07-28 20:57:27', '2019-07-28 20:58:50'),
(13, 5, 1, 'Marko Markovic', 'No picture', 'mark@gmail.com', 'Pozdrav', '2019-07-28 21:51:09', '2019-07-28 21:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2019_07_17_122421_create_posts_table', 1),
('2019_07_17_122612_create_roles_table', 1),
('2019_07_18_164855_create_comments_table', 1),
('2019_07_18_165907_create_photos_table', 1),
('2019_07_18_170225_create_comment_replies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('djukicaleks91@gmail.com', 'e4482a3817b7ac74189fcbc067a15cd6eba755ab4c4b7181684e6022f7d0b01c', '2019-07-28 16:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `path`, `created_at`, `updated_at`) VALUES
(1, '1564331647aco.jpg', '2019-07-28 14:34:07', '2019-07-28 14:34:07'),
(2, '1564331678laravel1.jpg', '2019-07-28 14:34:38', '2019-07-28 14:34:38'),
(3, '1564331716baka.jpg', '2019-07-28 14:35:16', '2019-07-28 14:35:16'),
(4, '1564331740ana.jpg', '2019-07-28 14:35:40', '2019-07-28 14:35:40'),
(5, '1564331760katarina.jpg', '2019-07-28 14:36:00', '2019-07-28 14:36:00'),
(6, '1564331808angular.jpg', '2019-07-28 14:36:48', '2019-07-28 14:36:48'),
(7, '1564332113administrator.png', '2019-07-28 14:41:53', '2019-07-28 14:41:53'),
(8, '1564332144user.png', '2019-07-28 14:42:24', '2019-07-28 14:42:24'),
(9, '1564332278php.jpg', '2019-07-28 14:44:38', '2019-07-28 14:44:38'),
(10, '1564332390java.jpeg', '2019-07-28 14:46:30', '2019-07-28 14:46:30'),
(11, '1564332513csharp.jpg', '2019-07-28 14:48:33', '2019-07-28 14:48:33'),
(12, '1564332694javascript.jpg', '2019-07-28 14:51:34', '2019-07-28 14:51:34'),
(13, '1564332780pyton.jpg', '2019-07-28 14:53:00', '2019-07-28 14:53:00'),
(14, '1564338034c.png', '2019-07-28 16:20:34', '2019-07-28 16:20:34'),
(15, '1564357989internet.jpg', '2019-07-28 21:53:09', '2019-07-28 21:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `photo_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Laravel', 'Šta je Laravel, da li je on pravi izbor za vaš projekat i odakle da krenete sa učenjem najomiljenijeg framework-a u programerskoj zajednici - Saznajte ovde.', '2019-07-28 14:34:38', '2019-07-28 14:34:38'),
(2, 1, 6, 'Angular', ' Šta je AngularJS? AngularJS je JavaScript MVC framework napravljen od strane Google-a koji vam omogućava da pravite dobro struktuirane, ...', '2019-07-28 14:36:48', '2019-07-28 14:36:48'),
(3, 6, 9, 'PHP', 'PHP (rekurzivni akronim i backronim za „PHP: Hypertext Preprocessor“, prije „Personal Home Page Tools“) je jedan programski jezik koji se orijentira po C i Perl .', '2019-07-28 14:44:38', '2019-07-28 14:44:38'),
(4, 6, 10, 'Java', 'Java je objektno orijentirani programski jezik koji su razvili James Gosling, Patrick Naughton i drugi inženjeri u tvrtci Sun Microsystems. Razvoj je počeo 1991.', '2019-07-28 14:46:30', '2019-07-28 14:46:30'),
(5, 3, 11, 'C#', 'C# je izumljen s ciljem da .NET platforma dobije programski jezik, koji bi maksimalno iskoristio njezine sposobnosti. Sličan je programskim jezicima Java i C++.', '2019-07-28 14:48:33', '2019-07-28 14:48:33'),
(6, 5, 12, 'JavaScript', 'Šta je JavaScript? JavaScript je objektno zasnovan skriptni jezik. Uključujemo ga u web stranicu da bi je učinili dinamičnijom. HTML (osnovni kod web stranica) ...', '2019-07-28 14:51:34', '2019-07-28 14:51:34'),
(7, 5, 13, 'Pyton', 'Python je programski jezik opće namjene, interpretiran i visoke razine kojeg je stvorio Guido van Rossum 1990. godine (prva javna inačica objavljena je u ...', '2019-07-28 14:53:00', '2019-07-28 14:53:00'),
(8, 2, 14, 'C++', 'Zbog velike potražnje za objektno orijentiranim jezicima te izrazitim sposobnostima istih, specifikacija programskog jezika C++ ratificirana je 1998. kao standard ...', '2019-07-28 16:20:34', '2019-07-28 16:20:34'),
(9, 7, 15, 'Internet', 'Internet je javno dostupna globalna paketna podatkovna mreža koja zajedno povezuje računala i računalne mreže korištenjem istoimenog protokola (internetski ', '2019-07-28 21:53:09', '2019-07-28 21:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT '2',
  `is_active` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_id` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `is_active`, `name`, `email`, `photo_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Aleksandar Djukic', 'djukicaleks91@gmail.com', 1, '$2y$10$siLM2QP21EjYMrml1uiXd.sXP811B5NHZhAppp6lotA4.3kIG9zi.', 'Ld8P7ZrtZrUPHDLWvySCtXjOEc5mtZPSC1A9Ig0s2Hb97Mk6mTMpX3svukTS', '2019-07-28 14:31:23', '2019-07-28 22:04:01'),
(2, 2, 1, 'Milos Balaban', 'baka@gmail.com', 3, '$2y$10$kphPudz9yRRvZkdiYR6Vne1gQy3gisdzcfIHJkweIV4YnYp46Burm', 'LT5mbNFqRY9dFwPYjX6a3qYF9DfbchjoPALedC4Xrhe4504NHM3Bofib8WZv', '2019-07-28 14:35:16', '2019-07-28 16:15:13'),
(3, 2, 1, 'Ana Pavlovic', 'ana@gmail.com', 4, '$2y$10$tXLL820.i.w3aAdaBkonxeAMJHToxWK8O9Q9hQSmfWd3RuKWoFV3q', 'YD7de2gvq77ZUhoT53C1QK0iN9TRfJ4ZrBgXPGFfzjxwStpxYrfbKymmD8Tq', '2019-07-28 14:35:40', '2019-07-28 15:10:38'),
(4, 2, 1, 'Katarina Markovic', 'kata@gmail.com', 5, '$2y$10$IbGWHy2doYGCfYsVvOOIe.4CNdqpi2ep6hIZQTiDX.xgvtMCLGEQO', NULL, '2019-07-28 14:36:00', '2019-07-28 14:36:00'),
(5, 1, 1, 'Admin', 'admin@gmail.com', 7, '$2y$10$9mOhv9RFvrgEy/OMNu9dJeqU6WiZmw1kLc3RNLPuqcXAIVb2khEmS', 'U9EDclkxm9tF0focie8VtbisChbsnpvE4pUlvqRq4aPXzo4JUneGqe2EdXHu', '2019-07-28 14:41:53', '2019-07-28 14:55:19'),
(6, 2, 1, 'User', 'user@gmail.com', 8, '$2y$10$PDnnEyWqGKjYy3oTGWL7Cej5dqFW1blnU6l0y8POfoEKYCKftVoLS', '2mMy806AaSbEK02Zeifv5Gtmhic3CObSVBShR7elHBg7UVVsuJ4kbEC148Bu', '2019-07-28 14:42:24', '2019-07-28 22:01:02'),
(7, 2, 0, 'Marko Markovic', 'mark@gmail.com', 0, '$2y$10$7yRwjGr8Xbc4QuQvHZCVfujyz9PX13UzHK1mtIgAY6lqGKJ0UthTK', 'eEGOUqOEj0ochWqaZs2q13vsbte23zLf7f2DQopx7CCSxsZojaR8A4w0OzQx', '2019-07-28 21:40:50', '2019-07-28 21:53:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_index` (`post_id`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_replies_comment_id_index` (`comment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_index` (`user_id`),
  ADD KEY `posts_photo_id_index` (`photo_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD CONSTRAINT `comment_replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
