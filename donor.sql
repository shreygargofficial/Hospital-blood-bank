-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 09:01 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
