-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2016 at 07:41 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `botcards`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

DROP TABLE IF EXISTS `collections`;
CREATE TABLE IF NOT EXISTS `collections` (
  `Token` varchar(6) DEFAULT NULL,
  `Piece` varchar(6) DEFAULT NULL,
  `Player` varchar(32) DEFAULT NULL,
  `Datetime` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` VALUES
-- ('Token', 'Piece', 'Player', 'Datetime'),
('115531', '13c-2', 'Mickey', '2016.02.01-09:01:00'),
('1208C0', '13c-2', 'Donald', '2016.02.01-09:01:02'),
('14B502', '11a-0', 'Donald', '2016.02.01-09:01:04'),
('114055', '11a-1', 'Mickey', '2016.02.01-09:01:06'),
('10F6DB', '26h-0', 'Henry', '2016.02.01-09:01:08'),
('13F60F', '11b-2', 'George', '2016.02.01-09:01:10'),
('1AABC2', '11b-0', 'Mickey', '2016.02.01-09:01:12'),
('151019', '26h-2', 'Donald', '2016.02.01-09:01:14'),
('10FC99', '13d-2', 'Henry', '2016.02.01-09:01:16'),
('168DE6', '26h-1', 'Donald', '2016.02.01-09:01:18'),
('10EF59', '13d-0', 'Donald', '2016.02.01-09:01:20'),
('152E5E', '13c-2', 'George', '2016.02.01-09:01:22'),
('1436F0', '26h-1', 'Mickey', '2016.02.01-09:01:24'),
('15B752', '11a-0', 'Donald', '2016.02.01-09:01:26'),
('1B8F72', '13c-1', 'Donald', '2016.02.01-09:01:28'),
('196AF0', '26h-0', 'Donald', '2016.02.01-09:01:30'),
('1DB187', '13d-2', 'Henry', '2016.02.01-09:01:32'),
('1AAB28', '26h-2', 'Donald', '2016.02.01-09:01:34'),
('191B88', '11b-1', 'Donald', '2016.02.01-09:01:36'),
('1CBB54', '11c-1', 'George', '2016.02.01-09:01:38'),
('18E184', '26h-2', 'Henry', '2016.02.01-09:01:40'),
('15E878', '13d-0', 'Donald', '2016.02.01-09:01:42'),
('1E23AE', '13c-1', 'Donald', '2016.02.01-09:01:44'),
('16796E', '26h-0', 'Mickey', '2016.02.01-09:01:46'),
('175BB1', '13c-1', 'George', '2016.02.01-09:01:48'),
('1020AC', '26h-2', 'Henry', '2016.02.01-09:01:50'),
('16BBE5', '13d-1', 'Donald', '2016.02.01-09:01:52'),
('1C1FF1', '26h-2', 'Mickey', '2016.02.01-09:01:54'),
('142097', '13c-1', 'George', '2016.02.01-09:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `Player` varchar(32) DEFAULT NULL,
  `Peanuts` varchar(7) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL,
  `Role` varchar(10) DEFAULT NULL,
  `Avatar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` VALUES
-- ('Player', 'Peanuts', 'Password', 'Avatar'),
('Mickey', '200', 'password','user', 'file.png'),
('Donald', '35', 'password','user', 'file.png'),
('George', '500', 'password','user', 'file.png'),
('Henry', '100', 'password','user', 'file.png');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
CREATE TABLE IF NOT EXISTS `series` (
  `Series` varchar(6) DEFAULT NULL,
  `Description` varchar(16) DEFAULT NULL,
  `Frequency` varchar(9) DEFAULT NULL,
  `Value` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series`
--

INSERT INTO `series` VALUES
-- ('Series', 'Description', 'Frequency', 'Value'),
('11', 'Basic house bots', '100', '20'),
('13', 'House butlers', '50', '50'),
('26', 'Home companions', '20', '200');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `DateTime` varchar(19) DEFAULT NULL,
  `Player` varchar(32) DEFAULT NULL,
  `Series` varchar(6) DEFAULT NULL,
  `Trans` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` VALUES
-- ('DateTime', 'Player', 'Series', 'Trans'),
('2016.02.01-09:01:00', 'Henry', '11', 'sell'),
('2016.02.01-09:01:05', 'George', 'x', 'buy'),
('2016.02.01-09:01:10', 'Mickey', 'x', 'buy'),
('2016.02.01-09:01:15', 'George', '13', 'sell'),
('2016.02.01-09:01:20', 'Henry', 'x', 'buy'),
('2016.02.01-09:01:25', 'Mickey', 'x', 'buy'),
('2016.02.01-09:01:30', 'Mickey', 'x', 'buy'),
('2016.02.01-09:01:35', 'Henry', 'x', 'buy'),
('2016.02.01-09:01:40', 'Henry', 'x', 'buy'),
('2016.02.01-09:01:45', 'Henry', '22', 'sell'),
('2016.02.01-09:01:50', 'Mickey', '11', 'sell'),
('2016.02.01-09:01:55', 'George', '#NAME?', 'buy'),
('2016.02.01-09:01:60', 'George', '#NAME?', 'buy');

DROP TABLE IF EXISTS `cards`;
CREATE TABLE IF NOT EXISTS `cards` (
  `Card` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `cards` VALUES
-- ('Card'),
('11a-0'),
('11a-1'),
('11a-2'),
('11b-0'),
('11b-1'),
('11b-2'),
('11c-0'),
('11c-1'),
('11c-2'),
('11d-0'),
('11d-1'),
('11d-2'),
('11e-0'),
('11e-1'),
('11e-2'),
('13a-0'),
('13a-1'),
('13a-2'),
('13b-0'),
('13b-1'),
('13b-2'),
('13c-0'),
('13c-1'),
('13c-2'),
('13d-0'),
('13d-1'),
('13d-2'),
('26a-0'),
('26a-1'),
('26a-2'),
('26b-0'),
('26b-1'),
('26b-2'),
('26h-0'),
('26h-1'),
('26h-2')
;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
