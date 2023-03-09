-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 08:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_radarbogor`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id` int(21) NOT NULL,
  `bulan` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id`, `bulan`) VALUES
(20, 'Agustus'),
(16, 'Desember'),
(21, 'Juli'),
(17, 'November'),
(18, 'Oktober'),
(19, 'September');

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
(2, '2023_02_09_185413_create_tb_user_table', 2),
(3, '2014_10_12_000000_create_users_table', 3),
(4, '2014_10_12_100000_create_password_resets_table', 4),
(5, '2019_08_19_000000_create_failed_jobs_table', 4),
(6, '2023_02_20_232914_create_user', 5),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(9, '2023_02_20_234244_create_user', 6),
(10, '2023_02_21_013859_create_users', 7),
(11, '2023_02_21_084756_create_users', 8),
(12, '2023_02_22_175626_create_users', 9),
(13, '2023_02_22_191450_create_type_group', 10),
(14, '2023_02_22_214810_create_type_group', 11),
(15, '2023_02_22_222321_create_users', 12),
(16, '2023_02_22_222546_create_type_group', 12),
(17, '2023_02_23_002215_create_type_jabatan', 13),
(18, '2023_02_26_174229_create_tb_upload', 14),
(19, '2023_02_28_011555_create_tb_upload', 15),
(20, '2023_02_28_042956_create_tb_role', 16);

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
-- Table structure for table `tb_upload`
--

CREATE TABLE `tb_upload` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_group` bigint(20) UNSIGNED NOT NULL,
  `video_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_upload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `tanggal`, `id_group`, `video_title`, `video`, `produksi`, `name`, `platform`, `status`, `bulan`, `name_upload`, `gambar`, `created_at`, `updated_at`) VALUES
('203dddd5-c2a4-4d4c-8cf8-403c28ae1c0e', '2023-03-10', 2, 'Kebocoran Gas', 'CU5RfWbU2FqllRxkVQbo5Fbj6Iq1mBTCeFrJBndg.mp4', 'Produser,Writer', 'Imanudin El Van Hazzz,Elvanhaz', 'facebook,tiktok,twiter', 'Pending', 'Maret', 'Elvanhaz', 'FNgFC5JKzdFkueqO1OOVE1yaoT03zBsdCo2daf0M.png', '2023-03-08 23:49:19', '2023-03-08 23:49:19'),
('33e1ed10-711a-410b-a2f1-f1c7a15e7592', '2023-03-10', 2, 'Banjir', 'dDQwDm5vHbJvpkZKZD1d8UTgteJIscK4Ni2nXmAu.mp4', 'Produser,Writer', 'Imanudin El Van Hazzz,Elvanhaz', 'facebook,youtube', 'Pending', 'Maret', 'Elvanhaz', 'FNgFC5JKzdFkueqO1OOVE1yaoT03zBsdCo2daf0M.png', '2023-03-09 05:25:10', '2023-03-09 05:25:10'),
('72b9e1ac-51c6-4f44-88f2-ec64c0e8e077', '2023-03-07', 2, 'kebakaran', 'udmBzbpaKFd0C9z3b9NllwcMtI9NBBDFpmCy0nDd.mp4', 'Produser,Writer', 'elvan,Imanudin El Van Hazzz', 'facebook,tiktok,youtube', 'Pending', 'Maret', 'elvan', 'wHBLkLn7tkZa48Y4Ym7N29gD9G0z9FBUXoas0cni.png', '2023-03-08 23:23:42', '2023-03-09 05:27:03'),
('7d47915e-d50e-4b05-8fdd-c8d39e467d83', '2023-03-10', 4, 'Pemadaman Listrik', 'g2TPVvhZ4p7jefVUilrkEjEDlGLXK7OgKiwXPoXG.mp4', 'Produser,Writer', 'Elvanhaz,Imanudin El Van Hazzz', 'facebook,tiktok', 'Pending', 'Maret', 'Elvanhaz', 'FNgFC5JKzdFkueqO1OOVE1yaoT03zBsdCo2daf0M.png', '2023-03-08 23:38:33', '2023-03-09 05:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(12) NOT NULL,
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type_group`
--

