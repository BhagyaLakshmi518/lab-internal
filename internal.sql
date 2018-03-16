-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 12:47 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internal`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam3`
--

CREATE TABLE `exam3` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam3`
--

INSERT INTO `exam3` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES
('sowmya', 'bhimireddy', '', 'sowmya@gmail.com', '123456'),
('', '', '', '', ''),
('rajesh reddy', 'ogirala', '', 'rajeshreddy@gmail.com', '123456'),
('rajesh reddy', 'ogirala', '', 'rajeshreddy@gmail.com', '123456'),
('rajesh reddy', 'ogirala', '', 'rajeshreddy@gmail.com', '123456'),
('rajesh reddy', 'ogirala', '', 'rajeshreddy@gmail.com', '123456'),
('bhagya', 'lakshmi', '', 'bhgya@gmail.com', '123654'),
('bhagya', 'lakshmi', '', 'bhgya@gmail.com', '123654'),
('bhagya', 'lakshmi', '', 'bhgya@gmail.com', '123654'),
('bhagya', 'lakshmi', '', 'bhgya@gmail.com', '123654'),
('bhagya', 'lakshmi', '', 'bhgya@gmail.com', '123654'),
('bhagya', 'lakshmi', '', 'bhagya@gmail.com', 'bhagi123'),
('bhagya', 'lakshmi', '', 'bhagya@gmail.com', 'bhagi123'),
('bhagya', 'lakshmi', '', 'bhagya@gmail.com', 'bhagi123'),
('bhagya', 'lakshmi', '', 'bhagya@gmail.com', 'bhagi123'),
('bhagya', 'lakshmi', '', 'bhagya@gmail.com', 'bhagi123'),
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `ptype` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `range` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
