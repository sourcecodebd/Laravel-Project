-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 02:53 AM
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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `profile_img` varchar(100) DEFAULT NULL,
  `reviewdate` date DEFAULT NULL,
  `review` varchar(100) DEFAULT NULL,
  `feedback` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewId`, `username`, `profile_img`, `reviewdate`, `review`, `feedback`) VALUES
(2, 'Rafi', '1614362165.png', '2021-03-03', 'It\'s Okay', 'Appreciated it so much'),
(29, 'Sakib', '1615506396.png', '2021-03-12', 'Its Okay', 'Need to Improve'),
(31, 'Nafi', '1615434638.jpg', '2021-03-11', 'Its Okay', 'Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it.'),
(34, 'Nafi', '1615508070.jpg', '2021-03-12', 'Its Okay', 'Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it.'),
(35, 'Sakib', '1615510895.png', '2021-03-12', 'Its Okay', 'Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it. Need to Improve, lots of features must be add. Please make it happen as soon as possible. Take care of it. Project should be well established. Please inform me further about it.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
