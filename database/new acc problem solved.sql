-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2020 at 08:18 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deon`
--

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

DROP TABLE IF EXISTS `passwords`;
CREATE TABLE IF NOT EXISTS `passwords` (
  `ID` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`ID`, `password`) VALUES
('12121212', '111'),
('123456789v', '111'),
('4444444444V', '111'),
('971650834V', '12'),
('111111', '45'),
('787878', '1221'),
('456456', '121212'),
('78787878', '122112'),
('987654321', '111'),
('5959', '59');

-- --------------------------------------------------------

--
-- Table structure for table `requestslist`
--

DROP TABLE IF EXISTS `requestslist`;
CREATE TABLE IF NOT EXISTS `requestslist` (
  `requestNo` int(20) NOT NULL,
  `requestId` int(10) NOT NULL,
  `userId` varchar(12) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'new',
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`requestNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requesttypes`
--

DROP TABLE IF EXISTS `requesttypes`;
CREATE TABLE IF NOT EXISTS `requesttypes` (
  `requestId` int(10) NOT NULL,
  `principal` tinyint(1) DEFAULT NULL,
  `teacher` tinyint(1) DEFAULT NULL,
  `staff` tinyint(1) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`requestId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE IF NOT EXISTS `userdetails` (
  `ID` varchar(12) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `school` varchar(100) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`ID`, `first_name`, `second_name`, `address`, `telephone`, `email`, `school`, `occupation`) VALUES
('971650834V', 'theekshana', 'madumal', 'nikaweratiya', '773137660', 'theekshana.18@cse.mrt.ac.lk', 'ST annes collage', 'teacher'),
('4444444444V', 'saman', 'silva', 'padaviya', '773137660', 'theekshanamadumal@gmail.com', 'ST annes collage', 'teacher'),
('123456789v', 'm', 'n', 'nm', '773137660', 'theekshana.1@cse.mrt.ac.lk', 'ST annes collage', 'teacher'),
('111111', 'h', '', 'j', '456', 'ghfhf', 'ghfhgfh', 'Principal'),
('444444', 'df', 'fd', 'dfdf', '565656', 'hgfhfh', 'sfddfsfd', 'teacher'),
('787878', 'q', '', 'dddd', '78888', 'qwqwqw', 'wqwqwq', 'teacher'),
('456456', '', '', '', '45454545', '', '', 'teacher'),
('78787878', '', '', '', '87878787', '', '', 'teacher'),
('111222', '', '', '', '222111', '', '', 'teacher'),
('987654321', 'sadun', 'gimhan', 'unagolla', '', '', 'unagolla MMV', 'teacher');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
