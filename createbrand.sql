-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 09:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `createbrand`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `ad_name` text DEFAULT NULL,
  `ad_pass` varchar(50) DEFAULT NULL,
  `ad_email` varchar(30) DEFAULT NULL,
  `ad_parmison` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ad_name`, `ad_pass`, `ad_email`, `ad_parmison`) VALUES
(1, NULL, '1122', 'ebrahim49119782@gmail.com', NULL),
(2, NULL, '1122', 'ebrahim491197821@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(50) NOT NULL,
  `title` text DEFAULT NULL,
  `dsc` text DEFAULT NULL,
  `mata` text DEFAULT NULL,
  `img` longtext DEFAULT NULL,
  `catagory` text DEFAULT NULL,
  `activ` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `dsc`, `mata`, `img`, `catagory`, `activ`) VALUES
(1, 'gbxdfgb', 'xsedrgfxdtfbh', 'dfxgvdbg', 'pricing.png', 'dfxgxvdfcgb', NULL),
(2, 'ebrahim', 'jasfdjuo;rfeujaofe', 'sdafazf', 'pricing.png', 'adfva', NULL),
(3, 'sxrtghxsfgth', 'xfdfxdbg', 'xgtfbh', 'images.jpg', 'xcbhrtxfgcbh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `id` int(11) NOT NULL,
  `team_d` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`id`, `team_d`, `category`, `image`, `name`, `designation`, `description`, `status`, `time`) VALUES
(1, 1, 'SEO', 'e.jpg', 'Ebrahim', 'SEO Expert', 'a;dsfja;p dasfjaope;rf dsjf;aewsjfr dsafjawo;perfj adsjrf;opawerf dsa;rfaweo dsafjoerf sadmoierjoifmd dsjr joirtjsd  jioejrfoizj dsjdfosuf iofjodjg lkjlikdsfju kljgfdo  jojjg  ojgsdfoj  jfgdoijfgsd0o  joijdf gjtoifj  iogrjiodsfjg   oigfjsdofgj ersg dsfgiopgr osfdj ', 1, '2023-12-21 13:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(50) NOT NULL,
  `ser_name` text DEFAULT NULL,
  `s_price` int(10) NOT NULL,
  `ser_dec` text DEFAULT NULL,
  `ser_img` longtext DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `ser_name`, `s_price`, `ser_dec`, `ser_img`, `date`) VALUES
(1, 'SEO', 0, 'amader seba onnoder theke onek alada. amara sobsomoi castomer mon manosikotar bujhar cecta kori. amara sob somoi apnar sebai niojito thakbo', 'seo.png', '2023-12-12 15:16:27'),
(2, 'Websaite Design', 0, 'একটা ওয়েব সাইট একটা দোকান। ওয়েবসাইট ছাড়া ব্যাবসার কথা চিন্তাও করা যায়না। ব্যাবসা টা যেমনই হোক একটা ওয়েব সাইট থাকা খুবই জরুরি। \nকারনঃ\nপ্রথম কারন টার কথাই যোদি বলি একটা ওয়েব সাইটের থাকলে আপনার দোকান টা সব সময় খোলা থাকবে। \nআপনার মালা মাল গুলো একটা যায়গা গোসাল থাকবে', 'website.png', '2023-12-16 18:17:38'),
(3, 'Graphics Design', 0, 'asdfvczeawsfv', 'graphics_design.png', '2023-12-16 19:37:17'),
(7, ';lajf', 12, 'dsaf', 'adsfazs', '2023-12-20 23:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `s_img`
--

CREATE TABLE `s_img` (
  `s_id` int(50) NOT NULL,
  `s_img` longtext NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nambar` varchar(20) DEFAULT NULL,
  `img` longtext NOT NULL DEFAULT 'avater.jpg',
  `img_c` longtext NOT NULL DEFAULT 'avater_c.jpg',
  `coutry` text DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `nambar`, `img`, `img_c`, `coutry`, `password`) VALUES
(1, 'MD EBRAHIM MUNSHE', 'ebrahim49119782@gmail.com', '01980533510', '', '', 'Bangladesh', '1122'),
(2, 'zdxfgvzr', 'amar@gmail.con', '01975533510', 'avater.jpg', 'avater_c.jpg', 'dsfacvzwesa', '1122'),
(3, 'MD EBRAHIM MUNSHE', 'redwan@gmail.com', '8801945656565', 'avater.jpg', 'avater_c.jpg', 'Bangladesh', '1122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ad_email` (`ad_email`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team-id` (`team_d`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_img`
--
ALTER TABLE `s_img`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nambar` (`nambar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
