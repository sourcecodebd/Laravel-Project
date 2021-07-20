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
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
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
  `profile_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`userId`, `username`, `password`, `email`, `name`, `father_name`, `mother_name`, `dob`, `gender`, `address`, `phone`, `blood_group`, `nid_no`, `type`, `profile_img`) VALUES
(1, 'Nafi', '12', 'nativetube71@gmail.com', 'Nafi Mahmud', 'Khondoker Md. Mizanur Rahman', 'Samsunnahar', '1999-09-15', 'Male', 'Mirpur, Dhaka', '01869510882', 'B+', '123456789', 'Customer', '1615497007.jpg'),
(2, 'Rafi', '123', 'customer@gmail.com', 'Rafi Mahmud', 'Rakib Mahmud', 'Nipa Akter', '1999-10-15', 'Male', 'Shymoli, Dhaka', '01859510882', 'A+', '987654321', 'Customer', '1614362165.png'),
(29, 'Sakib', '123', 'sakib@gmail.com', 'Sakib Hasan', 'Anowar Hossain', 'Rahim Khatun', '2021-03-12', 'Male', 'Agargaon, Dhaka', '01869510882', 'AB+', '123456789', 'Customer', '1615505600.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
