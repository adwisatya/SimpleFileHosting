-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2015 at 04:59 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `filehosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
`fileid` int(5) NOT NULL,
  `filename` text NOT NULL,
  `path` text NOT NULL,
  `status` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`fileid`, `filename`, `path`, `status`, `username`, `gid`) VALUES
(2, '1..txt', '../files/pembimbingra/008b4d9799a36547adc240c5436e5da5.txt', 1, 'dwisatya2', 2),
(6, '1..txt', '../files/admin/008b4d9799a36547adc240c5436e5da5.txt', 1, 'dwisatya', 1),
(7, '60649.jpg', '../files/admin/b5d29785b34472212e7d8ecd0bd31a5f.jpg', 1, 'dwisatya', 1),
(8, '11073978_1392549051062402_857399978304737814_n.jpg', '../files/admin/6f6c17174ce2fce94b366158f80ac648.jpg', 0, 'dwisatya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
`gid` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `folder` varchar(20) NOT NULL,
  `leader` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`gid`, `nama`, `folder`, `leader`) VALUES
(1, 'admin', 'admin', 'dwisatya'),
(2, 'pembimbing RA', 'pembimbingra', 'dwisatya2'),
(3, 'Buronan-edit', 'dasdsa', ''),
(4, 'admin group', 'admin group', '');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`no` int(10) NOT NULL,
  `action` varchar(5) NOT NULL,
  `actor` varchar(20) NOT NULL,
  `file` text NOT NULL,
  `time` varchar(20) NOT NULL,
  `gid` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`no`, `action`, `actor`, `file`, `time`, `gid`) VALUES
(1, 'Uploa', 'dwisatya', '60649.jpg', '31-03-2015 08:24:44', 0),
(2, 'Uploa', 'dwisatya', '11073978_1392549051062402_857399978304737814_n.jpg', '31-03-2015 08:25:44', 1),
(3, 'Del', 'dwisatya', '11073978_1392549051062402_857399978304737814_n.jpg', '31-03-2015 08:36:34', 1),
(4, 'View', 'dsdsa', 'sfdfs', '31-03-2015 09:06:25', 1),
(5, 'View', 'dsdsa', 'sfdfs', '31-03-2015 09:06:31', 1),
(6, 'VIEW', 'aryya', '1..txt', '01-04-2015 04:55:20', 1),
(7, 'VIEW', 'aryya', '1..txt', '01-04-2015 04:56:48', 1),
(8, 'VIEW', 'aryya', '60649.jpg', '01-04-2015 04:56:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` text NOT NULL,
  `active` int(1) NOT NULL,
  `gid` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `active`, `gid`, `status`) VALUES
('aryya', '84c29c7a16116c6e549fcafdc4a8fcf1', 'a.dwisaty4@yahoo.com', 1, 1, 9),
('dwisatya', '84c29c7a16116c6e549fcafdc4a8fcf1', 'dwisatya@yahoo.com', 1, 1, 1),
('dwisatya2', '84c29c7a16116c6e549fcafdc4a8fcf1', 'adwisatya@yahoo.com', 1, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`fileid`), ADD KEY `gid` (`gid`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
 ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
MODIFY `fileid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `file`
--
ALTER TABLE `file`
ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`gid`) REFERENCES `group` (`gid`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
