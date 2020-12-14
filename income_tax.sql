-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 08:21 AM
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `keyy` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `subject`, `message`, `keyy`) VALUES
('Reema', 'good work', 'thanks ', '66a12f4b7e'),
('Luna', 'Accountant not Responding  ', 'I have sent my tax form to accountant 12-11-2020 but still the status of my form is pending.\r\nif you can please help!\r\nThank You!', 'd86bde0f95');

-- --------------------------------------------------------

--
-- Table structure for table `login_page`
--

CREATE TABLE `login_page` (
  `userid` int(30) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `logintype` varchar(40) NOT NULL,
  `loggedin_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_page`
--

INSERT INTO `login_page` (`userid`, `password`, `logintype`, `loggedin_time`) VALUES
(52, '81dc9bdb52d04dc20036dbd8313ed055', 'Tax Payer', '2020-12-03 11:51:25.397937'),
(53, 'e10adc3949ba59abbe56e057f20f883e', 'Accountant', '2020-12-03 11:51:44.083187'),
(54, '8e07dafd13495561db9063ebe4db4b27', 'Admin', '2020-12-03 11:52:05.548216'),
(53, 'e10adc3949ba59abbe56e057f20f883e', 'Accountant', '2020-12-03 12:12:18.033515'),
(52, '81dc9bdb52d04dc20036dbd8313ed055', 'Tax Payer', '2020-12-03 12:38:29.923676'),
(54, '8e07dafd13495561db9063ebe4db4b27', 'Admin', '2020-12-03 13:06:05.153709'),
(54, '8e07dafd13495561db9063ebe4db4b27', 'Admin', '2020-12-09 10:39:25.091197'),
(52, '81dc9bdb52d04dc20036dbd8313ed055', 'Tax Payer', '2020-12-09 15:58:07.165281'),
(53, '827ccb0eea8a706c4c34a16891f84e7b', 'Accountant', '2020-12-09 16:01:30.077653'),
(53, '81dc9bdb52d04dc20036dbd8313ed055', 'Accountant', '2020-12-09 16:01:56.057455'),
(53, 'b59c67bf196a4758191e42f76670ceba', 'Accountant', '2020-12-09 16:02:14.949645'),
(53, 'a65ec23650a6f861b06ee754624470b8', 'Accountant', '2020-12-09 16:02:43.575770'),
(53, '4a7d1ed414474e4033ac29ccb8653d9b', 'Accountant', '2020-12-09 16:02:58.907013'),
(53, 'e10adc3949ba59abbe56e057f20f883e', 'Accountant', '2020-12-09 16:04:46.616403'),
(55, '83be32aa81db5fdce7ded8d0a1dd863c', 'Accountant', '2020-12-09 17:13:44.894660'),
(55, '83be32aa81db5fdce7ded8d0a1dd863c', 'Accountant', '2020-12-09 17:14:46.639678'),
(54, '8e07dafd13495561db9063ebe4db4b27', 'Admin', '2020-12-09 17:17:21.026647'),
(57, '25e637a3373961e7322890e5c27042ca', 'Admin', '2020-12-09 17:23:47.853343'),
(58, 'c6f48a4ab186b0aaa6e69dd03061860f', 'Admin', '2020-12-13 11:15:06.446667'),
(58, 'c6f48a4ab186b0aaa6e69dd03061860f', 'Admin', '2020-12-13 13:13:09.708441'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 19:24:39.081569'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 19:31:49.937118'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 19:33:41.416910'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 19:45:08.187474'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 19:45:57.431317'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 19:50:53.756623'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 19:52:09.176506'),
(58, 'c6f48a4ab186b0aaa6e69dd03061860f', 'Admin', '2020-12-13 19:53:09.362676'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 19:53:23.601392'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 19:54:34.257321'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 20:00:39.776442'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 20:01:24.751016'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 20:01:46.196715'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 20:02:33.275986'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 20:02:59.584531'),
(60, 'a209541310cac0ba0f9d419d51061198', 'Accountant', '2020-12-13 20:05:17.862857'),
(56, '06c56a89949d617def52f371c357b6db', 'Accountant', '2020-12-13 22:34:11.865546'),
(56, '06c56a89949d617def52f371c357b6db', 'Accountant', '2020-12-13 22:48:37.834638'),
(64, '093f966b4d14b19adf2835e4775e3aee', 'Tax Payer', '2020-12-14 11:21:44.556189'),
(61, 'c6f48a4ab186b0aaa6e69dd03061860f', 'Admin', '2020-12-14 11:23:29.132249'),
(56, '06c56a89949d617def52f371c357b6db', 'Accountant', '2020-12-14 11:24:38.006580'),
(62, 'ba8a48b0e34226a2992d871c65600a7c', 'Tax Payer', '2020-12-14 12:22:42.921261');

-- --------------------------------------------------------

--
-- Table structure for table `reset_pass`
--

CREATE TABLE `reset_pass` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reset_pass`
--

INSERT INTO `reset_pass` (`email`, `key`, `expDate`) VALUES
('shalmalikulkarni01@gmail.com', '768e78024aa8fdb9b8fe87be86f647453dc74763be', '2020-12-15 06:58:13.000000');

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
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `peradd` varchar(40) NOT NULL,
  `comadd` varchar(40) NOT NULL,
  `mobileno` int(30) NOT NULL,
  `logintype` varchar(20) NOT NULL,
  `verified` int(1) NOT NULL DEFAULT 0,
  `feedback` tinyint(1) NOT NULL,
  `create_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `trn_date` datetime(6) NOT NULL,
  `request` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_page`
--

INSERT INTO `signup_page` (`userid`, `fname`, `lname`, `gender`, `email`, `password`, `dob`, `peradd`, `comadd`, `mobileno`, `logintype`, `verified`, `feedback`, `create_date`, `trn_date`, `request`) VALUES
(52, 'Reema', 'Mahendra', 'Female', 'abigael.kumar12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-12-11', 'mumbai', 'mumbai', 2147483647, 'Tax Payer', 1, 0, '2020-12-03 11:46:38.982027', '0000-00-00 00:00:00.000000', 0),
(56, 'Shouto', 'Todoroki', 'Male', 'shalmalikulkarni01@gmail.com', '06c56a89949d617def52f371c357b6db', '2020-12-11', 'UA high', 'UA high', 1234567890, 'Accountant', 1, 0, '2020-12-09 17:16:29.765458', '0000-00-00 00:00:00.000000', 0),
(61, 'Giyu', 'Tomioka', 'Male', 'ananyarajesh29@gmail.com', 'c6f48a4ab186b0aaa6e69dd03061860f', '2020-12-17', 'abcdefh', 'abcedh', 1873285614, 'Admin', 1, 0, '2020-12-14 11:00:05.158197', '0000-00-00 00:00:00.000000', 0),
(62, 'Luna', 'Lovegood', 'Female', 'demo@abc.com', 'ba8a48b0e34226a2992d871c65600a7c', '2020-12-11', 'abcdfehjs', 'jksdcbsa', 2147483647, 'Tax Payer', 1, 1, '2020-12-14 11:02:39.404987', '0000-00-00 00:00:00.000000', 0),
(63, 'Hermione ', 'Granger', 'Female', 'demo@cde.com', '45798f269709550d6f6e1d2cf4b7d485', '2020-12-18', 'chgsa', 'uigdrza', 2137483647, 'Accountant', 1, 0, '2020-12-14 11:03:48.051428', '0000-00-00 00:00:00.000000', 0),
(64, 'Sirius', 'Black', 'Male', 'demo@fgh.com', '093f966b4d14b19adf2835e4775e3aee', '2020-12-04', 'tdycghhygvy', 'hgbfcxvsd', 1147483647, 'Tax Payer', 1, 0, '2020-12-14 11:05:30.632526', '0000-00-00 00:00:00.000000', 0),
(65, 'Monica', 'Geller', 'Female', 'regulusblack1200@gmail.com', '738aa8d3bc02eb8712acd0eb2cf6dfd5', '2020-12-10', 'new york', 'new york', 2137483647, 'Tax Payer', 1, 0, '2020-12-14 12:34:00.400737', '0000-00-00 00:00:00.000000', 0),
(66, 'Light', 'Yagami', 'Male', 'demo@jkl.com', '7a61721ed4832664aa3ce8e2234dcdb4', '2020-12-09', 'Japan', 'Japan', 2147483645, 'Accountant', 1, 0, '2020-12-14 12:35:48.029773', '0000-00-00 00:00:00.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tax_form`
--

CREATE TABLE `tax_form` (
  `userid` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pannumber` int(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `fixedincome` int(250) NOT NULL,
  `otherincome` int(250) NOT NULL,
  `noofresidents` int(15) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `amt` int(10) NOT NULL,
  `words` text NOT NULL,
  `sign` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `keyw` varchar(250) NOT NULL,
  `verification` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_form`
--

INSERT INTO `tax_form` (`userid`, `name`, `pannumber`, `address`, `city`, `state`, `zip`, `contactnumber`, `email`, `fromdate`, `todate`, `fixedincome`, `otherincome`, `noofresidents`, `name1`, `name2`, `work`, `amt`, `words`, `sign`, `place`, `date`, `keyw`, `verification`) VALUES
(52, 'Reema', 563412, 'mumbai', 'mumbai', 'maharashtra', '436283', 2147483647, 'abigael.kumar12@gmail.com', '2020-12-15', '2020-12-26', 12090, 14000, 0, 'Reema', 'Mahendra', 'clerk', 12000, 'asdfcx', 'reema', 'mumbai', '2020-12-17', '69863094dc', 0),
(62, 'Luna ', 673258741, 'Hogwarts', 'Hogsmeade', 'London', '148324', 2147483647, 'demo@abc.com', '2020-12-24', '2020-12-18', 12993, 12637, 1, 'Luna', 'Xenophilius', 'clerk', 12000, 'twelve thousand', 'Luna', 'Hogwarts', '2020-12-14', '67ffe550e9', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_page`
--
ALTER TABLE `signup_page`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup_page`
--
ALTER TABLE `signup_page`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
