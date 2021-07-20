-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 08:59 PM
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
-- Table structure for table `customer_balance`
--

CREATE TABLE `customer_balance` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `card_no` int(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `added` varchar(100) DEFAULT NULL,
  `transferred` varchar(100) DEFAULT NULL,
  `loan` varchar(100) DEFAULT NULL,
  `loanreq` varchar(100) DEFAULT NULL,
  `balance` varchar(100) NOT NULL,
  `total_purchased` varchar(100) DEFAULT NULL,
  `phone` int(50) NOT NULL,
  `mobile_recharge` int(100) DEFAULT NULL,
  `electricity_bill` varchar(100) DEFAULT NULL,
  `profile_img` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `comment` varchar(10000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_balance`
--

INSERT INTO `customer_balance` (`id`, `username`, `email`, `card_no`, `bank_name`, `added`, `transferred`, `loan`, `loanreq`, `balance`, `total_purchased`, `phone`, `mobile_recharge`, `electricity_bill`, `profile_img`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Nafi', 'nativetube71@gmail.com', 54321, 'Axis Bank', '50000', '4000', '15000', '10000', '35000', '15000', 1869510882, 1000, '14000', '1615751122.jpg', 'Pending', NULL, '2021-03-12 09:49:37', '2021-03-14 19:45:22'),
(7, 'Kamal', 'nativetube71@gmail.com', 23456, 'Janata Bank', '25000', NULL, NULL, '', '25000', NULL, 1869510882, NULL, NULL, '1615689928.png', '', NULL, '2021-03-14 02:45:28', '2021-03-14 02:45:28'),
(8, 'Rabbi', 'nativetube71@gmail.com', 65432, 'Janata Bank', '2000', NULL, NULL, '', '2000', NULL, 1869510882, NULL, NULL, '1615736925.jpg', 'Pending', NULL, '2021-03-14 15:48:45', '2021-03-14 15:48:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_balance`
--
ALTER TABLE `customer_balance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_balance`
--
ALTER TABLE `customer_balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
