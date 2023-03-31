-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 09:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
  `head` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouseed`
--

INSERT INTO `abouseed` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(25, 'images/index/a30f1014234db4528a8c9b0591a238f3BDSM1.jpg', 'WECOME TO SEED', '(Skill Employment and Entrepreneurship Department)', 'The Skill, Employment & Entrepreneurship Department (SEED) of the Bodoland Territorial Council (BTC) in India is responsible for the development of skills and employment opportunities for the people living in the region. The department\'s goal is to provide training and support for various trades and industries, as well as to promote entrepreneurship and self-employment. It works with various government and non-government organizations to provide employment opportunities and skill development programs for the people of BTC. The department also provides financial assistance to entrepreneurs and start-up companies to help them establish their businesses.', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `about_compet`
--

CREATE TABLE `about_compet` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `head` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` varchar(2000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_compet`
--

INSERT INTO `about_compet` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(4, 'images/index/10ff7f22b747817d931dbb19fa75ad75banner4.png', ' LOGO COMPETITION 2022', 'COMPETE AND WIN CASH MONEY!', 'FCVEWRFRW BHERB', '2022-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `abou_bodolandseed`
--

CREATE TABLE `abou_bodolandseed` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `head` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abou_bodolandseed`
--

INSERT INTO `abou_bodolandseed` (`id`, `image`, `head`, `description`, `date_uploaded`) VALUES
(2, 'images/index/5c6b197bab9a705270a924bda281ee12em.jpg', 'About Bodoland SEED Mission', 'The Bodoland Skill Employment & Entrepreneurship Development Mission has been inaugurated on 14th December 2021 and the process is going to make it as a society for providing a good quality skill eco system to the youth of Bodoland Territorial Region (BTR).', '2023-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_type` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `join date` date NOT NULL,
  `join time` time NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `user_type`, `join date`, `join time`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'ADMIN', '2022-12-05', '12:37:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `head` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `image`, `head`, `description`, `date_uploaded`) VALUES
(1, '', '', 'NCVET invites application for the post of Director (on Deputation) in NCVET', '2023-03-06'),
(2, '', '', 'Inviting participants for GeM bid for reviewing Cyber Security framework', '2023-03-06'),
(3, '', '', 'Vacancy Circular for Engagement of Consultant in National Skill Development Fund/Trust on contractual basis', '2023-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `head` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(1, 'images/index/4076865b94298fd571b06da3526ecb9aseed3.png', 'Background', 'Background of Skill Employment and Entrepreneurship Department', 'The Bodoland Territorial Area Districts (BTAD) is an autonomous region located in the state of Assam in India. The Bodoland Skill Employment and Entrepreneurship Department (BSEED) was created in 2017 as part of the Bodoland Territorial Council (BTC) with the mission to develop and implement strategies for promoting skill development, employment generation, and entrepreneurship in the region.', '2023-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `bodolandmission`
--

CREATE TABLE `bodolandmission` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `head` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `subtitle` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bodolandmission`
--

INSERT INTO `bodolandmission` (`id`, `image`, `head`, `title`, `subtitle`, `description`, `date_uploaded`) VALUES
(3, 'images/index/557bfdeded81684a445097b1fb8af40eBDSM1.jpg', 'Transport Minister Chandra Mohan Patowary launched Skill development mission of BTR  ', 'Transport Minister Chandra Mohan Patowary launched Skill development mission of BTR  ', 'Transport Minister Chandra Mohan Patowary launched Skill development mission of BTR  ', 'KOKRAJHAR: Transport Minister Chandra Mohan Patowary on Tuesday launched the Bodoland Skill, Employment and Entrepreneurship Development (SEED) mission at Bodofa Cultural Complex, Kokrajhar.  ', '2023-03-29'),
(4, 'images/index/e920fa904273f422698982d4f64f84b97b8678d34a9d1e0afccd810d73096ce7a.jpg', 'CM Sarma Inaugurates Newly Built IT Park In Kokrajhar', 'CM Sarma Inaugurates Newly Built IT Park In Kokrajhar', '', 'KOKRAJHAR: Assam Chief Minister Dr Himanta Biswa Sarma in presence of Union Minister of State for Textile & Railways Darshana Vikram Jardosh and BTR CEM Pramod Boro on Saturday inaugurated the newly constructed Information Technology (IT) park at Elaishijhar, Chandamari near Kokrajhar. ', '2023-03-15'),
(5, 'images/index/8f60a021da2c76c39f6156e2c3a8c015BDSM2.jpg', 'Public consultation on skill, employment and entrepreneurship in Kokrajhar ', 'Public consultation on skill, employment and entrepreneurship in Kokrajhar ', 'Public consultation on skill, employment and entrepreneurship in Kokrajhar ', 'KOKRAJHAR: Public consultation on skill, employment and entrepreneurship got underway in the Bodoland Territorial Region (BTR) and the inaugural programme was held at Iragdao Community hall, Titaguri in Kokrajhar on Wednesday. ', '2023-03-29'),
(6, 'images/index/bef055e2becbb8f932eeaf840deb5d42bsm3.jpeg', 'Brainstorming session on Entrepreneurship development held in Bodoland University', 'Brainstorming session on Entrepreneurship development held in Bodoland University', 'Brainstorming session on Entrepreneurship development held in Bodoland University', 'Guwahati, September 14 (NKTV): A one-day brainstorming session was held at Bodoland University complex in Kokrajhar today on strategy augmentation for sustainable entrepreneurship development. The session discussed on Agriculture, Skill development and other allied areas. Nearly 40 participants from different institutions including Bodoland University,Bineswar Brahma Engineering College,ITI, different colleges participated the session.', '2023-03-29'),
(7, 'images/index/41f894e77632cb6e41b24292e9497554bsm4.jpg', 'Growth of Women Entrepreneurship Development in MSME Sector in Bodoland Territorial Area District (BTAD), Assam', 'Growth of Women Entrepreneurship Development in MSME Sector in Bodoland Territorial Area District (BTAD), Assam', 'Growth of Women Entrepreneurship Development in MSME Sector in Bodoland Territorial Area District (BTAD), Assam', 'The paper investigates the trend of entrepreneurship development in BTAD, Assam in MSME sector with an objective to highlight the growth of women entrepreneurship in this area and to explore the differences between men and women in the study area in terms of participation in entrepreneurial activities during 2007-08 to 20015-16. ', '2023-03-29'),
(9, 'images/index/a8d21a41bd7da1b8aec5c45e0ae3153f10ff7f22b747817d931dbb19fa75ad75banner4.png', 'SEED Mission Logo Design Contest 2023', 'SEED Mission is organizing LOGO Design Contest 2023', 'SEED Mission is organizing LOGO Design Contest 2023', 'Kokrajhar: Bodoland SEED Mission is soon announcing LOGO Design Contest 2023, all tghe participants residing under BTR region can participate and win the prize of Rs. 50,000.', '2023-03-15'),
(10, 'images/index/18feab2ad053ddff5503f64ae9b74327bsm6.jpg', 'Skill Development Training for Youth of BTR started in Kokrajhar', 'Skill Development Training for Youth of BTR started in Kokrajhar', 'Skill Development Training for Youth of BTR started in Kokrajhar', 'The Home Department (Special Branch), Govt.of Assam has started a rehabilitation programme for Bodo militants from Bodo Territorial Region of Assam under Bodo Peace Accord. For this a Skill Development Training programme for sustainable self employment was organised by State Institute of Panchayat and Rural Development(SIPRD) in association with Home Department (SB) and BTC at Bodofa Cultural Complex,Kokrajhar on 20th June,2021. The programme was inaugurated by Sri Pramod Boro, Hon’ble Chief Executive Member of BTC. ', '2023-03-29'),
(11, 'images/index/bf6c0e27811f87cea4c96355a8896a26bsm10.jpg', 'Skill Development in Urban Areas for Women ', 'Skill Development in Urban Areas for Women ', 'Skill Development in Urban Areas for Women ', 'Over 50% of the population is under 30 years, India leads to the youngest nation in the world.  Skill Development – It not just what we do as a job, but rather a career, it improves the skill of individual and regulates employment. According to World Competitiveness Yearbook, 2012, India will have 25% of the total global workforce by about 2025. As we know, Youth always play a crucial role in achieving the economic growth and prosperity of any country.', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `head` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `image`, `head`, `address`, `description`, `date_uploaded`) VALUES
(2, 'images/index/862631d76659824c856d6f6d68b69356events1.jpg', 'Knowledge festival organised in Assam’s Bodoland Territorial Region', 'Kokrajhar', 'KOKRAJHAR: The 1st International Knowledge Festival hosted by Bodoland University (BU) with the support of BTC government got under way from Monday at the campus of Bodoland University. The first day witnessed huge student participants from 48 colleges under BU and guests from across the country and abroad. ', '2023-03-29'),
(3, 'images/index/a7a839e904ee1924110af9800cb29e7eBDSM3 (1).jpg', 'Assam govt launches mission to turn BTR into a piggery hub', 'Kokrajhar', 'GUWAHATI: Assam Agriculture Minister Atul Bora formally launched \"Bodoland Pig Mission\" at Bodofa Cultural Complex in Kokrajhar in presence of Bodoland Territorial Region CEM Pramod Boro  ', '2023-03-29'),
(4, 'images/index/ed75dd8898ff75f80045c280820bb078events3.jpg', 'Centre, Assam govt committed to develop BTR: Shah in Tamulpur', 'Kokrajhar', 'GUWAHATI:  Union Home Minister Amit Shah, who is on a three-day tour of the state, said that the Centre is committed to the all-round development of the Bodoland Territorial Region (BTR) with both the Centre and the Assam governments fulfilling 90 per cent of the clauses of the Bodo Accord.', '2023-03-29'),
(5, 'images/index/89b506616e78d848ec9bfe553f45a52fevents4.jpg', ' Edition of Baukhungri Festival gets underway in Kokrajhar', 'Kokrajhar', 'KOKRAJHAR: The three-day-long 9TH edition of Baukhungri Festival started on Tuesday at Harinaguri in Kokrajhar district of Assam.', '2023-03-29'),
(6, 'images/index/24d60a35d621e5943e0b5e56eaf8bc05events6.jpeg', 'BODOLAND EDUCATION AND SKILL DEVELOPMENT PRIVATE LIMITED', 'Kokrajhar', 'Bodoland Education AND Skill Development Private Limited is an Indian Non-Government Company. It\'s a private company and is classified as\'company limited by shares\'.  Company\'s authorized capital stands at Rs 10.0 lakhs and has 100.0% paid-up capital which is Rs 10.0 lakhs.  Bodoland Education AND Skill Development Private Limited is majorly in Community, personal & Social Services business and currently, company operations are active.', '2023-03-29'),
(7, 'images/index/4bb1e3de1418ff984e8884615ed03296events7.jpg', 'The skilled women of Bodoland', 'Kokrajhar', 'A slow afternoon in Bodoland offers a variety of sounds – the gurgle of a nearby stream, the gentle rustle of leaves stirred by breeze, the clucking of hens, the jangle of cow-bells.', '2023-03-29'),
(8, 'images/index/2ca3d32d88a5342e6ca0f9a28d917c9eevents8.jpg', 'BTC Chief Pramod Boro launches online grievance redressal system in Kokrajhar.', 'Kokrajhar', 'KOKRAJHAR: With the aim and objective of digitizing the Bodoland Territorial Council (BTC), a web portal for online grievance redressal system was launched by BTC chief executive member Pramod Boro at BTC Secretariat in Kokrajhar on Friday. The web portal will be available in English, Bodo, Assamese and Hindi. ', '2023-03-29'),
(9, 'images/index/5edc79ec058bc26e71e501dffedb172devents9.jpg', 'Students must learn more languages from young age: Assam edu minister', 'Kokrajhar', '', '2023-03-29'),
(10, 'images/index/4cff895b1075742e48c7a2ac4f43fc38events10.jpg', 'The Entrepreneurship Skill Development Program was successfully conducted on Kokrajhar', 'Kokrajhar', 'On 21st September 2021 a Pradhan Mantri Van Dhan Yojona - Entrepreneurship Skill Development Programme (PMVDY-ESDP) conducted training on food processing and training on Value added of Erie Cocoon and Jacquard Handloom and it was successfully completed at two locations, namely Pachim-Maligaon VDVKC and Kachugaon VDVKC, Kokrajhar, India. ', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `honourable`
--

CREATE TABLE `honourable` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `shortdescription` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `honourable`
--

INSERT INTO `honourable` (`id`, `image`, `name`, `phone`, `shortdescription`, `description`, `date_uploaded`) VALUES
(1, 'images/index/a08059be1431a36759233c9add2804e9Promod-Boro.jpg', 'Pramod Boro', 888888888, 'Chief, BTR, Assam', 'Pramod Boro (born 1 March 1975) is an Indian politician serving as the president of The United People\'s Party Liberal (UPPL) since 25 February 2020 and Chief Executive Member of Bodoland Territorial Region, an autonomous region in Assam since 15 December 2020. He was the former president of All Bodo Students Union. Pramod Boro was born to Late Ghanashyam Boro. He is a resident of Tamulpur, Baksa district.', '2023-03-29'),
(2, 'images/index/4881814eae4557d39851dc7c73d94474em.jpg', 'Wilson Hasda', 777777777, 'E.M, BTR, Assam', 'Wilson Hasda (born 13 March ) is an Indian politician serving as the Executive Member of BTR, an autonomous region in Assam since 2021. He was the former Deputy Director of People Action\'s for Development (PAD) an upper Assam based NGO. He was nominated as MCLA in 2021 from UPPL political party.', '2023-03-29'),
(3, 'images/index/15263cb26f18a67845c70b432e5f81b2Pranjit1.jpg', 'Pranjit Das', 888888888, 'CHD, BTR, Assam', 'Sri. Pranjit Das is a CHD of Skill Employment and Entrepreneurship Department SEED.', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `os` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `browser` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ip` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(56, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2022-12-28', '10:28:54'),
(57, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-01-10', '12:51:13'),
(58, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-01-11', '15:43:27'),
(59, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-01', '10:53:41'),
(60, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-01', '11:05:51'),
(61, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-01', '11:08:00'),
(62, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-01', '14:56:09'),
(63, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-02', '11:04:47'),
(64, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-16', '10:55:13'),
(65, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-20', '12:26:29'),
(66, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-21', '11:15:43'),
(67, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-21', '12:14:35'),
(68, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-22', '15:57:08'),
(69, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-23', '10:28:19'),
(70, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-02-24', '11:30:30'),
(71, 1, 'Windows 10', 'Chrome', '::1', '2023-03-01', '10:59:35'),
(72, 1, 'Windows 7', 'Firefox', '127.0.0.1', '2023-03-06', '10:59:20'),
(73, 1, 'Windows 10', 'Chrome', '::1', '2023-03-15', '15:13:08'),
(74, 1, 'Windows 10', 'Chrome', '::1', '2023-03-15', '15:22:42'),
(75, 1, 'Windows 10', 'Chrome', '::1', '2023-03-15', '15:40:18'),
(76, 1, 'Windows 10', 'Chrome', '::1', '2023-03-16', '10:18:38'),
(77, 1, 'Windows 10', 'Chrome', '::1', '2023-03-16', '10:18:38'),
(78, 1, 'Windows 10', 'Chrome', '::1', '2023-03-16', '12:19:37'),
(79, 1, 'Windows 10', 'Chrome', '::1', '2023-03-20', '11:15:44'),
(80, 1, 'Windows 10', 'Chrome', '::1', '2023-03-20', '11:15:44'),
(81, 1, 'Windows 10', 'Chrome', '::1', '2023-03-21', '10:27:51'),
(82, 1, 'Windows 10', 'Chrome', '::1', '2023-03-21', '17:50:58'),
(83, 1, 'Windows 10', 'Chrome', '::1', '2023-03-22', '12:01:06'),
(84, 1, 'Windows 10', 'Chrome', '::1', '2023-03-29', '10:34:15'),
(85, 1, 'Windows 10', 'Chrome', '::1', '2023-03-29', '12:40:51'),
(86, 1, 'Windows 10', 'Chrome', '::1', '2023-03-29', '12:51:30'),
(87, 1, 'Windows 10', 'Chrome', '::1', '2023-03-29', '13:49:41'),
(88, 1, 'Windows 10', 'Chrome', '::1', '2023-03-29', '15:33:17'),
(89, 1, 'Windows 10', 'Chrome', '::1', '2023-03-29', '15:39:37'),
(90, 1, 'Windows 10', 'Chrome', '::1', '2023-03-29', '15:47:38'),
(91, 1, 'Windows 10', 'Chrome', '::1', '2023-03-29', '16:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `logo_admin`
--

CREATE TABLE `logo_admin` (
  `admin_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `join_date` date NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `status` int(200) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo_admin`
--

INSERT INTO `logo_admin` (`admin_id`, `name`, `email`, `password`, `join_date`, `user_type`, `status`) VALUES
(14, 'Pranjit Das', 'admin@seedbtr.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', '2022-12-28', 'admin1', 1),
(62, 'Vkumar', 'vk@gmail.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', '2023-02-14', 'admin2', 1),
(63, 'will', 'will@will.will', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', '2023-02-14', 'admin3', 1),
(64, 'jona', 'jona@gmail.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', '2023-02-14', 'admin4', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(199, 9, 'Windows 7', 'Firefox', 1270, '2023-01-07', '11:57:44'),
(200, 9, 'Windows 7', 'Firefox', 1270, '2023-01-10', '10:05:01'),
(201, 9, 'Windows 7', 'Firefox', 1270, '2023-01-10', '12:53:13'),
(202, 9, 'Windows 7', 'Firefox', 1270, '2023-01-10', '13:51:26'),
(203, 14, 'Windows 7', 'Firefox', 1270, '2023-01-10', '14:02:39'),
(204, 14, 'Windows 7', 'Firefox', 1270, '2023-01-10', '14:03:18'),
(205, 40, 'Windows 7', 'Firefox', 1270, '2023-01-10', '14:05:16'),
(206, 14, 'Windows 7', 'Firefox', 1270, '2023-01-10', '14:05:32'),
(207, 14, 'Windows 7', 'Firefox', 1270, '2023-01-11', '10:15:01'),
(208, 14, 'Windows 7', 'Firefox', 1270, '2023-01-11', '11:34:08'),
(209, 40, 'Windows 7', 'Firefox', 1270, '2023-01-11', '11:34:22'),
(210, 41, 'Windows 7', 'Firefox', 1270, '2023-01-11', '11:35:12'),
(211, 14, 'Windows 7', 'Firefox', 1270, '2023-01-11', '11:35:49'),
(212, 14, 'Windows 7', 'Firefox', 1270, '2023-01-11', '14:26:18'),
(213, 40, 'Windows 7', 'Firefox', 1270, '2023-01-11', '14:26:24'),
(214, 40, 'Windows 7', 'Firefox', 1270, '2023-01-11', '14:32:22'),
(215, 40, 'Windows 7', 'Firefox', 1270, '2023-01-11', '14:35:28'),
(216, 40, 'Windows 7', 'Firefox', 1270, '2023-01-11', '15:41:00'),
(217, 40, 'Windows 7', 'Firefox', 1270, '2023-01-11', '15:41:59'),
(218, 14, 'Windows 7', 'Firefox', 1270, '2023-01-11', '15:44:19'),
(219, 14, 'Windows 7', 'Firefox', 1270, '2023-01-18', '14:53:48'),
(220, 14, 'Windows 7', 'Firefox', 1270, '2023-01-18', '15:02:46'),
(221, 40, 'Windows 7', 'Firefox', 1270, '2023-01-18', '15:02:53'),
(222, 14, 'Windows 7', 'Firefox', 1270, '2023-01-18', '15:03:07'),
(223, 14, 'Windows 7', 'Firefox', 1270, '2023-01-18', '15:09:06'),
(224, 14, 'Windows 10', 'Chrome', 0, '2023-01-18', '15:09:37'),
(225, 14, 'Android', 'Handheld Browser', 0, '2023-01-18', '15:12:22'),
(226, 40, 'Windows 7', 'Firefox', 1270, '2023-01-18', '15:18:30'),
(227, 14, 'Windows 7', 'Firefox', 1270, '2023-01-18', '15:19:54'),
(228, 14, 'Android', 'Handheld Browser', 0, '2023-01-18', '15:21:32'),
(229, 14, 'Android', 'Handheld Browser', 0, '2023-01-18', '15:21:33'),
(230, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '10:39:29'),
(231, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '10:42:50'),
(232, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '10:44:17'),
(233, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '10:45:15'),
(234, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '10:45:24'),
(235, 40, 'Windows 7', 'Firefox', 1270, '2023-01-19', '10:45:35'),
(236, 41, 'Windows 7', 'Firefox', 1270, '2023-01-19', '10:48:26'),
(237, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '10:50:45'),
(238, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '11:04:40'),
(239, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '11:21:12'),
(240, 40, 'Windows 7', 'Firefox', 1270, '2023-01-19', '11:21:27'),
(241, 41, 'Windows 7', 'Firefox', 1270, '2023-01-19', '11:22:33'),
(242, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '11:24:05'),
(243, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '11:25:13'),
(244, 14, 'Windows 7', 'Firefox', 1270, '2023-01-19', '13:29:15'),
(245, 40, 'Windows 7', 'Firefox', 1270, '2023-01-19', '13:29:30'),
(246, 14, 'Windows 7', 'Firefox', 1270, '2023-01-20', '10:39:24'),
(247, 40, 'Windows 7', 'Firefox', 1270, '2023-01-20', '10:40:16'),
(248, 14, 'Windows 7', 'Firefox', 1270, '2023-01-20', '10:40:34'),
(249, 40, 'Windows 7', 'Firefox', 1270, '2023-01-20', '10:41:01'),
(250, 41, 'Windows 7', 'Firefox', 1270, '2023-01-20', '10:41:39'),
(251, 40, 'Windows 7', 'Firefox', 1270, '2023-01-20', '10:41:52'),
(252, 14, 'Windows 7', 'Firefox', 1270, '2023-01-20', '10:42:10'),
(253, 14, 'Android', 'Handheld Browser', 0, '2023-01-20', '15:01:56'),
(254, 14, 'Windows 7', 'Firefox', 1270, '2023-01-23', '10:58:36'),
(255, 14, 'Windows 7', 'Firefox', 1270, '2023-01-23', '12:28:40'),
(256, 14, 'Windows 7', 'Firefox', 1270, '2023-01-23', '12:29:31'),
(257, 40, 'Windows 7', 'Firefox', 1270, '2023-01-23', '12:29:54'),
(258, 14, 'Windows 7', 'Firefox', 1270, '2023-01-23', '12:30:04'),
(259, 14, 'Windows 7', 'Firefox', 1270, '2023-01-23', '12:31:05'),
(260, 14, 'Windows 7', 'Firefox', 1270, '2023-01-23', '12:32:20'),
(261, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '10:21:15'),
(262, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '10:31:26'),
(263, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '10:39:07'),
(264, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '10:46:03'),
(265, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '10:57:23'),
(266, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '11:05:09'),
(267, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '12:10:34'),
(268, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '12:28:02'),
(269, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '13:03:18'),
(270, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '14:43:50'),
(271, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '14:44:10'),
(272, 40, 'Windows 7', 'Firefox', 1270, '2023-01-24', '14:53:21'),
(273, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '15:22:37'),
(274, 40, 'Windows 7', 'Firefox', 1270, '2023-01-24', '15:36:26'),
(275, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '15:37:15'),
(276, 40, 'Windows 7', 'Firefox', 1270, '2023-01-24', '15:38:51'),
(277, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '15:39:29'),
(278, 40, 'Windows 7', 'Firefox', 1270, '2023-01-24', '15:50:08'),
(279, 14, 'Windows 7', 'Firefox', 1270, '2023-01-24', '15:51:50'),
(280, 14, 'Windows 7', 'Firefox', 1270, '2023-01-27', '09:51:54'),
(281, 40, 'Windows 7', 'Firefox', 1270, '2023-01-27', '09:52:12'),
(282, 14, 'Windows 7', 'Firefox', 1270, '2023-01-27', '10:06:52'),
(283, 41, 'Windows 7', 'Firefox', 1270, '2023-01-27', '10:07:53'),
(284, 14, 'Windows 7', 'Firefox', 1270, '2023-01-27', '10:08:21'),
(285, 40, 'Windows 7', 'Firefox', 1270, '2023-01-27', '10:08:35'),
(286, 14, 'Windows 7', 'Firefox', 1270, '2023-01-27', '10:09:16'),
(287, 14, 'Windows 7', 'Firefox', 1270, '2023-01-27', '11:28:48'),
(288, 40, 'Windows 7', 'Firefox', 1270, '2023-01-27', '11:30:08'),
(289, 40, 'Windows 7', 'Firefox', 1270, '2023-01-27', '11:30:56'),
(290, 14, 'Windows 7', 'Firefox', 1270, '2023-01-27', '11:46:40'),
(291, 14, 'Windows 7', 'Firefox', 1270, '2023-01-28', '10:16:33'),
(292, 40, 'Windows 7', 'Firefox', 1270, '2023-01-28', '10:16:51'),
(293, 14, 'Windows 7', 'Firefox', 1270, '2023-01-28', '11:01:56'),
(294, 40, 'Windows 7', 'Firefox', 1270, '2023-01-28', '13:23:44'),
(295, 40, 'Windows 7', 'Firefox', 1270, '2023-01-28', '13:24:18'),
(296, 40, 'Windows 7', 'Firefox', 1270, '2023-01-28', '13:24:27'),
(297, 14, 'Windows 7', 'Firefox', 1270, '2023-01-28', '13:25:21'),
(298, 14, 'Windows 7', 'Firefox', 1270, '2023-01-28', '13:26:41'),
(299, 14, 'Windows 7', 'Firefox', 1270, '2023-01-28', '13:52:34'),
(300, 14, 'Windows 7', 'Firefox', 1270, '2023-01-28', '14:33:21'),
(301, 40, 'Windows 7', 'Firefox', 1270, '2023-01-28', '14:35:00'),
(302, 40, 'Windows 7', 'Firefox', 1270, '2023-01-30', '10:14:20'),
(303, 14, 'Windows 7', 'Firefox', 1270, '2023-01-30', '12:11:05'),
(304, 40, 'Windows 7', 'Firefox', 1270, '2023-01-30', '12:26:45'),
(305, 41, 'Windows 7', 'Firefox', 1270, '2023-01-30', '12:27:53'),
(306, 14, 'Windows 7', 'Firefox', 1270, '2023-01-30', '12:28:13'),
(307, 14, 'Windows 7', 'Firefox', 1270, '2023-01-31', '10:08:46'),
(308, 14, 'Windows 7', 'Firefox', 1270, '2023-01-31', '11:13:31'),
(309, 14, 'Windows 7', 'Firefox', 1270, '2023-01-31', '13:24:46'),
(310, 14, 'Windows 7', 'Firefox', 1270, '2023-01-31', '15:15:59'),
(311, 40, 'Windows 7', 'Firefox', 1270, '2023-01-31', '15:16:20'),
(312, 40, 'Windows 7', 'Firefox', 1270, '2023-01-31', '15:16:47'),
(313, 40, 'Windows 7', 'Firefox', 1270, '2023-01-31', '15:18:43'),
(314, 14, 'Windows 7', 'Firefox', 1270, '2023-02-07', '14:16:47'),
(315, 41, 'Windows 7', 'Firefox', 1270, '2023-02-07', '15:30:39'),
(316, 40, 'Windows 7', 'Firefox', 1270, '2023-02-07', '15:31:02'),
(317, 41, 'Windows 7', 'Firefox', 1270, '2023-02-07', '15:36:55'),
(318, 14, 'Windows 7', 'Firefox', 0, '2023-02-14', '10:26:39'),
(319, 14, 'Windows 7', 'Firefox', 1270, '2023-02-14', '21:25:45'),
(320, 14, 'Windows 7', 'Firefox', 1270, '2023-02-14', '21:27:31'),
(321, 59, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:11:53'),
(322, 14, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:12:26'),
(323, 60, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:15:50'),
(324, 14, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:18:34'),
(325, 14, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:33:07'),
(326, 62, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:35:39'),
(327, 62, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:40:16'),
(328, 14, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:40:45'),
(329, 62, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:45:58'),
(330, 63, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:46:52'),
(331, 64, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:47:40'),
(332, 14, 'Windows 7', 'Firefox', 1270, '2023-02-14', '22:48:25'),
(333, 14, 'Windows 7', 'Firefox', 1270, '2023-02-15', '10:34:02'),
(334, 14, 'Windows 10', 'Chrome', 0, '2023-03-26', '14:21:10'),
(335, 63, 'Windows 10', 'Chrome', 0, '2023-03-26', '14:40:38'),
(336, 14, 'Windows 10', 'Chrome', 0, '2023-03-26', '14:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `logo_compet`
--

CREATE TABLE `logo_compet` (
  `id` int(100) NOT NULL,
  `compet_img` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `aboutcompet` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `aboutsmartbtr` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `smartbtr_img` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsticker`
--

CREATE TABLE `newsticker` (
  `id` int(50) NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `news` varchar(200) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsticker`
--

INSERT INTO `newsticker` (`id`, `pdf`, `news`, `date_uploaded`) VALUES
(2, '', 'Computer Training Reports', '2023-03-06'),
(3, '', 'Online training classes for Mechanics', '2023-02-01'),
(4, '', 'Monthly Reports of SEED Mission', '2023-02-01'),
(5, '', 'Mechanicial Training Reports', '2023-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(20) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text NOT NULL,
  `residence` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_uploaded` date NOT NULL,
  `admin1` varchar(100) DEFAULT '0',
  `total_score` int(200) NOT NULL,
  `admin2` int(20) DEFAULT 0,
  `admin3` int(20) DEFAULT 0,
  `admin4` int(20) DEFAULT 0,
  `status` int(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `name`, `phone`, `email`, `description`, `residence`, `image`, `date_uploaded`, `admin1`, `total_score`, `admin2`, `admin3`, `admin4`, `status`) VALUES
(42, 'willson Maranid', 8767654567, 'will@will.will', 'this is a test image for testing things.this is a test image for testing things.this is a test image for testing things.this is a test image for testing things.this is a test image for testing things.', 'Kokrajhar', 'images/index/7e8c0344ec3f668bb7abf2dd1bb71f3314.jpeg', '2023-02-14', '0', 16, 9, 3, 4, 0),
(43, 'jona', 9878767876, 'will@will.will', 'theheh', 'Baksa', 'images/index/87e066a79085f8cd6d04abcdcfe27a9a18.jpeg', '2023-02-14', '0', 27, 10, 10, 7, 0),
(44, 'wills', 8787878787, 'Wilson@willson.com', 'hjhjshd', 'Chirang', 'images/index/c970b818b66b81725f0427af6dd0aaae3.jpg', '2023-02-14', '0', 18, 8, 9, 1, 0),
(45, 'treasure', 87878787, 'wewe@wewe.cm', 'dsdsd', 'Kokrajhar', '', '2023-02-14', '0', 16, 2, 6, 8, 1),
(46, 'yoyo', 878787877, '8787@ghgh.com', 'duiuajh', 'Baksa', '', '2023-02-14', '0', 15, 7, 1, 7, 1),
(47, 'erer', 2323232323, 'ererer@wwe', 'dddsd', 'Tamulpur', 'images/index/4d073c876304b8a994a457151c2e49ac2.jpg', '2023-02-14', '0', 22, 6, 9, 7, 1),
(48, 'okiuo', 8787878, 'wil@hjhd', 'yhgygy', 'Baksa', 'images/index/e89e7a4458aa363d48d53735eb64102123.jpeg', '2023-02-14', '0', 20, 3, 8, 9, 1),
(49, 'hero', 8987876788, 'wilso@ww', 'yty', 'Kokrajhar', 'images/index/9fd97ba74a5d43e379522ae595f9c76222.jpeg', '2023-02-14', '0', 16, 5, 10, 1, 1),
(50, 'vk', 9989989898, 'jaaa@gmail.com', 'vvvffffddd', 'Kokrajhar', 'images/index/7264b88b98bb98940231f6d3dc38c2bc17.jpeg', '2023-02-14', '0', 0, 0, 10, 0, 1),
(55, 'willson arandi', 7878987890, 'willsoin@gmail.com', 'hello thi sis nww ', 'Udalguri', 'images/index/2cb6002097902946529709ef421c7bfe13.jpeg', '2023-02-15', '0', 0, 0, 8, 0, 1),
(56, 'willson', 9878789878, 'wil@hjhd.comm', 'wewe', 'Baksa', 'images/index/81d7ba6e21ec24c07c49211012f1a61b19.jpeg', '2023-02-15', '0', 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `description`, `date_uploaded`) VALUES
(2, 'images/index/93cbf63983f2fdcc6ac3f30f3190f6177b8678d34a9d1e0afccd810d73096ce7a.jpg', 'CM of Assam inaugurating IT Park', '2023-02-24'),
(3, 'images/index/79340949dfac9bd2afe1b582d4d3442c2c5f78e49628f9d47444b09adf2bc508c.jpg', 'Wilson Hasda welcome degnitary of Assam', '2023-02-24'),
(4, 'images/index/33ef09e8a344d5b3c5f7531546857bb34a0caee23c1780752257753eb04c0c5d0d757c3b027d5a45c9070b0b40d82295129fa0585c4a7ec5e376c99ef1b844156.jpeg', 'Girls getting computer training', '2023-02-24'),
(5, 'images/index/1eb0234c5f13e6a69518f3b4e3ea38068935621b30ae7447746f3ac654d41b47b7dd1693b4a00916bfcaef75ea5e0e5cb.jpg', 'CM of Assam inaugurate department building at Kokrajhar', '2023-02-24'),
(6, 'images/index/b026a7adea8053539c64b3791ef8ea37events7.jpg', 'Women weaver of BTR', '2023-03-29'),
(7, 'images/index/2c98463cec3ee7799089ad91af4230d5events9.jpg', 'Ranoj Pegu in Kokrajhar, BTR', '2023-03-29'),
(8, 'images/index/af1b784d8b3262c84c912a221a2e09edevents8.jpg', 'Cabinet meeting of BTR authorities', '2023-03-29'),
(9, 'images/index/cf1c0023c0bdb86bd08c618cd94fc61c8e0e5b985bc918702b5dab6c735dca07Promod-Boro.jpg', 'BTR Chief giving interview', '2023-02-24'),
(10, 'images/index/4c3f4f7b5c76804eb447805af37ad8290560004bdec21d31e221f02f8813874912.jpeg', 'Skill training program held at Kokrajhar', '2023-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `press`
--

CREATE TABLE `press` (
  `id` int(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `head` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `press`
--

INSERT INTO `press` (`id`, `image`, `head`, `title`, `address`, `description`, `date_uploaded`) VALUES
(2, 'images/index/4f898566c9152750979ae5d402fe284bpress1.jpg', 'BTR govt to launch Mission Bwiswmuthi in January 2023', 'BTR govt to launch Mission Bwiswmuthi in January 2023', 'Guwahati', 'GUWAHATI, Nov 21: “The Bodoland Territorial Region government is set to launch Mission Bwiswmuthi on January 27, 2023,” informed the chief executive member of Bodoland Territorial region, Pramod Boro.', '2023-03-29'),
(3, 'images/index/d89fb10e7b376475ed4e06685c573796press2.jpg', 'Stage set for Bodoland International Knowledge Festival', 'Stage set for Bodoland International Knowledge Festival', 'Guwahati', 'Guwahati, Feb 26: The stage is all set for the first Bodoland International Knowledge Festival which is being hosted by Bodoland University in Kokrajhar with support from the Bodoland Territorial Region (BTR) government from February 27. ', '2023-03-29'),
(4, 'images/index/667aaf7a0b1f6bb135987e91c66f58f6secretariat.jpg', '14 missions to help BTC achieve Sustainable Development Goals  ', '14 missions to help BTC achieve Sustainable Development Goals  ', 'Kokrajhar', 'KOKRAJHAR: The missions taken up by the UPPL (United People\'s Party Liberal) led BTR government is to lead the council towards the path of sustainable development in various sectors. The present government led by Pramod Boro has already prepared \'Vision Document\' to achieve the Sustainable Development Goal (SDG), a holistic agenda to bring peace and equal development.  ', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `programsprojects`
--

CREATE TABLE `programsprojects` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `head` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programsprojects`
--

INSERT INTO `programsprojects` (`id`, `image`, `head`, `description`, `date_uploaded`) VALUES
(1, 'images/index/d5c440e56191b7741ab02f92cd6c6ff911.jpeg', 'Pradhan Mantri Kaushal Vikas Yojana', 'Pradhan Mantri Kaushal Vikas Yojana (PMKVY) is the flagship scheme of the Ministry of Skill Development and Entrepreneurship (MSDE) implemented by National Skill Development Corporation (NSDC). The objective of this Skill Certification scheme is to enable Indian youth to take up industry relevant skill training that will help them in securing a better livelihood. Individuals with prior experience are also assessed and certified under Recognition of Prior Learning (RPL).', '2023-03-01'),
(3, 'images/index/0c1ad1514b183a08ca240d48358c918f6.jpeg', 'Deen Dayal Upadhyaya Grameen Kaushalaya Yojana', 'According to Census 2011, India has 55 million potential workers between the ages of 15 and 35 years in rural areas. This presents a historic opportunity for India to transform its demographic surplus into a demographic dividend. The Ministry of Rural Development implements DDU-GKY to drive this national agenda for inclusive growth, by developing skills and productive capacity of the rural youth from poor family.', '2023-03-01'),
(4, 'images/index/996f88b46f6022dfcc411a888ede39c85.jpeg', 'Apprenticeship Training', 'The Apprentices Act, 1961 was enacted with the objective of regulating the programme of training of apprentices in the industry by utilizing the facilities available therein for imparting on-the-job training. The Act makes it obligatory for employers in specified industries to engage apprentices in designated trades to impart Apprenticeship Training on the job in industry to youth and person having National Trade certificate issued by National Council for Vocational Training (NCVT) to develop skilled manpower for the industry.', '2023-03-01'),
(5, 'images/index/87cc487dfc660679535c8ff0b355599b7.jpeg', 'Make in India', 'The initiative basically promises the investors – both domestic and overseas – a conducive environment to turn 125 crore population strong-India a manufacturing hub and something that will also create job opportunities.  That’s in effect a plunge into a serious business but it is also punctuated with two inherent elements in any innovation – new avenues or tapping of opportunities and facing the challenges to keep the right balance. The political leadership is widely expected to be populist; but ‘Make in India’ initiative is actually seen as a judicious mix of economic prudence, administrative reforms and thus catering to the call of people’s mandate – an aspiring India.', '2023-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `recentposts`
--

CREATE TABLE `recentposts` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `head` varchar(500) NOT NULL,
  `title` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recentposts`
--

INSERT INTO `recentposts` (`id`, `image`, `head`, `title`, `address`, `description`, `date_uploaded`) VALUES
(2, 'images/index/4731eb5a82c40c45f72b8a416347dac1post1.jpg', 'Assam Govt to Provincialize 10 Colleges in Bodoland Territorial Region (BTR)  ', 'Assam Govt to Provincialize 10 Colleges in Bodoland Territorial Region (BTR)  ', 'Guwahati', 'GUWAHATI: The Assam Cabinet meeting held in Korajhar on Tuesday saw the undertaking and discussions of many important decisions. The Government of Assam has been making efforts for quite a long time to highly prioritise the all-around development of the Bodoland Territorial Region (BTR). ', '2023-03-29'),
(3, 'images/index/8983fccfd17999b58cea3941ced2182apress1.jpg', 'BTR govt to launch Mission Bwiswmuthi in January 2023', 'BTR govt to launch Mission Bwiswmuthi in January 2023', 'Kokrajhar', 'GUWAHATI, Nov 21: “The Bodoland Territorial Region government is set to launch Mission Bwiswmuthi on January 27, 2023,” informed the chief executive member of Bodoland Territorial region, Pramod Boro.', '2023-03-29'),
(4, 'images/index/5631b3c18ff5e4b3e532e49fbae16cefpost2.jpeg', '4th Asian Kho Kho Championship to begin in Assam\'s Tamulpur', '4th Asian Kho Kho Championship to begin in Assam\'s Tamulpur', 'Kokrajhar', 'Kokrajhar: The 4th Asian Kho Kho Championship will begin in Tamulpur in Baksa district in Bodoland Territorial Region (BTR) in Assam from Monday. Altogether 17 teams (both male and female) will participate in this event.', '2023-03-29'),
(5, 'images/index/a2c7a9276facf73f253dc81a7bfca71aevents8.jpg', 'First Bodoland int’l knowledge fest from Feb 27, 2023', 'First Bodoland int’l knowledge fest from Feb 27, 2023', 'Kokrajhar', '\'Guwahati: In a bid to establish western Assam\'s Kokrajhar globally as a destination of knowledge sharing and peace, the Bodoland University is organising the first 4-day Bodoland International Knowledge Festival at the varsity from February 27.', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `head` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(2, 'images/index/52c484b06cddd40761b7cdfc5b06db587.jpeg', 'Craftsmen Training Scheme (CTS)', 'Craftsmen Training Scheme (CTS)', 'The Craftsmen Training Scheme (CTS) was introduced by the Government of India in year 1950 to ensure a steady flow of skilled workers in different trades for the domestic industry, to raise quantitatively and qualitatively the industrial production by systematic training, to reduce unemployment among the educated youth by providing them employable skills, to cultivate and nurture a technical and industrial attitude in the minds of younger generation. ', '2023-03-29'),
(3, 'images/index/2dcc01f10cd8767d615643fdc1f5a36a1b3e674f4c1004a0fb74fa925b1f17840d757c3b027d5a45c9070b0b40d82295129fa0585c4a7ec5e376c99ef1b844156.jpeg', 'Vocational Training Programme for Women', 'Vocational Training Programme for Women', 'Women Training under Ministry of Skill Development & Entrepreneurship takes care of providing skill training to women in the country which aims at stimulating employment opportunities among women of various socio-economic levels and different age groups.  Women’s Vocational Training Programme (WVTP) was designed and launched in 1977 to mainstream women into economic activities. This project on women’s vocational training was formulated with the assistance of Swedish International Development Aut', '2023-03-06'),
(4, 'images/index/10d6c4f09ef2781a4a96af011d88204e33ddbcef6ebf7e1480e0fc8b6e2e8bf09.jpeg', 'Crafts Instructor Training Scheme (CITS)', 'Crafts Instructor Training Scheme (CITS)', 'Training of Craft Instructors is the mandated responsibility of DGT and It has been operational since the inception of the Craftsmen Training Scheme (CTS). Comprehensive training both in skills and training methodology is imparted to the instructor trainees to make them conversant with techniques of transferring hands-on skills, to train skilled manpower for the industry.', '2023-03-16'),
(5, 'images/index/32d4a0ce911e6bc9fb7f28fafdafd18b11.jpeg', 'Pradhan Mantri Kaushal Vikas Yojana (PMKVY)', 'Pradhan Mantri Kaushal Vikas Yojana (PMKVY)', 'Pradhan Mantri Kaushal Vikas Yojana (PMKVY) is the flagship scheme of the Ministry of Skill Development & Entrepreneurship (MSDE) implemented by National Skill Development Corporation. The objective of this Skill Certification Scheme is to enable a large number of Indian youth to take up industry-relevant skill training that will help them in securing a better livelihood. Individuals with prior learning experience or skills will also be assessed and certified under Recognition of Prior Learning (RPL).', '2023-03-29'),
(6, 'images/index/bea1d31c0b0abf80eb9a42619ca9ee004.jpeg', 'Advanced Vocational Training Scheme (AVTS)', 'Advanced Vocational Training Scheme (AVTS)', 'In order to upgrade and update the skills of serving industrial workers, the AVTS is in operation since 1977. The scheme was launched by erstwhile DGE&T, Ministry of Labour and (now Directorate General of Training (DGT), Ministry of Skill Development & Entrepreneurship) in collaboration with UNDP/ILO in 1977 at the then 6 Advanced Training Institutes (ATIs) under DGE&T and 16 ITIs of the 15 State Governments.', '2023-03-29'),
(7, 'images/index/0dfa3ea850028ea3337e46e18d91aabdschemes4.jpg', 'Rozgar Mela', 'Rozgar Mela', 'The Directorate of Employment & Craftsmen Training, Assam organizes Job Mela / Rozgar Mela from time to time in various locations across Assam for benefit of the jobseekers.  Under National Career Service (NCS), a Scheme under the Govt. of India, Job Mela / Rozgar will be organized quarterly as per requirements / demand.', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `seedmission`
--

CREATE TABLE `seedmission` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `head` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seedmission`
--

INSERT INTO `seedmission` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(0, 'images/index/eb468aeda149eed8fcb0d23ffa4d1707Our-mission.jpg', 'Our mission', 'Mission', '\"Engaging young people including students and enhancing their Technical, Cognitive, Behavioural, Digital, Vocational and Life Skill for 21st century skill requirements early in their life so that they', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `seedspotlight`
--

CREATE TABLE `seedspotlight` (
  `id` int(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `head` varchar(500) NOT NULL,
  `title` varchar(700) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seedspotlight`
--

INSERT INTO `seedspotlight` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(2, 'images/index/8c09a8089ec13fed25e797239ced26a512.jpeg', 'Community Activities', 'Community Activities', 'BSEED conducts skill development programs in various sectors, including agriculture, textiles, hospitality, and tourism, to help individuals acquire the necessary skills to become employable or start their own businesses.', '2023-03-29'),
(3, 'images/index/855864d0ce35dc7bb11accbf2980400d13.jpeg', 'Accomplishments', 'Accomplishments', 'The Bodoland Skill Employment and Entrepreneurship Department (BSEED) was established to promote skill development, employment generation, and entrepreneurship in the Bodoland Territorial Region of Assam, India. Some of the achievements of BSEED are: Skill Development, Employment Generation etc.', '2023-03-29'),
(4, 'images/index/72cead38caf6d9b0a0dd008deffc186b38.jpeg', 'Impact of the SEED Mission', 'Impact of the SEED Mission', 'BSEED has helped to provide training and skill development opportunities to the youth of the BTR, which has helped to create a pool of skilled workforce. This has led to increased employment opportunities for the youth in the region, as they are now equipped with the necessary skills to take up jobs in various sectors.', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `seedvision`
--

CREATE TABLE `seedvision` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `head` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seedvision`
--

INSERT INTO `seedvision` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(3, 'images/index/d7856f43696d10a5f45b7a6bc3a8d9dcvison.jpg', 'Our Vision', '(Skill Employment and Enterpreneur Development)', '\"Endow young people of BTR with skills for employment decent works and entrepreneurship for sustainable development\".', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `strategy`
--

CREATE TABLE `strategy` (
  `id` int(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `head` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strategy`
--

INSERT INTO `strategy` (`id`, `image`, `head`, `title`, `description`, `date_uploaded`) VALUES
(1, 'images/index/5cb813b1eea3cdb38c0721efb796c8a3strategy.jpg', 'Our Strategy', 'Strategy of Skill Employment and Entrepreneurship Department', 'The Skill Employment and Entrepreneurship Department of the Bodoland Territorial Region (BTR) aims to promote skill development, employment generation, and entrepreneurship in the region. The department has identified several strategies to achieve its mission, including: Promoting skill development, Encouraging entrepreneurship, Creating employment opportunities,Fostering innovation, Building partnerships.', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `telephone`
--

CREATE TABLE `telephone` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` int(100) NOT NULL,
  `shortdescription` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` varchar(3000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `telephone`
--

INSERT INTO `telephone` (`id`, `image`, `name`, `phone`, `shortdescription`, `description`, `date_uploaded`) VALUES
(1, 'images/index/a9b8f0a72675b67c09b78a2833698697hcm.jpg', 'Dr. Himanta Biswa Sarma', 45646464, 'Chief Minister, Assam', 'Dr. Himanta Biswa Sarma (born 1st February, 1969) is an Indian politician serving as the 15th and incumbent Chief Minister of Assam since 2021. A former member of the Indian National Congress political party. Sarma joined the Bharatiya Janata Party on 23 August 2015.', '2023-03-01'),
(3, 'images/index/db0d30b3b4de54caf048596fcd81d409Promod-Boro.jpg', 'Pramod Boro', 798465131, 'Chief, BTR, ASSAM', 'Pramod Boro (born 1st March, 1975) is an Indian politician serving as the president of The United People\'s Party Liberal since 25 February 2020 and Chief Executive Member of Bodoland Territorial Region, an autonomous region in Assam since 15 December 2020. He was the former president of All Bodo Students Union.', '2023-03-01'),
(4, 'images/index/6f4cfff49398a3ad516b1df6278120ecem.jpg', 'Wilson Hasda', 986213626, 'E.M, BTR,ASSAM ', 'Wilson Hasda (born 13 March, 1980) is an Indian politician serving as the Executive Member of Bodoland Territorial Region, an autonomous region in Assam since 15 December 2020. He hails from United People\'s Party Liberal a ruling political party of BTR. He was also a former Deputy Director of upper Assam based NGO, People\'s Action for Development.', '2023-03-01'),
(5, 'images/index/9b4a38fcd0f7ec472551af4470b380edPranjit1.jpg', 'Pranjit Das', 45646464, 'CHD, BTR, Assam', 'Sri. Pranjit Das is a CHD of Skill Employment and Entrepreneurship Department SEED.', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE `tenders` (
  `id` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `tenderno` varchar(200) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `image`, `tenderno`, `title`, `date_uploaded`) VALUES
(2, '', 'NHM-32031/4/2021-Const-NHM/Pt 34/69', 'Establishment of Proposed 6 bedded ward at various SHCs and PHCs of Assam under ECRP II NHM Assam Group 193 5 nos scheme in Nalbari district.', '2023-03-29'),
(3, '', '234/ACB-AS-2023', 'Construction of Dhola-Sadia Ghats bridges in length of 9.15 km', '2023-03-29'),
(4, '', 'A-12026/01/2020-E.II (28597)', 'Construction of new Brahmputra bridge (AS-28) in length of 0.05 km in Kamrup district', '2023-03-29'),
(5, '', '234/ACB-AS-2023', 'Road upgradation of Nalbari-Bijini NH-31 road in length of 27.3 km in East West Corridor under NHDP-II', '2023-03-29'),
(6, '', 'A-12026/01/2020-E.II (28597)', 'Laying of Bogibeel rail-cum-road bridge over Brahmaputra river', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `who`
--

CREATE TABLE `who` (
  `id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `head` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(700) NOT NULL,
  `phone` int(200) NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `who`
--

INSERT INTO `who` (`id`, `image`, `head`, `title`, `description`, `phone`, `date_uploaded`) VALUES
(2, 'images/index/924ec7bfe3bca7ff9db62cdc9a0562bd8e0e5b985bc918702b5dab6c735dca07Promod-Boro.jpg', 'Pramod Boro', 'CHIEF, BTR, Assam', 'Office of the Department of SEED BTR,SH 14,DIMALGAON ASSAM 783370 ', 2147483647, '2023-02-24'),
(3, 'images/index/14a72e1c89407735b3187450a017b00dPromod-Boro.jpg', 'Pramod Boro', 'CHIEF, BTR, Assam', 'Bodofa Nwgwr, Kokrajhar', 2147483647, '2023-03-29'),
(4, 'images/index/017049580662799b9c2ab5819b2cba7bPromod-Boro.jpg', 'Pramod Boro', 'CHIEF, BTR, Assam', 'Bodofa Nwgwr, Kokrajhar', 2147483647, '2023-03-29'),
(5, 'images/index/792c34fe2f1d4a422ffa6c9fc945f2b5wilson-hasda.jpg', 'Wilson Hasda', 'E.M, BTR, Assam', 'Moliikepur, Srirampur', 888888888, '2023-03-29'),
(6, 'images/index/a316c22e060794b68999a974ab72cd71wilson-hasda.jpg', 'Wilson Hasda', 'E.M, BTR, Assam', 'Molikepur, Srirampur', 888888888, '2023-03-29'),
(7, 'images/index/eb04175b0076cb702d9d9916874dd82bwilson-hasda.jpg', 'Wilson Hasda', 'E.M, BTR, Assam', 'Molikepur, Srirampur', 888888888, '2023-03-29');

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
-- Indexes for table `abou_bodolandseed`
--
ALTER TABLE `abou_bodolandseed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bodolandmission`
--
ALTER TABLE `bodolandmission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `honourable`
--
ALTER TABLE `honourable`
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
-- Indexes for table `newsticker`
--
ALTER TABLE `newsticker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press`
--
ALTER TABLE `press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programsprojects`
--
ALTER TABLE `programsprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recentposts`
--
ALTER TABLE `recentposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seedmission`
--
ALTER TABLE `seedmission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seedspotlight`
--
ALTER TABLE `seedspotlight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seedvision`
--
ALTER TABLE `seedvision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strategy`
--
ALTER TABLE `strategy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telephone`
--
ALTER TABLE `telephone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `who`
--
ALTER TABLE `who`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouseed`
--
ALTER TABLE `abouseed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `about_compet`
--
ALTER TABLE `about_compet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `abou_bodolandseed`
--
ALTER TABLE `abou_bodolandseed`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bodolandmission`
--
ALTER TABLE `bodolandmission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `honourable`
--
ALTER TABLE `honourable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `logo_admin`
--
ALTER TABLE `logo_admin`
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `logo_adminlogin_detail`
--
ALTER TABLE `logo_adminlogin_detail`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT for table `logo_compet`
--
ALTER TABLE `logo_compet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsticker`
--
ALTER TABLE `newsticker`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `press`
--
ALTER TABLE `press`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programsprojects`
--
ALTER TABLE `programsprojects`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recentposts`
--
ALTER TABLE `recentposts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seedspotlight`
--
ALTER TABLE `seedspotlight`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seedvision`
--
ALTER TABLE `seedvision`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `strategy`
--
ALTER TABLE `strategy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telephone`
--
ALTER TABLE `telephone`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `who`
--
ALTER TABLE `who`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
