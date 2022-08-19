-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 12:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chapel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `userID` int(11) NOT NULL,
  `userEmail` varchar(500) DEFAULT NULL,
  `userIp` varbinary(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `country` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `Id` int(11) NOT NULL,
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL,
  `post` varchar(50) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`Id`, `first_name`, `last_name`, `post`, `password`, `gender`, `email`, `address`) VALUES
(1, 'Olumide', 'Adeshina', 'Chaplain', '12345', 'male', 'chaplain@gmail.com', '123, omo, ota, ogun state');

-- --------------------------------------------------------

--
-- Table structure for table `fingerprint_reg`
--

CREATE TABLE `fingerprint_reg` (
  `Id` int(11) NOT NULL,
  `fingerprint` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fingerprint_reg`
--

INSERT INTO `fingerprint_reg` (`Id`, `fingerprint`) VALUES
(1, 0x236664616633343332346566333433),
(2, 0x25336564723334323372727434353435336473);

-- --------------------------------------------------------

--
-- Table structure for table `seat_no`
--

CREATE TABLE `seat_no` (
  `Id` int(11) NOT NULL,
  `full_name` varchar(500) DEFAULT NULL,
  `matric_no` varchar(500) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `level` varchar(800) DEFAULT NULL,
  `semester` varchar(800) DEFAULT NULL,
  `session` varchar(500) DEFAULT NULL,
  `group_no` varchar(500) DEFAULT NULL,
  `seat_number` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `Id` int(11) NOT NULL,
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL,
  `other_names` varchar(500) DEFAULT NULL,
  `matric_no` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` varchar(800) DEFAULT NULL,
  `semester` varchar(500) DEFAULT NULL,
  `session` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`Id`, `first_name`, `last_name`, `other_names`, `matric_no`, `password`, `gender`, `email`, `address`, `level`, `semester`, `session`) VALUES
(1, 'Merit', 'Mohammed', 'Ayomide', '20010301038', '12345', 'male', 'cussmeritmohammed@gmail.com', '26, ota ogun state, Nigeria', '300', 'Second', '2021/2022');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `userId` int(11) NOT NULL,
  `userEmail` varchar(500) DEFAULT NULL,
  `userIp` varbinary(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `country` varchar(500) DEFAULT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`userId`, `userEmail`, `userIp`, `city`, `country`, `login_time`) VALUES
(1, 'cussmeritmohammed@gmail.com', 0x3a3a31, '', '', '2022-08-16 21:57:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fingerprint_reg`
--
ALTER TABLE `fingerprint_reg`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `seat_no`
--
ALTER TABLE `seat_no`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fingerprint_reg`
--
ALTER TABLE `fingerprint_reg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seat_no`
--
ALTER TABLE `seat_no`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
