-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 10:04 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_acc_tbl`
--

CREATE TABLE `user_acc_tbl` (
  `acc_no` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `bDay` date NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_acc_tbl`
--

INSERT INTO `user_acc_tbl` (`acc_no`, `fName`, `lName`, `bDay`, `userName`, `password`, `date_created`) VALUES
(6, 'Nikko James', 'Santillan', '1996-10-10', 'NikzZz10', 'Nikkoikoy10', '2018-01-06 21:01:08'),
(7, 'Ashly Ann', 'Dungog', '1999-07-14', 'Ash10', 'Dungog10', '2018-01-06 21:02:43'),
(8, 'April Rose', 'Barrera', '1999-11-01', 'Apr10', 'Barrera10', '2018-01-06 21:03:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_acc_tbl`
--
ALTER TABLE `user_acc_tbl`
  ADD PRIMARY KEY (`acc_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_acc_tbl`
--
ALTER TABLE `user_acc_tbl`
  MODIFY `acc_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
