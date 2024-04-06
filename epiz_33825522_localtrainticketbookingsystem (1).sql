-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql200.byetcluster.com
-- Generation Time: Mar 25, 2023 at 12:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33825522_localtrainticketbookingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `No.` int(15) NOT NULL,
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `class` int(5) NOT NULL,
  `type` int(5) NOT NULL,
  `Price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`No.`, `source`, `dest`, `class`, `type`, `Price`) VALUES
(1, 'Wimco Nagar', 'Wimco Nagar', 2, 0, 0),
(2, 'Wimco Nagar', 'Chennai Suburban Terminal', 2, 1, 5),
(3, 'Wimco Nagar', 'Tiruvottiyur', 2, 1, 5),
(4, 'Wimco Nagar', 'V.O.C Nagar', 2, 1, 5),
(5, 'Wimco Nagar', 'Tondiarpet', 2, 1, 5),
(6, 'Wimco Nagar', 'Korukkupet', 2, 1, 5),
(7, 'Wimco Nagar', 'Basin Bridge Junction', 2, 1, 5),
(8, 'Wimco Nagar', 'Wimco Nagar', 1, 1, 0),
(9, 'Wimco Nagar', 'Tiruvottiyur', 1, 1, 25),
(10, 'Wimco Nagar', 'V.O.C Nagar', 1, 1, 25),
(11, 'Wimco Nagar', 'Tondiarpet', 1, 1, 25),
(12, 'Wimco Nagar', 'Korukkupet', 1, 1, 25),
(13, 'Wimco Nagar', 'Basin Bridge Junction', 1, 1, 25),
(14, 'Wimco Nagar', 'Chennai Suburban Terminal', 1, 1, 35),
(15, 'Tiruvottiyur', 'Wimco Nagar', 2, 1, 5),
(16, 'Tiruvottiyur', 'Tiruvottiyur', 2, 1, 0),
(17, 'Tiruvottiyur', 'V.O.C Nagar', 2, 1, 5),
(18, 'Tiruvottiyur', 'Tondiarpet', 2, 1, 5),
(19, 'Tiruvottiyur', 'Korukkupet', 2, 1, 5),
(20, 'Tiruvottiyur', 'Basin Bridge Junction', 2, 1, 5),
(21, 'Tiruvottiyur', 'Chennai Suburban Terminal', 2, 1, 5),
(22, 'Tiruvottiyur', 'Wimco Nagar', 1, 1, 25),
(23, 'Tiruvottiyur', 'Tiruvottiyur', 1, 1, 0),
(24, 'Tiruvottiyur', 'V.O.C Nagar', 1, 1, 25),
(25, 'Tiruvottiyur', 'Tondiarpet', 1, 1, 25),
(26, 'Tiruvottiyur', 'Korukkupet', 1, 1, 25),
(27, 'Tiruvottiyur', 'Basin Bridge Junction', 1, 1, 25),
(28, 'Tiruvottiyur', 'Chennai Suburban Terminal', 1, 1, 25),
(29, 'V.O.C Nagar', 'Wimco Nagar', 2, 1, 5),
(30, 'V.O.C Nagar', 'Tiruvottiyur', 2, 1, 5),
(31, 'V.O.C Nagar', 'V.O.C Nagar', 2, 1, 0),
(32, 'V.O.C Nagar', 'Tondiarpet', 2, 1, 5),
(33, 'V.O.C Nagar', 'Korukkupet', 2, 1, 5),
(34, 'V.O.C Nagar', 'Basin Bridge Junction', 2, 1, 5),
(35, 'V.O.C Nagar', 'Chennai Suburban Terminal', 2, 1, 5),
(36, 'V.O.C Nagar', 'Wimco Nagar', 1, 1, 25),
(37, 'V.O.C Nagar', 'Tiruvottiyur', 1, 1, 25),
(38, 'V.O.C Nagar', 'V.O.C Nagar', 1, 1, 0),
(39, 'V.O.C Nagar', 'Tondiarpet', 1, 1, 25),
(40, 'V.O.C Nagar', 'Korukkupet', 1, 1, 25),
(41, 'V.O.C Nagar', 'Basin Bridge Junction', 1, 1, 25),
(42, 'V.O.C Nagar', 'Chennai Suburban Terminal', 1, 1, 25),
(43, 'Tondiarpet', 'Wimco Nagar', 2, 1, 5),
(44, 'Tondiarpet', 'Tiruvottiyur', 2, 1, 5),
(45, 'Tondiarpet', 'V.O.C Nagar', 2, 1, 5),
(46, 'Tondiarpet', 'Tondiarpet', 2, 1, 0),
(47, 'Tondiarpet', 'Korukkupet', 2, 1, 5),
(48, 'Tondiarpet', 'Basin Bridge Junction', 2, 1, 5),
(49, 'Tondiarpet', 'Chennai Suburban Terminal', 2, 1, 5),
(50, 'Tondiarpet', 'Wimco Nagar', 1, 1, 25),
(51, 'Tondiarpet', 'Tiruvottiyur', 1, 1, 25),
(52, 'Tondiarpet', 'V.O.C Nagar', 1, 1, 25),
(53, 'Tondiarpet', 'Tondiarpet', 1, 1, 0),
(54, 'Tondiarpet', 'Korukkupet', 1, 1, 25),
(55, 'Tondiarpet', 'Basin Bridge Junction', 1, 1, 25),
(56, 'Tondiarpet', 'Chennai Suburban Terminal', 1, 1, 25),
(57, 'Korukkupet', 'Wimco Nagar', 2, 1, 5),
(58, 'Korukkupet', 'Tiruvottiyur', 2, 1, 5),
(59, 'Korukkupet', 'V.O.C Nagar', 2, 1, 5),
(60, 'Korukkupet', 'Tondiarpet', 2, 1, 5),
(61, 'Korukkupet', 'Korukkupet', 2, 1, 0),
(62, 'Korukkupet', 'Basin Bridge Junction', 2, 1, 5),
(63, 'Korukkupet', 'Chennai Suburban Terminal', 2, 1, 5),
(64, 'Korukkupet', 'Wimco Nagar', 1, 1, 25),
(65, 'Korukkupet', 'Tiruvottiyur', 1, 1, 25),
(66, 'Korukkupet', 'V.O.C Nagar', 1, 1, 25),
(67, 'Korukkupet', 'Tondiarpet', 1, 1, 25),
(68, 'Korukkupet', 'Korukkupet', 1, 1, 0),
(69, 'Korukkupet', 'Basin Bridge Junction', 1, 1, 25),
(70, 'Korukkupet', 'Chennai Suburban Terminal', 1, 1, 25),
(71, 'Basin Bridge Junction', 'Wimco Nagar', 2, 1, 5),
(72, 'Basin Bridge Junction', 'Tiruvottiyur', 2, 1, 5),
(73, 'Basin Bridge Junction', 'V.O.C Nagar', 2, 1, 5),
(74, 'Basin Bridge Junction', 'Tondiarpet', 2, 1, 5),
(75, 'Basin Bridge Junction', 'Korukkupet', 2, 1, 5),
(76, 'Basin Bridge Junction', 'Basin Bridge Junction', 2, 1, 0),
(77, 'Basin Bridge Junction', 'Chennai Suburban Terminal', 2, 1, 5),
(78, 'Basin Bridge Junction', 'Wimco Nagar', 1, 1, 25),
(79, 'Basin Bridge Junction', 'Tiruvottiyur', 1, 1, 25),
(80, 'Basin Bridge Junction', 'V.O.C Nagar', 1, 1, 25),
(81, 'Basin Bridge Junction', 'Tondiarpet', 1, 1, 25),
(82, 'Basin Bridge Junction', 'Korukkupet', 1, 1, 25),
(83, 'Basin Bridge Junction', 'Basin Bridge Junction', 1, 1, 0),
(84, 'Basin Bridge Junction', 'Chennai Suburban Terminal', 1, 1, 25),
(85, 'Chennai Suburban Terminal', 'Wimco Nagar', 2, 1, 5),
(86, 'Chennai Suburban Terminal', 'Tiruvottiyur', 2, 1, 5),
(87, 'Chennai Suburban Terminal', 'V.O.C Nagar', 2, 1, 5),
(88, 'Chennai Suburban Terminal', 'Tondiarpet', 2, 1, 5),
(89, 'Chennai Suburban Terminal', 'Korukkupet', 2, 1, 5),
(90, 'Chennai Suburban Terminal', 'Basin Bridge Junction', 2, 1, 5),
(91, 'Chennai Suburban Terminal', 'Chennai Suburban Terminal', 2, 1, 0),
(92, 'Chennai Suburban Terminal', 'Wimco Nagar', 1, 1, 35),
(93, 'Chennai Suburban Terminal', 'Tiruvottiyur', 1, 1, 25),
(94, 'Chennai Suburban Terminal', 'V.O.C Nagar', 1, 1, 25),
(95, 'Chennai Suburban Terminal', 'Tondiarpet', 1, 1, 25),
(96, 'Chennai Suburban Terminal', 'Korukkupet', 1, 1, 25),
(97, 'Chennai Suburban Terminal', 'Basin Bridge JunctionChennai Suburban Terminal', 1, 1, 25),
(98, 'Chennai Suburban Terminal', 'Chennai Suburban Terminal', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `T_No.` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Class` int(30) NOT NULL,
  `Type` int(30) NOT NULL,
  `NoOfpass` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`T_No.`, `email`, `source`, `dest`, `name`, `Class`, `Type`, `NoOfpass`, `number`, `Timestamp`, `Amt`) VALUES
