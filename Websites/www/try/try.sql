-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2013 at 06:02 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `try`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `st` varchar(5) DEFAULT NULL,
  `name_1` varchar(16) DEFAULT NULL,
  `name_2` varchar(16) DEFAULT NULL,
  `name_3` varchar(16) DEFAULT NULL,
  `addr` varchar(64) DEFAULT NULL,
  `city` varchar(24) DEFAULT NULL,
  `state` varchar(24) DEFAULT NULL,
  `ph_no` bigint(11) DEFAULT NULL,
  `id` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`st`, `name_1`, `name_2`, `name_3`, `addr`, `city`, `state`, `ph_no`, `id`, `pwd`, `photo`) VALUES
('Mr.', 'as', 'as', 'as', 'asd', 'as', '', 0, 'ankit@gmail.com', 'sd', 0x5265736f75726365206964202335),
('Mr.', 'Pranay', 'dfg', 'dsfg', 'g', 'dfg', '', 0, 'name@inos.in', '12345', 0x5265736f75726365206964202335);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` varchar(20) DEFAULT NULL,
  `pwd` varchar(16) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `pwd`, `type`) VALUES
('name@inos.in', '123', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
