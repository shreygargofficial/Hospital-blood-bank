-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 09:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reciever`
--

INSERT INTO `reciever` (`rid`, `age`, `name`, `blood_type`, `sex`, `contact`, `quantity`, `rdate`, `hid`) VALUES
(2, 10, 'boss', 'a+', 'male', '8998374732', 100, '2017-10-03', 11),
(3, 73, 'lala', 'ab+', 'male', '5647891235', 100, '2017-10-02', 11),
(4, 17, 'kushal', 'a+', 'male', '4561237895', 200, '2017-10-02', 12),
(5, 12, 'shrey', 'a+', 'male', '9999999999', 400, '2017-10-02', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reciever`
--
ALTER TABLE `reciever`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reciever`
--
ALTER TABLE `reciever`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