(277, 'iamprasath15@gmail.com', 'Wimco Nagar', 'Tondiarpet', '', 1, 1, 0, 0, '2023-03-21 11:48:25', 25),
(279, 'iamprasath15@gmail.com', 'Wimco Nagar', 'Chennai Suburban Terminal', '', 2, 2, 0, 0, '2023-03-21 18:32:22', 20),
(280, 'sandhya488495@gmail.com', 'Wimco Nagar', 'Chennai Suburban Terminal', '', 2, 2, 0, 0, '2023-03-25 08:39:46', 10);

-- --------------------------------------------------------

--
-- Table structure for table `userdatabase`
--

CREATE TABLE `userdatabase` (
  `UserID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdatabase`
--

INSERT INTO `userdatabase` (`UserID`, `Name`, `Email`, `Gender`, `password`, `DoB`, `Joined_on`) VALUES
(1, 'admin', 'prasath@gmail.com', 'M', 'q1w2e3r4/', '1986-06-06', '2019-01-26 19:15:22'),
(2, 'prasath', 'iamprasath15@gmail.com', 'M', '12345', '2002-07-15', '2023-03-01 14:42:06'),
(3, 'suman', 'suman@gmail.com', 'M', '12345', '2002-10-24', '2023-03-05 14:14:24'),
(4, 'kamesh', 'iamkamesh07@gmail.com', 'M', '12345', '2004-06-07', '2023-03-04 14:54:11'),
(5, 'varun', 'varun@gmail.com', 'M', '12345', '2002-10-24', '2023-03-01 16:33:22'),
(6, 'venkat', 'venkat@gmail.com', 'M', '12345', '2002-07-15', '2023-03-15 16:15:10'),
(7, 'SANDHYA R', 'sandhya488495@gmail.com', '', 'train', '0000-00-00', '2023-03-25 08:35:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`No.`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`T_No.`);

--
-- Indexes for table `userdatabase`
--
ALTER TABLE `userdatabase`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `No.` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `T_No.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `userdatabase`
--
ALTER TABLE `userdatabase`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
