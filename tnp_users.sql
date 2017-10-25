-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 06:20 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tnp_users`
--

CREATE TABLE `tnp_users` (
  `user_id` int(6) UNSIGNED NOT NULL,
  `entry_no` varchar(30) NOT NULL,
  `college_id` varchar(30) NOT NULL,
  `year` int(4) DEFAULT NULL,
  `batch` int(2) DEFAULT NULL,
  `cgpa` float(4,2) DEFAULT NULL,
  `strikes` int(2) DEFAULT NULL,
  `branch` int(1) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tnp_users`
--

INSERT INTO `tnp_users` (`user_id`, `entry_no`, `college_id`, `year`, `batch`, `cgpa`, `strikes`, `branch`, `reg_date`) VALUES
(4, '2016meb1142', '1', 16, 1, 7.50, 1, 3, '2017-10-25 13:25:52'),
(5, '2017eeb1250', '1', 17, 1, 5.00, 4, 2, '2017-10-25 12:39:45'),
(6, '2015csb1162', '1', 15, 1, 7.12, 2, 1, '2017-10-25 13:25:56'),
(7, '2015eeb1142', '1', 15, 1, 7.88, 1, 2, '2017-10-25 15:48:48'),
(8, '2016mez1142', '1', 16, 2, 2.70, 7, 1, '2017-10-25 13:19:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tnp_users`
--
ALTER TABLE `tnp_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tnp_users`
--
ALTER TABLE `tnp_users`
  MODIFY `user_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
