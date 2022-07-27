-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 22, 2022 at 02:24 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collins_photosharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `categories` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photoshots`
--

CREATE TABLE `photoshots` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `stat` int(50) NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photoshots`
--

INSERT INTO `photoshots` (`id`, `user_id`, `photo`, `title`, `category`, `stat`, `created_at`) VALUES
(1, 8, 'bitcoin-btc-logo.png-62da9cc9b743a0.121757165554516.png', 'kajdkflaj', 'Traveling', 1, 'Friday-22-07-22 12:07:13:pm'),
(3, 9, 'tether-usdt-logo.png-62daa9c0b2dd99.899087999071532.png', 'adfkaldfj', 'Traveling', 0, 'Friday-22-07-22 01:07:32:pm'),
(4, 9, 'Solana_logo.png-62daa9d4b8a531.736080504540668.png', 'adfafa', 'Traveling', 1, 'Friday-22-07-22 01:07:52:pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(1000) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `profilepix` varchar(500) DEFAULT 'avatar.png',
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `pwd`, `role`, `profilepix`, `created_at`, `updated_at`) VALUES
(1, 'ghj', 'hj', 'test@gmail.com', 'xctvyuhiuyu7865e678tiuyfj', 'user', 'avatar.png', NULL, NULL),
(2, 'name', 'email', 'password', 'regdate', 'user', 'avatar.png', NULL, NULL),
(3, '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'user', 'avatar.png', NULL, NULL),
(4, 'fsfknsfhj', 'jkasjh', 'test@gmail.comss', '1efcfaab69361232b5e5e39265464be84f6e484f', 'user', 'avatar.png', NULL, NULL),
(5, 'fsfknsfhj', 'jkasjh', 'test@gmail.comsss', '1efcfaab69361232b5e5e39265464be84f6e484f', 'user', 'avatar.png', NULL, NULL),
(6, 'fsfknsfhj', 'jkasjh', 'test@gmail.comssss', '1efcfaab69361232b5e5e39265464be84f6e484f', 'user', 'avatar.png', NULL, NULL),
(7, 'jahdkjha', 'jhakdjhfa', 'adjhak@jadfja.coiadj', 'dd06edfd214747367a07be88a2be943140e87f71', 'user', 'avatar.png', '22/07/22', '22/07/22'),
(8, 'kfjalkjgl', 'kjnalsdkjl', 'mmm@admaf.com', 'c6081d4a94cfc453a4481d1df9edc2c26f808db8', 'user', 'avatar.png', '22/07/22', '22/07/22'),
(9, 'Admin', 'Admin', 'admin@gmail.com', '3252d89d93bfb1327e2d3aae9187b565dac6d085', 'admin', 'avatar.png', '22/07/22', '22/07/22'),
(10, 'akdfajld', 'kjsaldkjfl', 'kadlj@dkaf.com', 'cecec3ec436bf58a4ecce3e179835e25ff691f3e', 'user', 'avatar.png', '22/07/22', '22/07/22'),
(11, 'adkifaklj', 'kjkaldj', 'akdlj@gmail.com', '24d3c6fe567c74749a2534b1ca2bd3d611528e27', 'user', 'avatar.png', '22/07/22', '22/07/22'),
(12, 'fakfglk', 'ikasdljf', 'adfaf@gmail.com', '1efcfaab69361232b5e5e39265464be84f6e484f', 'user', 'avatar.png', '22/07/22', '22/07/22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photoshots`
--
ALTER TABLE `photoshots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photoshots`
--
ALTER TABLE `photoshots`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
