-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2024 at 10:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shrey`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `bid` int(11) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`bid`, `blood_type`, `quantity`) VALUES
(1, 'a+', 199),
(2, 'b+', 700),
(3, 'ab+', 600),
(4, 'b-', 600),
(5, 'ab-', 600),
(6, 'a-', 400),
(7, 'o+', 400),
(8, 'o-', 450);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `did` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `dquantity` varchar(20) NOT NULL,
  `ddate` date NOT NULL,
  `hid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`did`, `age`, `name`, `blood_type`, `sex`, `contact`, `dquantity`, `ddate`, `hid`) VALUES
(1, 19, 'shrey', 'b+', 'male', '8871009875', '200', '2017-08-08', 11),
(2, 19, 'muku', 'b+', 'male', '7894561232', '200', '2017-08-13', 12),
(3, 22, 'pradyumna', 'o+', 'male', '1234645678', '300', '2017-08-16', 11),
(4, 21, 'mkesh', 'b-', 'male', '1234567894', '300', '2017-08-08', 11),
(5, 19, 'shrey garg', 'b+', 'male', '8871009875', '300', '2017-08-08', 12),
(6, 20, 'mahesh', 'o-', 'male', '1234567898', '450', '2017-08-16', 11),
(7, 21, 'S Lalith Prasad', 'ab-', 'male', '9876756511', '200', '2017-08-14', 11),
(8, 20, 'khushal', 'ab+', 'male', '1234567895', '400', '2017-08-09', 11),
(9, 20, 'suyesh', 'o+', 'male', '9898989898', '300', '2017-08-11', 11),
(10, 19, 'abhi', 'a-', 'male', '1234567898', '400', '2017-08-08', 11),
(11, 21, 'meena', 'b-', 'female', '1234567895', '300', '2017-08-09', 11),
(12, 20, 'naagrik', 'ab-', 'male', '1212564512', '400', '2017-08-08', 11),
(13, 19, 'mukesh', 'ab+', 'male', '1212564512', '300', '2017-08-20', 11),
(17, 18, 'lila', 'a+', 'female', '8871899875', '499', '2017-08-10', 11),
(18, 21, 'aftab', 'a+', 'male', '8585858585', '400', '2017-08-09', 11);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `name`, `email`, `password`, `telephone`) VALUES
(11, 'srm', 'srm@srm.com', 'srm', '044-2702702'),
(12, 'lilavati', 'lilavati@lilavati.com', 'lilavati', '2271009876'),
(16, 'nata', 'nata@nata.com', 'nata', '9898989898');

-- --------------------------------------------------------

--
-- Table structure for table `mainadmin`
--

CREATE TABLE `mainadmin` (
  `aid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mainadmin`
--

INSERT INTO `mainadmin` (`aid`, `name`, `password`) VALUES
(10, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `reciever`
--

CREATE TABLE `reciever` (
  `rid` int(11) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `blood_type` varchar(10) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `rdate` date DEFAULT NULL,
  `hid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reciever`
--

INSERT INTO `reciever` (`rid`, `age`, `name`, `blood_type`, `sex`, `contact`, `quantity`, `rdate`, `hid`) VALUES
(2, 10, 'boss', 'a+', 'male', '8998374732', 100, '2017-10-03', 11),
(3, 73, 'lala', 'ab+', 'male', '5647891235', 100, '2017-10-02', 11),
(4, 17, 'kushal', 'a+', 'male', '4561237895', 200, '2017-10-02', 12),
(5, 12, 'shrey', 'a+', 'male', '9999999999', 400, '2017-10-02', 11),
(6, 22, 'Shrey', 'o+', 'male', '8871009875', 200, '2024-10-30', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `blood_type` (`blood_type`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `mainadmin`
--
ALTER TABLE `mainadmin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `reciever`
--
ALTER TABLE `reciever`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mainadmin`
--
ALTER TABLE `mainadmin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reciever`
--
ALTER TABLE `reciever`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
