-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 07:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seedadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouseed`
--

CREATE TABLE `abouseed` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `head` varchar(100) CHARACTER SET latin1 NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouseed`
--

INSERT INTO `abouseed` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(25, 'images/index/0e09b11cd211d0ea85d3bbc7d86244f7department-01.jpg', 'WECOME TO SEED', '(Skill Employment and Entrepreneurship Department)', 'SMARTBTR gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus ', '2022-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `about_compet`
--

CREATE TABLE `about_compet` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `head` varchar(100) CHARACTER SET latin1 NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_compet`
--

INSERT INTO `about_compet` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(4, 'images/index/10ff7f22b747817d931dbb19fa75ad75banner4.png', ' LOGO COMPETITION 2022', 'COMPETE AND WIN CASH MONEY!', 'FCVEWRFRW BHERB', '2022-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` text CHARACTER SET latin1 NOT NULL,
  `user_type` varchar(100) CHARACTER SET latin1 NOT NULL,
  `join date` date NOT NULL,
  `join time` time NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `user_type`, `join date`, `join time`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'ADMIN', '2022-12-05', '12:37:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `os` varchar(100) CHARACTER SET latin1 NOT NULL,
  `browser` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ip` varchar(100) CHARACTER SET latin1 NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES
(1, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-05', '14:22:09'),
(2, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-05', '14:26:39'),
(3, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-05', '14:37:45'),
(4, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-07', '16:41:18'),
(5, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-07', '16:43:27'),
(6, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '09:54:02'),
(7, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '09:54:36'),
(8, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:15:53'),
(9, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:16:19'),
(10, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:17:00'),
(11, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:17:21'),
(12, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:20:42'),
(13, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:21:30'),
(14, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:21:43'),
(15, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:24:50'),
(16, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:25:07'),
(17, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:30:23'),
(18, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '12:31:13'),
(19, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-08', '15:56:41'),
(20, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-09', '09:54:25'),
(21, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-09', '13:33:36'),
(22, 1, 'Android', 'Handheld Browser', '::1', '2022-12-09', '13:50:44'),
(23, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-10', '09:30:33'),
(24, 1, 'Android', 'Handheld Browser', '::1', '2022-12-10', '10:44:31'),
(25, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-10', '10:46:17'),
(26, 1, 'Android', 'Handheld Browser', '::1', '2022-12-10', '10:54:43'),
(27, 1, 'Android', 'Handheld Browser', '::1', '2022-12-10', '11:16:10'),
(28, 1, 'Linux', 'Chrome', '::1', '2022-12-10', '11:39:20'),
(29, 1, 'Android', 'Handheld Browser', '::1', '2022-12-10', '11:43:22'),
(30, 1, 'Android', 'Handheld Browser', '::1', '2022-12-10', '11:43:23'),
(31, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-10', '12:04:07'),
(32, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-10', '12:05:08'),
(33, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-10', '12:31:49'),
(34, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-12', '09:47:41'),
(35, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-12', '09:48:58'),
(36, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-12', '09:53:12'),
(37, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-13', '12:59:35'),
(38, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-13', '13:04:12'),
(39, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-16', '10:42:21'),
(40, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-17', '10:23:05'),
(41, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-20', '11:48:13'),
(42, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-21', '12:06:29'),
(43, 1, 'Android', 'Handheld Browser', '::1', '2022-12-22', '12:43:09'),
(44, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-22', '15:16:52'),
(45, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-23', '11:15:33'),
(46, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-26', '11:41:39'),
(47, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-27', '11:00:00'),
(48, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-27', '11:02:26'),
(49, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-27', '11:10:29'),
(50, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-27', '11:22:35'),
(51, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-27', '11:23:15'),
(52, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-27', '15:46:10'),
(53, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-27', '15:47:23'),
(54, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-28', '10:28:08'),
(55, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-28', '10:28:24'),
(56, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-28', '10:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `logo_admin`
--

CREATE TABLE `logo_admin` (
  `admin_id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `join date` date NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `status` int(200) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo_admin`
--

INSERT INTO `logo_admin` (`admin_id`, `username`, `email`, `password`, `join date`, `user_type`, `status`) VALUES
(9, 'admin1', 'ad@gmail', '8187229db628be23bb07d8fff99ff8cdc194075450350ae40586c0d616d02e799a7b6a96502ecde0c83e8dc32534c5fd7475fef0c8864965ae070593e5b69470', '2022-12-27', 'admin1', 1),
(14, 'admin2', 'rry@gmail.com', '6e3bb2d1896922d9a08af8eeef4332b8d9b71dba3025694583277f49186e99a6d0f45898bd4b89a5ccc6d1b6f142e38ea938cee2d662fada9e6036b07f5ad18e', '2022-12-28', 'admin2', 1),
(34, 'admin3', 'svgev@gmail', '79474ba8132de5222aebb7d4145f28e929154e757a81282a2edfcce3b22093a7b699e318e96574115ff35d82f6a4e7a67055969f91a1ad35a6713956bdf9dbbe', '2023-01-03', 'admin3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logo_adminlogin_detail`
--

CREATE TABLE `logo_adminlogin_detail` (
  `id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `os` varchar(200) NOT NULL,
  `browser` varchar(200) NOT NULL,
  `ip` int(200) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo_adminlogin_detail`
--

INSERT INTO `logo_adminlogin_detail` (`id`, `user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES
(1, 0, 'Windows 7', 'Firefox', 1270, '2022-12-26', '15:06:41'),
(2, 0, 'Windows 7', 'Firefox', 1270, '2022-12-26', '15:11:41'),
(3, 0, 'Windows 7', 'Firefox', 1270, '2022-12-26', '15:11:51'),
(4, 0, 'Windows 7', 'Firefox', 1270, '2022-12-26', '15:13:32'),
(5, 0, 'Windows 7', 'Firefox', 1270, '2022-12-26', '15:14:00'),
(6, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '10:56:55'),
(7, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '10:57:16'),
(8, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '10:57:22'),
(9, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '10:57:48'),
(10, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '10:57:57'),
(11, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '10:59:28'),
(12, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:00:51'),
(13, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:01:45'),
(14, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:03:28'),
(16, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:04:27'),
(17, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:04:53'),
(18, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:06:23'),
(19, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:08:26'),
(20, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:09:56'),
(21, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:12:08'),
(22, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:12:24'),
(23, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:17:24'),
(24, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:17:38'),
(25, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:28:15'),
(26, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:28:38'),
(27, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:29:23'),
(28, 0, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:29:37'),
(29, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:40:55'),
(30, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:41:57'),
(31, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '11:58:43'),
(32, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '14:56:42'),
(33, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '15:06:13'),
(34, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '15:14:39'),
(35, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '15:19:25'),
(36, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '15:31:36'),
(37, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '15:44:35'),
(38, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '15:47:46'),
(39, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '15:56:10'),
(40, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '15:56:10'),
(41, 9, 'Windows 7', 'Firefox', 1270, '2022-12-27', '16:11:16'),
(42, 9, 'Windows 7', 'Firefox', 1270, '2022-12-28', '09:48:54'),
(43, 9, 'Windows 7', 'Firefox', 1270, '2022-12-28', '12:35:32'),
(44, 9, 'Windows 7', 'Firefox', 1270, '2022-12-28', '12:39:18'),
(45, 14, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:22:37'),
(46, 9, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:25:57'),
(47, 9, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:26:54'),
(48, 9, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:31:40'),
(49, 14, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:36:48'),
(50, 9, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:42:15'),
(51, 14, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:42:29'),
(52, 14, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:44:10'),
(53, 9, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:45:52'),
(54, 9, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:47:50'),
(55, 14, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:48:07'),
(56, 9, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:50:16'),
(57, 14, 'Windows 7', 'Firefox', 1270, '2022-12-28', '15:51:40'),
(58, 9, 'Windows 7', 'Firefox', 1270, '2022-12-29', '09:58:03'),
(59, 9, 'Windows 7', 'Firefox', 1270, '2022-12-29', '09:58:58'),
(60, 14, 'Windows 7', 'Firefox', 1270, '2022-12-29', '09:59:27'),
(61, 9, 'Windows 7', 'Firefox', 1270, '2022-12-29', '10:01:49'),
(62, 14, 'Windows 7', 'Firefox', 1270, '2022-12-29', '14:36:54'),
(63, 9, 'Windows 7', 'Firefox', 1270, '2022-12-29', '14:40:59'),
(64, 14, 'Windows 7', 'Firefox', 1270, '2022-12-29', '14:41:40'),
(65, 9, 'Windows 7', 'Firefox', 1270, '2022-12-29', '14:42:10'),
(66, 14, 'Windows 7', 'Firefox', 1270, '2022-12-29', '14:42:32'),
(67, 9, 'Windows 7', 'Firefox', 1270, '2022-12-29', '14:45:19'),
(68, 9, 'Windows 7', 'Firefox', 1270, '2022-12-29', '14:45:53'),
(69, 14, 'Windows 7', 'Firefox', 1270, '2022-12-29', '14:46:23'),
(70, 14, 'Windows 7', 'Firefox', 1270, '2022-12-29', '15:13:26'),
(71, 14, 'Windows 7', 'Firefox', 1270, '2022-12-29', '15:14:24'),
(72, 14, 'Windows 7', 'Firefox', 1270, '2022-12-29', '15:28:11'),
(73, 14, 'Windows 7', 'Firefox', 1270, '2023-01-02', '10:05:19'),
(74, 14, 'Windows 7', 'Firefox', 1270, '2023-01-02', '15:24:52'),
(75, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '10:12:20'),
(76, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '10:15:16'),
(77, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '10:16:10'),
(78, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '11:01:19'),
(79, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '11:01:40'),
(80, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '11:02:04'),
(81, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '11:02:13'),
(82, 28, 'Windows 7', 'Firefox', 1270, '2023-01-03', '11:58:13'),
(83, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '12:04:38'),
(84, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '12:10:48'),
(85, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '12:37:58'),
(86, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '12:53:48'),
(87, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '13:14:35'),
(88, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '13:19:11'),
(89, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '13:19:49'),
(90, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '13:22:10'),
(91, 34, 'Windows 7', 'Firefox', 1270, '2023-01-03', '13:22:53'),
(92, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '13:24:31'),
(93, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '13:41:16'),
(94, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '13:41:30'),
(95, 34, 'Windows 7', 'Firefox', 1270, '2023-01-03', '13:42:38'),
(96, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '15:48:23'),
(97, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '15:48:39'),
(98, 34, 'Windows 7', 'Firefox', 1270, '2023-01-03', '15:49:08'),
(99, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '15:51:04'),
(100, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '15:52:36'),
(101, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '15:53:53'),
(102, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '15:57:20'),
(103, 34, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:00:39'),
(104, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:02:13'),
(105, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:02:47'),
(106, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:03:58'),
(107, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:07:05'),
(108, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:08:05'),
(109, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:09:01'),
(110, 34, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:10:00'),
(111, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:10:51'),
(112, 34, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:11:22'),
(113, 9, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:14:42'),
(114, 14, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:15:00'),
(115, 34, 'Windows 7', 'Firefox', 1270, '2023-01-03', '16:15:16'),
(116, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:47:39'),
(117, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:49:01'),
(118, 34, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:49:40'),
(119, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:49:56'),
(120, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:51:13'),
(121, 34, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:51:25'),
(122, 34, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:52:05'),
(123, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:52:44'),
(124, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:52:51'),
(125, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:53:22'),
(126, 34, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:53:33'),
(127, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:54:20'),
(128, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:54:27'),
(129, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:54:34'),
(130, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '09:55:00'),
(131, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '10:32:38'),
(132, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:07:08'),
(133, 34, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:21:31'),
(134, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:23:09'),
(135, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:28:36'),
(136, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:30:13'),
(137, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:31:20'),
(138, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:31:29'),
(139, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:32:44'),
(140, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:32:53'),
(141, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:32:59'),
(142, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:33:08'),
(143, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:34:07'),
(144, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:34:20'),
(145, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:34:29'),
(146, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:34:47'),
(147, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:50:15'),
(148, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '11:50:23'),
(149, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '12:26:35'),
(150, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '13:24:19'),
(151, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '13:25:17'),
(152, 14, 'Windows 7', 'Firefox', 1270, '2023-01-04', '13:28:16'),
(153, 9, 'Windows 7', 'Firefox', 1270, '2023-01-04', '14:57:04'),
(154, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '09:55:30'),
(155, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '09:56:07'),
(156, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '10:12:25'),
(157, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '10:19:29'),
(158, 34, 'Windows 7', 'Firefox', 1270, '2023-01-05', '10:19:45'),
(159, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '10:50:12'),
(160, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '11:02:45'),
(161, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '11:03:24'),
(162, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '11:06:21'),
(163, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '11:07:16'),
(164, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '12:19:18'),
(165, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '12:21:47'),
(166, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '12:26:57'),
(167, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '12:28:01'),
(168, 34, 'Windows 7', 'Firefox', 1270, '2023-01-05', '12:44:11'),
(169, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '12:44:22'),
(170, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '12:44:52'),
(171, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '13:11:07'),
(172, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '13:22:00'),
(173, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '13:37:32'),
(174, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '13:38:26'),
(175, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '13:42:34'),
(176, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '14:03:48'),
(177, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '14:22:17'),
(178, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '14:46:12'),
(179, 14, 'Windows 7', 'Firefox', 1270, '2023-01-05', '15:09:29'),
(180, 9, 'Windows 7', 'Firefox', 1270, '2023-01-05', '15:09:37'),
(181, 9, 'Windows 7', 'Firefox', 1270, '2023-01-06', '10:00:13'),
(182, 14, 'Windows 7', 'Firefox', 1270, '2023-01-06', '10:00:29'),
(183, 9, 'Windows 7', 'Firefox', 1270, '2023-01-06', '10:01:12'),
(184, 14, 'Windows 7', 'Firefox', 1270, '2023-01-06', '10:09:23'),
(185, 9, 'Windows 7', 'Firefox', 1270, '2023-01-06', '10:10:59'),
(186, 14, 'Windows 7', 'Firefox', 1270, '2023-01-06', '10:17:26'),
(187, 9, 'Windows 7', 'Firefox', 1270, '2023-01-06', '10:53:21'),
(188, 14, 'Windows 7', 'Firefox', 1270, '2023-01-06', '13:29:21'),
(189, 9, 'Windows 7', 'Firefox', 1270, '2023-01-06', '13:29:42'),
(190, 9, 'Windows 7', 'Firefox', 1270, '2023-01-06', '13:30:57'),
(191, 9, 'Windows 7', 'Firefox', 1270, '2023-01-06', '13:31:59'),
(192, 9, 'Windows 7', 'Firefox', 1270, '2023-01-07', '10:00:17'),
(193, 9, 'Windows 7', 'Firefox', 1270, '2023-01-07', '11:06:40'),
(194, 14, 'Windows 7', 'Firefox', 1270, '2023-01-07', '11:19:06'),
(195, 9, 'Windows 7', 'Firefox', 1270, '2023-01-07', '11:22:06'),
(196, 14, 'Windows 7', 'Firefox', 1270, '2023-01-07', '11:48:36'),
(197, 9, 'Windows 7', 'Firefox', 1270, '2023-01-07', '11:50:10'),
(198, 14, 'Windows 7', 'Firefox', 1270, '2023-01-07', '11:57:26'),
(199, 9, 'Windows 7', 'Firefox', 1270, '2023-01-07', '11:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `logo_compet`
--

CREATE TABLE `logo_compet` (
  `id` int(100) NOT NULL,
  `compet_img` varchar(100) CHARACTER SET latin1 NOT NULL,
  `aboutcompet` varchar(100) CHARACTER SET latin1 NOT NULL,
  `aboutsmartbtr` varchar(100) CHARACTER SET latin1 NOT NULL,
  `smartbtr_img` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(20) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `image` varchar(100) NOT NULL,
  `residence` varchar(200) CHARACTER SET latin1 NOT NULL,
  `date_uploaded` date NOT NULL,
  `admin1` int(200) DEFAULT NULL,
  `admin2` int(200) DEFAULT NULL,
  `admin3` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `name`, `phone`, `email`, `image`, `residence`, `date_uploaded`, `admin1`, `admin2`, `admin3`) VALUES
(21, '', 986866, 'hc@gmail.', 'images/index/27280853c45eefff132e4803dacccf391.jpg', 'Kokrajhar', '2022-12-27', 3, NULL, NULL),
(27, 'jona', 6786, 'jona@yahoo', 'images/index/aa727fafe7d397aba51e0140bef40d0f3.jpg', 'Residence', '2022-12-29', NULL, 4, NULL),
(28, 'jona', 6786, 'jona@yahoo', 'images/index/aa727fafe7d397aba51e0140bef40d0f3.jpg', 'Residence', '2022-12-29', NULL, 5, '4');

-- --------------------------------------------------------

--
-- Table structure for table `seedvision`
--

CREATE TABLE `seedvision` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `head` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seedvision`
--

INSERT INTO `seedvision` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(2, 'images/index/23d76154b28c87d51fbecfcdce55ce6cdepartment-02.jpg', 'Our Visions', 'SEED', '\"ENDOW YOUNG PEOPLE OF BTR WITH SKILLS FOR EMPLOYMENT DECENT WORKS AND ENTREPRENEURSHIP FOR SUSTAINABLE DEVELOPMENT\".', '2022-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `telephone`
--

CREATE TABLE `telephone` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` text CHARACTER SET latin1 NOT NULL,
  `phone` int(100) NOT NULL,
  `shortdescription` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telephone`
--

INSERT INTO `telephone` (`id`, `image`, `name`, `phone`, `shortdescription`, `description`, `date_uploaded`) VALUES
(1, 'images/index/8e0e5b985bc918702b5dab6c735dca07Promod-Boro.jpg', 'Promod Boro', 45646464, 'Chief BTR', 'KOKRAJHAR DISTRICT BTR', '2022-12-21'),
(3, 'images/index/edf71c748e4408940d9a633f1fc1b453hcm.jpg', 'Himanta Biswa Sharma', 798465131, 'Chief Minister', 'ASSAM', '2022-12-16'),
(4, 'images/index/6f4cfff49398a3ad516b1df6278120ecem.jpg', 'Wilson Hasda', 986213626, 'Executive Member', 'BTR,ASSAM ', '2022-12-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouseed`
--
ALTER TABLE `abouseed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_compet`
--
ALTER TABLE `about_compet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_admin`
--
ALTER TABLE `logo_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `logo_adminlogin_detail`
--
ALTER TABLE `logo_adminlogin_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_compet`
--
ALTER TABLE `logo_compet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seedvision`
--
ALTER TABLE `seedvision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telephone`
--
ALTER TABLE `telephone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouseed`
--
ALTER TABLE `abouseed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `about_compet`
--
ALTER TABLE `about_compet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `logo_admin`
--
ALTER TABLE `logo_admin`
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `logo_adminlogin_detail`
--
ALTER TABLE `logo_adminlogin_detail`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `logo_compet`
--
ALTER TABLE `logo_compet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `seedvision`
--
ALTER TABLE `seedvision`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `telephone`
--
ALTER TABLE `telephone`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
