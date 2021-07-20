-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 07:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

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
-- Table structure for table `service_provider_table`
--

CREATE TABLE `service_provider_table` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `nid_no` varchar(100) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `profile_img` varchar(100) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_provider_table`
--

INSERT INTO `service_provider_table` (`userId`, `username`, `password`, `name`, `father_name`, `mother_name`, `dob`, `gender`, `address`, `phone`, `blood_group`, `nid_no`, `type`, `profile_img`, `email`) VALUES
(1, 'Nafii', '123', 'Nafi Mahmud', 'Khondoker Md. Mizanur Rahman', 'Samsunnahar', '1999-09-15', 'Male', 'Mirpur, Dhaka', '01869510882', 'B+', '123456789', 'Service Provider', '1616432813.jpg', 'kamal@gmail.com'),
(2, 'Emon', '123', 'Emon alam', 'shaha alam', 'morsheda bmegum', '1999-10-15', 'Male', 'Shymoli, Dhaka', '01859510882', 'A+', '987654321', 'Service_Provider', '1615634638.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_provider_table`
--
ALTER TABLE `service_provider_table`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_provider_table`
--
ALTER TABLE `service_provider_table`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
