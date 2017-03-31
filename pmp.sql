-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 04:28 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`uid`, `cid`, `cname`) VALUES
(1, 1, 'Social');

-- --------------------------------------------------------

--
-- Table structure for table `portal`
--

CREATE TABLE `portal` (
  `sid` int(11) NOT NULL,
  `uid` int(20) NOT NULL,
  `cid` int(11) NOT NULL,
  `service` text NOT NULL,
  `domain` varchar(50) DEFAULT NULL,
  `susername` varchar(20) NOT NULL,
  `spass` varchar(20) NOT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table to store passwords';

--
-- Dumping data for table `portal`
--

INSERT INTO `portal` (`sid`, `uid`, `cid`, `service`, `domain`, `susername`, `spass`, `note`) VALUES
(1, 1, 1, 'facebook.com', 'facebook.com', 'username', 'password', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL COMMENT 'primary key',
  `uname` varchar(20) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `pwd`, `name`, `email`) VALUES
(1, 'lol', 'lol', 'lol', 'lol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`uid`,`cid`),
  ADD UNIQUE KEY `uid` (`uid`,`cid`);

--
-- Indexes for table `portal`
--
ALTER TABLE `portal`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portal`
--
ALTER TABLE `portal`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
