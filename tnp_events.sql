-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 12:49 PM
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
-- Table structure for table `tnp_events`
--

CREATE TABLE `tnp_events` (
  `event_name` varchar(100) NOT NULL,
  `event_date` varchar(30) NOT NULL,
  `event_time` varchar(30) NOT NULL,
  `b_years` varchar(30) DEFAULT NULL,
  `b_branches` varchar(30) DEFAULT NULL,
  `b_min_cg` float(4,2) DEFAULT NULL,
  `b_nos` int(3) DEFAULT NULL,
  `b_man` int(1) DEFAULT NULL,
  `m_years` varchar(30) DEFAULT NULL,
  `m_branches` varchar(30) DEFAULT NULL,
  `m_min_cg` float(4,2) DEFAULT NULL,
  `m_nos` int(3) DEFAULT NULL,
  `m_man` int(1) DEFAULT NULL,
  `p_years` varchar(30) DEFAULT NULL,
  `p_branches` varchar(30) DEFAULT NULL,
  `p_min_cg` float(4,2) DEFAULT NULL,
  `p_nos` int(3) DEFAULT NULL,
  `p_man` int(1) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tnp_events`
--

INSERT INTO `tnp_events` (`event_name`, `event_date`, `event_time`, `b_years`, `b_branches`, `b_min_cg`, `b_nos`, `b_man`, `m_years`, `m_branches`, `m_min_cg`, `m_nos`, `m_man`, `p_years`, `p_branches`, `p_min_cg`, `p_nos`, `p_man`, `description`, `reg_date`) VALUES
('test', '35', 'e-e', '14,15,16,17', '0,0,0', 9.00, 9, 1, '14,0,0,0', '0,0,0', 9.00, 7, 1, '14,0,0,0', '0,0,0', 6.00, 8, 1, '0', '2017-10-28 10:43:00'),
('Flipkart', '8 December', '9  AM-11 AM', '14,15,0,0', '0,0,0', 7.00, 25, 1, '14,15,0,0', '0,0,0', 3.00, 20, 1, '14,0,16,0', '0,0,0', 4.00, 20, 0, '0', '2017-10-28 10:47:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
