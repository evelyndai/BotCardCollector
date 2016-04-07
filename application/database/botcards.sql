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
  `COL 1` varchar(6) DEFAULT NULL,
  `COL 2` varchar(5) DEFAULT NULL,
  `COL 3` varchar(6) DEFAULT NULL,
  `COL 4` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`COL 1`, `COL 2`, `COL 3`, `COL 4`) VALUES
('Token', 'Piece', 'Player', 'Datetime'),
('115531', '13-2', 'Mickey', '2016.02.01-09:01:00'),
('1208C0', '13-2', 'Donald', '2016.02.01-09:01:02'),
('14B502', '11-0', 'Donald', '2016.02.01-09:01:04'),
('114055', '11-1', 'Mickey', '2016.02.01-09:01:06'),
('10F6DB', '26-0', 'Henry', '2016.02.01-09:01:08'),
('13F60F', '11-2', 'George', '2016.02.01-09:01:10'),
('1AABC2', '11-0', 'Mickey', '2016.02.01-09:01:12'),
('151019', '26-2', 'Donald', '2016.02.01-09:01:14'),
('10FC99', '13-2', 'Henry', '2016.02.01-09:01:16'),
('168DE6', '26-1', 'Donald', '2016.02.01-09:01:18'),
('10EF59', '13-0', 'Donald', '2016.02.01-09:01:20'),
('152E5E', '13-2', 'George', '2016.02.01-09:01:22'),
('1436F0', '26-1', 'Mickey', '2016.02.01-09:01:24'),
('15B752', '11-0', 'Donald', '2016.02.01-09:01:26'),
('1B8F72', '13-1', 'Donald', '2016.02.01-09:01:28'),
('196AF0', '26-0', 'Donald', '2016.02.01-09:01:30'),
('1DB187', '13-2', 'Henry', '2016.02.01-09:01:32'),
('1AAB28', '26-2', 'Donald', '2016.02.01-09:01:34'),
('191B88', '11-1', 'Donald', '2016.02.01-09:01:36'),
('1CBB54', '11-1', 'George', '2016.02.01-09:01:38'),
('18E184', '26-2', 'Henry', '2016.02.01-09:01:40'),
('15E878', '13-0', 'Donald', '2016.02.01-09:01:42'),
('1E23AE', '13-1', 'Donald', '2016.02.01-09:01:44'),
('16796E', '26-0', 'Mickey', '2016.02.01-09:01:46'),
('175BB1', '13-1', 'George', '2016.02.01-09:01:48'),
('1020AC', '26-2', 'Henry', '2016.02.01-09:01:50'),
('16BBE5', '13-1', 'Donald', '2016.02.01-09:01:52'),
('1C1FF1', '26-2', 'Mickey', '2016.02.01-09:01:54'),
('142097', '13-1', 'George', '2016.02.01-09:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `COL 1` varchar(6) DEFAULT NULL,
  `COL 2` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`COL 1`, `COL 2`) VALUES
('Player', 'Peanuts'),
('Mickey', '200'),
('Donald', '35'),
('George', '500'),
('Henry', '100');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
CREATE TABLE IF NOT EXISTS `series` (
  `COL 1` varchar(6) DEFAULT NULL,
  `COL 2` varchar(16) DEFAULT NULL,
  `COL 3` varchar(9) DEFAULT NULL,
  `COL 4` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`COL 1`, `COL 2`, `COL 3`, `COL 4`) VALUES
('Series', 'Descriptiom', 'Frequency', 'Value'),
('11', 'Basic house bots', '100', '20'),
('13', 'House butlers', '50', '50'),
('26', 'Home companions', '20', '200');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `COL 1` varchar(19) DEFAULT NULL,
  `COL 2` varchar(6) DEFAULT NULL,
  `COL 3` varchar(6) DEFAULT NULL,
  `COL 4` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`COL 1`, `COL 2`, `COL 3`, `COL 4`) VALUES
('DateTime', 'Player', 'Series', 'Trans'),
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
