-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 03:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `profile_img` varchar(100) DEFAULT NULL,
  `messagedate` date DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `admin_message` varchar(100) DEFAULT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageId`, `username`, `profile_img`, `messagedate`, `subject`, `message`, `admin_message`, `admin_name`, `created_at`, `updated_at`) VALUES
(42, 'Nafi', '1615730028.jpg', '2021-03-09', 'test', 'Returning to league action, Juventus travel to Cagliari for Matchday 27 of the Serie A season.  After two home victories against Spezia and Lazio, the Bianconeri will take to the pitch at the Sardegna Arena looking to make it 3 wins in a row.', 'good job', 'Sakib', '2021-03-14 07:53:48', '2021-03-14 13:55:50'),
(43, 'Nafi', '1615730051.jpg', '2021-03-14', 'account review', 'Hello admin, what\'s up?', 'well', 'Rifat', '2021-03-14 07:54:11', '2021-03-14 13:56:21'),
(44, 'Nafi', '1615730002.jpg', '2021-03-14', 'Prayer for Account reactivation', 'Hello sir my system ran into a problem, please reactivate my account. Please take care of this matter sir.', 'ok', 'Rafi', '2021-03-14 07:53:22', '2021-03-14 13:55:29'),
(45, 'Nafi', '1615730028.jpg', '2021-03-09', 'test', 'Returning to league action, Juventus travel to Cagliari for Matchday 27 of the Serie A season.  After two home victories against Spezia and Lazio, the Bianconeri will take to the pitch at the Sardegna Arena looking to make it 3 wins in a row.', 'good job', 'Sakib', '2021-03-14 07:53:48', '2021-03-14 13:55:50'),
(46, 'Nafi', '1615730051.jpg', '2021-03-14', 'account review', 'Hello admin, what\'s up?', 'well', 'Rifat', '2021-03-14 07:54:11', '2021-03-14 13:56:21'),
(47, 'Nafi', '1615730002.jpg', '2021-03-14', 'Prayer for Account reactivation', 'Hello sir my system ran into a problem, please reactivate my account. Please take care of this matter sir.', 'ok', 'Rafi', '2021-03-14 07:53:22', '2021-03-14 13:55:29'),
(48, 'Nafi', '1615730028.jpg', '2021-03-09', 'test', 'Returning to league action, Juventus travel to Cagliari for Matchday 27 of the Serie A season.  After two home victories against Spezia and Lazio, the Bianconeri will take to the pitch at the Sardegna Arena looking to make it 3 wins in a row.', 'good job', 'Sakib', '2021-03-14 07:53:48', '2021-03-14 13:55:50'),
(49, 'Nafi', '1615730051.jpg', '2021-03-14', 'account review', 'Hello admin, what\'s up?', 'well', 'Rifat', '2021-03-14 07:54:11', '2021-03-14 13:56:21'),
(50, 'Nafi', '1615730002.jpg', '2021-03-14', 'Prayer for Account reactivation', 'Hello sir my system ran into a problem, please reactivate my account. Please take care of this matter sir.', 'ok', 'Rafi', '2021-03-14 07:53:22', '2021-03-14 13:55:29'),
(51, 'Nafi', '1615730028.jpg', '2021-03-09', 'test', 'Returning to league action, Juventus travel to Cagliari for Matchday 27 of the Serie A season.  After two home victories against Spezia and Lazio, the Bianconeri will take to the pitch at the Sardegna Arena looking to make it 3 wins in a row.', 'good job', 'Sakib', '2021-03-14 07:53:48', '2021-03-14 13:55:50'),
(52, 'Nafi', '1615730051.jpg', '2021-03-14', 'account review', 'Hello admin, what\'s up?', 'well', 'Rifat', '2021-03-14 07:54:11', '2021-03-14 13:56:21'),
(53, 'Nafi', '1615730002.jpg', '2021-03-14', 'Prayer for Account reactivation', 'Hello sir my system ran into a problem, please reactivate my account. Please take care of this matter sir.', 'ok', 'Rafi', '2021-03-14 07:53:22', '2021-03-14 13:55:29'),
(54, 'Nafi', '1615730028.jpg', '2021-03-09', 'test', 'Returning to league action, Juventus travel to Cagliari for Matchday 27 of the Serie A season.  After two home victories against Spezia and Lazio, the Bianconeri will take to the pitch at the Sardegna Arena looking to make it 3 wins in a row.', 'good job', 'Sakib', '2021-03-14 07:53:48', '2021-03-14 13:55:50'),
(55, 'Nafi', '1615730051.jpg', '2021-03-14', 'account review', 'Hello admin, what\'s up?', 'well', 'Rifat', '2021-03-14 07:54:11', '2021-03-14 13:56:21'),
(56, 'Nafi', '1615730002.jpg', '2021-03-14', 'Prayer for Account reactivation', 'Hello sir my system ran into a problem, please reactivate my account. Please take care of this matter sir.', 'ok', 'Rafi', '2021-03-14 07:53:22', '2021-03-14 13:55:29'),
(57, 'Nafi', '1615730028.jpg', '2021-03-09', 'test', 'Returning to league action, Juventus travel to Cagliari for Matchday 27 of the Serie A season.  After two home victories against Spezia and Lazio, the Bianconeri will take to the pitch at the Sardegna Arena looking to make it 3 wins in a row.', 'good job', 'Sakib', '2021-03-14 07:53:48', '2021-03-14 13:55:50'),
(58, 'Nafi', '1615730051.jpg', '2021-03-14', 'account review', 'Hello admin, what\'s up?', 'well', 'Rifat', '2021-03-14 07:54:11', '2021-03-14 13:56:21'),
(59, 'Nafi', '1615730002.jpg', '2021-03-14', 'Prayer for Account reactivation', 'Hello sir my system ran into a problem, please reactivate my account. Please take care of this matter sir.', 'ok', 'Rafi', '2021-03-14 07:53:22', '2021-03-14 13:55:29'),
(60, 'Nafi', '1615730028.jpg', '2021-03-09', 'test', 'Returning to league action, Juventus travel to Cagliari for Matchday 27 of the Serie A season.  After two home victories against Spezia and Lazio, the Bianconeri will take to the pitch at the Sardegna Arena looking to make it 3 wins in a row.', 'good job', 'Sakib', '2021-03-14 07:53:48', '2021-03-14 13:55:50'),
(61, 'Nafi', '1615730051.jpg', '2021-03-14', 'account review', 'Hello admin, what\'s up?', 'well', 'Rifat', '2021-03-14 07:54:11', '2021-03-14 13:56:21'),
(62, 'Nafi', '1615730002.jpg', '2021-03-14', 'Prayer for Account reactivation', 'Hello sir my system ran into a problem, please reactivate my account. Please take care of this matter sir.', 'ok', 'Rafi', '2021-03-14 07:53:22', '2021-03-14 13:55:29'),
(63, 'Nafi', '1615730028.jpg', '2021-03-09', 'test', 'Returning to league action, Juventus travel to Cagliari for Matchday 27 of the Serie A season.  After two home victories against Spezia and Lazio, the Bianconeri will take to the pitch at the Sardegna Arena looking to make it 3 wins in a row.', 'good job', 'Sakib', '2021-03-14 07:53:48', '2021-03-14 13:55:50'),
(64, 'Nafi', '1615730051.jpg', '2021-03-14', 'account review', 'Hello admin, what\'s up?', 'well', 'Rifat', '2021-03-14 07:54:11', '2021-03-14 13:56:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
