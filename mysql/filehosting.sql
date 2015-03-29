-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2015 at 08:27 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`fileid`, `filename`, `path`, `status`, `username`, `gid`) VALUES
(3, '60649.jpg', 'b5d29785b34472212e7d8ecd0bd31a5f.jpg', 0, 'dwisatya', 2),
(4, '11073978_1392549051062402_857399978304737814_n.jpg', '6f6c17174ce2fce94b366158f80ac648.jpg', 1, 'dwisatya', 2),
(5, 'Untitled.png', 'a19ddbe22afc139c538bfca41cea40ad.png', 1, 'dwisatya2', 2),
(6, '20150321_194554.jpg', '43f5f983d810d6cf931722ceb41ecb4d.jpg', 1, 'dwisatya2', 2),
(7, '4224799000.png', '5008b8b1151c438027c12b054d497968.png', 1, 'dwisatya2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
`gid` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `folder` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`gid`, `nama`, `folder`) VALUES
(2, 'pembimbing RA', 'pembimbingra'),
(3, 'Buronan-edit', 'dasdsa'),
(4, 'admin group', 'admin group');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` text NOT NULL,
  `active` int(1) NOT NULL,
  `gid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `active`, `gid`) VALUES
('aryya', '84c29c7a16116c6e549fcafdc4a8fcf1', 'a.dwisaty4@yahoo.com', 1, 1),
('dwisatya', '84c29c7a16116c6e549fcafdc4a8fcf1', 'dwisatya@yahoo.com', 1, 2),
('dwisatya2', '84c29c7a16116c6e549fcafdc4a8fcf1', 'adwisatya@yahoo.com', 1, 2);

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
MODIFY `fileid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
