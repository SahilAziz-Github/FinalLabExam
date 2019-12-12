-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 05:16 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`FName`, `LName`, `Username`, `Phone`, `Email`, `Password`, `Status`) VALUES
('zabir', 'zabir', 'zabir', '01111111111', 'zabir@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
('zabir', 'zabir', 'zabir', '01999999999', 'zabir@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
('saki', 'sadman', 'saki', '01987643211', 'saki@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'yes'),
('ashraful', 'islam', 'asraf', '01111111111', 'ashraf@gmail.com', '12345', 'yes'),
('priya', 'roy', 'priya', '01919191919', 'pri@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserName`, `Password`, `Usertype`) VALUES
('zabir', '12345', 'employee'),
('sahil', '12345', 'admin'),
('sahil', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
('zabir', '827ccb0eea8a706c4c34a16891f84e7b', 'employee'),
(' saki ', ' 827ccb0eea8a706c4c34a16891f84e7b ', ' employee '),
(' priya ', ' 827ccb0eea8a706c4c34a16891f84e7b ', ' user ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
