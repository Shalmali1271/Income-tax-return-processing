-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 03:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `income_tax`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_page`
--

CREATE TABLE `login_page` (
  `userid` int(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `logintype` varchar(40) NOT NULL,
  `loggedin_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_page`
--

INSERT INTO `login_page` (`userid`, `password`, `logintype`, `loggedin_time`) VALUES
(38, 'tonks', 'Accountant', '2020-10-08 13:48:26.378247'),
(40, 'shalmali', 'Accountant', '2020-10-08 14:04:34.598436');

-- --------------------------------------------------------

--
-- Table structure for table `signup_page`
--

CREATE TABLE `signup_page` (
  `userid` int(5) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `peradd` varchar(40) NOT NULL,
  `comadd` varchar(40) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `logintype` varchar(20) NOT NULL,
  `verified` int(1) NOT NULL DEFAULT 0,
  `create_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_page`
--

INSERT INTO `signup_page` (`userid`, `fname`, `lname`, `gender`, `email`, `password`, `dob`, `peradd`, `comadd`, `mobileno`, `logintype`, `verified`, `create_date`) VALUES
(38, 'Remus', 'Lupin', 'Male', 'regulusblack1200@gmail.com', 'tonks', '1998-12-12', 'zsfdxgfchgvjhk', 'iukhgjmv', 1234567890, 'Accountant', 0, '2020-10-08 13:44:50.418826'),
(39, 'Regulus', 'Black', 'Male', 'regulusblack1200@gmail.com', 'sirius', '1999-11-15', 'restdfg', 'sfgcvh', 1234567890, 'Tax Payer', 0, '2020-10-08 13:57:56.848895'),
(40, 'Shalmali', 'Kulkarni', 'Female', 'regulusblack1200@gmail.com', 'shalmali', '2001-09-12', 'sxdcfjbhkn', 'rdtgh', 1234567890, 'Accountant', 0, '2020-10-08 14:02:33.701803');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_page`
--
ALTER TABLE `login_page`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `signup_page`
--
ALTER TABLE `signup_page`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_page`
--
ALTER TABLE `login_page`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4252;

--
-- AUTO_INCREMENT for table `signup_page`
--
ALTER TABLE `signup_page`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_page`
--
ALTER TABLE `login_page`
  ADD CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `signup_page` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
