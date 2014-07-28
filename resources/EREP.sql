-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2014 at 03:28 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erep`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(33) NOT NULL,
  `group_password` varchar(33) NOT NULL,
  `member_points` varchar(11) NOT NULL DEFAULT '0',
  `VIP` int(11) NOT NULL DEFAULT '0',
  `owner_id` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `group_password`, `member_points`, `VIP`, `owner_id`) VALUES
(1, 'testgroup', 'ab898bd3f17a66654ff3ed4458e81a2b', '0', 0, '16'),
(2, 'testgroup2', 'ab898bd3f17a66654ff3ed4458e81a2b', '0', 0, '16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `VIP` int(11) NOT NULL DEFAULT '0',
  `email` varchar(33) NOT NULL,
  `group1` varchar(33) NOT NULL,
  `group2` varchar(33) NOT NULL,
  `group3` varchar(33) NOT NULL,
  `group4` varchar(33) NOT NULL,
  `group5` varchar(33) NOT NULL,
  `group6` varchar(33) NOT NULL,
  `group7` varchar(33) NOT NULL,
  `group8` varchar(33) NOT NULL,
  `group9` varchar(33) NOT NULL,
  `group10` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `VIP`, `email`, `group1`, `group2`, `group3`, `group4`, `group5`, `group6`, `group7`, `group8`, `group9`, `group10`) VALUES
(16, 'krikus62', 'ab898bd3f17a66654ff3ed4458e81a2b', 0, 'krikus6@inbox.lv', '2', '1', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
