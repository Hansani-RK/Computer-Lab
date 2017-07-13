-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 07:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cis_computer_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
  `item_code` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `borrowed_date` date NOT NULL,
  `borrowed_by` varchar(100) NOT NULL,
  `mobile` int(12) NOT NULL,
  `received_date` date NOT NULL,
  `availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`item_code`, `item_name`, `borrowed_date`, `borrowed_by`, `mobile`, `received_date`, `availability`) VALUES
('M01', 'Mouse', '2017-05-31', 'Kasun', 12345, '0000-00-00', 'No'),
('MN01', 'Monitor', '2017-05-31', 'Sandun', 76543, '0000-00-00', 'No'),
('MN01', 'Monitor', '2017-05-31', 'Sandun', 76543, '0000-00-00', 'No'),
('MN01', 'Monitor', '2017-05-31', 'Sandun', 76543, '0000-00-00', 'No'),
('MN01', 'Monitor', '2017-05-31', 'Sandun', 76543, '0000-00-00', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_code` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `added_date` date NOT NULL,
  `availability` varchar(10) NOT NULL,
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_code`, `item_name`, `added_date`, `availability`) VALUES
('', '', '0000-00-00', ''),
('0111', 'pc', '2017-06-13', ''),
('K01', 'Keyboard', '2017-01-01', 'Yes'),
('K02', 'Keyboard', '2017-01-02', 'Yes'),
('K03', 'Keyboard', '2017-01-05', 'No'),
('M01', 'Mouse', '2017-01-03', 'No'),
('M02', 'Mouse', '2017-01-04', 'Yes'),
('MN01', 'Monitor', '2017-06-01', 'Yes'),
('MN02', 'Monitor', '2017-01-08', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE IF NOT EXISTS `repair` (
  `item_code` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `repair_date` date NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `tel` int(12) NOT NULL,
  `cost` int(100) NOT NULL,
  `re_date` date NOT NULL,
  `availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`item_code`, `item_name`, `repair_date`, `company_name`, `tel`, `cost`, `re_date`, `availability`) VALUES
('', '', '0000-00-00', '', 0, 0, '0000-00-00', ''),
('MN01', 'Monitor', '2017-02-25', 'ABC', 12345678, 0, '0000-00-00', 'No'),
('M01', 'Monitor', '2017-02-25', 'ABC', 12345678, 0, '0000-00-00', 'No'),
('M01', 'Mouse', '2017-02-25', 'ABC', 12345678, 0, '0000-00-00', 'No'),
('K03', 'Keyboard', '2017-02-25', 'CAS', 45345325, 0, '0000-00-00', 'No'),
('MN02', 'Monitor', '2017-05-11', 'GHK', 3456, 0, '0000-00-00', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'Hansi', 'hansani@gmail.com', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
