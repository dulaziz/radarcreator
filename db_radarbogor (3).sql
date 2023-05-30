-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 10:48 PM
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
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(15, 'User', 'created', 'App\\Models\\upload', 'created', '1317004a-cae8-486e-a053-41101fe74b25', 'App\\Models\\user', '043f6a42-3192-4ffa-80af-508bb485b49e', '{\"attributes\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Kebakaran\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Pending\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-28 09:16:01', '2023-03-28 09:16:01'),
(16, 'User', 'created', 'App\\Models\\upload', 'created', 'a7cd1b87-f779-4b5f-8aa9-336afba18a82', 'App\\Models\\user', '043f6a42-3192-4ffa-80af-508bb485b49e', '{\"attributes\":{\"tanggal\":\"2023-03-11\",\"id_group\":2,\"video_title\":\"Video Tanggal 11\",\"video\":\"QXzAMw3nsZ5S2zvrxpgqhhBKbuR5HbZFhPln3z52.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host,Camera Person,Voice Over,Video Editor\",\"name\":\"udin,elvan,Elvanhaz,elvan,elvan,Elvanhaz\",\"platform\":\"tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-28 09:18:17', '2023-03-28 09:18:17'),
(17, 'User', 'created', 'App\\Models\\upload', 'created', '298bdf52-8050-443a-9f90-6faab1c12d80', 'App\\Models\\user', '043f6a42-3192-4ffa-80af-508bb485b49e', '{\"attributes\":{\"tanggal\":\"2023-03-30\",\"id_group\":2,\"video_title\":\"Video tanggal 30\",\"video\":\"H21bvMBrv4v8NeImUlwMQtRuLHv0N1K3zsmK1OZo.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host,Video Editor\",\"name\":\"Elvanhaz,elvan,udin,adminsosmed\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-28 09:20:10', '2023-03-28 09:20:10'),
(18, 'User', 'updated', 'App\\Models\\upload', 'updated', '1317004a-cae8-486e-a053-41101fe74b25', 'App\\Models\\user', '043f6a42-3192-4ffa-80af-508bb485b49e', '{\"attributes\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Pending\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"},\"old\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Kebakaran\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Pending\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-28 09:21:51', '2023-03-28 09:21:51'),
(19, 'User', 'updated', 'App\\Models\\upload', 'updated', 'a7cd1b87-f779-4b5f-8aa9-336afba18a82', 'App\\Models\\user', '4a23930b-c130-48ce-a4e8-02bd967b9f50', '{\"attributes\":{\"tanggal\":\"2023-03-11\",\"id_group\":2,\"video_title\":\"Video Tanggal 11\",\"video\":\"QXzAMw3nsZ5S2zvrxpgqhhBKbuR5HbZFhPln3z52.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host,Camera Person,Voice Over,Video Editor\",\"name\":\"udin,elvan,Elvanhaz,elvan,elvan,Elvanhaz\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"},\"old\":{\"tanggal\":\"2023-03-11\",\"id_group\":2,\"video_title\":\"Video Tanggal 11\",\"video\":\"QXzAMw3nsZ5S2zvrxpgqhhBKbuR5HbZFhPln3z52.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host,Camera Person,Voice Over,Video Editor\",\"name\":\"udin,elvan,Elvanhaz,elvan,elvan,Elvanhaz\",\"platform\":\"tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-28 09:24:01', '2023-03-28 09:24:01'),
(20, 'User', 'updated', 'App\\Models\\upload', 'updated', '1317004a-cae8-486e-a053-41101fe74b25', 'App\\Models\\user', '4a23930b-c130-48ce-a4e8-02bd967b9f50', '{\"attributes\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"},\"old\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Pending\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-28 09:25:06', '2023-03-28 09:25:06'),
(21, 'User', 'updated', 'App\\Models\\upload', 'updated', 'a7cd1b87-f779-4b5f-8aa9-336afba18a82', 'App\\Models\\user', '4a23930b-c130-48ce-a4e8-02bd967b9f50', '{\"attributes\":{\"tanggal\":\"2023-03-11\",\"id_group\":2,\"video_title\":\"Video Tanggal 11\",\"video\":\"QXzAMw3nsZ5S2zvrxpgqhhBKbuR5HbZFhPln3z52.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host,Camera Person,Voice Over,Video Editor\",\"name\":\"udin,elvan,Elvanhaz,elvan,elvan,Elvanhaz\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"},\"old\":{\"tanggal\":\"2023-03-11\",\"id_group\":2,\"video_title\":\"Video Tanggal 11\",\"video\":\"QXzAMw3nsZ5S2zvrxpgqhhBKbuR5HbZFhPln3z52.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host,Camera Person,Voice Over,Video Editor\",\"name\":\"udin,elvan,Elvanhaz,elvan,elvan,Elvanhaz\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-28 09:29:13', '2023-03-28 09:29:13'),
(22, 'User', 'updated', 'App\\Models\\upload', 'updated', '1317004a-cae8-486e-a053-41101fe74b25', 'App\\Models\\user', '4a23930b-c130-48ce-a4e8-02bd967b9f50', '{\"attributes\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"},\"old\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-28 09:30:36', '2023-03-28 09:30:36'),
(23, 'User', 'updated', 'App\\Models\\upload', 'updated', '1317004a-cae8-486e-a053-41101fe74b25', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"},\"old\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-29 13:40:42', '2023-03-29 13:40:42'),
(24, 'User', 'updated', 'App\\Models\\upload', 'updated', '1317004a-cae8-486e-a053-41101fe74b25', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"},\"old\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-29 14:57:50', '2023-03-29 14:57:50'),
(25, 'User', 'updated', 'App\\Models\\upload', 'updated', '1317004a-cae8-486e-a053-41101fe74b25', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"},\"old\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-30 14:54:24', '2023-03-30 14:54:24'),
(26, 'User', 'updated', 'App\\Models\\upload', 'updated', '1317004a-cae8-486e-a053-41101fe74b25', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"},\"old\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video tanggal 28\",\"video\":\"R8jQa5HZ6eH2N2NGdok3stenuyXUkWcvjnQU6Sld.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"udin\"}}', NULL, '2023-03-30 14:57:28', '2023-03-30 14:57:28'),
(27, 'User', 'created', 'App\\Models\\upload', 'created', '86c05156-527f-4349-ae52-42aedae67f4f', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-03-16\",\"id_group\":2,\"video_title\":\"fds\",\"video\":\"tV3d0yyoUhCQOK1XMtIoONSLQTR9eWl7fa2jB8Es.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"elvan,Elvanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Maret\",\"name_upload\":\"elvan\"}}', NULL, '2023-03-30 22:00:23', '2023-03-30 22:00:23'),
(28, 'User', 'updated', 'App\\Models\\upload', 'updated', '86c05156-527f-4349-ae52-42aedae67f4f', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-03-16\",\"id_group\":2,\"video_title\":\"fds\",\"video\":\"tV3d0yyoUhCQOK1XMtIoONSLQTR9eWl7fa2jB8Es.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"elvan,Elvanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Maret\",\"name_upload\":\"elvan\"},\"old\":{\"tanggal\":\"2023-03-16\",\"id_group\":2,\"video_title\":\"fds\",\"video\":\"tV3d0yyoUhCQOK1XMtIoONSLQTR9eWl7fa2jB8Es.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"elvan,Elvanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Maret\",\"name_upload\":\"elvan\"}}', NULL, '2023-03-30 22:01:00', '2023-03-30 22:01:00'),
(29, 'User', 'created', 'App\\Models\\upload', 'created', '1454712f-5b9f-453b-bc2f-e498cf7d3903', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"hihih\",\"video\":\"R4szDWFnWYN6vswhM2Z15JrudVnjbR9PftpFIgSW.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"instagram,tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-01 13:28:15', '2023-04-01 13:28:15'),
(30, 'User', 'updated', 'App\\Models\\upload', 'updated', '1454712f-5b9f-453b-bc2f-e498cf7d3903', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"hihih\",\"video\":\"R4szDWFnWYN6vswhM2Z15JrudVnjbR9PftpFIgSW.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"instagram,tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"elvan\"},\"old\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"hihih\",\"video\":\"R4szDWFnWYN6vswhM2Z15JrudVnjbR9PftpFIgSW.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"Elvanhaz,udin\",\"platform\":\"instagram,tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-01 13:28:34', '2023-04-01 13:28:34'),
(31, 'User', 'created', 'App\\Models\\upload', 'created', '638215b7-e1b5-4abf-8003-d0ba91259728', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-15\",\"id_group\":2,\"video_title\":\"kebakarans\",\"video\":\"5NMOjv6dTv7VSBWtBOYpDUXaBlcgsytC05eXOILS.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"udin,elvan\",\"platform\":\"tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-01 13:29:48', '2023-04-01 13:29:48'),
(32, 'User', 'updated', 'App\\Models\\upload', 'updated', '638215b7-e1b5-4abf-8003-d0ba91259728', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-15\",\"id_group\":2,\"video_title\":\"kebakarans\",\"video\":\"5NMOjv6dTv7VSBWtBOYpDUXaBlcgsytC05eXOILS.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"udin,elvan\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"elvan\"},\"old\":{\"tanggal\":\"2023-04-15\",\"id_group\":2,\"video_title\":\"kebakarans\",\"video\":\"5NMOjv6dTv7VSBWtBOYpDUXaBlcgsytC05eXOILS.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"udin,elvan\",\"platform\":\"tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-01 13:31:05', '2023-04-01 13:31:05'),
(33, 'User', 'created', 'App\\Models\\upload', 'created', '762abfac-971e-4720-819c-1283b8d95ee7', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-12\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"5LvwvcWmqmmbt2AyBEugrBPXPj7tz81crJjVMAD5.mp4\",\"produksi\":\"Produser\",\"name\":\"udin\",\"platform\":\"facebook,instagram\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-02 13:00:08', '2023-04-02 13:00:08'),
(34, 'User', 'updated', 'App\\Models\\upload', 'updated', '762abfac-971e-4720-819c-1283b8d95ee7', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-12\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"5LvwvcWmqmmbt2AyBEugrBPXPj7tz81crJjVMAD5.mp4\",\"produksi\":\"Produser\",\"name\":\"udin\",\"platform\":\"facebook,instagram\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"elvan\"},\"old\":{\"tanggal\":\"2023-04-12\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"5LvwvcWmqmmbt2AyBEugrBPXPj7tz81crJjVMAD5.mp4\",\"produksi\":\"Produser\",\"name\":\"udin\",\"platform\":\"facebook,instagram\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-02 13:01:23', '2023-04-02 13:01:23'),
(35, 'User', 'created', 'App\\Models\\upload', 'created', 'a72959a2-9e25-4a8b-9eed-8f10e77acdf3', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-20\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"htOOYH36yszUgc62q7eYSplKTwERAQYcGjDHqxIl.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"udin,adminkeuangan,adminHRD\",\"platform\":\"facebook,tiktok\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-02 13:04:05', '2023-04-02 13:04:05'),
(36, 'User', 'updated', 'App\\Models\\upload', 'updated', 'a72959a2-9e25-4a8b-9eed-8f10e77acdf3', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-20\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"htOOYH36yszUgc62q7eYSplKTwERAQYcGjDHqxIl.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"udin,adminkeuangan,adminHRD\",\"platform\":\"facebook,tiktok\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"elvan\"},\"old\":{\"tanggal\":\"2023-04-20\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"htOOYH36yszUgc62q7eYSplKTwERAQYcGjDHqxIl.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"udin,adminkeuangan,adminHRD\",\"platform\":\"facebook,tiktok\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-02 13:04:41', '2023-04-02 13:04:41'),
(37, 'User', 'updated', 'App\\Models\\upload', 'updated', 'a72959a2-9e25-4a8b-9eed-8f10e77acdf3', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-20\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"htOOYH36yszUgc62q7eYSplKTwERAQYcGjDHqxIl.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"udin,adminkeuangan,adminHRD\",\"platform\":\"facebook,tiktok\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"elvan\"},\"old\":{\"tanggal\":\"2023-04-20\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"htOOYH36yszUgc62q7eYSplKTwERAQYcGjDHqxIl.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"udin,adminkeuangan,adminHRD\",\"platform\":\"facebook,tiktok\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-02 22:34:35', '2023-04-02 22:34:35'),
(38, 'User', 'created', 'App\\Models\\upload', 'created', 'ac4e53ac-2d4e-4049-bac2-4e552e996331', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-18\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"6I4S12YRJ4UL6jcllqZlxoDkSe2QHOv6poyMXkQh.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"elvan,elvan,Elvanhaz\",\"platform\":\"tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-03 00:04:04', '2023-04-03 00:04:04'),
(39, 'User', 'updated', 'App\\Models\\upload', 'updated', 'ac4e53ac-2d4e-4049-bac2-4e552e996331', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-18\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"6I4S12YRJ4UL6jcllqZlxoDkSe2QHOv6poyMXkQh.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"elvan,elvan,Elvanhaz\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"elvan\"},\"old\":{\"tanggal\":\"2023-04-18\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"6I4S12YRJ4UL6jcllqZlxoDkSe2QHOv6poyMXkQh.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"elvan,elvan,Elvanhaz\",\"platform\":\"tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-03 00:11:34', '2023-04-03 00:11:34'),
(40, 'User', 'updated', 'App\\Models\\upload', 'updated', 'ac4e53ac-2d4e-4049-bac2-4e552e996331', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-18\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"6I4S12YRJ4UL6jcllqZlxoDkSe2QHOv6poyMXkQh.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"elvan,elvan,Elvanhaz\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"elvan\"},\"old\":{\"tanggal\":\"2023-04-18\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"6I4S12YRJ4UL6jcllqZlxoDkSe2QHOv6poyMXkQh.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"elvan,elvan,Elvanhaz\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"elvan\"}}', NULL, '2023-04-03 20:50:55', '2023-04-03 20:50:55'),
(41, 'User', 'updated', 'App\\Models\\upload', 'updated', '638215b7-e1b5-4abf-8003-d0ba91259728', 'App\\Models\\user', '10946b1b-0a17-4f2c-99c6-15d351c45906', '{\"attributes\":{\"tanggal\":\"2023-04-15\",\"id_group\":2,\"video_title\":\"kebakarans\",\"video\":\"5NMOjv6dTv7VSBWtBOYpDUXaBlcgsytC05eXOILS.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"udin,elvan\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"adminsosmed\"},\"old\":{\"tanggal\":\"2023-04-15\",\"id_group\":2,\"video_title\":\"kebakarans\",\"video\":\"5NMOjv6dTv7VSBWtBOYpDUXaBlcgsytC05eXOILS.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"udin,elvan\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"adminsosmed\"}}', NULL, '2023-04-03 21:51:24', '2023-04-03 21:51:24'),
(42, 'User', 'elvan,vanhaz created Oleh: vanhaz', 'App\\Models\\upload', 'created', 'ca3fadc4-326f-4490-a223-d8f0a9dae0f7', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-05\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"186GrTuO0qRdHGnyetirz8bThixXjjG5BS9oFZso.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"elvan,vanhaz\",\"platform\":\"instagram,tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-04 06:45:25', '2023-04-04 06:45:25'),
(43, 'User', 'elvan,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'ca3fadc4-326f-4490-a223-d8f0a9dae0f7', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-05\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"186GrTuO0qRdHGnyetirz8bThixXjjG5BS9oFZso.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"elvan,vanhaz\",\"platform\":\"instagram,tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-05\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"186GrTuO0qRdHGnyetirz8bThixXjjG5BS9oFZso.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"elvan,vanhaz\",\"platform\":\"instagram,tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-04 06:45:50', '2023-04-04 06:45:50'),
(44, 'User', 'elvan,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'ca3fadc4-326f-4490-a223-d8f0a9dae0f7', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-05\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"186GrTuO0qRdHGnyetirz8bThixXjjG5BS9oFZso.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"elvan,vanhaz\",\"platform\":\"instagram,tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-05\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"186GrTuO0qRdHGnyetirz8bThixXjjG5BS9oFZso.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"elvan,vanhaz\",\"platform\":\"instagram,tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-04 06:53:07', '2023-04-04 06:53:07'),
(45, 'User', 'vanhaz,udin,vanhaz created Oleh: vanhaz', 'App\\Models\\upload', 'created', '0d1539cd-f9ca-48ee-a6b4-9a53627403b9', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Pemadaman\",\"video\":\"QiGAsTL8iNLf9q1rVB4SdJOHSOD6wIOwerDhWQlI.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"vanhaz,udin,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-04 08:06:30', '2023-04-04 08:06:30'),
(46, 'User', 'vanhaz,udin,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '0d1539cd-f9ca-48ee-a6b4-9a53627403b9', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Pemadaman\",\"video\":\"QiGAsTL8iNLf9q1rVB4SdJOHSOD6wIOwerDhWQlI.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"vanhaz,udin,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Pemadaman\",\"video\":\"QiGAsTL8iNLf9q1rVB4SdJOHSOD6wIOwerDhWQlI.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"vanhaz,udin,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-04 08:06:52', '2023-04-04 08:06:52'),
(47, 'User', 'vanhaz,udin,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '0d1539cd-f9ca-48ee-a6b4-9a53627403b9', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Pemadaman\",\"video\":\"QiGAsTL8iNLf9q1rVB4SdJOHSOD6wIOwerDhWQlI.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"vanhaz,udin,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Pemadaman\",\"video\":\"QiGAsTL8iNLf9q1rVB4SdJOHSOD6wIOwerDhWQlI.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"vanhaz,udin,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-04 08:08:20', '2023-04-04 08:08:20'),
(48, 'User', 'vanhaz,udin,vanhaz deleted Oleh: vanhaz', 'App\\Models\\upload', 'deleted', '0d1539cd-f9ca-48ee-a6b4-9a53627403b9', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"old\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Pemadaman\",\"video\":\"QiGAsTL8iNLf9q1rVB4SdJOHSOD6wIOwerDhWQlI.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"vanhaz,udin,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-04 08:15:16', '2023-04-04 08:15:16'),
(49, 'User', 'elvan,vanhaz deleted Oleh: vanhaz', 'App\\Models\\upload', 'deleted', 'ca3fadc4-326f-4490-a223-d8f0a9dae0f7', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"old\":{\"tanggal\":\"2023-04-05\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"186GrTuO0qRdHGnyetirz8bThixXjjG5BS9oFZso.mp4\",\"produksi\":\"Produser,Writer\",\"name\":\"elvan,vanhaz\",\"platform\":\"instagram,tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-04 08:15:23', '2023-04-04 08:15:23'),
(50, 'User', 'abdul azis,udin,elvan created Oleh: abdul azis', 'App\\Models\\upload', 'created', '955a0163-fcdf-44b0-91f2-d26db65f0482', 'App\\Models\\user', '18c5004b-56e5-4f98-9d23-8e4f9a23f24b', '{\"attributes\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"abdul azis,udin,elvan\",\"platform\":\"facebook,instagram\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:20:37', '2023-04-04 08:20:37'),
(51, 'User', 'abdul azis,udin,elvan,udin created Oleh: abdul azis', 'App\\Models\\upload', 'created', '0606ded2-3d14-43f2-85a8-4a635dd3fadc', 'App\\Models\\user', '18c5004b-56e5-4f98-9d23-8e4f9a23f24b', '{\"attributes\":{\"tanggal\":\"2023-04-07\",\"id_group\":2,\"video_title\":\"Video tanggal 7\",\"video\":\"1mV7I3r4UlSFNBd8YIK99OF2IW1xrrMDOppmK1ce.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,udin,elvan,udin\",\"platform\":\"facebook\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:23:42', '2023-04-04 08:23:42'),
(52, 'User', 'abdul azis,elvan,caca,udin created Oleh: abdul azis', 'App\\Models\\upload', 'created', '98b63b63-4137-4bfb-9702-6ab06a5d95dd', 'App\\Models\\user', '18c5004b-56e5-4f98-9d23-8e4f9a23f24b', '{\"attributes\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:25:19', '2023-04-04 08:25:19'),
(53, 'User', 'abdul azis,udin,elvan,udin updated Oleh: caca', 'App\\Models\\upload', 'updated', '0606ded2-3d14-43f2-85a8-4a635dd3fadc', 'App\\Models\\user', '1d691bf5-f272-46a8-93d2-afda9ca8ebba', '{\"attributes\":{\"tanggal\":\"2023-04-07\",\"id_group\":2,\"video_title\":\"Video tanggal 7\",\"video\":\"1mV7I3r4UlSFNBd8YIK99OF2IW1xrrMDOppmK1ce.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,udin,elvan,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-07\",\"id_group\":2,\"video_title\":\"Video tanggal 7\",\"video\":\"1mV7I3r4UlSFNBd8YIK99OF2IW1xrrMDOppmK1ce.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,udin,elvan,udin\",\"platform\":\"facebook\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:26:53', '2023-04-04 08:26:53'),
(54, 'User', 'abdul azis,udin,elvan updated Oleh: caca', 'App\\Models\\upload', 'updated', '955a0163-fcdf-44b0-91f2-d26db65f0482', 'App\\Models\\user', '1d691bf5-f272-46a8-93d2-afda9ca8ebba', '{\"attributes\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"abdul azis,udin,elvan\",\"platform\":\"facebook,instagram\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"abdul azis,udin,elvan\",\"platform\":\"facebook,instagram\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:27:51', '2023-04-04 08:27:51'),
(55, 'User', 'abdul azis,elvan,caca,udin updated Oleh: caca', 'App\\Models\\upload', 'updated', '98b63b63-4137-4bfb-9702-6ab06a5d95dd', 'App\\Models\\user', '1d691bf5-f272-46a8-93d2-afda9ca8ebba', '{\"attributes\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:28:20', '2023-04-04 08:28:20'),
(56, 'User', 'abdul azis,elvan,caca,elvan created Oleh: abdul azis', 'App\\Models\\upload', 'created', '4cb91b77-a352-4508-9b05-99ce2147b7ce', 'App\\Models\\user', '18c5004b-56e5-4f98-9d23-8e4f9a23f24b', '{\"attributes\":{\"tanggal\":\"2023-04-19\",\"id_group\":2,\"video_title\":\"Video tanggal 19\",\"video\":\"ezzxk9LAvdKdKfR7JkPLGx45EmWLydYc2MjeE8Pt.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,elvan\",\"platform\":\"facebook\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:31:22', '2023-04-04 08:31:22'),
(57, 'User', 'abdul azis,elvan,udin created Oleh: abdul azis', 'App\\Models\\upload', 'created', '6737e862-adaf-4754-ad2b-12c43c820509', 'App\\Models\\user', '18c5004b-56e5-4f98-9d23-8e4f9a23f24b', '{\"attributes\":{\"tanggal\":\"2023-03-28\",\"id_group\":2,\"video_title\":\"Video Maret tanggal 28\",\"video\":\"9yFlk1LIVKtLF7tvVi7855rS5yfT9AMRDogO58rm.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"abdul azis,elvan,udin\",\"platform\":\"facebook\",\"status\":\"Pending\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:33:54', '2023-04-04 08:33:54'),
(58, 'User', 'abdul azis,udin,elvan updated Oleh: budi', 'App\\Models\\upload', 'updated', '955a0163-fcdf-44b0-91f2-d26db65f0482', 'App\\Models\\user', '26122983-9282-4f6a-9a86-34fa4c54e243', '{\"attributes\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"abdul azis,udin,elvan\",\"platform\":\"facebook,instagram\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"abdul azis,udin,elvan\",\"platform\":\"facebook,instagram\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:38:54', '2023-04-04 08:38:54'),
(59, 'User', 'abdul azis,udin,elvan,udin updated Oleh: budi', 'App\\Models\\upload', 'updated', '0606ded2-3d14-43f2-85a8-4a635dd3fadc', 'App\\Models\\user', '26122983-9282-4f6a-9a86-34fa4c54e243', '{\"attributes\":{\"tanggal\":\"2023-04-07\",\"id_group\":2,\"video_title\":\"Video tanggal 7\",\"video\":\"1mV7I3r4UlSFNBd8YIK99OF2IW1xrrMDOppmK1ce.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,udin,elvan,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-07\",\"id_group\":2,\"video_title\":\"Video tanggal 7\",\"video\":\"1mV7I3r4UlSFNBd8YIK99OF2IW1xrrMDOppmK1ce.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,udin,elvan,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:40:21', '2023-04-04 08:40:21'),
(60, 'User', 'abdul azis,elvan,caca,udin updated Oleh: budi', 'App\\Models\\upload', 'updated', '98b63b63-4137-4bfb-9702-6ab06a5d95dd', 'App\\Models\\user', '26122983-9282-4f6a-9a86-34fa4c54e243', '{\"attributes\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:41:23', '2023-04-04 08:41:23'),
(61, 'User', 'abdul azis,elvan,caca,udin updated Oleh: budi', 'App\\Models\\upload', 'updated', '98b63b63-4137-4bfb-9702-6ab06a5d95dd', 'App\\Models\\user', '26122983-9282-4f6a-9a86-34fa4c54e243', '{\"attributes\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-04 08:42:43', '2023-04-04 08:42:43'),
(62, 'User', 'abdul azis,elvan,caca,udin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '98b63b63-4137-4bfb-9702-6ab06a5d95dd', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-07 21:43:48', '2023-04-07 21:43:48'),
(63, 'User', 'abdul azis,elvan,caca,udin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '98b63b63-4137-4bfb-9702-6ab06a5d95dd', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-25\",\"id_group\":2,\"video_title\":\"Video tanggal 25\",\"video\":\"EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,elvan,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-07 21:44:42', '2023-04-07 21:44:42'),
(64, 'User', 'abdul azis,udin,elvan,udin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '0606ded2-3d14-43f2-85a8-4a635dd3fadc', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-07\",\"id_group\":2,\"video_title\":\"Video tanggal 7\",\"video\":\"1mV7I3r4UlSFNBd8YIK99OF2IW1xrrMDOppmK1ce.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,udin,elvan,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-07\",\"id_group\":2,\"video_title\":\"Video tanggal 7\",\"video\":\"1mV7I3r4UlSFNBd8YIK99OF2IW1xrrMDOppmK1ce.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,udin,elvan,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-07 22:10:25', '2023-04-07 22:10:25'),
(65, 'User', 'abdul azis,udin,elvan updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '955a0163-fcdf-44b0-91f2-d26db65f0482', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"abdul azis,udin,elvan\",\"platform\":\"facebook,instagram\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"abdul azis,udin,elvan\",\"platform\":\"facebook,instagram\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-07 22:10:44', '2023-04-07 22:10:44'),
(66, 'User', 'abdul azis,udin,elvan updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '955a0163-fcdf-44b0-91f2-d26db65f0482', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"abdul azis,udin,elvan\",\"platform\":\"facebook,instagram\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"abdul azis,udin,elvan\",\"platform\":\"facebook,instagram\",\"status\":\"Published\",\"bulan\":\"April\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-11 22:14:46', '2023-04-11 22:14:46'),
(67, 'User', 'vanhaz,budi,vanhaz created Oleh: vanhaz', 'App\\Models\\upload', 'created', '9b0924c5-3178-4bec-b7f1-ca6147df42d3', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"vanhaz,budi,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Pending\",\"bulan\":\"April\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-13 09:48:25', '2023-04-13 09:48:25'),
(68, 'User', 'vanhaz,budi,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '9b0924c5-3178-4bec-b7f1-ca6147df42d3', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"vanhaz,budi,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"vanhaz,budi,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Pending\",\"bulan\":\"April\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-13 09:48:48', '2023-04-13 09:48:48'),
(69, 'User', 'caca,elvan,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '9b0924c5-3178-4bec-b7f1-ca6147df42d3', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"vanhaz,budi,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-13 11:04:09', '2023-04-13 11:04:09'),
(70, 'User', 'caca,elvan,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '9b0924c5-3178-4bec-b7f1-ca6147df42d3', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-18 14:07:59', '2023-04-18 14:07:59'),
(71, 'User', 'caca,elvan,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '9b0924c5-3178-4bec-b7f1-ca6147df42d3', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"0\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-18 14:26:59', '2023-04-18 14:26:59'),
(72, 'User', 'caca,elvan,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '9b0924c5-3178-4bec-b7f1-ca6147df42d3', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"0\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-18 14:27:54', '2023-04-18 14:27:54'),
(73, 'User', 'caca,elvan,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '9b0924c5-3178-4bec-b7f1-ca6147df42d3', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"800\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-18 14:34:01', '2023-04-18 14:34:01'),
(74, 'User', 'caca,elvan,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '9b0924c5-3178-4bec-b7f1-ca6147df42d3', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"800\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-04-13\",\"id_group\":2,\"video_title\":\"Tanggal 11\",\"video\":\"U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4\",\"produksi\":\"Produser,Writer,Voice Over\",\"name\":\"caca,elvan,vanhaz\",\"platform\":\"facebook,youtube\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"800\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-04-18 21:21:24', '2023-04-18 21:21:24'),
(75, 'User', 'elvan,udin,elvan,udin,caaca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '955a0163-fcdf-44b0-91f2-d26db65f0482', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"elvan,udin,elvan,udin,caaca\",\"platform\":\"facebook,instagram\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"1600\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-04-04\",\"id_group\":2,\"video_title\":\"Video Tanggal 4\",\"video\":\"pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4\",\"produksi\":\"Produser,Writer,Video Editor\",\"name\":\"elvan,udin,elvan,udin,caaca\",\"platform\":\"facebook,instagram\",\"status\":\"Published\",\"bulan\":\"April\",\"isentif\":\"1600\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-04-18 21:27:03', '2023-04-18 21:27:03'),
(76, 'User', 'abdul azis,budi created Oleh: vanhaz', 'App\\Models\\upload', 'created', '22fccb74-0606-472d-b16c-66f2549ba0c2', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-11\",\"id_group\":2,\"video_title\":\"video tanggal 11\",\"video\":\"wBr2eXN2H2TjDrZuJ5Q9ZWj8OCC74UrYzIFKgJi2.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,budi\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-11 02:30:20', '2023-05-11 02:30:20');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(77, 'User', 'abdul azis,budi updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '22fccb74-0606-472d-b16c-66f2549ba0c2', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-11\",\"id_group\":2,\"video_title\":\"video tanggal 11\",\"video\":\"wBr2eXN2H2TjDrZuJ5Q9ZWj8OCC74UrYzIFKgJi2.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,budi\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-11\",\"id_group\":2,\"video_title\":\"video tanggal 11\",\"video\":\"wBr2eXN2H2TjDrZuJ5Q9ZWj8OCC74UrYzIFKgJi2.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,budi\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-11 06:07:53', '2023-05-11 06:07:53'),
(78, 'User', 'abdul azis,vanhaz,udin created Oleh: abdul azis', 'App\\Models\\upload', 'created', '4c637651-90fd-4cd4-adc1-b2097fce19a6', 'App\\Models\\user', '18c5004b-56e5-4f98-9d23-8e4f9a23f24b', '{\"attributes\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-11 09:17:23', '2023-05-11 09:17:23'),
(79, 'User', 'abdul azis,vanhaz,udin updated Oleh: caca', 'App\\Models\\upload', 'updated', '4c637651-90fd-4cd4-adc1-b2097fce19a6', 'App\\Models\\user', '1d691bf5-f272-46a8-93d2-afda9ca8ebba', '{\"attributes\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-11 09:18:46', '2023-05-11 09:18:46'),
(80, 'User', 'abdul azis,vanhaz,udin updated Oleh: caca', 'App\\Models\\upload', 'updated', '4c637651-90fd-4cd4-adc1-b2097fce19a6', 'App\\Models\\user', '1d691bf5-f272-46a8-93d2-afda9ca8ebba', '{\"attributes\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"630\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-11 09:22:01', '2023-05-11 09:22:01'),
(81, 'User', 'abdul azis,vanhaz,udin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '4c637651-90fd-4cd4-adc1-b2097fce19a6', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"840\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"630\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-15 05:46:55', '2023-05-15 05:46:55'),
(82, 'User', 'abdul azis,vanhaz,udin created Oleh: vanhaz', 'App\\Models\\upload', 'created', 'd4cb2e81-2cb5-406f-9f63-f56b9527260a', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-15 19:11:33', '2023-05-15 19:11:33'),
(83, 'User', 'abdul azis,caca,caca created Oleh: vanhaz', 'App\\Models\\upload', 'created', 'b5f0806a-d50c-4aef-8fb8-195e15560c94', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-15 19:28:33', '2023-05-15 19:28:33'),
(84, 'User', 'abdul azis,caca,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5f0806a-d50c-4aef-8fb8-195e15560c94', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-15 19:29:19', '2023-05-15 19:29:19'),
(85, 'User', 'abdul azis,caca,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5f0806a-d50c-4aef-8fb8-195e15560c94', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-15 19:29:57', '2023-05-15 19:29:57'),
(86, 'User', 'abdul azis,caca,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5f0806a-d50c-4aef-8fb8-195e15560c94', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-15 20:11:27', '2023-05-15 20:11:27'),
(87, 'User', 'abdul azis,vanhaz,udin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'd4cb2e81-2cb5-406f-9f63-f56b9527260a', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-15 20:39:03', '2023-05-15 20:39:03'),
(88, 'User', 'abdul azis,caca,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5f0806a-d50c-4aef-8fb8-195e15560c94', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-15 23:45:56', '2023-05-15 23:45:56'),
(89, 'User', 'abdul azis,caca,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5f0806a-d50c-4aef-8fb8-195e15560c94', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-15 23:47:00', '2023-05-15 23:47:00'),
(90, 'User', 'abdul azis,caca,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5f0806a-d50c-4aef-8fb8-195e15560c94', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-17\",\"id_group\":2,\"video_title\":\"video tanggal 23\",\"video\":\"Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,caca,caca\",\"platform\":\"tiktok,youtube\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-16 00:42:14', '2023-05-16 00:42:14'),
(91, 'User', 'abdul azis,caca created Oleh: vanhaz', 'App\\Models\\upload', 'created', 'b5fcd908-a5a2-4c0b-af54-d81b32e29340', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-16 10:41:17', '2023-05-16 10:41:17'),
(92, 'User', 'abdul azis,caca,caca,udin created Oleh: abdul azis', 'App\\Models\\upload', 'created', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '18c5004b-56e5-4f98-9d23-8e4f9a23f24b', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-16 10:46:40', '2023-05-16 10:46:40'),
(93, 'User', 'abdul azis,caca,caca,udin updated Oleh: caca', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '1d691bf5-f272-46a8-93d2-afda9ca8ebba', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-16 10:51:21', '2023-05-16 10:51:21'),
(94, 'User', 'abdul azis,caca,caca,udin updated Oleh: budi', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '26122983-9282-4f6a-9a86-34fa4c54e243', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-19 06:48:19', '2023-05-19 06:48:19'),
(95, 'User', 'abdul azis,caca,caca,udin updated Oleh: budi', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '26122983-9282-4f6a-9a86-34fa4c54e243', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-19 06:51:18', '2023-05-19 06:51:18'),
(96, 'User', 'abdul azis,caca,caca,udin updated Oleh: budi', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '26122983-9282-4f6a-9a86-34fa4c54e243', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-19 07:01:57', '2023-05-19 07:01:57'),
(97, 'User', 'abdul azis,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5fcd908-a5a2-4c0b-af54-d81b32e29340', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-22 20:21:11', '2023-05-22 20:21:11'),
(98, 'User', 'abdul azis,caca,caca,udin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-25 15:27:33', '2023-05-25 15:27:33'),
(99, 'User', 'abdul azis,caca,caca,udin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor\",\"name\":\"abdul azis,caca,caca,udin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-25 16:16:10', '2023-05-25 16:16:10'),
(100, 'User', 'abdul azis,caca,caca,udin,super admin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-25 23:13:50', '2023-05-25 23:13:50'),
(101, 'User', 'abdul azis,caca,caca,udin,super admin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-25 23:16:20', '2023-05-25 23:16:20'),
(102, 'User', 'abdul azis,caca,caca,udin,super admin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-26 11:03:54', '2023-05-26 11:03:54'),
(103, 'User', 'abdul azis,budi updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '22fccb74-0606-472d-b16c-66f2549ba0c2', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-11\",\"id_group\":2,\"video_title\":\"video tanggal 11\",\"video\":\"wBr2eXN2H2TjDrZuJ5Q9ZWj8OCC74UrYzIFKgJi2.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,budi\",\"platform\":\"instagram,tiktok\",\"status\":\"Takedown\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-11\",\"id_group\":2,\"video_title\":\"video tanggal 11\",\"video\":\"wBr2eXN2H2TjDrZuJ5Q9ZWj8OCC74UrYzIFKgJi2.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,budi\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 11:10:34', '2023-05-26 11:10:34'),
(104, 'User', 'abdul azis,budi deleted Oleh: vanhaz', 'App\\Models\\upload', 'deleted', '22fccb74-0606-472d-b16c-66f2549ba0c2', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"old\":{\"tanggal\":\"2023-05-11\",\"id_group\":2,\"video_title\":\"video tanggal 11\",\"video\":\"wBr2eXN2H2TjDrZuJ5Q9ZWj8OCC74UrYzIFKgJi2.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,budi\",\"platform\":\"instagram,tiktok\",\"status\":\"Takedown\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 11:11:10', '2023-05-26 11:11:10'),
(105, 'User', 'abdul azis,caca,caca,udin,super admin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-26 18:19:52', '2023-05-26 18:19:52'),
(106, 'User', 'abdul azis,caca,caca,udin,super admin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-26 18:20:14', '2023-05-26 18:20:14'),
(107, 'User', 'abdul azis,budi created Oleh: vanhaz', 'App\\Models\\upload', 'created', '5ea8f164-6e82-431d-a9b3-e50e076bf8d5', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-12\",\"id_group\":2,\"video_title\":\"kebakaran\",\"video\":\"KD3UYFMxcOClTB11eS5zd2lty59nledyJx6Q0waZ.mp4\",\"produksi\":\"Produser,Writer,Talent\\/Host\",\"name\":\"abdul azis,budi\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 18:26:17', '2023-05-26 18:26:17'),
(108, 'User', 'budi,vanhaz created Oleh: vanhaz', 'App\\Models\\upload', 'created', '62ea12c3-00a4-4063-9822-31290d710c11', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-27\",\"id_group\":3,\"video_title\":\"hihih\",\"video\":\"71BUBMR5SPn321ulFtQFZB5lYbFZnUfaKDW1JlBQ.mp4\",\"produksi\":\"Produser,Writer,Admin\",\"name\":\"budi,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 18:29:24', '2023-05-26 18:29:24'),
(109, 'User', 'budi,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '62ea12c3-00a4-4063-9822-31290d710c11', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-27\",\"id_group\":3,\"video_title\":\"hihih\",\"video\":\"71BUBMR5SPn321ulFtQFZB5lYbFZnUfaKDW1JlBQ.mp4\",\"produksi\":\"Produser,Writer,Admin\",\"name\":\"budi,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-27\",\"id_group\":3,\"video_title\":\"hihih\",\"video\":\"71BUBMR5SPn321ulFtQFZB5lYbFZnUfaKDW1JlBQ.mp4\",\"produksi\":\"Produser,Writer,Admin\",\"name\":\"budi,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 18:30:28', '2023-05-26 18:30:28'),
(110, 'User', 'budi,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '62ea12c3-00a4-4063-9822-31290d710c11', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-27\",\"id_group\":3,\"video_title\":\"hihih\",\"video\":\"71BUBMR5SPn321ulFtQFZB5lYbFZnUfaKDW1JlBQ.mp4\",\"produksi\":\"Produser,Writer,Admin\",\"name\":\"budi,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"400\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-27\",\"id_group\":3,\"video_title\":\"hihih\",\"video\":\"71BUBMR5SPn321ulFtQFZB5lYbFZnUfaKDW1JlBQ.mp4\",\"produksi\":\"Produser,Writer,Admin\",\"name\":\"budi,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"-\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 18:31:06', '2023-05-26 18:31:06'),
(111, 'User', 'abdul azis,budi created Oleh: vanhaz', 'App\\Models\\upload', 'created', '97177ff0-cf68-44ed-80a7-78d9e78295fd', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-27\",\"id_group\":4,\"video_title\":\"hihih\",\"video\":\"ncXX2tbBulHL05Yoj5gZt1kAJ6xIwr33g1SclWFy.mp4\",\"produksi\":\"Produser,Writer,Admin\",\"name\":\"abdul azis,budi\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"Unoted\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 18:34:41', '2023-05-26 18:34:41'),
(112, 'User', 'budi,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '62ea12c3-00a4-4063-9822-31290d710c11', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-27\",\"id_group\":3,\"video_title\":\"hihih\",\"video\":\"71BUBMR5SPn321ulFtQFZB5lYbFZnUfaKDW1JlBQ.mp4\",\"produksi\":\"Produser,Writer,Admin\",\"name\":\"budi,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Noted\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-27\",\"id_group\":3,\"video_title\":\"hihih\",\"video\":\"71BUBMR5SPn321ulFtQFZB5lYbFZnUfaKDW1JlBQ.mp4\",\"produksi\":\"Produser,Writer,Admin\",\"name\":\"budi,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Unoted\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 18:52:01', '2023-05-26 18:52:01'),
(113, 'User', 'budi,vanhaz updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', '62ea12c3-00a4-4063-9822-31290d710c11', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-27\",\"id_group\":3,\"video_title\":\"hihih\",\"video\":\"71BUBMR5SPn321ulFtQFZB5lYbFZnUfaKDW1JlBQ.mp4\",\"produksi\":\"Produser,Writer,Admin\",\"name\":\"budi,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Selesai\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-27\",\"id_group\":3,\"video_title\":\"hihih\",\"video\":\"71BUBMR5SPn321ulFtQFZB5lYbFZnUfaKDW1JlBQ.mp4\",\"produksi\":\"Produser,Writer,Admin\",\"name\":\"budi,vanhaz\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Noted\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 19:12:00', '2023-05-26 19:12:00'),
(114, 'User', 'abdul azis,caca,caca,udin,super admin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Noted\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Unoted\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-26 19:12:32', '2023-05-26 19:12:32'),
(115, 'User', 'abdul azis,vanhaz,udin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'd4cb2e81-2cb5-406f-9f63-f56b9527260a', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Noted\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-24\",\"id_group\":2,\"video_title\":\"Video Tanggal 24\",\"video\":\"ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4\",\"produksi\":\"Produser,Talent\\/Host,Voice Over\",\"name\":\"abdul azis,vanhaz,udin\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Unoted\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-26 19:14:21', '2023-05-26 19:14:21'),
(116, 'User', 'abdul azis,caca,caca,udin,super admin updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Selesai\",\"name_upload\":\"abdul azis\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":2,\"video_title\":\"Video tanggal 16\",\"video\":\"Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4\",\"produksi\":\"Produser,Writer,Voice Over,Video Editor,Admin\",\"name\":\"abdul azis,caca,caca,udin,super admin\",\"platform\":\"facebook\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Noted\",\"name_upload\":\"abdul azis\"}}', NULL, '2023-05-26 19:14:54', '2023-05-26 19:14:54'),
(117, 'User', 'abdul azis,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5fcd908-a5a2-4c0b-af54-d81b32e29340', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Unoted\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Pending\",\"bulan\":\"Mei\",\"isentif\":\"Unoted\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 19:16:32', '2023-05-26 19:16:32'),
(118, 'User', 'abdul azis,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5fcd908-a5a2-4c0b-af54-d81b32e29340', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Noted\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Unoted\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 19:17:07', '2023-05-26 19:17:07'),
(119, 'User', 'abdul azis,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5fcd908-a5a2-4c0b-af54-d81b32e29340', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Noted\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Noted\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 19:17:50', '2023-05-26 19:17:50'),
(120, 'User', 'abdul azis,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5fcd908-a5a2-4c0b-af54-d81b32e29340', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Selesai\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Noted\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 19:18:04', '2023-05-26 19:18:04'),
(121, 'User', 'abdul azis,caca updated Oleh: vanhaz', 'App\\Models\\upload', 'updated', 'b5fcd908-a5a2-4c0b-af54-d81b32e29340', 'App\\Models\\user', '666cf95f-f1cd-40ce-9173-241d9d173a04', '{\"attributes\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Noted\",\"name_upload\":\"vanhaz\"},\"old\":{\"tanggal\":\"2023-05-16\",\"id_group\":4,\"video_title\":\"Video tanggal 16\",\"video\":\"QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4\",\"produksi\":\"Produser,Talent\\/Host\",\"name\":\"abdul azis,caca\",\"platform\":\"instagram,tiktok\",\"status\":\"Published\",\"bulan\":\"Mei\",\"isentif\":\"Selesai\",\"name_upload\":\"vanhaz\"}}', NULL, '2023-05-26 19:23:06', '2023-05-26 19:23:06');

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
-- Table structure for table `isentif`
--

CREATE TABLE `isentif` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pendapatan` varchar(250) NOT NULL,
  `judul_video` varchar(100) NOT NULL,
  `pembagian` varchar(100) NOT NULL,
  `viewer` int(100) NOT NULL,
  `impression` int(100) NOT NULL,
  `published` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isentif`
--

INSERT INTO `isentif` (`id`, `nama`, `pendapatan`, `judul_video`, `pembagian`, `viewer`, `impression`, `published`, `status`, `created_at`, `updated_at`) VALUES
(18, 'abdul azis', '13333', 'Video Tanggal 24', '', 1000, 1000, '2023-04-17', 'Published', '2023-05-16 00:12:03', '2023-05-16 00:12:03'),
(19, 'vanhaz', '13333', 'Video Tanggal 24', '', 1000, 1000, '2023-05-24', 'Published', '2023-05-16 00:12:03', '2023-05-16 00:12:03'),
(20, 'udin', '13333', 'Video Tanggal 24', '', 1000, 1000, '2023-05-24', 'Published', '2023-05-16 00:12:03', '2023-05-16 00:12:03'),
(21, 'caca', '266.66666666667', 'video tanggal 23', '', 1500, 1000, '2023-05-17', 'Published', '2023-05-16 00:42:14', '2023-05-16 00:42:14'),
(22, 'abdul azis', '133.33333333333', 'video tanggal 23', '', 1500, 1000, '2023-05-17', 'Published', '2023-05-16 00:42:14', '2023-05-16 00:42:14'),
(26, 'caca', '200', 'Video tanggal 16', '', 1000, 1000, '2023-05-16', 'Published', '2023-05-19 07:01:57', '2023-05-19 07:01:57'),
(27, 'abdul azis', '100', 'Video tanggal 16', '', 1000, 1000, '2023-05-16', 'Published', '2023-05-19 07:01:57', '2023-05-19 07:01:57'),
(28, 'udin', '100', 'Video tanggal 16', '', 1000, 1000, '2023-05-16', 'Published', '2023-05-19 07:01:57', '2023-05-19 07:01:57'),
(29, 'caca', '200', 'Video tanggal 16', '', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 15:27:33', '2023-05-25 15:27:33'),
(30, 'abdul azis', '250', 'Video tanggal 16', '', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 15:27:33', '2023-05-25 15:27:33'),
(31, 'udin', '100', 'Video tanggal 16', '', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 15:27:33', '2023-05-25 15:27:33'),
(32, 'caca', '200', 'Video tanggal 16', '00,1', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 16:16:10', '2023-05-25 16:16:10'),
(33, 'abdul azis', '100', 'Video tanggal 16', '00,1', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 16:16:10', '2023-05-25 16:16:10'),
(34, 'udin', '100', 'Video tanggal 16', '00,1', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 16:16:10', '2023-05-25 16:16:10'),
(35, 'abdul azis', '160', 'Video tanggal 16', 'Produser', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:13:50', '2023-05-25 23:13:50'),
(36, 'caca', '80', 'Video tanggal 16', 'Writer', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:13:50', '2023-05-25 23:13:50'),
(37, 'caca', '80', 'Video tanggal 16', 'Voice Over', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:13:50', '2023-05-25 23:13:50'),
(38, 'udin', '80', 'Video tanggal 16', 'Video Editor', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:13:50', '2023-05-25 23:13:50'),
(39, 'abdul azis', '$100.00', 'Video tanggal 16', 'Produser', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:16:20', '2023-05-25 23:16:20'),
(40, 'caca', '$75.00', 'Video tanggal 16', 'Writer', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:16:20', '2023-05-25 23:16:20'),
(41, 'caca', '$100.00', 'Video tanggal 16', 'Voice Over', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:16:20', '2023-05-25 23:16:20'),
(42, 'udin', '$100.00', 'Video tanggal 16', 'Video Editor', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:16:20', '2023-05-25 23:16:20'),
(43, 'abdul azis', '$100.00', 'Video tanggal 16', 'Produser', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:20:12', '2023-05-25 23:20:12'),
(44, 'caca', '$75.00', 'Video tanggal 16', 'Writer', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:20:12', '2023-05-25 23:20:12'),
(45, 'caca', '$100.00', 'Video tanggal 16', 'Voice Over', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:20:12', '2023-05-25 23:20:12'),
(46, 'udin', '$100.00', 'Video tanggal 16', 'Video Editor', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:20:12', '2023-05-25 23:20:12'),
(47, 'super admin', '$25.00', 'Video tanggal 16', 'Admin', 1000, 1000, '2023-05-16', 'Published', '2023-05-25 23:20:12', '2023-05-25 23:20:12'),
(48, 'abdul azis', '100', 'Video tanggal 16', 'Produser', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 11:03:54', '2023-05-26 11:03:54'),
(49, 'caca', '75', 'Video tanggal 16', 'Writer', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 11:03:54', '2023-05-26 11:03:54'),
(50, 'caca', '100', 'Video tanggal 16', 'Voice Over', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 11:03:54', '2023-05-26 11:03:54'),
(51, 'udin', '100', 'Video tanggal 16', 'Video Editor', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 11:03:54', '2023-05-26 11:03:54'),
(52, 'super admin', '25', 'Video tanggal 16', 'Admin', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 11:03:54', '2023-05-26 11:03:54'),
(53, 'abdul azis', '100', 'Video tanggal 16', 'Produser', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 18:19:52', '2023-05-26 18:19:52'),
(54, 'caca', '75', 'Video tanggal 16', 'Writer', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 18:19:52', '2023-05-26 18:19:52'),
(55, 'caca', '100', 'Video tanggal 16', 'Voice Over', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 18:19:52', '2023-05-26 18:19:52'),
(56, 'udin', '100', 'Video tanggal 16', 'Video Editor', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 18:19:52', '2023-05-26 18:19:52'),
(57, 'super admin', '25', 'Video tanggal 16', 'Admin', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 18:19:52', '2023-05-26 18:19:52'),
(58, 'abdul azis', '100', 'Video tanggal 16', 'Produser', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 18:20:14', '2023-05-26 18:20:14'),
(59, 'caca', '75', 'Video tanggal 16', 'Writer', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 18:20:14', '2023-05-26 18:20:14'),
(60, 'caca', '100', 'Video tanggal 16', 'Voice Over', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 18:20:14', '2023-05-26 18:20:14'),
(61, 'udin', '100', 'Video tanggal 16', 'Video Editor', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 18:20:14', '2023-05-26 18:20:14'),
(62, 'super admin', '25', 'Video tanggal 16', 'Admin', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 18:20:14', '2023-05-26 18:20:14'),
(63, 'budi', '100', 'hihih', 'Produser', 1000, 1000, '2023-05-27', 'Published', '2023-05-26 19:12:00', '2023-05-26 19:12:00'),
(64, 'vanhaz', '75', 'hihih', 'Writer', 1000, 1000, '2023-05-27', 'Published', '2023-05-26 19:12:00', '2023-05-26 19:12:00'),
(65, 'abdul azis', '100', 'Video tanggal 16', 'Produser', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 19:14:54', '2023-05-26 19:14:54'),
(66, 'caca', '75', 'Video tanggal 16', 'Writer', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 19:14:54', '2023-05-26 19:14:54'),
(67, 'caca', '100', 'Video tanggal 16', 'Voice Over', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 19:14:54', '2023-05-26 19:14:54'),
(68, 'udin', '100', 'Video tanggal 16', 'Video Editor', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 19:14:54', '2023-05-26 19:14:54'),
(69, 'super admin', '25', 'Video tanggal 16', 'Admin', 1000, 1000, '2023-05-16', 'Published', '2023-05-26 19:14:54', '2023-05-26 19:14:54'),
(70, 'abdul azis', '100', 'Video tanggal 16', 'Produser', 1000, 2000, '2023-05-16', 'Published', '2023-05-26 19:18:04', '2023-05-26 19:18:04'),
(71, 'caca', '100', 'Video tanggal 16', 'Talent/Host', 1000, 2000, '2023-05-16', 'Published', '2023-05-26 19:18:04', '2023-05-26 19:18:04');

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
(20, '2023_02_28_042956_create_tb_role', 16),
(21, '2023_03_16_110732_create_notifications_table', 17),
(22, '2023_03_27_032958_create_tb_total', 18),
(23, '2023_03_27_054952_create_activity_log_table', 19),
(24, '2023_03_27_054953_add_event_column_to_activity_log_table', 19),
(25, '2023_03_27_054954_add_batch_uuid_column_to_activity_log_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `tb_total`
--

CREATE TABLE `tb_total` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_total`
--

INSERT INTO `tb_total` (`id`, `total`, `tanggal`, `updated_at`, `created_at`) VALUES
(2, '80000', '2023-03 - 2023-03', '2023-03-30 21:27:14', '2023-03-30 21:24:14'),
(3, '3200', '2023-04 - 2023-04', '2023-04-04 15:44:49', '2023-04-03 05:33:56'),
(6, '3000', '2023-05 - 2023-05', '2023-05-19 13:44:29', '2023-05-15 12:45:28');

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
  `bulan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_upload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_date` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_link` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewer_bulan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impression_bulan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revenue_bulan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revenuedate_bulan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewer_harian` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impression_harian` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revenue_harian` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revenuedate_harian` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isentif` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insentif` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `tanggal`, `id_group`, `video_title`, `video`, `produksi`, `name`, `platform`, `status`, `bulan`, `name_upload`, `gambar`, `published_date`, `publish_link`, `viewer_bulan`, `impression_bulan`, `revenue_bulan`, `revenuedate_bulan`, `viewer_harian`, `impression_harian`, `revenue_harian`, `revenuedate_harian`, `isentif`, `jumlah`, `insentif`, `total`, `created_at`, `updated_at`) VALUES
('0606ded2-3d14-43f2-85a8-4a635dd3fadc', '2023-04-07', 2, 'Video tanggal 7', '1mV7I3r4UlSFNBd8YIK99OF2IW1xrrMDOppmK1ce.mp4', 'Produser,Writer,Voice Over,Video Editor', 'abdul azis,udin,elvan,udin', 'facebook', 'Published', 'April', 'abdul azis', 'mTjIwRTE80MS8ju8ODeFm4NZpkNGQmlAVTnHFMDR.png', '2023-04-08', '-', '2500', '2000', '400', '2023-04 - 2023-04', '2000', '1700', '200', '2023-04-07 - 2023-04-20', 'unoted', '4', '', '3200', '2023-04-04 08:23:42', '2023-04-07 22:10:25'),
('4c637651-90fd-4cd4-adc1-b2097fce19a6', '2023-05-24', 2, 'Video Tanggal 24', 'ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4', 'Produser,Talent/Host,Voice Over', 'abdul azis,vanhaz,udin', 'instagram,tiktok', 'Published', 'Mei', 'abdul azis', 'mTjIwRTE80MS8ju8ODeFm4NZpkNGQmlAVTnHFMDR.png', '2023-05-24', '-', '1000', '1000', '2100', '2023-05 - 2023-05', '1000', '1000', '2100', '2023-04-07 - 2023-04-20', 'unoted', '3', '$210.00,$210.00,$210.00', '4000', '2023-05-11 09:17:22', '2023-05-15 05:46:54'),
('4cb91b77-a352-4508-9b05-99ce2147b7ce', '2023-04-19', 2, 'Video tanggal 19', 'ezzxk9LAvdKdKfR7JkPLGx45EmWLydYc2MjeE8Pt.mp4', 'Produser,Writer,Voice Over,Video Editor', 'abdul azis,elvan,caca,elvan', 'facebook', 'Pending', 'April', 'abdul azis', 'mTjIwRTE80MS8ju8ODeFm4NZpkNGQmlAVTnHFMDR.png', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Unoted', '-', '', '-', '2023-04-04 08:31:22', '2023-04-04 08:31:22'),
('5ea8f164-6e82-431d-a9b3-e50e076bf8d5', '2023-05-12', 2, 'kebakaran', 'KD3UYFMxcOClTB11eS5zd2lty59nledyJx6Q0waZ.mp4', 'Produser,Writer,Talent/Host', 'abdul azis,budi', 'instagram,tiktok', 'Pending', 'Mei', 'vanhaz', 'Rphc0K4i3ZH3T2FDqtkrgF8avHr0syXIjH91SX75.png', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Unoted', '-', '-', '-', '2023-05-26 18:26:17', '2023-05-26 18:26:17'),
('62ea12c3-00a4-4063-9822-31290d710c11', '2023-05-27', 3, 'hihih', '71BUBMR5SPn321ulFtQFZB5lYbFZnUfaKDW1JlBQ.mp4', 'Produser,Writer,Admin', 'budi,vanhaz', 'instagram,tiktok', 'Published', 'Mei', 'vanhaz', 'Rphc0K4i3ZH3T2FDqtkrgF8avHr0syXIjH91SX75.png', '2023-05-11', '-', '1000', '1000', '1000', '2023-05 - 2023-05', '1000', '1000', '1000', '2023-04-07 - 2023-04-20', 'Selesai', '3', '100,75,25', '3000', '2023-05-26 18:29:24', '2023-05-26 19:12:00'),
('6737e862-adaf-4754-ad2b-12c43c820509', '2023-03-28', 2, 'Video Maret tanggal 28', '9yFlk1LIVKtLF7tvVi7855rS5yfT9AMRDogO58rm.mp4', 'Produser,Writer,Video Editor', 'abdul azis,elvan,udin', 'facebook', 'Pending', 'April', 'abdul azis', 'mTjIwRTE80MS8ju8ODeFm4NZpkNGQmlAVTnHFMDR.png', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Unoted', '-', '', '-', '2023-04-04 08:33:54', '2023-04-04 08:33:54'),
('955a0163-fcdf-44b0-91f2-d26db65f0482', '2023-04-04', 2, 'Video Tanggal 4', 'pKGU0UmVDIlCp3ymTcAf5sCGDSMoDDaqvD4iWLak.mp4', 'Produser,Writer,Video Editor', 'elvan,udin,elvan,udin,caaca', 'facebook,instagram', 'Published', 'April', 'abdul azis', 'mTjIwRTE80MS8ju8ODeFm4NZpkNGQmlAVTnHFMDR.png', '2023-04-04', 'abc', '2000', '2000', '150', '2023-04 - 2023-04', '1000', '1500', '4000', '2023-04-07 - 2023-04-20', 'Unoted', '3', '$640.00,$640.00,$320.00', '3200', '2023-04-04 08:20:37', '2023-04-18 21:27:03'),
('97177ff0-cf68-44ed-80a7-78d9e78295fd', '2023-05-27', 4, 'hihih', 'ncXX2tbBulHL05Yoj5gZt1kAJ6xIwr33g1SclWFy.mp4', 'Produser,Writer,Admin', 'abdul azis,budi', 'instagram,tiktok', 'Pending', 'Mei', 'vanhaz', 'Rphc0K4i3ZH3T2FDqtkrgF8avHr0syXIjH91SX75.png', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Unoted', '-', '-', '-', '2023-05-26 18:34:41', '2023-05-26 18:34:41'),
('98b63b63-4137-4bfb-9702-6ab06a5d95dd', '2023-04-25', 2, 'Video tanggal 25', 'EwR3B83OUia3e7Gg9L2nrRZ8ikurEK18LnCTebBJ.mp4', 'Produser,Writer,Voice Over,Video Editor', 'caca,elvan,caca,udin', 'facebook', 'Published', 'April', 'abdul azis', 'mTjIwRTE80MS8ju8ODeFm4NZpkNGQmlAVTnHFMDR.png', '2023-04-25', 'cds', '100', '1000', '200', '2023-04 - 2023-04', '900', '700', '200', '2023-04-07 - 2023-04-20', 'Unoted', '4', '', '3200', '2023-04-04 08:25:19', '2023-04-07 21:44:42'),
('9b0924c5-3178-4bec-b7f1-ca6147df42d3', '2023-04-13', 2, 'Tanggal 11', 'U81NAO0aSLjGsYABCSyAdanl5AsEbN5IpHSbVI1L.mp4', 'Produser,Writer,Voice Over', 'caca,elvan,vanhaz', 'facebook,youtube', 'Published', 'April', 'vanhaz', 'Rphc0K4i3ZH3T2FDqtkrgF8avHr0syXIjH91SX75.png', '2023-04-13', '-', '1000', '1000', '2000', '2023-04 - 2023-04', '1000', '1000', '2000', '2023-04-07 - 2023-04-20', 'Unoted', '3', '$266.67', '3200', '2023-04-13 09:48:24', '2023-04-18 21:21:24'),
('b5f0806a-d50c-4aef-8fb8-195e15560c94', '2023-05-17', 2, 'video tanggal 23', 'Mc5WCt0xMzJDDeQ7IZC61goZNEyhcewg46Ordtmp.mp4', 'Produser,Talent/Host,Voice Over', 'abdul azis,caca,caca', 'tiktok,youtube', 'Published', 'Mei', 'vanhaz', 'Rphc0K4i3ZH3T2FDqtkrgF8avHr0syXIjH91SX75.png', '2023-05-17', '-', '1500', '1000', '1000', '2023-05 - 2023-05', '1500', '1000', '1000', '2023-04-07 - 2023-04-20', 'Unoted', '3', '266.66666666667,133.33333333333', '4000', '2023-05-15 19:28:33', '2023-05-16 00:42:14'),
('b5fcd908-a5a2-4c0b-af54-d81b32e29340', '2023-05-16', 4, 'Video tanggal 16', 'QYxs7hm5VM4o5F40rFNQYOSKxty0iGnjKa0jQW7I.mp4', 'Produser,Talent/Host', 'abdul azis,caca', 'instagram,tiktok', 'Published', 'Mei', 'vanhaz', 'Rphc0K4i3ZH3T2FDqtkrgF8avHr0syXIjH91SX75.png', '2023-05-27', '-', '1000', '2000', '1000', '2023-05 - 2023-05', '1000', '2000', '1000', '2023-04-07 - 2023-04-20', 'Noted', '2', '100,100', '3000', '2023-05-16 10:41:16', '2023-05-26 19:23:06'),
('d4cb2e81-2cb5-406f-9f63-f56b9527260a', '2023-05-24', 2, 'Video Tanggal 24', 'ZShAXrGMDNsHAaeyq17X3dDGjZHOSbswMBRpkYw9.mp4', 'Produser,Talent/Host,Voice Over', 'abdul azis,vanhaz,udin', 'instagram,tiktok', 'Published', 'Mei', 'abdul azis', 'mTjIwRTE80MS8ju8ODeFm4NZpkNGQmlAVTnHFMDR.png', '2023-05-24', '-', '1000', '1000', '1000', '2023-05 - 2023-05', '1000', '1000', '1000', '2023-04-07 - 2023-04-20', 'Noted', '3', '$133.33,$133.33,$133.33', '3000', '2023-05-15 19:11:33', '2023-05-26 19:14:21'),
('eb5456c7-9b43-4393-a7a9-2e5bea17b5aa', '2023-05-16', 2, 'Video tanggal 16', 'Isx6PmSs2FCySTd3atU8lT9fJissfZ8i9m8VAUNw.mp4', 'Produser,Writer,Voice Over,Video Editor,Admin', 'abdul azis,caca,caca,udin,super admin', 'facebook', 'Published', 'Mei', 'abdul azis', 'mTjIwRTE80MS8ju8ODeFm4NZpkNGQmlAVTnHFMDR.png', '2023-05-16', '-', '1000', '1000', '1000', '2023-05 - 2023-05', '1000', '1000', '1000', '2023-04-07 - 2023-04-20', 'Selesai', '5', '100,75,100,100,25', '3000', '2023-05-16 10:46:40', '2023-05-26 19:14:54');

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
(14, 'Admin', 'Super Admin', '1', '2023-03-28 09:09:40', '2023-03-28 09:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_group` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `id_group`, `email`, `password`, `jabatan`, `role`, `gambar`, `created_at`, `updated_at`) VALUES
('18c5004b-56e5-4f98-9d23-8e4f9a23f24b', 'abdul azis', 'abdul', '2', 'abdulaziz@gmail.com', '$2y$10$MRsnn8xcogfW/eWgOflj6enZiHGUHT1myciaUvIYlEmKSJhloj6Ce', 'Produser', 'Admin Upload', 'mTjIwRTE80MS8ju8ODeFm4NZpkNGQmlAVTnHFMDR.png', '2023-04-04 08:16:36', '2023-05-23 06:13:41'),
('1d691bf5-f272-46a8-93d2-afda9ca8ebba', 'caca', 'caca', '2', 'caca@gmail.com', '$2y$10$/3yoHRIeAd18PoPC2.Ke4u4VWWLv1I2FJ7JPm98tw9syG1NnS//we', 'Admin Sosmed', 'Admin Sosmed', 'yzqnDGDURG7Cv5s1P56JbJMBlScf22nKyjZs36g3.png', '2023-04-04 08:17:42', '2023-05-23 06:12:43'),
('26122983-9282-4f6a-9a86-34fa4c54e243', 'budi', 'budi', '2', 'budi@gmail.com', '$2y$10$eSuU/ELbVdZSOFwtPXfw6u8haKoQaFGqO0mF6UhhWBVqcmEhDcITu', 'Admin Finance', 'Admin Finance', 'DrtSD4jbhmy1rXrErpPC2c1fpJaY6l7zrEwfcRws.png', '2023-04-04 08:18:44', '2023-05-23 06:12:58'),
('666cf95f-f1cd-40ce-9173-241d9d173a04', 'vanhaz', 'vanhaz', '2', 'elvanhazizz@gmail.com', '$2y$10$oiW959FVwdtU0Cs6cI72ReW00UegtjLG7DtYvnaVcMucCFFHvErUi', 'Super Admin', 'Super Admin', 'Rphc0K4i3ZH3T2FDqtkrgF8avHr0syXIjH91SX75.png', '2023-04-04 06:36:43', '2023-05-23 06:12:09'),
('75b82190-730d-4584-b396-7d3c68674262', 'elvann', 'udin', '5', 'vabhaz@gmail.com', '$2y$10$vceRkqJoOrTMIESrWYJKouTZ9Qjw2qkE0VPMP/u09YLGei6vCPaaS', 'Writer', 'User', '7T4Ncbghg5Xs9BraN2663gMgI6e08WTyjmrby2bR.png', '2023-04-04 06:49:05', '2023-05-23 07:12:07'),
('cec32d7a-d2b2-11ed-8ded-c018504b260c', 'udin', 'elvan', '3', 'elvanhazi@gmail.com', '$2y$10$1yw779A.QATsNtfVdk1vpOd5e6AXEcwXJkocuOUtzSKd9T8iSGFoe', 'Talent/Host', 'User', 'pt6GNzEB1W2Syq2TiGYPgBOdmb4DUt6ZhC1KoxKG.png', NULL, '2023-05-23 06:16:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

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
-- Indexes for table `isentif`
--
ALTER TABLE `isentif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `tb_total`
--
ALTER TABLE `tb_total`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id_group`);

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
  ADD KEY `jabatan` (`jabatan`),
  ADD KEY `role` (`role`),
  ADD KEY `name` (`name`),
  ADD KEY `gambar` (`gambar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

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
-- AUTO_INCREMENT for table `isentif`
--
ALTER TABLE `isentif`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_total`
--
ALTER TABLE `tb_total`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id_jabatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`id_group`) REFERENCES `type_group` (`group`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_4` FOREIGN KEY (`jabatan`) REFERENCES `type_jabatan` (`jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_5` FOREIGN KEY (`role`) REFERENCES `type_jabatan` (`role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
