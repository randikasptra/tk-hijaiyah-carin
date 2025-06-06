-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2025 at 08:20 AM
-- Server version: 8.2.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk_hijaiyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

DROP TABLE IF EXISTS `audio`;
CREATE TABLE IF NOT EXISTS `audio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `nama`, `file`, `created_at`, `updated_at`) VALUES
(1, 'backsound', 'sound/Backsoundd.mp3', NULL, NULL),
(2, 'backsound', 'sound/Mengenal.mp3', NULL, NULL),
(3, 'harakat', 'sound/MK_HIJAIYAH.mp3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `huruf_hijaiyah`
--

DROP TABLE IF EXISTS `huruf_hijaiyah`;
CREATE TABLE IF NOT EXISTS `huruf_hijaiyah` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `suara` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `huruf_hijaiyah`
--

INSERT INTO `huruf_hijaiyah` (`id`, `nama`, `gambar`, `suara`, `created_at`, `updated_at`) VALUES
(1, 'Alif', 'assets/img/1.Alif.png', 'assets/suara/1.Alif.mp3', NULL, NULL),
(2, 'Ba', 'assets/img/2.Ba.png', 'assets/suara/2.Ba.mp3', NULL, NULL),
(3, 'Ta', 'assets/img/3.Ta.png', 'assets/suara/3.Ta.mp3', NULL, NULL),
(4, 'Tsa', 'assets/img/4.Tsa.png', 'assets/suara/4.Tsa.mp3', NULL, NULL),
(5, 'Jim', 'assets/img/5.Jim.png', 'assets/suara/5.Jim.mp3', NULL, NULL),
(6, 'Kha', 'assets/img/6.Ha.png', 'assets/suara/6.Kha.mp3', NULL, NULL),
(7, 'Kho', 'assets/img/7.Kha.png', 'assets/suara/7.Kho.mp3', NULL, NULL),
(8, 'Dal', 'assets/img/8.Dal.png', 'assets/suara/8.Dal.mp3', NULL, NULL),
(9, 'Dzal', 'assets/img/9.Dzal.png', 'assets/suara/9.Dzal.mp3', NULL, NULL),
(10, 'Ro', 'assets/img/10.Ro.png', 'assets/suara/10.Ro.mp3', NULL, NULL),
(11, 'Zai', 'assets/img/11.Zai.png', 'assets/suara/11.Dza.mp3', NULL, NULL),
(12, 'Sin', 'assets/img/12.Sin.png', 'assets/suara/12.Sin.mp3', NULL, NULL),
(13, 'Syin', 'assets/img/13.Syin.png', 'assets/suara/13.Syin.mp3', NULL, NULL),
(14, 'Shod', 'assets/img/14.Shod.png', 'assets/suara/14.Shod.mp3', NULL, NULL),
(15, 'Dhod', 'assets/img/15.Dhod.png', 'assets/suara/17.Dzho.mp3', NULL, NULL),
(16, 'Tho', 'assets/img/16.Tho.png', 'assets/suara/16.Tho.mp3', NULL, NULL),
(17, 'Dzho', 'assets/img/17.Dzho.png', 'assets/suara/17.Dzho.mp3', NULL, NULL),
(18, 'Ain', 'assets/img/18.Ain.png', 'assets/suara/18.Ain.mp3', NULL, NULL),
(19, 'Ghoin', 'assets/img/19.Ghoin.png', 'assets/suara/19.Ghain.mp3', NULL, NULL),
(20, 'Fa', 'assets/img/20.Fa.png', 'assets/suara/20.Fa.mp3', NULL, NULL),
(21, 'Qof', 'assets/img/21.Qof.png', 'assets/suara/21.Qof.mp3', NULL, NULL),
(22, 'Kaf', 'assets/img/22.Kaf.png', 'assets/suara/22.Kaf.mp3', NULL, NULL),
(23, 'Lam', 'assets/img/23.Lam.png', 'assets/suara/23.Lam.mp3', NULL, NULL),
(24, 'Mim', 'assets/img/24.Mim.png', 'assets/suara/24.Mim.mp3', NULL, NULL),
(25, 'Nun', 'assets/img/25.Nun.png', 'assets/suara/25.Nun.mp3', NULL, NULL),
(26, 'Wau', 'assets/img/26.Wau.png', 'assets/suara/26.Wawu.mp3', NULL, NULL),
(27, 'Hamzah', 'assets/img/27.Hamzah.png', 'assets/suara/27.Hamzah.mp3', NULL, NULL),
(28, 'Ya', 'assets/img/28.Ya.png', 'assets/suara/29.Ya.mp3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-05-18-091235', 'App\\Database\\Migrations\\CreateUsers', 'default', 'App', 1749081265, 1),
(2, '2025-05-18-130334', 'App\\Database\\Migrations\\CreateHurufHijaiyah', 'default', 'App', 1749081265, 1),
(3, '2025-05-30-141535', 'App\\Database\\Migrations\\CreateAudioTable', 'default', 'App', 1749081265, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','guru','siswa') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin One', 'admin@example.com', '$2y$10$K/Mvbk4UOa9al9CBNiWoQepCEpHmsJ6.xaFYTHcF2eyYYJZys93KC', 'admin', NULL, NULL),
(2, 'Guru One', 'guru@example.com', '$2y$10$UP/GmWWKV09BANLLmeJUZuaeAjbZBirboQUBWHLRB5MpYbdcaHh/q', 'guru', NULL, NULL),
(8, 'Carina Nur Firdaus', 'carina@gmail.com', '$2y$10$KxBYI6ugjINULQfnF6aRouE0gYy9BBB65ZBqB5x.ORU73yojIDU.2', 'admin', NULL, NULL),
(7, 'Ai Linda N H', 'ailinda@gmail.com', '$2y$10$Gxo4np8JFRdvPHEBAdeGquro9vRvHxkU54YVJNiCggxlOdMmpNGSe', 'guru', NULL, NULL),
(6, 'Acep', 'acepkudus@gmail.com', '$2y$10$UvqNECjpY5D4sD4iC/F1LOttC1sb7xB2ETBXkFVDzX7V9hDE/xIdu', 'guru', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