CREATE TABLE `type_group` (
  `id_group` bigint(20) UNSIGNED NOT NULL,
  `group` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_group`
--

INSERT INTO `type_group` (`id_group`, `group`, `created_at`, `updated_at`) VALUES
(2, 'Radar Bogor', NULL, NULL),
(3, 'Radar Sukabumi', NULL, NULL),
(4, 'Radar Depok', NULL, NULL),
(5, 'Radar Bandung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_jabatan`
--

CREATE TABLE `type_jabatan` (
  `id_jabatan` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_khusus` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_jabatan`
--

INSERT INTO `type_jabatan` (`id_jabatan`, `jabatan`, `role`, `id_khusus`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Super Admin', '', NULL, NULL),
(2, 'Admin Finance', 'Admin Finance', '', NULL, NULL),
(3, 'Admin Sosmed', 'Admin Sosmed', '', NULL, NULL),
(4, 'Produser', 'Admin Upload', '1', NULL, NULL),
(5, 'Writer', 'User', '1', NULL, NULL),
(6, 'Talent/Host', 'User', '1', NULL, NULL),
(7, 'Camera Person', 'User', '1', NULL, NULL),
(8, 'Voice Over', 'User', '1', NULL, NULL),
(9, 'Video Editor', 'User', '1', NULL, NULL),
(10, 'Direktur', 'Super Admin', '1', '2023-03-09 05:23:50', '2023-03-09 05:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `group`, `email`, `password`, `jabatan`, `role`, `gambar`, `created_at`, `updated_at`) VALUES
('5f8ca6cc-35a7-4b89-9c3b-592c277c25a0', 'Imanudin El Van Hazzz', 'Vanhaz', 'Radar Bogor', 'vanhazz@gmail.com', '$2y$10$uZTlt3u6F7f1g10UGpHB4.mFQTHaDHRCvRGGMQEE3rnvidHZOswm.', 'Super Admin', 'Super Admin', 'sDURE4xnwgJrJKPPYu7rM2gNdfl8bqBTtcS5KbyB.png', '2023-03-08 21:53:43', '2023-03-08 21:57:50'),
('689e1838-e343-46bf-ac7a-64f435c96f08', 'Elvanhaz', 'Elvanhaz', 'Radar Bogor', 'Elvanhazzzz@gmail.co.id', '$2y$10$c2Uf0WXKG9/BMYHI8FctKukwws2KCJK2oqL3ps7yjdtKJ6a2ok5S2', 'Super Admin', 'admin', 'FNgFC5JKzdFkueqO1OOVE1yaoT03zBsdCo2daf0M.png', '2023-03-05 15:08:20', '2023-03-08 23:29:35'),
('b6a5e319-b94c-11ed-bc01-c018504b260c', 'elvan', 'elvan', 'Radar Bogor', 'elvanhazi@gmail.com', '$2y$10$UOy1x/Mx8WQegvhiiQHNGOOSN6muIGFucSRVFIsC/A8qwKEqGKeLS', 'Super Admin', 'user', 'wHBLkLn7tkZa48Y4Ym7N29gD9G0z9FBUXoas0cni.png', NULL, '2023-03-08 23:39:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bulan` (`bulan`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_group` (`id_group`),
  ADD KEY `produksi` (`produksi`),
  ADD KEY `name` (`name`),
  ADD KEY `name_upload` (`name_upload`),
  ADD KEY `gambar` (`gambar`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `produksi` (`produksi`),
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `type_group`
--
ALTER TABLE `type_group`
  ADD PRIMARY KEY (`id_group`),
  ADD KEY `group` (`group`);

--
-- Indexes for table `type_jabatan`
--
ALTER TABLE `type_jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `jabatan` (`jabatan`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_group` (`group`),
  ADD KEY `group` (`group`),
  ADD KEY `jabatan` (`jabatan`),
  ADD KEY `role` (`role`),
  ADD KEY `name` (`name`),
  ADD KEY `gambar` (`gambar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `type_group`
--
ALTER TABLE `type_group`
  MODIFY `id_group` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type_jabatan`
--
ALTER TABLE `type_jabatan`
  MODIFY `id_jabatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD CONSTRAINT `tb_upload_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `type_group` (`id_group`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_upload_ibfk_2` FOREIGN KEY (`name_upload`) REFERENCES `users` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_upload_ibfk_3` FOREIGN KEY (`gambar`) REFERENCES `users` (`gambar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_upload` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`group`) REFERENCES `type_group` (`group`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_4` FOREIGN KEY (`jabatan`) REFERENCES `type_jabatan` (`jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_5` FOREIGN KEY (`role`) REFERENCES `type_jabatan` (`role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
